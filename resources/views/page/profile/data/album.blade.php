<div
                    class="flex justify-start pl-6 shadow-inner rounded-lg items-center gap-4 h-full min-h-[100px] max-h-full max-w-screen-sm p-2 pt-4 overflow-y-hidden overflow-x-scroll scroll transition-all duration-300 group">
                    @if (Auth::user()->id === $data->id)
                        <button id="new-album"
                            class="flex flex-col justify-center items-center hover:scale-105 scale-100 transition-all duration-200">
                            <div
                                class="flex relative w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-gradient-to-br from-blue-600 to-pink-300-950 justify-center items-center group">
                                <div
                                    class="w-12 h-12 sm:h-14 sm:w-14 bg-black rounded-full group-hover:bg-gradient-to-l from-black to-blue-950 object-cover">
                                </div>
                                <svg id="svg"
                                    class="absolute text-white w-5 h-5 bottom-0 right-0 p-1 bg-blue-500 rounded-full"
                                    fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    data-name="Layer 1">
                                    <path
                                        d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm5-10a1 1 0 0 1 -1 1h-3v3a1 1 0 0 1 -2 0v-3h-3a1 1 0 0 1 0-2h3v-3a1 1 0 0 1 2 0v3h3a1 1 0 0 1 1 1z" />
                                </svg>
                            </div>
                            <h1 class="text-xs lg:text-sm text-black">New</h1>
                        </button>
                    @endif
                    <a href="detail-album.html"
                        class="flex flex-col justify-center items-center hover:scale-105 scale-100 transition-all duration-200">
                        <img class="h-14 w-14 border-2 border-blue-600 rounded-full object-cover" src="assets/img/img1.jpg"
                            alt="">
                        <h1 class="text-xs lg:text-sm text-black">Album 1</h1>
                    </a>
                    <a href="detail-album.html"
                        class="flex flex-col justify-center items-center hover:scale-105 scale-100 transition-all duration-200">
                        <img class="w-14 h-14 border-2 border-blue-600 rounded-full object-cover" src="assets/img/img.jpg"
                            alt="">
                        <h1 class="text-xs lg:text-sm text-black">Album 2</h1>
                    </a>
                </div>