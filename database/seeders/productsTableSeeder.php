<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('products')->insert([
           [
               'cate_id' => '1',
               'name' => 'Samsung Galaxy S22',
               'slug' => 'Samsung_Galaxy_S22',
               'small_description' => 'un écran Full HD+ Dynamic AMOLED 2X de 6,1 pouces avec des cadres incroyablement minces, un taux de rafraîchissement de 120 Hz, un taux d échantillonnage tactile de 240 Hz en mode jeu et une luminosité maximale de 1 300 nits.',
               'description' => 'Le Samsung Galaxy S22 est l un 3 smartphones de la gamme Galaxy S22 annoncé le 9 février 2022. Il est équipé d un SoC Exynos 2200 épaulé par 8 Go de RAM et 128 ou 256 Go de stockage. Il est équipé d un écran AMOLED 120 Hz de 6,1 pouces et d un triple capteur photo polyvalent de 50+10+12 mégapixels. Il dispose également d une batterie de 3700 mAh compatible recharge rapide 25W et recharge sans fil 15W.',
               'original_price' => '490000',
               'selling_price' => '450000',
               'image' => 'galaxy-s22.jpg',
               'qty' => '11',
               'tax' => '0',
               'status' => '0',
               'trending' => '1',
               'meta_title' => 'samsung',
               'meta_keyword' => 'Samsung',
               'meta_description' => 'un écran Full HD+ Dynamic AMOLED 2X de 6,1 pouces avec des cadres incroyablement minces, un taux de rafraîchissement de 120 Hz, un taux d échantillonnage tactile de 240 Hz en mode jeu et une luminosité maximale de 1 300 nits.',
           ],
            [
                'cate_id' => '1',
                'name' => 'Samsung Galaxy S20',
                'slug' => 'Samsung_Galaxy_S20',
                'small_description' => 'Le Samsung Galaxy S20 FE 5G est un smartphone annoncé le 23 septembre 2020, est un telephone qui s adaptera a tous vos problemes',
                'description' => 'Le Samsung Galaxy S20 FE 5G est un smartphone annoncé le 23 septembre 2020. Il est équipé d une fiche technique similaire à celle du Galaxy S20 5G, avec une solution photo différente (12+8+12 mégapixels) et un écran Full HD+ plat similaire à celui du Galaxy Note 20. Il est disponible en différents coloris à un prix inférieur au S20 5G classique.',
                'original_price' => '390000',
                'selling_price' => '350000',
                'image' => 'galaxy-s20.jpg',
                'qty' => '21',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'samsung',
                'meta_keyword' => 'samsung',
                'meta_description' => 'Le Samsung Galaxy S20 FE 5G est un smartphone annoncé le 23 septembre 2020. Il est équipé d une fiche technique similaire à celle du Galaxy S20 5G, avec une solution photo différente (12+8+12 mégapixels) et un écran Full HD+ plat similaire à celui du Galaxy Note 20. Il est disponible en différents coloris à un prix inférieur au S20 5G classique.',
            ],
            [
                'cate_id' => '1',
                'name' => 'IPhone 11',
                'slug' => 'IPhone_11',
                'small_description' => 'Il est équipé d un écran LCD de 6,1 pouces avec une résolution de 1792 x 828 pixels et une densité de pixels de 326 ppp. Le téléphone est alimenté par la puce A13 Bionic, la même que celle utilisée dans l iPhone 11 Pro et l iPhone 11 Pro Max, ce qui en fait un téléphone puissant capable de gérer les tâches les plus exigeantes',
                'description' => 'Le téléphone dispose d un système de caméra arrière à double objectif, composé d un objectif grand angle de 12 mégapixels et d un objectif ultra-grand angle de 12 mégapixels. Il est également équipé d une caméra avant TrueDepth de 12 mégapixels qui prend en charge la fonctionnalité de reconnaissance faciale Face ID. L iPhone 11 est disponible en trois capacités de stockage interne : 64 Go, 128 Go et 256 Go.',
                'original_price' => '290000',
                'selling_price' => '250000',
                'image' => 'iphone-11.jpg',
                'qty' => '11',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'apple',
                'meta_keyword' => 'apple',
                'meta_description' => 'Il est équipé d un écran LCD de 6,1 pouces avec une résolution de 1792 x 828 pixels et une densité de pixels de 326 ppp. Le téléphone est alimenté par la puce A13 Bionic, la même que celle utilisée dans l iPhone 11 Pro et l iPhone 11 Pro Max, ce qui en fait un téléphone puissant capable de gérer les tâches les plus exigeantes',
            ],
            [
            'cate_id' => '2',
            'name' => 'MSI Alpha15',
            'slug' => 'MSI_Alpha15',
            'small_description' => 'Le MSI Alpha 15 est un ordinateur portable de jeu puissant équipé d un processeur AMD Ryzen et d une carte graphique AMD Radeon RX 5500M. Il dispose également d un écran de 15,6 pouces avec une fréquence de rafraîchissement de 144 Hz, offrant une expérience de jeu fluide et immersive.',
            'description' => 'Le MSI Alpha 15 est un ordinateur portable de jeu puissant équipé d un processeur AMD Ryzen et d une carte graphique AMD Radeon RX 5500M. Il dispose également d un écran de 15,6 pouces avec une fréquence de rafraîchissement de 144 Hz, offrant une expérience de jeu fluide et immersive. Le MSI Alpha 15 est un choix idéal pour les joueurs qui cherchent un ordinateur portable de jeu performant à un prix abordable.',
            'original_price' => '1390000',
            'selling_price' => '1350000',
            'image' => 'MSI_Alpha15.jpg',
            'qty' => '11',
            'tax' => '0',
            'status' => '0',
            'trending' => '1',
            'meta_title' => 'msi',
            'meta_keyword' => 'msi',
            'meta_description' => 'Le MSI Alpha 15 est un ordinateur portable de jeu puissant équipé d un processeur AMD Ryzen et d une carte graphique AMD Radeon RX 5500M. Il dispose également d un écran de 15,6 pouces avec une fréquence de rafraîchissement de 144 Hz, offrant une expérience de jeu fluide et immersive. Le MSI Alpha 15 est un choix idéal pour les joueurs qui cherchent un ordinateur portable de jeu performant à un prix abordable.',
        ],
            [
                'cate_id' => '2',
                'name' => 'MSI GP66 Leopard',
                'slug' => 'MSI_GP66_Leopard',
                'small_description' => 'Le MSI GP66 Vector est un ordinateur portable haut de gamme avec des performances de pointe, un écran Full HD de 15,6 pouces à taux de rafraîchissement élevé et un clavier rétroéclairé RGB. Il est conçu pour les joueurs et les professionnels de la création de contenu qui recherchent un appareil puissant et polyvalent.',
                'description' => 'Le MSI GP66 Vector est un ordinateur portable gaming haut de gamme, offrant des performances exceptionnelles grâce à son processeur Intel Core i7 de 11ème génération et sa carte graphique NVIDIA GeForce RTX 3070. Avec son écran Full HD de 15,6 pouces à taux de rafraîchissement de 144 Hz et son clavier rétroéclairé RGB, il est idéal pour les joueurs exigeants qui cherchent une expérience de jeu immersive et fluide. Sa conception robuste et ses nombreuses fonctionnalités en font également un choix populaire parmi les professionnels de la création de contenu.',
                'original_price' => '1300000',
                'selling_price' => '950000',
                'image' => 'MSI GP66 Leopard.jpg',
                'qty' => '11',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'msi',
                'meta_keyword' => 'msi',
                'meta_description' => 'Le MSI GP66 Vector est un ordinateur portable gaming haut de gamme, offrant des performances exceptionnelles grâce à son processeur Intel Core i7 de 11ème génération et sa carte graphique NVIDIA GeForce RTX 3070. Avec son écran Full HD de 15,6 pouces à taux de rafraîchissement de 144 Hz et son clavier rétroéclairé RGB, il est idéal pour les joueurs exigeants qui cherchent une expérience de jeu immersive et fluide. Sa conception robuste et ses nombreuses fonctionnalités en font également un choix populaire parmi les professionnels de la création de contenu.',
            ],
            [
                'cate_id' => '2',
                'name' => 'Asus ROG Strix Scar II',
                'slug' => 'Asus_ROG_Strix_Scar_II',
                'small_description' => 'L Asus ROG Strix Scar II est un ordinateur portable gaming de haute performance, avec un écran Full HD de 15,6 pouces à taux de rafraîchissement élevé et un clavier rétroéclairé RGB. Il est conçu pour offrir une expérience de jeu immersive et fluide aux joueurs exigeants.',
                'description' => 'L Asus ROG Strix Scar II est un ordinateur portable gaming de haute performance, avec un écran Full HD de 15,6 pouces à taux de rafraîchissement élevé et un clavier rétroéclairé RGB. Il offre une expérience de jeu immersive grâce à sa carte graphique NVIDIA GeForce GTX 10 Series et son processeur Intel Core i7 de 8ème génération. Sa conception élégante et son système de refroidissement avancé en font également un choix populaire parmi les joueurs exigeants.',
                'original_price' => '1200000',
                'selling_price' => '900000',
                'image' => 'Asus ROG Strix Scar II.jpg',
                'qty' => '11',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'msi',
                'meta_keyword' => 'msi',
                'meta_description' => 'Le MSI GP66 Vector est un ordinateur portable gaming haut de gamme, offrant des performances exceptionnelles grâce à son processeur Intel Core i7 de 11ème génération et sa carte graphique NVIDIA GeForce RTX 3070. Avec son écran Full HD de 15,6 pouces à taux de rafraîchissement de 144 Hz et son clavier rétroéclairé RGB, il est idéal pour les joueurs exigeants qui cherchent une expérience de jeu immersive et fluide. Sa conception robuste et ses nombreuses fonctionnalités en font également un choix populaire parmi les professionnels de la création de contenu.',
            ],
            [
                'cate_id' => '3',
                'name' => 'P9',
                'slug' => 'P9',
                'small_description' => 'Dernier casque Bluetooth sans fil P9  2023 ,version Bluetooth: 5.0 /5.1',
                'description' => 'Dernier casque Bluetooth sans fil P9  2023 caractéristique, version Bluetooth: 5.0 /5.1, Compatible avec les téléphones mobiles iphone et android. IPX4, casque Bluetooth de sport HiFi, La connexion Bluetooth est super stable, La musique montée sur la tête est meilleure ',
                'original_price' => '25000',
                'selling_price' => '20000',
                'image' => 'casque 20k.jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '0',
                'meta_title' => 'P9',
                'meta_keyword' => 'P9',
                'meta_description' => 'Dernier casque Bluetooth sans fil P9  2023 ,version Bluetooth: 5.0 /5.1',
            ],
            [
                'cate_id' => '3',
                'name' => 'RT-6',
                'slug' => 'RT-6',
                'small_description' => 'Dernier casque Bluetooth sans fil P9  2023 ,version Bluetooth: 5.0 /5.1',
                'description' => 'Le casque proposé sur le site de e-commerce est un accessoire audio d entrée de gamme, offrant une qualité sonore et un confort de port basiques pour un prix abordable. Avec ses haut-parleurs de petite taille et ses coussinets d oreille en mousse, ce casque est idéal pour les utilisateurs qui cherchent une solution audio simple et peu coûteuse.',
                'original_price' => '8000',
                'selling_price' => '5000',
                'image' => 'casque 5k (2).jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'RT-6',
                'meta_keyword' => 'RT-6',
                'meta_description' => 'Dernier casque Bluetooth sans fil P9  2023 ,version Bluetooth: 5.0 /5.1',
            ],
            [
                'cate_id' => '3',
                'name' => 'Gt45',
                'slug' => 'Gt45',
                'small_description' => 'Dernier casque Bluetooth sans fil P9  2023 ,version Bluetooth: 5.0 /5.1',
                'description' => 'Le casque avec oreilles de chat proposé sur le site de e-commerce est un accessoire audio original et ludique, offrant une qualité sonore correcte et un confort satisfaisant pour une utilisation quotidienne. Son design amusant en fait également un produit tendance et idéal pour les amoureux des chats.',
                'original_price' => '15000',
                'selling_price' => '10000',
                'image' => 'casque_chat.jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '0',
                'meta_title' => 'Gt45',
                'meta_keyword' => 'Gt45',
                'meta_description' => 'Dernier casque Bluetooth sans fil P9  2023 ,version Bluetooth: 5.0 /5.1',
            ],
            [
                'cate_id' => '5',
                'name' => 'Apple watch s6 steel',
                'slug' => 'apple_watch-s6_steel',
                'small_description' => 'L Apple Watch Series 6 en acier est une montre connectée haut de gamme avec un design élégant et une construction en acier inoxydable durable. Elle est équipée d un écran Retina always-on et d un capteur de fréquence cardiaque, idéale pour les utilisateurs exigeants.',
                'description' => 'L Apple Watch Series 6 en acier est une montre connectée haut de gamme offrant un design élégant et une construction en acier inoxydable durable. Elle est équipée d un écran Retina always-on, d un capteur de fréquence cardiaque, d un GPS intégré et d une autonomie de batterie allant jusqu à 18 heures. Avec sa connectivité cellulaire en option et ses nombreuses fonctionnalités de santé et de fitness, cette montre est idéale pour les utilisateurs exigeants qui cherchent un produit haut de gamme.',
                'original_price' => '48000',
                'selling_price' => '40000',
                'image' => 'apple-watch-s6-steel.jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'applewatch',
                'meta_keyword' => 'applewatch',
                'meta_description' => 'L Apple Watch Series 6 en acier est une montre connectée haut de gamme avec un design élégant et une construction en acier inoxydable durable. Elle est équipée d un écran Retina always-on et d un capteur de fréquence cardiaque, idéale pour les utilisateurs exigeants.',
            ],
            [
                'cate_id' => '5',
                'name' => 'Apple watch se',
                'slug' => 'apple_watch_se',
                'small_description' => 'L Apple Watch SE est une montre connectée de milieu de gamme avec des fonctionnalités avancées telles que le suivi de la condition physique et la connectivité GPS. Elle est équipée d un écran Retina toujours allumé et est idéale pour les utilisateurs qui cherchent un produit de qualité à un prix abordable.',
                'description' => 'L Apple Watch SE est une montre connectée de milieu de gamme avec des fonctionnalités avancées telles que le suivi de la condition physique et la connectivité GPS. Elle est équipée d un écran Retina toujours allumé et est idéale pour les utilisateurs qui cherchent un produit de qualité à un prix abordable.',
                'original_price' => '38000',
                'selling_price' => '30000',
                'image' => 'apple-watch-se.jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '0',
                'meta_title' => 'applewatch',
                'meta_keyword' => 'applewatch',
                'meta_description' => 'L Apple Watch Series 6 en acier est une montre connectée haut de gamme avec un design élégant et une construction en acier inoxydable durable. Elle est équipée d un écran Retina always-on et d un capteur de fréquence cardiaque, idéale pour les utilisateurs exigeants.',
            ],
            [
                'cate_id' => '5',
                'name' => 'Samsung galaxy watch5pro',
                'slug' => 'samsung_galaxy_watch5pro',
                'small_description' => 'La Samsung Galaxy Watch3 est une smartwatch haut de gamme avec un écran AMOLED circulaire, des fonctionnalités de suivi de la condition physique, de messagerie et d intégration de smartphone, ainsi qu une autonomie de la batterie pouvant durer jusqu à deux jours.',
                'description' => 'La Samsung Galaxy Watch3 est une smartwatch haut de gamme qui offre une gamme de fonctionnalités pour le suivi de la condition physique, la messagerie et l intégration de smartphone. Elle dispose d un écran AMOLED circulaire avec une lunette rotative pour la navigation et est disponible en deux tailles (41mm et 45mm) et en divers finitions. La montre peut surveiller la fréquence cardiaque, les niveaux d oxygène dans le sang et le sommeil, et offre une gamme de modes de suivi d entraînement. Elle dispose également de Samsung Pay, d assistants vocaux et d une connectivité LTE (sur certains modèles). L autonomie de la batterie peut durer jusqu à deux jours, selon l utilisation.',
                'original_price' => '37000',
                'selling_price' => '30000',
                'image' => 'samsung-galaxy-watch5pro.jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'samsungwatch',
                'meta_keyword' => 'samsungwatch',
                'meta_description' => 'La Samsung Galaxy Watch3 est une smartwatch haut de gamme avec un écran AMOLED circulaire, des fonctionnalités de suivi de la condition physique, de messagerie et d intégration de smartphone, ainsi qu une autonomie de la batterie pouvant durer jusqu à deux jours.',
            ],
            [
                'cate_id' => '6',
                'name' => 'Bud2pro',
                'slug' => 'bud2pro',
                'small_description' => 'la deuxième génération d écouteurs sans fil d Apple, offrant une qualité sonore améliorée, une connexion Bluetooth 5.0 plus rapide et une autonomie de batterie allant jusqu à 5 heures. Ils sont équipés de la commande vocale Siri et sont résistants à l eau et à la transpiration, ce qui les rend idéaux pour une utilisation lors de séances d entraînement.',
                'description' => 'la deuxième génération d écouteurs sans fil d Apple, offrant une qualité sonore améliorée et une connexion Bluetooth 5.0 plus rapide et plus stable. Les AirPods 2 sont équipés de la commande vocale Siri, et offrent une autonomie de batterie allant jusqu à 5 heures d écoute et jusqu à 24 heures avec l étui de charge. Ils sont également résistants à l eau et à la transpiration, ce qui les rend idéaux pour une utilisation lors de séances d entraînement.',
                'original_price' => '15000',
                'selling_price' => '10000',
                'image' => 'bud2pro.jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '1',
                'meta_title' => 'airpod',
                'meta_keyword' => 'airpod',
                'meta_description' => 'la deuxième génération d écouteurs sans fil d Apple, offrant une qualité sonore améliorée, une connexion Bluetooth 5.0 plus rapide et une autonomie de batterie allant jusqu à 5 heures. Ils sont équipés de la commande vocale Siri et sont résistants à l eau et à la transpiration, ce qui les rend idéaux pour une utilisation lors de séances d entraînement.',
            ],
            [
                'cate_id' => '6',
                'name' => 'Airspods',
                'slug' => 'airspods',
                'small_description' => 'Les AirPods Pro sont des écouteurs sans fil haut de gamme avec une qualité sonore exceptionnelle, une réduction active du bruit et une autonomie de batterie allant jusqu à 4,5 heures. Ils sont résistants à l eau et à la transpiration et disposent de la technologie de transparence pour rester conscient de l environnement extérieur.',
                'description' => 'Les AirPods Pro sont des écouteurs sans fil haut de gamme qui offrent une qualité sonore exceptionnelle et une réduction active du bruit pour une expérience d écoute immersive. Ils sont dotés de la technologie de transparence pour permettre de rester conscient de l environnement extérieur, et sont résistants à l eau et à la transpiration. Avec une autonomie de batterie allant jusqu à 4,5 heures, et jusqu à 24 heures avec l étui de charge, les AirPods Pro sont un excellent choix pour les utilisateurs exigeants.',
                'original_price' => '20000',
                'selling_price' => '15000',
                'image' => 'airspods.jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '0',
                'meta_title' => 'airpod',
                'meta_keyword' => 'airpod',
                'meta_description' => 'Les AirPods Pro sont des écouteurs sans fil haut de gamme avec une qualité sonore exceptionnelle, une réduction active du bruit et une autonomie de batterie allant jusqu à 4,5 heures. Ils sont résistants à l eau et à la transpiration et disposent de la technologie de transparence pour rester conscient de l environnement extérieur.',
            ],
            [
                'cate_id' => '6',
                'name' => 'Black_buds live',
                'slug' => 'black_buds_live',
                'small_description' => 'des écouteurs sans fil haut de gamme conçus pour offrir une expérience d écoute supérieure avec une qualité sonore exceptionnelle, une réduction active du bruit et une autonomie de batterie allant jusqu à 20 heures. Ils sont dotés de coussinets d oreille doux et confortables et d un bandeau en maille respirant pour un port prolongé.',
                'description' => 'des écouteurs sans fil haut de gamme conçus pour offrir une expérience d écoute supérieure avec une qualité sonore exceptionnelle et une réduction active du bruit. Ils sont dotés de coussinets d oreille doux et confortables, et d un bandeau en maille respirant pour un port prolongé. Les AirPods Max offrent une autonomie de batterie allant jusqu à 20 heures, et sont disponibles en plusieurs couleurs élégantes.',
                'original_price' => '10000',
                'selling_price' => '8000',
                'image' => 'bud2pro.jpg',
                'qty' => '13',
                'tax' => '0',
                'status' => '0',
                'trending' => '0',
                'meta_title' => 'airpod',
                'meta_keyword' => 'airpod',
                'meta_description' => 'des écouteurs sans fil haut de gamme conçus pour offrir une expérience d écoute supérieure avec une qualité sonore exceptionnelle, une réduction active du bruit et une autonomie de batterie allant jusqu à 20 heures. Ils sont dotés de coussinets d oreille doux et confortables et d un bandeau en maille respirant pour un port prolongé.',
            ],

        ]);
    }
}
