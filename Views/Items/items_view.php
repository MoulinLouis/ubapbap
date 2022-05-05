<?php 
$actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$item = basename($actual_link);
if(!empty($item) && $item == "items") {?>
    <title>Items stats - UBAPBAP</title>
    <meta name="title" content="Items stats - UBAPBAP">
    <meta name="description" content="Full coverage of Latest BAPBAP Patch in-game items. Master the game with your knowledge!">
<?php
}
?>

<link rel="stylesheet" href="<?php App\Core\View::getAssets("characters.css")?>">
<link rel="stylesheet" href="<?php App\Core\View::getAssets("items.css")?>">

<div class="characters-home-page" style="padding: 20px;">
    <div class="character-home">
        <div class="title-header">
            <h1 class="character-list">All items of bapbap</h1>
            <!-- <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2> -->
        </div>

        <div class="items-container" id="items-containers">

            <?php foreach($allItems as $items) { ?>

            <a href="/items/<?= $items ?>" class="character-link <?= $items ?>">
                <div class='image-wrapper'>
                    <img style='width: 80px' src="/public/images/items/<?= $items ?>.png" alt="<?= $items ?>">
                </div>
                <div class='item-name'><?= ucfirst(str_replace('_', ' ', $items)) ?></div>
            </a>

            <?php } ?>


        </div>

        <?php 
        if(!empty($item) && $item != "items") {
            include('Views/Items/item_view.php');
        }
        ?>

    </div>
</div>

<script>
    const elCharsContainer = document.getElementById("items-containers")
    var getUrl = window.location;
    var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

    // $.each(items, function( index, value ) {
    //     let html = "<a href='/items/" + index + "' class='character-link " + index + "'>" +
    //                     "<div class='image-wrapper'>" +
    //                         "<img style='width: 80px' src='" + getUrl.protocol + "//" + getUrl.host + value.imageUrl + "' alt=" + value.name +">" +
    //                     "</div>" +
    //                     "<div class='item-name'>" + value.name +"</div>" +
    //                "</a>"
    //     elCharsContainer.innerHTML += html
    // });

    var path = window.location.href;
    $('#items-containers a').each(function() {
        if (path.indexOf(this.href) >= 0) {
            $(this).addClass('selected');
        } else {
            $(this).removeClass('selected');
        }
    });

    $(function() {
        $('.character-link').hover(function(e) {
            // $(this).find(".image-wrapper").css('outline', '-webkit-focus-ring-color auto 1px');
            $(this).find(".character-name").css('font-weight', 'bold');

        }, function() {
            // on mouseout, reset the background colour
            $(this).find(".image-wrapper").css('outline', '');
            $(this).find(".character-name").css('font-weight', '');

        });
    });
</script>
