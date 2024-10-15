<div
    id="select-modal{{ $slot }}"
    tabindex="-1"
    aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0"
>
    <div class="relative max-h-full w-full max-w-md p-4">
        <!-- Modal content -->
        <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between rounded-t border-b p-4 dark:border-gray-600 md:p-5">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Select your albums</h3>
                <button
                    type="button"
                    class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="select-modal{{ $slot }}"
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
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <ul class="mb-2 space-y-4">
                    @foreach ($albums as $album)
                        <li>
                            <form action="/albums/movies/{{ $album->id }}/{{ $slot }}" method="POST">
                                @csrf
                                <button
                                    type="submit"
                                    class="inline-flex w-full cursor-pointer items-center justify-between rounded-lg border border-gray-200 bg-white text-gray-900 hover:bg-gray-100 hover:text-gray-900 peer-checked:border-blue-600 peer-checked:text-blue-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:hover:bg-gray-500 dark:hover:text-gray-300 dark:peer-checked:text-blue-500"
                                >
                                    <input
                                        type="radio"
                                        id="{{ $album->id }}"
                                        value="{{ $album->id }}"
                                        class="peer hidden"
                                        required
                                    />
                                    <label
                                        for="{{ $album->id }}"
                                        class="inline-flex w-full cursor-pointer items-center justify-between rounded-lg border border-gray-200 bg-white p-5 text-gray-900 hover:bg-gray-100 hover:text-gray-900 peer-checked:border-blue-600 peer-checked:text-blue-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:hover:bg-gray-500 dark:hover:text-gray-300 dark:peer-checked:text-blue-500"
                                    >
                                        <div class="block">
                                            <div class="text-md w-full font-semibold">
                                                {{ $album->name }}
                                            </div>
                                        </div>
                                        <svg
                                            class="ms-3 h-4 w-4 text-gray-500 dark:text-gray-400 rtl:rotate-180"
                                            aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 14 10"
                                        >
                                            <path
                                                stroke="currentColor"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9"
                                            />
                                        </svg>
                                    </label>
                                </button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
