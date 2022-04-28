<link rel="stylesheet" href="<?php App\Core\View::getAssets("characters.css")?>">

<style>
.btn-container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.char-btn {
    margin: 0 12px;
    border-radius: 5px;
    cursor: pointer;
    height: 90px;
    width: 80px;
    transform: skewX(-10deg);
    transition: height 100ms;
    overflow: hidden;
    box-shadow: -4px 4px 1px rgb(0 0 0 / 20%);
}
.char-btn:hover {
    border: 4px solid rgba(255,255,255,.7);
    border-radius: 3px;
}

.animate__fadeIn {
    -webkit-animation-name: fadeIn;
    animation-name: fadeIn;
}

.animate__animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-duration: var(--animate-duration);
    animation-duration: var(--animate-duration);
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}
.char-btn:hover:not(.selected) .char-btn-img {
    margin-left: -19px;
    margin-top: -39px;
}
.char-btn .char-btn-img {
    height: 170px;
    margin-left: -15px;
    margin-top: -35px;
    transform: skewX(10deg);
}
.char-btn.selected {
    width: 80px;
    height: 140px;
    border: 4px solid #fff;
    border-radius: 3px;
}
/* .landing-bg {
    position: absolute;
    bottom: 0px;
    left: 0px;
    right: 0px;
    top: 0px;
    perspective: 1000px;
    perspective-origin: 50% 50%;
    z-index: -3;
    background: linear-gradient(to left, rgb(235, 32, 79), rgb(255, 42, 109)) 0% 0% / cover;
} */

.landing-bg2 {
    background: url(/public/images/lineup.png) center center / cover no-repeat fixed;
    position: absolute;
    inset: 10px;
    opacity: 0.15;
    z-index: -1;
}

</style>

<div class="landing-bg"></div>
<div class="landing-bg2"></div>

<div id="particles-js" style="width: 80%; height: 80%; position: absolute;"></div>
<div class="characters-home-page">
    <div class="character-home">

        <div class="characters-container" id="char-containers">

            <!-- <div class="char-btn animate__animated animate__fadeIn kitsu">
                <a href="/characters/kitsu"><img class="char-btn-img noselect" src="/public/images/characters/portraits/kitsu.png"></a>
            </div>
            <div class="char-btn animate__animated animate__fadeIn anna">
                <a href="/characters/anna"><img class="char-btn-img noselect" src="/public/images/characters/portraits/anna.png"></a>
            </div> -->


        </div>

        <?php 
        $actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $character = basename($actual_link);
        if(!empty($character) && $character != "characters") {
            $currentChar = $character;
            include('Views/Characters/character_view.php');
        }
        ?>


    </div>
</div>

<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

<script>
particlesJS("particles-js", {"particles":{"number":{"value":147,"density":{"enable":true,"value_area":800}},"color":{"value":"#020614"},"shape":{"type":"triangle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":4,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":8.017060304327615,"direction":"top-right","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"repulse"},"onclick":{"enable":false,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"remove":{"particles_nb":2}}},"retina_detect":false});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); update = function() { stats.begin(); stats.end(); requestAnimationFrame(update); }; requestAnimationFrame(update); stats.domElement.style.display = 'none'</script>
<script src="<?php App\Core\View::getAssets("items.js")?>"></script>
<!-- <script src="<?php App\Core\View::getAssets("characters.js")?>"></script> -->

<script>
    const elCharsContainer = document.getElementById("char-containers")
    var getUrl = window.location;
    var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

    $.each(chars, function( index, value ) {
        let html = `<div class="char-btn animate__animated animate__fadeIn ${index}">
                        <a href="/characters/${index}"><img class="char-btn-img noselect" src="/public/images/characters/portraits/${index}.png"></a>
                    </div>`

        // let html = "<a href='/characters/" + index + "' class='character-link'>" +
        //                 "<div class='image-wrapper-char'>" +
        //                     "<img style='width: 100%' src='" + getUrl.protocol + "//" + getUrl.host + "/public/images/characters/" + index + ".png' alt=''>" +
        //                 "</div>" +
        //                 "<div class='character-name'>" + value.name +"</div>" +
        //            "</a>"
        elCharsContainer.innerHTML += html
    });


    var path = window.location.href;
    $('.char-btn a').each(function() {
        if (path.indexOf(this.href) >= 0) {
            $(this).parent().addClass('selected');
        } else {
            $(this).parent().removeClass('selected');
        }
    });

    $(function() {
        $('.character-link').hover(function(e) {
            $(this).find(".image-wrapper").css('outline', '-webkit-focus-ring-color auto 1px');
            $(this).find(".character-name").css('font-weight', 'bold');

        }, function() {
            // on mouseout, reset the background colour
            $(this).find(".image-wrapper").css('outline', '');
            $(this).find(".character-name").css('font-weight', '');

        });
    });
</script>