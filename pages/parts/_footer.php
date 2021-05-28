
<footer class="text-white py-3">
    <div class="container text-center">
        <div class="row" class="text-center">
            <div class="col-12">
                <h5>Hummy's VR Comedy</h5>
                <p class="mb-0">                 
                    <a href="https://www.instagram.com/hummys_vr_comedy/" target="_blank" class="hover-scale mx-1"><i class="lni lni-instagram-original text-white"></i></a>
                    <a href="https://www.facebook.com/hummysvrcomedy/" target="_blank" class="hover-scale mx-1"><i class="lni lni-facebook-original text-white"></i></a>
                    <a href="https://www.youtube.com/user/steven2134/" target="_blank" class="hover-scale mx-1"><i class="lni lni-youtube text-white text-white"></i></a>
                    <a href="https://www.twitch.tv/hummysvrcomedy" target="_blank" class="hover-scale mx-1"><i class="lni lni-twitch text-white"></i></a>
                    <a href="https://twitter.com/HummysVr" target="_blank" class="hover-scale mx-1"><i class="lni lni-twitter-original text-white"></i></a>
                </p>
            </div>
            <div class="col-12">
                <a class="small" href="/privacy-policy">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.2/dist/lazyload.min.js"></script>

<!-- Custom JS -->
<script src="<?php $Helper->getAsset('dist/js/app.min.js');?>"></script>
<script src="https://cdn.jsdelivr.net/gh/manucaralmo/GlowCookies@3.1.1/src/glowCookies.min.js"></script>
<script>
    glowCookies.start('en', { 
        style: 3,
        analytics: 'G-CDJ8SMCEF7',
        policyLink: '/privacy-policy.html',
        position: 'right',
        bannerColor: '#212529',
        acceptBtnColor: '#fff',
        acceptBtnBackground: '#fe0000',
        manageColor: '#212529',
        customScript: [
            { type: 'custom', position: 'body', content: `$( document ).ready(function() { populateYoutubeVideos(); populateTwitchStream(); });` }
        ]
    });
</script>
</body>
</html>