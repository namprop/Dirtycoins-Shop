<template>
  <CartEmpty />
  
  <div class="max-w-[1200px] mx-auto mt-10">
    <h1 class="text-3xl font-semibold mb-6">Giỏ hàng</h1>

    <div class="flex px-4 gap-7 mt-10 max-lg:flex-col">
      <div class="flex-2">
        <table class="w-full">
          <thead class="text-xs text-gray-500 text-left">
            <tr class="border-y-2 border-gray-200">
              <th class="py-2">Sản phẩm</th>
              <th class="py-2 text-left">Số lượng</th>
              <th class="py-2 text-left">Tổng tiền</th>
              <th class="py-2 text-center">Xóa</th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-white border-b border-gray-200">
              <td class="flex max-md:flex-col gap-4 items-center py-4">
                <img
                  src="/img/anhproduct1.png"
                  class="w-24 h-auto"
                  alt="Product Image"
                />
                <div>
                  <p class="text-sm font-semibold">
                    DIRTYCOINS BÌNH TÂN EMBROIDE...
                  </p>
                  <p class="text-sm text-gray-600 mt-1">550.000 ₫</p>
                </div>
              </td>

              <td class="text-left">
                <div
                  class="inline-flex items-center border rounded-full overflow-hidden max-md:mx-2"
                >
                  <button class="px-3 py-0 md:py-1 hover:bg-gray-100">
                    &lt;
                  </button>
                  <span class="px-4">1</span>
                  <button class="px-3 py-0 md:py-1 hover:bg-gray-100">
                    &gt;
                  </button>
                </div>
              </td>

              <td class="text-left font-semibold">550.000 ₫</td>

              <td class="text-center">
                <i
                  class="fa fa-trash text-black cursor-pointer hover:text-red-500"
                ></i>
              </td>
            </tr>
          </tbody>

          <tbody>
            <tr class="bg-white border-b border-gray-200">
              <td class="flex max-md:flex-col gap-4 items-center py-4">
                <img
                  src="/img/anhproduct1.png"
                  class="w-24 h-auto"
                  alt="Product Image"
                />
                <div>
                  <p class="text-sm font-semibold">
                    DIRTYCOINS BÌNH TÂN EMBROIDE...
                  </p>
                  <p class="text-sm text-gray-600 mt-1">550.000 ₫</p>
                </div>
              </td>

              <td class="text-left">
                <div
                  class="inline-flex items-center border rounded-full overflow-hidden"
                >
                  <button class="px-3 py-1 hover:bg-gray-100">&lt;</button>
                  <span class="px-4">1</span>
                  <button class="px-3 py-1 hover:bg-gray-100">&gt;</button>
                </div>
              </td>

              <td class="text-left font-semibold">550.000 ₫</td>

              <td class="text-center">
                <i
                  class="fa fa-trash text-black cursor-pointer hover:text-red-500"
                ></i>
              </td>
            </tr>
          </tbody>
        </table>

        <div class="mt-8 flex max-lg:justify-center">
          <button
            class="bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800 text-sm"
          >
            TIẾP TỤC MUA SẮM
          </button>
        </div>
      </div>

      <div class="flex-1">
        <div class="w-full max-w-sm border-y border-gray-200">
          <div class="flex justify-between px-6 py-2 border-b border-gray-200">
            <span class="text-gray-600 font-medium">Tổng tiền</span>
            <span class="text-gray-800 font-semibold">908.000đ</span>
          </div>

          <div class="flex justify-center items-center py-6 bg-[#fafafa] mb-2">
            <button
              class="bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800 text-sm"
            >
              THANH TOÁN
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
definePageMeta({
  layout: "client",
});
</script>
