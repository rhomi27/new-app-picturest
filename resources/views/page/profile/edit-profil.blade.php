@extends('layout.master')
@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet">
@endpush
@section('content')
    <nav class="bg-white border-gray-200 dark:bg-gray-900 sticky w-full z-20 top-0 start-0 drop-shadow-md">
        <div class="w-screen flex flex-wrap items-center justify-between mx-auto p-3 px-5 md:px-10">
            <div class="flex justify-start items-center">
                <a href="/picturest/profile/@_{{ Auth::user()->name }}">
                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                        <path
                            d="M.88,14.09,4.75,18a1,1,0,0,0,1.42,0h0a1,1,0,0,0,0-1.42L2.61,13H23a1,1,0,0,0,1-1h0a1,1,0,0,0-1-1H2.55L6.17,7.38A1,1,0,0,0,6.17,6h0A1,1,0,0,0,4.75,6L.88,9.85A3,3,0,0,0,.88,14.09Z" />
                    </svg>
                </a>
            </div>
            <div class="flex flex-grow justify-center items-center">
                <h1 class="self-center text-sm font-semibold dark:text-white">Edit Profil</h1>
            </div>
            <div class="save flex items-center sm:hidden">
                <h1 class="self-center text-sm font-normal hover:font-semibold hover:text-blue-600">Save</h1>
            </div>
    </nav>
    @include('components.modal.modal-profile.edit-photo')
    <section>
        <div class="container mx-auto mt-5 p-5 w-full md:w-4/5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 px-5 mt-5">
                <div class="flex flex-col justify-center items-center mb-5">
                    <button id="edit-photo" class="cursor-pointer relative">
                        <svg fill="currentColor"
                            class="w-10 h-10 text-white absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                            xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512"
                            height="512">
                            <path
                                d="M19,4h-.508L16.308,1.168A3.023,3.023,0,0,0,13.932,0H10.068A3.023,3.023,0,0,0,7.692,1.168L5.508,4H5A5.006,5.006,0,0,0,0,9V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V9A5.006,5.006,0,0,0,19,4ZM9.276,2.39A1.006,1.006,0,0,1,10.068,2h3.864a1.008,1.008,0,0,1,.792.39L15.966,4H8.034ZM22,19a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3V9A3,3,0,0,1,5,6H19a3,3,0,0,1,3,3Z" />
                            <path d="M12,8a6,6,0,1,0,6,6A6.006,6.006,0,0,0,12,8Zm0,10a4,4,0,1,1,4-4A4,4,0,0,1,12,18Z" />
                        </svg>
                        <div
                            class="w-32 h-32 rounded-full bg-black bg-opacity-40 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <img id="avatar" class="w-32 h-32 rounded-full object-cover"
                            src="{{ asset('avatar/' . Auth::user()->avatar) }}" alt="">
                        {{-- <input onchange="previewFile()" class="hidden" type="file" name="foto" id="foto"> --}}
                    </button>
                    <h1 class="text-sm font-medium text-black mt-2">Change Photo</h1>
                </div>
                <div class="grid">
                    <div class="flex text-sm mb-5">
                        About You
                    </div>
                    <div class="relative z-0 mb-4">
                        <input type="text" id="name" value="{{ Auth::user()->name }}"
                            class="required max-text block w-full px-1 py-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-700 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " />
                        <span id="name-max" class="hidden">25</span>
                        <p id="name-error" class="text-xs text-red-600 pl-3"></p>
                        <label for="name"
                            class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-80 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-80 peer-focus:-translate-y-6">Username</label>
                    </div>
                    <div class="relative z-0 mb-4">
                        <input type="text" id="fullname" value="{{ Auth::user()->full_name }}"
                            class=" max-text block w-full px-1 py-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-700 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " />
                            <span class="hidden" id="fullname-max">50</span>
                            <p id="fullname-error" class="text-xs text-red-600 pl-3"></p>
                        <label for="fullname"
                            class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-80 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-80 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Full
                            Name</label>
                    </div>
                    <div class="relative z-0 mb-4">
                        <select id="gender"
                            class="block py-2 px-1 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-700 appearance-none dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 ">
                            <option value="" selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="relative mb-3">
                        <input type="text" id="bio" value="{{ Auth::user()->bio }}"
                            class="max-text block w-full px-1 py-2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-700 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " />
                        <span class="hidden" id="bio-max">125</span>
                        <p id="bio-error" class="text-xs text-red-600 pl-3"></p>
                        <label for="bio"
                            class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-80 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-80 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Bio</label>
                    </div>
                    <button
                        class="save w-full mt-3 hidden sm:flex justify-center items-center bg-blue-600 rounded-md p-1 text-white drop-shadow-lg hover:bg-blue-400 hover:text-black">Save</button>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script src="{{ asset('assets/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <script src="{{ asset('assets/js/profile/edit-profil.js') }}"></script>
@endpush
