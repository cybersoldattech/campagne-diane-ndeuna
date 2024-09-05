<?php $currentFile = basename($_SERVER['PHP_SELF']); ?>

<header>
    <nav x-data="{ mobileMenuIsOpen: false }" @click.away="mobileMenuIsOpen = false"
        class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 "><!--dark:bg-gray-800-->

        <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto">

            <a href="index.php" class="flex items-center">
                <img src="../assets/images/logo-eden-africa-01.png" class="h-10 mr-3 sm:h-24" alt="Eden-Africa" />
                <span class="self-center text-xl font-semibold whitespace-nowrap ">&nbsp; &nbsp;
                    &nbsp;</span><!--dark:text-white-->
            </a>
            <div class="flex items-center lg:order-2 lg:hidden">

                <button @click="mobileMenuIsOpen = !mobileMenuIsOpen" data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm font-extrabold text-blue-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                    aria-controls="mobile-menu-2"
                    aria-expanded="false"><!--dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600-->
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>




            <!-- Desktop-->
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">

                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="index.php"
                            class="block py-2 pl-3 pr-4 font-semibold text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">
                            <!--dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700-->

                            Accueil</a>
                    </li>
                    <li>
                        <a href="index.php#bio"
                            class="block py-2 pl-3 pr-4 font-semibold text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Biographie</a><!--dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700-->
                    </li>
                    <li>
                        <a href="../assets/files/programme.pdf" target="_blank"
                            class="block py-2 pl-3 pr-4 font-semibold text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Programme</a><!--dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700-->
                    </li>
                    <li>
                        <a href="faq.php"
                            class="block py-2 pl-3 pr-4 font-semibold text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">FAQ</a><!--dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700-->
                    </li>
                    <li>
                        <a href="contact.php"
                            class="block py-2 pl-3 pr-4 font-semibold text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Contact</a>
                    </li>

                </ul>

                <a href="javscript:void(0);" class="ml-32">
                    <img src="../assets/images/logo/logo.png" loading="lazy" alt="coing-logo"
                        class="h-10 mr-3 sm:h-24" />

                </a>
            </div>


            <!--Mobile-->

            <ul x-cloak x-show="mobileMenuIsOpen" style="display:none;"
                x-transition:enter="transition motion-reduce:transition-none ease-out duration-300"
                x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0"
                x-transition:leave="transition motion-reduce:transition-none ease-out duration-300"
                x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full" id="mobileMenu"
                class="fixed inset-x-0 top-0 z-50 flex flex-col px-6 pt-20 pb-6 overflow-y-auto bg-blue-600 border-b divide-y max-h-svh divide-corn-500 rounded-b-xl border-corn-300md:hidden">
                <!-- dark:divide-slate-700 dark:border-slate-700 dark:bg-slate-800 -->
                <button @click="mobileMenuIsOpen = !mobileMenuIsOpen" x-show="mobileMenuIsOpen" type="button"
                    class="absolute top-0 right-0">
                    <span class="sr-only">Dismiss</span>
                    <svg class="text-corn-600 w-7 h-7" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path
                            d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z">
                        </path>
                    </svg>
                </button>

                <li @click="mobileMenuIsOpen =!mobileMenuIsOpen">
                    <a href="index.php"
                        class="block py-2 pr-4 pl-3 <?= $currentFile == 'index.php' ? 'text-corn-500' : 'text-white' ?> border-b border-corn-300  font-bold lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 ">Accueil</a><!--dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700-->
                </li>
                <li @click="mobileMenuIsOpen =!mobileMenuIsOpen">
                    <a href="index.php#bio"
                        class="block py-2 pr-4 pl-3 <?= $currentFile == 'index.php#bio' ? 'text-corn-500' : 'text-white' ?> border-b border-corn-300 lg:hover:bg-transparent font-bold lg:border-0 lg:hover:text-primary-700 lg:p-0 ">Biographie</a><!--dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700-->
                </li>
                <li @click="mobileMenuIsOpen =!mobileMenuIsOpen">
                    <a href="../assets/files/programme.pdf" target="_blank"
                        class="block py-2 pr-4 pl-3 <?= $currentFile == 'calendar.php' ? 'text-corn-500' : 'text-white' ?> border-b border-corn-300 lg:hover:bg-transparent font-bold lg:border-0 lg:hover:text-primary-700 lg:p-0 ">Programme</a><!--dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700-->
                </li>

                <li @click="mobileMenuIsOpen =!mobileMenuIsOpen">
                    <a href="calendar.php" target="_blank"
                        class="block py-2 pr-4 pl-3 <?= $currentFile == 'calendar.php' ? 'text-corn-700' : 'text-white' ?> border-b border-corn-300 lg:hover:bg-transparent font-bold lg:border-0 lg:hover:text-primary-700 lg:p-0 ">Calendrier</a><!--dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700-->
                </li>
                <li @click="mobileMenuIsOpen =!mobileMenuIsOpen">

                    <a href="faq.php"
                        class="block py-2 pr-4 pl-3 <?= $currentFile == 'faq.php' ? 'text-corn-500' : 'text-white' ?> border-b border-corn-300 lg:hover:bg-transparent font-bold lg:border-0 lg:hover:text-primary-700 lg:p-0 ">FAQ</a><!--dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700-->
                </li>
                <li class="flex" @click="mobileMenuIsOpen =!mobileMenuIsOpen">
                    <a href="contact.php"
                        class="block py-2 pr-4 pl-3 <?= $currentFile == 'contact.php' ? 'text-corn-500' : 'text-white' ?> border-b border-corn-300  lg:hover:bg-transparent font-bold lg:border-0 lg:hover:text-primary-700 lg:p-0 "><!--dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700-->
                        Contact</a>
                </li>
            </ul>

            <!--EndMobile-->

        </div>

    </nav>
</header>