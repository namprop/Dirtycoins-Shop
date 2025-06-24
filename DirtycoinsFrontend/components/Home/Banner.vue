<template>
  <div class="relative overflow-hidden">

    <div
      class="flex transition-all duration-1000 w-full"
      :style="{ transform: `translateX(-${currentIndex * 100}%)` }"
    >
      <div
        v-for="(item, index) in banner"
        :key="index"
        class="w-full flex-shrink-0"
      >
        <img
          :src="`/img/${item.image}`"
          class="w-full aspect-[16/9] object-cover"
        />
      </div>
    </div>

    <div
      class="flex absolute bottom-2 left-1/2 transform -translate-x-1/2 mt-3 items-center justify-center gap-2"
    >
      <div
        v-for="(item, i) in banner"
        :key="i"
        class="dot-item size-2 rounded-full"
        :class="i === currentIndex ? 'bg-black' : 'bg-gray-400'"
        @click="currentIndex = i"
      ></div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from "vue";

const banner = [
  { image: "anh4.webp" },
  { image: "anh5.webp" },
  { image: "anh6.webp" },
];

const currentIndex = ref(0);


const nextSlide = () => {
  currentIndex.value = (currentIndex.value + 1) % banner.length;
};

onMounted(() => {
  setInterval(nextSlide, 3000);
});
</script>

<style scoped>
.dot-item {
  width: 8px;
  height: 8px;
}
</style>
