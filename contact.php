<?php
include 'connection_mysqli.php';
include 'layouts/header.php'; 
$name=$email=$message=$special="";
$nameErr=$emailErr=$catogaryErr=$messageErr=$checkboxErr="";
$catogary="";
    if(isset($_POST["submit"])){
        if(empty($_POST["name"])){
            $nameErr = "Name is required";
        }
        else{
            $name=test_input($_POST["name"]);
                if(!preg_match("/^[a-zA-Z-0-9-' ]*$/",$name)){
                    $nameErr = "Only letters and white space allowed";
                }
        }

            if(empty($_POST["email"])){
                $emailErr = "Email is required";
            }
            else{
                $email=test_input($_POST["email"]);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email format";
                    }
            }

            if($_POST["pets"]==""){
                $catogaryErr="Please choose one of them";
            }
            else{
                $catogary=$_POST["pets"];
            }

            if($_POST["message"]==""){
                $messageErr="This field is required!";
            }
            else{
                $message=$_POST["message"];
            }

            if(empty($_POST["checkbox"])){
                $checkboxErr="You should read and agree with terms & conditions";
            }

            if($nameErr==""&&$emailErr==""&&$catogaryErr==""&&$messageErr==""&&$checkboxErr==""){
            $sql="INSERT INTO contact (name,email,catogary,comment) VALUES ('$name','$email','$catogary','$message')";
            $result= mysqli_query($conn,$sql);
                if ($result) {
                    $special= "Your Message created successfully";
                    $name=$email=$message="";
                    $nameErr=$emailErr=$catogaryErr=$messageErr="";
                    $catogary="Please choose catogary";
                } 

                else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
        }
                    
        }

    function test_input($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }
    

?>


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
        src="./assets/images/contact-bg.jpeg"
        alt="Iphone with Macbook image" />

    <div
        class="absolute top-1/2 left-1/2 mx-auto flex w-11/12 max-w-[1200px] -translate-x-1/2 -translate-y-1/2 flex-col text-center text-white lg:ml-5">
        <h1 class="text-4xl font-bold sm:text-5xl">Contact us</h1>
        <p class="mx-auto pt-3 text-xs lg:w-3/5 lg:pt-5 lg:text-base">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Consequatur aperiam natus, nulla, obcaecati nesciunt, itaque
            adipisci earum ducimus pariatur eaque labore.
        </p>
    </div>
</div>

<!-- /BG IMAGE  -->
</div>

<!-- Contact section  -->

