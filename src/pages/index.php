<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/styles/output.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link href="../assets/styles/style.css" rel="stylesheet">
    <?php include "../sections/meta_header.php" ?>
    <title>Campagne:Home</title>
</head>

<body x-data="{ modelOpen: false , modalActu:false }">

    <!-- Start Banner -->
    <?php include "../sections/banner.php" ?>

    <!-- End Banner -->
    <!-- Start Header -->
    <?php include "../sections/header.php" ?>
    <!-- End Header -->

    <!--Start Caroussel-->
    <?php include "../sections/carousel.php" ?>
    <!--End Caroussel-->


    <!-- Start Hero -->

    <section class="mt-2 bg-white "><!--dark:bg-gray-900-->

        <div class="grid px-4 py-8 mx-auto max-w-screen-2xl lg:py-16 lg:gap-8 xl:gap-0 lg:grid-cols-12">

            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-3xl leading-none tracking-tight text-blue-900 font-monseratBlackBold md:text-5xl xl:text-6xl ">
                    <!--dark:text-white-->
                    Ensemble pour une COING d'impacts et de Solidarités.
                </h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl ">
                    <!--dark:text-gray-400-->
                    Bienvenue sur le site officiel de la campagne de Diane Ndeuna pour la Présidence de la COING de
                    l’OIF. Ensemble, pour une COING de solutions, unissons nos forces pour une Francophonie plus forte
                    et
                    apaisée.
                </p>
                <a href="index.php#actu"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 ">Actualités
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a><!--dark:focus:ring-primary-900-->
                <a href="#vision"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 "><!--dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800-->
                    Ma vision
                </a>

            </div>

            <div class="relative w-full py-10 lg:mt-0 lg:col-span-5 lg:flex">

                <!-- <img src="../assets/images/hero/1.jpg" loading="lazy" class="rounded-md" alt="diane image"> -->

                <iframe
                    src="https://player.vimeo.com/video/1005542095?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write" class="w-full h-full"
                    title="DIANE NDEUNA"></iframe>

                <!-- <div style="padding:75% 0 0 0;position:relative;">
                        <iframe src="https://player.vimeo.com/video/1005542095?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write"  title="eden-africa-coing"></iframe>
                    </div> -->
            </div>




        </div>
    </section>

    <!-- <div class="items-center justify-center hidden w-full mt-4 lg:mt-0 lg:col-span-5 lg:flex">
        <img class="animate-infinite animate-duration-[6000ms] animate-ease-in  animate-bounce delay-150 duration-300 "
            src="../assets/images/logo/logo.png" loading="lazy" alt="coing-logo">
    </div> -->

    <!-- End Hero -->

    <!-- About section -->

    <div class="relative px-6 overflow-hidden bg-white isolate lg:overflow-visible lg:px-0">
        <div class="absolute inset-0 overflow-hidden -z-10">
            <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]"
                aria-hidden="true">
                <defs>
                    <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1"
                        patternUnits="userSpaceOnUse">
                        <path d="M100 200V.5M.5 .5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                    <path
                        d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z"
                        stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
            </svg>
        </div>

        <div id="bio"
            class="grid max-w-2xl grid-cols-1 mx-auto gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
            <div
                class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8 toAnimate">
                <div class="lg:pr-4">
                    <div class="lg:max-w-lg">
                        <p class="text-base font-semibold leading-7 text-indigo-600">À propos de Diane</p>
                        <h1 class="mt-2 text-3xl tracking-tight text-gray-900 font-monseratBlack sm:text-4xl">
                            Biographie de Diane
                            Ndeuna
                        </h1>
                        <p class="mt-6 leading-8 text-gray-700 sm sm:text-xl">
                            Diane Ndeuna est une leader dynamique et expérimentée dans le domaine des organisations de
                            la société civile, tant au Cameroun qu'à l'international. En tant que Présidente exécutive
                            de EDEN AFRICA, elle s'est distinguée par son engagement profond pour l'éducation,
                            l'entrepreneuriat, et l'autonomisation des femmes, tout en portant une vision stratégique
                            visant à renforcer l'impact des OSC dans l'espace francophone.
                        </p>
                        <p class="mt-6 leading-8 text-gray-700 sm sm:text-xl" id="animate-me">
                            Forte d'une expérience de plus de 20 ans, Diane a collaboré avec de nombreuses institutions
                            publiques internationales et nationales, menant des initiatives concrètes pour promouvoir
                            des
                            causes telles que l'éducation, les droits humains, l'égalité des genres, et le développement
                            durable. Son parcours témoigne de sa capacité à transformer des défis &nbsp;
                            <a href="javascript:void(0);" @click="modelOpen =!modelOpen"
                                class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                En savoir plus
                                <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </p>
                        <div>

                        </div>

                    </div>
                </div>
            </div>
            <div
                class="p-12 -mt-12 -ml-8 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden toAnimate_2">
                <img class="bg-gray-900 shadow-xl rounded-xl ring-1 ring-gray-400/10"
                    src="../assets/images/profiles/1.png" loading="lazy" alt="Diana Ndeuna profile">
            </div>
            <div
                class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="lg:pr-4">
                    <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg toAnimate">
                        <div>
                        </div>
                        <!-- <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">Valeurs et Engagements .</h2>
                        <p class="mt-6">Guidée par les valeurs de coopération, de solidarité et de justice, Diane Ndeuna
                            s'engage à défendre les intérêts de la société civile francophone. Elle croit en une
                            Francophonie qui valorise chaque voix et qui agit pour le bien commun, dans une démarche
                            inclusive et consensuelle.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End  About section -->

    <!--Galerie   section -->
    <div class="w-full bg-white">
        <div class="max-w-full px-4 mx-auto lg:px-8">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div
                        class="w-full h-64 p-6 mx-auto transition-all duration-500 bg-white swiper-slide md:h-96 rounded-xl hover:shadow-sm ">
                        <div class="flex items-center justify-center h-full rounded-full">
                            <img src="../assets/images/galeries/14.jpg" loading="lazy" class="w-auto max-h-full rounded"
                                alt="Image 14">
                        </div>
                    </div>
                    <div class="h-64 rounded-full swiper-slide md:h-96 ">
                        <div
                            class="flex items-center justify-center w-full h-full p-6 mx-auto transition-all duration-500 bg-white rounded-xl hover:shadow-sm ">
                            <img src="../assets/images/galeries/2.png" alt="Image 2" loading="lazy"
                                class="w-auto max-h-full rounded">
                        </div>
                    </div>
                    <div
                        class="w-full h-64 p-6 mx-auto transition-all duration-500 bg-white swiper-slide md:h-96 rounded-xl hover:shadow-sm ">
                        <div class="flex items-center justify-center h-full rounded-full">
                            <img src="../assets/images/galeries/3.png" alt="Image 3" loading="lazy"
                                class="w-auto max-h-full rounded">
                        </div>
                    </div>
                    <!-- <div
                        class="w-full h-64 p-6 mx-auto transition-all duration-500 bg-white swiper-slide md:h-96 rounded-xl hover:shadow-sm ">
                        <div class="flex items-center justify-center h-full">
                            <img src="../assets/images/galeries/13.jpg"  alt="Image 13" loading="lazy" class="w-auto max-h-full">
                        </div>
                    </div> -->
                    <div class="h-64 swiper-slide md:h-96">
                        <div
                            class="flex items-center justify-center w-full h-full p-6 mx-auto transition-all duration-500 bg-white rounded-xl hover:shadow-sm ">
                            <img src="../assets/images/galeries/5.png" alt="Image 5" loading="lazy"
                                class="w-auto max-h-full rounded">
                        </div>
                    </div>

                    <div class="h-64 swiper-slide md:h-96">
                        <div
                            class="flex items-center justify-center w-full h-full p-6 mx-auto transition-all duration-500 bg-white rounded-xl hover:shadow-sm ">
                            <img src="../assets/images/galeries/6.png" alt="Image 6" loading="lazy"
                                class="w-auto max-h-full rounded">
                        </div>
                    </div>

                    <div class="h-64 swiper-slide md:h-96">
                        <div
                            class="flex items-center justify-center w-full h-full p-6 mx-auto transition-all duration-500 bg-white rounded-xl hover:shadow-sm ">
                            <img src="../assets/images/galeries/7.png" alt="Image 7" loading="lazy"
                                class="w-auto max-h-full rounded">
                        </div>
                    </div>

                    <div class="h-64 swiper-slide md:h-96">
                        <div
                            class="flex items-center justify-center w-full h-full p-6 mx-auto transition-all duration-500 bg-white rounded-xl hover:shadow-sm ">
                            <img src="../assets/images/galeries/12.jpg" alt="Image 12" loading="lazy"
                                class="w-auto max-h-full rounded">
                        </div>
                    </div>

                    <div class="h-64 swiper-slide md:h-96">
                        <div
                            class="flex items-center justify-center w-full h-full p-6 mx-auto transition-all duration-500 bg-white rounded-xl hover:shadow-sm ">
                            <img src="../assets/images/galeries/11.jpg" alt="Image 11" loading="lazy"
                                class="w-auto max-h-full rounded">
                        </div>
                    </div>

                    <div class="h-64 swiper-slide md:h-96">
                        <div
                            class="flex items-center justify-center w-full h-full p-6 mx-auto transition-all duration-500 bg-white rounded-xl hover:shadow-sm ">
                            <img src="../assets/images/galeries/15.jpg" alt="Image 15" loading="lazy"
                                class="w-auto max-h-full rounded">
                        </div>
                    </div>

                    <div class="h-64 swiper-slide md:h-96">
                        <div
                            class="flex items-center justify-center w-full h-full p-6 mx-auto transition-all duration-500 bg-white rounded-xl hover:shadow-sm ">
                            <img src="../assets/images/galeries/16.jpg" alt="Image 16" loading="lazy"
                                class="w-auto max-h-full rounded">
                        </div>
                    </div>

                    <div class="h-64 swiper-slide md:h-96">
                        <div
                            class="flex items-center justify-center w-full h-full p-6 mx-auto transition-all duration-500 bg-white rounded-xl hover:shadow-sm ">
                            <img src="../assets/images/galeries/17.jpg" alt="Image 17" loading="lazy"
                                class="w-auto max-h-full rounded">
                        </div>
                    </div>



                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!--Galerie   section -->


    <!--start vision -->
    <div class="grid grid-cols-1 gap-8 py-24 bg-white lg:grid-cols-1 " id="vision">
        <!-- <div class="px-6 lg:px-8 ">
            <img class="rounded-md shadow-xl lg:sticky lg:top-40 lg:ml-4" loading="lazy"  src="../assets/images/diana-profile-1.png"
                alt="coing-logo" />
        </div> -->

        <div class="px-6 mx-auto max-w-7xl lg:max-w-full lg:px-8">
            <div class="max-w-2xl mx-auto lg:max-w-full lg:text-center">

                <h2 class="mb-4 text-3xl font-bold tracking-tight font-monseratBlack lg:text-6xl text-corn-600 ">
                    <!--dark:text-white-->
                    Ma vision pour la COING
                </h2>
                <p class="mt-4 text-base font-bold tracking-tight text-blue-700 lg:text-2xl sm:text-xl">Mes priorités
                    reposent sur trois axes principaux </p>
                <p class="mt-6 text-lg font-semibold leading-8 text-gray-600 lg:text-2xl">J'aspire à contribuer à faire
                    de la COING
                    une force
                    motrice pour la Francophonie, en axant mon action sur trois piliers : Propositions concrètes et
                    opportunités - Représentation efficace et synergies - Ancrage dans la société civile francophone.
                </p>
            </div>

            <div class="max-w-2xl mx-auto mt-16 sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <div class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">

                    <div class="image-wrapper toAnimate" id="animate-me">
                        <img src="../assets/images/axe/axe.PNG" loading="lazy" alt="axe 1 programme" />
                    </div>

                    <div class="image-wrapper toAnimate ">
                        <img src="../assets/images/axe/axa1-1.PNG" loading="lazy" alt="IMAE AXE 1" />
                    </div>
                    <div class="image-wrapper toAnimate">
                        <img src="../assets/images/axe/axe2.PNG" loading="lazy" alt="IMAE AXE 2" />
                    </div>
                    <div class="image-wrapper toAnimate">
                        <img src="../assets/images/axe/axe2-2.PNG" loading="lazy" alt=" AXE 2" />
                    </div>
                    <div class="image-wrapper toAnimate">
                        <img src="../assets/images/axe/axe3.PNG" loading="lazy" alt="IMAE AXE 3" />
                    </div>
                    <div class="image-wrapper toAnimate">
                        <img src="../assets/images/axe/axe3-3.PNG" loading="lazy" alt="IMAE AXE 3" />
                    </div>



                </div>


            </div>

        </div>
    </div>
    <!--End vision -->


    <!--realisation   section -->
    <section class="bg-white " id="realisation"><!--dark:bg-gray-900-->
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
            <div class="max-w-screen-sm mx-auto mb-8 text-center lg:mb-16">

                <h2 class="mb-4 text-3xl font-bold tracking-tight text-blue-700 font-monseratBold lg:text-6xl ">
                    <!--dark:text-white-->
                    Réalisations
                </h2>
                <p class="text-lg font-semibold leading-8 text-gray-600 lg:text-2xl">Guidée par les valeurs de
                    coopération,
                    de solidarité et de justice, Diane Ndeuna s'engage à défendre les intérêts de la société civile
                    francophone. Elle croit en une Francophonie qui valorise chaque voix et qui agit pour le bien
                    commun, dans une démarche inclusive et consensuelle.<a class="text-blue-300" target="_blank"
                        download href="../assets/files/rapport_acti.pdf">Télécharger le rapport complet</a></p>
            </div>

            <div class="grid gap-8 lg:grid-cols-2">
                <article class="p-6 bg-white border border-gray-200 rounded-lg shadow-md ">
                    <div class="flex items-center">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-bold monseratBlackBold inline-flex items-center px-2.5 py-0.5 rounded "><!--dark:bg-primary-200 dark:text-primary-800-->

                            Réalisation
                        </span>
                        <span class="ml-2 text-sm font-bold tracking-tight text-gray-900">Cofondation et structuration
                            de la lettre d’information de la
                            COING</span>
                    </div>

                    <p class="mb-5 font-light text-gray-500 "> &nbsp;</p><!--dark:text-gray-400-->
                    <div>
                        <div class="flex space-x-4">
                            <img class="rounded w-ful" loading="lazy" src="../assets/images/realisations/1/1.jpeg"
                                alt="Logo eden afica" />

                        </div>

                    </div>

                    <div class="flex flex-row items-center justify-center mb-4">
                        <a href="../assets/files/rapport_acti.pdf" target="_blank"
                            class="inline-flex items-center font-medium text-primary-600 hover:underline"><!--dark:text-primary-500-->
                            En savoir plus
                            <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>

                </article>




                <article class="p-6 bg-white border border-gray-200 rounded-lg shadow-md ">
                    <div class="flex items-center justify-between">
                        <span
                            class="bg-primary-100 text-denim-800 text-xs font-bold monseratBlackBold inline-flex items-center px-2.5 py-0.5 rounded "><!--dark:bg-primary-200 dark:text-primary-800-->

                            Réalisation
                        </span>
                        <span class="ml-2 text-sm font-bold tracking-tight text-gray-900">Proposition de l’élaboration
                            d’une cartographie des initiatives et expertises des organisations accréditées, présentée à
                            l’OIF en janvier 2023

                        </span>
                    </div>

                    <p class="mb-5 font-light text-gray-500 "> &nbsp;</p><!--dark:text-gray-400-->
                    <div>
                        <div class="flex space-x-4">
                            <img class="rounded w-ful" loading="lazy" src="../assets/images/realisations/2/1.jpeg"
                                alt="Logo eden afica" />

                        </div>

                    </div>

                    <div class="flex flex-row items-center justify-center mb-4">
                        <a href="../assets/files/rapport_acti.pdf" target="_blank"
                            class="inline-flex items-center font-medium text-primary-600 hover:underline"><!--dark:text-primary-500-->
                            En savoir plus
                            <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>

                </article>

                <article class="p-6 bg-white border border-gray-200 rounded-lg shadow-md ">
                    <div class="flex items-center justify-between">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-bold monseratBlackBold inline-flex items-center px-2.5 py-0.5 rounded "><!--dark:bg-primary-200 dark:text-primary-800-->

                            Réalisation
                        </span>
                        <span class="ml-2 text-sm font-bold tracking-tight text-gray-900">Organisation de réunions et
                            soirées de réseautage pour favoriser les synergies entre les
                            OSC</span>
                    </div>

                    <p class="mb-5 font-light text-gray-500 "> &nbsp;</p><!--dark:text-gray-400-->
                    <div>
                        <div class="flex space-x-4">
                            <img class="rounded w-ful" loading="lazy" src="../assets/images/realisations/3/1.jpeg"
                                alt="Logo eden afica" />

                        </div>

                    </div>

                    <div class="flex flex-row items-center justify-center mb-4">
                        <a href="../assets/files/rapport_acti.pdf" target="_blank"
                            class="inline-flex items-center font-medium text-primary-600 hover:underline"><!--dark:text-primary-500-->
                            En savoir plus
                            <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>

                </article>

                <article class="p-6 bg-white border border-gray-200 rounded-lg shadow-md ">
                    <div class="flex items-center">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-bold monseratBlackBold inline-flex items-center px-2.5 py-0.5 rounded ">

                            Réalisation
                        </span>
                        <span class="ml-2 text-sm font-bold tracking-tight text-gray-900"> Mobilisation des OSC aux Jeux
                            de la Francophonie 2023 à Kinshasa</span>
                    </div>

                    <p class="mb-5 font-light text-gray-500 "> &nbsp;</p>
                    <div class="mb-4 swiper default-carousel swiper-container">
                        <div> <img class="object-cover w-full rounded " loading="lazy"
                                src="../assets/images/realisations/4/1.jpg" alt="Logo eden afica" /> </div>

                    </div>

                    <div class="flex flex-row items-center justify-center mb-4">
                        <a href="../assets/files/programme.pdf" target="_blank"
                            class="inline-flex items-center font-medium text-primary-600 hover:underline">
                            En savoir plus
                            <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>

                </article>


            </div>
        </div>
    </section>
    <!--End realisation section -->

    <!--start Actualité-->
    <section class="bg-white " id="actu"><!--dark:bg-gray-900-->
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
            <div class="max-w-screen-sm mx-auto mb-8 text-center lg:mb-16">
                <h2 class="mb-4 text-3xl font-bold tracking-tight text-ecstasy-800 font-monseratBlack lg:text-6xl ">
                    <!--dark:text-white-->
                    Actualités
                </h2>
                <p class="font-bold text-gray-500 sm:text-xl "><!--dark:text-gray-400--> Actualités de la Campagne de
                    Diane Ndeuna.</p>
            </div>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <article class="p-6 bg-white border border-gray-200 rounded-lg shadow-md ">
                            <!--dark:bg-gray-800 dark:border-gray-700-->
                            <div class="flex items-center justify-between mb-5 text-gray-500">
                                <span
                                    class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded "><!--dark:bg-primary-200 dark:text-primary-800-->
                                    Actualité
                                </span>
                                <span class="text-sm">03 Septembre 2024</span>
                            </div>
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "><!--dark:text-white-->
                                <a href="#">Lancement de la campagne de Diane Ndeuna : un événement marquant pour
                                    l’avenir de la société civile francophone.
                                </a>
                            </h2>
                            <p class="mb-5 font-light text-gray-500 "><!--dark:text-gray-400-->
                                Diane Ndeuna, figure emblématique de l'engagement sociétal et candidate à la présidence
                                de la Conférence Internationale des Organisations Non-Gouvernementales (COING) de
                                l'Organisation Internationale de la Francophonie (OIF), lance officiellement sa
                                campagne. Cet événement, inédit dans l’histoire de la COING, promet d’être un moment
                                fort de réflexion et d'échange autour des défis et opportunités de la Francophonie.
                            </p>
                            <div class="flex items-center justify-between">

                                <a href="javascript:void(0);" @click="modalActu =!modalActu"
                                    class="inline-flex items-center font-medium text-primary-600 hover:underline"><!--dark:text-primary-500-->
                                    En savoir plus
                                    <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    </div>



                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!--End actualité-->



    <!--Temoignages -->
    <section class="py-24 ">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-16">
                <span
                    class="block mb-2 text-3xl font-bold text-center text-violetEggplant-600 lg:text-6xl font-monseratBlack">Témoignages
                </span>
                <h2 class="text-xl font-bold text-center text-gray-900 ">Découvrez les témoignages de soutiens
                    convaincus par la vision de Diane.</h2>
            </div>


            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Grid -->
                <div class="md:grid md:grid-cols-2 md:gap-10 lg:gap-16 md:items-center">
                    <div class="hidden mb-24 md:block md:mb-0 sm:px-6">
                        <div class="relative">
                            <img class="rounded-xl" src="../assets/images/temoignages/2.jpg"
                                alt="Temoignange Président Raymond ADJAKPA ABILE " loading="lazy">

                        </div>
                    </div>
                    <!-- End Col -->

                    <div>
                        <!-- Blockquote -->
                        <blockquote class="relative">
                            <svg class="absolute top-0 text-gray-200 transform -translate-x-8 -translate-y-4 start-0 size-24"
                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M7.39762 10.3C7.39762 11.0733 7.14888 11.7 6.6514 12.18C6.15392 12.6333 5.52552 12.86 4.76621 12.86C3.84979 12.86 3.09047 12.5533 2.48825 11.94C1.91222 11.3266 1.62421 10.4467 1.62421 9.29999C1.62421 8.07332 1.96459 6.87332 2.64535 5.69999C3.35231 4.49999 4.33418 3.55332 5.59098 2.85999L6.4943 4.25999C5.81354 4.73999 5.26369 5.27332 4.84476 5.85999C4.45201 6.44666 4.19017 7.12666 4.05926 7.89999C4.29491 7.79332 4.56983 7.73999 4.88403 7.73999C5.61716 7.73999 6.21938 7.97999 6.69067 8.45999C7.16197 8.93999 7.39762 9.55333 7.39762 10.3ZM14.6242 10.3C14.6242 11.0733 14.3755 11.7 13.878 12.18C13.3805 12.6333 12.7521 12.86 11.9928 12.86C11.0764 12.86 10.3171 12.5533 9.71484 11.94C9.13881 11.3266 8.85079 10.4467 8.85079 9.29999C8.85079 8.07332 9.19117 6.87332 9.87194 5.69999C10.5789 4.49999 11.5608 3.55332 12.8176 2.85999L13.7209 4.25999C13.0401 4.73999 12.4903 5.27332 12.0713 5.85999C11.6786 6.44666 11.4168 7.12666 11.2858 7.89999C11.5215 7.79332 11.7964 7.73999 12.1106 7.73999C12.8437 7.73999 13.446 7.97999 13.9173 8.45999C14.3886 8.93999 14.6242 9.55333 14.6242 10.3Z"
                                    fill="currentColor" />
                            </svg>

                            <div class="relative z-10">
                                <p class="mb-3 text-sm font-bold tracking-wide text-gray-500 uppercase">
                                    Lettre de soutien à la candidature de Diane NDEUNA à la Présidence de la COING
                                </p>

                                <p
                                    class="text-sm font-medium text-gray-800 md:text-xl md:leading-normal xl:text-xl xl:leading-normal">
                                    IIFACQES soutient la candidature de Madame Diane NDEUNA à la
                                    présidence du Comité
                                    des Organisations internationales Non Gouvernementales (COING).<br />
                                    Par son engagement et ses actions pour la francophonie en général , Madame Diane
                                    NDEUNA s'inscrit pleinement dans les objectifs de la société civil de l'OIF et
                                    au-déla.
                                    Ses capacités d'organisation et de conduite de projet,sa jeunesse , son dynamisme
                                    auprès de la société civile; ses combats pour la jeunesse et spécifiquement pour la
                                    promtion et la pleine
                                    intégration de la femme dans la Cité; sa foi en l'economie , le numérique et le
                                    dévelloppement durable comme des incontournables d'un développement intégré sont des
                                    atouts et des leviers d'aujourd'hui.
                                    et de demain.
                                    Enfin, Madame Diane NDEUNA a toujours fait montre de capacités de de compétences
                                    remarquables de management.<br />
                                    Ces qualité et cet engagement justifient et motivent le soutien
                                    de l'OING IIFACQES
                                    décidé par son conseil d'Administration le 26 Aout 2024.
                                </p>
                            </div>

                            <footer class="mt-6">
                                <div class="flex items-center">
                                    <div class="md:hidden shrink-0">
                                        <img class="rounded-full size-12" src="../assets/images/temoignages/face-2.jpg"
                                            alt="Avatar" loading="leazy">
                                    </div>
                                    <div class="ms-4 md:ms-0">
                                        <div class="text-base font-semibold text-gray-800">Président Raymond ADJAKPA
                                            ABILE</div>

                                    </div>
                                </div>
                            </footer>

                        </blockquote>
                        <!-- End Blockquote -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>

            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Grid -->
                <div class="md:grid md:grid-cols-2 md:gap-10 lg:gap-16 md:items-center">
                    <div class="hidden mb-24 md:block md:mb-0 sm:px-6">
                        <div class="relative">
                            <img class="rounded-xl" src="../assets/images/temoignages/3.jpg"
                                alt="Temoignange Assiba du REJADD-Togo " loading="lazy">

                        </div>
                    </div>
                    <!-- End Col -->

                    <div>
                        <!-- Blockquote -->
                        <blockquote class="relative">
                            <svg class="absolute top-0 text-gray-200 transform -translate-x-8 -translate-y-4 start-0 size-24"
                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M7.39762 10.3C7.39762 11.0733 7.14888 11.7 6.6514 12.18C6.15392 12.6333 5.52552 12.86 4.76621 12.86C3.84979 12.86 3.09047 12.5533 2.48825 11.94C1.91222 11.3266 1.62421 10.4467 1.62421 9.29999C1.62421 8.07332 1.96459 6.87332 2.64535 5.69999C3.35231 4.49999 4.33418 3.55332 5.59098 2.85999L6.4943 4.25999C5.81354 4.73999 5.26369 5.27332 4.84476 5.85999C4.45201 6.44666 4.19017 7.12666 4.05926 7.89999C4.29491 7.79332 4.56983 7.73999 4.88403 7.73999C5.61716 7.73999 6.21938 7.97999 6.69067 8.45999C7.16197 8.93999 7.39762 9.55333 7.39762 10.3ZM14.6242 10.3C14.6242 11.0733 14.3755 11.7 13.878 12.18C13.3805 12.6333 12.7521 12.86 11.9928 12.86C11.0764 12.86 10.3171 12.5533 9.71484 11.94C9.13881 11.3266 8.85079 10.4467 8.85079 9.29999C8.85079 8.07332 9.19117 6.87332 9.87194 5.69999C10.5789 4.49999 11.5608 3.55332 12.8176 2.85999L13.7209 4.25999C13.0401 4.73999 12.4903 5.27332 12.0713 5.85999C11.6786 6.44666 11.4168 7.12666 11.2858 7.89999C11.5215 7.79332 11.7964 7.73999 12.1106 7.73999C12.8437 7.73999 13.446 7.97999 13.9173 8.45999C14.3886 8.93999 14.6242 9.55333 14.6242 10.3Z"
                                    fill="currentColor" />
                            </svg>

                            <div class="relative z-10">
                                <!-- <p class="mb-3 text-sm font-bold tracking-wide text-gray-500 uppercase">
                                    Témoignage de soutien
                                </p> -->

                                <p
                                    class="text-sm font-medium text-gray-800 md:text-xl md:leading-normal xl:text-xl xl:leading-normal">
                                    Bonjour chers collègues.<br>


                                    Je soutiens la candidature de Diane pour la présidence de la COING en raison de son
                                    engagement continu envers cette entité commune. Son leadership démontré en tant que
                                    présidente de la commission D prouve ses réelles capacités.<br>

                                    Sa créativité, sa vivacité, son efficacité, ses compétences et ses qualités font
                                    d'elle une candidate exceptionnelle par rapport aux autres postulants, compte tenu
                                    de ses performances au sein de la commission D, notamment en matière d'activités et
                                    de résultats.<br>

                                    De plus, pour respecter l'exigence de la diversité géographique de la Francophonie
                                    et tenant compte du fait qu'il y a eu une présidence française de 2014 à 2018, une
                                    présidence canadienne de 2018 à 2022, et une autre présidence française de 2022 à
                                    2024, il est temps de passer le flambeau à un autre continent, l'Afrique, d'où vient
                                    la majorité des pays membres de la Francophonie.<br>

                                    Par ailleurs, il n'y a jamais eu de jeune à ce poste et la jeunesse est une priorité
                                    pour la Francophonie.<br>

                                    En conclusion, je recommande à tous et à toutes de soutenir la candidature de Diane
                                    à la présidence de la COING.
                                </p>
                            </div>

                            <footer class="mt-6">
                                <div class="flex items-center">
                                    <div class="md:hidden shrink-0">
                                        <img class="rounded-full size-12" src="../assets/images/temoignages/face-3.jpg"
                                            alt="Temoignage Monsieur Assiba du REJADD-Togo" loading="lazy" />
                                    </div>
                                    <div class="ms-4 md:ms-0">
                                        <div class="text-base font-semibold text-gray-800">Monsieur Assiba du
                                            REJADD-Togo </div>

                                    </div>
                                </div>
                            </footer>

                        </blockquote>
                        <!-- End Blockquote -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>

        </div>
    </section>
    <!-- End Testimonials -->

    <!--Start Scroll to top -->
    <?php include "../sections/scroll.php" ?>
    <!--End Scroll to top -->



    <!--TODO MODAL-->
    <div x-show="modelOpen" style="display:none;" class="fixed inset-0 z-50 flex items-center justify-center">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        <div class="relative w-full max-w-screen-md m-4 overflow-hidden bg-white rounded-lg shadow-xl"
            x-transition:enter="transition ease-out duration-300 transform opacity-0 scale-95"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200 transform opacity-100 scale-100"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" x-cloak>
            <!-- Modal panel -->
            <div class="px-6 py-4">
                <h3 class="text-lg font-medium leading-6 text-gray-900"> Biographie de Diane Ndeuna</h3>
            </div>
            <div class="max-w-screen-md p-6 overflow-y-auto prose"
                style="max-height: 70vh; background-color: #fff; border: 1px solid #e2e8f0; border-radius: 0.375rem; box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);">

                <p class="mb-4">Diane Ndeuna est une leader dynamique et expérimentée dans le domaine des
                    organisations de la société civile, tant au Cameroun qu'à l'international. En tant que
                    Présidente exécutive de EDEN AFRICA, elle s'est distinguée par son engagement profond pour
                    l'éducation, l'entrepreneuriat, et l'autonomisation des femmes, tout en portant une vision
                    stratégique visant à renforcer l'impact des OSC dans l'espace francophone.</p>

                <p class="mb-4">Forte d'une expérience de plus de 20 ans, Diane a collaboré avec de nombreuses
                    institutions
                    publiques internationales et nationales, menant des initiatives concrètes pour promouvoir
                    des causes telles que l'éducation, les droits humains, l'égalité des genres, et le
                    développement durable. Son parcours témoigne de sa capacité à transformer des défis
                    complexes en opportunités, à mobiliser des ressources, et à créer des synergies bénéfiques
                    pour les OSC qu'elle représente.</p>
                <p class="mb-4">Son leadership et son expertise ont été reconnus au plus haut niveau, notamment
                    par le
                    Ministère des Relations Extérieures du Cameroun, qui l'a nommée membre du Conseil
                    Scientifique de la 44ème Conférence Ministérielle de la Francophonie en 2023. À cette
                    occasion, elle a joué un rôle clé en facilitant les invitations pour les OING/ONG désireuses
                    de participer à la cérémonie d'ouverture et en organisant le Forum Jeunesse et Société
                    Civile francophone, rassemblant des participants en présentiel et en distanciel.</p>
                <p class="mb-4">Parmi ses réalisations notables, Diane a également orchestré l'organisation de
                    soirées de
                    réseautage pour renforcer les synergies entre les OSC, participé à des événements
                    internationaux comme la COP 28, et dirigé des formations en montage de projets et en
                    recherche de financement pour plus de 60 acteurs de la société civile francophone. Elle a
                    aussi collaboré étroitement avec l'OIF sur des initiatives telles que la régulation des
                    plateformes pour l'information comme bien public.</p>
                <p class="mb-4">Diane Ndeuna incarne un leadership visionnaire et inclusif, déterminé à faire de
                    la COING une
                    force motrice pour une Francophonie plus connectée et plus impactante.</p>

            </div>
            <div class="flex flex-row justify-end gap-4 p-4 px-4 py-3 bg-gray-50 sm:px-6 align-items">
                <button @click="modelOpen = false" type="button"
                    class="inline-flex justify-center px-4 py-2 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-lust-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 sm:w-auto sm:text-sm">
                    Fermer </button>
            </div>
        </div>
    </div>
    <!--FIN TODO MODAL-->



    <!--TODO MODAL-->
    <div x-show="modalActu" style="display:none;" class="fixed inset-0 z-50 flex items-center justify-center">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        <div class="relative w-full max-w-screen-md m-4 overflow-hidden bg-white rounded-lg shadow-xl"
            x-transition:enter="transition ease-out duration-300 transform opacity-0 scale-95"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200 transform opacity-100 scale-100"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" x-cloak>
            <!-- Modal panel -->
            <div class="px-6 py-4">
                <h3 class="text-lg font-medium leading-6 text-gray-900"> Actualité : <span class="font-bold"> Lancement de la campagne de
                        Diane Ndeuna</span></h3>
            </div>
            <div class="max-w-screen-md p-6 overflow-y-auto prose"
                style="max-height: 70vh; background-color: #fff; border: 1px solid #e2e8f0; border-radius: 0.375rem; box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);">

                <p>
                    Lancement de la campagne de Diane Ndeuna : un événement marquant pour l’avenir de la société civile
                    francophone.
                    Diane Ndeuna, figure emblématique de l'engagement sociétal et candidate à la présidence de la
                    Conférence Internationale des Organisations Non-Gouvernementales (COING) de l'Organisation
                    Internationale de la Francophonie (OIF), lance officiellement sa campagne. Cet événement, inédit
                    dans l’histoire de la COING, promet d’être un moment fort de réflexion et d'échange autour des défis
                    et opportunités de la Francophonie.</p>
                    <p>
                    Un rendez-vous pour une COING d'impacts et de solidarités
                    Le lancement de la campagne de Diane Ndeuna a lieu lors d’une réunion en ligne interactive, prévue
                    ce 3 septembre 2024. Cette réunion réunira non seulement les organisations accréditées de la COING,
                    mais aussi les partenaires stratégiques et des organisations non accréditées qui ont activement
                    participé aux activités de réseautage de la Commission D.
                    Date : 3 septembre 2024
                    Heure :</p>
                    <ul class="font-bold">
                        <li>* 16h (GMT+1) Afrique Centrale</li>
                        <li>* 17h (Paris)</li>
                        <li>* 15h (Dakar)</li>
                        <li>* 11h (Québec)</li>
                    </ul>

                    <p>
                    Une vision pour une COING plus apaisée et vertueuse
                    Diane Ndeuna présentera sa vision pour une COING rénovée et réinventée, qui repose sur trois piliers
                    stratégiques : la mise en place de propositions concrètes et de nouvelles opportunités, le
                    renforcement d’une représentation efficace et des synergies, et enfin l’ancrage solide dans la
                    société civile francophone. Diane souhaite une COING plus apaisée, où le dialogue prime sur la
                    confrontation, et où les valeurs de solidarité et d'inclusion sont mises en avant.
                    Un engagement pour la transformation
                    </p>
              

                   </p>
                    À travers ce lancement, Diane Ndeuna souhaite engager un dialogue ouvert avec tous les membres de la
                    COING et au-delà, afin de co-construire une vision partagée. Cet événement marquera le début d'une
                    série d'échanges ouverts et inclusifs, permettant de recueillir les attentes et les aspirations de
                    chacun pour l'avenir de la Francophonie.
                    Pour plus d’informations, pour obtenir les détails d'accès à la réunion Zoom, ou pour organiser une
                    interview avec Diane Ndeuna, veuillez nous contacter à l’adresse suivante : [adresse e-mail] ou
                    [numéro de téléphone].</p>
                    Ensemble, pour une COING d'impacts et de solidarités.
                </p>


            </div>
            <div class="flex flex-row justify-end gap-4 p-4 px-4 py-3 bg-gray-50 sm:px-6 align-items">
                <button @click="modalActu = false" type="button"
                    class="inline-flex justify-center px-4 py-2 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-lust-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 sm:w-auto sm:text-sm">
                    Fermer </button>
            </div>
        </div>
    </div>
    <!--FIN TODO MODAL-->



</body>
<!--Start  Footer-->
<?php include_once "../sections/footer.php" ?>
<!--End footer  -->



</html>
<script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script defer src="../assets/js/animate.js"></script>
<script defer src="../assets/js/swiper-func.js"></script>
<script defer src="../assets/js/style.js"></script>
<script defer src="https://player.vimeo.com/api/player.js"></script>