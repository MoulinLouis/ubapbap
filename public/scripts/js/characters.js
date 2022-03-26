
let currentCharName = window.location.pathname.split("/").pop()

let currentChar;

switch(currentCharName) {
    case "anna":
        currentChar = {
            name: "Anna",
            desc: "",
            stats_trio: {
                nb_games: 2509,
                kill_per_game: Math.round((2509 / 2681) * 100) / 100,
                assist_per_game: Math.round((2509 / 3047) * 100) / 100,
                death_per_game: Math.round((2509 / 2674) * 100) / 100,
                pickrate: Math.round((0.06313 * 100) * 100) / 100,
                win: 259,
                winrate: Math.round((259 / 2509) * 100),
                avg_dmg: Math.round(18689.29932 * 100) / 100,
            },
            stats_duo: {
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
            spell_m1: "<h3><strong>RUN N' GUN</strong></h3><strong>Fire 4 small bullets.</strong><br>Base damage : 60 per shot",
            spell_a: "<h3><strong>SHOTGUN</strong></h1><strong>Fire 3 big bullets at once.</strong><br>Base damage : 120<br>CD : 5 seconds",
            spell_space: "<h3><strong>DASH</strong></h1><strong>Perform a quick dash.</strong><br>CD : 3 seconds",
            spell_e: "<h3><strong>TORNADO</strong></h1><strong>Spin and shoot everything around you. Apply slow on hit.</strong><br>Base damage : 140 every 0.35s<br>CD : 15 seconds"
        }
        document.getElementById('whodidit').innerHTML = "Darkgui"
        break;
    case "chuck":
        currentChar = {
            name: "Chuck",
            desc: "The duck",
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
            },
            builds: {
                optimal_build: ["sword", "heart_bag", "sunglasses"],
                core_items: ["sword", "heart_bag"],
                good_items: ["sunglasses", "teeth", "headband", "boots"],
                trash_items: ["spike_armor", "banana"]
            },
            matchups: {
                good: [["skinny", ""], ["zook", ""]],
                bad: [["froggy", ""], ["kiddo", ""]],
                synergy: [["sashimi", "Peel you good"], ["kiddo", "Combo ultimate"]]
            },
            spell_m1: "",
            spell_a: "",
            spell_space: "",
            spell_e: ""
        }
        break;
    case "froggy":
        currentChar = {
            name: "Froggy",
            desc: "The sticky",
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
            },
            builds: {
                optimal_build: ["sword", "heart_bag", "sunglasses"],
                core_items: ["sword", "heart_bag"],
                good_items: ["sunglasses", "teeth", "headband", "boots"],
                trash_items: ["spike_armor", "banana"]
            },
            matchups: {
                good: [["skinny", ""], ["zook", ""]],
                bad: [["froggy", ""], ["kiddo", ""]],
                synergy: [["sashimi", "Peel you good"], ["kiddo", "Combo ultimate"]]
            },
            spell_m1: "",
            spell_a: "",
            spell_space: "",
            spell_e: ""
        }
        break;
    case "kiddo":
        currentChar = {
            name: "Kiddo",
            desc: "",
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
            },
            builds: {
                optimal_build: ["sword", "heart_bag", "sunglasses"],
                core_items: ["sword", "heart_bag"],
                good_items: ["sunglasses", "teeth", "headband", "boots"],
                trash_items: ["spike_armor", "banana"]
            },
            matchups: {
                good: [["skinny", ""], ["zook", ""]],
                bad: [["froggy", ""], ["kiddo", ""]],
                synergy: [["sashimi", "Peel you good"], ["kiddo", "Combo ultimate"]]
            },
            spell_m1: "",
            spell_a: "",
            spell_space: "",
            spell_e: ""
        }
        break;
    case "kitsu":
        currentChar = {
            name: "Kitsu",
            desc: "The cute archer",
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
            spell_m1: "<h3><strong>ENERGY ARROW</strong></h1><strong>Shoot an energy arrow.</strong><br>Base damage : 200",
            spell_a: "<h3><strong>CHARGED ARROW</strong></h1><strong>Shoot a charged arrow at a longer range. Apply slow on hit.</strong><br>Base damage : 60 every 0.5s<br>Base CD : 6 seconds",
            spell_space: "<h3><strong>RECOIL BLAST</strong></h1><strong>Shoot the ground to jump away. Apply knock up on hit.</strong><br>Base damage : 120<br>CD : 6 seconds",
            spell_e: "<h3><strong>ARROW MISSILE</strong></h1><strong>Shoot a big energy arrow that pierces obstacles and enemies. Apply slow on hit</strong><br>Base damage : 420<br>Base CD : 20 seconds"
        }
        document.getElementById('whodidit').innerHTML = "Darkni"
        break;
    case "sashimi":
        currentChar = {
            name: "Sashimi",
            desc: "You won't move",
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
            },
            builds: {
                optimal_build: ["sword", "heart_bag", "sunglasses"],
                core_items: ["sword", "heart_bag"],
                good_items: ["sunglasses", "teeth", "headband", "boots"],
                trash_items: ["spike_armor", "banana"]
            },
            matchups: {
                good: [["skinny", ""], ["zook", ""]],
                bad: [["froggy", ""], ["kiddo", ""]],
                synergy: [["sashimi", "Peel you good"], ["kiddo", "Combo ultimate"]]
            },
            spell_m1: "",
            spell_a: "",
            spell_space: "",
            spell_e: ""
        }
        break;
    case "skinny":
        currentChar = {
            name: "Skinny",
            desc: "The invisible nightmare",
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
            },
            builds: {
                optimal_build: ["sword", "heart_bag", "sunglasses"],
                core_items: ["sword", "heart_bag"],
                good_items: ["sunglasses", "teeth", "headband", "boots"],
                trash_items: ["spike_armor", "banana"]
            },
            matchups: {
                good: [["skinny", ""], ["zook", ""]],
                bad: [["froggy", ""], ["kiddo", ""]],
                synergy: [["sashimi", "Peel you good"], ["kiddo", "Combo ultimate"]]
            },
            spell_m1: "",
            spell_a: "",
            spell_space: "",
            spell_e: ""
        }
        break;
    case "zook":
        currentChar = {
            name: "Zook",
            desc: "Bim bam BOOM",
            stats_trio: {
                nb_games: 2664,
                kill_per_game: Math.round((2664 / 2886) * 100) / 100,
                assist_per_game: Math.round((2664 / 3099) * 100) / 100,
                death_per_game: Math.round((2664 / 3636) * 100) / 100,
                pickrate: Math.round((0.06703 * 100) * 100) / 100,
                win: 339,
                winrate: Math.round((339 / 2664) * 100),
                avg_dmg: Math.round(18813.8282 * 100) / 100,
            },
            stats_duo: {
                nb_games: 5872,
                kill_per_game: Math.round((5872 / 6909) * 100) / 100,
                assist_per_game: Math.round((5872 / 6430) * 100) / 100,
                death_per_game: Math.round((5872 / 5506) * 100) / 100,
                pickrate: Math.round((0.14776 * 100) * 100) / 100,
                win: 736,
                winrate: Math.round((736 / 5872) * 100),
                avg_dmg: Math.round(13073.37415 * 100) / 100,
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
            spell_space: "<h3><strong>ROCKET JUMP</strong></h1><strong>Blast the ground under you to jump to a location. Apply knock up on hit.</strong><br>Base damage : 170<br>CD : 6 seconds",
            spell_e: "<h3><strong>PROXIMITY MINES</strong></h1><strong>Throw proximity mines on the ground. Apply slow on hit.</strong><br>Base damage : 150 per mine<br>CD : 15 seconds"
        }
        document.getElementById('whodidit').innerHTML = "Menace"
        break;
}

