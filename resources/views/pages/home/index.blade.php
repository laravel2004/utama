@extends('layouts.main')

@section('title', 'Home Page')

@section('content')
    <x-navbar/>
    <x-banner />
    
    {{-- jumbotron hero --}}
    <section data-aos="fade-up" class="bg-white flex justify-center dark:bg-gray-900">
      <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
          <h1 class="mb-4 mt-12 text-3xl font-semibold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-5xl dark:text-white">Melayani Pembelian Drum Grosir dan Satuan</h1>
          <p class="text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">Drum dan Wadah Berkualitas Kami menyediakan beragam pilihan drum besi dan plastik dengan berbagai ukuran dan spesifikasi. Drum kami tidak hanya tahan lama tetapi juga dirancang untuk memenuhi standar kualitas tertinggi, sehingga Anda dapat yakin barang berharga Anda akan aman..</p>
          <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <img src="https://cvutama.com/_next/image?url=%2Fimages%2Fbanner-art.jpeg&w=640&q=75" />
          </div>
          <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
              <a href="{{ route('service') }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                  Lihat Products
                  <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                  </svg>
              </a>
              <a href="{{ route('about') }}" class="inline-flex justify-center items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                  Pelajari Lebih Lanjut
              </a>
          </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2e8f0" fill-opacity="1" d="M0,192L40,186.7C80,181,160,171,240,165.3C320,160,400,160,480,176C560,192,640,224,720,202.7C800,181,880,107,960,74.7C1040,43,1120,53,1200,58.7C1280,64,1360,64,1400,64L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    <section class="bg-slate-200 p-6"  >
        <h3 class="text-3xl md:text-5xl font-semibold text-slate-800 md:my-8 dark:text-white my-4 text-center">Layanan kami</h3>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3">
            <x-card-suggestion title="Harga Grosir dengan Pembelian Banyak" content="Dengan minimal pembelian satu truck anda mendapatkan diskon dan juga harga grosir yang terjangkau" link="{{route('service')}}" button="Lihat Product" image="images/money.jpg" />
            <x-card-suggestion title="Garansi Sesuai Perjanjian yang Ditetapkan" content="Customer Bisa Claim garansi yang sudah ditetapkan pada saat perjanjian di awal pembelian" link="#" button="Lihat Artikel" image="images/garansi.jpg" />
            <x-card-suggestion title="Pengiriman Cepat dan Harga Terjangkau" content="Kami memiliki banyak armada untuk mengantarkan pesanan anda setiap waktu dan tepat waktu" link="{{route('contact')}}" button="Kontak Kami" image="images/transport.jpg" />
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2e8f0" fill-opacity="1" d="M0,192L40,186.7C80,181,160,171,240,165.3C320,160,400,160,480,176C560,192,640,224,720,202.7C800,181,880,107,960,74.7C1040,43,1120,53,1200,58.7C1280,64,1360,64,1400,64L1440,64L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
    <section class="p-6  overflow-x-auto whitespace-nowrap flex gap-5">
        
    </section>
    <section class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
        <h1 class="mb-4 mt-12 text-3xl font-semibold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-5xl dark:text-white">Gallery CV UTAMA</h1>
        <div class="grid mt-6 grid-cols-2 md:grid-cols-3 gap-4">
            <div  data-aos="fade-right">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
            </div>
            <div  data-aos="fade-right">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
            </div>
            <div  data-aos="fade-right">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
            </div>
            <div  data-aos="fade-right">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
            </div>
            <div  data-aos="fade-right">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
            </div>
            <div  data-aos="fade-right">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
            </div>
            <div  data-aos="fade-right">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
            </div>
            <div  data-aos="fade-right">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
            </div>
            <div  data-aos="fade-right">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
            </div>
            <div  data-aos="fade-right">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
            </div>
            <div  data-aos="fade-right">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
            </div>
            <div  data-aos="fade-right">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
            </div>
        </div>
    </section>
    <section>
        <h3 class="text-3xl md:text-5xl font-semibold text-slate-800 md:my-8 dark:text-white my-4 text-center">Pertanyaan Umum</h3> 
        <div class="p-8 grid grid-cols-1 gap-6 sm:grid-cols-2 items-center justify-center" >
            <img  data-aos="fade-right" src="https://cvutama.com/_next/image?url=%2Fimages%2Fbanner-art.jpeg&w=640&q=75" />
            <x-accordion-faq />
        </div>
    </section>
    <x-footer />
@endsection