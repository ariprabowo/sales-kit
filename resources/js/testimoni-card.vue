<template>
    <article class="flex flex-col items-start justify-between">
      <div class="group relative">
        <img :src=testimoni.image_url />
        <h3 class="mt-3 text-xl font-semibold leading-6 text-gray-900 group-hover:text-gray-600 hidden">
          <a href="#">
            <span class="absolute inset-0"></span>
            Menyatu dengan Era Internet
          </a>
        </h3>
        <p class="mt-5 line-clamp-10 text-sm leading-6 text-gray-600 hidden">Kami memasuki era internet dan mengidentifikasi kebutuhan pelanggan secara akurat dengan membangun proses pengembangan berwawasan ke depan berdasarkan analisis kebutuhan pengguna dalam berbagai skenario. Selain itu, kami menekankan estetika dan keahlian dalam produk kami, dan terus berupaya meningkatkan pengalaman pengguna melalui desain yang menampilkan interaksi mendalam.</p>
      </div>
    </article>
</template>
  
  <script>
  export default {
    props: {
      testimoni: Object,
    },
  };
  </script>