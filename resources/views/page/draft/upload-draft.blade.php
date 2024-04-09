@extends('layout.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/animate/animate.min.css') }}">
@endpush
@section('content')
    @include('components.modal.modal-album.modal-album')
    @include('components.modal.modal-create.modal-draft')
    @include('components.modal.modal-create.success')
    <div class="sm:p-6 p-2 max-w-screen-xl mx-auto">
        <div class="w-full h-full border border-blue-100 rounded-md bg-white">
            <div class="flex justify-between items-center p-2 bg-blue-500 rounded-t-md">
                <h1 class="text-white font-semibold">Welcome to Picturest Photo Upload</h1>
                <button type="button" id="buttonBack" data-href="/home"
                    class="bg-blue-800 cursor-pointer text-blue-100 p-2 sm:p-3 rounded-full scale-100 hover:bg-blue-100 hover:text-blue-600 hover:scale-105 transition-all duration-200">
                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="currentColor" id="Layer_1"
                        data-name="Layer 1" viewBox="0 0 24 24">
                        <path
                            d="M7.7,15.007a1.5,1.5,0,0,1-2.121,0L.858,10.282a2.932,2.932,0,0,1,0-4.145L5.583,1.412A1.5,1.5,0,0,1,7.7,3.533L4.467,6.7l14.213,0A5.325,5.325,0,0,1,24,12.019V18.7a5.323,5.323,0,0,1-5.318,5.318H5.318a1.5,1.5,0,1,1,0-3H18.681A2.321,2.321,0,0,0,21,18.7V12.019A2.321,2.321,0,0,0,18.68,9.7L4.522,9.7,7.7,12.886A1.5,1.5,0,0,1,7.7,15.007Z" />
                    </svg>
                </button>
            </div>
            <form id="upload-form" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 p-2 gap-4">
                <div class="flex justify-center items-center p-4">
                    <div class="flex flex-col">
                        <div
                            class="flex-col w-auto h-full max-h-[400px] lg:max-h-[600px] md:max-w-[360px] rounded-md overflow-hidden">
                            <label id="labelimg" for="fileImage"
                                class="flex hidden justify-center items-center w-full h-full lg:min-h-[500px] sm:min-h-[360px] min-h-[300px] cursor-pointer bg-gray-200 hover:bg-blue-200 transition-all duration-300">
                                <div class="flex flex-col items-center justify-center px-16">
                                    <svg class="w-8 h-8 mb-4 text-blue-800" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-center text-blue-700 dark:text-gray-400"><span
                                            class="font-semibold">Click
                                            to
                                            upload</span></p>
                                    <p class="text-xs text-center text-blue-700 dark:text-gray-400">PNG, JPG or JPEG (MAX. 8
                                        MB)</p>
                                </div>
                            </label>
                            <input class="hidden required" value="../public/photo/{{ $photos->images }}" accept="image/*" onchange="previewFile()" type="file"
                                name="fileImage" id="fileImage">
                            <img src="{{ asset('photo/' . $photos->image) }}" id="previewImage"
                                class=" w-full h-full max-h-[400px] lg:max-h-[600px]  object-contain rounded-md"
                                alt="gambar">
                        </div>
                        <p id="fileImage-error" class="text-xs text-red-600 pl-3"></p>
                        <label for="fileImage"
                            class="border text-center mt-2 px-5 p-1 text-sm font-semibold border-blue-600 rounded-md cursor-pointer text-blue-950 scale-100 hover:scale-95 transition-all duration-300 hover:bg-blue-400 hover:text-white">
                            Select Image
                        </label>
                    </div>
                </div>
                <div class="p-4">
                    <div class="mb-3 relative">
                        <label for="title" class="block pl-1 text-sm mb-1 font-semibold">Title*</label>
                        <div class="absolute right-2 top-2 text-xs text-gray-400 cursor-none">
                            <span id="title-count">0</span>/<span id="title-max">30</span>
                        </div>
                        <input type="text" value="{{ $photos->title }}" name="title" id="title"
                            placeholder="fill in the title text input"
                            class="required max-text p-1 text-sm text-black pr-10 bg-blue-50 px-2 rounded-md w-full border-2 focus:ring-0 border-blue-600 outline-none placeholder-gray-500">
                        <p id="title-error" class="text-xs text-red-600 pl-3"></p>
                    </div>
                    <div class="mb-3 relative">
                        <label for="deskription" class="block pl-1 text-sm mb-1 font-semibold">Deskription* <span
                                class="text-xs font-normal text-gray-500">Opsional</span></label>
                        <div class="absolute right-2 top-2 text-xs text-gray-400 cursor-none">
                            <span id="deskription-count">0</span>/<span id="deskription-max">255</span>
                        </div>
                        <textarea type="text" value="{{ $photos->deskription }}" name="deskription" id="deskription"
                            placeholder="fill in the deskription text input"
                            class="max-text p-1 text-sm text-black bg-blue-50 px-2 rounded-md w-full border-2 border-blue-600 outline-none focus:ring-0 placeholder-gray-500"></textarea>
                        <p id="deskription-error" class="text-xs text-red-600 pl-3"></p>
                    </div>
                    <div class="mb-3">
                        <label for="album" class="block pl-1 text-sm mb-1 font-semibold">Album* <span
                                class="text-xs font-normal text-gray-500">Opsional</span></label>
                        <div class="flex">
                            <select type="text" name="album" id="album"
                                class="p-1 text-sm text-black bg-blue-50 px-2 font-serif rounded-l-md w-full border-2 border-blue-600 outline-none">
                                <option value="" class="text-blue-950 bg-blue-200 font-medium p-1" selected>Select
                                    Album</option>
                                <option value="Album" class="text-blue-950 bg-blue-200 font-medium p-1">Album 1*</option>
                                <option value="Album" class="text-blue-950 bg-blue-200 font-medium p-1">Album 2*</option>
                            </select>
                            <button type="button" id="new-album"
                                class="p-1 px-3 text-white border-l-0 border border-blue-400 bg-blue-600 rounded-r-md hover:bg-white hover:text-blue-600 transition-all duration-200">
                                <svg class="w-4 h-4" id="Layer_1" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm5 13h-4v4h-2v-4h-4v-2h4v-4h2v4h4z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="categories" class="block pl-1 text-sm mb-1 font-semibold">Categories*</label>
                        <select type="text" name="categories" id="categories"
                            class="required p-1 text-sm text-black bg-blue-50 px-2 font-serif rounded-md w-full border-2 focus:ring-0 border-blue-600 outline-none">
                            <option value="" class="text-blue-950 bg-blue-200 font-medium p-1" selected>Select
                                Categories</option>
                            <option value="1" class="text-blue-950 bg-blue-200 font-medium p-1">Categories 1*
                            </option>
                            <option value="2" class="text-blue-950 bg-blue-200 font-medium p-1">Categories 2*
                            </option>
                        </select>
                        <p id="categories-error" class="text-xs text-red-600 pl-3"></p>
                    </div>
                    <div class="mb-3">
                        <label for="private" class="block pl-1 text-sm mb-1 font-semibold">Private*</label>
                        <select type="text" name="private" id="private"
                            class="required p-1 text-sm text-black font-serif bg-blue-50 px-2 rounded-md w-full border-2 focus:ring-0 border-blue-600 outline-none">
                            @if ($photos->private)
                                <option value="{{ $photos->private }}" class="text-blue-950 bg-blue-200 font-medium p-1">
                                    {{ $photos->private }}</option>
                            @else
                                <option value="" class="text-blue-950 bg-blue-200 font-medium p-1" selected>Select
                                    Private</option>
                            @endif
                            <option value="public" class="text-blue-950 bg-blue-200 font-medium p-1">Publish</option>
                            <option value="private" class="text-blue-950 bg-blue-200 font-medium p-1">Private</option>
                        </select>
                        <p id="private-error" class="text-xs text-red-600 pl-3"></p>
                    </div>
                    <div class="mb-3">
                        <input class="rounded-full bg-blue-50 text-blue-800" type="checkbox"
                            {{ $photos->on_comments == 'on' ? 'checked' : '' }} name="non_comments" id="non_comments">
                        <label for="non_comments">Disable comments on posts</label>
                    </div>
                    <div class="mb-3 flex items-center w-full justify-end gap-4">
                        <button type="button" id="draftPhoto" data-href="/picturest/photodraf"
                            class="text-center font-medium text-blue-600 bg-transparent border border-blue-600 px-4 p-1 rounded-md hover:bg-blue-400 hover:text-white transition-all duration-200">
                            Draft
                        </button>
                        <button type="button" id="upload-btn" disabled data-draf="off"
                            class="save text-center font-medium disabled:cursor-not-allowed text-white border border-blue-600 bg-blue-600 px-4 p-1 rounded-md hover:bg-blue-200 hover:text-blue-600 transition-all duration-200">
                            Upload
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript" src="{{ asset('assets/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/create/update.js') }}"></script>
    <script src="{{ asset('assets/js/create/create-album.js') }}"></script>
@endpush
