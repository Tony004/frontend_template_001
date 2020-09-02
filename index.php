<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous">
    </script>
    <title>test_page</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <nav>
                <div id="mainName">Big Shop</div>
                <div id = "rightNavigation">
                    <div>
                        <img src="https://ptkgroup.ru/img/icons/search.png" alt="">
                        <input type="search" placeholder="Search">
                    </div>
                    <hr>
                    <div id="collection_btn">
                        <span>Collection</span>
                        <img src="https://static.tildacdn.com/tild3863-3463-4537-a664-613737663361/expand_arrow1600.png" alt="">
                    </div>
                </div>
            </nav>
            <div id="eventName">
                <p id="summer">Summer</p>
                <p id="collection">Collection</p>
                <p id="discount">25% OFF</p>
            </div>
            <button id="headDetails">Details</button>
        </header>
        <main>
            <?php
                require_once("section1/section1.php");
                require_once("section2/section2.php");
                require_once("section3/section3.php");
            ?>
        </main>
        <div id="newsletter">
            <h1>GET NOTIFIED</h1>
            <div id="email_input">
                <h2>Newsletter</h2>
                <input type="text" placeholder="Enter you email address..">
                <button>Submit</button>
            </div>
        </div>
        <footer>
            <h1>Big Shop</h1>
            <div>
                <ul>
                    <li><span>Man</span></li>
                    <li><span>Woman</span></li>
                    <li><span>Kids</span></li>
                    <li><span>Bags</span></li>
                    <li><span>Watches</span></li>
                    <li><span>Toys</span></li>
                </ul>
            </div>
            <div id="logos">
                <img src="https://c7.hotpng.com/preview/480/615/791/facebook-computer-icons-desktop-wallpaper-photos-icon-facebook.jpg" alt="">
                <img src="https://c7.hotpng.com/preview/574/959/704/samsung-galaxy-s-plus-google-computer-icons-google-logo-social-icons.jpg" alt="">
                <img src="https://bumper-stickers.ru/43101-thickbox_default/instagram-instagram.jpg" alt="">
                <img src="https://upload.wikimedia.org/wikipedia/pa/6/62/Twitter_bird_logo_2012.png" alt="">
            </div>
            <p>	&copy; Copyright 2017 Big Shop by Victor Themes</p>
        </footer>
    </div>
    <script src="main.js"></script>
</body>
</html>
