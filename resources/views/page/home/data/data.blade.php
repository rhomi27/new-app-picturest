@foreach ($photos as $item)
    <figure class="flex flex-col border bg-white drop-shadow-md overflow-hidden  rounded-md mb-2">
        <a class="overflow-hidden" href="/picturest/photo/show={{ $item->uuid }}">
            <img class="filter grayscale-0 hover:grayscale cursor-zoom-in transition-all duration-500 scale-100 hover:scale-105"
                src="{{ asset('photo/' . $item->image) }}" alt="" />
        </a>
        <div class="flex flex-col w-full">
            <a href="/picturest/photo/show={{ $item->uuid }}"
                class="flex text-[10px] sm:text-xs font-normal p-1 px-3 break-all">{{ $item->title }}</a>
            <div class="flex gap-2 p-2 bottom-0 h-full justify-between w-full">
                <a href="/picturest/profile/@_{{ $item->users->name  }}" class="flex items-center gap-2">
                    <img class="w-5 h-5 sm:w-8 sm:h-8 rounded-full object-cover"
                        src="{{ asset('avatar/' . $item->users->avatar) }}" alt="profil">
                    <h1
                        class="text-[9px] sm:text-xs text-black font-medium hover:underline transition-all duration-300">
                        {{ $item->users->name }}</h1>
                </a>
                <a href="/picturest/photo/show={{ $item->uuid }}" class="flex items-center gap-1">
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
@endforeach
