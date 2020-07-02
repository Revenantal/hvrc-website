<div id="twitch" class="angled-transition angle-left">
    <div class="section vh-125 d-flex align-items-center">

        <div class="video-background w-100 h-100">
            <div class="overlay white"></div>
            <video class="slower" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="<?php $Helper->getAsset('dist/assets/video/shark-attack.mp4');?>" type="video/mp4">
            </video>
        </div>

            
        <div class="content w-100">
            <div class="container">
                <div class="row d-flex align-items-stretch">
                    <div class="col-md-6 offset-md-6">
                        <a href="https://www.twitch.tv/hummysvrcomedy/" target="_blank">
                            <img src="<?php $Helper->getAsset('dist/assets/img/twitch-logo.png');?>" alt="Twitch Logo" class="img-fluid hover-scale px-md-5">
                        </a>
                        <h4 class="text-center mt-3 mb-5">for when you can't get enough</h4>
                    </div>
                    <div class="col-md-9">
                        <div id="twitch-stream-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>