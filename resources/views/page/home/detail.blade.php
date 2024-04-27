@extends('layout.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/animate/animate.min.css') }}">
    <style>
        .barscroll::-webkit-scrollbar {
            width: 0px;
        }
    </style>
@endpush
@section('content')
    <nav class="bg-white border-gray-200 dark:bg-gray-900 sticky w-full z-30 top-0 start-0 drop-shadow-md">
        <div class="w-full flex justify-between items-center p-2 pl-5">
            <a onclick="goBack()"
                class="flex items-center p-1 text-black bg-blue-300 rounded-full text-lg font-bold cursor-pointer">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                    <path
                        d="M.88,14.09,4.75,18a1,1,0,0,0,1.42,0h0a1,1,0,0,0,0-1.42L2.61,13H23a1,1,0,0,0,1-1h0a1,1,0,0,0-1-1H2.55L6.17,7.38A1,1,0,0,0,6.17,6h0A1,1,0,0,0,4.75,6L.88,9.85A3,3,0,0,0,.88,14.09Z" />
                </svg>
            </a>
            <a href="#" class="flex-grow flex items-center justify-center">
                <span class="text-sm font-medium whitespace-nowrap dark:text-white">Detail Post</span>
            </a>
        </div>
    </nav>

    <section id="foto">
        <div class="container mx-auto p-5 w-full md:w-11/12 lg:w-4/5">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 md:grid-cols-2 mt-5">
                <!-- kiri -->
                <div class="relative w-full lg:max-h-[85vh] md:max-h-[65vh] min-h-[60vh] sm:min-h-[65vh] lg:min-h-[85vh]">
                    <img src="{{ asset('photo/' . $photos->image) }}" class="absolute z-0 w-full h-full rounded" />
                    <div class="absolute z-[5] w-full h-full bg-black bg-opacity-50 backdrop-blur rounded"></div>
                    <!-- Gambar asli -->
                    <img id="image" class="relative z-10 h-full w-full object-contain"
                        src="{{ asset('photo/' . $photos->image) }}" alt="gambar" />
                </div>
                <!-- kanan -->
                <div
                    class="w-full lg:max-h-[85vh] min-h-full sm:min-h-[65vh]  md:max-h-[65vh] lg:min-h-[85vh] border border-gray-300 bg-white shadow-md rounded sm:overflow-y-scroll barscroll">
                    <!-- header -->
                    <div class="sticky start-0 top-0 z-20 flex justify-between bg-white border-b p-2 items-center px-5">
                        <a class="flex items-center" href="/picturest/profile/@_{{ $photos->users->name }}">
                            <img class="w-10 h-10 rounded-full object-cover mr-4"
                                src="{{ asset('avatar/' . $photos->users->avatar) }}" alt="Neil image" />
                            <div class="flex flex-col">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    {{ $photos->users->name }}
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    {{ $photos->users->full_name }}
                                </p>
                            </div>
                        </a>
                        @if (Auth::id() !== $photos->user_id)
                            <button id="follow-btn" onclick="follow()" type="button"
                                class="bg-none border-2 border-red-500 p-1 rounded text-red-500 px-2 drop-shadow-md scale-100 hover:scale-105">
                                <svg id="follow" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="sm:w-4 sm:h-4 w-3 h-3" viewBox="0 0 512 512">
                                    <g>
                                        <path
                                            d="M490.667,234.667H448V192c0-11.782-9.551-21.333-21.333-21.333c-11.782,0-21.333,9.551-21.333,21.333v42.667h-42.667   c-11.782,0-21.333,9.551-21.333,21.333c0,11.782,9.551,21.333,21.333,21.333h42.667V320c0,11.782,9.551,21.333,21.333,21.333   c11.782,0,21.333-9.551,21.333-21.333v-42.667h42.667c11.782,0,21.333-9.551,21.333-21.333   C512,244.218,502.449,234.667,490.667,234.667z" />
                                        <circle cx="192" cy="128" r="128" />
                                        <path
                                            d="M192,298.667c-105.99,0.118-191.882,86.01-192,192C0,502.449,9.551,512,21.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C383.882,384.677,297.99,298.784,192,298.667z" />
                                    </g>
                                </svg>
                                <svg class="sm:w-4 sm:h-4 w-3 h-3 hidden" id="followed" fill="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m24 12a1 1 0 0 1 -1 1h-6a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm-15 0a6 6 0 1 0 -6-6 6.006 6.006 0 0 0 6 6zm0 2a9.01 9.01 0 0 0 -9 9 1 1 0 0 0 1 1h16a1 1 0 0 0 1-1 9.01 9.01 0 0 0 -9-9z" />
                                </svg>
                            </button>
                        @endif
                    </div>
                    <!-- konten -->
                    <div class="mt-4 border-b-2 pb-5 z-0 px-5">
                        <h2 class="md:text-lg  font-semibold text-gray-900 dark:text-white">
                            {{ $photos->title }}
                        </h2>
                        <p class="text-gray-600 text-sm dark:text-gray-400 indent-4 break-all leading-6 overflow-hidden max-h-[calc(24px*2)]"
                            id="fullText">{{ $photos->deskription }}</p>
                        @if (strlen($photos->deskription) > 255)
                            <button id="toggleButton" class="text-sm text-blue-500 hover:underline"
                                onclick="toggleText()">....Lihat
                                lebih banyak</button>
                        @endif
                        <div class="mt-5 flex-col">
                            <p
                                class="border px-4 flex justify-center items-center text-black border-gray-500 bg-gray-100 rounded-full">
                                nature</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-x-3 mt-4">
                                <div class="flex items-center gap-1">
                                    <button onclick="toggleLike()"
                                        class=" text-red-600 cursor-pointer hover:text-white hover:bg-blue-600 p-2 rounded-full bg-blue-200 scale-100 hover:scale-110 transition-all duration-300">
                                        <svg id="likeIcon" fill="currentColor" class="h-4 w-4"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path
                                                d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z" />
                                        </svg>
                                        <svg id="likedIcon" fill="currentColor"
                                            class="h-4 w-4 hidden
                      xmlns=" http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
                                        </svg>
                                    </button>
                                    <span id="likeCount" class="text-gray-500 dark:text-gray-300">
                                        128</span>
                                </div>
                                <div class="flex items-center gap-1 ">
                                    <label for="comments-input" id="commtent-btn"
                                        class="text-black cursor-pointer hover:text-white hover:bg-blue-600 p-2 rounded-full bg-blue-200 scale-100 hover:scale-110 transition-all duration-300">
                                        <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                            id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                                            <path
                                                d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12h12v-12C24,5.383,18.617,0,12,0Zm10,22h-10c-5.514,0-10-4.486-10-10S6.486,2,12,2s10,4.486,10,10v10Zm-8.5-10c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5.672-1.5,1.5-1.5,1.5.672,1.5,1.5Zm5,0c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5.672-1.5,1.5-1.5,1.5.672,1.5,1.5Zm-10,0c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5.672-1.5,1.5-1.5,1.5.672,1.5,1.5Z" />
                                        </svg>
                                    </label>
                                    <span class="text-gray-500 dark:text-gray-300">1</span>
                                </div>
                                <div class="flex items-center scale-100 hover:scale-110 transition-all duration-300">
                                    <button onclick="copyUrl()" data-tooltip-target="tooltip-website-url"
                                        data-copy-to-clipboard-target="website-url"
                                        class="text-sm font-medium text-center text-black cursor-pointer hover:text-white hover:bg-blue-600 p-2 rounded-full bg-blue-200"
                                        type="button">
                                        <span id="default-icon">
                                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 18 20">
                                                <path
                                                    d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                                            </svg>
                                        </span>
                                        <span id="success-icon" class="hidden items-center">
                                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="tooltip-website-url" role="tooltip"
                                        class="absolute z-10 invisible inline-block px-3 py-2 text-xs sm:text-sm font-normal text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span id="default-tooltip">Copy link</span>
                                        <span id="success-tooltip" class="hidden">Copied!</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </div>
                                <div class="flex items-center scale-100 hover:scale-110 transition-all duration-300">
                                    <button onclick="downloadImage()" data-tooltip-target="tooltip-download"
                                        data-copy-to-clipboard-target="download" type="button"
                                        class="text-sm font-medium text-center text-black cursor-pointer hover:text-white hover:bg-blue-600 p-2 rounded-full bg-blue-200">
                                        <svg class="w-4 h-4 " fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                            id="download" viewBox="0 0 24 24">
                                            <path
                                                d="m19.949,5.536l-3.484-3.486c-1.323-1.322-3.081-2.05-4.95-2.05h-4.515C4.243,0,2,2.243,2,5v14c0,2.757,2.243,5,5,5h10c2.757,0,5-2.243,5-5v-8.515c0-1.871-.729-3.628-2.051-4.95Zm-1.414,1.415c.318.317.587.67.805,1.05h-4.341c-.552,0-1-.449-1-1V2.659c.38.218.733.487,1.051.805l3.484,3.486Zm1.465,12.05c0,1.654-1.346,3-3,3H7c-1.654,0-3-1.346-3-3V5c0-1.654,1.346-3,3-3h4.515c.163,0,.325.008.485.023v4.977c0,1.654,1.346,3,3,3h4.977c.015.16.023.322.023.485v8.515Zm-4.293-2.895c.391.39.391,1.023,0,1.414l-1.613,1.614c-.577.577-1.336.866-2.094.866s-1.517-.289-2.094-.866l-1.613-1.614c-.391-.391-.391-1.024,0-1.414.391-.391,1.023-.391,1.414,0l1.293,1.293v-4.398c0-.552.447-1,1-1s1,.448,1,1v4.398l1.293-1.293c.391-.391,1.023-.391,1.414,0Z" />
                                        </svg>
                                    </button>
                                    <div id="tooltip-download" role="tooltip"
                                        class="absolute z-10 invisible inline-block px-3 py-2 text-xs sm:text-sm font-normal text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span id="download">Download Image</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center mt-4">
                                <button id="dropdownButton" data-dropdown-toggle="dropdown"
                                    class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 rounded-lg text-sm p-1.5"
                                    type="button">
                                    <span class="sr-only">Open dropdown</span>
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 16 3">
                                        <path
                                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdown"
                                    class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2" aria-labelledby="dropdownButton">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Change
                                                Album</a>
                                        </li>
                                        <li>
                                            <button data-modal-target="modal-report" data-modal-toggle="modal-report"
                                                type="button"
                                                class="flex px-4 w-full py-2 text-sm text-gray-700 hover:bg-gray-100">Report</button>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Daftar Komentar -->
                    @include('page.home.comments.content')
                </div>
            </div>
        </div>
    </section>

    @include('page.home.data.photo-find')
@endsection
@push('js')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/detail.js') }}"></script>
@endpush
