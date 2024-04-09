<div id="error-signin"
    class="fixed top-5 hidden sm:top-10 left-1/2 -translate-x-1/2 w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow z-50 bg-opacity-60 backdrop-blur-sm"
    role="alert">
    <div class="flex w-full h-full">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-100 bg-red-600 rounded-full">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" fill="currentColor">
                <path
                    d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z" />
                <path d="M12,5a1,1,0,0,0-1,1v8a1,1,0,0,0,2,0V6A1,1,0,0,0,12,5Z" />
                <rect x="11" y="17" width="2" height="2" rx="1" />
            </svg>
        </div>
        <div class="ms-3 text-sm font-normal">
            <span id="msg-error" class="mb-1 text-sm font-semibold text-gray-900 dark:text-white"></span>
        </div>
        <button type="button" id="close-btn-error"
            class="ms-auto -mx-1.5 -my-1.5 items-center justify-center flex-shrink-0 text-black rounded-lg focus:ring-0 p-1.5 inline-flex h-5 w-5">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
</div>

<div id="sign-in-modal" tabindex="-1" aria-hidden="true"
    class="hidden animate__animated overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-40 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="fixed top-0 right-0 bottom-0 left-0 bg-gradient-to-br from-fuchsia-950 to-black opacity-70"></div>
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white backdrop-blur-sm bg-opacity-90 rounded-xl shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 rounded-t dark:border-gray-600">
                <h3 class="flex flex-grow justify-center text-xl font-semibold text-gray-900 dark:text-white">
                    <img class="w-8 h-8" src="{{ asset('assets/icon/android-chrome-192x192.png') }}" alt="">
                </h3>
                <button type="button" id="close-signIn"
                    class="end-0 text-blue-400 bg-transparent hover:bg-blue-200 hover:text-blue-900 rounded-full text-sm w-8 h-8 ms-auto inline-flex justify-center items-center">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="text-xl font-bold text-center">Welcome to Picturest</div>
            <h1 class="text-xs font-medium text-center">Welcome back</h1>
            <div class="p-4 md:p-5">
                <form id="signIn-form">
                    <div class="mb-3">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="text" name="email" id="email"
                            class="requiredIn emailIn bg-blue-50 border border-blue-300 text-gray-900 text-sm rounded-lg block w-full p-2 focus:ring-0"
                            placeholder="name@gmail.com" />
                        <p id="email-error" class="text-sm text-red-600 pl-2"></p>
                    </div>
                    <div class="mb-3">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <div class="relative">
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="requiredIn min-textIn bg-blue-50 border border-blue-300 text-gray-900 text-sm rounded-lg block w-full p-2 focus:ring-0" />
                            <button id="show-passwordIn-btn" type="button"
                                class="absolute block bottom-3 right-3 text-gray-600">
                                <svg id="unshowIn" class="w-4 h-4 hidden" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M23.271,9.419C21.72,6.893,18.192,2.655,12,2.655S2.28,6.893.729,9.419a4.908,4.908,0,0,0,0,5.162C2.28,17.107,5.808,21.345,12,21.345s9.72-4.238,11.271-6.764A4.908,4.908,0,0,0,23.271,9.419Zm-1.705,4.115C20.234,15.7,17.219,19.345,12,19.345S3.766,15.7,2.434,13.534a2.918,2.918,0,0,1,0-3.068C3.766,8.3,6.781,4.655,12,4.655s8.234,3.641,9.566,5.811A2.918,2.918,0,0,1,21.566,13.534Z" />
                                    <path
                                        d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z" />
                                </svg>
                                <svg id="showIn" class="w-4 h-4" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <g id="_01_align_center" data-name="01 align center">
                                        <path
                                            d="M23.821,11.181v0a15.736,15.736,0,0,0-4.145-5.44l3.032-3.032L21.293,1.293,18,4.583A11.783,11.783,0,0,0,12,3C4.5,3,1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64,15.736,15.736,0,0,0,4.145,5.44L1.293,21.293l1.414,1.414L6,19.417A11.783,11.783,0,0,0,12,21c7.5,0,10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM2,12.011C2.75,10.366,5.693,5,12,5a9.847,9.847,0,0,1,4.518,1.068L14.753,7.833a4.992,4.992,0,0,0-6.92,6.92L5.754,16.832A13.647,13.647,0,0,1,2,12.011ZM15,12a3,3,0,0,1-3,3,2.951,2.951,0,0,1-1.285-.3L14.7,10.715A2.951,2.951,0,0,1,15,12ZM9,12a3,3,0,0,1,3-3,2.951,2.951,0,0,1,1.285.3L9.3,13.285A2.951,2.951,0,0,1,9,12Zm3,7a9.847,9.847,0,0,1-4.518-1.068l1.765-1.765a4.992,4.992,0,0,0,6.92-6.92l2.078-2.078A13.584,13.584,0,0,1,22,12C21.236,13.657,18.292,19,12,19Z" />
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <p id="password-error" class="text-sm text-red-600 pl-2"></p>
                    </div>
                    <div class="flex justify-between mb-3">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value=""
                                    class="w-3 h-3 border border-gray-300 rounded bg-gray-50 focus:ring-0 focus:border-blue-500 focus:bg-blue-500" />
                            </div>
                            <label for="remember"
                                class="ms-2 text-xs font-medium text-gray-900 dark:text-gray-300">Remember
                                me</label>
                        </div>
                        <a href="#" class="text-xs text-blue-700 hover:underline dark:text-blue-500">Forgot
                            Password?</a>
                    </div>
                    <div>
                        <button type="submit" id="submit-signIn" disabled
                            class="w-full flex justify-center items-center disabled:cursor-not-allowed text-white hover:text-blue-900 border border-blue-400 bg-blue-400 hover:bg-transparent font-medium rounded-lg text-sm p-2 text-center transition-all duration-300">
                            <span id="textSigin">Sign In</span>
                            <div class="loading hidden" role="status">
                                <svg aria-hidden="true" class="w-4 h-4 text-gray-600 animate-spin fill-white"
                                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                        fill="currentColor" />
                                    <path
                                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                        fill="currentFill" />
                                </svg>
                                <span class="sr-only">Loading...</span>
                            </div>
                        </button>
                        <h1 class="text-center p-1 text-sm font-medium">or</h1>
                        <a href="/auth/facebook"
                            class="w-full flex justify-center items-center gap-x-2 text-blue-700 bg-transparent border border-blue-400 hover:bg-blue-400 hover:text-white font-medium rounded-lg text-sm p-2 text-center transition-all duration-300">
                            <img class="w-4 h-4" src="{{ asset('assets/icon/facebook.png') }}" alt="">
                            Login Facebook
                        </a>
                    </div>
                </form>
                <div class="text-xs mt-4 font-medium text-gray-500 dark:text-gray-300">
                    Don't have an account?
                    <button id="signUp-tab" class="text-blue-700 hover:underline">
                        Sign Up
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
