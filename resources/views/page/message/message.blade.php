@extends('layout.master')
@section('content')
    <nav class="bg-white border-gray-200 dark:bg-gray-900 sticky w-full z-40 top-0 start-0 shadow-sm">
        <div class="max-w-screen flex flex-wrap items-center justify-between mx-auto px-5 p-2">
            <a href="/home" class="flex items-center space-x-3">
                <img class="w-6 h-6 sm:w-7 sm:h-7" src="{{ asset('assets/icon/android-chrome-192x192.png') }}" alt="">
                <span
                    class="self-center hidden font-picturest sm:block text-sm sm:text-xl font-semibold whitespace-nowrap dark:text-white">Picturest</span>
            </a>
            <button id="search-btn"
                class="sm:hidden text-blue-500 rounded-lg text-sm p-1.5 me-1 pl-2 scale-100 hover:scale-110 transition-all duration-300">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
    </nav>
    @include('components.nav.nav')

    <div class="sm:ml-16 lg:ml-52 sm:p-2">
        <div class="md:fixed md:h-full md:max-w-64 lg:max-w-96 w-full flex  flex-col md:border-r">
            <div id="search-toogle"
                class="fixed md:sticky hidden md:flex justify-center items-center p-4 z-30 w-screen md:w-full top-12 bg-white bg-opacity-30 backdrop-blur-sm">
                <input type="text" name="search-sm" id="search-sm" placeholder="search users or text chat"
                    class="w-full p-1.5 text-sm rounded-md border-blue-200 focus:ring-0 focus:border-blue-600">
            </div>
            <div class="gap-y-1 flex flex-col p-1 bg-blue-50 min-h-screen mb-16">
                @foreach ($users as $item)
                    <div class="userMessage flex gap-x-4 bg-white p-3 rounded shadow-sm border-blue-100">
                        <a href="/picturest/profile/@_{{ $item->name }}">
                            <img class="w-12 h-12 rounded-full" src="{{ asset('avatar/' . $item->avatar) }}" alt="">
                        </a>
                        <div data-user-id="{{ $item->id }}" class="chat flex-col items-center cursor-pointer">
                            @if (Auth::user()->id === $item->id)
                                <h1 class="text-sm">{{ $item->name }} /Anda</h1>
                            @else
                                <h1 class="text-sm">{{ $item->name }}</h1>
                            @endif
                            @php
                                $lastMessage = App\Models\Message::where(function ($query) use ($item) {
                                    $query->where('from', Auth::id())->where('to', $item->id);
                                })
                                    ->orWhere(function ($query) use ($item) {
                                        $query->where('to', Auth::id())->where('from', $item->id);
                                    })
                                    ->latest()
                                    ->first();
                            @endphp
                            @if ($lastMessage)
                                <p class="text-xs text-gray-400">{{ $lastMessage->message }}</p>
                            @else
                                <p class="text-xs text-gray-400">...</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @include('page.message.roomChat')
    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/search.js') }}"></script>
    <script src="{{ asset('assets/js/chat/chat.js') }}"></script>
@endpush
