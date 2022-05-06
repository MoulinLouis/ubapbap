<?php
$actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$char = basename($actual_link);
if (!empty($char) && $char == "characters") { ?>
    <title>Characters stats - UBAPBAP</title>
    <meta name="title" content="Characters stats - UBAPBAP">
    <meta name="description" content="Best UBAPBAP Stats! Check the data for Every Characters. Find your Build and Win more Games">
<?php
}
?>

<link rel="stylesheet" href="<?php App\Core\View::getAssets("characters.css") ?>">

<div class="landing-bg"></div>
<div class="landing-bg2"></div>

<div class="characters-home-page"  style="padding: 20px;">
    <div class="character-home">
        <div class="title-header">
            <h1 class="character-list">All characters of bapbap</h1>
            <!-- <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2> -->
        </div>

        <div class="characters-container" id="char-containers">

            <?php foreach($allCharacters as $character) { ?>

            <div class="char-btn animate__animated animate__fadeIn <?= $character ?>">
                <a href="/characters/<?= $character ?>"><img class="char-btn-img noselect" src="/public/images/characters/portraits/<?= $character ?>.png" alt="<?= $character ?>"></a>
            </div>

            <?php } ?>

        </div>

        <?php
        if (!empty($char) && $char != "characters") {
            $currentChar = $char;
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
