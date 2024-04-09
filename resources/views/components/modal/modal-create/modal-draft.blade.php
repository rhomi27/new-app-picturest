<div id="draft-modal" tabindex="-1" aria-hidden="true"
    class="animate__animated transition-all duration-200 overflow-y-auto overflow-x-hidden fixed z-[100] hidden justify-center items-center w-screen h-screen">
    <div class="fixed top-0 right-0 bottom-0 left-0 bg-red-950 bg-opacity-50"></div>
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div id="modal-draft" class="relative animate__animated bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal body -->
            <form class="mb-6 p-5">
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-center text-red-800 text-base font-picturest">Delete edits?</h1>
                    <h1 class="text-center text-gray-400 text-sm font-light">If you go back now, you will lose the edits
                        you
                        made</h1>
                </div>
                <div class="flex flex-col justify-center items-center mt-5 gap-2">
                    <a id="delete" href=""
                        class="border text-sm border-red-600 w-full text-center py-1 rounded-md text-red-600 hover:text-white hover:bg-red-600 transition-all duration-200">Delete</a>
                    <button id="save-draft" data-draf="on" type="button"
                        class="save border text-sm border-blue-600 w-full text-center py-1 rounded-md text-blue-600 hover:text-white hover:bg-blue-600 transition-all duration-200">Save
                        Draft</button>
                    <button id="continue" type="button"
                        class="border text-sm border-gray-600 w-full text-center py-1 rounded-md text-gray-600 hover:text-white hover:bg-gray-600 transition-all duration-200">Keep
                        editing</button>
                </div>
            </form>
        </div>
    </div>
</div>
