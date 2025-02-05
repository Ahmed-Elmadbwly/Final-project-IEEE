<?php
include 'classes/connection.php';

// Fetching all about us from the database
$stmt = $pdo->query("SELECT * FROM about_us");
$aboutData = $stmt->fetch(PDO::FETCH_ASSOC);

include 'layouts/header.php'; ?>

<!-- BG Image -->
<div class="relative">
  <img
    class="w-full object-cover brightness-50 filter lg:h-[500px]"
    src="./assets/images/about-us-bg.jpeg"
    alt="Iphone with Macbook image" />

  <div
    class="absolute top-1/2 left-1/2 mx-auto flex w-11/12 max-w-[1200px] -translate-x-1/2 -translate-y-1/2 flex-col text-center text-white lg:ml-5">
    <h1 class="text-4xl font-bold sm:text-5xl">About Us</h1>
    <p class="mx-auto pt-3 text-xs lg:w-3/5 lg:pt-5 lg:text-base">
      <?= htmlspecialchars($aboutData['about_me']); ?>
    </p>
  </div>
</div>
<!-- /BG IMAGE -->

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
      <?= htmlspecialchars($aboutData['our_mission']); ?>
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

    <h2 class="mt-3 w-full text-left text-xl font-bold">Our Vision:</h2>
    <p class="py-3">
      <?= htmlspecialchars($aboutData['our_vision']); ?>
    </p>

    <h2 class="mt-3 w-full text-left text-xl font-bold">Our Values:</h2>
    <p class="py-3">
      <?= htmlspecialchars($aboutData['our_values']); ?>
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