<x-layout>
    <div class="py-14">
        <!-- Main Create modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Create Album
                        </h3>
                        <button type="button"
                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="authentication-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" action="/albums" method="POST">
                            @csrf <!-- Token keamanan Laravel -->
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Nama Album
                                </label>
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="nama album" required />
                            </div>
                            <div>
                                <label for="deskripsi"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Deskripsi Album
                                </label>
                                <textarea name="deskripsi" id="deskripsi" rows="4"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="deskripsi album" required></textarea>
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Create Album
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-neutral-600 py-8 antialiased md:py-16 rounded">
            <div class="mx-auto max-w-screen-xl px-3">
                <div class="mx-auto max-w-5xl">
                    <div class="gap-4 sm:flex sm:items-center sm:justify-between">
                        <h2 class="text-xl font-semibold text-white dark:text-white sm:text-2xl">My Albums</h2>
                        <div class="mt-6 sm:mt-0">
                            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                                class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                                type="button">
                                Create Album
                            </button>
                        </div>
                    </div>

                    @foreach ($albums as $album)
                        <div class="mt-6 flow-root sm:mt-8">
                            <div class="divide-y divide-gray-200 dark:divide-gray-700">
                                <div class="grid md:grid-cols-12 gap-4 md:gap-6 pb-4 md:pb-6">
                                    <dl class="w-1/2 max-w-sm md:col-span-3 order-1 md:order-1">
                                        <img class="rounded" src="https://placehold.co/300x200" alt="" />
                                    </dl>
                                    <dl class="md:col-span-3 order-3 md:order-1">
                                        <dd class="text-base font-semibold text-white">
                                            <a href="#" class="hover:underline">{{ $album->name }}</a>
                                        </dd>
                                    </dl>

                                    <dl class="md:col-span-4 order-4 md:order-2">
                                        <dd class="text-white">{{ $album->deskripsi }}</dd>
                                    </dl>

                                    <div class="content-center order-1 md:order-3 flex items-center justify-between">
                                        <button id="actionsMenuDropdown1{{ $album->id }}"
                                            data-dropdown-toggle="dropdownOrder1{{ $album->id }}" type="button"
                                            class="inline-flex h-7 w-7 items-center justify-center rounded-lg text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <span class="sr-only">Actions</span>
                                            <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-width="4"
                                                    d="M6 12h.01m6 0h.01m5.99 0h.01"></path>
                                            </svg>
                                        </button>

                                        <div id="dropdownOrder1{{ $album->id }}"
                                            class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700"
                                            data-popper-placement="bottom">
                                            <ul class="p-2 text-left text-sm font-medium text-gray-200 dark:text-gray-400"
                                                aria-labelledby="actionsMenuDropdown1">
                                                <li>
                                                    <button type="button"
                                                        data-modal-target="editAlbumModal{{ $album->id }}"
                                                        data-modal-toggle="editAlbumModal{{ $album->id }}"
                                                        class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                                        <svg class="me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" fill="none"
                                                            viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                                        </svg>
                                                        <span>Edit Album</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button"
                                                        data-modal-target="deleteAlbumModal{{ $album->id }}"
                                                        data-modal-toggle="deleteAlbumModal{{ $album->id }}"
                                                        class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-red-500">
                                                        <svg class="me-1.5 h-4 w-4" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="none" viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z">
                                                            </path>
                                                        </svg>
                                                        Delete Album
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Modal -->
                            <div id="editAlbumModal{{ $album->id }}" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Edit Album: {{ $album->name }}
                                            </h3>
                                            <button type="button"
                                                class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="editAlbumModal{{ $album->id }}">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>

                                        <div class="p-4 md:p-5">
                                            <form class="space-y-4" action="/albums/{{ $album->id }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div>
                                                    <label for="editName{{ $album->id }}"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                        Nama Album
                                                    </label>
                                                    <input type="text" name="name"
                                                        id="editName{{ $album->id }}" value="{{ $album->name }}"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="nama album" required />
                                                </div>
                                                <div>
                                                    <label for="editDeskripsi{{ $album->id }}"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                        Deskripsi Album
                                                    </label>
                                                    <textarea name="deskripsi" id="editDeskripsi{{ $album->id }}" rows="4"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        placeholder="deskripsi album" required>{{ $album->deskripsi }}</textarea>
                                                </div>
                                                <button type="submit"
                                                    class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                    Update Album
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Delete Album -->
                            <div id="deleteAlbumModal{{ $album->id }}" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                    <div
                                        class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                        <button type="button"
                                            class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="deleteModal{{ $album->id }}">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to
                                            delete this album?</p>
                                        <div class="flex justify-center items-center space-x-4">
                                            <button data-modal-toggle="deleteModal{{ $album->id }}" type="button"
                                                class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                No, cancel
                                            </button>
                                            <form action="{{ route('albums.destroy', $album->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                    Yes, I'm sure
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    </div>
</x-layout>
