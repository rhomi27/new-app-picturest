<div id="edit-photo-modal" tabindex="-1" aria-hidden="true"
    class="scroll overflow-y-auto overflow-x-hidden fixed hidden top-0 bottom-0 right-0 left-0 z-[100] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="fixed top-0 right-0 bottom-0 left-0 bg-gradient-to-tr from-blue-950 to-red-900 opacity-90"></div>
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative animate__animated bg-gray-100 rounded-lg shadow-md dark:bg-gray-700">
            <!-- Modal header -->
            <div class="w-full h-full flex justify-center items-center flex-col p-5 gap-3">
                <h1 class="mb-4 text-sm">Please change your new profile photo</h1>
                <div id="preview-final" class="relative overflow-hidden max-w-40 max-h-40 rounded-full mb-2">
                    <img id="final-photo" src="{{ asset('avatar/' . Auth::user()->avatar) }}" alt="">
                </div>
                <input type="file" accept="image/*" class="hidden" name="" id="input-photo">
                <label
                    class="border text-sm border-blue-600 p-2 w-full text-center rounded-md hover:bg-blue-600 hover:text-white"
                    for="input-photo">Change Photo Profile</label>
                <button id="delete-avatar"
                    class="border text-sm border-red-600 p-2 w-full  rounded-md hover:bg-red-600 hover:text-white">Delete
                    Photo Profile</button>
                <button id="cancel-btn" type="button"
                    class="border text-sm border-gray-600 p-2 w-full rounded-md hover:bg-gray-600 hover:text-white">Cancel</button>
            </div>
            <!-- Modal body -->
        </div>
    </div>
</div>

<div id="crop-modal" tabindex="-1" aria-hidden="true"
    class="scroll overflow-y-auto overflow-x-hidden fixed hidden top-0 bottom-0 right-0 left-0 z-[100] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="fixed top-0 right-0 bottom-0 left-0 bg-gradient-to-tr from-blue-950 to-red-900 opacity-90"></div>
    <div class="relative p-4 w-full max-w-lg h-full">
        <!-- Modal content -->
        <div class="relative animate__animated bg-gray-100 rounded-lg shadow-md dark:bg-gray-700">
            <!-- Modal header -->
            <div class="w-full h-full flex justify-center items-center flex-col p-2 gap-3">
                <h1 class="mb-1">Edit Your Photo</h1>
                <div id="preview" class="relative overflow-hidden rounded-md max-h-80">
                </div>
                <div class="flex gap-2 w-full">
                    <button id="cancel-change"
                    class="border text-sm border-red-600 p-2 w-full  rounded-md hover:bg-red-600 hover:text-white">Cancel</button>
                    <button id="cropButton" type="button"
                        class="border border-blue-600 p-1 text-sm w-full rounded-md hover:bg-blue-600 hover:text-white">Save</button>
                </div>
            </div>
            <!-- Modal body -->
        </div>
    </div>
</div>
