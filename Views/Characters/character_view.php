<link rel="stylesheet" href="<?php App\Core\View::getAssets("characters.css")?>">
<link rel="stylesheet" href="<?php App\Core\View::getAssets("libraries/protip.min.css")?>">

<div class="character-profile-main-page">
    <div class="character-profile-content-container">
        <div class="character-profile-container page_build" style="background-repeat: no-repeat; background-size: 1014px 570px; background-position: 50% -60px; background-image: radial-gradient(400px 200px at 60% 34%, rgba(7, 7, 32, 0) 0%, rgb(7, 7, 32) 100%), linear-gradient(90deg, rgb(7, 7, 32) 0%, rgba(7, 7, 32, 0.6) 100%), 
        url('<?php App\Core\View::getAssets("characters/". $currentChar ."_bg.png")?>');">
            
            <div>
                <div class="character-header">
                    <div class="character-header-wrapper">
                        <div class="character-image-container" style="border-color: rgb(50, 115, 250);">
                            <div class="character-image-border">
                                <img src="<?php App\Core\View::getAssets("characters/". $currentChar .".png")?>" alt=". $currentChar ." class="character-image">
                            </div>
                        </div>
                        <div class="character-header-info">
                            <h1 class="character-label">
                                <span class="character-name" id="char-name"></span>
                                <span class="character-title" id="char-desc"></span>
                            </h1>
                            
                        </div>
                    </div>
                </div>

                <h1 class="character-label">
                    <span class="character-name" id="char-name">HP : <span id="character_hp"></span></span>
                    <span class="character-title" id="char-desc">Speed : <span id="character_speed"></span></span>
                </h1><br>

                <div class="character-profile-page">
                    <div class="character-build">
                        <div class="character-skills" style="padding-bottom: 25px">
                            <div class="character-skill-with-label protip" id="spell_m1" data-pt-gravity="top">
                                <img src="<?php App\Core\View::getAssets("spells/". $currentChar ."/spell_m1.png")?>" alt="">
                                <div class="skill-label bottom-center">M1</div>
                            </div>

                            <div class="character-skill-with-label protip" id="spell_a" data-pt-gravity="top">
                                <img src="<?php App\Core\View::getAssets("spells/". $currentChar ."/spell_a.png")?>" alt="">
                                <div class="skill-label bottom-center">Q</div>
                                
                            </div>
                            <div class="character-skill-with-label protip" id="spell_space" data-pt-gravity="top">
                                <img src="<?php App\Core\View::getAssets("spells/". $currentChar ."/spell_space.png")?>" alt="">
                                <div class="skill-label bottom-center space">SPACE</div>
                            </div>
                            <div class="character-skill-with-label protip" id="spell_e" data-pt-gravity="top">
                                <img src="<?php App\Core\View::getAssets("spells/". $currentChar ."/spell_e.png")?>" alt="">
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
                                            <option value="1">Ranked Trios #1</option>
                                            <option value="2">Ranked Duos #1</option>
                                            <option value="3">Ranked Trios #2</option>
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
                                            <option value="1">Default build</option>
                                            <option value="2">Best player' preferences incoming</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h1><span id="whodidit"></span></h1>

                        <div class="content-section recommended-build_items">
                            <div class="content-section_content item-options item-options-1">
                                <div class="content-section_header">Optimal build</div>
                                <div class="item-option-list" id="build-optimal_build">
                                    
                                </div>
                            </div>
                            <div class="content-section_content item-options item-options-2">
                                <div class="content-section_header">Core items</div>
                                <div class="item-option-list" id="build-core_items">

                                </div>

                            </div>
                            <div class="content-section_content item-options item-options-1">
                                <div class="content-section_header">Good items</div>
                                <div class="item-option-list" id="build-good_items">
                                    
                                </div>
                            </div>
                            <div class="content-section_content item-options item-options-1">
                                <div class="content-section_header">Lame</div>
                                <div class="item-option-list" id="build-trash_items">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="matchups-wrapper">
                            <div class="content-section toughest-matchups">
                                <div class="content-section_header">
                                    <span style="margin-right: 12px;">Good matchups</span>
                                </div>
                                <div class="matchups" id="good-matchups">

                                </div>
                            </div>
                            <div class="content-section toughest-matchups">
                                <div class="content-section_header">
                                    <span style="margin-right: 12px;">Toughest matchups</span>
                                </div>
                                <div class="matchups" id="bad-matchups">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="matchups-wrapper">
                            <div class="content-section toughest-matchups">
                                <div class="content-section_header">
                                    <span style="margin-right: 12px;">Good synergy</span>
                                </div>
                                <div class="matchups" id="good-synergy">

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php App\Core\View::getAssets("libraries/protip.min.js")?>"></script>
<script src="<?php App\Core\View::getAssets("characters.js")?>"></script>
<script src="<?php App\Core\View::getAssets("items.js")?>"></script>

<script src="<?php App\Core\View::getAssets("script.js")?>"></script>

<script>




</script>
