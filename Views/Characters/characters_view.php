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


</style>

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
<script>
    
</script>
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