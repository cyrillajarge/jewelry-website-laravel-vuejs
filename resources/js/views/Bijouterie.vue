<template>
    <div>
        <div class="bijouterie-full-header">
            <FullHeightHeader :image="image"/>
            <div class="overlay"></div>
            <div class="full-header-content">
                <h1>Découvrez notre large gamme de bijoux</h1>
                <router-link to="/contact" class="base-btn-light">Prendre rendez-vous</router-link>
            </div>
            <JumpingArrow class="jumping-arrow" />
        </div>
        <div class="bijouterie-intro">
            <p>Bienvenue dans l'univers de la bijouterie joaillerie. Nous vous proposons l'excellence dans le domaine du sur mesure.<br>
                Qui n'a jamais rêvé d'avoir un bijoux que lui seul portera.<br>
                Ici présent vous découvrirez notre "catalogue d'idée mixte (homme/femme)servant à vous inspirer pour vos projets de création. CI dessous les Principales catégories de bijoux que l'on propose pour inspiration , aucun tarif n'est proposé car chaque valeur est propre à sa création , et va donc dépendre des matières et pierres , choisis , nous pouvons également nous adapter si vous avez un budget prédéfini 
                Chose intéressante à savoir : vous ne trouverez jamais de plaqué or, de pierre de synthèse, ni même de diamant de moindre qualité sur les créations effectuées par notre maison 
                Nous sommes bien sûr ouvert à toute proposition, demande ,ou questionnement via la page contact</p> 
        </div>
        <div class="bijouterie-categorie-sections">
            <div class="bijouterie-categorie" v-for="(categorie,i) in categories" v-bind:key="i">
                <div class="image-container" style="order:">
                    <img :src="categorie.img.url" :alt="categorie.img.name">
                </div>
                <div class="content-container" style="order:">
                    <h2>{{categorie.name}}</h2>
                    <p>{{categorie.content}}</p>
                    <!-- <router-link class="base-btn-light" :to="{name: products, params: {slug: , id: }}">Découvrir</router-link> -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import FullHeightHeader from '../components/FullHeightHeader'
import JumpingArrow from '../components/JumpingArrow'

export default {
    components: {
        FullHeightHeader,
        JumpingArrow
    },
    data () {
        return {
            'image': {
                "name": "Bijouterie",
                "url": "/img/bijouterie-joaillerie.jpg"
            },
            'categories': [
                {
                    "name": "Bague",
                    "content": "Aussi bien en cadeau que pour une demande, la bague est le bijoux préferé",
                    "img": {
                        "name": "Bague",
                        "url": "/img/premieres-boucles.jpg"
                    },
                    "link": "",
                },
                {
                    "name": "Collier",
                    "content": "Quotidien ou occasionnel. Aucune limite, pour n'importe quel style.",
                    "img": {
                        "name": "Collier",
                        "url": "/img/premieres-boucles.jpg"
                    },
                    "link": ""
                },
                {
                    "name": "Bracelet",
                    "content": "Sûrement le bijoux qui correspond autant aux femmes qu'aux hommes ou encore enfants. Pour vous même, ou pour un cadeau original.",
                    "img": {
                        "name": "Bracelet",
                        "url": "/img/premieres-boucles.jpg"
                    },
                    "link": ""
                },
                {
                    "name": "Boucles d'oreilles",
                    "content": "Adaptées à tous, pas de soucis de taille ni de style. Le cadeau parfait pour créer ou compléter des parures.",
                    "img": {
                        "name": "Boucles d'oreilles",
                        "url": "/img/premieres-boucles.jpg"
                    },
                    "link": ""
                },
                {
                    "name": "Pendentif",
                    "content": "Quelque chose vous tient à cœur. Profitez en pour l'avoir toujours auprès de vous.",
                    "img": {
                        "name": "Pendentif",
                        "url": "/img/premieres-boucles.jpg"
                    },
                    "link": ""
                },
                {
                    "name": "Autres",
                    "content": "Aussi bien en cadeau que pour une demande, la bague est le bijoux préferé",
                    "img": {
                        "name": "Autres",
                        "url": "/img/premieres-boucles.jpg"
                    },
                    "link": ""
                }
            ]
        }
    }
}
</script>

<style lang="scss" scoped>
    @import '~@/_variables.scss';

    .bijouterie-full-header{
        position: relative;
        height: calc(100vh - 70px - 53px);

        .overlay{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            opacity: 0.15;
        }
        
        .full-header-content{
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);

            h1{
                font-size: calc(44px + (60 - 44) * ((100vw - 300px) / (1600 - 300)));
                text-align: center;
                margin-bottom: 2em;
                color: white;
            }

            a{
                font-size: calc(14px + (20 - 14) * ((100vw - 300px) / (1600 - 300)));
            }

        }

        .jumping-arrow{
            position: absolute;
            bottom: 0;
            left: 50%;
        }
    }

    .bijouterie-intro{
        display: flex;
        flex-direction: column;
        width: 60%;
        margin: 0 auto;

        p{
            margin: 6em 0;
            color: white;
            line-height: 2em;
            text-align: center;
            font-size: calc(14px + (16 - 14) * ((100vw - 300px) / (1600 - 300)));
        }
    }

    .bijouterie-categorie-sections{
        display: flex;
        flex-direction: column;

        .bijouterie-categorie{
            display: flex;
            height: 30em;
        
            .image-container{
                position: relative;
                width: 50%;

                img{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }
            }

            .content-container{
                width: 40%;
                margin: 0 auto;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;

                h2,p{
                    color: white;
                }

                p{
                    text-align: justify;
                    font-size: calc(14px + (16 - 14) * ((100vw - 300px) / (1600 - 300)));
                }
            }

            &:nth-child(odd){
                .image-container{
                    order: 1;
                }

                .content-container{
                    order: 2;
                }
            }

            &:nth-child(even){
                .image-container{
                    order: 2;
                }

                .content-container{
                    order: 1;
                }
            }
        }
    }

    @media screen and(max-width: $tablet) {
        .bijouterie-full-header{
            height: calc(100vh - 70px);
        }

        .bijouterie-intro{
            width: 80%;
        }

        .bijouterie-categorie-sections{
            .bijouterie-categorie{
                height: auto;
                flex-wrap: wrap;

                .image-container{
                    height: 25em;
                    width: 100%;
                    order: 1 !important;
                }

                .content-container{
                    width: 80%;
                    height: 20em;
                    margin: 0 auto;
                    order: 2 !important;
                }
            }
        }
    }
</style>