<section class="w-full flex-grow">
    <section
        class="mx-auto w-full my-6 grid max-w-[1200px] grid-cols-1 gap-3 px-5 pb-10 lg:grid-cols-3 lg:pt-10">
        <div>
            <div class="border py-5 shadow-md">
                <div class="flex justify-between px-4 pb-5">
                    <p class="text-xl font-bold">Delivery</p>
                </div>

                <div class="flex flex-col px-4">
                    <a class="flex items-center" href="#"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="mr-3 h-4 w-4 text-violet-900">
                            <path
                                d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                            <path
                                d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                        </svg>
                        maybell@delivery.org</a>
                    <a class="flex items-center" href="#"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="mr-3 h-4 w-4 text-violet-900">
                            <path
                                fill-rule="evenodd"
                                d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"
                                clip-rule="evenodd" />
                        </svg>
                        +8(911)339-88-88</a>
                    <a class="flex items-center" href="#"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="mr-3 h-4 w-4 text-violet-900">
                            <path
                                fill-rule="evenodd"
                                d="M3.43 2.524A41.29 41.29 0 0110 2c2.236 0 4.43.18 6.57.524 1.437.231 2.43 1.49 2.43 2.902v5.148c0 1.413-.993 2.67-2.43 2.902a41.202 41.202 0 01-5.183.501.78.78 0 00-.528.224l-3.579 3.58A.75.75 0 016 17.25v-3.443a41.033 41.033 0 01-2.57-.33C1.993 13.244 1 11.986 1 10.573V5.426c0-1.413.993-2.67 2.43-2.902z"
                                clip-rule="evenodd" />
                        </svg>
                        +8(911)339-88-88</a>
                    <a class="flex items-center" href="#"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="mr-3 h-4 w-4 text-violet-900">
                            <path
                                d="M3.105 2.289a.75.75 0 00-.826.95l1.414 4.925A1.5 1.5 0 005.135 9.25h6.115a.75.75 0 010 1.5H5.135a1.5 1.5 0 00-1.442 1.086l-1.414 4.926a.75.75 0 00.826.95 28.896 28.896 0 0015.293-7.154.75.75 0 000-1.115A28.897 28.897 0 003.105 2.289z" />
                        </svg>
                        @maybell</a>
                </div>
            </div>
        </div>

        <div>
            <div class="border py-5 shadow-md">
                <div class="flex justify-between px-4 pb-5">
                    <p class="text-xl font-bold">Support</p>
                </div>

                <div class="flex flex-col px-4">
                    <a class="flex items-center" href="#"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="mr-3 h-4 w-4 text-violet-900">
                            <path
                                d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                            <path
                                d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                        </svg>
                        maybell@delivery.org</a>
                    <a class="flex items-center" href="#"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="mr-3 h-4 w-4 text-violet-900">
                            <path
                                fill-rule="evenodd"
                                d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"
                                clip-rule="evenodd" />
                        </svg>
                        +8(911)339-88-88</a>
                    <a class="flex items-center" href="#"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="mr-3 h-4 w-4 text-violet-900">
                            <path
                                fill-rule="evenodd"
                                d="M3.43 2.524A41.29 41.29 0 0110 2c2.236 0 4.43.18 6.57.524 1.437.231 2.43 1.49 2.43 2.902v5.148c0 1.413-.993 2.67-2.43 2.902a41.202 41.202 0 01-5.183.501.78.78 0 00-.528.224l-3.579 3.58A.75.75 0 016 17.25v-3.443a41.033 41.033 0 01-2.57-.33C1.993 13.244 1 11.986 1 10.573V5.426c0-1.413.993-2.67 2.43-2.902z"
                                clip-rule="evenodd" />
                        </svg>
                        +8(911)339-88-88</a>
                    <a class="flex items-center" href="#"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="mr-3 h-4 w-4 text-violet-900">
                            <path
                                d="M3.105 2.289a.75.75 0 00-.826.95l1.414 4.925A1.5 1.5 0 005.135 9.25h6.115a.75.75 0 010 1.5H5.135a1.5 1.5 0 00-1.442 1.086l-1.414 4.926a.75.75 0 00.826.95 28.896 28.896 0 0015.293-7.154.75.75 0 000-1.115A28.897 28.897 0 003.105 2.289z" />
                        </svg>
                        @maybell</a>
                </div>
            </div>
        </div>

        <div>
            <div class="border py-5 shadow-md">
                <div class="flex justify-between px-4 pb-5">
                    <p class="text-xl font-bold">Careers</p>
                </div>

                <div class="flex flex-col px-4">
                    <a class="flex items-center" href="#"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="mr-3 h-4 w-4 text-violet-900">
                            <path
                                d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                            <path
                                d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                        </svg>
                        maybell@delivery.org</a>
                    <a class="flex items-center" href="#"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="mr-3 h-4 w-4 text-violet-900">
                            <path
                                fill-rule="evenodd"
                                d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"
                                clip-rule="evenodd" />
                        </svg>
                        +8(911)339-88-88</a>
                    <a class="flex items-center" href="#"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="mr-3 h-4 w-4 text-violet-900">
                            <path
                                fill-rule="evenodd"
                                d="M3.43 2.524A41.29 41.29 0 0110 2c2.236 0 4.43.18 6.57.524 1.437.231 2.43 1.49 2.43 2.902v5.148c0 1.413-.993 2.67-2.43 2.902a41.202 41.202 0 01-5.183.501.78.78 0 00-.528.224l-3.579 3.58A.75.75 0 016 17.25v-3.443a41.033 41.033 0 01-2.57-.33C1.993 13.244 1 11.986 1 10.573V5.426c0-1.413.993-2.67 2.43-2.902z"
                                clip-rule="evenodd" />
                        </svg>
                        +8(911)339-88-88</a>
                    <a class="flex items-center" href="#"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="mr-3 h-4 w-4 text-violet-900">
                            <path
                                d="M3.105 2.289a.75.75 0 00-.826.95l1.414 4.925A1.5 1.5 0 005.135 9.25h6.115a.75.75 0 010 1.5H5.135a1.5 1.5 0 00-1.442 1.086l-1.414 4.926a.75.75 0 00.826.95 28.896 28.896 0 0015.293-7.154.75.75 0 000-1.115A28.897 28.897 0 003.105 2.289z" />
                        </svg>
                        @maybell</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact section  -->

    <section class="mx-auto my-5 text-center">
        <h2 class="text-3xl font-bold">Have another question?</h2>
        <p>Complete the form below</p>
    </section>

    <!-- Form  -->

    <form class="mx-auto my-5 max-w-[600px] px-5 pb-10" action="contact.php" method="POST">
        <div class="mx-auto">
            <div class="flex flex-col w-full">
                <input
                    class=" border px-4 py-2 mb-2"
                    type="text"
                    name="name"
                    value="<?php echo $name ?>"
                    placeholder="Full Name" /> 
             <span class="text-red-500 block mb-2"><?php echo $nameErr ?></span>
                <input
                    class=" border px-4 py-2 mb-2"
                    type="email"
                    name="email"
                    value="<?php echo $email ?>"
                    placeholder="E-mail" /> 
             <span class="text-red-500 block mb-2"><?php echo $emailErr ?></span>
            </div>
        </div>

        <select
            class="mb-3 w-full border px-4 py-2"
            name="pets"
            id="pet-select"
            >
            <option value="">Please choose catogary</option>
            <option value="delivery">Delivery</option>
            <option value="support">Support</option>
            <option value="profile">Profile</option>
            <option value="careers">Careers</option>
            <option value="another">Another category</option>
        </select>
         <span class=" text-red-500 block mb-2 "><?php echo $catogaryErr ?></span>
        <textarea
            class="w-full border px-4 py-2"
            placeholder="Write a commentary..."
            name="message"
            id="message"
            ><?php echo $message ?></textarea>
         <span class=" text-red-500 block mb-2 "><?php echo $messageErr ?></span>
        <div
            class="lg:items:center container mt-4 flex flex-col justify-between lg:flex-row">
            <div class="flex flex-col items-center">
                <div>
                    <input class="mr-3"  type="checkbox" id="checkbox" name="checkbox" />
                    <label for="checkbox">
                        I have read and agree with
                        <a href="#" class="text-violet-900">terms &amp; conditions</a>
                    </label>
                </div>
                <div>
                    <span class=" text-red-500 block my-2 "><?php echo $checkboxErr ?></span>
                </div>
            </div>
            <button class="my-3 bg-amber-400 px-4 py-2 lg:my-0" type="submit" name="submit">
                Send Message
            </button>
        </div>
        <span class=" bg-black text-green-500 block mt-5  text-center "><?php echo $special ?></span>
    </form>

    <!-- /Form  -->
</section>

<?php include 'layouts/footer.php'; ?>