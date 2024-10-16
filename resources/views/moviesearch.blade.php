<x-layout>
    <section class="dark:bg-gray-900">
        <div class="mx-auto max-w-screen-lg px-4 py-8 lg:px-6 lg:py-16">
            <div class="xs:grid-cols-2 grid gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
                @foreach ($movies as $movie)
                    <div
                        class="max-w-sm rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800"
                    >
                        <a href="/movies/{{ $movie->slug }}">
                            <img class="rounded-t-lg" src="{{ URL($movie->imagepath) }}" alt="" />
                        </a>
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
                            {{--
                                <a href="#"
                                class="inline-flex items-center px-3 py-1 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Add to album
                                </a>
                            --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
