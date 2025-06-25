<template>
  <div class="bg-white">
    <header
      class="sticky inset-x-0 top-0 z-50 flex items-center justify-between bg-[#f1f1f1] shadow-xl lg:min-h-[80px]"
    >
      <!-- Logo -->
      <div
        class="w-full max-w-[250px] flex justify-center my-2 sm:my-1 md:my-4 max-md:order-2 max-md:max-w-[700px]"
      >
        <img
          class="h-auto w-full max-w-[100px] sm:max-w-[200px] mx-auto"
          src="/img/logo.webp"
          alt="Logo"
        />
      </div>

      <!-- Navbar -->
      <nav class="flex-1 flex justify-center opacity-90">
        <ul
          class="flex gap-x-6 list-none text-gray-700 text-lg font-semibold max-lg:hidden flex-wrap"
        >
          <li
            v-for="(item, index) in mainMenuItems"
            :key="index"
            class="relative group"
          >
            <div class="inline-block relative">
              <NuxtLink class="relative z-10 cursor-pointer" to="">{{
                item.name
              }}</NuxtLink>

              <span
                class="absolute left-0 top-full h-4 w-full z-10 block"
              ></span>

              <span
                class="absolute left-0 -bottom-1 h-[1px] w-full bg-black opacity-0 group-hover:opacity-70 transition-opacity duration-700"
              ></span>
            </div>

            <!-- Submenu -->
            <ul
              class="absolute hidden group-hover:block bg-black bg-opacity-70 text-white mt-[10px] shadow w-[220px] z-20 py-0 space-y-0"
            >
              <li
                v-for="(subItem, subIndex) in item.subMenu1 || []"
                :key="subIndex"
                class="relative group/item2-2"
              >
                <NuxtLink
                  class="block px-4 py-2 hover:bg-black border-b"
                  to="#"
                  >{{ subItem.name }}</NuxtLink
                >

                <span
                  class="absolute top-0 h-full w-5 right-[-20px] z-10 block"
                ></span>
                <ul
                  class="absolute hidden group-hover/item2-2:block top-0 left-full bg-black bg-opacity-70 w-[220px] ml-1 border-black shadow py-0 space-y-0"
                >
                  <li>
                    <NuxtLink
                      v-for="(subSubItem, subSubIndex) in subItem.subMenu2 ||
                      []"
                      :key="subSubIndex"
                      class="block px-4 py-2 hover:bg-black border-b"
                      to="#"
                      >{{ subSubItem.name }}</NuxtLink
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>

      <!-- Search -->
      <div
        class="flex justify-end items-center gap-4 text-black max-lg:hidden max-md:flex max-md:order-1"
      >
        <div class="relative max-lg:hidden">
          <input
            type="text"
            placeholder="Tìm kiếm..."
            class="outline-none px-6 py-4 rounded-xl shadow-xl text-sm"
          />
          <button class="absolute right-3 top-4 text-sm text-gray-500">
            <i class="fas fa-search"></i>
          </button>
        </div>

        <NuxtLink class="max-lg:hidden" to="">
          <i class="fas fa-user text-[24px]"></i>
        </NuxtLink>

        <i
          class="fas fa-shopping-bag text-[30px] text-black relative opacity-80 max-md:mx-1"
        >
          <span
            class="absolute top-3 right-[5px] text-white text-xs bg-black w-4 h-4 flex items-center justify-center"
            >{{ cartStore.totalItems }}</span
          >
        </i>
      </div>

      <!-- NavMobile -->

      <button
        @click="navOnOff = true"
        class="text-2xl lg:hidden max-md:order-3 px-2"
      >
        <i class="fas fa-bars"></i>
      </button>

      <section
        v-show="navOnOff"
        class="fixed inset-0 bg-white bg-opacity-80 z-50 flex justify-end lg:hidden duration-700"
      >
        <nav
          class="bg-black text-white bg-opacity-80 w-[300px] h-full p-4 overflow-y-auto"
        >
          <!-- Logo -->
          <div class="flex justify-between items-center mb-4">
            <img src="/img/logo.webp" alt="Logo" class="w-[100px] h-auto" />

            <button @click="navOnOff = false">
              <i class="fas fa-times text-2xl"></i>
            </button>
          </div>

          <!-- Search -->
          <div class="relative mb-6">
            <input
              type="text"
              placeholder="Tìm kiếm..."
              class="w-full px-4 py-2 rounded bg-gray-200 text-black outline-none"
            />
            <button class="absolute top-2.5 right-3 text-black">
              <i class="fas fa-search"></i>
            </button>
          </div>

          <!-- Menu -->
          <ul class="space-y-2 font-normal text-sm">
            <li v-for="(item, index) in mainMenuItems" :key="index">
              <div class="w-full text-left">
                <NuxtLink class="hover:text-orange-500" to="">{{
                  item.name
                }}</NuxtLink>
                <i
                  @click="navUpDown[index] = !navUpDown[index]"
                  :class="
                    navUpDown[index]
                      ? 'fas fa-chevron-up'
                      : 'fas fa-chevron-down'
                  "
                  class="float-right cursor-pointer"
                ></i>
              </div>

              <ul v-show="navUpDown[index]">
                <li
                  v-for="(subItem, subIndex) in item.subMenu1 || []"
                  :key="subIndex"
                >
                  <div class="w-full text-left pl-4 my-1">
                    <NuxtLink to="">{{ subItem.name }}</NuxtLink>
                    <i
                      class="fas fa-chevron-down float-right cursor-pointer"
                    ></i>
                  </div>
                </li>
              </ul>
            </li>

            <li>
              <button class="w-full text-left text-sm mt-4">
                Đăng ký / đăng nhập
              </button>
            </li>
          </ul>
        </nav>
      </section>
    </header>

    <slot />

    <footer>
      <!-- Hotline -->
      <section class="flex mt-10 bg-[#f3f3f3] px-4 py-5 items-center">
        <div
          class="size-6 bg-black rounded-full mx-2 flex items-center justify-center"
        >
          <i class="fa fa-phone text-xs text-white"></i>
        </div>

        <span class="text-sm font-normal">Hỗ trợ / Mua hàng:</span>
        <span class="text-red-500 text-sm font-normal mx-1">0933 800 190</span>
      </section>

      <!-- Information -->

      <!-- <i class="fa fa-location-dot"></i> -->

      <div class="flex mt-4 px-5 max-lg:col span-2 max-md:flex-col">
        <div class="flex-1 min-w-[300px]">
          <h3 class="font-semibold text-md mb-2">
            Hệ Thống Cửa Hàng
            <div class="md:hidden">
              <i class="fas fa-chevron-down float-right"></i>
            </div>
          </h3>

          <div 

          class="opacity-80 max-md:hidden">
            <b class="text-sm font-semibold">Chi Nhánh Hồ Chí Minh</b>

            <ul class="space-y-0 text-[12px] font-normal">
              <li>
                <b>Quận 1</b> - The New Playground, Tầng B1 Vincom Center Đồng
                Khởi, 72 Lê Thánh Tôn, P. Bến Nghé
              </li>
              <li>
                <b>Quận Bình Tân</b> - Tầng 1 TTTM Aeon Mall Bình Tân, Số 1
                Đường số 17A, P. Bình Trị Đông B
              </li>
              <li>
                <b>TP. Thủ Đức</b> - Quận 9 - Tầng 2 TTTM Vincom Mega Mall Grand
                Park
              </li>
              <li><b>Quận 10</b> - 561 Sư Vạn Hạnh, P.13</li>
              <li><b>Quận 1</b> - 160 Nguyễn Cư Trinh, P. Nguyễn Cư Trinh</li>
              <li>
                <b>Quận 1</b> - The New Playground 26 Lý Tự Trọng, P. Bến Nghé
              </li>
              <li><b>Quận Gò Vấp</b> - 326 Quang Trung, P.10</li>
            </ul>

            <h3 class="text-sm font-semibold mt-1">Chi Nhánh Biên Hòa</h3>
            <p class="text-[12px] font-normal">
              TP. Biên Hòa - 151A Phan Trung, P. Tân Mai
            </p>

            <h3 class="text-sm font-semibold mt-1">Chi Nhánh Bình Dương</h3>
            <p class="text-[12px] font-normal">
              TP. Thủ Dầu Một - 28 Yersin, P. Hiệp Thành
            </p>

            <h3 class="text-sm font-semibold mt-1">Chi Nhánh Cần Thơ</h3>
            <p class="text-[12px] font-normal">
              Quận Ninh Kiều - 52 Mậu Thân, P. An Phú
            </p>

            <h3 class="text-sm font-semibold mt-1">Chi Nhánh Hà Nội</h3>
            <p class="text-[12px] font-normal">
              Quận Hà Đông - Tầng 2 Aeon Mall Hà Đông, khu dân cư Hoàng Văn Thụ,
              P. Dương Nội
            </p>

            <h3 class="text-sm font-semibold mt-1">Chi Nhánh Hưng Yên</h3>
            <p class="text-[12px] font-normal">
              Quận Văn Giang - PT.TV 136 - Mega Grand World - Ocean Park
            </p>

            <h3 class="text-sm font-semibold mt-1">Chi Nhánh Hải Phòng</h3>
            <p class="text-[12px] font-normal">
              Quận Lê Chân - Tầng 2 TTTM Aeon Mall Hải Phòng Lê Chân - Số 10 Võ
              Nguyên Giáp, P. Kênh Dương
            </p>

            <p class="mt-3 text-[12px] font-normal">
              0933 800 190 - 1900252557
            </p>
            <p class="text-[12px] font-normal">csteamdcs@gmail.com</p>
          </div>
        </div>

        <div class="flex flex-1 max-md:flex-col md:mt-3 md:mx-2">
          <div class="flex-1">
            <div>
              <h3 class="font-semibold text-md mb-2">
                Mạng Xã Hội
                <div class="md:hidden">
                  <i
                    @click="navUpDown[1] = !navUpDown[1]"
                    class="fas fa-chevron-down float-right"
                  ></i>
                </div>
              </h3>

              <div class="flex gap-3 max-md:hidden">
                <NuxtLink to="" class="text-black hover:text-blue-600 border border-black rounded-full w-7 h-7 flex items-center justify-center">
                  <i
                    class="fab fa-facebook-f text-xl"
                  ></i>
                </NuxtLink>
                <NuxtLink
                 to="" 
                 class="text-black hover:text-red-600 flex items-center justify-center border border-black rounded-full w-7 h-7 ">
                  <i
                    class="fab fa-youtube text-xl "
                  ></i>
                </NuxtLink>
                <NuxtLink to="" class="text-black hover:text-pink-500 border border-black rounded-full w-7 h-7 flex items-center justify-center">
                  <i
                    class="fab fa-instagram text-xl "
                  ></i>
                </NuxtLink>
              </div>
            </div>
            <div class="md:mt-6 sm:mt-4">
              <h3 class="font-semibold text-md mb-2">
                Chính Sách
                <div class="md:hidden">
                  <i class="fas fa-chevron-down float-right"></i>
                </div>
              </h3>
            </div>
          </div>
          <div class="flex-1 md:mt-3">
            <h3 class="font-semibold text-md mb-2">
              Fanpage
              <div class="md:hidden">
                <i class="fas fa-chevron-down float-right"></i>
              </div>
            </h3>
          </div>
        </div>
      </div>

      <div class="py-5 flex justify-center items-center bg-[#f3f3f3]">
        <p class="text-[11px]">
          Copyright © 2023 Dirty Coins Studio. Powered by Sapo
        </p>
      </div>
    </footer>
  </div>
