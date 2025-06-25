<template>

   <div class="max-w-[1200px] mx-auto flex items-center justify-center mt-15">
    <div class="grid grid-cols-1 md:grid-cols-2 w-full max-w-6xl gap-10 px-4 mx-10">
      <!-- Đăng nhập -->
      <div>
        <h2 class="text-center text-lg font-normal text-gray-500 mb-4">ĐĂNG NHẬP</h2>
        <form class="space-y-4">
          <div class="relative">
            <input type="email" placeholder="Email" required
              class="pl-10 pr-4 py-2 w-full border border-gray-300 bg-blue-50 rounded" />
            <span class="absolute left-3 top-2.5 text-gray-500">
              <i class="fas fa-envelope"></i>
            </span>
          </div>
          <div class="relative">
            <input type="password" placeholder="Mật khẩu" required
              class="pl-10 pr-4 py-2 w-full border border-gray-300 bg-blue-50 rounded" />
            <span class="absolute left-3 top-2.5 text-gray-500">
              <i class="fas fa-lock"></i>
            </span>
          </div>
          <button type="submit" class="w-full border border-black py-2">Đăng nhập</button>
          <div class="text-center mt-2">
            <a href="#" class="text-sm text-gray-500 hover:underline">Quên mật khẩu?</a>
          </div>
        </form>
      </div>

      <!-- Đăng ký -->
      <div>
        <h2 class="text-center text-lg font-normal text-gray-500 mb-4">ĐĂNG KÝ THÀNH VIÊN MỚI</h2>
        <form class="space-y-3">
          <div class="relative">
            <input type="text" placeholder="Tên" required
              class="pl-10 pr-4 py-2 w-full border border-gray-300 rounded" />
            <span class="absolute left-3 top-2.5 text-gray-500">
              <i class="fas fa-user"></i>
            </span>
          </div>
          <div class="relative">
            <input type="text" placeholder="Họ" required
              class="pl-10 pr-4 py-2 w-full border border-gray-300 rounded" />
            <span class="absolute left-3 top-2.5 text-gray-500">
              <i class="fas fa-user"></i>
            </span>
          </div>
          <div class="relative">
            <input type="email" placeholder="Email" required
              class="pl-10 pr-4 py-2 w-full border border-gray-300 bg-blue-50 rounded" />
            <span class="absolute left-3 top-2.5 text-gray-500">
              <i class="fas fa-envelope"></i>
            </span>
          </div>
          <div class="relative">
            <input type="tel" placeholder="Số điện thoại" required
              class="pl-10 pr-4 py-2 w-full border border-gray-300 rounded" />
            <span class="absolute left-3 top-2.5 text-gray-500">
              <i class="fas fa-phone"></i>
            </span>
          </div>
          <div class="relative">
            <input type="password" placeholder="Mật khẩu" required
              class="pl-10 pr-4 py-2 w-full border border-gray-300 bg-blue-50 rounded" />
            <span class="absolute left-3 top-2.5 text-gray-500">
              <i class="fas fa-lock"></i>
            </span>
          </div>
          <button type="submit" class="w-full border border-black py-2">Đăng ký</button>
        </form>
      </div>
    </div>
</div>
</template>

<script setup>
definePageMeta({
  layout: "client",
});
</script>
