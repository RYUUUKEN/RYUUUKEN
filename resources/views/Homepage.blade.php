<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stigeit.com</title>
    @vite('resources/css/app.css')

    <!-- link google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

    <!-- link tailwinds element -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>

</head>

<body>
    <!-- navbar start -->
    <header class="bg-transparent fixed top-0 left-0 w-full flex items-center z-10 ">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#">
                        <img class="md:pl-20 py-6 h-24 md:h-28" src="{{asset('img/LOGO.svg')}}" alt="">
                    </a>
                </div>
                <div class="flex items-center px-4">
                    <!-- hamburger button start -->
                    <button id="hamburger" name="hamburger" type="button" class="block absolute -right-10 md:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out
                        origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out
                        origin-bottom-left"></span>
                    </button>
                    <!-- hamburger button end -->

                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] 
                    w-full top-full right-5 md:block md:static md:bg-transparent md:max-w-full md:shadow-none md:rounded-none">
                        <ul class="block md:flex">
                            <li class="group">
                                <a href="#home" class="text-base text-black py-2  mx-8 flex group-hover:text-primary">Home</a>
                            </li>
                            <li class="group">
                                <a href="#about" class="text-base text-black py-2  mx-8 flex group-hover:text-primary">About</a>
                            </li>
                            <li class="group">
                                <a href="#client" class="text-base text-black py-2  mx-8 flex group-hover:text-primary">Our Client</a>
                            </li>
                            <li class="group">
                                <a href="#services" class="text-base text-black py-2  mx-8 flex group-hover:text-primary">Services</a>
                            </li>
                            <li class="group">
                                <a href="#contact" class="text-base text-black py-2  mx-8 flex group-hover:text-primary">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- navbar end -->

    <!-- jumbotron start -->
    <section id="home" class="md:pt-36">
        <div class=" bg-white w-screen h-screen flex flex-col md:flex-row">

            <div class="w-full h-1/2 md:w-1/2 md:h-screen bg-white px-7 py-28 md:px-0 md:py-0">
                <div class="md:flex md:flex-col md:items-center md:mt-48">
                    <h1 id="full" class="font-bold text-4xl">
                        <> Full Cycle <span class="text-yellow-400">Software <span class="block">Development.</span></span>
                    </h1>
                    <h2 class="md:mr-10">
                        <span class="block font-bold text-base">We are professional software engineers</span> with more than 10 years of experience in delivering <span class="md:block">superior product.</span>
                    </h2>
                </div>

                <div class="text-center -ml-64 mt-3 pl-14 md:p-0 md:mt-5">
                    <button class="bg-yellow-400 py-2 px-5 rounded-full">
                        <p class="text-white">Hubungi Kami</p>
                    </button>
                </div>
            </div>

            <div class="h-1/2 mt-16 md:w-1/2 md:h-screen bg-white">
                <img src="{{asset('img/dev.jpg')}}" alt="404 NOT FOUND">
            </div>

        </div>
    </section>
    <!-- jumbotron end -->

    <!-- about start -->
    <section id="about" class="mt-36">
        <div class="bg-white w-screen h-screen md:h-1/2 md:mb-20">
            <h1 id="full" class="text-2xl text-center py-5 underline">
                About Our Company
            </h1>

            <div class="bg-white flex w-full h-full my-1 md:justify-center">
                <div class="bg-slate-50 w-1/2 h-1/2 mx-2 px-0 shadow-lg rounded-md md:flex md:w-[38%] md:h-52">
                    <div class="w-full h-1/2">
                        <img class="rounded-md md:w-72 md:h-52" src="{{asset('img/4.jpg')}}" alt="">
                    </div>
                    <div class="w-full h-1/2 text-center -my-14 md:-my-0">
                        <h1 id="full" class="md:pt-5">Your Partner for Software Innovation</h1>
                        <p class="font-normal text-sm">Stige IT is the partner of choice for many of the world's leading enterprises,
                            SMEs and technology challengers. We help businesses elevate their value through custom
                            software development, product design, QA and consultancy services.</p>
                    </div>
                </div>
                <div class="bg-slate-50 w-1/2 h-1/2 flex flex-col  md:w-[38%] md:h-52 mx-2 px-0 shadow-lg rounded-md">
                    <div class="md:flex">
                        <div class="w-full h-1/2 order-2">
                            <img class="rounded-md md:w-72 md:h-52" src="{{asset('img/6.jpg')}}" alt="">
                        </div>
                        <div class="order-1">
                            <h2 class="px-5 md:py-5">
                                <span id="full" class="block">Experience</span>
                                Our great team of software experts.
                                <span id="full" class="block">Quick Support</span>
                                We'll help you test bold new ideas
                                while sharing your.
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- about end -->
    <!-- pacakage price start -->
    <section id="about">
        <div class="bg-white w-screen h-screen -mt-64 md:-mt-0">
            <h1 id="full" class="text-2xl text-center underline">Select Package</h1>
            <h2 class="text-center">Provides several choices with superior features!</h2>
            <div class="flex flex-col md:flex-row items-center mt-12 md:justify-evenly md:py-20">
                <div class="bg-slate-50 w-72 h-52 md:w-96 md:h-80 rounded-lg shadow-xl">
                    <div class="flex flex-col items-center py-8">
                        <h1 id="full" class="md:text-2xl">
                            Standard
                        </h1>
                        <ul class="pl-5 md:pl-5">
                            <li class="list-square md:text-lg">Web Development</li>
                            <li class="list-square md:text-lg">Mobile Development</li>
                            <li class="list-square md:text-lg">Cyber Security</li>
                        </ul>

                        <div class="relative" data-te-dropdown-ref>
                            <button class="inline-block bg-yellow-400 mt-5 md:mt-12 px-20 pb-2 pt-2.5 text-base font-medium uppercase rounded-full leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out focus:ring-0 active:bg-yellow-600 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] hover:scale-110" type="button" id="dropdownMenuButton1" data-te-dropdown-toggle-ref aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">
                                Detail
                            </button>
                            <div class="absolute m-0 hidden min-w-0 list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block" aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref>
                                <p class="text-center">Keunggulan :
                                    <span class="block">
                                        <li class="list-disc">Paket lebih hemat</li>
                                        <li class="list-disc">Keamanan dengan kualitas yg baik</li>
                                        <li class="list-disc">lebih bervariasi</li>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-50 w-72 h-52 md:w-96 md:h-80 rounded-lg shadow-xl mt-5 md:mt-0">
                    <div class="flex flex-col items-center py-8">
                        <h1 id="full" class="md:text-2xl">
                            Medium
                        </h1>
                        <ul class="pl-5 md:pl-5">
                            <li class="list-square md:text-lg">Web Development</li>
                            <li class="list-square md:text-lg">Mobile Development</li>
                            <li class="list-square md:text-lg">Cyber Security</li>
                        </ul>

                        <div class="relative" data-te-dropdown-ref>
                            <button class="inline-block bg-yellow-400 mt-5 md:mt-12 px-20 pb-2 pt-2.5 text-base font-medium uppercase rounded-full leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out focus:ring-0 active:bg-yellow-600 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] hover:scale-110" type="button" id="dropdownMenuButton1" data-te-dropdown-toggle-ref aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">
                                Detail
                            </button>
                            <div class="absolute m-0 hidden min-w-0 list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block" aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref>
                                <p class="text-center">Keunggulan :
                                    <span class="block">
                                        <li class="list-disc">Paket lebih hemat</li>
                                        <li class="list-disc">Keamanan dengan kualitas yg baik</li>
                                        <li class="list-disc">lebih bervariasi</li>
                                    </span>
                                    <span class="block underline italic font-bold mt-3 md:mt-12"><a href=""> Lihat Selengkapnya>></a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-slate-50 w-72 h-52 md:w-96 md:h-80 rounded-lg shadow-xl mt-5 md:mt-0">
                    <div class="flex flex-col items-center py-8">
                        <h1 id="full" class="md:text-2xl">
                            Premium
                        </h1>
                        <ul class="pl-5 md:pl-5">
                            <li class="list-square md:text-lg">Web Development</li>
                            <li class="list-square md:text-lg">Mobile Development</li>
                            <li class="list-square md:text-lg">Cyber Security</li>
                        </ul>

                        <div class="relative" data-te-dropdown-ref>
                            <button class="inline-block bg-yellow-400 mt-5 md:mt-12 px-20 pb-2 pt-2.5 text-base font-medium uppercase rounded-full leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out focus:ring-0 active:bg-yellow-600 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] hover:scale-110" type="button" id="dropdownMenuButton1" data-te-dropdown-toggle-ref aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">
                                Detail
                            </button>
                            <div class="absolute m-0 hidden min-w-0 list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block" aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref>
                                <p class="text-center">Keunggulan :
                                    <span class="block">
                                        <li class="list-disc">Paket lebih hemat</li>
                                        <li class="list-disc">Keamanan dengan kualitas yg baik</li>
                                        <li class="list-disc">lebih bervariasi</li>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- package harga end -->

    <!-- Our Client -->
    <section id="client">
        <div class="bg-white w-screen h-screen mt-56">
            <div class="text-center md:flex md:flex-col md:items-center md:text-start">
                <h1 id="full" class="text-4xl md:-ml-24">Become A Client</h1>
                <h2 class="font-semibold text-2xl ">Our Client<span class="block font-normal">Driving technology for leading brands</span></h2>
            </div>
            <!--Carousel-->
            <div id="carouselExampleCaptions" class="relative mt-10 md:mt-24" data-te-carousel-init data-te-carousel-slide>
                <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                    <!--First Testimonial / Carousel item-->
                    <div class="relative float-left -mr-[100%] hidden w-full text-center transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
                        <div class="mb-6 mt-12 flex justify-center">
                            <img src="{{asset('img/hanaang.png')}}" class="h-24 w-24 rounded-full shadow-lg dark:shadow-black/30" alt="smaple image" />
                        </div>
                        <p class="text-neutral-500 dark:text-neutral-300">CV. Berkah Bandung<span class="block">(Teh Tarik Hana'ang)</span></p>
                    </div>

                    <!--Second Testimonial / Carousel item-->
                    <div class="relative float-left -mr-[100%] hidden w-full text-center transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item style="backface-visibility: hidden">
                        <div class="mb-6 mt-12 flex justify-center">
                            <img src="{{asset('img/albayyinah-removebg-preview-150x150.png')}}" class="h-24 w-24 rounded-full shadow-lg dark:shadow-black/30" alt="smaple image" />
                        </div>
                        <p class="text-neutral-500 dark:text-neutral-300">Al-Bayyinah</p>
                    </div>

                    <!--Third Testimonial / Carousel item-->
                    <div class="relative float-left -mr-[100%] hidden w-full text-center transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item style="backface-visibility: hidden">
                        <div class="mb-6 mt-12 flex justify-center">
                            <img src="{{asset('img/jildan-150x150.png')}}" class="h-24 w-24 rounded-full shadow-lg dark:shadow-black/30" alt="smaple image" />
                        </div>
                        <p class="text-neutral-500 dark:text-neutral-300">Jildan</p>
                    </div>
                </div>

                <!--Carousel Controls - prev item-->
                <button class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none dark:text-white dark:opacity-50 dark:hover:text-white dark:focus:text-white" type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
                    <span class="inline-block h-8 w-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </span>
                    <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
                </button>
                <!--Carousel Controls - next item-->
                <button class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none dark:text-white dark:opacity-50 dark:hover:text-white dark:focus:text-white" type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
                    <span class="inline-block h-8 w-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                    <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Our Client End -->

    <!-- services -->
    <section id="services">
        <div class="bg-red-500 w-screen h-screen flex flex-col md:flex-row -mt-60 md:-mt-0">
            <div class="bg-white md:w-1/2 h-screen md:order-2">
                <div class="flex flex-col">
                    <img src="{{asset('img/3.svg')}}" alt="" class="mb-10 md:mb-36 md:mx-20">
                    <p class="md:text-5xl text-2xl font-bold text-center md:text-center">Services :
                        <span class="block text-2xl md:text-3xl font-semibold md:font-bold">Web development</span>
                        <span class="block text-2xl md:text-3xl font-semibold text-slate-300 md:font-bold">Mobile Development</span>
                        <span class="block text-2xl md:text-3xl font-semibold text-slate-300 md:font-bold">Cyber Security</span>
                    </p>
                </div>
            </div>

            <div class="bg-white w-full md:w-1/2 h-screen md:order-1">
                <div class="flex flex-col">
                    <div class="order-2 md:order-1 mt-10 md:mt-20">
                        <p class="font-bold text-2xl text-center md:text-5xl md:text-end">
                            Why Choose Us
                        </p>
                        <p class="text-center md:text-end md:text-2xl">Build Custom, modern and
                            scalable <span class="block">web application
                                development.</span> <span class="block">We build platforms
                                that solve</span> <span class="block">and scale real business
                                problems with tech.</span>
                        </p>
                    </div>

                    <div class="order-1 md:order-2 md:mt-24 md:mx-20">
                        <img src="{{asset('img/2.svg')}}" alt="">
                    </div>
                </div>
            </div>
    </section>

    <!--Footer container-->
    <footer id="contact" class="bg-neutral-900 text-center text-white">
        <div class="md:px-6 px-10  pt-6">
                <div class="container p-6 text-white dark:text-neutral-200">
                    <div class="grid gap-4 lg:grid-cols-2">
                        <div class="mb-6 md:mb-0">
                            <h5 class="mb-2 font-medium uppercase">Location</h5>

                            <p class="mb-4">
                            bumi anggrek residence No.1, Jayaraga, 
                            <br>Kec. Tarogong Kidul, 
                            <br>Kabupaten Garut, Jawa Barat 44151
                            <br>Maps : stigephotography
                            </p>
                        </div>

                        <div class="mb-6 md:mb-0">
                            <h5 class="mb-2 font-medium uppercase">Contact</h5>

                            <p class="mb-4">
                            email : admin@stigeit.com<br>
                            Telp : 085295019309
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-6 flex justify-center">
                <a href="https://www.facebook.com/profile.php?id=100080766764889" type="button" class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-yellow-400  focus:outline-none focus:ring-0" data-te-ripple-init data-te-ripple-color="light">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4 " fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                    </svg>
                </a>

                <a href="https://www.instagram.com/stige.it.official/" type="button" class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-yellow-400  focus:outline-none focus:ring-0" data-te-ripple-init data-te-ripple-color="light">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>
                </a>

                <a href="https://www.linkedin.com/in/edi-mulyadi-rosdiman-87baa819a?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Bo0u13IOqQEumgYrFNk7A6w%3D%3D" type="button" class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-yellow-400  focus:outline-none focus:ring-0" data-te-ripple-init data-te-ripple-color="light">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                    </svg>
                </a>

                <a href="#!" type="button" class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-yellow-400  focus:outline-none focus:ring-0" data-te-ripple-init data-te-ripple-color="light">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                    </svg>
                </a>
            </div>
        </div>

        <!--Copyright section-->
        <div class="p-4 text-center" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2023 Copyright:
            <a class="text-whitehite hover:underline duration-200 ease-in-out" href="https://tailwind-elements.com/">stigeit-solution</a>
        </div>
    </footer>
    </footer>
    <!-- custom js -->
    <script src="{{asset('js/script.js')}}"> </script>

    <!-- js tailwind elements -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>

</html>