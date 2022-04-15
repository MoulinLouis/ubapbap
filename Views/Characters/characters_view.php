<link rel="stylesheet" href="<?php App\Core\View::getAssets("characters.css")?>">

<div class="characters-home-page">
    <div class="character-home">
        <div class="title-header">
            <h1 class="character-list">Bapbap champions search</h1>
            <h2 class="subtitle">Find all the characters informations on bapbap</h2>
        </div>
        <div class="characters-container" id="char-containers">

        </div>
    </div>
</div>
<script src="<?php App\Core\View::getAssets("items.js")?>"></script>
<script>
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
        elCharsContainer.innerHTML += html
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