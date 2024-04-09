@foreach ($photo as $item)
@if($item->user_id == Auth::id())
<a href="/picturest/photo/show={{ $item->uuid }}"
    class="relative flex flex-col justify-center items-center w-full h-[28vh] lg:h-[60vh] overflow-hidden rounded-md">
    <img class="object-cover h-full w-full filter blur-sm absolute z-0" src="{{ asset('photo/'.$item->image) }}" alt="">
    <img class="object-contain z-[4] hover:scale-105 transition-all duration-200" src="{{ asset('photo/'.$item->image) }}" alt="">
    <div class="flex justify-center items-center w-full h-full bg-black bg-opacity-70 absolute z-[2] text-white text-xs">
    </div>
</a>
@endif
@endforeach
