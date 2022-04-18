<link rel="stylesheet" href="<?php App\Core\View::getAssets("characters.css")?>">

<style>
.btn-container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.characters-container {
    grid-template-columns: repeat(auto-fill,minmax(80px,1fr)) !important;
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
.kitsu {
    background: linear-gradient(to left,#e619a9,#f830dd);
}
.anna {
    background: linear-gradient(to left,#199be6,#2cc9e5);
}

</style>

<div class="characters-home-page">
    <div class="character-home">
        <div class="title-header">
            <h1 class="character-list">Bapbap champions search</h1>
            <h2 class="subtitle">Find all the characters informations on bapbap</h2>
        </div>
        <div class="characters-container" id="char-containerss">

            <div class="char-btn animate__animated animate__fadeIn kitsu">
                <a href="?c=kitsu"><img class="char-btn-img noselect" src="/public/images/characters/portraits/kitsu.png"></a>
            </div>
            <div class="char-btn animate__animated animate__fadeIn anna">
                <a href="?c=anna"><img class="char-btn-img noselect" src="/public/images/characters/portraits/anna.png"></a>
            </div>


        </div>

        <?php 
        if(!empty($_GET['c'])) {
            $currentChar = $_GET['c'];
            include('Views/Characters/character_view.php');
        }
        
        // include('Views/Characters/character_view.php') ?>


    </div>
</div>
<script>
    
</script>
<script src="<?php App\Core\View::getAssets("items.js")?>"></script>
<script src="<?php App\Core\View::getAssets("characters.js")?>"></script>

<script>
    $('.char-btn').on("click", function(e) {
        $('.selected').removeClass('selected');

        $(this).addClass("selected")


    });

    var path = window.location.href;
    $('.char-btn a').each(function() {
        if (path.indexOf(this.href) >= 0) {
            $(this).parent().addClass('selected');
        }
    });



    const elCharsContainer = document.getElementById("char-containers")
    var getUrl = window.location;
    var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

    $.each(chars, function( index, value ) {
        let html = "<a href='/characters/" + index + "' class='character-link'>" +
                        "<div class='image-wrapper-char'>" +
                            "<img style='width: 100%' src='" + getUrl.protocol + "//" + getUrl.host + "/public/images/characters/" + index + ".png' alt=''>" +
                        "</div>" +
                        "<div class='character-name'>" + value.name +"</div>" +
                   "</a>"
        // elCharsContainer.innerHTML += html
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