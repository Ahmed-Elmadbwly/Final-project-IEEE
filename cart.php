<?php
include 'classes/connection.php';
include 'layouts/header.php'; ?>
        <!-- Menu  -->
        <section
            x-show="desktopMenuOpen"
            @click.outside="desktopMenuOpen = false"
            class="absolute left-0 right-0 z-10 w-full border-b border-r border-l bg-white"
            style="display: none">
            <div class="mx-auto flex max-w-[1200px] py-10">
                <div class="w-[300px] border-r">
                    <ul class="px-5">
                        <li
                            class="active:blue-900 flex items-center gap-2 bg-amber-400 py-2 px-3 active:bg-amber-400">
                            <img
                                width="15px"
                                height="15px"
                                src="./assets/images/bed.svg"
                                alt="Bedroom icon" />
                            Bedroom
                            <span class="ml-auto"><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-4 w-4">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </li>

                        <li
                            class="active:blue-900 flex items-center gap-2 py-2 px-3 hover:bg-neutral-100 active:bg-amber-400">
                            <img
                                width="15px"
                                height="15px"
                                src="./assets/images/sleep.svg"
                                alt="bedroom icon" />
                            Matrass
                            <span class="ml-auto"><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-4 w-4">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </li>

                        <li
                            class="active:blue-900 flex items-center gap-2 py-2 px-3 hover:bg-neutral-100 active:bg-amber-400">
                            <img
                                width="15px"
                                height="15px"
                                src="./assets/images/outdoor.svg"
                                alt="bedroom icon" />
                            Outdoor
                            <span class="ml-auto"><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-4 w-4">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </li>

                        <li
                            class="active:blue-900 flex items-center gap-2 py-2 px-3 hover:bg-neutral-100 active:bg-amber-400">
                            <img
                                width="15px"
                                height="15px"
                                src="./assets/images/sofa.svg"
                                alt="bedroom icon" />
                            Sofa
                            <span class="ml-auto"><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-4 w-4">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </li>

                        <li
                            class="active:blue-900 flex items-center gap-2 py-2 px-3 hover:bg-neutral-100 active:bg-amber-400">
                            <img
                                width="15px"
                                height="15px"
                                src="./assets/images/kitchen.svg"
                                alt="bedroom icon" />
                            Kitchen
                            <span class="ml-auto"><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-4 w-4">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </li>

                        <li
                            class="active:blue-900 flex items-center gap-2 py-2 px-3 hover:bg-neutral-100 active:bg-amber-400">
                            <img
                                width="15px"
                                height="15px"
                                src="./assets/images/food.svg"
                                alt="Food icon" />
                            Living room
                            <span class="ml-auto"><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-4 w-4">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </li>
                    </ul>
                </div>

                <div class="flex w-full justify-between">
                    <div class="flex gap-6">
                        <div class="mx-5">
                            <p class="font-medium text-gray-500">BEDS</p>
                            <ul class="text-sm leading-8">
                                <li><a href="product-overview.html">Italian bed</a></li>
                                <li><a href="product-overview.html">Queen-size bed</a></li>
                                <li>
                                    <a href="product-overview.html">Wooden craft bed</a>
                                </li>
                                <li><a href="product-overview.html">King-size bed</a></li>
                            </ul>
                        </div>

                        <div class="mx-5">
                            <p class="font-medium text-gray-500">LAMPS</p>
                            <ul class="text-sm leading-8">
                                <li>
                                    <a href="product-overview.html">Italian Purple Lamp</a>
                                </li>
                                <li><a href="product-overview.html">APEX Lamp</a></li>
                                <li><a href="product-overview.html">PIXAR lamp</a></li>
                                <li>
                                    <a href="product-overview.html">Ambient Nightlamp</a>
                                </li>
                            </ul>
                        </div>

                        <div class="mx-5">
                            <p class="font-medium text-gray-500">BEDSIDE TABLES</p>
                            <ul class="text-sm leading-8">
                                <li><a href="product-overview.html">Purple Table</a></li>
                                <li><a href="product-overview.html">Easy Bedside</a></li>
                                <li><a href="product-overview.html">Soft Table</a></li>
                                <li><a href="product-overview.html">Craft Table</a></li>
                            </ul>
                        </div>

                        <div class="mx-5">
                            <p class="font-medium text-gray-500">SPECIAL</p>
                            <ul class="text-sm leading-8">
                                <li><a href="product-overview.html">Humidifier</a></li>
                                <li><a href="product-overview.html">Bed Cleaner</a></li>
                                <li><a href="product-overview.html">Vacuum Cleaner</a></li>
                                <li><a href="product-overview.html">Pillow</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- /Menu  -->

        <!-- breadcrumbs  -->

        <nav class="mx-auto w-full mt-4 max-w-[1200px] px-5">
            <ul class="flex items-center">
                <li class="cursor-pointer">
                    <a href="index.html">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="h-5 w-5">
                            <path
                                d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                            <path
                                d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <span class="mx-2 text-gray-500">&gt;</span>
                </li>

                <li class="text-gray-500">Cart</li>
            </ul>
        </nav>
        <!-- /breadcrumbs  -->
        </div>

        <section
            class="container mx-auto flex-grow max-w-[1200px] border-b py-5 lg:flex lg:flex-row lg:py-10">
            <!-- Mobile cart table  -->
            <section
                class="container mx-auto my-3 flex w-full flex-col gap-3 px-4 md:hidden">
                <!-- 1 -->

                <div class="flex w-full border px-4 py-4">
                    <img
                        class="self-start object-contain"
                        width="90px"
                        src="./assets/images/bedroom.png"
                        alt="bedroom image" />
                    <div class="ml-3 flex w-full flex-col justify-center">
                        <div class="flex items-center justify-between">
                            <p class="text-xl font-bold">ITALIAN BED</p>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                class="h-5 w-5">
                                <path
                                    d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                            </svg>
                        </div>
                        <p class="text-sm text-gray-400">Size: XL</p>
                        <p class="py-3 text-xl font-bold text-violet-900">$320</p>
                        <div class="mt-2 flex w-full items-center justify-between">
                            <div class="flex items-center justify-center">
                                <button
                                    class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                                    &minus;
                                </button>
                                <div
                                    class="flex h-8 w-8 cursor-text items-center justify-center border-t border-b active:ring-gray-500">
                                    1
                                </div>
                                <button
                                    class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                                    &#43;
                                </button>
                            </div>

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                class="m-0 h-5 w-5 cursor-pointer">
                                <path
                                    fill-rule="evenodd"
                                    d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- 2 -->

                <div class="flex w-full border px-4 py-4">
                    <img
                        class="self-start object-contain"
                        width="90px"
                        src="./assets/images/product-chair.png"
                        alt="Chair image" />
                    <div class="ml-3 flex w-full flex-col justify-center">
                        <div class="flex items-center justify-between">
                            <p class="text-xl font-bold">GUYER CHAIR</p>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                class="h-5 w-5">
                                <path
                                    d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                            </svg>
                        </div>
                        <p class="text-sm text-gray-400">Size: XL</p>
                        <p class="py-3 text-xl font-bold text-violet-900">$320</p>
                        <div class="mt-2 flex w-full items-center justify-between">
                            <div class="flex items-center justify-center">
                                <button
                                    class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                                    &minus;
                                </button>
                                <div
                                    class="flex h-8 w-8 cursor-text items-center justify-center border-t border-b active:ring-gray-500">
                                    1
                                </div>
                                <button
                                    class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                                    &#43;
                                </button>
                            </div>

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                class="m-0 h-5 w-5 cursor-pointer">
                                <path
                                    fill-rule="evenodd"
                                    d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- 3 -->

                <div class="flex w-full border px-4 py-4">
                    <img
                        class="self-start object-contain"
                        width="90px"
                        src="./assets/images/outdoors.png"
                        alt="Outdoor chair image" />
                    <div class="ml-3 flex w-full flex-col justify-center">
                        <div class="flex items-center justify-between">
                            <p class="text-xl font-bold">OUTDOOR CHAIR</p>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                class="h-5 w-5">
                                <path
                                    d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                            </svg>
                        </div>
                        <p class="text-sm text-gray-400">Size: XL</p>
                        <p class="py-3 text-xl font-bold text-violet-900">$320</p>
                        <div class="mt-2 flex w-full items-center justify-between">
                            <div class="flex items-center justify-center">
                                <button
                                    class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                                    &minus;
                                </button>
                                <div
                                    class="flex h-8 w-8 cursor-text items-center justify-center border-t border-b active:ring-gray-500">
                                    1
                                </div>
                                <button
                                    class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                                    &#43;
                                </button>
                            </div>

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                class="m-0 h-5 w-5 cursor-pointer">
                                <path
                                    fill-rule="evenodd"
                                    d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- 4 -->

                <div class="flex w-full border px-4 py-4">
                    <img
                        class="self-start object-contain"
                        width="90px"
                        src="./assets/images/matrass.png"
                        alt="Matrass image" />
                    <div class="ml-3 flex w-full flex-col justify-center">
                        <div class="flex items-center justify-between">
                            <p class="text-xl font-bold">MATRASS COMFORT &plus;</p>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                class="h-5 w-5">
                                <path
                                    d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                            </svg>
                        </div>
                        <p class="text-sm text-gray-400">Size: XL</p>
                        <p class="py-3 text-xl font-bold text-violet-900">$320</p>
                        <div class="mt-2 flex w-full items-center justify-between">
                            <div class="flex items-center justify-center">
                                <button
                                    class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                                    &minus;
                                </button>
                                <div
                                    class="flex h-8 w-8 cursor-text items-center justify-center border-t border-b active:ring-gray-500">
                                    1
                                </div>
                                <button
                                    class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                                    &#43;
                                </button>
                            </div>

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                class="m-0 h-5 w-5 cursor-pointer">
                                <path
                                    fill-rule="evenodd"
                                    d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Mobile cart table  -->

            <!-- Desktop cart table  -->
            <section
                class="hidden h-[600px] w-full max-w-[1200px] grid-cols-1 gap-3 px-5 pb-10 md:grid">
                <table class="table-fixed">
                    <thead class="h-16 bg-neutral-100">
                        <tr>
                            <th>ITEM</th>
                            <th>PRICE</th>
                            <th>QUANTITY</th>
                            <th>TOTAL</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- 1 -->

                        <tr class="h-[100px] border-b">
                            <td class="align-middle">
                                <div class="flex">
                                    <img
                                        class="w-[90px]"
                                        src="./assets/images/bedroom.png"
                                        alt="bedroom image" />
                                    <div class="ml-3 flex flex-col justify-center">
                                        <p class="text-xl font-bold">ITALIAN BED</p>
                                        <p class="text-sm text-gray-400">Size: XL</p>
                                    </div>
                                </div>
                            </td>
                            <td class="mx-auto text-center">&#36;320</td>
                            <td class="align-middle">
                                <div class="flex items-center justify-center">
                                    <button
                                        class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                                        &minus;
                                    </button>
                                    <div
                                        class="flex h-8 w-8 cursor-text items-center justify-center border-t border-b active:ring-gray-500">
                                        1
                                    </div>
                                    <button
                                        class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                                        &#43;
                                    </button>
                                </div>
                            </td>
                            <td class="mx-auto text-center">&#36;320</td>
                            <td class="align-middle">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    class="m-0 h-5 w-5 cursor-pointer">
                                    <path
                                        fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </td>
                        </tr>

                        <!-- 2 -->

                        <tr class="h-[100px] border-b">
                            <td class="align-middle">
                                <div class="flex">
                                    <img
                                        class="w-[90px]"
                                        src="./assets/images/product-chair.png"
                                        alt="Chair Image" />
                                    <div class="ml-3 flex flex-col justify-center">
                                        <p class="text-xl font-bold">GUYER CHAIR</p>
                                        <p class="text-sm text-gray-400">Size: XL</p>
                                    </div>
                                </div>
                            </td>
                            <td class="mx-auto text-center">&#36;320</td>
                            <td class="align-middle">
                                <div class="flex items-center justify-center">
                                    <button
                                        class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                                        &minus;
                                    </button>
                                    <div
                                        class="flex h-8 w-8 cursor-text items-center justify-center border-t border-b active:ring-gray-500">
                                        1
                                    </div>
                                    <button
                                        class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                                        &#43;
                                    </button>
                                </div>
                            </td>
                            <td class="mx-auto text-center">&#36;320</td>
                            <td class="align-middle">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    class="m-0 h-5 w-5 cursor-pointer">
                                    <path
                                        fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </td>
                        </tr>

                        <!-- 3 -->

                        <tr class="h-[100px] border-b">
                            <td class="align-middle">
                                <div class="flex">
                                    <img
                                        class="w-[90px]"
                                        src="./assets/images/outdoors.png"
                                        alt="Outdoor furniture" />
                                    <div class="ml-3 flex flex-col justify-center">
                                        <p class="text-xl font-bold">OUTDOOR CHAIR</p>
                                        <p class="text-sm text-gray-400">Size: XL</p>
                                    </div>
                                </div>
                            </td>
                            <td class="mx-auto text-center">&#36;320</td>
                            <td class="align-middle">
                                <div class="flex items-center justify-center">
                                    <button
                                        class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                                        &minus;
                                    </button>
                                    <div
                                        class="flex h-8 w-8 cursor-text items-center justify-center border-t border-b active:ring-gray-500">
                                        1
                                    </div>
                                    <button
                                        class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                                        &#43;
                                    </button>
                                </div>
                            </td>
                            <td class="mx-auto text-center">&#36;320</td>
                            <td class="align-middle">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    class="m-0 h-5 w-5 cursor-pointer">
                                    <path
                                        fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </td>
                        </tr>

                        <!-- 4 -->

                        <tr class="h-[100px]">
                            <td class="align-middle">
                                <div class="flex">
                                    <img
                                        class="w-[90px]"
                                        src="./assets/images/matrass.png"
                                        alt="Matrass Image" />
                                    <div class="ml-3 flex flex-col justify-center">
                                        <p class="text-xl font-bold">MATRASS COMFORT &plus;</p>
                                        <p class="text-sm text-gray-400">Size: XL</p>
                                    </div>
                                </div>
                            </td>
                            <td class="mx-auto text-center">&#36;320</td>
                            <td class="align-middle">
                                <div class="flex items-center justify-center">
                                    <button
                                        class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                                        &minus;
                                    </button>
                                    <div
                                        class="flex h-8 w-8 cursor-text items-center justify-center border-t border-b active:ring-gray-500">
                                        1
                                    </div>
                                    <button
                                        class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                                        &#43;
                                    </button>
                                </div>
                            </td>
                            <td class="mx-auto text-center">&#36;320</td>
                            <td class="align-middle">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    class="m-0 h-5 w-5 cursor-pointer">
                                    <path
                                        fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <!-- /Desktop cart table  -->

            <!-- Summary  -->

            <section class="mx-auto w-full px-4 md:max-w-[400px]">
                <div class="">
                    <div class="border py-5 px-4 shadow-md">
                        <p class="font-bold">ORDER SUMMARY</p>

                        <div class="flex justify-between border-b py-5">
                            <p>Subtotal</p>
                            <p>$1280</p>
                        </div>

                        <div class="flex justify-between border-b py-5">
                            <p>Shipping</p>
                            <p>Free</p>
                        </div>

                        <div class="flex justify-between py-5">
                            <p>Total</p>
                            <p>$1280</p>
                        </div>

                        <a href="checkout-address.html">
                            <button class="w-full bg-violet-900 px-5 py-2 text-white">
                                Proceed to checkout
                            </button>
                        </a>
                    </div>
                </div>
            </section>
        </section>

        <!-- /Summary -->

        <?php include 'layouts/footer.php'; ?>