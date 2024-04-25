@extends('layouts.main')

@section('title', 'Admin Page')

@section('content')
    <x-app-layout>
        <x-slot name="header">
            <div class="flex justify-between" >
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
                <a href="{{ route('products.index') }}" class="bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded">Kembali</a>
            </div>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                      <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" class="flex flex-col justify-center"  >
                        @csrf
                        <div class="mb-5">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your title</label>
                            <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan title anda" required>
                        </div>
                        <div class="mb-5">
                            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your slug</label>
                            <textarea name="slug" placeholder="Masukan slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required></textarea>
                        </div>
                        <div class="mb-5">
                            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your image</label>
                            <input name="image" type="file" placeholder="Masukan image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        </div>
                        <textarea name="content" id="editor" ></textarea>
                        <button class="mt-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" >Post</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    
@endsection

@push('script')
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ),{
                ckfinder: {
                    uploadUrl: '{{route('image.upload').'?_token='.csrf_token()}}',
        }
            })
            .catch( error => {
                console.error( error );
            } );
    </script>
@endpush


