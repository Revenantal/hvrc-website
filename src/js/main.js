var YTdeferred = $.Deferred();
 window.onYouTubeIframeAPIReady = function() {
   YTdeferred.resolve(window.YT);
};

$( document ).ready(function() {

    var $header = $('nav');
    var stickyNavPoint = $header.offset().top + $header.outerHeight() + 200;
    var stickyNavActive = stickyNavPoint + 200;

    window.onscroll = function() {toggleStickyHeader()};

    init();

    function init() {
        toggleStickyHeader();
        populateYoutubeVideos();
        populateTwitchStream();

        var lazyload = new LazyLoad({
            callback_loading: function(element) {
                if (element.classList.contains('slower')) {
                    element.playbackRate = 0.5;
                }
                
            },
        });

        var easter_egg = new Konami(function() { jobeyInvasion(5000); });
    }

    YTdeferred.done(function(YT) {

        var _youtubePlayer = null;
        var $youtubeContainers = $('.youtube-container');

        if ($youtubeContainers.length > 0) {
            var request = $.get( "/youtube.php", function(data) {
                if (data.length != 0) {
                    var i = 0;
                    $youtubeContainers.each(function() {
                        $(this).prepend("<div id='youtube-video-" + data.items[i].id.videoId + "'></div>");

                        _youtubePlayer = new YT.Player("youtube-video-" + data.items[i].id.videoId, {
                            width: 530,
                            height: 300,
                            videoId: data.items[i].id.videoId,    
                            playerVars: {
                                modestbranding: true,
                                enablejsapi:    true,
                                rel:            true
                            }
                        });
                        i++;
                    });
                }
            })
            .fail(function(jqXHR, textStatus, errorThrown)  {
                console.log(jqXHR, textStatus, errorThrown);
            });
        } 
    });

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function toggleStickyHeader() {
        if (window.pageYOffset > stickyNavActive && !$header.hasClass("is-sticky hidden")) {
            $header.addClass("is-sticky");
        } else if (window.pageYOffset > stickyNavActive) {
            $header.removeClass("hidden");
        } else if (window.pageYOffset > stickyNavPoint) {
            $header.addClass("is-sticky hidden");
        } else {
            $header.removeClass("is-sticky hidden");
        }
    }

    function populateYoutubeVideos() {
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    }

    function populateTwitchStream() {
        var options = {
            width: 825,
            height: 465,
            channel: "hummysvrcomedy"
          };
          var player = new Twitch.Player("twitch-stream-container", options);
          player.setMuted(true);
    }

    function jobeyInvasion(frequency) {

        var confirmedCrazy = confirm("Are you sure you wish to invoke the ancient ritual of the Konami Code?");
        if (confirmedCrazy == true) {
            alert('All your base are belong to Jobey');

            $('*').addClass("jobey-invasion");
            var alertSound = new Audio('/dist/assets/sound/hummy.mp3');


            window.setInterval(function(){
                var $elements = $('*');
                var next_jobey_index = Math.floor(Math.random() * ($elements.length));
                $($elements[next_jobey_index]).addClass('jobey');

                alertSound.play();
                console.log('A wild Jobey has appeared!');

            }, frequency);
        }
    } 
});