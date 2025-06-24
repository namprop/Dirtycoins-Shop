<template>
  <h1 class="text-center mt-7 text-4xl font-semibold">Các Sản Phẩm Khác</h1>

  <div class="grid grid-cols-6 gap-4 mx-5">
    <div
      class="text-center"
      v-for="(item, index) in displayedProducts"
      :key="index"
    >
      <NuxtLink to="">
        <img :src="`/img/${item.image}`" alt="" class="w-[161px] mx-auto" />
        <p class="mt-4 text-sm">{{ item.title }}</p>
        <p class="text-sm mt-1">{{ item.price }} đ</p>
      </NuxtLink>
    </div>
  </div>

  <div class="flex justify-center mt-4 space-x-2">
    <button
      v-for="n in totalPages"
      :key="n"
      @click="currentPage = n"
      :class="[ 'w-3 h-3 rounded-full', currentPage === n ? 'bg-black' : 'bg-gray-300' ]"
    ></button>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'
import { useWindowSize } from '@vueuse/core'

const { width: screenWidth } = useWindowSize()

const OtherProducts = ref([
  { image: "3-cc45c7e1-1860-4e86-a01a-913b09353a80.jpg", title: 'DirtyCoins "Y" Logo Earing Grey', price: "123.321" },
  { image: "anhproduct1.png", title: "DIRTYCOINS BÌNH TÂN EMBROIDE...", price: "550.000" },
  { image: "anhproduct2.png", title: "DIRTYCOINS BÌNH TÂN EMBROIDE...", price: "550.000" },
  { image: "anhproduct3.png", title: "DIRTYCOINS BÌNH TÂN EMBROIDE...", price: "550.000" },
  { image: "anhproduct1.png", title: "DIRTYCOINS BÌNH TÂN EMBROIDE...", price: "550.000" },
  { image: "anhproduct2.png", title: "DIRTYCOINS BÌNH TÂN EMBROIDE...", price: "550.000" },
  { image: "anhproduct1.png", title: "DIRTYCOINS BÌNH TÂN EMBROIDE...", price: "550.000" },
  { image: "anhproduct2.png", title: "DIRTYCOINS BÌNH TÂN EMBROIDE...", price: "550.000" },
  { image: "anhproduct3.png", title: "DIRTYCOINS BÌNH TÂN EMBROIDE...", price: "550.000" },
  { image: "anhproduct3.png", title: "DIRTYCOINS BÌNH TÂN EMBROIDE...", price: "550.000" },
  { image: "anhproduct2.png", title: "DIRTYCOINS BÌNH TÂN EMBROIDE...", price: "550.000" },
  { image: "anhproduct1.png", title: "DIRTYCOINS BÌNH TÂN EMBROIDE...", price: "550.000" },
])

const currentPage = ref(1)

const itemsPerPage = computed(() => {
  if (screenWidth.value <= 660) {
    return 2
  } else if (screenWidth.value <= 768) {
    return 3
  } else {
    return 6
  }
})

const totalPages = computed(() =>
  Math.ceil(OtherProducts.value.length / itemsPerPage.value)
)

const paginatedProducts = computed(() => {
  const start = (currentPage.value - 1) * itemsPerPage.value
  return OtherProducts.value.slice(start, start + itemsPerPage.value)
})

const displayedProducts = computed(() => {
  return paginatedProducts.value
})
</script>


<style scoped>
button {
  transition: background-color 0.3s;
}
</style>
