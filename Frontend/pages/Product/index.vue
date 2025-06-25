<template>
  <section
    v-for="(item, index) in productDetails"
    :key="index"
    class="max-w-[1200px] mx-auto mt-17 flex max-lg:flex-col"
  >
    <div class="relative w-full lg:max-w-[780px] mx-auto">
      <div class="absolute top-2 left-2 space-x-1 flex flex-wrap">
        <span
          v-for="(badges, i) in item.badges"
          :key="i"
          class="bg-black text-white text-sm font-normal px-2 py-1"
        >
          {{ badges }}
        </span>
      </div>

      <img
        :src="`/img/product/${selectedImage}`"
        class="w-full max-w-[420px] md:max-w-[720px] h-auto object-contain mx-auto"
        alt=""
      />

      <div class="relative max-w-[420px] md:max-w-[720px] mx-auto">
        <button
          v-if="thumbnails.length > 8 && scrollIndex !== 0"
          @click="scrollLeft"
          class="absolute left-0 top-10 z-10 bg-white size-10 rounded-full text-gray-300 shadow hover:bg-black"
        >
          <div class="flex justify-center items-center">
            <i class="fas fa-chevron-left float-right cursor-pointer"></i>
          </div>
        </button>

        <div class="overflow-hidden max-md:[420px] lg:w-[720px]">
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

    <!-- Thông tin sản phẩm -->
    <div class="w-full lg:max-w-[390px] mx-auto">
      <div class="max-lg:mx-7">
        <h1 class="text-2xl text-center">
          {{ item.name }}
        </h1>
        <p class="text-center">{{ item.price }}</p>

        <div class="my-4 flex flex-wrap justify-center gap-3">
          <span
            v-for="(size, i) in item.size"
            :key="i"
            class="px-4 py-2 border border-gray-400 text-sm rounded-sm"
            >{{ size }}</span
          >
        </div>

        <div>
          <button class="hidden w-full border rounded-sm py-3 text-sm">
            <NuxtLink to=""> HẾT HÀNG </NuxtLink>
          </button>

          <button
            @click=" handleAddToCart()"
            class="w-full border rounded-sm py-3 text-sm mb-3 cursor-pointer"
          >
            THÊM VÀO GIỎ
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

        <div class="bg-[#f6f6f6] h-auto mt-5">
          <h4 class="text-center text-[15px] font-semibold text-gray-600 pt-8">
            Khu vực giao hàng
          </h4>
          <div class="flex text-[12px] justify-center text-gray-600 mt-1 mb-5">
            <p>Giao hàng Hà Nội -</p>
            <p class="ml-1 underline cursor-pointer">Chọn lại</p>
          </div>

          <div
            class="flex flex-col gap-2 py-5 border-gray-500 text-sm font-semibold border-t px-4 justify-center"
          >
            <div class="flex justify-between">
              <span>Quận Đống Đa: 49-51 Hồ Đắc Di, Phường Nam Đồng</span>
              <span class="text-red-500">Hết hàng</span>
            </div>
          </div>
        </div>

        <div class="flex justify-center my-3">
          <img
            src="/public/img/logo-dc-dbz.webp"
            alt=""
            class="max-w-[227px]"
          />
        </div>

        <div class="text-gray-500 text-sm">
          <strong> Chi tiết sản phẩm: </strong><br />
          • LIMITED EDITION - ONLY 120 PIECES<br />
          • Kích thước: M - L - XL<br />
          • Chất liệu: Vải dạ & Da PU; chất liệu lót: Polyester.<br />
          • Regular Fit.<br />
          • Nhãn thương hiệu trang trí ở sườn áo.<br />
          • Mặt Trước, mặt sau: Sử dụng chất liệu Khaki làm nền và thêu 2D trực
          tiếp.<br />
          • Nhãn trang trí BST DC | DBZ may ở thân trước.
          <p class="mt-5">Mẫu cao 1m75 nặng 65kg - mặc sản phẩm size L</p>
        </div>

        <p class="text-gray-500 text-md my-7">Size - Chart:</p>

        <div class="text-gray-500 text-md">
          <img
            src="/public/img/sc-dc-x-dbz-logo-varsity-jacket-2024.png"
            alt=""
            class="max-w-[420px] lg:max-w-[360px] mx-auto"
          />
        </div>
      </div>
    </div>
  </section>


  <!-- <OtherProducts /> -->
  
</template>

<script setup>
definePageMeta({
  layout: "client",
});

import { ref, computed } from "vue";
import { identity, useWindowSize } from "@vueuse/core";
import { useCartStore} from '~/stores/cartStore' ;


const cartStore = useCartStore();

const handleAddToCart = () =>{
  cartStore.addToCart(productDetails.value[0])
}



const productDetails = ref([
  {
    id: 1,
    name: "DC | DBZ Logo Varsity Jacket - Black",
    price: "1.290.000₫",
    badges: ["New arrival", "Shout out"],
    size: ["Size M", "Size L", "Size XL"],
    image:"product1.webp",
    description: [
      " • LIMITED EDITION - ONLY 120 PIECES",
      "• Kích thước: M - L - XL",
      "• Chất liệu: Vải dạ & Da PU; chất liệu lót: Polyester.",
      "• Regular Fit.",
      "• Nhãn thương hiệu trang trí ở sườn áo",
      "• Mặt Trước, mặt sau: Sử dụng chất liệu Khaki làm nền và thêu 2D trực tiếp.",
      " • Nhãn trang trí BST DC | DBZ may ở thân trước.",
    ],
  },
]);

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

const maxScroll = computed(
  () => Math.ceil(itemWidthAll.value / widthScreen.value) - 1
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
</script>
