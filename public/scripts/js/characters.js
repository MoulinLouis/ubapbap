
let currentCharName = window.location.pathname.split("/").pop()

let currentChar;

switch(currentCharName) {
    case "anna":
        currentChar = {
            name: "Anna",
            desc: "",
            hp: 1600,
            speed: 380,
            stats_trio_1: {
                nb_games: 2509,
                kill_per_game: Math.round((2509 / 2681) * 100) / 100,
                assist_per_game: Math.round((2509 / 3047) * 100) / 100,
                death_per_game: Math.round((2509 / 2674) * 100) / 100,
                pickrate: Math.round((0.06313 * 100) * 100) / 100,
                win: 259,
                winrate: Math.round((259 / 2509) * 100),
                avg_dmg: Math.round(18689.29932 * 100) / 100,
            },
            stats_duo_1: {
                nb_games: 4832,
                kill_per_game: Math.round((4832 / 5497) * 100) / 100,
                assist_per_game: Math.round((4832 / 5295) * 100) / 100,
                death_per_game: Math.round((4832 / 3656) * 100) / 100,
                pickrate: Math.round((0.1215 * 100) * 100) / 100,
                win: 464,
                winrate: Math.round((464 / 4832) * 100),
                avg_dmg: Math.round(12144.18936 * 100) / 100,
            },
            stats_trios_2: {
                nb_games: 4832,
                kill_per_game: Math.round((4832 / 5497) * 100) / 100,
                assist_per_game: Math.round((4832 / 5295) * 100) / 100,
                death_per_game: Math.round((4832 / 3656) * 100) / 100,
                pickrate: Math.round((0.1215 * 100) * 100) / 100,
                win: 464,
                winrate: Math.round((464 / 4832) * 100),
                avg_dmg: Math.round(12144.18936 * 100) / 100,
            },
            builds: {
                optimal_build: ["sword", "heart_bag", "banana"],
                core_items: ["sword", "heart_bag"],
                good_items: ["banana", "spike_armor", "teeth", "sunglasses"],
                trash_items: ["headband", "boots"]
            },
            matchups: {
                good: [["chuck", "Very easy to kite"], ["kiddo", "Easy to dodge spells/ult"]],
                bad: [["froggy", "Can hard engage you and cancel your ultimate"]],
                synergy: [["sashimi", "Can peel you + combo ultimate"], ["kitsu", "Combo ultimate"]]
            },
            spell_m1: "<h3><strong>RUN N' GUN</strong></h3><strong>Fire 4 small bullets.</strong><br>Damage : 60 per shot",
            spell_a: "<h3><strong>SHOTGUN</strong></h1><strong>Fire 3 big bullets at once.</strong><br>Ddamage : 120<br>CD : 5 seconds",
            spell_space: "<h3><strong>DASH</strong></h1><strong>Perform a quick dash.</strong><br>CD : 3 seconds",
            spell_e: "<h3><strong>TORNADO</strong></h1><strong>Spin and shoot everything around you. Apply slow on hit.</strong><br>Damage : 140 every 0.35s<br>CD : 15 seconds"
        }
        document.getElementById('whodidit').innerHTML = "Currently made by Darkgui"
        break;
    case "chuck":
        currentChar = {
            name: "Chuck",
            desc: "The duck",
            hp: 2000,
            speed: 380,
            stats_trio_1: {
                nb_games: 2587,
                kill_per_game: Math.round((2587 / 2342) * 100) / 100,
                assist_per_game: Math.round((2587 / 3067) * 100) / 100,
                death_per_game: Math.round((2587 / 6492) * 100) / 100,
                pickrate: Math.round((0.0651 * 100) * 100) / 100,
                win: 512,
                winrate: Math.round((512 / 2587) * 100),
                avg_dmg: Math.round(15343.50633 * 100) / 100,
            },
            stats_duo_1: {
                nb_games: 4274,
                kill_per_game: Math.round((4274 / 4271) * 100) / 100,
                assist_per_game: Math.round((4274 / 4594) * 100) / 100,
                death_per_game: Math.round((4274 / 3709) * 100) / 100,
                pickrate: Math.round((0.10755 * 100) * 100) / 100,
                win: 461,
                winrate: Math.round((461 / 4274) * 100),
                avg_dmg: Math.round(10578.61 * 100) / 100,
            },
            stats_trio_2: {
                nb_games: 2207,
                kill_per_game: Math.round((2207 / 2172) * 100) / 100,
                assist_per_game: Math.round((2207 / 2867) * 100) / 100,
                death_per_game: Math.round((2207 / 2969) * 100) / 100,
                pickrate: Math.round((0.08944 * 100) * 100) / 100,
                win: 464,
                winrate: Math.round((464 / 2207) * 100),
                avg_dmg: Math.round(14513.61214 * 100) / 100,
            },
            builds: {
                optimal_build: ["heart_bag", "boots", "spike_armor"],
                core_items: ["heart_bag", "boots"],
                good_items: ["spike_armor", "headband", "banana", "sword", "sunglasses"],
                trash_items: ["teeth"]
            },
            matchups: {
                good: [],
                bad: [["sashimi", ""], ["skinny", ""], ["froggy", ""]],
                synergy: []
            },
            spell_m1: "<h3><strong>PUNCH</strong></h3><strong>Punch for a 3-hit combo.</strong><br>Damage : 170 per punch",
            spell_a: "<h3><strong>CHUCK PUNCH</strong></h3><strong>Throw a powerful punch. Apply stun on hit.</strong><br>Damage : 320<br>CD : 5 seconds",
            spell_space: "<h3><strong>JUMP POUND</strong></h3><strong>Jump to a location. Apply knock up on land.</strong><br>Damage : 250<br>CD : 6 seconds",
            spell_e: "<h3><strong>RAGE</strong></h3><strong>Activate your rage potion to become stronger and faster.</strong><br>Duration : 10 seconds<br>HP Increase : 400<br>Damage Increase : 200<br>Atk spd Increase : 25%<br>Speed increase : 80<br>CD : 20 seconds"
        }
        document.getElementById('whodidit').innerHTML = "Currently made by tado"
        break;
    case "froggy":
        currentChar = {
            name: "Froggy",
            desc: "The sticky",
            hp: 1400,
            speed: 380,
            stats_trio_1: {
                nb_games: 3454,
                kill_per_game: Math.round((3454 / 4494) * 100) / 100,
                assist_per_game: Math.round((3454 / 3938) * 100) / 100,
                death_per_game: Math.round((3454 / 4747) * 100) / 100,
                pickrate: Math.round((0.08691 * 100) * 100) / 100,
                win: 512,
                winrate: Math.round((512 / 3454) * 100),
                avg_dmg: Math.round(21742.15953 * 100) / 100,
            },
            stats_duo_1: {
                nb_games: 4315,
                kill_per_game: Math.round((4315 / 4780) * 100) / 100,
                assist_per_game: Math.round((4315 / 4733) * 100) / 100,
                death_per_game: Math.round((4315 / 3516) * 100) / 100,
                pickrate: Math.round((0.10858 * 100) * 100) / 100,
                win: 461,
                winrate: Math.round((461 / 4315) * 100),
                avg_dmg: Math.round(13014.75898 * 100) / 100,
            },
            stats_trio_2: {
                nb_games: 4832,
                kill_per_game: Math.round((4832 / 5497) * 100) / 100,
                assist_per_game: Math.round((4832 / 5295) * 100) / 100,
                death_per_game: Math.round((4832 / 3656) * 100) / 100,
                pickrate: Math.round((0.1215 * 100) * 100) / 100,
                win: 464,
                winrate: Math.round((464 / 4832) * 100),
                avg_dmg: Math.round(12144.18936 * 100) / 100,
            },
            builds: {
                optimal_build: ["banana", "sword", "sunglasses"],
                core_items: ["banana", "sword"],
                good_items: ["sunglasses", "heart_bag", "headband", "boots", "teeth"],
                trash_items: ["spike_armor"]
            },
            matchups: {
                good: [],
                bad: [],
                synergy: []
            },
            spell_m1: "<h3><strong>SWORD SLASH</strong></h3><strong>Slash for a 3-hit combo. Apply slow on the 3rd slash.</strong><br>Damage : 140 per attack<br>3rd atk damage : 200",
            spell_a: "<h3><strong>STICKY TONGUE</strong></h3><strong>Pull yourself with your tongue. Apply slow on hit.</strong><br>CD : 5 seconds",
            spell_space: "<h3><strong>SPIN JUMP</strong></h3><strong>Leap to a location and deal damage on impact.</strong><br>Damage : 180<br>CD : 6 seconds",
            spell_e: "<h3><strong>xxx</strong></h3><strong>xxx</strong><br>xxx"
        }
        break;
    case "kiddo":
        currentChar = {
            name: "Kiddo",
            desc: "",
            hp: 1600,
            speed: 360,
            stats_trio_1: {
                nb_games: 3454,
                kill_per_game: Math.round((3454 / 4494) * 100) / 100,
                assist_per_game: Math.round((3454 / 3938) * 100) / 100,
                death_per_game: Math.round((3454 / 4747) * 100) / 100,
                pickrate: Math.round((0.08691 * 100) * 100) / 100,
                win: 512,
                winrate: Math.round((512 / 3454) * 100),
                avg_dmg: Math.round(21742.15953 * 100) / 100,
            },
            stats_duo_1: {
                nb_games: 4315,
                kill_per_game: Math.round((4315 / 4780) * 100) / 100,
                assist_per_game: Math.round((4315 / 4733) * 100) / 100,
                death_per_game: Math.round((4315 / 3516) * 100) / 100,
                pickrate: Math.round((0.10858 * 100) * 100) / 100,
                win: 461,
                winrate: Math.round((461 / 4315) * 100),
                avg_dmg: Math.round(13014.75898 * 100) / 100,
            },
            stats_trio_2: {
                nb_games: 4832,
                kill_per_game: Math.round((4832 / 5497) * 100) / 100,
                assist_per_game: Math.round((4832 / 5295) * 100) / 100,
                death_per_game: Math.round((4832 / 3656) * 100) / 100,
                pickrate: Math.round((0.1215 * 100) * 100) / 100,
                win: 464,
                winrate: Math.round((464 / 4832) * 100),
                avg_dmg: Math.round(12144.18936 * 100) / 100,
            },
            builds: {
                optimal_build: ["sword", "teeth", "spike_armor"],
                core_items: ["sword", "teeth"],
                good_items: ["spike_armor", "heart_bag", "boots", "banana"],
                trash_items: ["headband", "sunglasses"]
            },
            
            matchups: {
                good: [["chuck", "Worst character in the game, you can kite easily. Try to create space with your space when he spaces :)"]],
                bad: [["froggy", "Jump everywhere, pain in the ass... defend yourself as much as you can but don't try to chase him"], ["sashimi", "If he achieves to CC you, you're in trouble. Create space to make him use space AND ult to reach you."]],
                synergy: [["sashimi", "Can peel you good"], ["anna", "You both can't jump walls so you have to play arround that but if a team go into you, your receiving damages kill fast"]]
            },
            // <h3><strong>aaa</strong></h3><strong>aaa</strong><br>aaa
            spell_m1: "<h3><strong>LIGHT IT UP</strong></h3><strong>Cast a small fire explosion at a location.</strong><br>Damage : 150",
            spell_a: "<h3><strong>FIRE STORM</strong></h3><strong>Turn an area into fire. Apply burn on hit.</strong><br>Damage : 80 every 0.5 seconds<br>CD : 6 seconds",
            spell_space: "<h3><strong>FIRE SHIELD</strong></h3><strong>Activate a fire shield.</strong><br>Duration : 4 seconds<br>Shield increase : 500<br>Speed increase : 160<br>Damage : 100 every 1 second<br>CD : 6 seconds",
            spell_e: "<h3><strong>METEORITE</strong></h3><strong>Cast a huge meteorite that crashes into the ground and deals big damage.</strong><br>Damage : 600<br>CD : 20 seconds"
        }
        document.getElementById('whodidit').innerHTML = "Currently made by Playfade"
        break;
    case "kitsu":
        currentChar = {
            name: "Kitsu",
            desc: "The cute archer",
            hp: 1600,
            speed: 360,
            stats_trio_1: {
                nb_games: 3454,
                kill_per_game: Math.round((3454 / 4494) * 100) / 100,
                assist_per_game: Math.round((3454 / 3938) * 100) / 100,
                death_per_game: Math.round((3454 / 4747) * 100) / 100,
                pickrate: Math.round((0.08691 * 100) * 100) / 100,
                win: 512,
                winrate: Math.round((512 / 3454) * 100),
                avg_dmg: Math.round(21742.15953 * 100) / 100,
            },
            stats_duo_1: {
                nb_games: 4315,
                kill_per_game: Math.round((4315 / 4780) * 100) / 100,
                assist_per_game: Math.round((4315 / 4733) * 100) / 100,
                death_per_game: Math.round((4315 / 3516) * 100) / 100,
                pickrate: Math.round((0.10858 * 100) * 100) / 100,
                win: 461,
                winrate: Math.round((461 / 4315) * 100),
                avg_dmg: Math.round(13014.75898 * 100) / 100,
            },
            stats_trio_2: {
                nb_games: 4832,
                kill_per_game: Math.round((4832 / 5497) * 100) / 100,
                assist_per_game: Math.round((4832 / 5295) * 100) / 100,
                death_per_game: Math.round((4832 / 3656) * 100) / 100,
                pickrate: Math.round((0.1215 * 100) * 100) / 100,
                win: 464,
                winrate: Math.round((464 / 4832) * 100),
                avg_dmg: Math.round(12144.18936 * 100) / 100,
            },
            builds: {
                optimal_build: ["sword", "heart_bag", "sunglasses"],
                core_items: ["sword", "heart_bag"],
                good_items: ["sunglasses", "teeth", "headband", "boots"],
                trash_items: ["spike_armor", "banana"]
            },
            matchups: {
                good: [["skinny", "Space to root him right before he engages you"], ["zook", ""]],
                bad: [["froggy", "Try to dodge his Q spell and space when he space you"], ["kiddo", ""]],
                synergy: [["sashimi", "Peel you good"], ["kiddo", "Combo ultimate"]]
            },
            spell_m1: "<h3><strong>ENERGY ARROW</strong></h1><strong>Shoot an energy arrow.</strong><br>Damage : 200",
            spell_a: "<h3><strong>CHARGED ARROW</strong></h1><strong>Shoot a charged arrow at a longer range. Apply slow on hit.</strong><br>Damage : 60 every 0.5s<br>Base CD : 6 seconds",
            spell_space: "<h3><strong>RECOIL BLAST</strong></h1><strong>Shoot the ground to jump away. Apply knock up on hit.</strong><br>Damage : 120<br>CD : 6 seconds",
            spell_e: "<h3><strong>ARROW MISSILE</strong></h1><strong>Shoot a big energy arrow that pierces obstacles and enemies. Apply slow on hit</strong><br>Damage : 420<br>Base CD : 20 seconds"
        }
        document.getElementById('whodidit').innerHTML = "Currently made by Darkni"
        break;
    case "sashimi":
        currentChar = {
            name: "Sashimi",
            desc: "You won't move",
            hp: 2600,
            speed: 360,
            stats_trio_1: {
                nb_games: 3454,
                kill_per_game: Math.round((3454 / 4494) * 100) / 100,
                assist_per_game: Math.round((3454 / 3938) * 100) / 100,
                death_per_game: Math.round((3454 / 4747) * 100) / 100,
                pickrate: Math.round((0.08691 * 100) * 100) / 100,
                win: 512,
                winrate: Math.round((512 / 3454) * 100),
                avg_dmg: Math.round(21742.15953 * 100) / 100,
            },
            stats_duo_1: {
                nb_games: 4315,
                kill_per_game: Math.round((4315 / 4780) * 100) / 100,
                assist_per_game: Math.round((4315 / 4733) * 100) / 100,
                death_per_game: Math.round((4315 / 3516) * 100) / 100,
                pickrate: Math.round((0.10858 * 100) * 100) / 100,
                win: 461,
                winrate: Math.round((461 / 4315) * 100),
                avg_dmg: Math.round(13014.75898 * 100) / 100,
            },
            stats_trio_2: {
                nb_games: 4832,
                kill_per_game: Math.round((4832 / 5497) * 100) / 100,
                assist_per_game: Math.round((4832 / 5295) * 100) / 100,
                death_per_game: Math.round((4832 / 3656) * 100) / 100,
                pickrate: Math.round((0.1215 * 100) * 100) / 100,
                win: 464,
                winrate: Math.round((464 / 4832) * 100),
                avg_dmg: Math.round(12144.18936 * 100) / 100,
            },
            builds: {
                optimal_build: ["heart_bag", "sunglasses", "spike_armor"],
                core_items: ["heart_bag", "sunglasses"],
                good_items: ["spike_armor", "headband", "boots", "banana"],
                trash_items: ["sword", "teeth"]
            },
            matchups: {
                good: [],
                bad: [],
                synergy: []
            },
            spell_m1: "<h3><strong>POWER FIST</strong></h3><strong>Do a 3-hit punch combo.</strong><br>Damage : 220 per attack<br>3rd atk damage : 300",
            spell_a: "<h3><strong>BAP CLAP</strong></h3><strong>Clap ennemies in front of you. Apply stun on hit.</strong><br>Damage : 250<br>CD : 7 seconds",
            spell_space: "<h3><strong>DIVE ROLL</strong></h3><strong>Charge a dash move, traveling longer based on how much is charged. Apply slow on hit.</strong><br>Damage : 200<br>CD : 8 seconds",
            spell_e: "<h3><strong>xxx</strong></h3><strong>xxx</strong><br>xxx"
        }
        break;
    case "skinny":
        currentChar = {
            name: "Skinny",
            desc: "The invisible nightmare",
            hp: 1600,
            speed: 380,
            stats_trio_1: {
                nb_games: 3454,
                kill_per_game: Math.round((3454 / 4494) * 100) / 100,
                assist_per_game: Math.round((3454 / 3938) * 100) / 100,
                death_per_game: Math.round((3454 / 4747) * 100) / 100,
                pickrate: Math.round((0.08691 * 100) * 100) / 100,
                win: 512,
                winrate: Math.round((512 / 3454) * 100),
                avg_dmg: Math.round(21742.15953 * 100) / 100,
            },
            stats_duo_1: {
                nb_games: 4315,
                kill_per_game: Math.round((4315 / 4780) * 100) / 100,
                assist_per_game: Math.round((4315 / 4733) * 100) / 100,
                death_per_game: Math.round((4315 / 3516) * 100) / 100,
                pickrate: Math.round((0.10858 * 100) * 100) / 100,
                win: 461,
                winrate: Math.round((461 / 4315) * 100),
                avg_dmg: Math.round(13014.75898 * 100) / 100,
            },
            stats_trio_2: {
                nb_games: 4832,
                kill_per_game: Math.round((4832 / 5497) * 100) / 100,
                assist_per_game: Math.round((4832 / 5295) * 100) / 100,
                death_per_game: Math.round((4832 / 3656) * 100) / 100,
                pickrate: Math.round((0.1215 * 100) * 100) / 100,
                win: 464,
                winrate: Math.round((464 / 4832) * 100),
                avg_dmg: Math.round(12144.18936 * 100) / 100,
            },
            builds: {
                optimal_build: ["sword", "headband", "heart_bag"],
                core_items: ["sword", "headband"],
                good_items: ["teeth", "banana", "boots", "sunglasses", "heart_bag"],
                trash_items: ["spike_armor"]
            },
            matchups: {
                good: [],
                bad: [],
                synergy: []
            },
            spell_m1: "<h3><strong>SLASH</strong></h3><strong>Slash for a 2-hit combo.</strong><br>Damage : 180 per attack",
            spell_a: "<h3><strong>CLAW</strong></h3><strong>Deal heavy damage. Apply stun on hit.</strong><br>Damage : 260<br>CD : 7 seconds",
            spell_space: "<h3><strong>SHADOW WALK</strong></h3><strong>Become invisible and fast for a while. Deal extra damage on any next attack (minus ultimate)</strong><br>Duration : 2.75 seconds<br>Bonus damage : 200<br>CD : 8 seconds",
            spell_e: "<h3><strong>RIP</strong></h3><strong>Teleport and do a heavy slash.</strong><br>Damage : 450<br>CD : 15 seconds"
        }
        break;
    case "teevee":
        currentChar = {
            name: "Teevee",
            desc: "I am op",
            hp: 1600,
            speed: 380,
            stats_trio_1: {
                nb_games: 3454,
                kill_per_game: Math.round((3454 / 4494) * 100) / 100,
                assist_per_game: Math.round((3454 / 3938) * 100) / 100,
                death_per_game: Math.round((3454 / 4747) * 100) / 100,
                pickrate: Math.round((0.08691 * 100) * 100) / 100,
                win: 512,
                winrate: Math.round((512 / 3454) * 100),
                avg_dmg: Math.round(21742.15953 * 100) / 100,
            },
            stats_duo_1: {
                nb_games: 4315,
                kill_per_game: Math.round((4315 / 4780) * 100) / 100,
                assist_per_game: Math.round((4315 / 4733) * 100) / 100,
                death_per_game: Math.round((4315 / 3516) * 100) / 100,
                pickrate: Math.round((0.10858 * 100) * 100) / 100,
                win: 461,
                winrate: Math.round((461 / 4315) * 100),
                avg_dmg: Math.round(13014.75898 * 100) / 100,
            },
            stats_trio_2: {
                nb_games: 4832,
                kill_per_game: Math.round((4832 / 5497) * 100) / 100,
                assist_per_game: Math.round((4832 / 5295) * 100) / 100,
                death_per_game: Math.round((4832 / 3656) * 100) / 100,
                pickrate: Math.round((0.1215 * 100) * 100) / 100,
                win: 464,
                winrate: Math.round((464 / 4832) * 100),
                avg_dmg: Math.round(12144.18936 * 100) / 100,
            },
            builds: {
                optimal_build: ["sword", "banana", "sunglasses"],
                core_items: ["sword", "banana"],
                good_items: ["sunglasses", "teeth", "heart_bag", "headband"],
                trash_items: ["boots", "spike_armor"]
            },
            good: [["sashimi", ""]],

            matchups: {
                good: [["chuck", "Bait his space and he's dead (+ worst character in the game)"], ["chuck", "Bait his space and he's dead (+ worst character in the game)"], ["chuck", "Bait his space and he's dead (+ worst character in the game)"], ["chuck", "Bait his space and he's dead (+ worst character in the game)"], ["kiddo", "Can't iframe so free kill"], ["anna", "Can't iframe so free kill"], ["skinny", "You can predict where h's coming from and it's hard for him to iframe with his E"]],
                bad: [["froggy", "Make him use all his abilities and then hit him with triple Q to kill him instantly"], ["sashimi", "TP away when you're stunned (you can TP while stunned which is... OP"], ["zook", "Can clear your clone easily. Only put clones when he already jumped so you can triple Q"]],
                synergy: [["sashimi", "Can help you to setup your 2 clones and triple Q a team"], ["zook", "Cool to slow people with ult to setup more easily the triple Q"], ["kitsu", "A lots of root with her ult"]]
            },
            spell_m1: "<h3><strong>DIGITAL PROJECTILE</strong></h3><strong>Shoot a digital wave</strong><br>Damage : 180",
            spell_a: "<h3><strong>DIGITAL BEAM</strong></h3><strong>Cast a big digital wave. Apply root on hit.</strong><br>Damage : 300<br>CD : 6 seconds",
            spell_space: "<h3><strong>DIGITAL CLONE V1.0</strong></h3><strong>Teleport to a location and create a clone at your original position. Recast to swap positions with your clone.</strong><br>Duration : 4 seconds<br>CD : 6 seconds",
            spell_e: "<h3><strong>DIGITAL CLONE V2.0</strong></h3><strong>Create a stronger clone at a location, with half your hp. Recast to swap positions with your clone.</strong><br>Duration : 7 seconds<br>CD : 8 seconds"
        }
        document.getElementById('whodidit').innerHTML = "Currently made by tado"
        break;
    case "zook":
        currentChar = {
            name: "Zook",
            desc: "Bim bam BOOM",
            hp: 1600,
            speed: 360,
            stats_trio_1: {
                nb_games: 2664,
                kill_per_game: Math.round((2664 / 2886) * 100) / 100,
                assist_per_game: Math.round((2664 / 3099) * 100) / 100,
                death_per_game: Math.round((2664 / 3636) * 100) / 100,
                pickrate: Math.round((0.06703 * 100) * 100) / 100,
                win: 339,
                winrate: Math.round((339 / 2664) * 100),
                avg_dmg: Math.round(18813.8282 * 100) / 100,
            },
            stats_duo_1: {
                nb_games: 5872,
                kill_per_game: Math.round((5872 / 6909) * 100) / 100,
                assist_per_game: Math.round((5872 / 6430) * 100) / 100,
                death_per_game: Math.round((5872 / 5506) * 100) / 100,
                pickrate: Math.round((0.14776 * 100) * 100) / 100,
                win: 736,
                winrate: Math.round((736 / 5872) * 100),
                avg_dmg: Math.round(13073.37415 * 100) / 100,
            },
            stats_trio_2: {
                nb_games: 4832,
                kill_per_game: Math.round((4832 / 5497) * 100) / 100,
                assist_per_game: Math.round((4832 / 5295) * 100) / 100,
                death_per_game: Math.round((4832 / 3656) * 100) / 100,
                pickrate: Math.round((0.1215 * 100) * 100) / 100,
                win: 464,
                winrate: Math.round((464 / 4832) * 100),
                avg_dmg: Math.round(12144.18936 * 100) / 100,
            },
            builds: {
                optimal_build: ["sword", "headband", "heart_bag"],
                core_items: ["sword", "headband"],
                good_items: ["heart_bag", "sunglasses", "teeth", "banana", "boots"],
                trash_items: ["spike_armor"]
            },
            matchups: {
                good: [["sashimi", ""], ["chuck", ""], ["skinny", ""], ["kiddo", ""]],
                bad: [["froggy", ""], ["anna", ""], ["kitsu", ""]],
                synergy: [["chuck", "CC to keep ennemies away"], ["sashimi", "CC to keep ennemies away"], ["skinny", "CC to keep ennemies away"]]
            },
            spell_m1: "<h3><strong>ENERGY ROCKET</strong></h1><strong>Fire a rocket that explodes on hit</strong><br>Rocket damage : 80<br>Explosion damage : 100",
            spell_a: "<h3><strong>HOMING MISSILE</strong></h1><strong>Fire a homing missile</strong><br>Rocket damage : 120<br>Explosion damage : 160<br>CD : 6 seconds",
            spell_space: "<h3><strong>ROCKET JUMP</strong></h1><strong>Blast the ground under you to jump to a location. Apply knock up on hit.</strong><br>Damage : 170<br>CD : 6 seconds",
            spell_e: "<h3><strong>PROXIMITY MINES</strong></h1><strong>Throw proximity mines on the ground. Apply slow on hit.</strong><br>Damage : 150 per mine<br>CD : 15 seconds"
        }
        document.getElementById('whodidit').innerHTML = "Currently made by Menace"
        break;
}

