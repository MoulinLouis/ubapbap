<link rel="stylesheet" href="<?php App\Core\View::getAssets("characters.css")?>">

<style>
.character-link .item-name {
    margin-top: 8px;
    font-size: 0.9rem;
    color: var(--font-color-main);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    text-align: center;
}
.item-name {
    font-weight: 600;
}
.items-container {
    display: grid;
    grid-template-columns: repeat(auto-fill,minmax(100px,1fr));
    grid-gap: 12px 12px;
    padding: 20px;
    margin: 10px;
    height: 170px !important;
    align-items: center !important;
}

.selected {
    border-radius: 4px;
    outline: 4px solid rgba(255,255,255,.7);
    outline-offset: -4px;
}

.sword.selected {
    background: var(--sword-color);
}
.heart_bag.selected {
    background: var(--heart_bag-color);
}
.sunglasses.selected {
    background: var(--sunglasses-color);
}
.teeth.selected {
    background: var(--teeth-color);
}
.headband.selected {
    background: var(--headband-color);
}
.boots.selected {
    background: var(--boots-color);
}
.banana.selected {
    background: var(--banana-color);
}
.spike_armor.selected {
    background: var(--spike_armor-color);
}

.character-link:hover {
    /* border: 4px solid rgba(255,255,255,.7); */
    border-radius: 4px;
    outline: 4px solid rgba(255,255,255,.7);
    outline-offset: -4px;
}

.zook-avatar-border {
    border-radius: 5px;
    border: 2px solid transparent;
    background: var(--zook-color) border-box;
    -webkit-mask-composite: xor;
}
.character-link {
    padding: 12px 10px;
}



</style>

<div class="characters-home-page" style="padding: 20px;">
    <div class="character-home">
        <div class="title-header">
            <h1 class="character-list">All items of bapbap</h1>
            <!-- <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2> -->
        </div>

        <div class="items-container" id="items-containers">


            <?php foreach($allItems as $item) { ?>


            <a href="/items/<?= $item ?>" class="character-link <?= $item ?>">
                <div class='image-wrapper'>
                    <img style='width: 80px' src="/public/images/items/<?= $item ?>.png" alt="<?= $item ?>">
                </div>
                <div class='item-name'><?= ucfirst(str_replace('_', ' ', $item)) ?></div>
            </a>

            <?php } ?>


        </div>


        <?php 
        $actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $item = basename($actual_link);
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
