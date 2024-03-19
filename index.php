<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/root.css">
    <link rel="stylesheet" href="src/styles/nav.css">
    <link rel="stylesheet" href="src/styles/index.css">
    <link rel="stylesheet" href="src/styles/footer.css">
    <title>Art&Misia - Virtual Exposition</title>
</head>
<body>
    <nav>
        <a href="#"><img src="./src/assets/imgs/logo.png" alt="logo agence"></a>
        <ul class="nav-links">
            <a href="#">L'agence</a>
            <a href="#">L'exposition</a>
            <a href="#">Galerie</a>
            <a href="#" id="btn-resa-nav">Réserver un billet</a>
            <a href="#">FR | EN</a>
        </ul>
        <button class="burger-menu" onclick="toggleMenu()">
            <img src="./src/assets/icons/burgermenu.svg" alt="menu burger"></img>
        </button>
    </nav>  

    <header>
        <section class="header">
            <h1>Artemisia Gentileschi</h1>
            <h2>Toiles d'une vie résilliente</h2>
            <h3>Plongez dans l'exposition immersive et intéractive de la vie d'Artemisia Gentileschi</h3>
            <!-- <p>Exposition du 8 avril au 21 juin 2024</p> -->
            <a href="billeterie.html" class="btn-link-billeterie">
                <p>Réserver un billet</p><img src="./src/assets/icons/arrow90deg.svg" alt="" srcset="">
            </a>
        </section>
    </header>

    <main>
    <section class="concept">

        <div class="video-container">
            <video class="teaser" controls>
                <source src="./src/assets/videos/teaser.mp4" type="video/mp4">
            </video>
        </div>

        <div class="concept-content">
            <h2>Concept</h2>
            <p>Découvrez les oeuvres d’Artemisia Gentileschi comme vous ne les avez jamais vu. Plongez dans l'univers fascinant d'Artemisia Gentileschi, l'une des figures les plus marquantes de l'art baroque, à travers une expérience en réalité augmenté inédite.
                Imaginez-vous déambulant dans une galerie d’art, où les tableaux sont cachés dans l'ombre, attendant d'être révélés. Armé d'une simple lampe torche, vous deviendrez le maître de votre propre expérience artistique, illuminant chaque œuvre et découvrant les détails cachés dans les jeux subtils de lumière et d'ombre.
                Cette expérience immersive vous permettra de découvrir l'art de Gentileschi sous un nouveau jour, en vous plongeant littéralement au cœur de ses créations. Ne manquez pas cette opportunité unique de découvrir les peintures d’une des peintres les plus remarquable de la Renaissance italienne.</p>
            <!-- <h3>Comment vivre cette expérience ?</h3>
                <p class="consignes">Vous pouvez vivre cette expérience depuis chez vous ou alors venir sur place dans notre galerie. Pour les personnes souhaitant vivre l’expérience depuis chez elles, il vous suffit de réserver un billet en ligne. Pour les personnes souhaitant venir sur place, vous pouvez vous rendre directement à notre galerie. </p> -->
                <div class="about-infos">
            <div>
                <h3>Lieu</h3>
                <p>Art&misia - 2 Rue Albert Einstein, 77420 Champs-sur-Marne</p>
            </div>
            <div>
                <h3>Horaires</h3>
                <p>Du 8 avril au 21 juin 2023. Tous les jours de 10h à 18h.</p>
            </div>
            <div>
                <h3>Tarifs</h3>
                <p>Différents tarifs, à partir de 7€</p>
            </div>
        </div>

    </section>

    <section class="galerie">

        <h2>Quelques oeuvres</h2>
        <div class="galerie-content">
            <div class="galerie-img-container">
                <img src="./src/assets/imgs/img-peinture1.jpg" alt="photo peinture"></img>
                <p>Siera et Jael est une peinture réalisée par l'artiste Artemisia Gentileschi. Cette œuvre représente une scène biblique où Siera et Jael sont les protagonistes. L'artiste a utilisé des couleurs vives et des contrastes forts pour mettre en valeur les personnages et raconter leur histoire.</p>
            </div>
            <div class="galerie-img-container">
                <p>Marie Madeleine est une œuvre d'art réalisée par Artemisia Gentileschi. Cette peinture représente Marie Madeleine, une figure biblique souvent représentée dans l'art. Gentileschi a capturé l'émotion et la spiritualité de Marie Madeleine avec une technique de peinture experte et une utilisation impressionnante de la lumière et de la couleur.
                </p>
                <img src="./src/assets/imgs/img-peinture2.jpg" alt="photo peinture"></img>
            </div>
            <div class="galerie-img-container">
                <img src="./src/assets/imgs/img-peinture3.jpg" alt="photo peinture"></img>
                <p>"Corisca et le Satyre" est une œuvre d'art réalisée par Artemisia Gentileschi. Cette peinture représente une scène mythologique où Corisca, une nymphe, est confrontée à un satyre. Gentileschi a utilisé une palette de couleurs vives et un jeu de lumière dramatique pour donner vie à cette scène intense.
                </p>
            </div>
                <!-- <a class="btn-link-galerie" href="#">Voir plus...</a> -->
    </section>
    <section class="about">

    <div class="about-content">
        <h2>L'agence</h2>
        <p>Notre agence Art&misia est heureuse de vous présenter sa toute première exposition virtuelle autour d’Artemisia Gentileschi. Dans le cadre de cette exposition, vous retrouverez un parcours immersif vous amenant à découvrir cette célèbre artiste peintre italienne du 17ème siècle. Cette exposition débute le 8 avril et se déroulera jusqu’au 21 juin 2024. Vous avez la possibilité de vivre cette expérience depuis chez vous ou alors de venir sur place dans notre galerie. </p>
        <!-- <div class="about-infos">
            <div>
                <h3>Lieu</h3>
                <p>Art&misia - 2 Rue Albert Einstein, 77420 Champs-sur-Marne</p>
            </div>
            <div>
                <h3>Horaires</h3>
                <p>Du 8 avril au 21 juin 2023. Tous les jours de 10h à 18h.</p>
            </div>
            <div>
                <h3>Téléphone</h3>
                <p>06 12 34 56 78</p>
            </div>
        </div> -->
        <div class="more-infos">
            <h3>Vous voulez voir d'autres expositions ?</h3>
            <a class="link-agence" href="#">En savoir plus</a>
        </div>
    </div>

    <div class="about-img-container">
        <img class="top-img" src="./src/assets/imgs/img-about1.jpg" alt="photo galerie">
        <img class="bottom-img" src="./src/assets/imgs/img-about2.jpg" alt="photo galerie">
    </div>
    <!-- <div class="déco"></div> -->

    </section>
    </main>
    <footer>
        <div class="footer-content">
            <img class="logo-footer" src="./src/assets/imgs/logo-agence-footer2.svg" alt="logo agence">
           <ul>
                <h3>Liens utiles</h3>
                <a href="#">L'agence</a>
                <a href="#">L'exposition</a>
                <a href="#">Galerie</a>
                <a href="#">Réserver un billet</a>
                <a href="#">Mentions légales</a>
                <a href="#">Conditions générales de vente</a>
            </ul>
            <div class="contact">
                <h3>Nous contacter</h3>
                <p>2 Rue Albert Einstein, 77420 Champs-sur-Marne</p>
                <p>contact@artemisia.com</p>
                <p>06 12 34 56 78</p>
                <div class="socials">
                    <h3>Suivez-nous</h3>
                    <a href="#"><img src="./src/assets/imgs/logo-instagram.png" alt="logo instagram"></a>
                    <a href="#"><img src="./src/assets/imgs/logo-tiktok.png" alt="logo tiktok"></a>
                    <a href="#"><img src="./src/assets/imgs/logo-x.png" alt="logo x"></a>
                    <a href="#"><img src="./src/assets/imgs/logo-facebook.png" alt="logo facebook"></a>
                </div>
            </div>
        </div>
        <div class="credit">
        <p>Tous droits réservés, Art&Misia Gallery © 2024</p>
        </div>
    </footer>
    
<script src="src/scripts/nav.js"></script>
</body>
</html>