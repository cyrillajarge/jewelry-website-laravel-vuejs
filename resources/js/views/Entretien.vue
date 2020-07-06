<template>
    <div class="entretien-page">
        <div class="entretien-landing">
            <div class="entretien-image-container">
                <div class="image-container">
                    <img src="/img/entretien.jpg" alt="Entretien">
                </div>
                <div class="entretien-image-overlay"></div>
                <div class="entretien-image-text">
                    <h1>Service d'entretien</h1>
                    <p>
                       Nullam blandit enim at nisl suscipit luctus. Quisque vitae vehicula velit. Nunc iaculis scelerisque est eu varius. Proin ultricies tempor commodo. Phasellus eget egestas lacus. Duis sed vulputate neque. Nulla a laoreet ante. Morbi eleifend non mi nec pretium. Nam nunc mauris, tincidunt vitae imperdiet at, auctor sit amet nunc. In velit mi, pellentesque ut pulvinar vitae, rutrum mollis libero. Vivamus suscipit luctus lobortis.
                    </p>
                </div>
            </div>
            <JumpingArrow class="jumping-arrow"/>
        </div>
        <div class="entretien-middle-section">
            <div class="middle-content-container">
                 <p>Nous proposons deux types de nettoyage pour vos bijoux:</p>
                    <ul>
                        <li><span class="bold">Nettoage à ultrasons:</span><br>Le nettoyage à ultrasons produit une onde supersonique qui crée de nombreuses microbulles de vide. Lorsque ces bulles explosent, la force de leur explosion enlève la saleté incrustée , la poussière, et les tâches ; procédé idéal pour nettoyer des bijoux anciens , oxydés ou bien encore redonner de l'éclat. </li>
                        <li><span class="bold">Polissage:</span><br>Le polissage est une technique qui consiste à donner de la brillance et ôter les micro rayures d'un bijou. En bijouterie le polissage est la dernière étape de fabrication d'un bijou qui va lui apporter tout son éclat</li>
                    </ul>
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

    .bold{
        font-weight: 600;
    }

    .entretien-page{
        display: flex;
        flex-direction: column;

        .entretien-landing{
            display: flex;
            flex-direction: column;
            justify-self: center;
            align-items: center;
            height: calc(100vh - 70px - 53px);

            .entretien-image-container{
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
                        object-fit: cover;
                        width: 100%;
                        height: 100%;
                    }
                }

                .entretien-image-overlay{
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

                .entretien-image-text{
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

        .entretien-middle-section{
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