@extends('layout.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate/aos.css') }}">
@endpush
@section('content')
 @include('components.navbar.searchNav')
 @include('components.modal.modal-auth.modal-signIn')
 @include('components.modal.modal-auth.modal-signUp')

  <a href="/home"
    class="sticky z-20 top-16 start-3 w-7 bg-opacity-50 backdrop-blur-sm bg-blue-300 p-2 shadow-md border-blue-400 rounded-full flex items-center text-black text-lg font-bold">
    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
      <path
        d="M.88,14.09,4.75,18a1,1,0,0,0,1.42,0h0a1,1,0,0,0,0-1.42L2.61,13H23a1,1,0,0,0,1-1h0a1,1,0,0,0-1-1H2.55L6.17,7.38A1,1,0,0,0,6.17,6h0A1,1,0,0,0,4.75,6L.88,9.85A3,3,0,0,0,.88,14.09Z" />
    </svg>
  </a>

  <div class="container mt-3 mx-auto p-5">
    <div class="mb-28 mx-auto w-full">
      <h1 class="mb-5 text-xl text-center font-semibold text-gray-800">Search Related Categories</h1>
      <div class="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-5 gap-2 mb-10">
        <a href="kategori.html"
          class="relative h-28 w-full sm:h-40 md:h-52 lg:h-60 rounded-md overflow-hidden group hover:scale-[1.01] hover:shadow-md transition-all">
          <div
            class="absolute flex justify-center items-center bg-opacity-50 hover:bg-opacity-20 bg-black w-full h-full">
            <h1
              class="text-white text-xs md:text-sm hidden text-center group-hover:flex justify-center bg-black p-1 rounded-full bg-opacity-50 px-2 w-full transition-all">
              Name Kategori</h1>
          </div>
          <img class="h-full w-full object-cover" src="assets/img/2150767521.jpg" alt="">
        </a>
        <a href="kategori.html"
          class="relative h-28 w-full sm:h-40 md:h-52 lg:h-60 rounded-md overflow-hidden group hover:scale-[1.01] hover:shadow-md transition-all">
          <div
            class="absolute flex justify-center items-center bg-opacity-50 hover:bg-opacity-20 bg-black w-full h-full">
            <h1
              class="text-white text-xs md:text-sm text-center hidden group-hover:flex justify-center bg-black p-1 rounded-full bg-opacity-50 px-2 w-full transition-all">
              Name Kategori</h1>
          </div>
          <img class="h-full w-full object-cover" src="assets/img/2150914717.jpg" alt="">
        </a>
        <a href="kategori.html"
          class="relative h-28 w-full sm:h-40 md:h-52 lg:h-60 rounded-md overflow-hidden group hover:scale-[1.01] hover:shadow-md transition-all">
          <div
            class="absolute flex justify-center items-center bg-opacity-50 hover:bg-opacity-20 bg-black w-full h-full">
            <h1
              class="text-white text-xs md:text-sm text-center hidden group-hover:flex justify-center bg-black p-1 rounded-full bg-opacity-50 px-2 w-full transition-all">
              Name Kategori</h1>
          </div>
          <img class="h-full w-full object-cover" src="assets/img/2150862804.jpg" alt="">
        </a>
        <a href="kategori.html"
          class="relative h-28 w-full sm:h-40 md:h-52 lg:h-60 rounded-md overflow-hidden group hover:scale-[1.01] hover:shadow-md transition-all">
          <div
            class="absolute flex justify-center items-center bg-opacity-50 hover:bg-opacity-20 bg-black w-full h-full">
            <h1
              class="text-white text-xs md:text-sm text-center hidden group-hover:flex justify-center bg-black p-1 rounded-full bg-opacity-50 px-2 w-full transition-all">
              Name Kategori</h1>
          </div>
          <img class="h-full w-full object-cover" src="assets/img/2151064806.jpg" alt="">
        </a>
        <a href="kategori.html"
          class="relative h-28 w-full sm:h-40 md:h-52 lg:h-60 rounded-md overflow-hidden group hover:scale-[1.01] hover:shadow-md transition-all">
          <div
            class="absolute flex justify-center items-center bg-opacity-50 hover:bg-opacity-20 bg-black w-full h-full">
            <h1
              class="text-white text-xs md:text-sm text-center hidden group-hover:flex justify-center bg-black p-1 rounded-full bg-opacity-50 w-full transition-all">
              Name Kategori</h1>
          </div>
          <img class="h-full w-full object-cover" src="assets/img/image1.jpg" alt="">
        </a>
      </div>
      <h1 class="mb-5 text-lg text-center font-semibold text-gray-800">Explore the latest posts</h1>
      <div class="columns-2 gap-2 sm:gap-2 sm:columns-4 lg:columns-6">
        <figure class="flex flex-col border bg-white drop-shadow-md overflow-hidden  rounded-md mb-2">
          <a class="overflow-hidden" href="detail.html">
            <img
              class="filter grayscale-0 hover:grayscale cursor-zoom-in transition-all duration-500 scale-100 hover:scale-105"
              src="assets/img/img.jpg" alt="" />
          </a>
          <div class="flex flex-col w-full">
            <a href="detail.html" class="flex text-[10px] sm:text-xs font-normal p-1 px-3 break-all">judul postingan
              postingan
              postingan postingan</a>
            <div class="flex gap-2 p-2 bottom-0 h-full justify-between w-full">
              <a href="profil.html" class="flex items-center gap-2">
                <img class="w-5 h-5 sm:w-8 sm:h-8 rounded-full object-cover" src="assets/img/image.jpg" alt="profil">
                <h1 class="text-[9px] sm:text-xs text-black font-medium hover:underline transition-all duration-300">
                  king koding</h1>
              </a>
              <a href="detail.html" class="flex items-center gap-1">
                <span class="text-xs">19</span>
                <svg fill="currentColor"
                  class="h-3 w-3 scale-100 hover:scale-110 hover:drop-shadow-lg text-red-600 cursor-pointer"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path
                    d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z" />
                </svg>
              </a>
            </div>
          </div>
        </figure>
        <figure class="flex flex-col border bg-white drop-shadow-md overflow-hidden  rounded-md mb-2">
          <a class="overflow-hidden" href="detail.html">
            <img
              class="filter grayscale-0 hover:grayscale cursor-zoom-in transition-all duration-500 scale-100 hover:scale-105"
              src="assets/img/image.jpg" alt="" />
          </a>
          <div class="flex flex-col w-full">
            <div class="flex text-[10px] sm:text-xs font-normal p-1 px-3 break-all">judul postingan postingan
              postingan postingan</div>
            <div class="flex gap-2 p-2 bottom-0 h-full justify-between w-full">
              <a href="profil.html" class="flex items-center gap-2">
                <img class="w-5 h-5 sm:w-8 sm:h-8 rounded-full object-cover" src="assets/img/image.jpg" alt="profil">
                <h1 class="text-[9px] sm:text-xs text-black font-medium">king koding</h1>
              </a>
              <a href="detail.html" class="flex items-center gap-1">
                <span class="text-xs">19</span>
                <svg fill="currentColor"
                  class="h-3 w-3 scale-100 hover:scale-110 hover:drop-shadow-lg text-red-600 cursor-pointer"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path
                    d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z" />
                </svg>
              </a>
            </div>
          </div>
        </figure>
        <figure class="flex flex-col border bg-white drop-shadow-md overflow-hidden  rounded-md mb-2">
          <a class="overflow-hidden" href="detail.html">
            <img
              class="filter grayscale-0 hover:grayscale cursor-zoom-in transition-all duration-500 scale-100 hover:scale-105"
              src="assets/img/image2.jpg" alt="" />
          </a>
          <div class="flex flex-col w-full">
            <div class="flex text-[10px] sm:text-xs font-normal p-1 px-3 break-all">judul postingan postingan
              postingan postingan</div>
            <div class="flex gap-2 p-2 bottom-0 h-full justify-between w-full">
              <a href="profil.html" class="flex items-center gap-2">
                <img class="w-5 h-5 sm:w-8 sm:h-8 rounded-full object-cover" src="assets/img/image.jpg" alt="profil">
                <h1 class="text-[9px] sm:text-xs text-black font-medium">king koding</h1>
              </a>
              <a href="detail.html" class="flex items-center gap-1">
                <span class="text-xs">19</span>
                <svg fill="currentColor"
                  class="h-3 w-3 scale-100 hover:scale-110 hover:drop-shadow-lg text-red-600 cursor-pointer"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path
                    d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z" />
                </svg>
              </a>
            </div>
          </div>
        </figure>
        <figure class="flex flex-col border bg-white drop-shadow-md overflow-hidden  rounded-md mb-2">
          <a class="overflow-hidden" href="detail.html">
            <img
              class="filter grayscale-0 hover:grayscale cursor-zoom-in transition-all duration-500 scale-100 hover:scale-105"
              src="assets/img/img.jpg" alt="" />
          </a>
          <div class="flex flex-col w-full">
            <div class="flex text-[10px] sm:text-xs font-normal p-1 px-3 break-all">judul postingan postingan
              postingan postingan</div>
            <div class="flex gap-2 p-2 bottom-0 h-full justify-between w-full">
              <a href="profil.html" class="flex items-center gap-2">
                <img class="w-5 h-5 sm:w-8 sm:h-8 rounded-full object-cover" src="assets/img/image.jpg" alt="profil">
                <h1 class="text-[9px] sm:text-xs text-black font-medium">king koding</h1>
              </a>
              <a href="detail.html" class="flex items-center gap-1">
                <span class="text-xs">19</span>
                <svg fill="currentColor"
                  class="h-3 w-3 scale-100 hover:scale-110 hover:drop-shadow-lg text-red-600 cursor-pointer"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path
                    d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z" />
                </svg>
              </a>
            </div>
          </div>
        </figure>
        <figure class="flex flex-col border bg-white drop-shadow-md overflow-hidden  rounded-md mb-2">
          <a class="overflow-hidden" href="detail.html">
            <img
              class="filter grayscale-0 hover:grayscale cursor-zoom-in transition-all duration-500 scale-100 hover:scale-105"
              src="assets/img/image3.jpg" alt="" />
          </a>
          <div class="flex flex-col w-full">
            <a href="detail.html"
              class="flex text-[10px] sm:text-xs font-normal p-1 px-3 break-all cursor-pointer">judul postingan
              postingan
              postingan postingan</a>
            <div class="flex gap-2 p-2 bottom-0 h-full justify-between w-full">
              <a href="profil.html" class="flex items-center gap-2">
                <img class="w-5 h-5 sm:w-8 sm:h-8 rounded-full object-cover" src="assets/img/image.jpg" alt="profil">
                <h1 class="text-[9px] sm:text-xs text-black font-medium hover:underline">king koding</h1>
              </a>
              <a href="detail.html" class="flex items-center gap-1">
                <span class="text-xs">19</span>
                <svg fill="currentColor"
                  class="h-3 w-3 scale-100 hover:scale-110 hover:drop-shadow-lg text-red-600 cursor-pointer"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path
                    d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z" />
                </svg>
              </a>
            </div>
          </div>
        </figure>
      </div>
    </div>
  </div>
@endsection
@push('js')
<script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
<script src="{{ asset('assets/jquery/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/search.js') }}"></script>
<script src="{{ asset('assets/js/index.js') }}"></script>
<script src="{{ asset('assets/js/auth/signIn.js') }}"></script>
<script src="{{ asset('assets/js/auth/signUp.js') }}"></script>
@endpush
