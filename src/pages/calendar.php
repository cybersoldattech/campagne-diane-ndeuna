<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compagne-Calendar</title>    
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>
    <link href="../assets/styles/output.css" rel="stylesheet">
</head>

<body class="bg-white dark:bg-gray-900">

    <?php include "../sections/banner.php" ?>
    <?php include "../sections/header.php" ?>

    <div class="max-w-7xl mx-auto p-4 md:p-6 lg:p-8 mt-4">
        <h1 class="lg:text-6xl tracking-tight font-extrabold text-gray-900 text-3xl  mb-4">Calendrier du Programme</h1>
        <p class="mb-4 font-semibold text-lg  lg:text-2xl leading-8 text-gray-600">Pour mettre en œuvre mes priorités en tant que Présidente de la COING, un calendrier
            structuré est essentiel. Il est divisé en objectifs sur trois périodes de temps : un premier temps (0-6
            mois), un deuxième temps (6-12 mois) et une troisième période de temps (1-2 ans).</p>

        <h2 class="text-2xl font-bold mb-2">Première période de temps (0-6 mois)</h2>
        <p class="text-lg mb-4">Objectif : Établir les fondations et les actions initiales</p>

        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <h3 class="text-xl font-bold mb-2">Mois 1-2 : Consultations initiales et planification</h3>
                <ul class="list-disc mb-4">
                    <p class="mt-2 sm:mt-2">Conduire des consultations initiales avec les parties prenantes clés au sein
                        de la COING et de
                        l'OIF.</p>
                    <p class="mt-2 sm:mt-2">Former des groupes de travail pour chaque axe stratégique.</p>
                    <p class="mt-2 sm:mt-2"></p>Développer des plans de projet détaillés pour chaque initiative.</p>
                </ul>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <h3 class="text-xl font-bold mb-2">Mois 3 : Lancement du Forum de consultation</h3>
                <ul class="list-disc mb-4">
                    <p class="mt-2 sm:mt-2">Organiser le premier forum de consultation avec les membres de l'OIF pour discuter de la
                        nouvelle programmation (2024-2027).</p>
                    <p class="mt-2 sm:mt-2">Identifier les opportunités et défis immédiats.</p>
                    <p class="mt-2 sm:mt-2">Mettre en place un calendrier pour des forums réguliers (trimestriels).</p>
                </ul>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <h3 class="text-xl font-bold mb-2">Mois 4 : Mécanisme de suivi et évaluation</h3>
                <ul class="list-disc mb-4">
                    <p class="mt-2 sm:mt-2">Développer et mettre en œuvre un cadre de suivi et d'évaluation pour les projets en cours.</p>
                    <p class="mt-2 sm:mt-2">Former le personnel pertinent à l'utilisation du cadre.</p>
                    <p class="mt-2 sm:mt-2">Commencer la collecte des données de référence.</p>
                </ul>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <h3 class="text-xl font-bold mb-2">Mois 5 : Plateforme de partenariats</h3>
                <ul class="list-disc mb-4">
                    <p class="mt-2 sm:mt-2">Concevoir et lancer une plateforme en ligne pour faciliter les partenariats entre OSC, bailleurs
                        de fonds et institutions académiques.</p>
                    <p class="mt-2 sm:mt-2">Promouvoir la plateforme auprès des membres de la COING et des partenaires potentiels.</p>
                </ul>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <h3 class="text-xl font-bold mb-2">Mois 6 : Formations et ateliers initiaux</h3>
                <ul class="list-disc mb-4">
                    <p class="mt-2 sm:mt-2">Réaliser la première série d'ateliers de formation sur la gestion de projet et les stratégies de
                        financement.</p>
                    <p class="mt-2 sm:mt-2">Organiser des ateliers régionaux pour partager les meilleures pratiques et favoriser
                        l'innovation parmi les OSC.</p>
                </ul>
            </div>
        </div>

        <h2 class="text-2xl font-bold mb-2">Deuxième période de temps (6-12 mois)</h2>
        <p class="text-lg mb-4">Objectif : Mettre en Œuvre les Initiatives clés et élargir l'engagement</p>

        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <h3 class="text-xl font-bold mb-2">Mois 7-8 : Déploiement des projets pilotes</h3>
                <ul class="list-disc mb-4">
                    <p class="mt-2 sm:mt-2">Lancer des projets pilotes dans des domaines sélectionnés tels que l'éducation, le développement
                        durable et la transformation numérique.</p>
                    <p class="mt-2 sm:mt-2">Assurer l'alignement des projets avec la nouvelle programmation de l'OIF.</p>
                </ul>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <h3 class="text-xl font-bold mb-2">Mois 9 : Consortiums pour les Soumissions de Projets</h3>
                <ul class="list-disc mb-4">
                    <p class="mt-2 sm:mt-2">Encourager la formation de consortiums entre OSC pour des soumissions de projets communs.</p>
                    <p class="mt-2 sm:mt-2">Fournir un soutien à la préparation et à la soumission de propositions de projets en consortium.
                    </p>
                </ul>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <h3 class="text-xl font-bold mb-2">Mois 10 : Visibilité et engagement médias</h3>
                <ul class="list-disc mb-4">
                    <p class="mt-2 sm:mt-2">Organiser un événement annuel pour mettre en avant les projets réussis et les innovations.</p>
                    <p class="mt-2 sm:mt-2">Collaborer avec les médias internationaux pour promouvoir les initiatives et les réalisations de
                        la COING.</p>
                </ul>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <h3 class="text-xl font-bold mb-2">Mois 11 : Évaluation des progrès Initiaux</h3>
                <ul class="list-disc mb-4">
                    <p class="mt-2 sm:mt-2">Réaliser une revue complète des progrès accomplis au cours des six premiers mois.</p>
                    <p class="mt-2 sm:mt-2">Ajuster les stratégies et les plans en fonction des retours et des résultats initiaux.</p>
                </ul>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <h3 class="text-xl font-bold mb-2">Mois 12 : Renforcement des partenariats locaux</h3>
                <ul class="list-disc mb-4">
                    <p class="mt-2 sm:mt-2">Identifier et formaliser des partenariats avec des OSC locales dans divers pays francophones.
                    </p>
                    <p class="mt-2 sm:mt-2">Mettre en œuvre des initiatives conjointes pour renforcer les capacités locales et maximiser
                        l'impact.</p>
                </ul>
            </div>
        </div>

        <h2 class="text-2xl font-bold mb-2">Troisième période de temps (1-2 ans)</h2>
        <p class="text-lg mb-4">Objectif : Maintenir et élargir les initiatives réussies</p>

        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <h3 class="text-xl font-bold mb-2">Année 1 : Déploiement complet des projets stratégiques</h3>
                <ul class="list-disc mb-4">
                    <p class="mt-2 sm:mt-2">Étendre les projets pilotes réussis à plus de régions et de pays</p>
                    <p class="mt-2 sm:mt-2">Continuer à affiner et optimiser les processus de gestion de projet.</p>
                </ul>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <h3 class="text-xl font-bold mb-2">Année 2 : Institutionnalisation des bonnes pratiques, Évaluation
                    d'impact et planification future </h3>
                <ul class="list-disc mb-4">
                    <p class="mt-2 sm:mt-2">Institutionnaliser les pratiques et modèles réussis identifiés lors des phases initiales.</p>
                    <p class="mt-2 sm:mt-2">Développer des guides et des outils basés sur les initiatives réussies pour une utilisation plus
                        large par les OSC.</p>
                </ul>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <h3 class="text-xl font-bold mb-2">Récompenser les actions des OSC ayant un fort impact au sein de
                    l’espace francophone.</h3>
                <ul class="list-disc mb-4">
                    <p class="mt-2 sm:mt-2"><span class="font-bold">Organiser « Le Grand Prix de la Société civile francophone »</span>, une
                        cérémonie de récompenses
                        pour les organisations ayant eu un fort impact sur le terrain au sein de la société civile de
                        l’espace francophone.</p>

                </ul>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <h3 class="text-xl font-bold mb-2">Évaluation d'impact et planification future</h3>
                <ul class="list-disc mb-4">
                    <p class="mt-2 sm:mt-2">Réaliser une évaluation d'impact approfondie de toutes les initiatives</p>
                    <p class="mt-2 sm:mt-2">Documenter et diffuser les leçons apprises et les meilleures pratiques.</p>
                    <p class="mt-2 sm:mt-2">Planifier le prochain cycle stratégique en se basant sur les résultats et les enseignements
                        acquis.</p>
                </ul>
            </div>

        </div>

    </div>




    <?php include "../sections/footer.php" ?>
</body>

</html>