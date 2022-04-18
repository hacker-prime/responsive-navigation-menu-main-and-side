<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navigation menu</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/side-navigation.css" />

    <!-- ===== BOX ICONS ===== -->

    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet">

    <!-- ===== BOX ICONS ===== -->

</head>

<body>
    

    <header class="l-header">
        <nav class="nav bd-grid">

            <div class="logo">
                <img src="assets/images/phynix-logo-removebg-preview_adobespark.png" alt="Logo" />
                <h3>Phoenix</h3>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" id="myDIV" class="nav__link active__menu">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#services" class="nav__link">Services</a></li>
                    <li class="nav__item"><a href="#features" class="nav__link">Features</a></li>
                    <li class="nav__item"><a href="#partners" class="nav__link">Partners</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    <li class="nav__item"><a href="#" class="nav__link btn">Order Now</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="bx bx-menu"></i>
            </div>

            <!-- This is placed here in order to incorporate the side-navigation tutorial/code -->
            <!-- https://www.youtube.com/watch?v=F0uED-w9E48&list=WL&index=81  https://codepen.io/ephs23/pen/jJMRLE -->
            <span class="slide">
                <a href="#" onClick="openSlideMenu()">
                    <i class="fas fa-bars"></i>
                </a>
            </span>

        </nav>
    </header>

    <!-- https://www.youtube.com/watch?v=F0uED-w9E48&list=WL&index=81  https://codepen.io/ephs23/pen/jJMRLE -->
    <?php require_once("side-navigation.php") ?>
   
    <section id="home">

    </section>

    <section id="about">

    </section>

    <section id="services">

    </section>

    <section id="features">

    </section>

    <section id="partners">

    </section>

    <section id="contact">

    </section>

    <!-- <section style="height:10vh;">

    </section> -->



    <script src="assets/js/index.js"></script>

</body>

</html>