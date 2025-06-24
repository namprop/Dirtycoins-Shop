<template>
  <section class="max-w-[1200px] mx-auto mt-17 flex gap-5 max-lg:flex-col">
    <div class="relative max-w-[780px] max-[1200px]:w-[600px]">
      <div class="absolute top-2 left-2 space-x-1 flex flex-wrap">
        <span class="bg-black text-white text-sm font-normal px-2 py-1">
          Sold Out
        </span>
        <span class="bg-black text-white text-sm font-normal px-2 py-1">
          Sold Out
        </span>
        <span class="bg-black text-white text-sm font-normal px-2 py-1">
          Sold Out
        </span>
      </div>

      <img
        :src="`/img/product/${selectedImage}`"
        class="max-w-[420px] max-[1200px]:w-[600px] md:max-w-[720px] h-auto object-contain"
        alt=""
      />

      <div class="relative max-w-[420px] md:max-w-[720px]">
        <button
          v-if="thumbnails.length > 8 && scrollIndex !== 0"
          @click="scrollLeft"
          class="absolute left-0 top-10 z-10 bg-white size-10 rounded-full text-gray-300 shadow hover:bg-black"
        >
          <!-- :disabled="scrollIndex === 0" -->

          <div class="flex justify-center items-center">
            <i class="fas fa-chevron-left float-right cursor-pointer"></i>
          </div>
        </button>

        <div class="overflow-hidden max-[700px]:w-[420px] max-[768px]:w-[700px] max-[1200px]:w-[600px]">
          <div
            v-for="(items, index) in test"
            :key="index"
            class="flex gap-2 transition-transform duration-300 ease-in-out"
            :style="{
              transform: `translateX(-${scrollIndex * scrollWidth}px)`,
            }"
          >
            <img
              v-for="(item, subIndex) in items.imgtest"
              :key="subIndex"
              :src="`/img/product/${item}`"
              class="w-[85px] h-auto object-contain shadow-md cursor-pointer border-2"
              :class="{
                'border-black': item === selectedImage,
                'border-transparent': item !== selectedImage,
              }"
              @click="selectedImage = item"
            />
          </div>
          <button
            v-if="thumbnails.length > 8"
            @click="scrollRight"
            class="absolute right-0 top-10 z-10 bg-white size-10 rounded-full text-gray-300 shadow hover:bg-black"
            :disabled="scrollIndex >= maxScroll"
          >
            <div class="flex justify-center items-center">
              <i class="fas fa-chevron-right float-right cursor-pointer"></i>
            </div>
          </button>
        </div>
      </div>
    </div>

    <div class="mx-auto max-w-[390px]">
      <h1 class="text-2xl">DC | DBZ Logo Varsity Jacket - Black</h1>
      <p class="text-center">1.290.000₫</p>
      <div class="my-4 flex justify-center gap-3">
        <span class="px-4 py-2 border border-gray-400 text-sm rounded-sm"
          >Size M</span
        >
        <span class="px-4 py-2 border border-gray-400 text-sm rounded-sm"
          >Size L</span
        >
        <span class="px-4 py-2 border border-gray-400 text-sm rounded-sm"
          >Size XL</span
        >
      </div>
      <div>
        <button class="hidden w-full border rounded-sm py-3 text-sm">
          <NuxtLink to=""> HẾT HÀNG </NuxtLink>
        </button>

        <button class="w-full border rounded-sm py-3 text-sm mb-3">
          <NuxtLink to=""> THÊM VÀO GIỎ </NuxtLink>
        </button>

        <button
          class="w-full border rounded-sm text-white bg-black hover:opacity-70 duration-300 py-3 text-sm"
        >
          <NuxtLink to=""> MUA NGAY </NuxtLink>
        </button>
      </div>

      <div class="mt-2 flex flex-col items-center gap-2">
        <h4 class="text-[15px] font-semibold text-gray-600">
          Mua trực tiếp trên sàn TMDT:
        </h4>
        <img
          src="/public/img/social_shopee_icon.svg"
          alt=""
          class="size-9 rounded-md"
        />
      </div>

      <div class="bg-[#f6f6f6] h-auto">
        <h4 class="text-center text-[15px] font-semibold text-gray-600 pt-8">
          Khu vực giao hàng
        </h4>
        <div class="flex text-[12px] justify-center text-gray-600 mt-1 mb-5">
          <p>Giao hàng Hà Nội -</p>
          <p>Chọn lại</p>
        </div>

        <div
          class="flex gap-4 py-5 border-gray-500 text-sm font-semibold border-t-1 px-2 justify-center"
        >
          <div class="max-w-[370px] flex gap-8">
            <span>Quận Đống Đa: 49-51 Hồ Đắc Di, Phường Nam Đồng</span>
            <span class="text-red-500">Hết hàng</span>
          </div>
        </div>
      </div>

      <div class="flex justify-center my-3">
        <img src="/public/img/logo-dc-dbz.webp" alt="" class="max-w-[227px]" />
      </div>

      <div class="text-gray-500 text-sm">
        <strong> Chi tiết sản phẩm: </strong>
        <br />
        • LIMITED EDITION - ONLY 120 PIECES
        <br />
        • Kích thước: M - L - XL
        <br />
        • Chất liệu: Vải dạ & Da PU; chất liệu lót: Polyester.
        <br />
        • Regular Fit.
        <br />
        • Nhãn thương hiệu trang trí ở sườn áo.
        <br />
        • Mặt Trước, mặt sau: Sử dụng chất liệu Khaki làm nền và thêu 2D trực
        tiếp lên bề mặt.
        <br />
        • Nhãn trang trí BST DC | DBZ may ở thân trước.
        <p class="mt-5">Mẫu cao 1m75 nặng 65kg - mặc sản phẩm size L</p>
      </div>

      <p class="text-gray-500 text-md my-7">Size - Chart:</p>

      <div class="text-gray-500 text-md">
        <img
          src="/public/img/sc-dc-x-dbz-logo-varsity-jacket-2024.png"
          alt=""
          class="max-w-[360px]"
        />
      </div>
    </div>
  </section>
  <OtherProducts />
  <!-- :paginatedProducts="paginatedProducts"
  :totalPages="totalPages"
  :currentPage="currentPage"
  @changePage="(n) => currentPage = n" -->
