<link rel="stylesheet" href="<?php App\Core\View::getAssets("characters.css") ?>">

<div class="landing-bg"></div>
<div class="landing-bg2"></div>

<div id="particles-js" style="width: 80%; height: 90%; position: absolute;"></div>

<script src="<?php App\Core\View::getAssets("libraries/particles.min.js") ?>"></script>
<script src="<?php App\Core\View::getAssets("particles-characters.js") ?>"></script>


<div class="characters-home-page">
    <div class="character-home">
        <div class="characters-container" id="char-containers">

            <?php foreach($allCharacters as $character) { ?>

            <div class="char-btn animate__animated animate__fadeIn <?= $character ?>">
                <a href="/characters/<?= $character ?>"><img class="char-btn-img noselect" src="/public/images/characters/portraits/<?= $character ?>.png"></a>
            </div>

            <?php } ?>

        </div>

        <?php
        $actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $character = basename($actual_link);
        if (!empty($character) && $character != "characters") {
            $currentChar = $character;
            include('Views/Characters/character_view.php');
        }
        ?>

    </div>
</div>



<script src="<?php App\Core\View::getAssets("items.js") ?>"></script>
<!-- <script src="<?php App\Core\View::getAssets("characters.js") ?>"></script> -->

<script>

    const elCharsContainer = document.getElementById("char-containers")
    var getUrl = window.location;
    var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

    // $.each(chars, function(index, value) {
    //     let html = `<div class="char-btn animate__animated animate__fadeIn ${index}">
    //                     <a href="/characters/${index}"><img class="char-btn-img noselect" src="/public/images/characters/portraits/${index}.png"></a>
    //                 </div>`

    //     // let html = "<a href='/characters/" + index + "' class='character-link'>" +
    //     //                 "<div class='image-wrapper-char'>" +
    //     //                     "<img style='width: 100%' src='" + getUrl.protocol + "//" + getUrl.host + "/public/images/characters/" + index + ".png' alt=''>" +
    //     //                 "</div>" +
    //     //                 "<div class='character-name'>" + value.name +"</div>" +
    //     //            "</a>"
    //     elCharsContainer.innerHTML += html
    // });


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