@extends('layout.master')
@push('css')
<link rel="stylesheet" href="assets/css/animate/animate.min.css">
<link rel="stylesheet" href="assets/css/animate/aos.css">
<style>
    #sign-up-modal::-webkit-scrollbar {
        width: 0;
    }
</style>
@endpush
    
@section('content')
@include('components.modal.modal-auth.modal-signIn')
@include('components.modal.modal-auth.modal-signUp')
<nav class="bg-white border-gray-200 dark:bg-gray-900 sticky w-full z-30 top-0 start-0 shadow-md">
    <div class="max-w-screen flex flex-wrap items-center justify-between mx-auto px-5 p-2">
        <a href="/#hero" class="flex items-center space-x-3">
            <img class="w-6 h-6 sm:w-7 sm:h-7" src="assets/icon/android-chrome-192x192.png" alt="">
            <span
                class="self-center hidden font-picturest sm:block text-sm sm:text-xl font-semibold whitespace-nowrap dark:text-white">Picturest</span>
        </a>
        <div class="flex gap-4">
            <a href="/picturest/explore"
                class="sm:hidden text-blue-500 rounded-lg text-sm p-1.5 me-1 pl-2 scale-100 hover:scale-110 transition-all duration-300">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </a>
            <a href="/picturest/explore"
                class="text-xs p-1 px-3 rounded-md text-black bg-gray-50  hover:shadow-md hover:scale-[1.02] hidden sm:flex">Explore</a>
            <button id="signIn-btn"
                class="text-xs p-1 px-3 rounded-md text-white bg-gradient-to-br from-blue-800 to-blue-400  hover:shadow-md hover:scale-[1.02]">Sign
                In</button>
            <button id="signUp-btn"
                class="hidden sm:flex text-xs p-1 px-3 rounded-md text-black bg-gradient-to-br from-gray-300 to-gray-100 hover:shadow-md hover:scale-[1.02] ">Sign
                Up</button>
        </div>
    </div>
