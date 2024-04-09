<nav class="bg-white border-gray-200 dark:bg-gray-900 sticky w-full z-40 top-0 start-0 shadow-sm ">
    <div class="max-w-screen flex flex-wrap items-center justify-between mx-auto px-5 p-2">
        <a href="/home" class="flex items-center space-x-3">
            <img class="w-6 h-6 sm:w-7 sm:h-7" src="{{ asset('assets/icon/android-chrome-192x192.png') }}" alt="">
            <span
                class="self-center hidden font-picturest sm:block text-sm sm:text-xl font-semibold whitespace-nowrap dark:text-white">Picturest</span>
        </a>
        <h1 class="flex text-xs md:text-sm text-gray-800 font-bold">{{ $data->name }}</h1>
        <div class="flex ">
            <button class="flex items-center p-1.2 text-black hover:text-blue-600" id="dropButton"
                data-dropdown-toggle="dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" fill="currentColor" data-name="Layer 1"
                    viewBox="0 0 24 24" class="w-5 h-5">
                    <path
                        d="M3,6C3,2.691,5.691,0,9,0s6,2.691,6,6-2.691,6-6,6S3,9.309,3,6Zm18.724,12.567l1.841,1.06-.998,1.733-1.84-1.06c-.706,.796-1.646,1.378-2.726,1.598v2.101h-2v-2.101c-1.08-.22-2.021-.802-2.726-1.598l-1.84,1.06-.998-1.733,1.841-1.06c-.165-.496-.276-1.016-.276-1.567s.111-1.071,.276-1.567l-1.841-1.06,.998-1.733,1.84,1.06c.706-.796,1.646-1.378,2.726-1.598v-2.101h2v2.101c1.08,.22,2.021,.802,2.726,1.598l1.84-1.06,.998,1.733-1.841,1.06c.165,.496,.276,1.016,.276,1.567s-.111,1.071-.276,1.567Zm-3.224-1.567c0-.827-.673-1.5-1.5-1.5s-1.5,.673-1.5,1.5,.673,1.5,1.5,1.5,1.5-.673,1.5-1.5Zm-10.5,0c0-1.054,.19-2.06,.523-3h-3.523c-2.757,0-5,2.243-5,5v5H11.349c-2.041-1.65-3.349-4.171-3.349-7Z" />
                </svg>
            </button>
        </div>
    </div>
</nav>
<!-- dropdown -->
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
