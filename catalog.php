<?php
include 'classes/connection.php';

    $stmt = $pdo->query("SELECT name, image, price, discount_price, discount_percentage, rating, reviews FROM products");
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

include 'layouts/header.php'; ?>

<section
    class="container mx-auto flex-grow max-w-[1200px] border-b py-5 lg:flex lg:flex-row lg:py-10">
    <!-- sidebar  -->
    <section class="hidden w-[300px] flex-shrink-0 px-4 lg:block">
        <div class="flex border-b pb-5">
            <div class="w-full">
                <p class="mb-3 font-medium">CATEGORIES</p>

                <div class="flex w-full justify-between">
                    <div class="flex justify-center items-center">
                        <input type="checkbox" />
                        <p class="ml-4">Bedroom</p>
                    </div>
                    <div>
                        <p class="text-gray-500">(12)</p>
                    </div>
                </div>

                <div class="flex w-full justify-between">
                    <div class="flex justify-center items-center">
                        <input type="checkbox" />
                        <p class="ml-4">Sofa</p>
                    </div>
                    <div>
                        <p class="text-gray-500">(15)</p>
                    </div>
                </div>

                <div class="flex w-full justify-between">
                    <div class="flex justify-center items-center">
                        <input type="checkbox" />
                        <p class="ml-4">Office</p>
                    </div>
                    <div>
                        <p class="text-gray-500">(14)</p>
                    </div>
                </div>

                <div class="flex w-full justify-between">
                    <div class="flex justify-center items-center">
                        <input type="checkbox" />
                        <p class="ml-4">Outdoor</p>
                    </div>
                    <div>
                        <p class="text-gray-500">(124)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex border-b py-5">
            <div class="w-full">
                <p class="mb-3 font-medium">BRANDS</p>

                <div class="flex w-full justify-between">
                    <div class="flex justify-center items-center">
                        <input type="checkbox" />
                        <p class="ml-4">APEX</p>
                    </div>
                    <div>
                        <p class="text-gray-500">(12)</p>
                    </div>
                </div>

                <div class="flex w-full justify-between">
                    <div class="flex justify-center items-center">
                        <input type="checkbox" />
                        <p class="ml-4">Call of SOFA</p>
                    </div>
                    <div>
                        <p class="text-gray-500">(15)</p>
                    </div>
                </div>

                <div class="flex w-full justify-between">
                    <div class="flex justify-center items-center">
                        <input type="checkbox" />
                        <p class="ml-4">Puff B&G</p>
                    </div>
                    <div>
                        <p class="text-gray-500">(14)</p>
                    </div>
                </div>

                <div class="flex w-full justify-between">
                    <div class="flex justify-center items-center">
                        <input type="checkbox" />
                        <p class="ml-4">Fornighte</p>
                    </div>
                    <div>
                        <p class="text-gray-500">(124)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex border-b py-5">
            <div class="w-full">
                <p class="mb-3 font-medium">PRICE</p>

                <div class="flex w-full">
                    <div class="flex justify-between">
                        <input
                            x-mask="99999"
                            min="50"
                            type="number"
                            class="h-8 w-[90px] border pl-2"
                            placeholder="50" />
                        <span class="px-3">-</span>
                        <input
                            x-mask="999999"
                            type="number"
                            max="999999"
                            class="h-8 w-[90px] border pl-2"
                            placeholder="99999" />
                    </div>
                </div>
            </div>
        </div>

        <div class="flex border-b py-5">
            <div class="w-full">
                <p class="mb-3 font-medium">SIZE</p>

                <div class="flex gap-2">
                    <div
                        class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                        XS
                    </div>
                    <div
                        class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                        S
                    </div>
                    <div
                        class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                        M
                    </div>

                    <div
                        class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                        L
                    </div>

                    <div
                        class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                        XL
                    </div>
                </div>
            </div>
        </div>

        <div class="flex py-5">
            <div class="w-full">
                <p class="mb-3 font-medium">COLOR</p>

                <div class="flex gap-2">
                    <div
                        class="h-8 w-8 cursor-pointer border border-white bg-gray-600 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500"></div>
                    <div
                        class="h-8 w-8 cursor-pointer border border-white bg-violet-900 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500"></div>
                    <div
                        class="h-8 w-8 cursor-pointer border border-white bg-red-900 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- /sidebar  -->

    <div>
        <section class="mx-auto grid max-w-[1200px] grid-cols-2 gap-3 px-5 pb-10 lg:grid-cols-3">
            <?php foreach ($products as $product): ?>
                <div class="flex flex-col">
                    <div class="relative flex">
                        <img class="" src="<?= ($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" />
                        <div class="absolute flex h-full w-full items-center justify-center gap-3 opacity-0 duration-150 hover:opacity-100">
                            <a href="product-overview.html" class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </a>
                            <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                                    <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                </svg>
                            </span>
                        </div>
                        <?php if ($product['discount_percentage'] > 0): ?>
                            <div class="absolute right-1 mt-3 flex items-center justify-center bg-amber-400">
                                <p class="px-2 py-2 text-sm">&minus; <?= $product['discount_percentage'] ?>&percnt; OFF</p>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div>
                        <p class="mt-2"><?= htmlspecialchars($product['name']) ?></p>
                        <p class="font-medium text-violet-900">
                            $<?= number_format($product['discount_price'], 2) ?>
                            <?php if ($product['discount_price'] < $product['price']): ?>
                                <span class="text-sm text-gray-500 line-through">$<?= number_format($product['price'], 2) ?></span>
                            <?php endif; ?>
                        </p>

                        <div class="flex items-center">
                            <?php
                            $rating = round($product['rating']);
                            for ($i = 0; $i < 5; $i++):
                                if ($i < $rating): ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                <?php else: ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4 text-gray-200">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                            <?php endif;
                            endfor;
                            ?>
                            <p class="text-sm text-gray-400">(<?= $product['reviews'] ?>)</p>
                        </div>

                        <div>
                            <form action="add_to_cart.php" method="POST">
                                <?php if (isset($product['id'])): ?>
                                    <input type="hidden" name="product_id" value="<?= $product['id']; ?>">
                                <?php endif; ?>
                                <button type="submit" class="my-5 h-10 w-full bg-violet-900 text-white">
                                    Add to Cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>

    </div>
</section>


<?php include 'layouts/footer.php'; ?>