<template>
    <div class="transformation-page">
        <div class="transformation-header">
            <h1 class="transformation-title">Services de transformation.</h1>
            <p class="transformation-text">
                Vous souhaitez redonner ses lettres de noblesse à vos bijoux ou tout simplement une envie de changement.<br>
                Venez exposer votre projet à notre équipe.<br>
                Nous saurons vous conseiller pour leur donner une nouvelle vie correspondant à vos attentes et vous accompagner dans ce merveilleux projet.<br>
                Nous réaliserons un devis accompagné d'un design 3D pour découvrir le rendu
            </p>
            <div class="image-container">
                <img src="/img/transformation-bijoux.png" alt="Transformation">
            </div>
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
    </div>
</template>

<script>
export default {
    
}
</script>

<style lang="scss" scoped>
    @import '~@/_variables.scss';

    h1{
        font-size: calc(20px + (40 - 20) * ((100vw - 300px) / (1600 - 300)));
    }

    p{
        font-size: calc(12px + (16 - 12) * ((100vw - 300px) / (1600 - 300)));
        line-height: 2em;
        text-align: justify;
    }

    .transformation-page{
        display: flex;
        flex-direction: column;

        .transformation-header{
            background-color: black;
            padding-top: 3em;
            padding-bottom: 3em;
            margin: 0 10em;
            position: relative;

            h1{
                position: relative;
                margin: 2em 0;
                color: white;

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

            p{
                color: white;
                width: 50%;
                padding: 1em 0;
            }

            .image-container{
                position: absolute;
                height: 30vw;
                width: 30vw;
                bottom: 0;
                transform: translateY(75%);
                right: 0;

                img{
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    filter: grayscale(1);
                }
            }
        }

        .transformation-middle-section{
            padding: 3em 10em;
            background-color: white;

            .middle-content-container{
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                width: 50%;
                min-height: 30vw;

                .devis-btn{
                    font-size: calc(16px + (20 - 16) * ((100vw - 300px) / (1600 - 300)));
                    align-self: flex-end;
                }
            }

        }
    }

    @media screen and (max-width: $tablet) {
        .transformation-page{
            .transformation-header{

                p{
                    width: 100%;
                    margin-bottom: 5em;
                }

                .image-container{
                    height: 20em;
                    width: 100%;

                    img{
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }
                }
            }

            .transformation-middle-section{
                padding: 0 10em;
                padding-top: 17em;

                .middle-content-container{
                    width: 100%;

                    .devis-btn{
                        margin: 2em 0;
                        align-self: center;
                    }
                }

            }
        }
    }

    @media screen and (max-width: $mobile) {
        .transformation-page{
            .transformation-header{
                margin: 0 2em;
                p{
                    width: 100%;
                    margin-bottom: 5em;
                }

                .image-container{
                    width: 100%;

                    img{
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }
                }
            }

            .transformation-middle-section{
                padding: 0 2em;
                padding-top: 17em;

                .middle-content-container{
                    width: 100%;

                    .devis-btn{
                        align-self: center;
                    }
                }

            }
        }
    }
</style>