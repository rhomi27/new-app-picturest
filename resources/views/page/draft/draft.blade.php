@extends('layout.master')
@section('content')
    @include('components.navbar.navbar')
    @include('components.nav.nav')
    <div class="sm:p-6 p-2 sm:ml-16 lg:ml-52">
        <div class="w-full h-full border border-blue-100 rounded bg-white relative pt-4">
            <a onclick="goBack()"
                class="absolute top-2 right-2 bg-blue-600 text-white p-1 sm:p-2 rounded-full scale-100 hover:scale-105 transition-all duration-200">
                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="currentColor" id="Layer_1" data-name="Layer 1"
                    viewBox="0 0 24 24">
                    <path
                        d="M7.7,15.007a1.5,1.5,0,0,1-2.121,0L.858,10.282a2.932,2.932,0,0,1,0-4.145L5.583,1.412A1.5,1.5,0,0,1,7.7,3.533L4.467,6.7l14.213,0A5.325,5.325,0,0,1,24,12.019V18.7a5.323,5.323,0,0,1-5.318,5.318H5.318a1.5,1.5,0,1,1,0-3H18.681A2.321,2.321,0,0,0,21,18.7V12.019A2.321,2.321,0,0,0,18.68,9.7L4.522,9.7,7.7,12.886A1.5,1.5,0,0,1,7.7,15.007Z" />
                </svg>
            </a>
            <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-6 p-2 sm:p-3 gap-2 mt-5">
                @foreach ($photos as $item)
                    @php
                        $expired = \Carbon\Carbon::parse($item->expired_at);
                        $daysDifference = $expired->diffInDays(\Carbon\Carbon::now());
                    @endphp
                    <a href="/picturest/upload/photodraf={{ $item->uuid }}"
                        class="flex flex-col justify-center items-center rounded-md overflow-hidden relative min-h-[300px] max-h-[300px]">
                        <img class="w-full h-full object-contain z-[5]" src="{{ asset('photo/' . $item->image) }}"
                            alt="">
                        <div class="h-full w-full z-[2] bg-black absolute bg-opacity-20 backdrop-blur-sm  rounded-md"></div>
                        <img class="w-full h-full object-cover absolute z-2" src="{{ asset('photo/' . $item->image) }}"
                            alt="">
                        <h1 class="absolute z-[7] text-white text-xs sm:text-sm bottom-1 left-1">{{ $daysDifference }} hari
                        </h1>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
