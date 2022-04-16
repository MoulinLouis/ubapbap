<link rel="stylesheet" href="<?php App\Core\View::getAssets("characters.css")?>">

<style>

.tier-container {
    display: flex;
    flex-direction: column;
    border-left: solid 1px #000;
    border-right: solid 1px #000;
    background: #1a1a17;
    color:#000;
}
.tier-row {
    display: flex;
    flex-direction: row;
    min-height: 80px;
    border-top: solid 1px #000;
    border-bottom: solid 1px #000;
}
.label-holder {
    width: 100px;
    min-height: 80px;
    border-right: solid 1px #000;
    display: flex;
    align-items: center;
    align-items: center;
    justify-content: center;
}
.tier.sort {
    flex: 1;
}
.character {
    display: inline-block;
    height: 80px;
    width: 80px;
    background-position: center;
    background-size: cover;
    flex: none;
    cursor: pointer;

    padding: 0;
    margin: 0;
    font-family: arial;
    font-size: 15px;
    line-height: 19px;
    color: #333;
}

</style>

<div class="character-profile-main-page">
    <div class="character-profile-content-container">
        <div class="character-profile-container page_build">

            <div class="custom-select">
                <select name="" id="select-tierlist">

                </select>
            </div>

            <h1 id="tierlist-desc"></h1>

            <div class="tier-container" id="tier-container">
            

            </div>

        </div>
    </div>
</div>

<script src="<?php App\Core\View::getAssets("tierlist.js")?>"></script>


<script>

</script>