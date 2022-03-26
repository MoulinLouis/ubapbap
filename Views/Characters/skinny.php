<link rel="stylesheet" href="<?php App\Core\View::getAssets("characters.css")?>">
<link rel="stylesheet" href="http://protip.rocks/protip.min.css">

<div class="character-profile-main-page">
    <div class="character-profile-content-container">
        <div class="character-profile-container page_build" style="background-repeat: no-repeat; background-size: 1014px 570px; background-position: 50% -60px; background-image: radial-gradient(400px 200px at 60% 34%, rgba(7, 7, 32, 0) 0%, rgb(7, 7, 32) 100%), linear-gradient(90deg, rgb(7, 7, 32) 0%, rgba(7, 7, 32, 0.6) 100%), url('<?php App\Core\View::getAssets("characters/kitsu_bg.png")?>');">
            
            <div>
                <div class="character-header">
                    <div class="character-header-wrapper">
                        <div class="character-image-container" style="border-color: rgb(50, 115, 250);">
                            <div class="character-image-border">
                                <img src="<?php App\Core\View::getAssets("characters/kitsu.png")?>" alt="kitsu" class="character-image">
                            </div>
                        </div>
                        <div class="character-header-info">
                            <h1 class="character-label">
                                <span class="character-name">K i t s u</span>
                                <span class="character-title">&nbsp&nbsp&nbsp&nbsp&nbspThe cute archer</span>
                            </h1>
                            
                        </div>
                    </div>
                </div>

                <div class="character-profile-page">
                    <div class="character-build">
                        <div class="character-skills" style="padding-bottom: 25px">
                            <div class="character-skill-with-label protip" id="spell_m1" data-pt-gravity="top">
                                <img src="<?php App\Core\View::getAssets("spells/kitsu/spell_m1.png")?>" alt="">
                                <div class="skill-label bottom-center">M1</div>
                            </div>

                            <div class="character-skill-with-label protip" id="spell_a" data-pt-gravity="top">
                                <img src="<?php App\Core\View::getAssets("spells/kitsu/spell_a.png")?>" alt="">
                                <div class="skill-label bottom-center">A</div>
                                
                            </div>
                            <div class="character-skill-with-label protip" id="spell_space" data-pt-gravity="top">
                                <img src="<?php App\Core\View::getAssets("spells/kitsu/spell_space.png")?>" alt="">
                                <div class="skill-label bottom-center space">SPACE</div>
                            </div>
                            <div class="character-skill-with-label protip" id="spell_e" data-pt-gravity="top">
                                <img src="<?php App\Core\View::getAssets("spells/kitsu/spell_e.png")?>" alt="">
                                <div class="skill-label bottom-center">E</div>
                            </div>
                        </div>

                        <div class="filter-manager">
                            <div class="filter-width-wrapper">
                                <div class="filter-manager_container">
                                    <div class="filter-manager_label" style="padding-right: 10px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 10"><path fill="#176dff" d="M17 2H1a1 1 0 010-2h16a1 1 0 011 1zm-4 4H5a1 1 0 010-2h8a1 1 0 011 1zM8 9a1 1 0 111 1z"></path></svg>
                                        <span class="media-query">Filters</span>
                                    </div>
                                    <div class="custom-select">
                                        <select name="" id="select-play-zone">
                                            <option value="1">Ranked Trios</option>
                                            <option value="2">Ranked Duos</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="content-section character-ranking-stats">
                            <div class="win-rate">
                                <div class="value" id="stat_nb_games"></div>
                                <div class="label">games</div>
                            </div>
                            <div class="win-rate">
                                <div class="value" id="stat_wins"></div>
                                <div class="label">Wins</div>
                            </div>
                            <div class="win-rate">
                                <div class="value" id="stat_kill"></div>
                                <div class="label">Kill per game</div>
                            </div>
                            <div class="win-rate">
                                <div class="value" id="stat_avg_dmg"></div>
                                <div class="label">Average damages</div>
                            </div>
                            <div class="win-rate">
                                <div class="value" id="stat_pickrate"></div>
                                <div class="label">Pick rate</div>
                            </div>
                        </div>

                        <div class="filter-manager">
                            <div class="filter-width-wrapper">
                                <div class="filter-manager_container">
                                    <div class="filter-manager_label" style="padding-right: 10px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 10"><path fill="#176dff" d="M17 2H1a1 1 0 010-2h16a1 1 0 011 1zm-4 4H5a1 1 0 010-2h8a1 1 0 011 1zM8 9a1 1 0 111 1z"></path></svg>
                                        <span class="media-query">Filters</span>
                                    </div>
                                    <div class="custom-select">
                                        <select id="select-build">
                                            <option value="">Default build (darkni)</option>
                                            <option value="">Best player' preferences incoming</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-section recommended-build_items">
                            <div class="content-section_content item-options item-options-1">
                                <div class="content-section_header">Optimal build</div>
                                <div class="item-option-list">
                                    <div class="item-option">
                                        <div class="item-img">
                                            <div>
                                                <img style="height: 48px;" src="<?php App\Core\View::getAssets("items/sword2.png")?>" alt="">
                                            </div>
                                        </div>
                                        <div class="item-stats">
                                            <div class="winrate">Sword</div>
                                            <div class="matches">+ damage</div>
                                        </div>
                                    </div>
                                    <div class="item-option">
                                        <div class="item-img">
                                            <div>
                                                <img style="height: 48px;" src="<?php App\Core\View::getAssets("items/heart2.png")?>" alt="">
                                            </div>
                                        </div>
                                        <div class="item-stats">
                                            <div class="winrate">Heart bag</div>
                                            <div class="matches">+ hp<br>+ hp regen</div>
                                        </div>
                                    </div>
                                    <div class="item-option">
                                        <div class="item-img">
                                            <div>
                                                <img style="height: 48px;" src="<?php App\Core\View::getAssets("items/crit2.png")?>" alt="">
                                            </div>
                                        </div>
                                        <div class="item-stats">
                                            <div class="winrate">Sunglasses</div>
                                            <div class="matches">% crit chance<br>% crit damage</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-section_content item-options item-options-2">
                                <div class="content-section_header">Core items</div>
                                <div class="item-option-list">
                                <div class="item-option">
                                        <div class="item-img">
                                            <div>
                                                <img style="height: 48px;" src="<?php App\Core\View::getAssets("items/sword2.png")?>" alt="">
                                            </div>
                                        </div>
                                        <div class="item-stats">
                                            <div class="winrate">Sword</div>
                                            <div class="matches">+ damage</div>
                                        </div>
                                    </div>
                                    <div class="item-option">
                                        <div class="item-img">
                                            <div>
                                                <img style="height: 48px;" src="<?php App\Core\View::getAssets("items/heart2.png")?>" alt="">
                                            </div>
                                        </div>
                                        <div class="item-stats">
                                            <div class="winrate">Heart bag</div>
                                            <div class="matches">+ hp<br>+ hp regen</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="content-section_content item-options item-options-1">
                                <div class="content-section_header">Good items</div>
                                <div class="item-option-list">
                                    <div class="item-option">
                                        <div class="item-img">
                                            <div>
                                                <img style="height: 48px;" src="<?php App\Core\View::getAssets("items/crit2.png")?>" alt="">
                                            </div>
                                        </div>
                                        <div class="item-stats">
                                            <div class="winrate">Sunglasses</div>
                                            <div class="matches">% crit chance<br>% crit damage</div>
                                        </div>
                                    </div>
                                    <div class="item-option">
                                        <div class="item-img">
                                            <div>
                                                <img style="height: 48px;" src="<?php App\Core\View::getAssets("items/teeth2.png")?>" alt="">
                                            </div>
                                        </div>
                                        <div class="item-stats">
                                            <div class="winrate">Teeth</div>
                                            <div class="matches">% life steal<br>+ hp</div>
                                        </div>
                                    </div>
                                    <div class="item-option">
                                        <div class="item-img">
                                            <div>
                                                <img style="height: 48px;" src="<?php App\Core\View::getAssets("items/band.png")?>" alt="">
                                            </div>
                                        </div>
                                        <div class="item-stats">
                                            <div class="winrate">Headband</div>
                                            <div class="matches">+ atk speed<br>+ move speed</div>
                                        </div>
                                    </div>
                                    <div class="item-option">
                                        <div class="item-img">
                                            <div>
                                                <img style="height: 48px;" src="<?php App\Core\View::getAssets("items/boots2.png")?>" alt="">
                                            </div>
                                        </div>
                                        <div class="item-stats">
                                            <div class="winrate">Boots</div>
                                            <div class="matches">+ speed<br>+ hp</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="content-section_content item-options item-options-1">
                                <div class="content-section_header">It's no. items</div>
                                <div class="item-option-list">
                                    <div class="item-option">
                                        <div class="item-img">
                                            <div>
                                                <img style="height: 48px;" src="<?php App\Core\View::getAssets("items/thorn2.png")?>" alt="">
                                            </div>
                                        </div>
                                        <div class="item-stats">
                                            <div class="winrate">Spike armor</div>
                                            <div class="matches">% reflect dmg<br>+ hp</div>
                                        </div>
                                    </div>
                                    <div class="item-option">
                                        <div class="item-img">
                                            <div>
                                                <img style="height: 48px;" src="<?php App\Core\View::getAssets("items/banana.png")?>" alt="">
                                            </div>
                                        </div>
                                        <div class="item-stats">
                                            <div class="winrate">Watch</div>
                                            <div class="matches">% cd speed<br>+ move speed</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="matchups-wrapper">
                            <div class="content-section toughest-matchups">
                                <div class="content-section_header">
                                    <span style="margin-right: 12px;">Good matchups</span>
                                </div>
                                <div class="matchups">
                                    <a href="/characters/skinny" class="character-matchup">
                                        <div class="character-face">
                                            <img src="<?php App\Core\View::getAssets("characters/skinny.png")?>" alt="">
                                        </div>
                                        <div class="character-name-2">
                                            Skinny
                                        </div>
                                    </a>
                                    <a href="/characters/zook" class="character-matchup">
                                        <div class="character-face">
                                            <img src="<?php App\Core\View::getAssets("characters/zook.png")?>" alt="">
                                        </div>
                                        <div class="character-name-2">
                                            Zook
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="content-section toughest-matchups">
                                <div class="content-section_header">
                                    <span style="margin-right: 12px;">Toughest matchups</span>
                                </div>
                                <div class="matchups">
                                    <a href="/characters/froggy" class="character-matchup">
                                        <div class="character-face">
                                            <img src="<?php App\Core\View::getAssets("characters/froggy.png")?>" alt="">
                                        </div>
                                        <div class="character-name-2">
                                            Froggy
                                        </div>
                                        <div class="character-description"></div>
                                    </a>
                                    <a href="/characters/kiddo" class="character-matchup">
                                        <div class="character-face">
                                            <img src="<?php App\Core\View::getAssets("characters/kiddo.png")?>" alt="">
                                        </div>
                                        <div class="character-name-2">
                                            Kiddo
                                        </div>
                                        <div class="character-description"></div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="matchups-wrapper">
                            <div class="content-section toughest-matchups">
                                <div class="content-section_header">
                                    <span style="margin-right: 12px;">Good synergy</span>
                                </div>
                                <div class="matchups">
                                    <a href="/characters/sashimi" class="character-matchup">
                                        <div class="character-face">
                                            <img src="<?php App\Core\View::getAssets("characters/sashimi.png")?>" alt="">
                                        </div>
                                        <div class="character-name-2">
                                            Sashimi
                                        </div>
                                        <div class="character-description">Peel you good</div>
                                    </a>
                                    <a href="/characters/kiddo" class="character-matchup">
                                        <div class="character-face">
                                            <img src="<?php App\Core\View::getAssets("characters/kiddo.png")?>" alt="">
                                        </div>
                                        <div class="character-name-2">
                                            Kiddo
                                        </div>
                                        <div class="character-description">Combo ultimate</div>
                                    </a>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="http://protip.rocks/protip.min.js"></script>
