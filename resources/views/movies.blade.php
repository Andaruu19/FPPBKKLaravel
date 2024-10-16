<x-layout>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <div class="video relative w-screen">
        <a href="https://www.youtube.com/watch?v=bpHhnDQuFgU" target="_blank">
            <img
                class="absolute top-36 z-10 h-auto w-[800px] p-3 px-12 py-64"
                src="/images/qothomepage.png"
                style="pointer-events: auto"
            />
        </a>
        <video src="/videos/bumperqot.mp4" class="z-0 h-full w-full" muted autoplay loop></video>

        <section class="absolute bottom-0 left-0 w-full p-0 dark:bg-gray-900" style="height: 25%; pointer-events: auto">
            @foreach ($genres as $genre)
                <div class="relative w-full px-0 py-8 lg:px-0 lg:py-8">
                    <h2 class="mb-4 text-3xl font-bold text-white">{{ $genre->name }}</h2>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($movies->where('genre_id', $genre->id) as $movie)
                                <div class="swiper-slide" style="width: auto; margin-right: 10px">
                                    <div
                                        class="w-full max-w-[380px] rounded-lg border border-black bg-neutral-800 shadow dark:border-gray-700 dark:bg-gray-800"
                                    >
                                        <a href="/movies/{{ $movie->slug }}">
                                            <img
                                                class="w-full rounded-t-lg"
                                                src="{{ URL($movie->imagepath) }}"
                                                alt=""
                                            />
                                        </a>
                                        <div class="flex flex-col p-4">
                                            <div class="flex items-center justify-between text-gray-500">
                                                <a href="/movies/{{ $movie->slug }}">
                                                    <h5
                                                        class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white"
                                                    >
                                                        {{ Str::limit($movie->title, 20) }}
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
                                            <div class="flex justify-end">
                                                <!-- Modal toggle button -->
                                                <button
                                                    data-modal-target="select-modal{{ $movie->id }}"
                                                    data-modal-toggle="select-modal{{ $movie->id }}"
                                                    class="open-modal-btn"
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
                                                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z"
                                                            clip-rule="evenodd"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Navigation buttons -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            @endforeach

            @foreach ($movies as $movie)
                <x-addtoalbum>
                    {{ $movie->id }}
                </x-addtoalbum>
            @endforeach
        </section>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.mySwiper', {
            slidesPerView: 'auto',
            spaceBetween: 10,
            freeMode: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

    <style>
        .swiper-button-next,
        .swiper-button-prev {
            color: white;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
        }
        .swiper-button-next {
            right: 0;
        }
        .swiper-button-prev {
            left: 0;
        }
    </style>
</x-layout>
