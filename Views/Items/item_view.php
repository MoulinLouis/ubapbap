<link rel="stylesheet" href="<?php App\Core\View::getAssets("characters.css")?>">
<link rel="stylesheet" href="<?php App\Core\View::getAssets("items.css")?>">

<div class="character-profile-main-page">
    <div class="character-profile-content-container">
        <div class="character-profile-container page_build">
            <div class="character-header">
                <div class="character-header-wrapper">
                    <div class="character-image-container" style="border-color: rgb(50, 115, 250);">
                        <div class="character-image-border">
                            <img src="" class="item-image" id="item-image">
                        </div>
                    </div>
                    <div class="character-header-info">
                        <h1 class="character-label">
                            <span class="character-name" id="item-name"></span>
                            <span class="character-title" id="item-desc"></span>
                        </h1>
                        
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: center;">
                <table class="rwd-table" id="item-stats-table">

                </table>
            </div>
        </div>
    </div>
</div>

<script src="<?php App\Core\View::getAssets("items.js")?>"></script>
<script>

let currentItemName = window.location.pathname.split("/").pop()

currentItem = items[currentItemName]

console.log(currentItem)

const elItemName = document.getElementById('item-name')
const elItemDesc = document.getElementById('item-desc')
const elItemImage = document.getElementById('item-image')

const elItemStatsTable = document.getElementById('item-stats-table')

function loadInfos() {
    elItemName.innerHTML = currentItem.name
    elItemDesc.innerHTML = currentItem.desc
    elItemImage.src = currentItem.imageUrl
}

function loadStats() {
    let tableHeader = ''
    let tableStats = ''

    let tableStatCommon = ''
    let tableStatUncommon = ''
    let tableStatRare = ''
    let tableStatEpic = ''
    let tableStatLegendary = ''

    tableHeader += '<tr>'
    $.each(currentItem.stats, function( index, value ) {
        tableHeader += `<th>${value.name}</th>`

        tableStatCommon += `<td>${value.common}${value.type}</td>`
        tableStatUncommon += `<td>${value.uncommon}${value.type}</td>`
        tableStatRare += `<td>${value.rare}${value.type}</td>`
        tableStatEpic += `<td>${value.epic}${value.type}</td>`
        tableStatLegendary += `<td>${value.legendary}${value.type}</td>`
    });
    tableHeader += '</tr>'

    tableStats += `
        <tr style="background-color: #E5E5E5;">
            ${tableStatCommon}
        </tr>
        <tr style="background-color: #53FF67;">
            ${tableStatUncommon}
        </tr>
        <tr style="background-color: #2DDEFF;">
            ${tableStatRare}
        </tr>
        <tr style="background-color: #C56BF2;">
            ${tableStatEpic}
        </tr>
        <tr style="background-color: #FFCC33;">
            ${tableStatLegendary}
        </tr>
    `
    console.log(tableHeader + tableStats)
    elItemStatsTable.innerHTML = tableHeader + tableStats
}

function loadAll() {
    loadInfos()
    loadStats()
}

$(document).ready(function(){
    loadAll()
});

</script>