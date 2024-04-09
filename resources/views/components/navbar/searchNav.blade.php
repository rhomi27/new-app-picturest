<nav class="bg-white border-gray-200 dark:bg-gray-900 sticky w-full z-40 top-0 start-0 shadow-md">
    <div class="max-w-screen flex flex-wrap items-center justify-between mx-auto px-5 p-2">
        <h1 class="flex items-center space-x-3">
            <img class="w-6 h-6 sm:w-7 sm:h-7" src="{{ asset('assets/icon/android-chrome-192x192.png') }}" alt="">
            <span
                class="self-center hidden font-picturest sm:block text-sm sm:text-xl font-semibold whitespace-nowrap dark:text-white">Picturest</span>
        </h1>
        <div class="hidden sm:flex justify-center items-center">
            <input type="text" id="search-md" name="search-md" placeholder="search for art images, landscapes, etc....."
                class="w-[260px] lg:w-96 py-1.5 text-sm px-4 rounded-l-md border-gray-300 focus:border-blue-600 focus:ring-0">
            <button
                class="text-sm pl-2 bg-blue-500 text-white py-1.5 px-3 rounded-r-md hover:bg-blue-600 hover:scale-[1.02]">Search</button>
        </div>
        <div class="flex gap-4">
            <button id="search-btn"
                class="sm:hidden text-blue-500 rounded-lg text-sm p-1.5 me-1 pl-2 scale-100 hover:scale-110 transition-all duration-300">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
            @if (Auth::check())
                <div class="sm:flex hidden">
                    <a class="flex items-center p-1.5 text-black hover:text-blue-600" href="message.html">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline" fill="currentColor" viewBox="0 0 24 24"
                            class="w-5 h-5">
                            <path
                                d="M19,1H5A5.006,5.006,0,0,0,0,6V18a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V6A5.006,5.006,0,0,0,19,1ZM5,3H19a3,3,0,0,1,2.78,1.887l-7.658,7.659a3.007,3.007,0,0,1-4.244,0L2.22,4.887A3,3,0,0,1,5,3ZM19,21H5a3,3,0,0,1-3-3V7.5L8.464,13.96a5.007,5.007,0,0,0,7.072,0L22,7.5V18A3,3,0,0,1,19,21Z" />
                        </svg>
                    </a>
                    <button id="notifButton" data-dropdown-toggle="Notification"
                        class="relative flex items-center p-1.5 text-black hover:text-blue-600">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M22.555,13.662l-1.9-6.836A9.321,9.321,0,0,0,2.576,7.3L1.105,13.915A5,5,0,0,0,5.986,20H7.1a5,5,0,0,0,9.8,0h.838a5,5,0,0,0,4.818-6.338ZM12,22a3,3,0,0,1-2.816-2h5.632A3,3,0,0,1,12,22Zm8.126-5.185A2.977,2.977,0,0,1,17.737,18H5.986a3,3,0,0,1-2.928-3.651l1.47-6.616a7.321,7.321,0,0,1,14.2-.372l1.9,6.836A2.977,2.977,0,0,1,20.126,16.815Z" />
                        </svg>
                        <div
                            class="absolute top-1 right-2 block w-3 h-3 bg-red-500 border-2 border-white rounded-full dark:border-gray-900">
                        </div>
                    </button>
                    <button class="flex items-center p-1.5 text-black hover:text-blue-600" id="dropButton"
                        data-dropdown-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" fill="currentColor" data-name="Layer 1"
                            viewBox="0 0 24 24" class="w-5 h-5">
                            <path
                                d="M3,6C3,2.691,5.691,0,9,0s6,2.691,6,6-2.691,6-6,6S3,9.309,3,6Zm18.724,12.567l1.841,1.06-.998,1.733-1.84-1.06c-.706,.796-1.646,1.378-2.726,1.598v2.101h-2v-2.101c-1.08-.22-2.021-.802-2.726-1.598l-1.84,1.06-.998-1.733,1.841-1.06c-.165-.496-.276-1.016-.276-1.567s.111-1.071,.276-1.567l-1.841-1.06,.998-1.733,1.84,1.06c.706-.796,1.646-1.378,2.726-1.598v-2.101h2v2.101c1.08,.22,2.021,.802,2.726,1.598l1.84-1.06,.998,1.733-1.841,1.06c.165,.496,.276,1.016,.276,1.567s-.111,1.071-.276,1.567Zm-3.224-1.567c0-.827-.673-1.5-1.5-1.5s-1.5,.673-1.5,1.5,.673,1.5,1.5,1.5,1.5-.673,1.5-1.5Zm-10.5,0c0-1.054,.19-2.06,.523-3h-3.523c-2.757,0-5,2.243-5,5v5H11.349c-2.041-1.65-3.349-4.171-3.349-7Z" />
                        </svg>
                    </button>
                </div>
            @else
                <button id="signIn-btn"
                    class="text-xs p-1 px-3 rounded-md text-white bg-gradient-to-br from-blue-800 to-blue-400  hover:shadow-md hover:scale-[1.02]">Sign
                    In</button>
                <button id="signUp-btn"
                    class="hidden sm:flex text-xs p-1 px-3 rounded-md text-black bg-gradient-to-br from-gray-300 to-gray-100 hover:shadow-md hover:scale-[1.02] ">Sign
                    Up</button>
            @endif
        </div>
    </div>
</nav>
<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropButton">
        <li>
            <a href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
        </li>
        <li>
            <a href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">About</a>
        </li>
        <li>
            <a href="/signout"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
        </li>
    </ul>
</div>
@include('components.modal.notifikation.notifikation')
<div id="search-toogle" class="fixed hidden z-30 w-screen top-12 p-4 bg-white bg-opacity-30 backdrop-blur-sm">
    <input type="text" name="search-sm" id="search-sm" placeholder="search for art images, landscapes, etc"
        class="w-full p-1.5 text-sm rounded-l-md border-blue-200 focus:ring-0 focus:border-blue-600">
    <button
        class="bg-blue-500 rounded-r-md p-1.5 px-4 text-sm text-white font-medium hover:bg-blue-600 shadow-md hover:scale-[1.02]">Search</button>
</div>
