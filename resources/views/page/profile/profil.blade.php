@extends('layout.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/cropper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate/animate.min.css') }}">
@endpush
@section('content')
    @include('components.navbar.navProfile')
    @include('components.nav.nav')
    @include('components.modal.modal-album.modal-album')
    @include('components.modal.modal-profile.edit-photo')
    <input type="hidden" id="user_id" value="{{ $data->id }}">
    <div class="p-2 sm:ml-16 lg:ml-52">
        <section>
            <div class="bg-white sm:shadow-sm sm:border sm:rounded-md sm:pl-16 lg:pl-28 p-4">
                <div class="flex flex-col p-2 sm:pb-5">
                    <div class="flex gap-3 sm:flex-row flex-col sm:gap-x-28 justify-start items-center w-full h-full">
                        @if (Auth::user()->id === $data->id)
                            <button id="edit-photo">
                                <img id="avatar"
                                    class="sm:w-24 sm:h-24 md:w-36 md:h-36  w-20 h-20 rounded-full object-cover"
                                    src="{{ asset('avatar/' . $data->avatar) }}" alt="Picturest" />
                            </button>
                        @else
                            <button id="zoom">
                                <img id="avatar"
                                    class="sm:w-24 sm:h-24 md:w-36 md:h-36  w-20 h-20 rounded-full object-cover"
                                    src="{{ asset('avatar/' . $data->avatar) }}" alt="Picturest" />
                            </button>
                        @endif
                        <div class="flex-col flex justify-around items-center gap-3">
                            <div class="flex gap-4 sm:gap-8">
                                <div class="flex flex-col items-center">
                                    <h1 class="font-semibold text-xs md:text-lg">10</h1>
                                    <h1 class="text-xs md:text-base">Publish</h1>
                                </div>
                                <a href="" class="flex flex-col items-center">
                                    <h1 class="font-semibold text-xs md:text-lg">200k</h1>
                                    <h1 class="text-xs md:text-base">Followers</h1>
                                </a>
                                <div class="flex flex-col items-center">
                                    <h1 class="font-semibold text-xs md:text-lg">10</h1>
                                    <h1 class="text-xs md:text-base">Following</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex justify-center items-center sm:justify-start sm:items-start flex-col gap-1 w-full h-full mt-2 sm:mt-5 pl-1">
                        <div class="text-xs text-slate-900 sm:text-sm">{{ $data->full_name }}</div>
                        <div class="text-xs text-gray-400 sm:text-sm">{{ $data->bio }}</div>
                        <div
                            class="flex sm:w-[40vw] justify-center items-center sm:justify-start sm:items-start w-full gap-x-1 sm:gap-x-4 mt-4">
                            @if (Auth::user()->id === $data->id)
                                <a class="text-xs sm:text-sm bg-blue-50 hover:bg-blue-400 hover:text-white p-2 px-5 text-center rounded-md border border-blue-400 transition-all duration-200"
                                    href="/picturest/edit-profile">Edit Profile</a>
                            @else
                                <a
                                    class="text-xs sm:text-sm  bg-red-500 cursor-pointer hover:bg-red-600 text-white p-2 px-5 text-center rounded-md border border-red-600 transition-all duration-200">Follow</a>
                            @endif
                            <button
                                class="text-xs sm:text-sm bg-blue-50 p-2 px-5 hover:bg-blue-400 hover:text-white text-center rounded-md border border-blue-400 transition-all duration-200">
                                Share Profil</button>
                        </div>
                    </div>
                </div>
                @include('page.profile.data.album')
            </div>
        </section>
        @include('page.profile.data.content')
    </div>
    <footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800 mb-5">
        <div class="w-full mx-auto max-w-screen-xl h-32 p-4 flex items-start justify-center">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href=""
                    class="hover:underline">Picturest</a>. #apalaa.
            </span>
        </div>
    </footer>
@endsection
@push('js')
    <script src="{{ asset('assets/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/profile/profile.js') }}"></script>
    <script src="{{ asset('assets/js/create/create-album.js') }}"></script>
    <script src="{{ asset('assets/js/cropper.min.js') }}"></script>
    <script src="{{ asset('assets/js/profile/edit-profil.js') }}"></script>
@endpush
