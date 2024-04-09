<div id="create-album" tabindex="-1" 
    class="hidden scroll overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[100] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="fixed top-0 right-0 bottom-0 left-0 bg-gradient-to-tr from-blue-950 to-red-900 opacity-90"></div>
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div id="modal-album"
            class="relative animate__animated bg-white bg-opacity-70 backdrop-blur-sm rounded-lg shadow-md dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-picturest text-gray-900 dark:text-white">
                    Add Album
                </h3>
                <button type="button" id="close-modal-album"
                    class="text-black bg-blue-100 hover:bg-blue-600 hover:text-white rounded-full text-sm p-2 ms-auto inline-flex justify-center items-center">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="mb-6 p-5">
                <div class="flex flex-col justify-center">
                    <div class="flex justify-center items-center p-1 mb-2">
                        <div class="flex flex-col">
                            <div
                                class="flex-col mb-2 w-auto h-auto max-h-[300px] max-w-[360px] rounded-md overflow-hidden">
                                <label id="labelthumbnail" for="thumbnail"
                                    class="flex justify-center items-center w-full h-ful min-h-[300px] cursor-pointer bg-gray-200 hover:bg-blue-200 transition-all duration-300">
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
                                                upload thumbnail</span></p>
                                        <p class="text-xs text-center text-blue-700 dark:text-gray-400">PNG, JPG or JPEG
                                            (MAX. 8 MB)</p>
                                    </div>
                                </label>
                                <input class="hidden" onchange="viewThumbnail()" type="file" name="thumbnail"
                                    id="thumbnail">
                                <img src="" id="previewThumbnail"
                                    class="hidden w-full h-full max-h-[300px] object-contain rounded-md" alt="gambar">
                            </div>
                            <label for="thumbnail"
                                class="border text-center px-5 p-1 text-sm font-semibold border-blue-600 rounded-md cursor-pointer text-blue-950 scale-100 hover:scale-95 transition-all duration-300 hover:bg-gradient-to-r from-blue-700 to-blue-400 hover:text-white">
                                Select thumbnail
                            </label>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="title-album" class="block pl-1 text-sm mb-1 font-semibold">Title*</label>
                        <input type="text" name="title_album" id="title-album"
                            placeholder="fill in the title album text input"
                            class="p-1 text-sm text-black bg-gradient-to-r from-white to-blue-100 px-2 rounded-md w-full border-blue-600 outline-none placeholder-gray-500">
                    </div>
                    <div class="mb-5">
                        <label for="deskription-album"
                            class="block pl-1 text-sm mb-1 font-semibold">Deskription*</label>
                        <textarea type="text" name="deskription_album" id="deskription-album"
                            placeholder="fill in the deskription album text input"
                            class="p-1 text-sm text-black bg-gradient-to-r from-white to-blue-100 px-2 rounded-md w-full border-blue-600 outline-none placeholder-gray-500"></textarea>
                    </div>
                </div>
                <div class="flex justify-end items-center mt-3 gap-3">
                    <button type="button" data-modal-toggle="create-album"
                        class="text-center text-sm font-medium text-white border border-red-600 bg-red-600 px-4 p-1 rounded-md hover:bg-red-200 hover:text-red-600 transition-all duration-200">
                        Cancel
                    </button>
                    <button type="submit"
                        class="text-center text-sm font-medium text-white border border-blue-600 bg-blue-600 px-4 p-1 rounded-md hover:bg-blue-200 hover:text-blue-600 transition-all duration-200">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
