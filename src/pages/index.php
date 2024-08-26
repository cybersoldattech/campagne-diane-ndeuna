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

<body x-data="{ modelOpen: false , showMorevision:false }">

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
                    class="max-w-2xl mb-4 text-3xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl "><!--dark:text-white-->
                    Ensemble pour une COING d'impacts et de Solidarités.
                </h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl "><!--dark:text-gray-400-->
                    Bienvenue sur le site officiel de la campagne de Diane Ndeuna pour la Présidence de la COING de
                    l’OIF. Ensemble, pour une COING de solutions, unissons nos forces pour une Francophonie plus forte
                    et
                    apaisée.</p>
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

            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                 <img src="../assets/images/hero/1.jpg" loading="lazy" class="rounded-md" alt="diane image">
            </div>
            


        </div>
    </section>

    <div class="items-center justify-center hidden w-full mt-4 lg:mt-0 lg:col-span-5 lg:flex">
        <img class="animate-infinite animate-duration-[6000ms] animate-ease-in  animate-bounce delay-150 duration-300 "
            src="../assets/images/logo/logo.png" alt="coing-logo">
    </div>

    <!-- End Hero -->

    <!-- About section -->

    <div class="relative px-6 py-16 overflow-hidden bg-white isolate lg:overflow-visible lg:px-0">
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
                        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Biographie de Diane
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
                    src="../assets/images/profiles/1.png" loading="lazy"  alt="Diana Ndeuna profile">
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
                        class="w-full h-64 p-6 mx-auto transition-all duration-500 bg-white border border-gray-300 border-solid swiper-slide md:h-96 rounded-xl hover:border-indigo-600 hover:shadow-sm slide_active:border-indigo-600">
                        <div class="flex items-center justify-center h-full rounded-full">
                            <img src="../assets/images/galeries/14.jpg" loading="lazy"  class="w-auto max-h-full">
                        </div>
                    </div>
                    <div class="h-64 rounded-full swiper-slide md:h-96 ">
                        <div
                            class="flex items-center justify-center w-full h-full p-6 mx-auto transition-all duration-500 bg-white border border-gray-300 border-solid rounded-xl hover:border-indigo-600 hover:shadow-sm slide_active:border-indigo-600">
                            <img src="../assets/images/galeries/2.png" loading="lazy"  class="w-auto max-h-full">
                        </div>
                    </div>
                    <div
                        class="w-full h-64 p-6 mx-auto transition-all duration-500 bg-white border border-gray-300 border-solid swiper-slide md:h-96 rounded-xl hover:border-indigo-600 hover:shadow-sm slide_active:border-indigo-600">
                        <div class="flex items-center justify-center h-full rounded-full">
                            <img src="../assets/images/galeries/3.png" loading="lazy"  class="w-auto max-h-full">
                        </div>
                    </div>
                    <div
                        class="w-full h-64 p-6 mx-auto transition-all duration-500 bg-white border border-gray-300 border-solid swiper-slide md:h-96 rounded-xl hover:border-indigo-600 hover:shadow-sm slide_active:border-indigo-600">
                        <div class="flex items-center justify-center h-full">
                            <img src="../assets/images/galeries/13.jpg" loading="lazy"  class="w-auto max-h-full">
                        </div>
                    </div>
                    <div class="h-64 swiper-slide md:h-96">
                        <div
                            class="flex items-center justify-center w-full h-full p-6 mx-auto transition-all duration-500 bg-white border border-gray-300 border-solid rounded-xl hover:border-indigo-600 hover:shadow-sm slide_active:border-indigo-600">
                            <img src="../assets/images/galeries/5.png" loading="lazy"  class="w-auto max-h-full">
                        </div>
                    </div>

                    <div class="h-64 swiper-slide md:h-96">
                        <div
                            class="flex items-center justify-center w-full h-full p-6 mx-auto transition-all duration-500 bg-white border border-gray-300 border-solid rounded-xl hover:border-indigo-600 hover:shadow-sm slide_active:border-indigo-600">
                            <img src="../assets/images/galeries/6.png" loading="lazy"  class="w-auto max-h-full">
                        </div>
                    </div>

                    <div class="h-64 swiper-slide md:h-96">
                        <div
                            class="flex items-center justify-center w-full h-full p-6 mx-auto transition-all duration-500 bg-white border border-gray-300 border-solid rounded-xl hover:border-indigo-600 hover:shadow-sm slide_active:border-indigo-600">
                            <img src="../assets/images/galeries/7.png" loading="lazy"  class="w-auto max-h-full">
                        </div>
                    </div>

                    <div class="h-64 swiper-slide md:h-96">
                        <div
                            class="flex items-center justify-center w-full h-full p-6 mx-auto transition-all duration-500 bg-white border border-gray-300 border-solid rounded-xl hover:border-indigo-600 hover:shadow-sm slide_active:border-indigo-600">
                            <img src="../assets/images/galeries/12.jpg" loading="lazy"  class="w-auto max-h-full">
                        </div>
                    </div>

                    <div class="h-64 swiper-slide md:h-96">
                        <div
                            class="flex items-center justify-center w-full h-full p-6 mx-auto transition-all duration-500 bg-white border border-gray-300 border-solid rounded-xl hover:border-indigo-600 hover:shadow-sm slide_active:border-indigo-600">
                            <img src="../assets/images/galeries/11.jpg" loading="lazy"  class="w-auto max-h-full">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!--Galerie   section -->


    <!--start vision -->
    <div class="grid grid-cols-1 gap-8 py-24 bg-white lg:grid-cols-2 " id="vision">
        <div class="px-6 lg:px-8 ">
            <img class="rounded-md shadow-xl lg:sticky lg:top-40 lg:ml-4" loading="lazy"  src="../assets/images/diana-profile-1.png"
                alt="coing-logo" />
        </div>

        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="max-w-2xl mx-auto lg:text-center">

                <h2
                    class="mb-4 text-3xl font-extrabold tracking-tight lg:text-6xl text-salt_rivers-300 "><!--dark:text-white-->
                    Ma vision pour la COING</h2>
                <p class="mt-4 text-base font-bold tracking-tight text-gray-900 lg:text-2xl sm:text-xl">Mes priorités
                    reposent sur trois axes principaux </p>
                <p class="mt-6 text-lg font-semibold leading-8 text-gray-600 lg:text-2xl">J'aspire à faire de la COING
                    une force
                    motrice pour la Francophonie, en axant mon action sur trois piliers : Propositions concrètes et
                    opportunités - Représentation efficace et synergies - Ancrage dans la société civile francophone.
                </p>
                <div class="mt-6">

                    <p class="mt-6 font-bold tracking-tight text-center lg:text-2xl text-dreams_spring-100 sm:text-xl">
                        1.Propositions
                        concrètes
                        et opportunités </p>
                </div>

            </div>

            <div class="max-w-2xl mx-auto mt-16 sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">

                    <div class="relative pl-16">
                        <dt class="text-base font-bold leading-7 text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 bg-indigo-600 rounded-lg">
                                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>

                            </div>
                            Forum de consultation régulière
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Instaurer des forums trimestriels de
                            consultation avec les membres de COING pour aligner les
                            initiatives de la société civile avec la nouvelle programmation 2024-2027 de l’OIF
                        </dd>
                    </div>

                    <div class="relative pl-16">
                        <dt class="text-base font-bold leading-7 text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 bg-indigo-600 rounded-lg">
                                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </div>
                            Mécanisme de suivi et évaluation
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Mettre en place un système de suivi et
                            d’évaluation des projets pour mesurer l'impact et ajuster les actions en fonction des
                            résultats obtenus.</dd>
                    </div>

                    <div class="relative pl-16">
                        <dt class="text-base font-bold leading-7 text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 bg-indigo-600 rounded-lg">
                                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </div>
                            Initiatives pilotes
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Lancer des projets pilotes dans divers
                            domaines prioritaires (Langue française, éducation et formation, développement durable,
                            numérique, économie) pour démontrer l'efficacité des approches proposées et obtenir des
                            financements supplémentaires.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-bold leading-7 text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 bg-indigo-600 rounded-lg">
                                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </div>
                            Crowdsourcing pour l'Innovation
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Mettre en place une plateforme de
                            crowdsourcing, inspirée par des initiatives comme UpLink du Forum économique mondial, pour
                            identifier et soutenir les solutions innovantes aux défis sociaux et environnementaux.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-bold leading-7 text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 bg-indigo-600 rounded-lg">
                                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </div>
                            Organiser Le Grand Prix de la Société civile francophone pour encourager les innovations les
                            plus
                            audacieuses.
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600"></dd>
                    </div>
                </dl>


            </div>

            <div class="flex justify-center">
                <button @click="showMorevision = !showMorevision" x-show="!showMorevision"
                    class="px-4 py-2 font-bold text-white bg-indigo-600 rounded marker:hover:bg-indigo-800">
                    Voir plus
                </button>
                <button @click="showMorevision = !showMorevision" x-show="showMorevision"
                    class="px-4 py-2 font-bold text-white bg-indigo-600 rounded hover:bg-indigo-800">
                    Voir Moins
                </button>
            </div>

            <div id="showMore" x-show="showMorevision"
                x-transition:enter="transition motion-reduce:transition-none ease-out duration-300"
                x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0"
                x-transition:leave="transition motion-reduce:transition-none ease-out duration-300"
                x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full">

                <div class="max-w-2xl mx-auto lg:text-center">
                    <p class="mt-2 font-bold tracking-tight text-center text-dreams_spring-100 sm:text-xl">
                        2.Représentation
                        efficace et synergies </p>
                </div>


                <div class="max-w-2xl mx-auto mt-16 sm:mt-20 lg:mt-24 lg:max-w-4xl">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">

                        <div class="relative pl-16">
                            <dt class="text-base font-bold leading-7 text-gray-900">
                                <div
                                    class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 bg-indigo-600 rounded-lg">
                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>

                                </div>
                                Plateforme de partenariats
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">Créer une plateforme en ligne pour
                                faciliter
                                la mise en relation des OSC avec des partenaires potentiels, des bailleurs de fonds, des
                                institutions académiques et des organisations socioprofessionnelles.
                            </dd>
                        </div>

                        <div class="relative pl-16">
                            <dt class="text-base font-bold leading-7 text-gray-900">
                                <div
                                    class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 bg-indigo-600 rounded-lg">
                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </div>
                                Visibilité internationale
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">Organiser des événements annuels pour
                                mettre en lumière les projets réussis des membres, avec la participation des médias
                                internationaux francophones pour augmenter la visibilité et l'impact.</dd>
                        </div>

                        <div class="relative pl-16">
                            <dt class="text-base font-bold leading-7 text-gray-900">
                                <div
                                    class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 bg-indigo-600 rounded-lg">
                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </div>
                                Consortiums de projets
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">Encourager la formation de consortiums
                                entre OSC pour soumettre des projets communs, augmentant ainsi les chances de
                                financement et l'impact collectif.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-bold leading-7 text-gray-900">
                                <div
                                    class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 bg-indigo-600 rounded-lg">
                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </div>
                                Projets de Mentorat
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">Inspiré par des programmes tels que
                                MyKindaFuture au Royaume-Uni, développer une plateforme de mentorat numérique pour aider
                                les jeunes et les professionnels à développer leurs compétences grâce à des mentors
                                expérimentés. En tirant avantage des outils de l’intelligence artificielle.
                            </dd>
                        </div>
                    </dl>
                </div>



                <div class="max-w-2xl mx-auto lg:text-center">
                    <p class="mt-2 font-bold tracking-tight text-center text-dreams_spring-100 sm:text-xl">3.Ancrage
                        dans la
                        Société Civile Francophone </p>
                </div>


                <div class="max-w-2xl mx-auto mt-16 sm:mt-20 lg:mt-24 lg:max-w-4xl">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">

                        <div class="relative pl-16">
                            <dt class="text-base font-bold leading-7 text-gray-900">
                                <div
                                    class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 bg-indigo-600 rounded-lg">
                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>

                                </div>
                                Programme de partenariats locaux
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600"> Identifier et développer des
                                partenariats stratégiques avec des OSC locales pour renforcer les capacités et maximiser
                                l’impact des actions menées.
                            </dd>
                        </div>

                        <div class="relative pl-16">
                            <dt class="text-base font-bold leading-7 text-gray-900">
                                <div
                                    class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 bg-indigo-600 rounded-lg">
                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </div>
                                Échanges de bonnes pratiques
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">Mettre en place des ateliers régionaux
                                pour partager les meilleures pratiques et favoriser l’innovation entre les OSC des pays
                                francophones.</dd>
                        </div>

                        <div class="relative pl-16">
                            <dt class="text-base font-bold leading-7 text-gray-900">
                                <div
                                    class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 bg-indigo-600 rounded-lg">
                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </div>
                                Sessions de formation
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">Organiser des formations régulières sur
                                des thématiques clés (montage de projet, recherche de financement, gestion de projets )
                                pour renforcer les compétences des OSC locales.</dd>
                        </div>
                    </dl>
                </div>


                <div class="max-w-2xl mx-auto lg:text-center">
                    <p class="mt-2 font-bold tracking-tight text-center text-gray-900 sm:text-xl">Activités continues
                    </p>
                </div>


                <div class="max-w-2xl mx-auto mt-16 sm:mt-20 lg:mt-24 lg:max-w-4xl">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">

                        <div class="relative pl-16">
                            <dt class="text-base font-bold leading-7 text-gray-900">
                                <div
                                    class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 bg-indigo-600 rounded-lg">
                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>

                                </div>
                                Forums et consultations trimestriels
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600"> Maintenir des forums et des
                                consultations réguliers pour assurer un alignement continu avec les priorités de l'OIF
                                et les besoins des membres</dd>
                        </div>

                        <div class="relative pl-16">
                            <dt class="text-base font-bold leading-7 text-gray-900">
                                <div
                                    class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 bg-indigo-600 rounded-lg">
                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </div>
                                Formation et renforcement des capacités continu
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">Mettre à jour et fournir régulièrement
                                des sessions de formation sur des sujets pertinents pour garantir que les OSC sont bien
                                équipées pour gérer et soutenir leurs projets.</dd>
                        </div>

                        <div class="relative pl-16">
                            <dt class="text-base font-bold leading-7 text-gray-900">
                                <div
                                    class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 bg-indigo-600 rounded-lg">
                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </div>
                                Communication et sensibilisation
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">Maintenir une stratégie de communication
                                active pour informer et engager les parties prenantes. Utiliser divers canaux
                                médiatiques pour promouvoir la transparence et la visibilité des activités de la COING.
                            </dd>
                        </div>
                    </dl>
                </div>

            </div>


        </div>
    </div>
    <!--End vision -->


    <!--realisation   section -->
    <section class="bg-white " id="realisation"><!--dark:bg-gray-900-->
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
            <div class="max-w-screen-sm mx-auto mb-8 text-center lg:mb-16">
                <h2
                    class="mb-4 text-3xl font-extrabold tracking-tight lg:text-6xl text-salt_rivers-300 dark:text-white">
                    Réalisations </h2>
                <p class="text-gray-500 font-semi-bold sm:text-xl dark:text-gray-400">Guidée par les valeurs de
                    coopération,
                    de solidarité et de justice, Diane Ndeuna s'engage à défendre les intérêts de la société civile
                    francophone. Elle croit en une Francophonie qui valorise chaque voix et qui agit pour le bien
                    commun, dans une démarche inclusive et consensuelle.</p>
            </div>
            <div class="grid gap-8 lg:grid-cols-2">

                <article
                    class="p-6 bg-white border border-gray-200 rounded-lg shadow-md "><!--dark:bg-gray-800 dark:border-gray-700-->
                    <div class="flex items-center justify-between mb-5 text-gray-500">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            Réalisation
                        </span>
                        <span class="text-sm"></span>
                    </div>
                    <h2 class="mb-2 text-xl font-bold tracking-tight text-gray-900 "><!--dark:text-white-->
                        <a
                            href="javascript:void(0);">Cofondation et structuration de la lettre d’information de la
                            COING (février-juin
                            2023)</a></h2>
                    <p class="mb-5 font-light text-gray-500 "> &nbsp;</p><!--dark:text-gray-400-->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <img class="rounded-full w-7 h-7" loading="lazy"  src="../assets/images/logo-eden-africa-01.png"
                                alt="Logo eden afica" />
                            <span class="font-medium "><!--dark:text-white-->

                            </span>
                        </div>
                        <a href="javascript:void(0);"
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

                <article
                    class="p-6 bg-white border border-gray-200 rounded-lg shadow-md "><!--dark:bg-gray-800 dark:border-gray-700-->
                    <div class="flex items-center justify-between mb-5 text-gray-500">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded "><!--dark:bg-primary-200 dark:text-primary-800-->
                            <!-- <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                </path>
                            </svg> -->
                            Réalisation
                        </span>
                        <span class="text-sm"></span>
                    </div>
                    <h2 class="mb-2 text-xl font-bold tracking-tight text-gray-900 "><!--dark:text-white-->
                        <a
                            href="javascript:void(0);">
                            Proposition de l’élaboration d’une cartographie des initiatives et expertises des
                            organisations accréditées, présentée à l’OIF en janvier 2023</a></h2>
                    <p class="mb-5 font-light text-gray-500 "> &nbsp;</p><!--dark:text-gray-400-->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <img class="rounded-full w-7 h-7" loading="lazy"  src="../assets/images/logo-eden-africa-01.png"
                                alt="Logo eden afica" />
                            <span class="font-medium "><!--dark:text-white-->

                            </span>
                        </div>
                        <a href="#"
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

                <article
                    class="p-6 bg-white border border-gray-200 rounded-lg shadow-md "><!--dark:bg-gray-800 dark:border-gray-700-->
                    <div class="flex items-center justify-between mb-5 text-gray-500">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded "><!--dark:bg-primary-200 dark:text-primary-800-->
                            Réalisation
                        </span>
                        <span class="text-sm"></span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "><!--dark:text-white-->
                        <a
                            href="javascript:void(0);">
                            Organisation de réunions et soirées de réseautage pour favoriser les synergies entre les
                            OSC</a></h2>
                    <p class="mb-5 font-light text-gray-500 "><!--dark:text-gray-400-->
                         &nbsp; &nbsp;</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <img class="rounded-full w-7 h-7" loading="lazy"  src="../assets/images/logo-eden-africa-01.png"
                                alt="Bonnie Green avatar" />
                            <span class="font-medium "><!--dark:text-white-->

                            </span>
                        </div>
                        <a href="#"
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


                <article
                    class="p-6 bg-white border border-gray-200 rounded-lg shadow-md "><!--dark:bg-gray-800 dark:border-gray-700-->
                    <div class="flex items-center justify-between mb-5 text-gray-500">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded "><!--dark:bg-primary-200 dark:text-primary-800-->
                            Réalisation
                        </span>
                        <span class="text-sm"></span>
                    </div>
                    <h2 class="mb-2 text-xl font-bold tracking-tight text-gray-900 "><!--dark:text-white-->
                        <a
                            href="javascript:void(0);">
                            Mobilisation des OSC aux Jeux de la Francophonie 2023 à Kinshasa</a></h2>
                    <p class="mb-5 font-light text-gray-500 "> &nbsp; &nbsp;</p><!--dark:text-gray-400-->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <img class="rounded-full w-7 h-7" loading="lazy"  src="../assets/images/logo-eden-africa-01.png"
                                alt="Logo Eden africa" />
                            <span class="font-medium "><!--dark:text-white-->

                            </span>
                        </div>
                        <a href="#"
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
    </section>
    <!--End realisation section -->

    <!--start Actualité-->
    <section class="bg-white " id="actu"><!--dark:bg-gray-900-->
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
            <div class="max-w-screen-sm mx-auto mb-8 text-center lg:mb-16">
                <h2
                    class="mb-4 text-3xl font-extrabold tracking-tight lg:text-6xl text-salt_rivers-300 "><!--dark:text-white-->
                    Actualités</h2>
                <p class="font-bold text-gray-500 sm:text-xl "><!--dark:text-gray-400-->
                    Actualités de la Campagne de Diane
                    Ndeuna.</p>
            </div>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <article
                            class="p-6 bg-white border border-gray-200 rounded-lg shadow-md "><!--dark:bg-gray-800 dark:border-gray-700-->
                            <div class="flex items-center justify-between mb-5 text-gray-500">
                                <span
                                    class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded "><!--dark:bg-primary-200 dark:text-primary-800-->
                                    Actualité
                                </span>
                                <span class="text-sm">10 août 2024</span>
                            </div>
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "><!--dark:text-white-->
                                <a
                                    href="#">Annonce
                                    officielle de soutien du Réseau Francophone pour l'Égalité Femme-Homme</a></h2>
                            <p class="mb-5 font-light text-gray-500 "><!--dark:text-gray-400-->
                                Le Réseau Francophone pour
                                l'Égalité
                                Femme-Homme a officiellement annoncé son soutien à la candidature de Diane Ndeuna pour
                                la
                                présidence de la COING. Dans leur déclaration, ils ont salué son engagement en faveur de
                                l'égalité des sexes et son leadership exemplaire au sein de la Francophonie. Ce soutien
                                renforce
                                la crédibilité de Diane en tant que candidate capable de défendre les valeurs
                                d'inclusion et de
                                justice sociale</p>
                            <div class="flex items-center justify-between">

                                <a href="javascript:void(0);"
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
                    <div class="swiper-slide ">
                        <article
                            class="p-6 bg-white border border-gray-200 rounded-lg shadow-md "><!--dark:bg-gray-800 dark:border-gray-700-->
                            <div class="flex items-center justify-between mb-5 text-gray-500">
                                <span
                                    class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded "><!--dark:bg-primary-200 dark:text-primary-800-->
                                    Actualité
                                </span>
                                <span class="text-sm">10 Août 2024</span>
                            </div>
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "><!--dark:text-white-->
                                <a
                                    href="#">Annonce
                                    officielle de soutien du Réseau Francophone pour l'Égalité Femme-Homme</a></h2>
                            <p class="mb-5 font-light text-gray-500 "><!--dark:text-gray-400-->
                                Le Réseau Francophone pour
                                l'Égalité
                                Femme-Homme a officiellement annoncé son soutien à la candidature de Diane Ndeuna pour
                                la
                                présidence de la COING. Dans leur déclaration, ils ont salué son engagement en faveur de
                                l'égalité des sexes et son leadership exemplaire au sein de la Francophonie. Ce soutien
                                renforce
                                la crédibilité de Diane en tant que candidate capable de défendre les valeurs
                                d'inclusion et de
                                justice sociale</p>
                            <div class="flex items-center justify-between">

                                <a href="javascript:void(0);"
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
                    <div class="swiper-slide ">
                        <article
                            class="p-6 bg-white border border-gray-200 rounded-lg shadow-md "><!--dark:bg-gray-800 dark:border-gray-700-->
                            <div class="flex items-center justify-between mb-5 text-gray-500">
                                <span
                                    class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                    Actualité
                                </span>
                                <span class="text-sm">12 Août 2024</span>
                            </div>
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "><!--dark:text-white-->
                                <a
                                    href="#">Diane Ndeuna rencontre des OSC d’Afrique Centrale</a></h2>
                            <p class="mb-5 font-light text-gray-500 "><!--dark:text-gray-400-->
                                Diane Ndeuna a récemment
                                rencontré plusieurs Organisations de la Société Civile (OSC) locales en Afrique Centrale
                                pour discuter des défis qu'elles rencontrent et des moyens par lesquels la COING
                                pourrait mieux les soutenir. Ces échanges ont permis de renforcer sa compréhension des
                                besoins de terrain et de nourrir ses propositions pour un soutien accru et une meilleure
                                visibilité des OSC francophones.</p>
                            <div class="flex items-center justify-between">

                                <a href="javascript:void(0);"
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

                    <div class="swiper-slide ">
                        <article
                            class="p-6 bg-white border border-gray-200 rounded-lg shadow-md "><!--dark:bg-gray-800 dark:border-gray-700-->
                            <div class="flex items-center justify-between mb-5 text-gray-500">
                                <span
                                    class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                    Actualité
                                </span>
                                <span class="text-sm">15 Août 2024</span>
                            </div>
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "><!--dark:text-white-->
                                <a
                                    href="#">Réunion virtuelle avec les électeurs de la COING</a></h2>
                            <p class="mb-5 font-light text-gray-500 "><!--dark:text-gray-400-->Diane Ndeuna organisera une
                                réunion virtuelle avec les électeurs de la COING le 20 août 2024. Cette session sera
                                l'occasion pour les membres de poser leurs questions directement à Diane, de mieux
                                comprendre son programme, et de discuter des priorités pour l'avenir de la COING. Les
                                détails pour participer à cette réunion seront envoyés par e-mail aux membres inscrits.
                            </p>
                            <div class="flex items-center justify-between">

                                <a href="javascript:void(0);"
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


                    <div class="swiper-slide ">
                        <article
                            class="p-6 bg-white border border-gray-200 rounded-lg shadow-md "><!--dark:bg-gray-800 dark:border-gray-700-->
                            <div class="flex items-center justify-between mb-5 text-gray-500">
                                <span
                                    class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded "><!--dark:bg-primary-200 dark:text-primary-800-->
                                    Actualité
                                </span>
                                <span class="text-sm">14 Août 2024</span>
                            </div>
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "><!--dark:text-white--><a
                                    href="#">Témoignage de soutien de l'ancienne présidente de la COING</a></h2>
                            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">L'ancienne présidente de la
                                COING (2018-2022) a exprimé son soutien pour Diane Ndeuna dans une déclaration publique,
                                soulignant la capacité de Diane à obtenir des résultats concrets même sans budget dédié.
                                Elle a également mentionné son potentiel pour porter la COING à un nouveau niveau
                                d'impact au sein de la Francophonie.
                            </p>
                            <div class="flex items-center justify-between">

                                <a href="javascript:void(0);"
                                    class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
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

                    <div class="swiper-slide ">
                        <article
                            class="p-6 bg-white border border-gray-200 rounded-lg shadow-md "><!--dark:bg-gray-800 dark:border-gray-700-->
                            <div class="flex items-center justify-between mb-5 text-gray-500">
                                <span
                                    class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                    Actualité
                                </span>
                                <span class="text-sm">16 Août 2024</span>
                            </div>
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "><!--dark:text-white--><a
                                    href="#">Participation de Diane Ndeuna à un webinaire sur l'inclusion numérique</a>
                            </h2>
                            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Diane Ndeuna a participé à un
                                webinaire organisé par la Commission C sur l'inclusion numérique des femmes migrantes.
                                Lors de cet événement, elle a partagé ses perspectives sur l'importance de renforcer les
                                capacités numériques des OSC et de créer des opportunités pour les femmes dans le
                                secteur numérique. Cette intervention a été largement saluée par les participants pour
                                sa pertinence et son engagement.
                            </p>
                            <div class="flex items-center justify-between">

                                <a href="javascript:void(0);"
                                    class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
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
                    class="block mb-2 text-3xl font-extrabold text-center lg:text-6xl text-salt_rivers-300">Témoignages
                </span>
                <h2 class="text-xl font-bold text-center text-gray-900 ">Découvrez les témoignages de soutiens
                    influents et d'électeurs convaincus par la vision de Diane.</h2>
            </div>
            <!--Slider wrapper-->

            <div class="swiper mySwiper">
                <div class="swiper-wrapper w-max">
                    <div class="swiper-slide">
                        <div
                            class="w-full p-6 mx-auto transition-all duration-500 bg-white border border-gray-300 border-solid group rounded-xl hover:border-indigo-600 hover:shadow-sm slide_active:border-indigo-600">
                            <div class="">
                                <div class="flex items-center gap-2 transition-all duration-500 mb-7 text-amber-500 ">
                                    <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                            fill="currentColor" />
                                    </svg>
                                    <!-- <span class="text-base font-semibold text-indigo-600">4.9</span> -->
                                </div>
                                <p
                                    class="pb-8 text-base leading-6 text-gray-600 transition-all duration-500 group-hover:text-gray-800 slide_active:text-gray-800">
                                    Diane Ndeuna est une force motrice au sein de la COING. J'ai eu l'opportunité de
                                    travailler avec elle lors de mon mandat, et j'ai été impressionnée par sa capacité à
                                    mobiliser des ressources et à mener des projets concrets sans budget dédié. Diane a
                                    démontré qu'elle peut transformer des défis en opportunités, et je suis convaincue
                                    qu'elle saura porter la COING vers de nouveaux sommets."
                                </p>
                            </div>
                            <div class="flex items-center gap-5 pt-5 border-t border-gray-200 border-solid">
                                <div class="block">
                                    <h5 class="mb-1 font-medium text-gray-900 transition-all duration-500"></h5>
                                    <span class="text-sm leading-4 text-gray-500">Ancienne Présidente de la COING
                                        (2018-2022) </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div
                            class="w-full p-6 mx-auto transition-all duration-500 bg-white border border-gray-300 border-solid group rounded-xl hover:border-indigo-600 hover:shadow-sm slide_active:border-indigo-600">
                            <div class="">
                                <div class="flex items-center gap-2 transition-all duration-500 mb-7 text-amber-500 ">
                                    <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                            fill="currentColor" />
                                    </svg>
                                    <!-- <span class="text-base font-semibold text-indigo-600">4.9</span> -->
                                </div>
                                <p
                                    class="pb-8 text-base leading-6 text-gray-600 transition-all duration-500 group-hover:text-gray-800 slide_active:text-gray-800">
                                    Le Réseau Francophone pour l'Égalité Femme-Homme soutient pleinement la candidature
                                    de Diane Ndeuna. Son engagement indéfectible pour l'égalité des sexes et l'inclusion
                                    est exemplaire. Diane incarne les valeurs que nous défendons et nous croyons
                                    fermement qu'elle est la meilleure candidate pour faire progresser ces idéaux au
                                    sein de la COING
                                </p>
                            </div>
                            <div class="flex items-center gap-5 pt-5 border-t border-gray-200 border-solid">
                                <div class="block">
                                    <h5 class="mb-1 font-medium text-gray-900 transition-all duration-500"></h5>
                                    <span class="text-sm leading-4 text-gray-500">Réseau Francophone pour l'Égalité
                                        Femme-Homme </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div
                            class="w-full p-6 mx-auto transition-all duration-500 bg-white border border-gray-300 border-solid group rounded-xl hover:border-indigo-600 hover:shadow-sm slide_active:border-indigo-600">
                            <div class="">
                                <div class="flex items-center gap-2 transition-all duration-500 mb-7 text-amber-500 ">
                                    <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                            fill="currentColor" />
                                    </svg>
                                    <!-- <span class="text-base font-semibold text-indigo-600">4.9</span> -->
                                </div>
                                <p
                                    class="pb-8 text-base leading-6 text-gray-600 transition-all duration-500 group-hover:text-gray-800 slide_active:text-gray-800">
                                    "Avec Diane Ndeuna à la présidence de la COING, nous avons une véritable chance de
                                    renforcer les actions pour le développement durable dans la Francophonie. Son
                                    leadership, sa vision innovante et son engagement en faveur de l'environnement sont
                                    sans faille. Diane est la candidate dont nous avons besoin pour faire avancer la
                                    Francophonie vers un avenir plus vert et plus durable."
                                </p>
                            </div>
                            <div class="flex items-center gap-5 pt-5 border-t border-gray-200 border-solid">
                                <div class="block">
                                    <h5 class="mb-1 font-medium text-gray-900 transition-all duration-500"></h5>
                                    <span class="text-sm leading-4 text-gray-500">Stéphane Pouffary </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div
                            class="w-full p-6 mx-auto transition-all duration-500 bg-white border border-gray-300 border-solid group rounded-xl hover:border-indigo-600 hover:shadow-sm slide_active:border-indigo-600">
                            <div class="">
                                <div class="flex items-center gap-2 transition-all duration-500 mb-7 text-amber-500 ">
                                    <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                            fill="currentColor" />
                                    </svg>
                                    <!-- <span class="text-base font-semibold text-indigo-600">4.9</span> -->
                                </div>
                                <p
                                    class="pb-8 text-base leading-6 text-gray-600 transition-all duration-500 group-hover:text-gray-800 slide_active:text-gray-800">
                                    "Diane Ndeuna a toujours su défendre avec ardeur les causes qui lui tiennent à cœur.
                                    Son travail avec les organisations de la société civile démontre non seulement son
                                    expertise, mais aussi sa capacité à fédérer et à mener des projets qui font une
                                    réelle différence. Son engagement pour la préservation et la promotion du patrimoine
                                    immatériel de la Francophonie est remarquable et je suis convaincue qu'elle
                                    continuera à faire avancer ces enjeux cruciaux à la présidence de la COING."
                                </p>
                            </div>
                            <div class="flex items-center gap-5 pt-5 border-t border-gray-200 border-solid">
                                <div class="block">
                                    <h5 class="mb-1 font-medium text-gray-900 transition-all duration-500"></h5>
                                    <span class="text-sm leading-4 text-gray-500">Ndeye Marie Fall </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div
                            class="w-full p-6 mx-auto transition-all duration-500 bg-white border border-gray-300 border-solid group rounded-xl hover:border-indigo-600 hover:shadow-sm slide_active:border-indigo-600">
                            <div class="">
                                <div class="flex items-center gap-2 transition-all duration-500 mb-7 text-amber-500 ">
                                    <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                            fill="currentColor" />
                                    </svg>
                                    <!-- <span class="text-base font-semibold text-indigo-600">4.9</span> -->
                                </div>
                                <p
                                    class="pb-8 text-base leading-6 text-gray-600 transition-all duration-500 group-hover:text-gray-800 slide_active:text-gray-800">
                                    "Diane a su montrer, à travers ses actions et ses engagements, qu'elle est à
                                    l'écoute des besoins des OSC. Elle comprend les défis que nous rencontrons sur le
                                    terrain et propose des solutions concrètes et adaptées. Je suis confiant qu'avec
                                    Diane à la présidence de la COING, nos voix seront entendues et nos efforts
                                    reconnus."
                                </p>
                            </div>
                            <div class="flex items-center gap-5 pt-5 border-t border-gray-200 border-solid">
                                <div class="block">
                                    <h5 class="mb-1 font-medium text-gray-900 transition-all duration-500"></h5>
                                    <span class="text-sm leading-4 text-gray-500">Responsable d'une ONG nationale
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!--End Temoingnages -->


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