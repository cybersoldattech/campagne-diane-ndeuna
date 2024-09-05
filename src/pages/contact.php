<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>
    <link href="../assets/styles/output.css" rel="stylesheet">
    <?php include "../sections/meta_header.php" ?>
    <title>Campagne:Contact</title>
</head>

<body class="bg-white "><!--dark:bg-gray-900-->

    <?php include "../sections/banner.php" ?>
    <?php include "../sections/header.php" ?>

    <div class="px-6 bg-white sm:py-32 lg:px-8">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
            aria-hidden="true">
            <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Formulaire de contact</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">Pour poser vos questions, offrir votre aide, ou simplement entrer en contact avec Diane.</p>
        </div>
        <form action="#" method="POST" class="max-w-xl mx-auto mt-16 sm:mt-20">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">Nom</label>
                    <div class="mt-2.5">
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Prénom</label>
                    <div class="mt-2.5">
                        <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
       
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                    <div class="mt-2.5">
                        <input type="email" name="email" id="email" autocomplete="email"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Téléphone</label>
                    <div class="relative mt-2.5">
                       
                        <input type="tel" name="phone-number" id="phone-number" autocomplete="tel"
                            class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                    <div class="mt-2.5">
                        <textarea name="message" id="message" rows="4"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>

            </div>
            <div class="mt-10">
                <button type="submit"
                    class="block w-full rounded-md bg-salt_rivers-800 px-3.5 py-2.5 text-center text-sm font-semibold text-black shadow-sm hover:bg-salt_rivers-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-salt_rivers-600">Envoyer</button>
            </div>
        </form>
    </div>

    <?php include "../sections/footer.php" ?>
</body>

</html>