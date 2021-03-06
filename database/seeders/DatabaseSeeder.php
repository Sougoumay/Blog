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

//        User::create([
//            'name'=>'Hamid',
//            'first_name'=>'Sougouma Ali',
//            'rue'=>'17 Allee Pierre Beregovoy',
//            'code_postale'=>'45100 Orleans',
//            'country'=>'France',
//            'phone_number'=>33774606472,
//            'email'=>'elidjaihamid@gmail.com',
//            'dateOfBirth'=>'2022-10-03',
//            'profile'=>'image_621943c8b4c961.11803489.jpg',
//            'password'=>Hash::make('password')
//        ]);


        Academic::create(
            [
                'start_date'=>'2012-10-01',
                'end_date'=>'2016-06-15',
                'institute'=>'Lycee Fort-Lamy',
                'country'=>'Tchad',
                'user_id'=>1,
                'city'=>'N\'Djamena'
            ]
        );

        Academic::create(
            [
                'start_date'=>'2016-10-01',
                'end_date'=>'2019-06-15',
                'institute'=>'Lycee Ibnou-Cina',
                'country'=>'Tchad',
                'user_id'=>1,
                'city'=>'N\'Djamena'
            ]
        );

        Academic::create(
            [
                'start_date'=>'2019-10-14',
                'end_date'=>'2021-06-28',
                'institute'=>'Ecole Nationale des Sciences Appliquees de Tetouan',
                'country'=>'Tetouan/Maroc',
                'user_id'=>1,
                'city'=>'Tetouan'
            ]
        );

        Academic::create(
            [
                'start_date'=>'2021-09-10',
                'end_date'=>'2022-06-15',
                'institute'=>'Collegium Science Technique d\'Orleans',
                'country'=>'Orleans/France',
                'user_id'=>1,
                'city'=>'Tetouan'
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


//        Article::create([
//            'title'=>'Intelligence Artificielle',
//            'slug'=>'intelligence_rtificielle',
//            'image'=>'image_6217d341626475.71619067.jpg',
//            'content'=>"En tant que r??f??rence en mati??re de gestion de donn??es dans le cloud hybride, NetApp comprend l'importance
//             de l'acc??s aux donn??es, de leur gestion et de leur contr??le. NetApp?? Data Fabric fournit un environnement de gestion
//             unifi??e des donn??es qui couvre les terminaux, les data centers et plusieurs clouds hyperscale. Il permet aux
//             entreprises, quelle que soit leur taille, d'acc??l??rer les applications strat??giques, d'am??liorer la visibilit??
//             sur les donn??es, d'en optimiser la protection et d'am??liorer l'agilit?? fonctionnelle.
//
//                Les solutions d'IA de NetApp reposent sur des composants de base cl??s :
//
//                Le logiciel ONTAP?? permet d'exploiter l'IA et le deep learning localement et dans le cloud hybride.
//                Les syst??mes FAS 100 % Flash acc??l??rent les workloads d'IA et de deep learning, tout en ??liminant les goulots
//                d'??tranglement qui affectent les performances.
//                Le logiciel ONTAP Select permet de collecter les donn??es efficacement ?? la p??riph??rie ?? l'aide de terminaux IoT
//                et de points d'agr??gation.
//                Cloud Volumes peut ??tre utilis?? pour cr??er rapidement des prototypes pour de nouveaux projets. Il permet de
//                recevoir et d'envoyer des donn??es d'IA depuis et vers le cloud.
//                NetApp a ??galement commenc?? ?? int??grer l'analytique Big Data et l'intelligence artificielle dans ses propres
//                produits et services, notamment avec Active IQ??, qui utilise des milliards de points de donn??es, l'analyse
//                pr??dictive et un moteur puissant de machine learning afin de proposer des recommandations proactives de support
//                client pour les environnements IT complexes. Active IQ est une application de cloud hybride con??ue ?? l'aide des
//                m??mes produits et technologies NetApp que nos clients utilisent pour cr??er leurs solutions d'IA dans plusieurs
//                domaines."
//        ]);
//
//
//        Article::create(
//            [
//                'title'=>'Cloud',
//                'slug'=>'cloud',
//                'image'=>'image_6219ee1084c688.49567152.jpg',
//                'visites'=>0,
//                'content'=>"Un cloud (?? nuage ??) est un ensemble de mat??riels, de raccordements r??seau et de logiciels9 fournissant des services qu'individus et collectivit??s peuvent exploiter depuis n'importe o?? dans le monde10. Un basculement de tendance fait qu'au lieu d'obtenir de la puissance de calcul par acquisition de mat??riel et de logiciel, le consommateur se sert de puissance mise ?? sa disposition par un fournisseur via l'Internet10.
//
//Un nuage est caract??ris?? par plusieurs principes r??currents :
//
//ressources en libre-service avec adaptation automatique ?? la demande de la capacit?? de stockage et puissance de calcul, selon le besoin du consommateur, tant qu'il peut payer. Ceci contraste avec la technique classique des h??bergeurs o?? une demande ??crite doit ??tre faite au fournisseur pour obtenir une augmentation de capacit?? - demande n??cessitant en outre un certain temps. En cloud computing la demande est automatique et la r??ponse imm??diate5 ;
//ouverture : les services de cloud computing sont accessibles via l'Internet, via des techniques standardis??es, tant pour un ordinateur qu'un t??l??phone ou une tablette5 ;
//mutualisation : elle permet de combiner des ressources h??t??rog??nes (mat??riel, logiciel, trafic r??seau) pour servir plusieurs consommateurs ?? qui les ressources sont automatiquement attribu??es11. La mutualisation am??liore l'??volutivit?? et l'??lasticit?? ; elle facilite l'adaptation automatique des ressources aux variations de la demande11 ;
//paiement ?? l'usage : la quantit?? de service consomm??e dans le cloud est mesur??e, ?? des fins de contr??le, d'adaptation des moyens techniques et de facturation11.
//Le nuage (public, priv?? ou communautaire) b??n??ficie de technologies telles que la virtualisation du mat??riel informatique, les grilles, l'architecture orient??e services et les services web10. Un nuage public est mis ?? disposition du grand public. Les services sont g??n??ralement mis ?? disposition par une entreprise utilisant une infrastructure lui appartenant5. Un nuage priv?? est destin?? exclusivement ?? une organisation qui peut le manipuler elle-m??me ou faire appel ?? des services fournis par des tiers5. Un nuage communautaire utilise une infrastructure provenant d'un ensemble de membres partageant un int??r??t commun, comme dans le cas des milieux universitaires pour des ??tudes de grande envergure5.
//
//Parmi les services grand-public fournis en cloud computing figure le jeu ?? la demande (ou ?? jeu sur demande ??, gaming on demand (GoD) ou cloud gaming pour les anglophones). Il permet de jouer normalement ?? des jeux vid??o sur son ??cran d???ordinateur, alors que le ou les logiciels de jeu tournent sur des serveurs ?? distance, qui renvoient la vid??o de ce qui a ??t?? jou?? en lecture en continu (en anglais streaming). Le jeu est h??berg?? et stock?? sur des serveurs, dont l'utilisateur ne connait pas la localisation ni les caract??ristiques. Il ne n??cessite plus de supports, comme les CD, ou de mat??riel, comme les consoles de jeux. Les joueurs doivent seulement poss??der un ordinateur reli?? ?? Internet, et les p??riph??riques requis (clavier, souris, manette de jeu...)."
//            ]
//        );
//
//        Article::create(
//            [
//                'title'=>'Internet des objets',
//                'image'=>'image_6219edf3e22c21.63946790.jpg',
//                'slug'=>'internet_des_objets',
//                'visites'=>0,
//                'content'=>"L'Internet des objets ou IdO (en anglais (the) Internet of Things ou IoT) est l'interconnexion entre l'Internet et des objets, des lieux et des environnements physiques. L'appellation d??signe un nombre croissant d'objets connect??s ?? Internet permettant ainsi une communication entre nos biens dits physiques et leurs existences num??riques. Ces formes de connexions permettent de rassembler de nouvelles masses de donn??es sur le r??seau et donc, de nouvelles connaissances et formes de savoirs.
//
//Consid??r?? comme la troisi??me ??volution de l'Internet, baptis?? Web 3.0 (parfois per??u comme la g??n??ralisation du Web des objets mais aussi comme celle du Web s??mantique) qui fait suite ?? l'??re du Web social, l'Internet des objets rev??t un caract??re universel pour d??signer des objets connect??s aux usages vari??s, dans le domaine de la e-sant??, de la domotique ou du quantified self.
//
//L'Internet des objets est en partie responsable d'un accroissement exponentiel du volume de donn??es g??n??r?? sur le r??seau, ?? l'origine du big data (ou m??gadonn??es en fran??ais). La croissance exponentielle du nombre d'objets connect??s dans la premi??re moiti?? des ann??es 2020 risque d'avoir un impact durable sur l'environnement.
//
//Selon une ??quipe de l'ETH de Zurich, du fait des smartphones puis du nombre croissant d'objets connect??s, en dix ans (2015-2025), 150 milliards d'objets devraient se connecter entre eux, avec l'Internet et avec plusieurs milliards de personnes1. L'information issue de ces m??gadonn??es devra de plus en plus ??tre filtr??e par des algorithmes complexes, ce qui fait craindre une moindre protection des donn??es personnelles, une information des personnes et de la soci??t?? de moins en moins autod??termin??e notamment en cas d'appropriation exclusive de filtres num??riques par des entit??s (gouvernementales ou priv??es) qui pourraient alors manipuler les d??cisions. L'ETH plaide donc pour des syst??mes d'information ouverts et transparents, fiables et contr??l??s par l'utilisateur1."
//            ]
//        );
//
//        Article::create(
//            [
//                'title'=>'Cyber Securite',
//                'image'=>'image_6219ee66a5f0c8.40836650.jpg',
//                'slug'=>'cyber_securite',
//                'visites'=>0,
//                'content'=>"La cybers??curit??, qui concerne la s??curit?? et la souverainet?? num??rique de chaque ??tat-Nation, pr??sente des enjeux ??conomiques, strat??giques et politiques qui vont donc bien au-del?? de la seule S??curit?? des syst??mes d'information. Elle concerne d'ailleurs aussi bien l'informatique de gestion, l'informatique industrielle, l'informatique embarqu??e que les objets connect??s. La cybers??curit?? doit ??tre appr??hend??e de mani??re holistique pour prendre en compte les aspects ??conomiques, sociaux, ??ducatifs, juridiques, techniques, diplomatiques, militaires et de renseignement3. Excellence technique, adaptabilit?? et coop??ration sont essentielles dans ce domaine.
//
//Une strat??gie nationale de cybers??curit?? va demander de la continuit?? politique et une vision ?? long terme. Des diff??rentes publications des ??tats semble se d??gager un consensus reconnaissant la n??cessit?? d'organiser et d'assurer la s??curit?? et la d??fense des syst??mes techniques eux-m??mes, et celles des soci??t??s qui utilisent ces syst??mes.
//
//Cela dit, afin d'encourager une culture mondiale et motiver les pays pour qu'ils intensifient leurs efforts en mati??re de cybers??curit??, l'Union internationale des t??l??communications a d??velopp?? un indice de la cybers??curit?? dans le monde (GCI) qui mesure le niveau de d??veloppement de chaque pays dans ce domaine. Le premier rapport a ??t?? publi?? en avril 20154. Le GCI ??value l'engagement des pays en faveur de la cybers??curit?? au regard de cinq piliers strat??giques (juridique, technique, organisation, prise de conscience et savoir-faire, coop??ration internationale).
//
//Dans le domaine de la cybers??curit??, les cycles de r??action et de d??cisions doivent ??tre brefs. L'ISACA invite ?? utiliser un processus simple, d??velopp?? par le NIST5, pour identifier les menaces, se prot??ger, d??tecter les attaques, y r??pondre, puis revenir ?? un mode de fonctionnement normal. L'obligation de signaler ces attaques rel??ve d'un niveau de maturit?? des organisations et des ??tats qu'il reste encore ?? travailler. L'ISACA, comme ?? son habitude, inscrit ce processus dans le cadre d'une m??thodologie reposant sur l'analyse de risques pour identifier les actifs critiques (patrimoine informationnel), d??finir des objectifs de s??curit?? et d'optimisation des risques. L'approche doit ??tre tr??s op??rationnelle pour ??tre capable de g??rer des cyberattaques en temps r??el, de r??agir et de donner des ordres afin que des mesures concr??tes soient prises et que des actions pertinentes soient men??es6.
//
//La notion de ISOC, pour Information security operations center7 devient une composante pleine et enti??re de la mise en ??uvre des politiques de cybers??curit?? dans les organisations publiques et priv??es. Pour ??tre efficace, une ISOC doit ?? monitorer ?? l'ensemble des composants d'un syst??me d'information et ??tre capable de d??tecter et de s??lectionner parmi des milliards d???octets des ??l??ments caract??ristiques d'une cyberattaque puis, le cas ??ch??ant, d???adapter le plus intelligemment possible la r??activit?? des diff??rents composants concern??s dudit syst??me d'information.
//
//La notion de cyber-r??silience quant ?? elle est, bien entendu, compl??mentaire du management de la cybers??curit?? par les risques, comme cela avait d'ailleurs ??t?? introduit lors du Forum de Davos en 20128.
//
//En cybers??curit??, au moins deux questions sont donc ?? adresser : Comment prot??ger ses infrastructures vitales ? Comment faire coop??rer acteurs priv??s ou publics ?
//
//La ma??trise du patrimoine informationnel, constitu?? de documents et de donn??es informatiques, constitue ??galement un des enjeux de la cybers??curit??.
//
//Au c??ur des enjeux de s??curisation de la soci??t?? num??rique et en mati??re d'innovation, la cybers??curit?? devrait tirer parti des recherches dans le domaine des m??gadonn??es (big data) qui combineront apprentissage automatique et intelligence artificielle."
//            ]
//        );


    }
}
