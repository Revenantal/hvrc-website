<header id="home" class="d-flex align-items-center">

    <div class="video-background w-100">
        <div class="overlay"></div>
        <?php 
            $videoArray = ['cards.mp4', 'drinks.mp4', 'heart-roll.mp4', 'jump-scare.mp4', 'out-ya-go.mp4', 'shark-attack.mp4', 'tummy-touch.mp4'];
            $videoName = $videoArray[array_rand($videoArray)]; 
        ?>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="lazy" data-src="<?php $Helper->getAsset('dist/assets/video/' . $videoName);?>">
            <source type="video/mp4" >
        </video>
    </div>

    <div class="intro w-100">
        <nav class="navbar navbar-expand navbar-hvrc w-100">
            <div class="container">
                <ul class="navbar-nav nav-fill w-100 d-flex justify-content-around">
                    <a class="logo align-self-center d-flex" href="#home">
                        <img src="<?php $Helper->getAsset('dist/assets/img/hvrc-logo.png');?>" class="img-fluid align-self-center hover-scale mx-auto d-block" alt="Hummy's VR Comedy Logo">
                    </a>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#youtube">YOUTUBE</a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#twitch">TWITCH</a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#podcast">PODCAST</a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#support">SUPPORT</a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#social">SOCIAL</a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#about">ABOUT</a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#contact">CONTACT</a></li>
                    
                </ul>
            </div>
        </nav>

        <div class="container mt-lg-3 mt-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">An Improv Comedy Trio</h1>
                </div>
            </div>
        </div>
    </div>

</header>