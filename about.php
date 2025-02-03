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

<!-- BG Image  -->

<div class="relative">
  <img
    class="w-full object-cover brightness-50 filter lg:h-[500px]"
    src="./assets/images/about-us-bg.jpeg"
    alt="Iphone with Macbook image" />

  <div
    class="absolute top-1/2 left-1/2 mx-auto flex w-11/12 max-w-[1200px] -translate-x-1/2 -translate-y-1/2 flex-col text-center text-white lg:ml-5">
    <h1 class="text-4xl font-bold sm:text-5xl">About Us</h1>
    <p class="mx-auto pt-3 text-xs lg:w-3/5 lg:pt-5 lg:text-base">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
      Consequatur aperiam natus, nulla, obcaecati nesciunt, itaque
      adipisci earum ducimus pariatur eaque labore.
    </p>
  </div>
</div>

<!-- /BG IMAGE  -->
</div>

<section class="flex-grow">
  <div class="mt-6 flex flex-col gap-3">
    <img
      class="mx-auto w-[200px]"
      src="./assets/images/company-logo.svg"
      alt="Maybell Logo" />
    <p class="text-center text-sm">Since 1999</p>
  </div>

  <div
    class="mx-auto my-10 flex max-w-[600px] flex-col items-center justify-center px-5">
    <h2 class="w-full text-left text-xl font-bold">Our Mission:</h2>
    <p class="py-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum
      placeat odit, est eum dolorem esse totam iusto necessitatibus
      eligendi illo doloribus vero aperiam atque tempora repudiandae
      molestiae nemo distinctio quisquam!
    </p>
    <div class="grid grid-cols-1 gap-3 lg:grid-cols-3">
      <img
        class="object-cover"
        src="./assets/images/mission-family.jpg"
        alt="Family in living room" />
      <img
        class="object-cover"
        src="./assets/images/mission-interior.jpg"
        alt="Interior" />
      <img
        class="object-cover"
        src="./assets/images/mission-materials.jpg"
        alt="Materials" />
    </div>
    <p class="py-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum
      placeat odit, est eum dolorem esse totam iusto necessitatibus
      eligendi illo doloribus vero aperiam atque tempora repudiandae
      molestiae nemo distinctio quisquam!
    </p>

    <h2 class="mt-3 w-full text-left text-xl font-bold">Our Vision:</h2>
    <p class="py-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum
      placeat odit, est eum dolorem esse totam iusto necessitatibus
      eligendi illo doloribus vero aperiam atque tempora repudiandae
      molestiae nemo distinctio quisquam!
    </p>

    <h2 class="mt-3 w-full text-left text-xl font-bold">Our Values:</h2>
    <p class="py-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum
      placeat odit, est eum dolorem esse totam iusto necessitatibus
      eligendi illo doloribus vero aperiam atque tempora repudiandae
      molestiae nemo distinctio quisquam!
    </p>
    <div class="grid grid-cols-1 gap-3 lg:grid-cols-3">
      <img
        class="object-cover"
        src="./assets/images/mission-family.jpg"
        alt="Family in living room" />
      <img
        class="object-cover"
        src="./assets/images/mission-interior.jpg"
        alt="Interior" />
      <img
        class="object-cover"
        src="./assets/images/mission-materials.jpg"
        alt="Materials" />
    </div>
  </div>
</section>

<?php include 'layouts/footer.php'; ?>