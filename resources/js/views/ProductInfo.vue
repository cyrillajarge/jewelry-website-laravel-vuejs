<template>
    <div class="alliance-info">
        <h1 class="alliance-name">Alliance #1</h1>
        <div class="alliance-image-viewer">
            <div class="alliance-big">
                <div class="alliance-big-placeholder">
                    <img :src="images[selected]" alt="Selected">
                </div>
            </div>
            <div class="alliance-thumbnails">
                <div class="thumbnail-placeholder" v-for="(image,i) in images" v-bind:key="i" @click="selectImage(i)">
                    <img :src="image" alt="Image">
                    <div v-if="i != selected" class="overlay"></div>
                </div>
            </div>
        </div>
        <div class="alliance-info">
            <div class="tabs">
                <div class="tab">
                    <button class="tablinks" @click="openTab('Description')" id="defaultOpen">Description.</button>
                    <button class="tablinks" @click="openTab('Composition')">Composition.</button>
                </div>
                <div id="Description" class="tabcontent">
                    <p>
                        Simple, efficace, l'anneau est fait pour les gens discret qui souhaite officialiser leur union.<br>
                        Adapté à tous types de budget, il dispose d'un intérieur confort, pratique à porter tous les jours.
                    </p>
                </div>
                <div id="Composition" class="tabcontent">
                    <p>La bonne composition</p>
                </div>
            </div>
            <div class="download">
                <button class="base-btn-light">Télécharger la fiche</button>
            </div>
        </div>
        <div class="alliances-suggestions-wrapper">
            <div class="alliances-suggestions-container">
                <h1>Suggestions</h1>
                <div class="suggestions-cards-container">
                    <div class="suggestion-card" v-for="(suggestion, i) in suggestions" v-bind:key="i">
                        <ProductCard v-bind:product="suggestion" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ProductCard from '../components/ProductCard'

export default {
    components: {
        ProductCard
    },
    data () {
        return {
            "images": [
                "/img/entretien.jpg",
                "/img/services.jpg",
                "/img/travis-grillz.jpg"
            ],
            "selected": 0,
            "suggestions": [
                {
                    "image":{
                        "name": "Ring",
                        "url": "/img/ring.png"
                    },
                    "name": "Alliance #1",
                    "description": "The good ring",
                    "routename": "alliance-info",
                    "id": "123"
                },
                {
                    "image":{
                        "name": "Ring",
                        "url": "/img/ring.png"
                    },
                    "name": "Alliance #2",
                    "description": "The good ring",
                    "routename": "alliance-info",
                    "id": "123"
                }
            ]
        }
    },
    methods: {
        selectImage(i){
            this.selected = i
        },
        openTab(id){
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            document.getElementById(id).style.display = "flex";
        }
    },
    mounted() {
        document.getElementById("defaultOpen").click();
    }
}
</script>

<style lang="scss" scoped>

    p{
        font-size: calc(12px + (16 - 12) * ((100vw - 300px) / (1600 - 300)));
        line-height: 2em;
        text-align: justify;
    }

    .alliance-info{
        background-color: white;

        .alliance-name{
            background-color: white;
            color: black;
            width: 90%;
            margin: 0 auto;
            padding-top: 1em;
            position: relative;
            font-size: calc(20px + (40 - 20) * ((100vw - 300px) / (1600 - 300)));

            &::after{
                position: absolute;
                bottom: -2px;
                left: 0;
                content: "";
                height: 2px;
                width: 10%;
                background-color: black;
            }
        }

        .alliance-image-viewer{
            background-color: white;
            display: flex;
            height: 80em;
            width: 90%;
            margin: 0 auto;

            .alliance-big{
                width: 80%;
                padding: 4em 0;

                .alliance-big-placeholder{
                    height: 100%;
                    width: 100%;

                    img{
                        height: 100%;
                        width: 100%;
                        object-fit: cover;
                    }
                }
            }

            .alliance-thumbnails{
                width: 20%;
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
                padding: 2em;
                
                .thumbnail-placeholder{
                    position: relative;
                    width: 100%;
                    height: 30%;

                    img{
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }

                    .overlay{
                        position: absolute;
                        top: 0;
                        left: 0;
                        height: 100%;
                        width: 100%;
                        background-color: white;
                        opacity: 0.4;
                    }
                }
            }
        }

        .alliance-info{
            background-color: black;
            display: flex;
            width: 100%;
            padding: 4em 4em;

            .tabs{
                width: 80%;
                display: flex;
                flex-direction: column;

                .tab {
                    display: flex;
                    justify-content: flex-start;

                    button {
                        color: white;
                        font-size: calc(20px + (24 - 20) * ((100vw - 300px) / (1600 - 300)));
                        text-transform: capitalize;
                        font-weight: 600;
                        background: none;
                        border: none;
                        outline: none;
                        cursor: pointer;
                        
                        &:hover{
                            text-decoration: underline;
                        }

                        &:active{
                            text-decoration: underline;
                        }
                    }
                }

                .tabcontent {
                    display: none;
                    padding: 12px 12px;

                    p{
                        color: white;
                    }
                }
            }

            .download{
                width: 20%;
                display: flex;
                align-items: center;
                justify-content: center;

                button{
                    background: none;
                    border: none;
                    padding: 0;
                }
            }
        }

        .alliances-suggestions-wrapper{
            border-top: 1px solid white;
            background-color: black;
            padding-top: 2em;
            
            .alliances-suggestions-container{
                width: 90%;
                margin: 0 auto;

                h1{
                    color: white;
                    position: relative;
                    font-size: calc(20px + (40 - 20) * ((100vw - 300px) / (1600 - 300)));

                    &::after{
                        position: absolute;
                        bottom: -2px;
                        left: 0;
                        content: "";
                        height: 2px;
                        width: 10%;
                        background-color: white;
                    }
                }

                .suggestions-cards-container{
                    margin: 3em 0;
                    display: flex;
                    flex-wrap: wrap;

                    .suggestion-card{
                        margin: 1em 0;
                        width: 50%;
                    }
                }
            }
        }
    }
</style>