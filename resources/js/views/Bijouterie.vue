<template>
    <div>
        <div class="bijouterie-landing">
            <div class="bijouterie-image-container">
                <div class="image-container">
                    <img src="/img/bijouterie-joaillerie.jpg" alt="Bijouterie">
                </div>
                <div class="bijouterie-overlay"></div>
                <div class="landing-image-text">
                    <h1>Découvrez notre large gamme de bijoux</h1>
                    <router-link to="/contact" class="base-btn-light">Prendre rendez-vous</router-link>
                </div>
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
            <div class="bijouterie-categorie" v-for="category in allCategories" v-bind:key="category.id">
                <div class="image-container" style="order:">
                    <img :src="getImage(category.image_id).url" :alt="getImage(category.image_id).name">
                </div>
                <div class="content-container" style="order:">
                    <h2>{{capitalize(category.name)}}</h2>
                    <p>{{category.description}}</p>
                    <router-link class="base-btn-dark" :to="{ name: 'category', params: {slug: category.slug}}">Découvrir</router-link>
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
            }
        }
    },
    methods: {
        getImage(id){
            return this.$store.getters.allImages.find(item => item.id == id)
        },
        capitalize(name){
            return name.charAt(0).toUpperCase() + name.slice(1)
        }
    },
    computed: {
        allCategories(){
            return this.$store.getters.allCategories
        }
    }
}
</script>

<style lang="scss" scoped>
    @import '~@/_variables.scss';

    .bijouterie-landing{
        display: flex;
        flex-direction: column;
        justify-self: center;
        align-items: center;
        height: calc(100vh - 70px - 53px);

        .bijouterie-image-container{
            position: relative;
            display: flex;
            flex-direction: row;
            width: 100%;
            height: 75%;
            margin: auto 0;
            
            .image-container{
                position: absolute;
                height: 100%;
                width: 75%;

                img{
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }
            }

            .bijouterie-overlay{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgb(0,0,0);
                background: linear-gradient(90deg, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 75%, rgba(0,0,0,1) 100%)
            }

            .landing-image-text{
                position: absolute;
                top: 50%;
                right: 10%;
                width: 50%;
                transform: translateY(-50%);
                text-align: center;
                color: white;
                display: flex;
                flex-direction: column;

                h1{
                    align-self: center;
                    font-weight: 400;
                    margin-bottom: 1em;
                    position: relative;
                    background: none;
                    z-index: 1;

                    &::after{
                        position: absolute;
                        bottom: -5px;
                        left: 0;
                        content: "";
                        height: 20px;
                        width: 100%;
                        background-color: grey;
                        z-index: -1;
                    }
                }
            }
        }

        .jumping-arrow{
            position: absolute;
            bottom: 0;
        }
    }

    .bijouterie-intro{
        display: flex;
        flex-direction: column;
        width: 80%;
        margin: 0 auto;

        p{
            margin: 6em 0;
            color: black;
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
            margin: 7em 0;
        
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
                    color: black;
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