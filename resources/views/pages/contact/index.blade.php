@extends('layouts.main')

@section('title', 'Contact Page')

@section('content')
  <x-navbar/>
  <x-banner />
  <section class="bg-white flex justify-center dark:bg-gray-900">
    <div class="py-8 md:px-4 mx-auto max-w-screen-xl lg:py-16 mt-10">
      <div class="md:mx-48 flex justify-center">
        <iframe class="rounded-lg" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3956.189246519284!2d112.735875!3d-7.444303!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e7afbbca0f75%3A0xbea31985382ac7e0!2sCV%20UTAMA%202!5e0!3m2!1sid!2sid!4v1710297714164!5m2!1sid!2sid" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <h3 class="text-3xl md:text-5xl font-semibold text-slate-800 md:my-8 dark:text-white my-4 text-center">Hubungi Kami</h3>
      <div data-aos="fade-up" class="grid md:grid-cols-2 gap-4 grid-cols-1">
        <div class="p-6">
          <form class="max-w-sm mx-auto">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
          </form>
        </div>
        <div class="p-6">
          <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Menerima Pesanan dan juga pertanyaan mengenai layanan</h5>
          <ul>
            <li class="mb-4">
              <i class="fas fa-map-marker-alt mr-2"></i>
              <strong >Alamat:</strong>
              <a class="text-blue-600 dark:text-blue-500 hover:underline" href="https://maps.app.goo.gl/81JxqcSBpnQQvVYv5">
              <span>Lingkar Timur, Sidoarjo</span></a>
            </li>
            <li class="mb-4">
              <i class="fas fa-map-marker-alt mr-2"></i>
              <strong>Whatsapp:</strong>
              <a class="text-blue-600 dark:text-blue-500 hover:underline" href="https://api.whatsapp.com/send?phone=6282230655546&text=Hallo%2C%20Aku%20ada%20pertanyaan%20tentang%20bisnis%20drum">
              <span>+62 822 3065 5546</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <x-footer/>
@endsection