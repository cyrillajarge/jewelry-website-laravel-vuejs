<template>
    <div class="gravure-page">
        <div class="gravure-landing">
            <div class="gravure-image-container">
                <div class="image-container">
                    <img src="/img/gravure.jpg" alt="Gravure">
                </div>
                <div class="gravure-image-overlay"></div>
                <div class="gravure-image-text">
                    <h1>Service de gravure</h1>
                    <p>
                        Quelque soit le bijoux: une gourmette, un pendentif ou encore des alliances, les gravures sont toujours très appréciées car elles apportent une touche de personnalisation et permettent de marquer un évènement à jamais.<br>
                        Notre joaillerie spécialisée dans le sur-mesure est particulièrement adaptée à ce type de service. Que ce soit au niveau de la police d'écriture, de la taille ou du style, nous vous offrons une prévisualisation du rendu avant sa réalisation.
                    </p>
                </div>
            </div>
            <JumpingArrow class="jumping-arrow"/>
        </div>
        <div class="gravure-middle-section">
                <div>
                    <p>Nous effectons des gravures sur les bijoux suivants:</p>
                    <table>
                        <tbody>
                            <tr>
                                <td class="tdborder">Corge</td>
                                <td>50€</td>
                            </tr>
                           <tr>
                                <td class="tdborder">Qux</td>
                                <td>50€</td>
                            </tr>
                            <tr>
                                <td class="tdborder">Lorem</td>
                                <td>50€</td>
                            </tr>
                            <tr>
                                <td class="tdborder">Ipsum</td>
                                <td>50€</td>
                            </tr>
                            <tr>
                                <td class="tdborder">Dolor</td>
                                <td>50€</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>
                    Chaque bijou est manipulé avec le plus grand soin et chaque pièce d'origine retirée vous sera restituée.<br> 
                    Toute intervention garantit vos bijoux contre vols et pertes durant la période de prise en charge.<br> 
                    Afin de vous garantir une sécurité maximale, chaque intervention donne lieu à une fiche de prise en charge à présenter lors de la récupération du bijou.
                </p>
                <router-link to="/contact" class="base-btn-dark devis-btn">Obtenir un devis</router-link>
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
        font-size: calc(12px + (16 - 12) * ((100vw - 300px) / (1600 - 300)));
        line-height: 2em;
        text-align: justify;
    }

    .tdborder{
        border-right: 1px solid black;
    }

    .gravure-page{
        display: flex;
        flex-direction: column;

        .gravure-landing{
            display: flex;
            flex-direction: column;
            justify-self: center;
            align-items: center;
            height: calc(100vh - 70px - 53px);

            .gravure-image-container{
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

                .gravure-image-overlay{
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

                .gravure-image-text{
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

        .gravure-middle-section{
            margin-top: 8em;
            margin-bottom: 5em;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            width: 80%;

            table{
                width: 100%;
                margin-bottom: 1em;

                tr{
                    height: 3em;

                    td{
                        font-weight: 600;
                        text-align: center;
                    }
                }
            }

            .devis-btn{
                margin-top: 5em;
                font-size: 16px;
                align-self: flex-end;
            }
        }
    }
</style>