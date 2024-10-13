<header class="antialiased">

    <body class="bg-neutral-800">
        <div class="container w-screen relative">
            <div id="navbar"
                class="navbar bg-zinc-900/[0.5] p-8 py-1 flex items-center justify-between w-screen fixed z-10 transition-opacity duration-300">
                <section class="flex items-center">
                    <img class="w-32" src='{{ URL('images/logo-main.png') }}' alt="">
                    <section class="flex text-white ps-3 gap-4">
                        <a href="/" class="ps-3 text-s cursor-pointer">Home</a>
                        <a href="/movies" class="ps-3 text-s cursor-pointer">Films</a>
                        <a href="/albums" class="ps-3 text-s cursor-pointer">Albums</a>
                    </section>
                </section>
                <section class="justify-right">
                    <form class="max-w-sm mx-auto justify-end w-screen">
                        <label for="default-search" class="mb-2 text-sm font-medium text-white sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-4 ps-10 text-sm text-white border border-gray-300 rounded-lg bg-black focus:ring-red-800 focus:border-red-800"
                                placeholder="Search" required />
                            <button type="submit"
                                class="text-white absolute end-2.5 bottom-2.5 bg-neutral-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </body>
</header>
