<template>
  <section class="max-w-[1200px] mx-auto mt-17 flex gap-5 max-lg:flex-col">
    <div class="relative max-w-[780px] max-[1200px]:w-[600px]">
      <div class="absolute top-2 left-2 space-x-1 flex flex-wrap">
        <span class="bg-black text-white text-sm font-normal px-2 py-1"
          >Sold Out</span
        >
        <span class="bg-black text-white text-sm font-normal px-2 py-1"
          >Sold Out</span
        >
        <span class="bg-black text-white text-sm font-normal px-2 py-1"
          >Sold Out</span
        >
      </div>

      <img
        :src="`/img/product/${selectedImage}`"
        class="max-w-[420px] max-[1200px]:w-[600px] md:max-w-[720px] h-auto object-contain"
        alt=""
      />

      <div class="relative max-w-[420px] md:max-w-[720px]">
        <!-- Nút TRÁI -->
        <button
          v-show="canScrollLeft"
          @click="scrollLeft"
          class="absolute left-0 top-10 z-10 bg-white size-10 rounded-full text-gray-300 shadow hover:bg-black"
        >
          <div class="flex justify-center items-center">
            <i class="fas fa-chevron-left"></i>
          </div>
        </button>

        <!-- Thumbnails -->
        <div ref="scrollContainer" class="overflow-hidden">
          <div
            ref="scrollTrack"
            class="flex gap-2 overflow-x-auto scroll-smooth no-user-scroll"
            @scroll="handleScroll"
          >
            <img
              v-for="(item, index) in thumbnails"
              :key="index"
              :src="`/img/product/${item}`"
              class="w-[85px] h-auto object-contain shadow-md cursor-pointer border-2"
              :class="{
                'border-black': item === selectedImage,
                'border-transparent': item !== selectedImage,
              }"
              @click="selectedImage = item"
            />
          </div>
        </div>

        <!-- Nút PHẢI -->
        <button
          v-show="canScrollRight"
          @click="scrollRight"
          class="absolute right-0 top-10 z-10 bg-white size-10 rounded-full text-gray-300 shadow hover:bg-black"
        >
          <div class="flex justify-center items-center">
            <i class="fas fa-chevron-right"></i>
          </div>
        </button>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted, nextTick } from "vue";

const selectedImage = ref("product1.webp");
const scrollTrack = ref(null);

const thumbnails = [
  "product1.webp",
  "product-1.1.webp",
  "product-1.2.webp",
  "product-1.3.webp",
  "product-1.4.webp",
  "product-1.5.webp",
  "product-1.6.webp",
  "product-1.7.webp",
  "product-1.8.webp",
  "product-1.9.webp",
  "product-1.5.webp",
  "product-1.6.webp",
  "product-1.7.webp",
  "product-1.8.webp",
  "product-1.9.webp",
];

const scrollByAmount = 400;
const canScrollLeft = ref(false);
const canScrollRight = ref(false);

const updateScrollButtons = () => {
  const el = scrollTrack.value;
  if (!el) return;

  canScrollLeft.value = el.scrollLeft > 0;
  canScrollRight.value = el.scrollLeft + el.clientWidth < el.scrollWidth;
};

const scrollLeft = () => {
  scrollTrack.value?.scrollBy({ left: -scrollByAmount, behavior: "smooth" });
};

const scrollRight = () => {
  scrollTrack.value?.scrollBy({ left: scrollByAmount, behavior: "smooth" });
};

const handleScroll = () => {
  updateScrollButtons();
};

onMounted(() => {
  nextTick(() => {
    updateScrollButtons();
  });
});
</script>

<style scoped>
.no-user-scroll {
  -ms-overflow-style: none; /* IE/Edge */
  scrollbar-width: none; /* Firefox */
  overscroll-behavior-x: none;
}
.no-user-scroll::-webkit-scrollbar {
  display: none; /* Chrome, Safari */
}
.no-user-scroll {
  pointer-events: auto;
  touch-action: pan-y; /* Cho phép cuộn dọc, cấm cuộn ngang */
}
</style>
