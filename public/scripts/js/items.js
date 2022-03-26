const items = {
    sword: {
        name: "Sword",
        desc: "+ damage",
        imageUrl: "/public/images/items/sword2.png",
    },
    heart_bag: {
        name: "Heart bag",
        desc: "+ hp <br>+ hp regen",
        imageUrl: "/public/images/items/heart2.png",
    },
    sunglasses: {
        name: "Sunglasses",
        desc: "% crit chance<br>% crit damage",
        imageUrl: "/public/images/items/crit2.png",
    },
    teeth: {
        name: "Teeth",
        desc: "% life steal<br>+ hp",
        imageUrl: "/public/images/items/teeth2.png",
    },
    headband: {
        name: "Headband",
        desc: "+ atk speed<br>+ move speed",
        imageUrl: "/public/images/items/band.png",
    },
    boots: {
        name: "Boots",
        desc: "+ speed<br>+ hp",
        imageUrl: "/public/images/items/boots2.png",
    },
    banana: {
        name: "Banana",
        desc: "% cd speed<br>+ move speed",
        imageUrl: "/public/images/items/banana.png",
    },
    spike_armor: {
        name: "Spike armor",
        desc: "% reflect dmg<br>+ hp",
        imageUrl: "/public/images/items/thorn2.png",
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
    zook: {
        name: "Zook"
    }
}

const matchupElement = {
    html: function(char, desc) {
        console.log(char)
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