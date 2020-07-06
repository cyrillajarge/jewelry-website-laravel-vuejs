<template>
    <div class="reparation-page">
        <div class="reparation-landing">
            <div class="reparation-image-container">
                <div class="image-container">
                    <img src="/img/reparation-bijoux.jpg" alt="Reparation">
                </div>
                <div class="reparation-image-overlay"></div>
                <div class="reparation-image-text">
                    <h1>Service de réparation</h1>
                    <p>Car vous tenez à vos bijoux, nous réaliserons les réparations avec le plus grand soin pour préserver leur état d'origine.<br>
                Nous ferons notre possible pour écourter le délai de réparation afin que vous puissiez profiter au plus vite de votre bijou remis à neuf.</p>
                </div>
            </div>
            <JumpingArrow class="jumping-arrow"/>
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

        .reparation-landing{
            display: flex;
            flex-direction: column;
            justify-self: center;
            align-items: center;
            height: calc(100vh - 70px - 53px);

            .reparation-image-container{
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

                .reparation-image-overlay{
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

                .reparation-image-text{
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

        .reparation-middle-section{
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