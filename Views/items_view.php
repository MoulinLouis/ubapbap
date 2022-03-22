<link rel="stylesheet" href="<?php App\Core\View::getAssets("characters.css")?>">

<div class="characters-home-page">
    <div class="character-home">
        <div class="title-header">
            <h1 class="character-list">Bapbap items list</h1>
            <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
        </div>
        <div class="characters-container">
            <a href="/characters/kitsu" class="character-link">
                <div class="image-wrapper">
                    <img style="width: 100%" src="<?php App\Core\View::getAssets('items/sword2.png')?>" alt="">
                </div>
                <div class="character-name">Sword</div>
            </a>

        </div>
    </div>
</div>

<script>
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