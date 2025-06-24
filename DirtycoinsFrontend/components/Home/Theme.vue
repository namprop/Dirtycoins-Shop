<template>
  <section class="mt-10 bg-white">
    <div
      class="container mx-auto flex flex-wrap justify-center gap-10 px-3 py-8"
    >
      <div
      v-for="(theme, index) in themes"
      :key="index"
        class="w-full sm:w-[45%] text-center">
        <img
          :src="`/img/${theme.image}`"
          class="w-full max-w-[360px] sm:max-w-[510px] mx-auto aspect-[3/4] object-cover"
          alt=""
        />
      </div>

    </div>
  </section>
</template>

<script setup>
const themes = [
  {
    image: "imgtheme1.webp",
  },
  {
    image: "imgtheme2.webp",
  },
];
</script>
