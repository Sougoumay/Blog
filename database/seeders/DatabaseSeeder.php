<?php

namespace Database\Seeders;

use App\Models\Academic;
use App\Models\Article;
use App\Models\Hobby;
use App\Models\Language;
use App\Models\Software;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        /**User::create([
            'name'=>'Hamid',
            'first_name'=>'Sougouma Ali',
            'rue'=>'17 Allee Pierre Beregovoy',
            'code_postale'=>'45100 Orleans',
            'country'=>'France',
            'phone_number'=>33774606472,
            'email'=>'elidjaihamid@gmail.com',
            'dateOfBirth'=>'2022-10-03',
            'profile'=>'image_621943c8b4c961.11803489.jpg',
            'password'=>Hash::make('password')
        ]);


        /**Academic::create(
            [
                'start_date'=>'2012',
                'end_date'=>'2016',
                'institute'=>'Lycee Fort-Lamy',
                'country'=>'N\'Djamena/Tchad',
                'user_id'=>1
            ]
        );

        Academic::create(
            [
                'start_date'=>'2016',
                'end_date'=>'2018',
                'institute'=>'Lycee Ibnou-Cina',
                'country'=>'N\'Djamena/Tchad',
                'user_id'=>1
            ]
        );

        Academic::create(
            [
                'start_date'=>'2019',
                'end_date'=>'2021',
                'institute'=>'Ecole Nationale des Sciences Appliquees de Tetouan',
                'country'=>'Tetouan/Maroc',
                'user_id'=>1
            ]
        );

        Academic::create(
            [
                'start_date'=>'2021',
                'end_date'=>'2022',
                'institute'=>'Collegium Science Technique d\'Orleans',
                'country'=>'Orleans/France',
                'user_id'=>1
            ]
        );

        Software::create(
            [
                'title'=>'Python',
                'user_id'=>1
            ]
        );

        Software::create(
            [
                'title'=>'C',
                'user_id'=>1
            ]
        );

        Software::create(
            [
                'title'=>'Php',
                'user_id'=>1
            ]
        );

        Software::create(
            [
                'title'=>'Html/Css',
                'user_id'=>1
            ]
        );

        Software::create(
            [
                'title'=>'Laravel',
                'user_id'=>1
            ]
        );

        Software::create(
            [
                'title'=>'Java',
                'user_id'=>1
            ]
        );

        Software::create(
            [
                'title'=>'Matlab',
                'user_id'=>1
            ]
        );

        Software::create(
            [
                'title'=>'Maple',
                'user_id'=>1
            ]
        );

        Language::create(
            [
                'langue'=>'Francais',
                'user_id'=>1
            ]
        );

        Language::create(
            [
                'langue'=>'Anglais',
                'user_id'=>1,
                'level'=>'Beginner'
            ]
        );

        Language::create(
            [
                'langue'=>'Arabe',
                'user_id'=>1,
                'level'=>'intermediate'
            ]
        );

        Hobby::create(
            [
                'title'=>'Lecture',
                'user_id'=>1
            ]
        );

        Hobby::create(
            [
                'title'=>'Programmation',
                'user_id'=>1
            ]
        );

        Hobby::create(
            [
                'title'=>'Cinema',
                'user_id'=>1
            ]
        );

        Hobby::create(
            [
                'title'=>'FootBall',
                'user_id'=>1
            ]
        );


        Article::create([
            'title'=>'Intelligence Artificielle',
            'slug'=>'intelligence_rtificielle',
            'image'=>'image_6217d341626475.71619067.jpg',
            'content'=>"En tant que référence en matière de gestion de données dans le cloud hybride, NetApp comprend l'importance
             de l'accès aux données, de leur gestion et de leur contrôle. NetApp® Data Fabric fournit un environnement de gestion
             unifiée des données qui couvre les terminaux, les data centers et plusieurs clouds hyperscale. Il permet aux
             entreprises, quelle que soit leur taille, d'accélérer les applications stratégiques, d'améliorer la visibilité
             sur les données, d'en optimiser la protection et d'améliorer l'agilité fonctionnelle.

                Les solutions d'IA de NetApp reposent sur des composants de base clés :

                Le logiciel ONTAP® permet d'exploiter l'IA et le deep learning localement et dans le cloud hybride.
                Les systèmes FAS 100 % Flash accélèrent les workloads d'IA et de deep learning, tout en éliminant les goulots
                d'étranglement qui affectent les performances.
                Le logiciel ONTAP Select permet de collecter les données efficacement à la périphérie à l'aide de terminaux IoT
                et de points d'agrégation.
                Cloud Volumes peut être utilisé pour créer rapidement des prototypes pour de nouveaux projets. Il permet de
                recevoir et d'envoyer des données d'IA depuis et vers le cloud.
                NetApp a également commencé à intégrer l'analytique Big Data et l'intelligence artificielle dans ses propres
                produits et services, notamment avec Active IQ®, qui utilise des milliards de points de données, l'analyse
                prédictive et un moteur puissant de machine learning afin de proposer des recommandations proactives de support
                client pour les environnements IT complexes. Active IQ est une application de cloud hybride conçue à l'aide des
                mêmes produits et technologies NetApp que nos clients utilisent pour créer leurs solutions d'IA dans plusieurs
                domaines."
        ]);


        Article::create(
            [
                'title'=>'Cloud',
                'slug'=>'cloud',
                'image'=>'image_6219ee1084c688.49567152.jpg',
                'visites'=>0,
                'content'=>"Un cloud (« nuage ») est un ensemble de matériels, de raccordements réseau et de logiciels9 fournissant des services qu'individus et collectivités peuvent exploiter depuis n'importe où dans le monde10. Un basculement de tendance fait qu'au lieu d'obtenir de la puissance de calcul par acquisition de matériel et de logiciel, le consommateur se sert de puissance mise à sa disposition par un fournisseur via l'Internet10.

Un nuage est caractérisé par plusieurs principes récurrents :

ressources en libre-service avec adaptation automatique à la demande de la capacité de stockage et puissance de calcul, selon le besoin du consommateur, tant qu'il peut payer. Ceci contraste avec la technique classique des hébergeurs où une demande écrite doit être faite au fournisseur pour obtenir une augmentation de capacité - demande nécessitant en outre un certain temps. En cloud computing la demande est automatique et la réponse immédiate5 ;
ouverture : les services de cloud computing sont accessibles via l'Internet, via des techniques standardisées, tant pour un ordinateur qu'un téléphone ou une tablette5 ;
mutualisation : elle permet de combiner des ressources hétérogènes (matériel, logiciel, trafic réseau) pour servir plusieurs consommateurs à qui les ressources sont automatiquement attribuées11. La mutualisation améliore l'évolutivité et l'élasticité ; elle facilite l'adaptation automatique des ressources aux variations de la demande11 ;
paiement à l'usage : la quantité de service consommée dans le cloud est mesurée, à des fins de contrôle, d'adaptation des moyens techniques et de facturation11.
Le nuage (public, privé ou communautaire) bénéficie de technologies telles que la virtualisation du matériel informatique, les grilles, l'architecture orientée services et les services web10. Un nuage public est mis à disposition du grand public. Les services sont généralement mis à disposition par une entreprise utilisant une infrastructure lui appartenant5. Un nuage privé est destiné exclusivement à une organisation qui peut le manipuler elle-même ou faire appel à des services fournis par des tiers5. Un nuage communautaire utilise une infrastructure provenant d'un ensemble de membres partageant un intérêt commun, comme dans le cas des milieux universitaires pour des études de grande envergure5.

Parmi les services grand-public fournis en cloud computing figure le jeu à la demande (ou « jeu sur demande », gaming on demand (GoD) ou cloud gaming pour les anglophones). Il permet de jouer normalement à des jeux vidéo sur son écran d’ordinateur, alors que le ou les logiciels de jeu tournent sur des serveurs à distance, qui renvoient la vidéo de ce qui a été joué en lecture en continu (en anglais streaming). Le jeu est hébergé et stocké sur des serveurs, dont l'utilisateur ne connait pas la localisation ni les caractéristiques. Il ne nécessite plus de supports, comme les CD, ou de matériel, comme les consoles de jeux. Les joueurs doivent seulement posséder un ordinateur relié à Internet, et les périphériques requis (clavier, souris, manette de jeu...)."
            ]
        );*/

        Article::create(
            [
                'title'=>'Internet des objets',
                'image'=>'image_6219edf3e22c21.63946790.jpg',
                'slug'=>'internet_des_objets',
                'visites'=>0,
                'content'=>"L'Internet des objets ou IdO (en anglais (the) Internet of Things ou IoT) est l'interconnexion entre l'Internet et des objets, des lieux et des environnements physiques. L'appellation désigne un nombre croissant d'objets connectés à Internet permettant ainsi une communication entre nos biens dits physiques et leurs existences numériques. Ces formes de connexions permettent de rassembler de nouvelles masses de données sur le réseau et donc, de nouvelles connaissances et formes de savoirs.

Considéré comme la troisième évolution de l'Internet, baptisé Web 3.0 (parfois perçu comme la généralisation du Web des objets mais aussi comme celle du Web sémantique) qui fait suite à l'ère du Web social, l'Internet des objets revêt un caractère universel pour désigner des objets connectés aux usages variés, dans le domaine de la e-santé, de la domotique ou du quantified self.

L'Internet des objets est en partie responsable d'un accroissement exponentiel du volume de données généré sur le réseau, à l'origine du big data (ou mégadonnées en français). La croissance exponentielle du nombre d'objets connectés dans la première moitié des années 2020 risque d'avoir un impact durable sur l'environnement.

Selon une équipe de l'ETH de Zurich, du fait des smartphones puis du nombre croissant d'objets connectés, en dix ans (2015-2025), 150 milliards d'objets devraient se connecter entre eux, avec l'Internet et avec plusieurs milliards de personnes1. L'information issue de ces mégadonnées devra de plus en plus être filtrée par des algorithmes complexes, ce qui fait craindre une moindre protection des données personnelles, une information des personnes et de la société de moins en moins autodéterminée notamment en cas d'appropriation exclusive de filtres numériques par des entités (gouvernementales ou privées) qui pourraient alors manipuler les décisions. L'ETH plaide donc pour des systèmes d'information ouverts et transparents, fiables et contrôlés par l'utilisateur1."
            ]
        );

        Article::create(
            [
                'title'=>'Cyber Securite',
                'image'=>'image_6219ee66a5f0c8.40836650.jpg',
                'slug'=>'cyber_securite',
                'visites'=>0,
                'content'=>"La cybersécurité, qui concerne la sécurité et la souveraineté numérique de chaque État-Nation, présente des enjeux économiques, stratégiques et politiques qui vont donc bien au-delà de la seule Sécurité des systèmes d'information. Elle concerne d'ailleurs aussi bien l'informatique de gestion, l'informatique industrielle, l'informatique embarquée que les objets connectés. La cybersécurité doit être appréhendée de manière holistique pour prendre en compte les aspects économiques, sociaux, éducatifs, juridiques, techniques, diplomatiques, militaires et de renseignement3. Excellence technique, adaptabilité et coopération sont essentielles dans ce domaine.

Une stratégie nationale de cybersécurité va demander de la continuité politique et une vision à long terme. Des différentes publications des États semble se dégager un consensus reconnaissant la nécessité d'organiser et d'assurer la sécurité et la défense des systèmes techniques eux-mêmes, et celles des sociétés qui utilisent ces systèmes.

Cela dit, afin d'encourager une culture mondiale et motiver les pays pour qu'ils intensifient leurs efforts en matière de cybersécurité, l'Union internationale des télécommunications a développé un indice de la cybersécurité dans le monde (GCI) qui mesure le niveau de développement de chaque pays dans ce domaine. Le premier rapport a été publié en avril 20154. Le GCI évalue l'engagement des pays en faveur de la cybersécurité au regard de cinq piliers stratégiques (juridique, technique, organisation, prise de conscience et savoir-faire, coopération internationale).

Dans le domaine de la cybersécurité, les cycles de réaction et de décisions doivent être brefs. L'ISACA invite à utiliser un processus simple, développé par le NIST5, pour identifier les menaces, se protéger, détecter les attaques, y répondre, puis revenir à un mode de fonctionnement normal. L'obligation de signaler ces attaques relève d'un niveau de maturité des organisations et des États qu'il reste encore à travailler. L'ISACA, comme à son habitude, inscrit ce processus dans le cadre d'une méthodologie reposant sur l'analyse de risques pour identifier les actifs critiques (patrimoine informationnel), définir des objectifs de sécurité et d'optimisation des risques. L'approche doit être très opérationnelle pour être capable de gérer des cyberattaques en temps réel, de réagir et de donner des ordres afin que des mesures concrètes soient prises et que des actions pertinentes soient menées6.

La notion de ISOC, pour Information security operations center7 devient une composante pleine et entière de la mise en œuvre des politiques de cybersécurité dans les organisations publiques et privées. Pour être efficace, une ISOC doit « monitorer » l'ensemble des composants d'un système d'information et être capable de détecter et de sélectionner parmi des milliards d’octets des éléments caractéristiques d'une cyberattaque puis, le cas échéant, d’adapter le plus intelligemment possible la réactivité des différents composants concernés dudit système d'information.

La notion de cyber-résilience quant à elle est, bien entendu, complémentaire du management de la cybersécurité par les risques, comme cela avait d'ailleurs été introduit lors du Forum de Davos en 20128.

En cybersécurité, au moins deux questions sont donc à adresser : Comment protéger ses infrastructures vitales ? Comment faire coopérer acteurs privés ou publics ?

La maîtrise du patrimoine informationnel, constitué de documents et de données informatiques, constitue également un des enjeux de la cybersécurité.

Au cœur des enjeux de sécurisation de la société numérique et en matière d'innovation, la cybersécurité devrait tirer parti des recherches dans le domaine des mégadonnées (big data) qui combineront apprentissage automatique et intelligence artificielle."
            ]
        );


    }
}
