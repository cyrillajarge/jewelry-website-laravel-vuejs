<template>
    <div class="footer">
        <div class="footer-container">
            <div class="contact-info">
                <h1>joaillerie sur mesure</h1>
                <div class="contact-info-container">
                    <div class="contact-adress-container">
                        <h2>Salon de création</h2>
                        <p>22 rue des Halles - 67000 Strasbourg<br>Tél: +33 6 44 87 95 22</p>
                    </div>
                    <div class="contact-time-container">
                        <h2>Horaires d'ouverture</h2>
                        <p>De 9h00 à 19h00<br>Du lundi au samedi</p>
                    </div>
                </div>
            </div>
            <div class="social-container">
                <ul>
                    <li><a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="map">
                <img src="/img/Map.png" alt="map">
            </div>
            <ul class="legal-container">
                <li><router-link to="/mentions-legales">Mentions légales</router-link></li>
                <li><router-link to="/politique-de-confidentialite">Politique de confidentialité</router-link></li>
                <li><router-link to="/conditions-generales-de-vente">Conditions générales</router-link></li>
            </ul>
            <span class="bar"></span>
            <h2>© Copyright {{ new Date().getFullYear() }} <strong> Veef. C. </strong>| Tous droits réservés.</h2>
        </div>
        <div class="footer-signature">
            <h1>Made with <span id="heart">❤</span> by Cyril Lajarge</h1>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>
<style lang="scss" scoped>
    @import '~@/_variables.scss';

    .footer{
        border-top: 1px solid #000;
        margin: 0 auto;
        width: 100%;
        padding-top: 20px;
        display: flex;
        flex-direction: column;
        // justify-content: center;
        align-items: center;
        background-color: white;

        .footer-container{
            width: 50%;
            // margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: white;

            .social-container{
                display: flex;
                flex-wrap: wrap;
                width: 100%;

                ul{
                    display: flex;
                    flex-direction: row;
                    width: 100%;
                    justify-content: center;
                    list-style: none;
                    padding: 0;

                    a{
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        text-decoration: none;
                        color: black;
                        padding: 5px;
                        margin: 0px 10px;
                        border-radius: 50px;

                        &:hover{
                            background-color: black;
                            color: white;
                        }

                        i{
                            size: 20px;
                            text-align: center;
                        }
                    }
                }
            }

            .contact-info{
                margin-top: 20px;
                display: flex;
                flex-wrap: wrap;
                width: 100%;

                h1{
                    text-transform: uppercase;
                    font-size: 24px;
                    font-weight: 600;
                    text-align: center;
                    width: 100%;
                }

                .contact-info-container{
                    display: flex;
                    flex-direction: row;
                    width: 100%;
                    justify-content: space-around;

                    .contact-adress-container, .contact-time-container{
                        text-align: center;
                    }

                    h2{
                        font-size: 18px;
                        text-transform: uppercase;
                        font-weight: 800;
                        text-decoration: underline;
                    }
                }
            }

            .map{
                height: 200px;
                width: 100%;
                margin: 20px 0;

                img{
                    object-fit: cover;
                    width: 100%;
                    height: 100%;            }
            }

            .legal-container{
                display: flex;
                flex-direction: row;
                justify-content: space-evenly;
                width: 100%;
                padding: 0;

                li{
                    list-style: none;

                    a{
                        text-decoration: none;
                        color: black;

                        &:hover{
                            font-weight: 800;
                        }
                    }
                }
            }

            .bar{
                height: 1px;
                text-align: center;
                width: 50%;
                background-color: black;
            }

            h2{
                font-size: 14px;
                font-weight: 400;
                margin: 20px 0px;
            }
        }

        .footer-signature{
            width: 100%;
            background-color: black;
            color: white;
            display: flex;
            justify-content: center;
            
            h1{
                width: 50%;
                font-size: 14px;
                margin: 0;
                padding: 15px 0;
            }

            #heart{
                color: red;
            }
        }
    }

    @media screen and (max-width: $tablet){
        .footer{
            width: 100%;

            .footer-container{
                width: 100%;
                padding-left: 20px;
                padding-right: 20px;

                .contact-info{
                    .contact-info-container{
                        flex-direction: column;
                        align-items: center;

                        .contact-adress-container{
                            text-align: center;
                        }

                        .contact-time-container{
                            text-align: center;
                        }
                    }
                }

                .legal-container{
                    flex-direction: column;
                    text-align: center;
                    justify-content: space-evenly;
                }

                h2{
                    text-align: center;
                }
            }

            .footer-signature{
                h1{
                    width: 100%;
                    text-align: center;
                }
            }
        }
    }

</style>