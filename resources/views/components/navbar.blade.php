<header class="antialiased">
    <body class="bg-neutral-800">
        <div class="container relative w-screen">
            <div
                id="navbar"
                class="navbar fixed z-10 flex w-screen items-center justify-between bg-zinc-900/[0.5] p-8 py-1 transition-opacity duration-300"
            >
                <section class="flex items-center">
                    <img class="w-32" src="{{ URL('images/logo-main.png') }}" alt="" />
                    <section class="flex gap-4 ps-3 text-white">
                        <a href="/" class="text-s cursor-pointer ps-3">Home</a>
                        <a href="/movies" class="text-s cursor-pointer ps-3">Films</a>
                        <a href="/albums" class="text-s cursor-pointer ps-3">Albums</a>
                    </section>
                </section>
                <section class="justify-right">
                    <form class="mx-auto w-screen max-w-sm justify-end">
                        <label for="default-search" class="sr-only mb-2 text-sm font-medium text-white">Search</label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                                <svg
                                    class="h-4 w-4 text-gray-500 dark:text-gray-400"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                                    />
                                </svg>
                            </div>
                            <input
                                type="search"
                                id="default-search"
                                class="block w-full rounded-lg border border-gray-300 bg-black p-4 ps-10 text-sm text-white focus:border-red-800 focus:ring-red-800"
                                placeholder="Search"
                                required
                            />
                            <button
                                type="submit"
                                class="absolute bottom-2.5 end-2.5 rounded-lg bg-neutral-700 px-4 py-2 text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
                            >
                                Search
                            </button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </body>
</header>
