<div id="modal-report" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 rounded-t dark:border-gray-600">
                <h3 class="text-sm font-semibold text-gray-900 dark:text-white">
                    Laporkan Postingan?
                </h3>
                <button type="button"
                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="modal-report">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4" action="#">
                <div class="mb-5">
                    <label class="block mb-2 text-sm text-gray-900 dark:text-white">Alasan</label>
                    <div class="flex flex-wrap">
                        <div class="mr-4 mb-2">
                            <input type="checkbox" id="kategori-dewasa-18" name="kategori[]" value="Dewasa-18"
                                class="text-blue-600 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 ">
                            <label for="kategori-dewasa-18"
                                class="ml-2 text-sm text-gray-900 dark:text-white">Dewasa-18</label>
                        </div>
                        <div class="mr-4 mb-2">
                            <input type="checkbox" id="kategori-kekerasan" name="kategori[]" value="Kekerasan"
                                class="text-blue-600 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 ">
                            <label for="kategori-kekerasan"
                                class="ml-2 text-sm text-gray-900 dark:text-white">Kekerasan</label>
                        </div>
                        <div class="mr-4 mb-2">
                            <input type="checkbox" id="kategori-pelecehan" name="kategori[]" value="Pelecehan"
                                class="text-blue-600 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 ">
                            <label for="kategori-pelecehan"
                                class="ml-2 text-sm text-gray-900 dark:text-white">Pelecehan</label>
                        </div>
                        <div class="mr-4 mb-2">
                            <input type="checkbox" id="kategori-penipuan" name="kategori[]" value="Penipuan"
                                class="text-blue-600 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 ">
                            <label for="kategori-penipuan"
                                class="ml-2 text-sm text-gray-900 dark:text-white">Penipuan</label>
                        </div>
                        <div class="mr-4 mb-2">
                            <input type="checkbox" id="kategori-offensive" name="kategori[]" value="Jomok Homo"
                                class="text-blue-600 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 ">
                            <label for="kategori-offensive" class="ml-2 text-sm text-gray-900 dark:text-white">Jomok
                                Homo</label>
                        </div>
                        <!-- Add more categories here -->
                    </div>
                </div>
                <div class="mb-5">
                    <label for="message" class="block mb-2 text-sm text-gray-900 dark:text-white">Lainnya</label>
                    <textarea id="message" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                        placeholder="Berikan alasan lainnya untuk postingan ini"></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="w-1/4 text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 p-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
