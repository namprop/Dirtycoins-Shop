<template>
  <section
    v-show="selectedOptions.length > 0"
    class="max-w-[1200px] flex mx-auto justify-between mt-8 px-4"
  >
    <div>
      <div>
        <h3 class="text-2xl text-blue-500 pb-7">Bạn Chọn</h3>
      </div>
      <div class="flex flex-wrap gap-2 mb-4">
        <div
          v-for="(option, i) in selectedOptions"
          :key="i"
          class="flex items-center bg-blue-500 text-white px-3 py-2 rounded-md text-sm"
        >
          <span>{{ option }}</span>

          <button class="ml-2" @click="removeOption(option)">&times;</button>
        </div>
      </div>
    </div>

    <div class="cursor-pointer text-red-500" @click="$emit('update:selectedOptions', [])">
      Bỏ hết &times;
    </div>
  </section>

  <div
    class="max-w-[1200px] mx-auto flex justify-between mt-6 bb-3 pb-3 border-b-2 px-5 max-md:flex-col gap-4"
  >
    <div class="flex gap-3 md:gap-4">
      <div
        v-for="(item, index) in filterByType"
        :key="index"
        class="flex flex-col relative"
      >
        <h2
          @click="
            chevrionUpDown === index
              ? (chevrionUpDown = null)
              : (chevrionUpDown = index)
          "
          class="text-xl font-semibold cursor-pointer"
        >
          {{ item.nameFilterType }}

          <i class="text-[12px] fas fa-chevron-down"></i>
        </h2>

        <div
          v-if="item.filterOptions"
          v-show="chevrionUpDown === index"
          class="absolute top-8 z-10 w-[200px] border rounded-sm border-gray-400 bg-white"
        >
          <div
            v-for="(option, optionIndex) in item.filterOptions"
            :key="optionIndex"
            class="p-2 border-b last:border-b-0"
          >
            <input
              type="checkbox"
              :id="`option-${index}-${optionIndex}`"
              class="mr-2"
              :value="option"
              :checked="props.selectedOptions.includes(option)"
              @change="
                () => {
                  toggleOption(option);
                  chevrionUpDown = null;
                }
              "
            />
            <!-- @change="chevrionUpDown = null" -->
            <!-- v-model="selectedOptions" -->
            <!-- @change="toggleOption($event, option)" -->
            <label
              :for="`option-${index}-${optionIndex}`"
              class="cursor-pointer"
            >
              {{ option }}
            </label>
          </div>
        </div>
      </div>
    </div>

    <div
      class="border flex w-45 py-2 px-3 justify-between rounded-sm max-w-[580px] max-md:w-full"
    >
      <h2 class="text- xl">Sap Xep</h2>
      <i class="text-[12px] pt-2 fas fa-chevron-down"></i>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";

const chevrionUpDown = ref(null);

const props = defineProps({
  filterByType: {
    type: Array,
    required: true,
  },
  selectedOptions: {
    type: Array,
    required: true,
  },
});
const emit = defineEmits(["update:selectedOptions"]);

const toggleOption = (option) => {
  let updated = [...props.selectedOptions];
  if (updated.includes(option)) {
    updated = updated.filter((o) => o !== option);
  } else {
    updated.push(option);
  }
  emit("update:selectedOptions", updated);
};

const removeOption = (option) => {
  let updated = [...props.selectedOptions];
  updated = updated.filter((o) => o !== option);
  emit("update:selectedOptions", updated); 
};

</script>
