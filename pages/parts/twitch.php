<div id="twitch" class="angled-transition angle-left">
    <div class="section vh-125 d-flex align-items-center">

        <div class="video-background w-100">
            <div class="overlay white"></div>
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="slower lazy" data-src="<?php $Helper->getAsset('dist/assets/video/shark-attack.mp4');?>">
                <source type="video/mp4" >
            </video>
        </div>
            
        <div class="content w-100 py-5 py-xl-0">
            <div class="container py-5 py-xl-0">
                <div class="row d-flex align-items-stretch">
                    <div class="col-xl-6 offset-xl-6 offset-xl-3">
                        <div class="row">
                            <div class="col-xl-12 col-6 offset-xl-0 offset-3">
                            <a href="https://www.twitch.tv/hummysvrcomedy/" target="_blank">
                            <img src="<?php $Helper->getAsset('dist/assets/img/twitch-logo.png');?>" alt="Twitch Logo" class="img-fluid hover-scale px-md-5">
                        </a>
                            </div>
                            <div class="col-12">
                            <h4 class="text-center mt-3 mb-5">for when you can't get enough</h4>
                            </div>
                        </div> 
                    </div>
                    <div class="col-xl-9 col-10 offset-xl-0 offset-1">
                        <div id="twitch-stream-container" class="embed-responsive embed-responsive-16by9"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>