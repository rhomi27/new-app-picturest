<div id="room-chat" class="fixed hidden md:relative z-[100] md:z-0 top-0 bottom-0 right-0 left-0 md:ml-64 lg:ml-96">
    <div id="space" class="bg-white w-full h-full overflow-y-scroll md:overflow-y-visible scroll">
        <div class="sticky p-2 bg-blue-800 flex start-0 items-center gap-x-3 md:top-[44px] -top-[1px] z-[110]">
            <button id="close-chat" class="text-white">
                <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" id="Outline"
                    viewBox="0 0 24 24">
                    <path
                        d="M.88,14.09,4.75,18a1,1,0,0,0,1.42,0h0a1,1,0,0,0,0-1.42L2.61,13H23a1,1,0,0,0,1-1h0a1,1,0,0,0-1-1H2.55L6.17,7.38A1,1,0,0,0,6.17,6h0A1,1,0,0,0,4.75,6L.88,9.85A3,3,0,0,0,.88,14.09Z" />
                </svg>
            </button>
            <a id="profile" href="">
                <img id="avatar" class="w-10 h-10 object-cover rounded-full" src="" alt="">
            </a>
            <h1 id="username" class="text-sm text-white"></h1>
        </div>
        <div id="content" class="p-2 gap-2 flex flex-col mb-16">
        
        </div>
        <div class="fixed md:sticky bottom-0 right-0 left-0 pb-3 p-1 px-3">
            <form id="message-form" class="relative flex w-full gap-x-2">
                <input id="to_user" type="hidden">
                <input id="text-chat" class="w-full bg-blue-100 rounded-full p-2 px-4 text-sm" type="text">
                <button disabled id="send-chat"
                    class="bg-gray-400 disabled:cursor-not-allowed text-white rounded-full p-2 text-sm">Send</button>
            </form>
        </div>
    </div>
</div>
