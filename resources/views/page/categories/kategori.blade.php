<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900 sticky w-full z-40 top-0 start-0 shadow-sm">
        <div class="max-w-screen flex flex-wrap items-center justify-between mx-auto px-5 p-2">
            <a href="#" class="flex items-center space-x-3">
                <img class="w-6 h-6 sm:w-7 sm:h-7" src="assets/icon/android-chrome-192x192.png" alt="">
                <span
                    class="self-center hidden font-picturest sm:block text-sm sm:text-xl font-semibold whitespace-nowrap dark:text-white">Picturest</span>
            </a>
            <div class="flex">
                <a href="search.html"
                    class="sm:hidden text-blue-500 rounded-lg text-sm p-1.5 me-1 pl-2 scale-100 hover:scale-110 transition-all duration-300">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </a>
            </div>
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
        </div>
    </nav>
    <div
        class="fixed z-30 w-full sm:w-16 lg:w-52 sm:h-screen h-16 bg-white border border-gray-200 bottom-0 sm:translate-y-1/2 left-0 sm:bottom-1/2 sm:left-0">
        <div
            class="grid grid-cols-5 sm:flex h-full w-full justify-center sm:justify-start sm:mt-16 sm:gap-4 sm:pl-4 sm:pr-3 sm:items-start items-center sm:flex-col">
            <a href="home.html"
                class="inline-flex sm:p-1 sm:rounded-lg sm:flex-row gap-x-3 h-full w-full sm:h-auto lg:justify-start flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <svg class="w-5 h-5 mb-1 text-black dark:text-gray-400 group-hover:text-blue-600 " aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M22.849,7.68l-.869-.68h.021V2h-2v3.451L13.849,.637c-1.088-.852-2.609-.852-3.697,0L1.151,7.68c-.731,.572-1.151,1.434-1.151,2.363v13.957H9V15c0-.551,.448-1,1-1h4c.552,0,1,.449,1,1v9h9V10.043c0-.929-.42-1.791-1.151-2.363Zm-.849,14.32h-5v-7c0-1.654-1.346-3-3-3h-4c-1.654,0-3,1.346-3,3v7H2V10.043c0-.31,.14-.597,.384-.788L11.384,2.212c.363-.284,.869-.284,1.232,0l9,7.043c.244,.191,.384,.478,.384,.788v11.957Z" />
                </svg>
                <span class="sm:text-sm text-xs sm:hidden lg:block font-medium sm:font-bold">Home</span>
            </a>
            <a href="message.html"
                class="inline-flex sm:hidden flex-col h-full w-full  sm:h-auto  items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <svg xmlns="http://www.w3.org/2000/svg" id="Outline" fill="currentColor" viewBox="0 0 24 24"
                    class="w-5 h-5 mb-1 text-black dark:text-gray-400 group-hover:text-blue-600 " aria-hidden="true">
                    <path
                        d="M19,1H5A5.006,5.006,0,0,0,0,6V18a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V6A5.006,5.006,0,0,0,19,1ZM5,3H19a3,3,0,0,1,2.78,1.887l-7.658,7.659a3.007,3.007,0,0,1-4.244,0L2.22,4.887A3,3,0,0,1,5,3ZM19,21H5a3,3,0,0,1-3-3V7.5L8.464,13.96a5.007,5.007,0,0,0,7.072,0L22,7.5V18A3,3,0,0,1,19,21Z" />
                </svg>
                <span class="text-xs font-medium">Message</span>
            </a>
            <a href="mengikuti.html"
                class="hidden sm:p-1 sm:rounded-lg lg:justify-start sm:inline-flex sm:flex-row gap-x-3 flex-col h-full w-full  sm:h-auto items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 mb-1 text-black  group-hover:text-blue-600" id="mengikuti" viewBox="0 0 24 24">
                    <path d="M9,12A6,6,0,1,0,3,6,6.006,6.006,0,0,0,9,12ZM9,2A4,4,0,1,1,5,6,4,4,0,0,1,9,2Z" />
                    <path
                        d="M9,14a9.011,9.011,0,0,0-9,9,1,1,0,0,0,2,0,7,7,0,0,1,14,0,1,1,0,0,0,2,0A9.011,9.011,0,0,0,9,14Z" />
                    <path
                        d="M22,7.875a2.107,2.107,0,0,0-2,2.2,2.107,2.107,0,0,0-2-2.2,2.107,2.107,0,0,0-2,2.2c0,1.73,2.256,3.757,3.38,4.659a.992.992,0,0,0,1.24,0c1.124-.9,3.38-2.929,3.38-4.659A2.107,2.107,0,0,0,22,7.875Z" />
                </svg>
                <span class="text-sm sm:hidden lg:block font-bold">Following</span>
            </a>
            <a href="create.html"
                class="flex sm:p-1 sm:rounded-lg lg:justify-start sm:flex-row h-full w-full sm:h-auto  gap-x-3 flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <svg xmlns="http://www.w3.org/2000/svg" id="Outline" fill="currentColor" viewBox="0 0 24 24"
                    class="w-6 text-blue-500 h-6 mb-1 group-hover:text-blue-600 " aria-hidden="true">
                    <path
                        d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm4 13h-3v3a1 1 0 0 1 -2 0v-3h-3a1 1 0 0 1 0-2h3v-3a1 1 0 0 1 2 0v3h3a1 1 0 0 1 0 2z" />
                </svg>
                <span class="sm:text-sm text-xs sm:hidden lg:block sm:font-bold font-medium">Upload</span>
            </a>
            <a href="notifikasi.html"
                class="inline-flex sm:hidden flex-col h-full w-full items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <svg class="w-5 h-5 mb-1 text-black dark:text-gray-400 group-hover:text-blue-600 " aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M22.555,13.662l-1.9-6.836A9.321,9.321,0,0,0,2.576,7.3L1.105,13.915A5,5,0,0,0,5.986,20H7.1a5,5,0,0,0,9.8,0h.838a5,5,0,0,0,4.818-6.338ZM12,22a3,3,0,0,1-2.816-2h5.632A3,3,0,0,1,12,22Zm8.126-5.185A2.977,2.977,0,0,1,17.737,18H5.986a3,3,0,0,1-2.928-3.651l1.47-6.616a7.321,7.321,0,0,1,14.2-.372l1.9,6.836A2.977,2.977,0,0,1,20.126,16.815Z" />
                </svg>
                <span class="text-xs font-medium">Notifikasi</span>
            </a>
            <a href="search.html"
                class="sm:inline-flex hidden sm:p-1 sm:rounded-lg lg:justify-start flex-col sm:flex-row gap-x-3 h-full w-full  sm:h-auto items-center justify-center px-5 rounded-e-full hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <svg class="w-5 h-5 mb-1 text-black dark:text-gray-400 group-hover:text-blue-600 " aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="m21.17,19.756c.524-.791.83-1.738.83-2.756,0-2.757-2.243-5-5-5s-5,2.243-5,5,2.243,5,5,5c1.018,0,1.965-.306,2.756-.83l2.537,2.537c.195.195.451.293.707.293s.512-.098.707-.293c.391-.391.391-1.023,0-1.414l-2.537-2.537Zm-7.17-2.756c0-1.654,1.346-3,3-3s3,1.346,3,3-1.346,3-3,3-3-1.346-3-3ZM6,4.5c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5.672-1.5,1.5-1.5,1.5.672,1.5,1.5Zm4,0c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5.672-1.5,1.5-1.5,1.5.672,1.5,1.5ZM19,0H5C2.243,0,0,2.243,0,5v12c0,2.757,2.243,5,5,5h5c.553,0,1-.447,1-1s-.447-1-1-1h-5c-1.654,0-3-1.346-3-3v-8h20v3c0,.552.447,1,1,1s1-.448,1-1v-7c0-2.757-2.243-5-5-5ZM2,7v-2c0-1.654,1.346-3,3-3h14c1.654,0,3,1.346,3,3v2H2Z" />
                </svg>
                <span class="text-xs font-medium sm:hidden lg:block sm:text-sm sm:font-bold">Explore</span>
            </a>
            <a href="profil.html"
                class="inline-flex sm:p-1 sm:rounded-lg lg:justify-start flex-col sm:flex-row gap-x-3 h-full w-full  sm:h-auto items-center justify-center px-5 rounded-e-full hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <svg class="w-5 h-5 mb-1 text-black dark:text-gray-400 group-hover:text-blue-600 " aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm-4,21.164v-.164c0-2.206,1.794-4,4-4s4,1.794,4,4v.164c-1.226.537-2.578.836-4,.836s-2.774-.299-4-.836Zm9.925-1.113c-.456-2.859-2.939-5.051-5.925-5.051s-5.468,2.192-5.925,5.051c-2.47-1.823-4.075-4.753-4.075-8.051C2,6.486,6.486,2,12,2s10,4.486,10,10c0,3.298-1.605,6.228-4.075,8.051Zm-5.925-15.051c-2.206,0-4,1.794-4,4s1.794,4,4,4,4-1.794,4-4-1.794-4-4-4Zm0,6c-1.103,0-2-.897-2-2s.897-2,2-2,2,.897,2,2-.897,2-2,2Z" />
                </svg>
                <span class="text-xs font-medium sm:hidden lg:block sm:text-sm sm:font-bold">Profile</span>
            </a>
        </div>
    </div>

    <div class="p-2 sm:ml-16 lg:ml-52">
        <div class="relative flex w-full h-[30vh] overflow-hidden rounded-md justify-center items-center">
            <img class="w-full h-[30vh] object-cover " src="assets/img/2150862804.jpg" alt="">
            <div class="bg-black absolute bg-opacity-40 w-full h-full"></div>
            <div class="absolute text-white flex flex-col justify-center items-center w-full p-3">
                <h1>Name Kategori</h1>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae fugiat sequi,
                    ipsum accusantium
                    suscipit magni optio nesciunt veniam non? Numquam blanditiis eius quia ullam, perferendis
                    consequatur et officia ipsam aspernatur.</p>
            </div>
        </div>
        <div class="container mt-3 mx-auto">
            <div class="mb-28 mx-auto w-full">
                <div class="columns-2 gap-2 sm:gap-2 sm:columns-3 lg:columns-5">
                    <figure class="flex flex-col border bg-white drop-shadow-md overflow-hidden  rounded-md mb-2">
                        <a class="overflow-hidden" href="detail.html">
                            <img class="filter grayscale-0 hover:grayscale cursor-zoom-in transition-all duration-500 scale-100 hover:scale-105"
                                src="assets/img/img.jpg" alt="" />
                        </a>
                        <div class="flex flex-col w-full">
                            <a href="detail.html"
                                class="flex text-[10px] sm:text-xs font-normal p-1 px-3 break-all">judul postingan
                                postingan
                                postingan postingan</a>
                            <div class="flex gap-2 p-2 bottom-0 h-full justify-between w-full">
                                <a href="profil.html" class="flex items-center gap-2">
                                    <img class="w-5 h-5 sm:w-8 sm:h-8 rounded-full object-cover"
                                        src="assets/img/image.jpg" alt="profil">
                                    <h1
                                        class="text-[9px] sm:text-xs text-black font-medium hover:underline transition-all duration-300">
                                        king koding</h1>
                                </a>
                                <a href="detail.html" class="flex items-center gap-1">
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
                    <figure class="flex flex-col border bg-white drop-shadow-md overflow-hidden  rounded-md mb-2">
                        <a class="overflow-hidden" href="detail.html">
                            <img class="filter grayscale-0 hover:grayscale cursor-zoom-in transition-all duration-500 scale-100 hover:scale-105"
                                src="assets/img/image.jpg" alt="" />
                        </a>
                        <div class="flex flex-col w-full">
                            <div class="flex text-[10px] sm:text-xs font-normal p-1 px-3 break-all">judul postingan
                                postingan
                                postingan postingan</div>
                            <div class="flex gap-2 p-2 bottom-0 h-full justify-between w-full">
                                <a href="profil.html" class="flex items-center gap-2">
                                    <img class="w-5 h-5 sm:w-8 sm:h-8 rounded-full object-cover"
                                        src="assets/img/image.jpg" alt="profil">
                                    <h1 class="text-[9px] sm:text-xs text-black font-medium">king koding</h1>
                                </a>
                                <a href="detail.html" class="flex items-center gap-1">
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
                    <figure class="flex flex-col border bg-white drop-shadow-md overflow-hidden  rounded-md mb-2">
                        <a class="overflow-hidden" href="detail.html">
                            <img class="filter grayscale-0 hover:grayscale cursor-zoom-in transition-all duration-500 scale-100 hover:scale-105"
                                src="assets/img/image2.jpg" alt="" />
                        </a>
                        <div class="flex flex-col w-full">
                            <div class="flex text-[10px] sm:text-xs font-normal p-1 px-3 break-all">judul postingan
                                postingan
                                postingan postingan</div>
                            <div class="flex gap-2 p-2 bottom-0 h-full justify-between w-full">
                                <a href="profil.html" class="flex items-center gap-2">
                                    <img class="w-5 h-5 sm:w-8 sm:h-8 rounded-full object-cover"
                                        src="assets/img/image.jpg" alt="profil">
                                    <h1 class="text-[9px] sm:text-xs text-black font-medium">king koding</h1>
                                </a>
                                <a href="detail.html" class="flex items-center gap-1">
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
                    <figure class="flex flex-col border bg-white drop-shadow-md overflow-hidden  rounded-md mb-2">
                        <a class="overflow-hidden" href="detail.html">
                            <img class="filter grayscale-0 hover:grayscale cursor-zoom-in transition-all duration-500 scale-100 hover:scale-105"
                                src="assets/img/img.jpg" alt="" />
                        </a>
                        <div class="flex flex-col w-full">
                            <div class="flex text-[10px] sm:text-xs font-normal p-1 px-3 break-all">judul postingan
                                postingan
                                postingan postingan</div>
                            <div class="flex gap-2 p-2 bottom-0 h-full justify-between w-full">
                                <a href="profil.html" class="flex items-center gap-2">
                                    <img class="w-5 h-5 sm:w-8 sm:h-8 rounded-full object-cover"
                                        src="assets/img/image.jpg" alt="profil">
                                    <h1 class="text-[9px] sm:text-xs text-black font-medium">king koding</h1>
                                </a>
                                <a href="detail.html" class="flex items-center gap-1">
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
                    <figure class="flex flex-col border bg-white drop-shadow-md overflow-hidden  rounded-md mb-2">
                        <a class="overflow-hidden" href="detail.html">
                            <img class="filter grayscale-0 hover:grayscale cursor-zoom-in transition-all duration-500 scale-100 hover:scale-105"
                                src="assets/img/image3.jpg" alt="" />
                        </a>
                        <div class="flex flex-col w-full">
                            <a href="detail.html"
                                class="flex text-[10px] sm:text-xs font-normal p-1 px-3 break-all cursor-pointer">judul
                                postingan
                                postingan
                                postingan postingan</a>
                            <div class="flex gap-2 p-2 bottom-0 h-full justify-between w-full">
                                <a href="profil.html" class="flex items-center gap-2">
                                    <img class="w-5 h-5 sm:w-8 sm:h-8 rounded-full object-cover"
                                        src="assets/img/image.jpg" alt="profil">
                                    <h1 class="text-[9px] sm:text-xs text-black font-medium hover:underline">king koding
                                    </h1>
                                </a>
                                <a href="detail.html" class="flex items-center gap-1">
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
                </div>
            </div>
        </div>
    </div>
</body>

</html>