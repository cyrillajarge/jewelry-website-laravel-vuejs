<template>
    <div class="transformation-page">
        <div class="transformation-landing">
            <div class="transformation-image-container">
                <div class="image-container">
                    <img src="/img/transformation-bijoux.png" alt="Transformation">
                </div>
                <div class="transformation-image-overlay"></div>
                <div class="transformation-image-text">
                    <h1>Service de transformation</h1>
                    <p>
                        Vous souhaitez redonner ses lettres de noblesse à vos bijoux ou tout simplement une envie de changement.<br>
                        Venez exposer votre projet à notre équipe.
                        Nous saurons vous conseiller pour leur donner une nouvelle vie correspondant à vos attentes et vous accompagner dans ce merveilleux projet.<br>
                        Nous réaliserons un devis accompagné d'un design 3D pour découvrir le rendu
                    </p>
                </div>
            </div>
            <JumpingArrow class="jumping-arrow"/>
        </div>
        <div class="transformation-middle-section">
            <div class="middle-content-container">
                 <p>
                    Chaque bijou est manipulé avec le plus grand soin et chaque pièce d'origine retirée vous sera restituée.<br> 
                    Toute intervention garantit vos bijoux contre vols et pertes durant la période de prise en charge.<br>
                    Afin de vous garantir une sécurité maximale , chaque intervention, donne lieu à une fiche de prise en charge à présenter lors de la récupération du bijou.
                </p>
                <router-link to="/contact" class="base-btn-dark devis-btn">Obtenir un devis</router-link>
            </div>
        </div>
        <ServicesSuggestions />
    </div>
</template>

<script>
import JumpingArrow from '../components/JumpingArrow'
import ServicesSuggestions from '../components/ServicesSuggestions'

export default {
    components: {
        JumpingArrow,
        ServicesSuggestions
    }
    
}
</script>

<style lang="scss" scoped>
    @import '~@/_variables.scss';

    h1{
        font-size: 35px;
    }

    p{
        line-height: 2em;
    }

    .transformation-page{
        display: flex;
        flex-direction: column;

        .transformation-landing{
            display: flex;
            flex-direction: column;
            justify-self: center;
            align-items: center;
            height: calc(100vh - 70px - 53px);

            .transformation-image-container{
                position: relative;
                display: flex;
                flex-direction: row;
                width: 100%;
                height: 75%;
                margin: auto 0;

                .image-container{
                    height: 100%;
                    width: 75%;

                    img{
                        object-fit: cover;
                        width: 100%;
                        height: 100%;
                    }
                }

                .transformation-image-overlay{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgb(2,0,36);
                    background: linear-gradient(90deg, rgba(2,0,36,0) 0%, rgba(0,0,0,1) 75%, rgba(0,0,0,1) 100%)
                }

                .jumping-arrow{
                    position: absolute;
                    bottom: 0;
                }

                .transformation-image-text{
                    position: absolute;
                    top: 50%;
                    right: 10%;
                    width: 40%;
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

                    p{
                        text-align: start;
                        font-size: 16px;
                    }
                }
            }
        }

        .transformation-middle-section{
            margin-top: 8em;
            margin-bottom: 5em;
            margin-left: auto;
            margin-right: auto;
            width: 80%;

            .middle-content-container{
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                width: 100%;

                p{
                    font-size: 16px;
                }

                .devis-btn{
                    margin-top: 5em;
                    font-size: 16px;
                    align-self: flex-end;
                }

                ul{
                    font-size: 16px;
                    color: black;
                }
            }

        }
    }
</style>