</template>

<script setup>
definePageMeta({
  layout: "client",
});

import { ref, computed } from "vue";
import { useWindowSize } from "@vueuse/core";

// Lấy width màn hình hiện tại
const { width: screenWidth } = useWindowSize();

// Dữ liệu hình ảnh sản phẩm
const test = ref([
  {
    imgtest: [
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
      "product-1.7.webp",
      "product-1.8.webp",
      "product-1.9.webp",
      "product-1.8.webp",
      "product-1.9.webp",
      "product-1.5.webp",
      "product-1.6.webp",
      "product-1.7.webp",
      "product-1.8.webp",
      "product-1.9.webp",
    ],
  },
]);


const thumbnails = computed(() => test.value[0]?.imgtest || []);
const selectedImage = ref(thumbnails.value[0]);

const widthScreen = computed(() => {
  if (screenWidth.value <= 660) return 420;
  else if (screenWidth.value <= 768) return 720;
  else if (screenWidth.value <= 1200) return 600;
  else return 720;
});

const itemWidth = 93;


const itemWidthAll = computed(() => itemWidth * thumbnails.value.length);
const scrollNotDis = computed(() => itemWidthAll.value - widthScreen.value);


const scrollWidth = computed(() => {
  if (scrollNotDis.value <= widthScreen.value) return scrollNotDis.value;
  const steps = Math.ceil(scrollNotDis.value / widthScreen.value);
  return scrollNotDis.value / steps;
});


const maxScroll = computed(() =>
  Math.ceil(itemWidthAll.value / widthScreen.value) - 1
);
const scrollIndex = ref(0);

const scrollLeft = () => {
  scrollIndex.value = Math.max(scrollIndex.value - 1, 0);
};
const scrollRight = () => {
  scrollIndex.value = Math.min(scrollIndex.value + 1, maxScroll.value);
};

watch(widthScreen, () => {
  scrollIndex.value = 0;
});



// Dữ liệu sản phẩm khác
const OtherProductList = ref([
  {
    image: "3-cc45c7e1-1860-4e86-a01a-913b09353a80.jpg",
    title: 'DirtyCoins "Y" Logo Earing Grey',
    price: "123.321",
  },
  {
    image: "anhproduct1.png",
    title: "DIRTYCOINS BÌNH TÂN EMBROIDE...",
    price: "550.000",
  },
  {
    image: "anhproduct2.png",
    title: "DIRTYCOINS BÌNH TÂN EMBROIDE...",
    price: "550.000",
  },
  {
    image: "anhproduct3.png",
    title: "DIRTYCOINS BÌNH TÂN EMBROIDE...",
    price: "550.000",
  },
  {
    image: "anhproduct1.png",
    title: "DIRTYCOINS BÌNH TÂN EMBROIDE...",
    price: "550.000",
  },
  {
    image: "anhproduct2.png",
    title: "DIRTYCOINS BÌNH TÂN EMBROIDE...",
    price: "550.000",
  },
  {
    image: "anhproduct1.png",
    title: "DIRTYCOINS BÌNH TÂN EMBROIDE...",
    price: "550.000",
  },
  {
    image: "anhproduct2.png",
    title: "DIRTYCOINS BÌNH TÂN EMBROIDE...",
    price: "550.000",
  },
  {
    image: "anhproduct3.png",
    title: "DIRTYCOINS BÌNH TÂN EMBROIDE...",
    price: "550.000",
  },
]);

// Phân trang sản phẩm khác
const itemsPerPage = 6;
const currentPage = ref(1);

const totalPages = computed(() =>
  Math.ceil(OtherProductList.value.length / itemsPerPage)
);

const paginatedProducts = computed(() => {
  const start = (currentPage.value - 1) * itemsPerPage;
  return OtherProductList.value.slice(start, start + itemsPerPage);
});
</script>

