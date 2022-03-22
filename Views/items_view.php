<link rel="stylesheet" href="<?php App\Core\View::getAssets("characters.css")?>">

<div class="characters-home-page">
    <div class="character-home">
        <div class="title-header">
            <h1 class="character-list">Bapbap champions search</h1>
            <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
        </div>
        <div class="characters-container">
            <a href="/characters/kitsu" class="character-link">
                <div class="image-wrapper">
                    <img style="width: 100%" src="<?php App\Core\View::getAssets('characters/kitsu.png')?>" alt="">
                </div>
                <div class="character-name">Kitsu</div>
            </a>

            <a href="/characters/kitsu" class="character-link">
                <div class="image-wrapper">
                    <img style="width: 100%" src="<?php App\Core\View::getAssets('characters/anna.png')?>" alt="">
                </div>
                <div class="character-name">Anna</div>
            </a>
            <a href="/characters/kitsu" class="character-link">
                <div class="image-wrapper">
                    <img style="width: 100%" src="<?php App\Core\View::getAssets('characters/chuck.png')?>" alt="">
                </div>
                <div class="character-name">Chuck</div>
            </a>
            <a href="/characters/kitsu" class="character-link">
                <div class="image-wrapper">
                    <img style="width: 100%" src="<?php App\Core\View::getAssets('characters/sashimi.png')?>" alt="">
                </div>
                <div class="character-name">Sashimi</div>
            </a>
            <a href="/characters/kitsu" class="character-link">
                <div class="image-wrapper">
                    <img style="width: 100%" src="<?php App\Core\View::getAssets('characters/kiddo.png')?>" alt="">
                </div>
                <div class="character-name">Kiddo</div>
            </a>
            <a href="/characters/kitsu" class="character-link">
                <div class="image-wrapper">
                    <img style="width: 100%" src="<?php App\Core\View::getAssets('characters/zook.png')?>" alt="">
                </div>
                <div class="character-name">Zook</div>
            </a>
            <a href="/characters/kitsu" class="character-link">
                <div class="image-wrapper">
                    <img style="width: 100%" src="<?php App\Core\View::getAssets('characters/skinny.png')?>" alt="">
                </div>
                <div class="character-name">Skinny</div>
            </a>
            <a href="/characters/kitsu" class="character-link">
                <div class="image-wrapper">
                    <img style="width: 100%" src="<?php App\Core\View::getAssets('characters/froggy.png')?>" alt="">
                </div>
                <div class="character-name">Froggy</div>
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