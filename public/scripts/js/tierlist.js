const chars = {
    anna: {
        name: "Anna",
        imageUrl: "/public/images/tierlist/anna.png"
    },
    chuck: {
        name: "Chuck",
        imageUrl: "/public/images/tierlist/chuck.png"
    },
    froggy: {
        name: "Froggy",
        imageUrl: "/public/images/tierlist/froggy.png"
    },
    kiddo: {
        name: "Kiddo",
        imageUrl: "/public/images/tierlist/kiddo.png"
    },
    kitsu: {
        name: "Kitsu",
        imageUrl: "/public/images/tierlist/kitsu.png"
    },
    sashimi: {
        name: "Sashimi",
        imageUrl: "/public/images/tierlist/sashimi.png"
    },
    skinny: {
        name: "Skinny",
        imageUrl: "/public/images/tierlist/skinny.png"
    },
    teevee: {
        name: "Teevee",
        imageUrl: "/public/images/tierlist/teevee.png"
    },
    zook: {
        name: "Zook",
        imageUrl: "/public/images/tierlist/zook.png"
    }
}

const tierlist = {
    tado: {
        name: "Tierlist by tado",
        desc: "I love bapbap",
        ranks: {
            s: {
                characters: ["froggy", "sashimi", "anna"],
                color: "rgb(255, 127, 127)"
            },
            a: {
                characters: ["teevee", "kitsu", "kiddo"],
                color: "rgb(255, 191, 127)"
            },
            b: {
                characters: ["zook", "skinny"],
                color: "rgb(255, 223, 127)"
            },
            c: {
                characters: [],
                color: "#FFFF7F"
            },
            d: {
                characters: ["chuck"],
                color: "rgb(191, 255, 127)"
            }
        }
    },
    masked_samurai: {
        name: "Tierlist by Masked Samurai",
        desc: "I am a samurai that is... masked",
        ranks: {
            s: {
                characters: ["teevee", "kiddo", "sashimi"],
                color: "rgb(255, 127, 127)"
            },
            a: {
                characters: ["kitsu", "froggy"],
                color: "rgb(255, 191, 127)"
            },
            b: {
                characters: ["anna", "zook"],
                color: "rgb(255, 223, 127)"
            },
            c: {
                characters: ["skinny"],
                color: "#FFFF7F"
            },
            d: {
                characters: ["chuck"],
                color: "rgb(191, 255, 127)"
            }
        }
    },
    the_letter_b: {
        name: "Tierlist by the letter b",
        desc: "I'm not A, not C... neither Z... I am B",
        ranks: {
            fish: {
                characters: ["sashimi"],
                color: "rgb(255, 127, 127)"
            },
            not_fish: {
                characters: ["chuck", "zook", "teevee", "skinny", "kiddo", "froggy", "anna", "kitsu"],
                color: "rgb(191, 255, 127)"
            }
        }
    },
    playfade: {
        name: "Tierlist by Playfade",
        desc: "I love Kiddo",
        ranks: {
            s: {
                characters: ["froggy", "teevee"],
                color: "rgb(255, 127, 127)"
            },
            a: {
                characters: ["sashimi", "kitsu", "kiddo"],
                color: "rgb(255, 191, 127)"
            },
            b: {
                characters: ["zook", "anna"],
                color: "rgb(255, 223, 127)"
            },
            c: {
                characters: ["skinny"],
                color: "#FFFF7F"
            },
            d: {
                characters: ["chuck"],
                color: "rgb(191, 255, 127)"
            }
        }
    },
}

const elTierConstainer = document.getElementById('tier-container')
const elSelectTierlist = document.getElementById('select-tierlist')


$.each(tierlist, function( index, value ) {
    elSelectTierlist.innerHTML += `<option value="${index}">${value.name}</option>`
});

function loadTierlist(currentTierlist) {
    let tierlistElement = ''

    $("#tierlist-desc").text(tierlist[currentTierlist].desc)
    
    $.each(tierlist[currentTierlist].ranks, function( index, value ) {
    
        tierlistElement += `<div class="tier-row">
                        <div class="label-holder" style="background-color: ${value.color};"><span class="label">${index.toUpperCase()}</span></div>
                        <div class="tier sort">
        `
    
        $.each(value.characters, function( index, value ) {
            let character = chars[value]
            tierlistElement += `<div class="character" id="1" style="background-image: url(${character.imageUrl});"></div>`
        });
    
        tierlistElement += `</div>
        </div>`
    
    });
    
    elTierConstainer.innerHTML = tierlistElement
}

$("#select-tierlist").change(function() {
    currentTierlist = $("#select-tierlist option:selected").val();

    loadTierlist(currentTierlist)
});

loadTierlist("tado")