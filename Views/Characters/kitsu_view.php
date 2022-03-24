<link rel="stylesheet" href="<?php App\Core\View::getAssets("characters.css")?>">
<link rel="stylesheet" href="http://protip.rocks/protip.min.css">

<?php
$char_stats_trios = [
    "nb_games" => 3454,
    "kill_per_game" => round(3454 / 4494, 2),
    "assist_per_game" => round(3454 / 3938, 2),
    "death_per_game" => round(3454 / 4747, 2),
    "pickrate" => round(0.08691 * 100, 2),
    "win" => 512,
    "avg_dmg" => round(21742.15953, 2),
];
$spell_m1 = "<h3><strong>ENERGY ARROW</strong></h1><strong>Shoot an energy arrow.</strong><br>Base damage : 200";
$spell_a = "<h3><strong>CHARGED ARROW</strong></h1><strong>Shoot a charged arrow at a longer range. Apply slow on hit.</strong><br>Base damage : 60 every 0.5s<br>Base CD : 6 seconds";
$spell_space = "<h3><strong>RECOIL BLAST</strong></h1><strong>Shoot the ground to jump away. Apply knock up on hit.</strong><br>Base damage : 120<br>CD : 6 seconds";
$spell_e = "<h3><strong>ARROW MISSILE</strong></h1><strong>Shoot a big energy arrow that pierces obstacles and enemies. Apply slow on hit</strong><br>Base damage : 420<br>Base CD : 20 seconds";
?>

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
                            <div class="character-skill-with-label protip" data-pt-gravity="top" data-pt-title="<?= $spell_m1 ?>">
                                <img src="<?php App\Core\View::getAssets("spells/kitsu/spell_m1.png")?>" alt="">
                                <div class="skill-label bottom-center">M1</div>
                            </div>

                            <div class="character-skill-with-label protip" data-pt-gravity="top" data-pt-title="<?= $spell_a ?>">
                                <img src="<?php App\Core\View::getAssets("spells/kitsu/spell_a.png")?>" alt="">
                                <div class="skill-label bottom-center">A</div>
                                
                            </div>
                            <div class="character-skill-with-label protip" data-pt-gravity="top" data-pt-title="<?= $spell_space ?>">
                                <img src="<?php App\Core\View::getAssets("spells/kitsu/spell_space.png")?>" alt="">
                                <div class="skill-label bottom-center space">SPACE</div>
                            </div>
                            <div class="character-skill-with-label protip" data-pt-gravity="top" data-pt-title="<?= $spell_e ?>">
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
                                    <select name="" id="select-play-zone">
                                        <option value="">Ranked Trios</option>
                                        <option value="">Ranked Duos</option>
                                        <option value="">Playtest #5</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="content-section character-ranking-stats">
                            <div class="win-rate">
                                <div class="value"><?= $char_stats_trios["nb_games"] ?></div>
                                <div class="label">games</div>
                            </div>
                            <div class="win-rate">
                                <div class="value"><?= $char_stats_trios["win"] ?></div>
                                <div class="label">Wins</div>
                            </div>
                            <div class="win-rate">
                                <div class="value"><?= $char_stats_trios["kill_per_game"] ?></div>
                                <div class="label">Kill per game</div>
                            </div>
                            <div class="win-rate">
                                <div class="value"><?= $char_stats_trios["avg_dmg"] ?></div>
                                <div class="label">Average damages</div>
                            </div>
                            <div class="win-rate">
                                <div class="value"><?= $char_stats_trios["pickrate"] ?>%</div>
                                <div class="label">Pick rate</div>
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
$(document).ready(function(){
    $.protip();
});
</script>
