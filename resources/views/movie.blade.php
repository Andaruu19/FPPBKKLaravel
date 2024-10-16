<x-layout>
    <section
        class="h-screen bg-gray-700 bg-cover bg-center bg-no-repeat bg-blend-multiply"
        style="background-image: url('/{{ $movie->imagepath }}')"
    >
        <div class="mx-auto max-w-screen-xl px-4 py-24 text-center lg:py-56">
            <h1
                class="mb-4 text-4xl font-extrabold uppercase leading-none tracking-tight text-white md:text-5xl lg:text-6xl"
            >
                {{ $movie->title }}
            </h1>
            <p class="mb-4 text-lg font-normal text-gray-300 sm:px-16 lg:px-48 lg:text-xl">
                {{ $movie->description }}
            </p>

            <div class="mb-4">
                <span
                    class="inline-flex items-center rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-200 dark:text-primary-800"
                >
                    <svg
                        class="me-2 mr-1 h-3 w-3"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z"
                        ></path>
                    </svg>
                    {{ $movie->genre->name }}
                </span>

                <span
                    class="inline-flex items-center rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-200 dark:text-green-800"
                >
                    <svg
                        class="me-2 mr-1 h-3 w-3"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                        ></path>
                    </svg>
                    {{ $movie->actor->name }}
                </span>

                <span
                    class="inline-flex items-center rounded bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800 dark:bg-yellow-200 dark:text-yellow-800"
                >
                    <svg
                        class="me-2 mr-1 h-3 w-3"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                        ></path>
                    </svg>
                    {{ $movie->year }}
                </span>
            </div>

            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a
                    href="https://www.youtube.com/watch?v=bpHhnDQuFgU"
                    class="inline-flex items-center justify-center rounded-lg bg-red-700 px-5 text-center text-base font-medium text-white hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900"
                >
                    <svg
                        class="me-2 h-[32px] w-[32px] text-white"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M8.6 5.2A1 1 0 0 0 7 6v12a1 1 0 0 0 1.6.8l8-6a1 1 0 0 0 0-1.6l-8-6Z"
                            clip-rule="evenodd"
                        />
                    </svg>
                    Play
                </a>
                <button
                    data-modal-target="select-modal{{ $movie->id }}"
                    data-modal-toggle="select-modal{{ $movie->id }}"
                    type="button"
                >
                    <div
                        href="#"
                        class="inline-flex items-center justify-center rounded-lg border border-white px-5 py-3 text-center text-base font-medium text-white hover:bg-gray-100 hover:text-gray-900 focus:ring-4 focus:ring-gray-400 sm:ms-4"
                    >
                        Add to album
                    </div>
                </button>

                <x-addtoalbum>
                    {{ $movie->id }}
                </x-addtoalbum>
            </div>
        </div>
    </section>
</x-layout>
