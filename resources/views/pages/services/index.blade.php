@extends('layouts.main')

@section('title', 'Services Page')
    
@section('content')
  <x-navbar/>
  <x-banner />
  <section class="bg-white flex justify-center dark:bg-gray-900">
    <div class="py-8 mt-6 px-4 mx-auto max-w-screen-xl grid grid-cols-1 md:grid-cols-4 gap-4 lg:py-16">
      @foreach ($products as $product)
        <div data-aos="fade-left" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <a href="#">
              <img class="rounded-t-lg" src="{{ asset('/images/'.$product->image) }}" alt="" />
          </a>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $product->title }}</h5>
              </a>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $product->slug }}</p>
              <a href="{{ route('product.show', $product->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  Lihat Product
                  <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                  </svg>
              </a>
          </div>
        </div>
      @endforeach
    </div>
    {{ $products->links() }}
  </section>
  <x-footer/>
@endsection
