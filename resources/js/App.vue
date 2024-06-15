<template>
      <header class="absolute inset-x-0 top-0 z-50 sticky">
        <nav class="flex items-center justify-between p-6 lg:px-8 bg-gray-800" aria-label="Global">
          <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">AION</span>
              <img class="h-8 w-auto" :src="logoWhiteUrl" alt="" />
            </a>
          </div>
          <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" @click="mobileMenuOpen = true">
              <span class="sr-only">Open main menu</span>
              <Bars3Icon class="h-6 w-6 text-white" aria-hidden="true" />
            </button>
          </div>
          <div class="hidden lg:flex lg:gap-x-12">
            <a v-for="item in navigation" :key="item.name" :href="item.href" @click.prevent="scrollToSection(item.name)" class="text-md font-semibold leading-6 text-white hover:text-cyan-300">{{ item.name }}</a>
          </div>
          <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <!-- <a href="#" class="text-md font-semibold leading-6 text-white hover:text-cyan-300">Pesan  -->
                <!-- <span aria-hidden="true">&rarr;</span> -->
            <!-- </a> -->
          </div>
        </nav>
        <Dialog class="lg:hidden" @close="mobileMenuOpen = false" :open="mobileMenuOpen">
          <div class="fixed inset-0 z-50" />
          <DialogPanel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
              <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" :src="logoBlackUrl" alt="" />
              </a>
              <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="mobileMenuOpen = false">
                <span class="sr-only">Close menu</span>
                <XMarkIcon class="h-6 w-6" aria-hidden="true" />
              </button>
            </div>
            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                  <a v-for="item in navigation" :key="item.name" :href="item.href" @click.prevent="scrollToSection(item.name)" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">{{ item.name }}</a>
                </div>
                <div class="py-6">
                  <!-- <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Book</a> -->
                </div>
              </div>
            </div>
          </DialogPanel>
        </Dialog>
      </header>
  
      <div class="relative isolate px-6 pt-14 lg:px-8 bg-fixed bg-cover sm:bg-cover drop-shadow-lg" :style="{ backgroundImage: `url(${heroUrl})` }">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
          <div class="text-center">
            <h1 class="text-4xl sm:text-8xl font-bold tracking-tight text-white sm:text-6xl">AION Y Plus</h1>
            <p class="mt-6 leading-8 text-white font-md text-3xl">Elegan . Canggih . Aman</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
              <a href="#" class="rounded-md bg-cyan-400 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-cyan-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Pesan</a>
              <a href="#" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-grey-300 shadow-sm hover:bg-cyan focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Brosur</a>
            </div>
          </div>
        </div>
      </div>

      <section class="relative container p-4" id="Fitur">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl text-center py-12">Fitur</h2>
        <div class="grid md:grid-cols-2 sm:grid-cols-1 gap-7">
            <div class="bg-cover w-full min-h-[400px] flex items-end" :style="{ backgroundImage: `url(${fitur1Url})` }">
                <div class="p-10 text-white text-lg font-md bg-gradient-to-t from-gray-800 w-full">Penangan Lebih Baik</div>
            </div>
            <div class="bg-cover w-full min-h-[400px] flex items-end" :style="{ backgroundImage: `url(${fitur2Url})` }">
                <div class="p-10 text-white text-lg font-md bg-gradient-to-t from-gray-800 w-full">Keamanan Lebih Kuat</div>
            </div>
            <div class="bg-cover w-full min-h-[400px] flex items-end" :style="{ backgroundImage: `url(${fitur3Url})` }">
                <div class="p-10 text-white text-lg font-md bg-gradient-to-t from-gray-800 w-full">Teknologi Yang Lebih Cerdas</div>
            </div>
            <div class="bg-cover w-full min-h-[400px] flex items-end" :style="{ backgroundImage: `url(${fitur4Url})` }">
                <div class="p-10 text-white text-lg font-md bg-gradient-to-t from-gray-800 w-full">Lebih Banyak Ruang</div>
            </div>
        </div>
      </section>

      <section  class="relative" id="Ringkasan">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl text-center py-12">Ringkasan</h2>
        <div class="relative min-h-[600px] md:bg-cover sm:bg-none" :style="{ backgroundImage: `url(${ringkasanBgUrl})` }">
          <div class="grid md:grid-cols-4 sm:grid-cols-1 gap-7 pb-10 max-w-[80%] mx-auto pt-8">
            <div class="">
                <img class="w-full" :src="ringkasan1Url"/>
                <div class="text-white text-lg text-center font-bold">Layar Kecerdasan Ganda</div>   
            </div>
            <div class="">
                <img class="w-full" :src="ringkasan2Url"/>
                <div class="text-white text-lg text-center font-bold">Desain Saluran Udara Baru</div>   
            </div>
            <div class="">
                <img class="w-full" :src="ringkasan3Url"/>
                <div class="text-white text-lg text-center font-bold">Sunroof Elektrik Panorama dan Bergaya Kerai</div>   
            </div>
            <div class="">
                <img class="w-full" :src="ringkasan4Url"/>
                <div class="text-white text-lg text-center font-bold">Kursi Lipat Terpisah 40/60 Baris Kedua</div> 
            </div>
          </div>
        </div>
      </section>

      <iframe class="md:w-[70%] sm:w-full md:min-h-[500px] aspect-video py-10 mx-auto" :src="videoUrl"></iframe>
    
      <div class="isolate bg-white px-6 pb-10 lg:px-8" id="Kontak">
          <div class="mx-auto max-w-2xl text-center">
              <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Kontak</h2>
          </div>
          <form @submit.prevent="submitPost" class="mx-auto max-w-xl sm:mt-20">
              <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">Titel</label>
                    <div class="mt-2.5">
                      <select v-model="titel" name="titel" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option value="Tuan">Tuan</option>
                        <option value="Ny">Ny</option>
                      </select>
                    </div>
                </div>
                <div>
                    <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Nama</label>
                    <div class="mt-2.5">
                    <input v-model="nama" type="text" name="nama" id="nama" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="type" class="block text-sm font-semibold leading-6 text-gray-900">Tipe</label>
                    <div class="mt-2.5">
                      <select v-model="selectedType" name="type_id" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option value="">Please Select</option>
                        <option v-for="type in types" :key="type.id" :value="type.id">{{ type.name }}</option> 
                      </select>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                    <div class="mt-2.5">
                    <input v-model="email" type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">No. Hp</label>
                    <div class="mt-2.5">
                    <input v-model="phone" type="number" name="phone" id="phone" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Alamat</label>
                    <div class="mt-2.5">
                    <textarea v-model="address" name="address" id="address" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
                <div class="flex gap-x-4 sm:col-span-2 hidden">
                    <div class="flex h-6 items-center">
                      <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                      <button type="button" class="flex w-8 flex-none cursor-pointer rounded-full bg-gray-200 p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" role="switch" aria-checked="false" aria-labelledby="switch-1-label">
                          <span class="sr-only">Agree to policies</span>
                          <!-- Enabled: "translate-x-3.5", Not Enabled: "translate-x-0" -->
                          <span aria-hidden="true" class="h-4 w-4 translate-x-0 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>
                      </button>
                    </div>
                    <label class="text-sm leading-6 text-gray-600" id="switch-1-label">
                      By selecting this, you agree to our
                      <a href="#" class="font-semibold text-indigo-600">privacy&nbsp;policy</a>.
                    </label>
                </div>
              </div>
              <div class="mt-10">
                <button type="submit" class="block w-full rounded-md bg-cyan-400 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-cyan-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-400">Kirim</button>
              </div>
          </form>
      </div>

      <footer class="relative bottom-0 left-0 w-full bg-gray-800 text-white p-4 flex justify-center items-center">
        <p>Copyright &copy; 2024 AION</p>
      </footer>

      <a href="https://wa.me/6289512591564" target="_blank" class="fixed bottom-20 right-20 w-16 h-16 rounded-full bg-green-500 text-white flex justify-center items-center shadow-md hover:shadow-lg">
          <svg class="fill-white w-[50px]" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
              <path d="M 25 2 C 12.3 2 2 12.3 2 25 C 2 29.1 3.1 32.899219 5 36.199219 L 2 46.699219 C 1.9 46.999219 1.9992187 47.399219 2.1992188 47.699219 C 2.4992187 47.999219 2.8992187 48 3.1992188 48 L 14.199219 45.300781 C 17.399219 47.000781 21.1 48 25 48 C 37.7 48 48 37.7 48 25 C 48 12.3 37.7 2 25 2 z M 25 4 C 36.6 4 46 13.4 46 25 C 46 36.6 36.6 46 25 46 C 21.3 46 17.800781 45.000781 14.800781 43.300781 C 14.600781 43.200781 14.299609 43.099219 14.099609 43.199219 L 4.5 45.599609 L 7 36.400391 C 7.1 36.100391 7.0003906 35.899609 6.9003906 35.599609 C 5.1003906 32.499609 4 28.9 4 25 C 4 13.4 13.4 4 25 4 z M 18.113281 12.988281 C 17.925781 12.975781 17.800781 13 17.800781 13 L 16.599609 13 C 15.999609 13 15.100781 13.2 14.300781 14 C 13.800781 14.5 12 16.3 12 19.5 C 12 22.9 14.299609 25.799609 14.599609 26.099609 C 14.599609 26.099609 15 26.600781 15.5 27.300781 C 16 28.000781 16.699609 28.800781 17.599609 29.800781 C 19.399609 31.700781 21.899609 33.899219 25.099609 35.199219 C 26.499609 35.799219 27.699609 36.2 28.599609 36.5 C 30.199609 37 31.700781 36.900781 32.800781 36.800781 C 33.600781 36.700781 34.500391 36.299219 35.400391 35.699219 C 36.300391 35.099219 37.199609 34.400391 37.599609 33.400391 C 37.899609 32.600391 37.999609 31.900781 38.099609 31.300781 L 38.099609 30.5 C 38.099609 30.2 38.000781 30.200781 37.800781 29.800781 C 37.300781 29.000781 36.799219 29.000781 36.199219 28.800781 C 35.899219 28.600781 34.999219 28.200781 34.199219 27.800781 C 33.299219 27.400781 32.599609 27.000781 32.099609 26.800781 C 31.799609 26.700781 31.400391 26.499609 30.900391 26.599609 C 30.400391 26.699609 29.899609 27 29.599609 27.5 C 29.299609 27.9 28.200781 29.299219 27.800781 29.699219 L 27.699219 29.599609 C 27.299219 29.399609 26.7 29.200781 26 28.800781 C 25.2 28.400781 24.299219 27.800781 23.199219 26.800781 C 21.599219 25.400781 20.499219 23.699609 20.199219 23.099609 C 20.499219 22.699609 20.899609 22.3 21.099609 22 C 21.199609 21.9 21.280859 21.799219 21.349609 21.699219 C 21.418359 21.599219 21.475391 21.500391 21.525391 21.400391 C 21.625391 21.200391 21.700781 21.000781 21.800781 20.800781 C 22.200781 20.100781 22.000781 19.300391 21.800781 18.900391 C 21.800781 18.900391 21.7 18.600781 21.5 18.300781 C 21.4 18.000781 21.2 17.499609 21 17.099609 C 20.6 16.199609 20.2 15.199609 20 14.599609 C 19.7 13.899609 19.300781 13.399219 18.800781 13.199219 C 18.550781 13.049219 18.300781 13.000781 18.113281 12.988281 z M 16.599609 15 L 17.699219 15 L 17.900391 15 C 17.900391 15 17.999609 15.100391 18.099609 15.400391 C 18.299609 16.000391 18.799609 17.000391 19.099609 17.900391 C 19.299609 18.300391 19.499609 18.799609 19.599609 19.099609 C 19.699609 19.399609 19.800391 19.600781 19.900391 19.800781 C 19.900391 19.900781 20 19.900391 20 19.900391 C 19.8 20.300391 19.8 20.399219 19.5 20.699219 C 19.2 21.099219 18.799219 21.499219 18.699219 21.699219 C 18.599219 21.899219 18.299609 22.1 18.099609 22.5 C 17.899609 22.9 18.000781 23.599609 18.300781 24.099609 C 18.700781 24.699609 19.900781 26.700391 21.800781 28.400391 C 23.000781 29.500391 24.1 30.199609 25 30.599609 C 25.9 31.099609 26.600781 31.300391 26.800781 31.400391 C 27.200781 31.600391 27.599609 31.699219 28.099609 31.699219 C 28.599609 31.699219 29.000781 31.3 29.300781 31 C 29.700781 30.6 30.699219 29.399609 31.199219 28.599609 L 31.400391 28.699219 C 31.400391 28.699219 31.699609 28.8 32.099609 29 C 32.499609 29.2 32.900391 29.399609 33.400391 29.599609 C 34.300391 29.999609 35.100391 30.399609 35.400391 30.599609 L 36 30.900391 L 36 31.199219 C 36 31.599219 35.899219 32.200781 35.699219 32.800781 C 35.599219 33.100781 35.000391 33.699609 34.400391 34.099609 C 33.700391 34.499609 32.899609 34.800391 32.599609 34.900391 C 31.699609 35.000391 30.600781 35.099219 29.300781 34.699219 C 28.500781 34.399219 27.4 34.1 26 33.5 C 23.2 32.3 20.899219 30.3 19.199219 28.5 C 18.399219 27.6 17.699219 26.799219 17.199219 26.199219 C 16.699219 25.599219 16.500781 25.2 16.300781 25 C 15.900781 24.6 14 21.999609 14 19.599609 C 14 17.099609 15.200781 16.100391 15.800781 15.400391 C 16.100781 15.000391 16.499609 15 16.599609 15 z"></path>
          </svg>
      </a>
  </template>
  
  <script setup>
  import { ref } from 'vue'
  import { Dialog, DialogPanel } from '@headlessui/vue'
  import { Bars3Icon, XMarkIcon } from '@heroicons/vue/24/outline'
  
  const navigation = [
    { name: 'Fitur', href: '#' },
    { name: 'Ringkasan', href: '#' },
    { name: 'Kontak', href: '#' },
  ]
  
  const mobileMenuOpen = ref(false)

  const logoWhiteUrl = ref('/assets/images/logo_white.svg'); 
  const logoBlackUrl = ref('/assets/images/logo.svg'); 
  const heroUrl = ref('/assets/images/hero.png'); 

  const fitur1Url = ref('/assets/images/car-label-pic1.jpg'); 
  const fitur2Url = ref('/assets/images/car-label-pic2.jpg'); 
  const fitur3Url = ref('/assets/images/car-label-pic3.jpg'); 
  const fitur4Url = ref('/assets/images/car-label-pic4.jpg'); 

  const ringkasanBgUrl = ref('/assets/images/expansive-cabin-bg.jpg'); 
  const ringkasan1Url = ref('/assets/images/overview-1.jpeg'); 
  const ringkasan2Url = ref('/assets/images/overview-2.jpeg'); 
  const ringkasan3Url = ref('/assets/images/overview-3.jpeg'); 
  const ringkasan4Url = ref('/assets/images/overview-4.jpg'); 

  const videoUrl = ref('/assets/images/overview-aiony.mp4'); 

  </script>
  <script>
    import throttle from 'lodash/throttle'; // Assuming Lodash is installed
    import axios from 'axios';
    export default {
      data() {
        return {
          titel: '',
          nama: '',
          email: '',
          phone: '',
          type_id: '',
          address: '',
          types: [],
          selectedType: null,
        };
      },
      mounted() {
        this.fetchTypes();
      },
      methods: {
          scrollToSection(target) {
            const section = document.getElementById(target);
            if (section) {
                const throttledScroll = throttle(() => {
                section.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }, 16); // Throttle to ~60fps

                throttledScroll();
            } else {
                console.error("Section not found:", target);
            }
          },
          
          fetchTypes() {
            axios.get('/api/type/getData')
              .then(response => {
                this.types = response.data;
              })
              .catch(error => {
                console.error('Error fetching types:', error);
                // Handle errors appropriately (e.g., display an error message)
              });
          },

          submitPost() {
            axios.post('/api/reservation/create', { 
                titel: this.titel, 
                name: this.nama,
                email: this.email,
                type_id: this.selectedType,
                phone: this.phone,
                address: this.address,
              })
              .then(response => {
                console.log(response.data);
                alert('Data has been saved successful'); // Log the created post
                // Clear form or handle success here
              })
              .catch(error => {
                console.error(error); // Handle errors
              });
          }
      }
    };
  </script>