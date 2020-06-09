<template>
    <div class="gravure-page">
        <div class="gravure-header">
            <h1 class="gravure-title">Services de gravure.</h1>
            <p class="gravure-text">
                Quelque soit le bijoux: une gourmette, un pendentif ou encore des alliances, les gravures sont toujours très appréciées car elles apportent une touche de personnalisation et permettent de marquer un évènement à jamais.<br>
                Notre joaillerie spécialisée dans le sur-mesure est particulièrement adaptée à ce type de service. Que ce soit au niveau de la police d'écriture, de la taille ou du style, nous vous offrons une prévisualisation du rendu avant sa réalisation.
            </p>
            <div class="image-container">
                <img src="/img/gravure.jpg" alt="Gravure">
            </div>
        </div>
        <div class="gravure-middle-section">
            <div class="middle-content-container">
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

    .tdborder{
        border-right: 1px solid black;
    }

    .gravure-page{
        display: flex;
        flex-direction: column;

        .gravure-header{
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

        .gravure-middle-section{
            padding: 3em 10em;
            background-color: white;

            .middle-content-container{
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                width: 50%;
                min-height: 30vw;

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
                    font-size: calc(16px + (20 - 16) * ((100vw - 300px) / (1600 - 300)));
                    align-self: flex-end;
                }
            }

        }
    }

    @media screen and (max-width: $tablet) {
        .gravure-page{
            .gravure-header{

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

            .gravure-middle-section{
                padding: 0 10em;
                padding-top: 17em;

                .middle-content-container{
                    width: 100%;

                    table{
                        width: 100%;

                        tr{
                            height: 3em;

                            td{
                                font-weight: 600;
                                text-align: center;
                            }
                        }
                    }

                    .devis-btn{
                        margin: 2em 0;
                        align-self: center;
                    }
                }

            }
        }
    }

    @media screen and (max-width: $mobile) {
        .gravure-page{
            .gravure-header{
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

            .gravure-middle-section{
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