<template>
    <div class="entretien-page">
        <div class="entretien-header">
            <h1 class="entretien-title">Services d'entretien.</h1>
            <p class="entretien-text">
                Nullam blandit enim at nisl suscipit luctus. Quisque vitae vehicula velit. Nunc iaculis scelerisque est eu varius. Proin ultricies tempor commodo. Phasellus eget egestas lacus. Duis sed vulputate neque. Nulla a laoreet ante. Morbi eleifend non mi nec pretium. Nam nunc mauris, tincidunt vitae imperdiet at, auctor sit amet nunc. In velit mi, pellentesque ut pulvinar vitae, rutrum mollis libero. Vivamus suscipit luctus lobortis. 
            </p>
            <div class="image-container">
                <img src="/img/entretien.jpg" alt="Gravure">
            </div>
        </div>
        <div class="entretien-middle-section">
            <div class="middle-content-container">
                <div>
                    <p>Nous proposons deux types de nettoyage pour vos bijoux:</p>
                    <ul>
                        <li><span class="bold">Nettoage à ultrasons:</span><br>Le nettoyage à ultrasons produit une onde supersonique qui crée de nombreuses microbulles de vide. Lorsque ces bulles explosent, la force de leur explosion enlève la saleté incrustée , la poussière, et les tâches ; procédé idéal pour nettoyer des bijoux anciens , oxydés ou bien encore redonner de l'éclat. </li>
                        <li><span class="bold">Polissage:</span><br>Le polissage est une technique qui consiste à donner de la brillance et ôter les micro rayures d'un bijou. En bijouterie le polissage est la dernière étape de fabrication d'un bijou qui va lui apporter tout son éclat</li>
                    </ul>
                </div>
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

    .bold{
        text-decoration: underline;
        font-weight: 500;
    }

    .tdborder{
        border-right: 1px solid black;
    }

    .entretien-page{
        display: flex;
        flex-direction: column;

        .entretien-header{
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

        .entretien-middle-section{
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
        .entretien-page{
            .entretien-header{

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

            .entretien-middle-section{
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
        .entretien-page{
            .entretien-header{
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

            .entretien-middle-section{
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