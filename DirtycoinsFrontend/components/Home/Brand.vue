<template>
  <section class="mt-7 container mx-auto justify-center">
    <h1 class="text-3xl font-semibold font-sans text-center p-4">
      THƯƠNG HIỆU
    </h1>

    <div class="w-full max-sm:gap-2 gap-6 flex justify-center mt-5 mx-5">
      <div v-for="(brand, index) in Brands" :key="index" class="w-[250px]">
        <img :src="`img/${brand.image}`" alt="" class="w-full h-auto" />
      </div>
    </div>
  </section>
</template>

<script setup>

defineProps({
  Brands: {
    type: Array,
    required: true,
  },
});
</script>
