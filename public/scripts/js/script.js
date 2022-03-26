const selectStats = document.getElementById('select-play-zone')
const selectBuilds = document.getElementById('select-build')

const elStatNbGames = document.getElementById('stat_nb_games')
const elStatWins = document.getElementById('stat_wins')
const elStatKill = document.getElementById('stat_kill')
const elStatAvgDmg = document.getElementById('stat_avg_dmg')
const elStatPickrate = document.getElementById('stat_pickrate')

const elSpell_m1 = document.getElementById('spell_m1')
const elSpell_a = document.getElementById('spell_a')
const elSpell_space = document.getElementById('spell_space')
const elSpell_e = document.getElementById('spell_e')

const elSpell_m1_text = "<h3><strong>ENERGY ARROW</strong></h1><strong>Shoot an energy arrow.</strong><br>Base damage : 200"
const elSpell_a_text = "<h3><strong>CHARGED ARROW</strong></h1><strong>Shoot a charged arrow at a longer range. Apply slow on hit.</strong><br>Base damage : 60 every 0.5s<br>Base CD : 6 seconds"
const elSpell_space_text = "<h3><strong>RECOIL BLAST</strong></h1><strong>Shoot the ground to jump away. Apply knock up on hit.</strong><br>Base damage : 120<br>CD : 6 seconds"
const elSpell_e_text = "<h3><strong>ARROW MISSILE</strong></h1><strong>Shoot a big energy arrow that pierces obstacles and enemies. Apply slow on hit</strong><br>Base damage : 420<br>Base CD : 20 seconds"

selectStats.addEventListener('change', loadStats)
// selectBuilds.addEventListener('change', loadBuilds)

function loadStats() {
    if(selectStats.value == 1) loadStat(currentChar.stats_trio)
    if(selectStats.value == 2) loadStat(currentChar.stats_duo)
}

function loadStat(stats) {
    elStatNbGames.innerHTML = stats.nb_games
    elStatWins.innerHTML = stats.win + "<span style='font-size: 18px;'>(" + stats.winrate + "%)</span>"
    elStatKill.innerHTML = stats.kill_per_game
    elStatAvgDmg.innerHTML = stats.avg_dmg
    elStatPickrate.innerHTML = stats.pickrate + '%'
}

const elOptimalBuildList = document.getElementById("build-optimal_build")
const elCoreItemsList = document.getElementById("build-core_items")
const elGoodItemsList = document.getElementById("build-good_items")
const elTrashItemsList = document.getElementById("build-trash_items")

function loadBuilds() {
    generateBuild(elOptimalBuildList, currentChar.builds.optimal_build)
    generateBuild(elCoreItemsList, currentChar.builds.core_items)
    generateBuild(elGoodItemsList, currentChar.builds.good_items)
    generateBuild(elTrashItemsList, currentChar.builds.trash_items)
}

function generateBuild(element, itemsArray) {
    itemsArray.forEach(function (item, index) {
        element.innerHTML += itemElement.html(items[item])
    });
}

function setSpellTooltip() {
    elSpell_m1.dataset.ptTitle = currentChar.spell_m1
    elSpell_a.dataset.ptTitle = currentChar.spell_a
    elSpell_space.dataset.ptTitle = currentChar.spell_space
    elSpell_e.dataset.ptTitle = currentChar.spell_e
}

const elCharName = document.getElementById('char-name')
const elCharDesc = document.getElementById('char-desc')

function loadInfos(char) {
    elCharName.innerHTML = char.name
    elCharDesc.innerHTML = char.desc
}

const elGoodMatchups = document.getElementById("good-matchups")
const elBadMatchup = document.getElementById("bad-matchups")
const elGoodSynergy = document.getElementById("good-synergy")

function loadMatchups() {
    generateMatchup(elGoodMatchups, currentChar.matchups.good)
    generateMatchup(elBadMatchup, currentChar.matchups.bad)
    generateMatchup(elGoodSynergy, currentChar.matchups.synergy)

}

function generateMatchup(element, matchupsArray) {
    matchupsArray.forEach(function (item, index) {
        console.log(item)
        element.innerHTML += matchupElement.html(chars[item[0]], item[1])
    });
}

function loadAll(char) {
    loadStats()
    loadInfos(char)
    setSpellTooltip()
    loadBuilds()
    loadMatchups()
}

$(document).ready(function(){
    $.protip();
    loadAll(currentChar)
});