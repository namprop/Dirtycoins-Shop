<template>
    <div
    class="max-w-[1200px] mx-auto flex flex-col justify-between mt-10"
  >
    <h1 class="text-3xl absolute font-semibold mb-6">Giỏ hàng</h1>
    <div class="flex-grow flex flex-col items-center relative px-4">
      <div class="">
        <img
          src="public/img/empty_cart.png"
          alt="Empty Cart"
          class="mb-4 w-[600px] h-auto object-contain"
        />
      </div>

      <p class="text-gray-600 mb-6">
        Không có sản phẩm nào trong giỏ hàng của bạn
      </p>
      <NuxtLink to="" class="bg-black text-white py-4 px-5 rounded-full">
        TIẾP TỤC MUA HÀNG
      </NuxtLink>
    </div>
  </div>
  

</template>

<script setup>
</script>