</nav>
<div id="hero">
    <div class="max-h-screen h-screen w-full max-w-[100vw] bg-gradient-to-r from-blue-400 to-blue-950 relative">
        <div class="grid grid-cols-2 h-full place-items-center">
            <div data-aos="zoom-out-up" data-aos-duration="1000" class="relative flex items-center justify-center">
                <div
                    class="absolute w-[200px] h-[400px] md:w-[400px] md:h-[600px] rounded-md overflow-hidden bg-gray-100 transform -rotate-12 shadow-md">
                    <img class="h-full w-full object-cover filter blur-sm" src="assets/img/2151064806.jpg" alt="">
                </div>
                <div
                    class="absolute w-[200px] h-[400px] border-4 border-white md:w-[400px] md:h-[600px] rounded-md overflow-hidden bg-gray-100 transform rotate-12 shadow-md">
                    <img class="h-full w-full object-cover" src="assets/img/2151064806.jpg" alt="">
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="500" data-aos-offset="300" data-aos-easing="ease-in-sine"
                class="flex items-center justify-center h-auto sm:h-2/3 md:h-3/4 lg:h-full w-full z-10 bg-black bg-opacity-25 backdrop-blur-sm rounded-full">
                <div class="text-center max-w-lg mx-auto py-16 px-4 gap-4 sm:px-8 sm:drop-shadow-lg">
                    <h1 class="text-xl sm:text-4xl font-bold text-white mb-4">Welcome to Picturest</h1>
                    <h1 class="sm:text-lg text-xs text-gray-200 mb-5">A platform to share and cherish your
                        unforgettable
                        memories.
                    </h1>
                    <a href="#explore"
                        class="bg-blue-500 text-white hover:bg-blue-600 rounded-md py-1 px-6 transition-all duration-300">Get
                        Started</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="explore">
    <div class="max-w-[100vw] h-screen mx-auto py-16 px-4 w-full bg-gradient-to-tr from-blue-950 to-blue-400">
        <div class="flex flex-col sm:flex-row justify-between w-full h-full">
            <div class="flex justify-start md:justify-center items-start w-1/2 h-full">
                <div class="relative flex w-auto md:h-3/4">
                    <img data-aos="fade-up" data-aos-duration="1000" class="rounded-lg w-full h-full object-cover"
                        src="assets/img/2150862804.jpg" alt="senni">
                    <a href="/picturest/explore" data-aos="fade-doen" data-aos-duration="1000"
                        class="absolute bg-blue-100 p-2 pl-4 md:pl-5 pr-32 md:pr-40 rounded-lg text-sm shadow-md text-gray-800 top-10 left-10 bg-opacity-50 backdrop-blur-sm">
                        Art</a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="800"
                class="flex justify-end md:justify-center items-end w-full sm:w-1/2">
                <div
                    class="flex flex-col justify-center items-center h-[200px] w-[200px] md:h-[400px] md:w-[400px] rounded-full bg-blue-500 bg-opacity-50 backdrop-blur-sm p-4">
                    <h1 class="text-white text-xl font-medium mb-2 md:text-3xl">Search Images</h1>
                    <h2 class="text-white text-center text-sm mb-2 md:text-xl">
                        what do you want to look for? sample "Art" and see what you find
                    </h2>
                    <a href="/picturest/explore"
                        class="rounded-lg text-white bg-gradient-to-tr from-indigo-700 to-purple-950 p-1 px-4 hover:shadow-md hover:scale-105 transition-all">Explore</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="about">
    <div
        class="max-w-[100vw] min-h-screen h-full mx-auto py-16 px-4 w-full bg-gradient-to-tr from-purple-500 to-blue-950">
        <div data-aos="fade-up" class="text-center mb-8">
            <h2 class="text-3xl text-white font-semibold mb-4">About Picturest</h2>
            <h1 class="text-gray-200">Picturest is a platform for sharing and storing your memorable photos. With
                Picturest, you can easily capture and preserve your precious moments.</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div data-aos="fade-up" class="bg-blue-400 bg-opacity-40 p-6 rounded-lg text-gray-200 shadow-md">
                <h3 class="text-xl font-semibold mb-2">Simple and Intuitive</h3>
                <h1 class="text-gray-300">Our user-friendly interface allows you to upload and organize your
                    photos
                    effortlessly.</h1>
            </div>
            <div data-aos="fade-up" class="bg-blue-400 bg-opacity-40 p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2 text-gray-200">Secure Storage</h3>
                <h1 class="text-gray-300">Your photos are securely stored on our servers, ensuring the safety and
                    privacy of your memories.</h1>
            </div>
            <div data-aos="fade-up" class="bg-blue-400 bg-opacity-40 p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2 text-gray-200">Share with Ease</h3>
                <h1 class="text-gray-300">Easily share your photos with friends and family through social media
                    or
                    private links.</h1>
            </div>
        </div>
        <div id="cta" class="mt-10">
            <div class="bg-gray-800 bg-opacity-50 text-white py-16 px-4 text-center">
                <h2 data-aos="fade-up" class="text-3xl font-semibold mb-4">Ready to Capture Your Memories?
                </h2>
                <h1 data-aos="fade-up" class="text-gray-300 mb-8">Join Picturest today and start sharing your
                    unforgettable moments!
                </h1>
                <button data-aos="fade-up" id="btn-signUp"
                    class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 rounded-full">Sign Up
                    Now</button>
            </div>
        </div>
    </div>
</div>
<footer class="bg-gray-800 text-white py-8 px-4 text-center">
    <div class="container mx-auto flex justify-center items-center">
        <h1 class="mt-4 text-gray-500">&copy; 2024 Picturest. All rights reserved.</h1>
    </div>
</footer>
@endsection
@push('js')
<script src="assets/js/flowbite.min.js"></script>
<script src="assets/jquery/jquery-3.7.1.min.js"></script>
<script src="assets/js/index.js"></script>
<script src="assets/js/auth/signIn.js"></script>
<script src="assets/js/auth/signUp.js"></script>~
@endpush