<script>

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
selectBuilds.addEventListener('change', loadBuilds)

let arrayStats = {
    stats_trio: {
        nb_games: 3454,
        kill_per_game: Math.round((3454 / 4494) * 100) / 100,
        assist_per_game: Math.round((3454 / 3938) * 100) / 100,
        death_per_game: Math.round((3454 / 4747) * 100) / 100,
        pickrate: Math.round((0.08691 * 100) * 100) / 100,
        win: 512,
        winrate: Math.round((512 / 3454) * 100),
        avg_dmg: Math.round(21742.15953 * 100) / 100,
    },
    stats_duo: {
        nb_games: 4315,
        kill_per_game: Math.round((4315 / 4780) * 100) / 100,
        assist_per_game: Math.round((4315 / 4733) * 100) / 100,
        death_per_game: Math.round((4315 / 3516) * 100) / 100,
        pickrate: Math.round((0.10858 * 100) * 100) / 100,
        win: 461,
        winrate: Math.round((461 / 4315) * 100),
        avg_dmg: Math.round(13014.75898 * 100) / 100,
    }
}

function loadStats() {
    if(selectStats.value == 1) loadStat(arrayStats.stats_trio)
    if(selectStats.value == 2) loadStat(arrayStats.stats_duo)
}
function loadStat(stats) {
    console.log(stats)
    elStatNbGames.innerHTML = stats.nb_games
    elStatWins.innerHTML = stats.win + "<span style='font-size: 18px;'>(" + stats.winrate + "%)</span>"
    elStatKill.innerHTML = stats.kill_per_game
    elStatAvgDmg.innerHTML = stats.avg_dmg
    elStatPickrate.innerHTML = stats.pickrate + '%'
}

function loadBuilds() {
    // TODO
}

function setSpellTooltip() {
    elSpell_m1.dataset.ptTitle = elSpell_m1_text
    elSpell_a.dataset.ptTitle = elSpell_a_text
    elSpell_space.dataset.ptTitle = elSpell_space_text
    elSpell_e.dataset.ptTitle = elSpell_e_text
}

$(document).ready(function(){
    $.protip();
    loadStats()
    setSpellTooltip()
});
</script>
