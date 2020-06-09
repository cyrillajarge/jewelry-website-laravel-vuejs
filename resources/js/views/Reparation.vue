<template>
    <div class="reparation-page">
        <div class="reparation-header">
            <h1 class="reparation-title">Services de réparation.</h1>
            <p class="reparation-text">
                Car vous tenez à vos bijoux, nous réaliserons les réparations avec le plus grand soin pour préserver leur état d'origine.<br>
                Nous ferons notre possible pour écourter le délai de réparation afin que vous puissiez profiter au plus vite de votre bijou remis à neuf.
            </p>
            <div class="image-container">
                <img src="/img/reparation-bijoux.jpg" alt="Reparation">
            </div>
        </div>
        <div class="reparation-middle-section">
            <div class="middle-content-container">
                <div>
                    <p>Les interventions que nous réalisons :</p>
                    <ul>
                        <li>Soudure sur chaîne ou bracelet en or et argent</li>
                        <li>Mise à taille de bagues en or, argent ou platine</li>
                        <li>Remplacement de pierres manquantes</li>
                        <li>Changement de fermoir sur chaîne en or, argent ou platine</li>
                        <li>Allongement ou réduction d'un collier ou d'un bracelet</li>
                    </ul>
                </div>
                <p>
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

    p, ul, li{
        font-size: calc(12px + (16 - 12) * ((100vw - 300px) / (1600 - 300)));
        line-height: 2em;
        text-align: justify;
    }

    li{
        font-weight: 500;
    }

    .reparation-page{
        display: flex;
        flex-direction: column;

        .reparation-header{
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

        .reparation-middle-section{
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

                ul{
                    color: black;
                }
            }

        }
    }

    @media screen and (max-width: $tablet) {
        .reparation-page{
            .reparation-header{

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

            .reparation-middle-section{
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
        .reparation-page{
            .reparation-header{
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

            .reparation-middle-section{
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