<template>
    <div class="relative shadow-md bg-cover min-h-[350px]" :style="{ backgroundImage: `url(${product.image_url})` }">
      <div class="p-4 hidden">
        <div class="font-bold text-3xl text-gray-800">{{ product.name }}</div>
      </div>      
      
      <div class="p-6 bg-gradient-to-b from-gray-800 space-y-3 min-h-[150px]">
        <img :src="product.logo_url" alt="Product Logo" class="h-[30px] object-cover right-10">
        <template v-if="!product.is_cooming_soon">
          <div class="flex justify-between">
            <span class="font-light text-white text-2xl">Start from {{ product.price_formatted }}</span>
          </div>
        </template>
      </div>
      <template v-if="product.is_cooming_soon">
        <div class="absolute bottom-0 right-0 p-7 p-4 bg-gradient-to-l from-red-500 w-[300px] text-end">
          <span class="text-white font-bold text-2xl">Coming Soon</span>
        </div>
      </template>
      <template v-if="!product.is_cooming_soon">
        <div class="absolute bottom-0 right-0 p-7">
          <a :href="product.brocure_url" download="" class="bg-cyan-500 hover:bg-blue-400 text-md text-white font-md py-2 px-4">Brosur</a>
        </div>
      </template>
    </div>
</template>
  
  <script>
  export default {
    props: {
      product: Object,
    },
  };
  </script>