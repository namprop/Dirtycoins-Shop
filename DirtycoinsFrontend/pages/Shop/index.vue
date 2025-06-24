<template>
  <ShopBanner />

  <Filter
    :filterByType="filterByTypes"
    v-model:selectedOptions="selectedOption"
    
  />

  <ProductList :products="product" />

  <div class="w-full flex justify-center">
    <div
      class="flex container items-center justify-center md:justify-end flex-wrap gap-2 mt-10"
    >
      <Paginate />
    </div>
  </div>
</template>

<script setup>
definePageMeta({ layout: "client" });
import { computed, ref } from "vue";


const selectedOption = ref([]);

const filterByTypes = computed(() => [
  {
    nameFilterType: "Lọc Giá",
    filterOptions: [
      "Giá dưới 100.000đ",
      "100.000đ - 200.000đ",
      "200.000đ - 300.000đ",
      "300.000đ - 500.000đ",
      "Giá trên 500.000đ",
    ],
  },
  {
    nameFilterType: "Loại",
    filterOptions: [
      "Giá dưới 100.000đ",
      "100.000đ - 200.000đ",
      "200.000đ - 300.000đ",
      "300.000đ - 500.000đ",
      "Giá trên 500.000đ",
    ],
  },
  {
    nameFilterType: "Kích Thước",
  },
  {
    nameFilterType: "Màu Sắc",
  },
]);

const product = computed(() => [
  {
    image: "anhproduct1.png",
    title: "DIRTYCOINS BÌNH TÂN EMBROIDE...",
    price: "550.000",
    tags: ["New arrival", "Shout out"],
  },
  {
    image: "anhproduct2.png",
    title: "DIRTYCOINS BÌNH TÂN EMBROIDE...",
    price: "550.000",
    tags: ["New arrival"],
  },
  {
    image: "anhproduct3.png",
    title: "DIRTYCOINS BÌNH TÂN EMBROIDE...",
    price: "550.000",
    tags: ["New arrival"],
  },
  {
    image: "anhproduct2.png",
    title: "DIRTYCOINS BÌNH TÂN EMBROIDE...",
    price: "550.000",
    tags: ["New arrival"],
  },
  {
    image: "anhproduct3.png",
    title: "DIRTYCOINS BÌNH TÂN EMBROIDE...",
    price: "550.000",
    tags: ["New arrival"],
  },
]);

// const toggleOption = (e, option) => {
//   if (e.target.checked) {
//     selectedOptions.value.push(option);
//   } else {
//     selectedOptions.value = selectedOptions.value.filter((o) => o !== option);
//   }
// };
</script>
