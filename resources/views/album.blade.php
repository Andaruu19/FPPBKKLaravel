<x-layout>
    <section class="dark:bg-gray-900">
        <div class="mx-auto max-w-screen-lg px-4 py-8 lg:px-6 lg:py-16">
            <div class="xs:grid-cols-2 grid gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
                @foreach ($album->movies as $movie)
                    <div
                        class="relative max-w-sm rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800"
                    >
                        <button
                            data-modal-target="popup-modal"
                            data-modal-toggle="popup-modal"
                            class="absolute right-0 p-2"
                            type="button"
                        >
                            <svg
                                class="h-6 w-6 text-red-700 hover:text-red-800 dark:text-white"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            {{-- Toggle modal --}}
                        </button>

                        <div
                            id="popup-modal"
                            tabindex="-1"
                            class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0"
                        >
                            <div class="relative max-h-full w-full max-w-md p-4">
                                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                                    <button
                                        type="button"
                                        class="absolute end-2.5 top-3 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="popup-modal"
                                    >
                                        <svg
                                            class="h-3 w-3"
                                            aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 14 14"
                                        >
                                            <path
                                                stroke="currentColor"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                                            />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>

                                    {{-- Route::delete('/albums/movies/{idAlbum}/{idMovie}', 'AlbumMovieController@removeMovie'); --}}

                                    <div class="p-4 text-center md:p-5">
                                        <svg
                                            class="mx-auto mb-4 h-12 w-12 text-gray-400 dark:text-gray-200"
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
                                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                                            />
                                        </svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                            Are you sure you want to delete this product?
                                        </h3>
                                        <div class="flex justify-center">
                                            {{--
                                                <button data-modal-hide="popup-modal" type="button"
                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                Yes, I'm sure
                                                </button>
                                            --}}
                                            <form
                                                action="/albums/movies/{{ $album->id }}/{{ $movie->id }}"
                                                method="POST"
                                            >
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    type="submit"
                                                    class="inline-flex items-center rounded-lg bg-red-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:focus:ring-red-800"
                                                >
                                                    Yes, I'm sure
                                                </button>
                                            </form>
                                            <button
                                                data-modal-hide="popup-modal"
                                                type="button"
                                                class="ms-3 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
                                            >
                                                No, cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="/movies/{{ $movie->slug }}">
                            <img class="rounded-t-lg" src="{{ URL($movie->imagepath) }}" alt="" />
                        </a>
                        <!-- Gambar film -->

                        <!-- Konten deskripsi film -->
                        <div class="flex flex-col p-4">
                            <div class="flex items-center justify-between text-gray-500">
                                <a href="/movies/{{ $movie->slug }}">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $movie->title }}
                                    </h5>
                                </a>
                                <span
                                    class="inline-flex items-center rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-200 dark:text-primary-800"
                                >
                                    <svg
                                        class="mr-1 h-3 w-3"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"
                                        ></path>
                                    </svg>
                                    {{ $movie->genre->name }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
