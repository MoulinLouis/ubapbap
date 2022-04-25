const items = {
    sword: {
        name: "Sword",
        desc: "+ damage",
        imageUrl: "/public/images/items/sword.png",
        stats: {
            damage: {
                name: "Damage",
                type: "",
                common: 100,
                uncommon: 150,
                rare: 200,
                epic: 300,
                legendary: 400
            }
        }
    },
    heart_bag: {
        name: "Heart bag",
        desc: "+ hp <br>+ hp regen",
        imageUrl: "/public/images/items/heart.png",
        stats: {
            hp: {
                name: "Health",
                type: "",
                common: 450,
                uncommon: 600,
                rare: 750,
                epic: 900,
                legendary: 1200
            },
            hp_regen: {
                name: "Health regeneration",
                type: "",
                common: 30,
                uncommon: 40,
                rare: 50,
                epic: 75,
                legendary: 100
            }
        }
    },
    sunglasses: {
        name: "Sunglasses",
        desc: "% crit chance<br>% crit damage",
        imageUrl: "/public/images/items/crit.png",
        stats: {
            crit_chance: {
                name: "Critical chance",
                type: "%",
                common: 25,
                uncommon: 35,
                rare: 45,
                epic: 60,
                legendary: 75
            },
            crit_damage: {
                name: "Critical damage",
                type: "%",
                common: 10,
                uncommon: 15,
                rare: 20,
                epic: 30,
                legendary: 40
            }
        }
    },
    teeth: {
        name: "Teeth",
        desc: "% life steal<br>+ hp",
        imageUrl: "/public/images/items/teeth.png",
        stats: {
            life_steal: {
                name: "Life steal",
                type: "%",
                common: 15,
                uncommon: 20,
                rare: 25,
                epic: 30,
                legendary: 40
            },
            hp: {
                name: "Health",
                type: "",
                common: 50,
                uncommon: 100,
                rare: 150,
                epic: 200,
                legendary: 250
            }
        }
    },
    headband: {
        name: "Headband",
        desc: "+ atk speed<br>+ move speed",
        imageUrl: "/public/images/items/band.png",
        stats: {
            atk_speed: {
                name: "Attack speed",
                type: "",
                common: 10,
                uncommon: 20,
                rare: 30,
                epic: 45,
                legendary: 60
            },
            move_speed: {
                name: "Movement speed",
                type: "",
                common: 5,
                uncommon: 7,
                rare: 10,
                epic: 14,
                legendary: 20
            }
        }
    },
    boots: {
        name: "Boots",
        desc: "+ speed<br>+ hp",
        imageUrl: "/public/images/items/boots.png",
        stats: {
            move_speed: {
                name: "Movement speed",
                type: "",
                common: 25,
                uncommon: 40,
                rare: 55,
                epic: 75,
                legendary: 100
            },
            hp: {
                name: "Health",
                type: "",
                common: 150,
                uncommon: 200,
                rare: 250,
                epic: 300,
                legendary: 350
            }
        }
    },
    banana: {
        name: "Banana",
        desc: "% cd speed<br>+ move speed",
        imageUrl: "/public/images/items/banana.png",
        stats: {
            cd_speed: {
                name: "Cooldown speed",
                type: "%",
                common: 20,
                uncommon: 30,
                rare: 40,
                epic: 60,
                legendary: 80
            },
            move_speed: {
                name: "Movement speed",
                type: "",
                common: 5,
                uncommon: 7,
                rare: 10,
                epic: 14,
                legendary: 20
            }
        }
    },
    spike_armor: {
        name: "Spike armor",
        desc: "% reflect dmg<br>+ hp",
        imageUrl: "/public/images/items/thorn.png",
        stats: {
            reflect_damage: {
                name: "Reflect damages",
                type: "%",
                common: 10,
                uncommon: 15,
                rare: 20,
                epic: 25,
                legendary: 30
            },
            hp: {
                name: "Health",
                type: "",
                common: 200,
                uncommon: 275,
                rare: 350,
                epic: 500,
                legendary: 700
            }
        }
    }
}

const chars = {
    anna: {
        name: "Anna"
    },
    chuck: {
        name: "Chuck"
    },
    froggy: {
        name: "Froggy"
    },
    kiddo: {
        name: "Kiddo"
    },
    kitsu: {
        name: "Kitsu"
    },
    sashimi: {
        name: "Sashimi"
    },
    skinny: {
        name: "Skinny"
    },
    teevee: {
        name: "Teevee"
    },
    zook: {
        name: "Zook"
    }
}

const matchupElement = {
    html: function(char, desc) {
        return "<a href='/characters/" + char.name.toLowerCase() + "' class='character-matchup'>" +
            "<div class='character-face'>" +
                "<img src='/public/images/characters/" + char.name.toLowerCase() + ".png' alt=''>" +
            "</div>" +
            "<div class='character-name-2'>" + char.name + "</div>" +
            "<div class='character-description'>" + desc + "</div>" +
        "</a>"
    }
}

const itemElement = {
    html: function(item) {
        return "<div class='item-option'>" +
            "<div class='item-img'>" +
                "<div>" +
                    "<img style='height: 48px;' src='" + item.imageUrl + "' alt=''>" +
                "</div>" +
            "</div>" +
            "<div class='item-stats'>" +
                "<div class='winrate'>" + item.name + "</div>" +
                "<div class='matches'>" + item.desc + "</div>" +
            "</div>" +
        "</div>"
    }
}