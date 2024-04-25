@extends('layouts.main')

@section('title', 'About Page')

@section('content')
  <x-navbar/>
  <x-banner />
  <section   class="bg-white flex justify-center dark:bg-gray-900">
    <div class="py-8 mt-12 px-4 mx-auto max-w-screen-xl lg:py-16">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-center text-gray-900 md:text-5xl lg:text-6xl">About Us</h1>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
          <img class="rounded-lg" class="mb-4 " src="{{ asset('images/cvutama.png') }}" />
        </div>
        <div>
          <h3  data-aos="fade-up" class="font-semibold mt-5 text-center text-gray-900 md:text-3xl lg:text-4xl ">Kami Melayani berbagai jenis dan ukuran Drum Besi dan Plastik</h3>
          <div class="text-center my-10">
            <p data-aos="fade-up" class="mb-4 text-lg font-normal text-gray-500 lg:text-xl">Kami percaya bahwa kebersihan dan pengelolaan limbah yang efektif adalah kunci untuk menciptakan lingkungan yang sehat dan berkelanjutan. Oleh karena itu, Tong Ke Berseri berkomitmen untuk menyediakan produk-produk berkualitas tinggi yang membantu pelanggan kami dalam menjaga kebersihan dan merawat lingkungan.</p>
          </div>
        <ol data-aos="fade-up" class="relative border-s border-gray-200 dark:border-gray-700 mt-6 md:mx-32">                  
          <li data-aos="fade-left" class="mb-10 ms-4">
              <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
              <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February 2022</time>
              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Application UI code in Tailwind CSS</h3>
              <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.</p>
              <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Learn more <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg></a>
          </li>
          <li data-aos="fade-left" class="mb-10 ms-4">
              <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
              <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March 2022</time>
              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing UI design in Figma</h3>
              <p class="text-base font-normal text-gray-500 dark:text-gray-400">All of the pages and components are first designed in Figma and we keep a parity between the two versions even as we update the project.</p>
          </li>
          <li data-aos="fade-left" class="ms-4">
              <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
              <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">April 2022</time>
              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">E-Commerce UI code in Tailwind CSS</h3>
              <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements built on top of Tailwind CSS.</p>
          </li>
        </ol>
        </div>
    </div>
  </section >
  <x-footer/> 
@endsection
