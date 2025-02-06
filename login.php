<?php

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
</div>

<!-- Login card  -->
<section class="mx-auto flex-grow w-full mt-10 mb-10 max-w-[1200px] px-5">
    <div class="container mx-auto border px-5 py-5 shadow-sm md:w-1/2">
        <div>
            <p class="text-4xl font-bold">LOGIN</p>
            <p>Welcome back, customer!</p>
        </div>
        

        <!-- success and error for login -->
        <?php if (isset($_SESSION['error'])): ?>
            <p class="text-red-500"><?php echo $_SESSION['error'];
                                    unset($_SESSION['error']); ?></p>
        <?php endif; ?>

        <?php if (isset($_SESSION['success'])): ?>
            <p class="text-green-500"><?php echo $_SESSION['success'];
                                        unset($_SESSION['success']); ?></p>
        <?php endif; ?>

        <form action="auth/config_login.php" method="POST" class="mt-6 flex flex-col">
            <label for="email">Email Address</label>
            <input
                id="email"
                name="email"
                class="mb-3 mt-3 border px-4 py-2"
                type="email"
                placeholder="youremail@domain.com"
                required />

            <label for="password">Password</label>
            <input
                id="password"
                name="password"
                class="mt-3 border px-4 py-2"
                type="password"
                placeholder="•••••••"
                required />

            <button class="my-5 w-full bg-violet-900 py-2 text-white" name="submit" type="submit">
                LOGIN
            </button>
        </form>


        <div class="mt-4 flex justify-between">
            <form class="flex gap-2">
                <input type="checkbox" />
                <label for="checkbox">Remember me</label>
            </form>
            <a href="#" class="text-violet-900">Forgot password</a>
        </div>



        <p class="text-center text-gray-500">OR LOGIN WITH</p>

        <div class="my-5 flex gap-2">
            <button class="w-1/2 bg-blue-800 py-2 text-white">FACEBOOK</button>
            <button class="w-1/2 bg-orange-500 py-2 text-white">GOOGLE</button>
        </div>

        <p class="text-center">
            Don`t have account?
            <a href="register.php" class="text-violet-900">Register now</a>
        </p>
    </div>
</section>
<!-- /Login Card  -->



<?php
include 'layouts/footer.php'; ?>