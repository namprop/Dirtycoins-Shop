<template>
  <!-- Banner -->
  <section class="relative overflow-hidden">
    <HomeBanner />
  </section>
  <!-- Products -->
  <section class="px-4 py-10 bg-white">
    <h1 class="text-3xl font-semibold font-sans text-center p-4">
      TAT CA SAN PHAM
    </h1>
    <!-- Item -->
    <ProductList :products="product" />
    <!-- Pagination -->
    <div class="w-full flex justify-center">
      <div
        class="flex container items-center justify-center md:justify-end flex-wrap gap-2 mt-10"
      >
        <Paginate />
      </div>
    </div>
  </section>

  <HomeTheme />

  <!-- trademark or brand -->
  <HomeBrand :Brands="Brand" />
</template>

<script setup>
definePageMeta({ layout: "client" });
import { computed } from "vue";

const product = computed(() => [
  {
    image: "anhproduct1.png",
    name: "DIRTYCOINS BÌNH TÂN EMBROIDE...",
    price: "550.000",
    badges: ["New arrival", "Shout out"],
  },
  {
    image: "anhproduct2.png",
    name: "DIRTYCOINS BÌNH TÂN EMBROIDE...",
    price: "550.000",
    badges: ["New arrival"],
  },
  {
    image: "anhproduct3.png",
    name: "DIRTYCOINS BÌNH TÂN EMBROIDE...",
    price: "550.000",
    badges: ["New arrival"],
  },
  {
    image: "anhproduct2.png",
    name: "DIRTYCOINS BÌNH TÂN EMBROIDE...",
    price: "550.000",
    badges: ["New arrival"],
  },
  {
    image: "anhproduct3.png",
    name: "DIRTYCOINS BÌNH TÂN EMBROIDE...",
    price: "550.000",
    badges: ["New arrival"],
  },
]);

const Brand = computed(() => [
  {
    image: "brand1.png",
  },
  {
    image: "brand2.png",
  },
  {
    image: "brand3.png",
  },
  {
    image: "brand1.png",
  },
]);

// const theme = computed(() => [
//   {
//     image: "imgtheme1.webp",
//   },
//   {
//     image: "imgtheme2.webp",
//   },
// ]);
</script>