</template>

<script setup>
import { computed, ref, onMounted } from "vue";
import { useCartStore } from '@/stores/cartStore'

const cartStore = useCartStore()

onMounted(() => {
  cartStore.initCart()
})




const navOnOff = ref(false);
const navUpDown = ref({
  0: false,
  "1-0": false,
  "1-1-0": false,
});

const mainMenuItems = computed(() => [
  {
    name: "SHOP",
    link: "#",
    subMenu1: [
      { name: "TOPS", link: "#" },
      { name: "BOTTOMS", link: "#" },
      { name: "ACCESSORIES", link: "#" },
      { name: "BAGS", link: "#" },
      { name: "WOMENSWEAR", link: "#" },
      { name: "COMBO", link: "#" },
    ],
  },
  {
    name: "DRAGON BALL Z",
    link: "#",
    subMenu1: [
      {
        name: "Item 1.1",
        link: "#",
      },
      {
        name: "Item 1.2",
        link: "#",
        subMenu2: [
          { name: "Item 1.1.1", link: "#" },
          { name: "Item 1.1.2", link: "#" },
          { name: "Item 1.1.3", link: "#" },
        ],
      },
      { name: "Item 1.3", link: "#" },
    ],
  },
  { name: "COLLAB'S", link: "#" },
  { name: "CONTACT", link: "#" },
  { name: "ABOUT US", link: "#" },
  { name: "BEST SELLER", link: "#" },
]);
</script>
