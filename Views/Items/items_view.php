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

.sword.selected{
    background: var(--sword-color);
    border-radius: 4px;
}


</style>

<div class="characters-home-page">
    <div class="character-home">
        <div class="title-header">
            <h1 class="character-list">Bapbap items list</h1>
            <h2 class="subtitle">Find all the items informations of bapbap</h2>
        </div>
        <div class="characters-container" id="items-containers">




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
<script src="<?php App\Core\View::getAssets("items.js")?>"></script>
<script>
    const elCharsContainer = document.getElementById("items-containers")
    var getUrl = window.location;
    var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

    $.each(items, function( index, value ) {
        let html = "<a href='/items/" + index + "' class='character-link " + index + "'>" +
                        "<div class='image-wrapper'>" +
                            "<img style='width: 80px' src='" + getUrl.protocol + "//" + getUrl.host + value.imageUrl + "' alt=''>" +
                        "</div>" +
                        "<div class='item-name'>" + value.name +"</div>" +
                   "</a>"
        elCharsContainer.innerHTML += html
    });

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
            $(this).find(".image-wrapper").css('outline', '-webkit-focus-ring-color auto 1px');
            $(this).find(".character-name").css('font-weight', 'bold');

        }, function() {
            // on mouseout, reset the background colour
            $(this).find(".image-wrapper").css('outline', '');
            $(this).find(".character-name").css('font-weight', '');

        });
    });
</script>