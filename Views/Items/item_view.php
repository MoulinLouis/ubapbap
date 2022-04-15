<link rel="stylesheet" href="<?php App\Core\View::getAssets("characters.css")?>">

<style>
    @import "https://fonts.googleapis.com/css?family=Montserrat:300,400,700";
.rwd-table {
  margin: 1em 0;
  min-width: 300px;
}
.rwd-table tr {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
}
.rwd-table th {
  display: none;
}
.rwd-table td {
  display: block;
}
.rwd-table td:first-child {
  padding-top: 0.5em;
}
.rwd-table td:last-child {
  padding-bottom: 0.5em;
}
.rwd-table td:before {
  content: attr(data-th) ": ";
  font-weight: bold;
  width: 6.5em;
  display: inline-block;
}
@media (min-width: 480px) {
  .rwd-table td:before {
    display: none;
  }
}
.rwd-table th,
.rwd-table td {
  text-align: left;
}
@media (min-width: 480px) {
  .rwd-table th,
  .rwd-table td {
    display: table-cell;
    padding: 0.25em 0.5em;
  }
  .rwd-table th:first-child,
  .rwd-table td:first-child {
    padding-left: 0;
  }
  .rwd-table th:last-child,
  .rwd-table td:last-child {
    padding-right: 0;
  }
}

.rwd-table {
  background: #34495e;
  color: #fff;
  border-radius: 0.4em;
  overflow: hidden;
}
.rwd-table tr {
  border-color: #46637f;
}
.rwd-table th,
.rwd-table td {
  margin: 0.5em 1em;
}
@media (min-width: 480px) {
  .rwd-table th,
  .rwd-table td {
    padding: 1em !important;
  }
}
.rwd-table th,
.rwd-table td:before {
  color: #dd5;
}

</style>

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
                <table class="rwd-table">
                    <tr>
                        <th>HP</th>
                        <th>HP REGEN</th>
                    </tr>
                    <tr style="background-color: grey;">
                        <td>500</td>
                        <td>50</td>
                    </tr>
                    <tr style="background-color: green;">
                        <td>500</td>
                        <td>50</td>
                    </tr>
                    <tr style="background-color: blue;">
                        <td>500</td>
                        <td>50</td>
                    </tr>
                    <tr style="background-color: purple;">
                        <td>500</td>
                        <td>50</td>
                    </tr>
                    <tr style="background-color: yellow;">
                        <td>500</td>
                        <td>50</td>
                    </tr>

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

function loadInfos() {
    elItemName.innerHTML = currentItem.name
    elItemDesc.innerHTML = currentItem.desc
    elItemImage.src = currentItem.imageUrl
}

function loadAll() {
    loadInfos()
}

$(document).ready(function(){
    loadAll()
});

</script>