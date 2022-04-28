<link rel="stylesheet" href="<?php App\Core\View::getAssets("patch-notes.css")?>">

<div class="tm-timeline uk-margin-large-top uk-margin-xlarge-bottom">

            <div class="tm-timeline-entry">
                <div class="tm-timeline-time">
                    <h4><?php echo date("M jS, Y", strtotime("2022-04-17")); ?></h4>
                </div>
                <div class="tm-timeline-body">
                    <h2 class="uk-margin-medium-bottom">Version closed beta</h2>
                    <ul class="uk-list uk-list-medium">
                        <li>Reduced Teevee damage for LMB and Q a bit</li>
                        <li>Reduced Teevee clone duration and clone spawn range</li>
                        <li>Teevee Q now inflicts a slow effect instead of a root effect</li>
                        <li>Teevee clones should no longer be able to trigger revive altars</li>
                        <li>Fixed bug where teevee rotated sideways when spawning clones</li>
                        <li>Bot AI improvments and general tweaks</li>
                        <li>Increased bot AI difficulty, but made them less aggro</li>
                        <li>Bots should no longer see hidden players</li>
                        <li>Players who disconnect from the game will now drop their items</li>
                        <li>Fixed bug where teammate minimap icons would remain even if the teammate died</li>
                        <li>Fixed issue where zooks homing missile didnt track enemies properly</li>
                        <li>Other small fixes</li>
                    </ul>
                </div>
            </div>
            <div class="tm-timeline-entry uk-margin-xlarge-top">
                <div class="tm-timeline-time">
                    <h4><?php echo date("M jS, Y", strtotime("2022-04-09")); ?></h4>
                </div>
                <div class="tm-timeline-body">
                    <h2 class="uk-margin-medium-bottom">Version closed beta</h2>
                    <ul class="uk-list uk-list-medium">
                        <li>Added a new character Teevee, a script kiddie with the ability to place controllable clones of himself</li>
                        <li>Added AI controlled bot players, that will be spawned to fill games</li>
                        <li>Changed the queue page to now be integrated in the main lobby</li>
                        <li>When leaving a game, stats will now update immediatly without having to wait for the match to end</li>
                        <li>Added sounds and animations for in game ui buttons and elements</li>
                        <li>Implemented sound effects for the ring</li>
                        <li>Able to ping abilities cooldown to your teammates</li>
                        <li>Added a button to mute chat messages and pings from individual teammates</li>
                        <li>Some general bug fixes and tweaks</li>
                    </ul>
                </div>
            </div>

            <div class="tm-timeline-entry uk-margin-xlarge-top">
                <div class="tm-timeline-time">
                    <h4><?php echo date("M jS, Y", strtotime("2022-04-01")); ?></h4>
                </div>
                <div class="tm-timeline-body">
                    <h2 class="uk-margin-medium-bottom">Version closed beta</h2>
                    <ul class="uk-list uk-list-medium">
                        <li>Added a profile page in the lobby, with player stats and match history</li>
                        <li>Added some sick spicey beats for the lobby</li>
                        <li>Added realtime shadows options in the graphics settings menu, with different quality modes</li>
                        <li>Added settings option to customize game framerate</li>
                        <li>Fixed bug where respawn altar audio time wouldnt synchronize correctly</li>
                        <li>Used respawn altars no longer pingable when they're used</li>
                        <li>Fixed bug where spectators would be able to ping items and characters behind walls</li>
                        <li>Added character name to chat messages when pinging enemies</li>
                        <li>Fixed a bug where the spectating player's camera wouldnt reset after getting revived by teammates</li>
                        <li>Some other small fixes</li>
                    </ul>
                </div>
            </div>

            <div class="tm-timeline-entry uk-margin-xlarge-top">
                <div class="tm-timeline-time">
                    <h4><?php echo date("M jS, Y", strtotime("2022-03-26")); ?></h4>
                </div>
                <div class="tm-timeline-body">
                    <h2 class="uk-margin-medium-bottom">Version closed beta</h2>
                    <ul class="uk-list uk-list-medium">
                        <li>Fixed a bug where end game squad stats wouldnt show up</li>
                        <li>Fixed a bug where speed pickups werent picked up if jumping on them</li>
                        <li>Added new animations for getting launched in a jump pad for all characters</li>
                        <li>Added a new ping "On my way" on the top ping wheel option, and added a center option for the basic marker</li>
                        <li>Ping messages in chat now show color for item rarity and enemies</li>
                        <li>Added experimental graphic option for ambient occlusion and some minor visual tweaks</li>
                        <li>Points of interest now show as named and colored in the minimap</li>
                        <li>Some small fixes</li>
                    </ul>
                </div>
            </div>

            <div class="tm-timeline-entry uk-margin-xlarge-top">
                <div class="tm-timeline-time">
                    <h4><?php echo date("M jS, Y", strtotime("2022-03-18")); ?></h4>
                </div>
                <div class="tm-timeline-body">
                    <h2 class="uk-margin-medium-bottom">Version closed beta</h2>
                    <ul class="uk-list uk-list-medium">
                        <li>Added a squad stats section that shows up when the squad wins or is eliminated, <br>and features the most valuable squad member</li>
                        <li>Added a ping system, with support for pinging locations, items, enemies and elements<br> in the map by pressing the right mouse button. Different marker types can be selected by a selection wheel</li>
                        <li>Nerfed kitsu's item damage scaling slightly</li>
                        <li>Reduced bullet spread on Kitsu and Anna</li>
                        <li>Added anti-cheat measures for users who performed speed hacking</li>
                        <li>Fixed bug where zone circle would end up outside of the map</li>
                        <li>Fixed bug where already used revive altars will be pointed in the minimap</li>
                        <li>Fixed server high ping issues</li>
                        <li>Other small bugs and fixes</li>
                    </ul>
                </div>
            </div>

            <div class="tm-timeline-entry uk-margin-xlarge-top">
                <div class="tm-timeline-time">
                    <h4><?php echo date("M jS, Y", strtotime("2022-03-11")); ?></h4>
                </div>
                <div class="tm-timeline-body">
                    <h2 class="uk-margin-medium-bottom">Version closed beta</h2>
                    <ul class="uk-list uk-list-medium">
                        <li>Made sashimi's space ability casting faster and increased its damage</li>
                        <li>Nerfed zooks explosion damage and ultimate mines damage slightly</li>
                        <li>Introduced a new legendary loot crate, located in large pois and storing a guarantied legendary item</li>
                        <li>Sprint pickup lasts longer when picked, so your teammates can also take it</li>
                        <li>Skinny's invisibility proximity indicator now changes color to red when hes really close</li>
                        <li>Froggy can no longer pass through thin walls when using the q ability</li>
                        <li>Respawn visuals change depending on if its being used</li>
                        <li>Added some sweet sounds for the revive altar</li>
                        <li>Removed chat to all players temporarily</li>
                        <li>Some small tweaks and fixes</li>
                    </ul>
                </div>
            </div>

            <div class="tm-timeline-entry uk-margin-xlarge-top">
                <div class="tm-timeline-time">
                    <h4><?php echo date("M jS, Y", strtotime("2022-03-05")); ?></h4>
                </div>
                <div class="tm-timeline-body">
                    <h2 class="uk-margin-medium-bottom">Version closed beta</h2>
                    <ul class="uk-list uk-list-medium">
                        <li>When queuing solo on team based modes, players with the same character will not be paired together</li>
                        <li>Reworked the revive altar with some new visuals</li>
                        <li>Added directional icons in the minimap for teammates that are far</li>
                        <li>Added a killed icon in the minimap where a teammate died</li>
                        <li>Teammate ui in the top left flashes red when they get damaged</li>
                        <li>When any teammates are dead, the minimap now shows the direction of the closest revive altar</li>
                        <li>Added a "squad eliminated" message when wiping a squad</li>
                        <li>Added a button to exit to lobby when spectating</li>
                        <li>Made the in game chat slightly bigger</li>
                        <li>Increased minimap size and added a legend to the icons when expanded</li>
                        <li>Npcs no longer loop forever taking jump pads when not intended</li>
                        <li>Fixed skinny's proximity icon not showing up</li>
                        <li>Buffed sashimi health a bit and decreased zook damage a bit</li>
                        <li>Fixed bug where sprint pickups werent applied sometimes</li>
                        <li>Fixed some other general bugs</li>
                    </ul>
                </div>
            </div>

            <div class="tm-timeline-entry uk-margin-xlarge-top">
                <div class="tm-timeline-time">
                    <h4><?php echo date("M jS, Y", strtotime("2022-02-28")); ?></h4>
                </div>
                <div class="tm-timeline-body">
                    <h2 class="uk-margin-medium-bottom">Version closed beta</h2>
                    <ul class="uk-list uk-list-medium">
                        <li>Lobby now waits for all players to ready up in order to enter queue</li>
                        <li>Fixed high ping issues and added eu region servers</li>
                        <li>Explosive barrel now does a combination of base damage + percentage of hp</li>
                        <li>Lifesteal no longer applies to explosive barrels</li>
                        <li>Explosive barrels dont damage your allies now, only yourself and enemies</li>
                        <li>Items cannot be dropped while jumping/on air anymore</li>
                        <li>Fixed some obstacle jumping collision bugs</li>
                        <li>Skinny now shows a progress bar to indicate the duration of his invisible ability</li>
                        <li>Fixed bug where zook mines were non hittable</li>
                        <li>Adjusted some ability indicators and vfx to more accurately represent their hitbox</li>
                        <li>Added re-bindable keys for movement controls</li>
                        <li>Added streamer mode/anonymous features and antialiasing options in the settings menu</li>
                        <li>Ability tooltips now show the current stats (affected by items) alongside base stats</li>
                        <li>Fixed some general bugs and small tweaks</li>
                    </ul>
                </div>
            </div>

            <div class="tm-timeline-entry uk-margin-xlarge-top">
                <div class="tm-timeline-time">
                    <h4><?php echo date("M jS, Y", strtotime("2022-02-18")); ?></h4>
                </div>
                <div class="tm-timeline-body">
                    <h2 class="uk-margin-medium-bottom">Version closed beta</h2>
                    <ul class="uk-list uk-list-medium">
                        <li>Fixed lobby game loading bug</li>
                        <li>Fixed duplicate teams in queue bug</li>
                        <li>General tweaks and improvements to the lobby</li>
                        <li>Removed double barrels, you know the ones.</li>
                        <li>New settings menu, with a controls menu to customize input key binds</li>
                        <li>Settings now are remembered after closing the game</li>
                        <li>Added proximity indicator when skinny is close when invisible</li>
                        <li>Increased Kitsu Q area size</li>
                        <li>Reduced Froggy's LMB damage scaling</li>
                        <li>Increased Zook's rocket speed</li>
                        <li>Reduced Skinny's LMB damage scaling</li>
                        <li>Increased drop rates for orange NPC, Red NPC and purple crates</li>
                    </ul>
                </div>
            </div>

            <div class="tm-timeline-entry uk-margin-xlarge-top">
                <div class="tm-timeline-time">
                    <h4><?php echo date("M jS, Y", strtotime("2022-02-16")); ?></h4>
                </div>
                <div class="tm-timeline-body">
                    <h2 class="uk-margin-medium-bottom">Version closed beta</h2>
                    <ul class="uk-list uk-list-medium">
                        <li>Added Mini Duos map</li>
                        <li>Changed Zook's rockets to be faster</li>
                        <li>Skinny flame bug fix</li>
                        <li>Spectator now able to see spectated player's items</li>
                        <li>Respawn altar no longer gives items to disconnected players</li>
                        <li>Added facebook login</li>
                        <li>Changed Anna's Q to be faster, but less range</li>
                        <li>Reduced Anna's LMB range</li>
                        <li>Reduced Skinny's Q range</li>
                        <li>Removed "left game" messages in chat</li>
                    </ul>
                </div>
            </div>

            <div class="tm-timeline-entry uk-margin-xlarge-top">
                <div class="tm-timeline-time">
                    <h4><?php echo date("M jS, Y", strtotime("2022-02-07")); ?></h4>
                </div>
                <div class="tm-timeline-body">
                    <h2 class="uk-margin-medium-bottom">Version closed beta</h2>
                    <ul class="uk-list uk-list-medium">
                        <li>Added new background for the lobby</li>
                        <li>Zone now always does damage and ignores invincibility frames</li>
                        <li>Dropped items now have a small delay until they are able to be picked up again</li>
                        <li>Removed the in-game player scoreboard</li>
                        <li>Thorns now doesnt kill players, only damage them up to 1 hp</li>
                        <li>Respawn altar now only drops up to green tier items</li>
                        <li>Added new ruins and oasis modules for the desert biome</li>
                        <li>Added new bigger modules to the maps, and some loot balancing</li>
                        <li>Made kiddo more fashionable</li>
                        <li>Big red npc is less shaky</li>
                        <li>Fixed bug where the last two players fighting would end up in a tie</li>
                        <li>General bug fixes and tweaks</li>
                    </ul>
                </div>
            </div>

            <div class="tm-timeline-entry uk-margin-xlarge-top">
                <div class="tm-timeline-time">
                    <h4><?php echo date("M jS, Y", strtotime("2022-01-31")); ?></h4>
                </div>
                <div class="tm-timeline-body">
                    <h2 class="uk-margin-medium-bottom">Version closed beta</h2>
                    <ul class="uk-list uk-list-medium">
                        <li>Reduced Chuck ult's damage, atk speed and jump range</li>
                        <li>Reduced Froggy's ult range</li>
                        <li>Increased Anna's LMB fire rate, but with less damage</li>
                        <li>Reduced Orange NPC's HP and increased it's drop rate</li>
                        <li>Increased Purple crate and Red NPC's HP</li>
                        <li>Increased Kiddo's Q damage</li>
                        <li>Increased HP and HP regen on Heart bag</li>
                        <li>Heavily reduced thorns reflect %</li>
                        <li>New map modules</li>
                        <li>New MINI map</li>
                        <li>HUD resized and more readable</li>
                        <li>No longer able to stack characters in the same lobby</li>
                        <li>Lobby now remembers last picked character</li>
                        <li>Title in browser tab updates when in queue</li>
                        <li>Added sound on start countdown</li>
                        <li>Fixed some item descriptions</li>
                        <li>Fixed fog of war bugs</li>
                        <li>Fixed end match bugs</li>
                        <li>Fixed zone timings bug</li>
                    </ul>
                </div>
            </div>

            <div class="tm-timeline-entry uk-margin-xlarge-top">
                <div class="tm-timeline-time">
                    <h4><?php echo date("M jS, Y", strtotime("2022-01-24")); ?></h4>
                </div>
                <div class="tm-timeline-body">
                    <h2 class="uk-margin-medium-bottom">Version closed beta</h2>
                    <ul class="uk-list uk-list-medium">
                        <li>More optimizations, better performance</li>
                        <li>Fixed burn effect to not be stackable</li>
                        <li>Reduced HP for all characters</li>
                        <li>Added distinct color to some enemy spells</li>
                        <li>Added item stats</li>
                        <li>Added ability stats and cooldown</li>
                        <li>New char illustrations</li>
                        <li>New map modules</li>
                    </ul>
                </div>
            </div>

            <div class="tm-timeline-entry uk-margin-xlarge-top">
                <div class="tm-timeline-time">
                    <h4><?php echo date("M jS, Y", strtotime("2022-01-17")); ?></h4>
                </div>
                <div class="tm-timeline-body">
                    <h2 class="uk-margin-medium-bottom">Version closed beta</h2>
                    <ul class="uk-list uk-list-medium">
                        <li>Optimized the game to run smoother</li>
                        <li>Reworked some of the UI (font, size) </li>
                        <li>Reworked Kiddo's Q size and visuals</li>
                        <li>We nuked bushes, removed a lot of them and reduced their sizes</li>
                        <li>Increased vision to max view</li>
                        <li>Increased item rarity drop rates</li>
                        <li>Map is now bigger</li>
                        <li>New character illustrations</li>
                        <li>A lot of bug fixes</li>
                    </ul>
                </div>
            </div>


        </div>