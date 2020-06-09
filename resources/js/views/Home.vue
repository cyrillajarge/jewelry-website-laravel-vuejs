<template>
    <div class="home">
        <div class="home-image-container">
            <img src="img/Ring-commercial.jpg" alt="women-ad-ring">
            <div class="home-image-overlay"></div>
            <div class="home-image-text">
                <h1>Veef. C</h1>
                <p>Création sur mesure de bijoux</p>
            </div>
            <JumpingArrow class="jumping-arrow"/>
        </div>
        <div>
            <div class="home-preambule-section">
                <img src="img/ringsb&w.jpg" alt="ringsb&w">
                <div class="preambule-overlay"></div>
                <div class="home-preambule-info">
                    <h1>Création sur mesure</h1>
                    <p>Chaque personne est unique et a des attentes qui lui sont propres.<br>
                    Nous avons créé un concept où la conception est unique, du design et de la création jusqu'au sachet.<br>
                    Une expérience complète où vous êtes au centre de la création.
                    </p>
                </div>
            </div>
        </div>
        <!-- <span class="spacer"></span> -->
        <div class="home-creation-section">
            <img id="timeline-img" src="img/Timeline.svg" alt="timeline">
            <img id="timeline-img90" src="img/Timeline90.svg" alt="timeline90">
            <div class="home-creation-content">
                <h1>Les étapes de la création</h1>
                <ul>
                    <li id="step1">
                        <h1>Rendez-vous dans notre salon de création</h1>
                        <p>Contactez nous ou prenez rendez-vous dans notre salon spécualement dédié à la clientèle.</p>
                    </li>
                    <li id="step2">
                        <h1>Présentation de votre projet<br>Réalisation sous forme de croquis</h1>
                        <p>Nous serons ravi de vous entendre et vous aider dans votre projet. Choisissez tout de A à Z pour avoir un bijoux qui vous ressemble.
                        Une designer étabilra un premier croquis avec vous.
                        </p>
                    </li>
                    <li id="step3">
                        <h1>Validation du design 3D<br>Lancement de la conception</h1>
                        <p>Visualisez la conception 3D de votre création.
                        Une fois votre validation effectuée, la création sera lancée.
                        100% fait main en France.
                        </p>
                    </li>
                    <li id="step4">
                        <h1>Réception de la création dans un écrin personnalisé</h1>
                        <p>Votre création vous sera remise dans son écrin également confectionné sur mesure.</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="home-jewellry-section">
            <router-link :to="cards[0].path" id="first-card"><BasicCard v-bind:carddata="cards[0]"/></router-link>
            <router-link v-for="(card,i) in shiftcards" :key="i" :to="card.path" class="secondary-cards"><BasicCard v-bind:carddata="card"/></router-link>
        </div>
        <div class="jewellry-items-section">
            <h1>Nos bijoux</h1>
            <div class="left-item">
                <img src="img/ring.png" alt="bagues">
                <div class="item-description">
                    <h2>Bagues</h2>
                    <router-link class="base-btn-light" to="/">Découvrir</router-link>
                </div>
            </div>
            <div class="right-item">
                <img src="img/earrings.png" alt="boucles d'oreilles">
                <div class="item-description">
                    <h2>Boucles d'oreilles</h2>
                    <router-link class="base-btn-light" to="/">Découvrir</router-link>
                </div>
            </div>
            <div class="left-item">
                <img src="img/necklace.png" alt="colliers">
                <div class="item-description">
                    <h2>Colliers</h2>
                    <router-link class="base-btn-light" to="/">Découvrir</router-link>
                </div>
            </div>
            <div class="right-item">
                <img src="img/bracelet.webp" alt="bracelets">
                <div class="item-description">
                    <h2>Bracelets</h2>
                    <router-link class="base-btn-light" to="/">Découvrir</router-link>
                </div>
            </div>
            <div class="left-item">
                <img src="img/pendentif.png" alt="pendentifs">
                <div class="item-description">
                    <h2>Pendentifs</h2>
                    <router-link class="base-btn-light" to="/">Découvrir</router-link>
                </div>    
            </div>
            <div class="right-item">
                <img src="img/autre-bijoux.png" alt="autres réalisations">
                <div class="item-description">
                    <h2>Autres réalisations</h2>
                    <router-link class="base-btn-light" to="/">Découvrir</router-link>    
                </div>    
            </div>          
        </div>
        <div class="services-section">
            <div class="services-info">
                <img src="img/services.jpg" alt="services">
                <h1>Services</h1>
            </div>
            <router-link to="/services/reparation" class="services-item">
                <img src="img/reparation-bijoux.jpg" alt="réparation">
                <div class="service-overlay"></div>
                <div class="service-item-content">    
                    <h2>Réparation</h2>
                    <p class="base-btn-light">En savoir plus</p>
                </div>
            </router-link>
            <router-link to="/services/transformation" class="services-item">
                <img src="img/transformation-bijoux.png" alt="transformation">
                <div class="service-overlay"></div>
                <div class="service-item-content">
                    <h2>Transformation</h2>
                    <p class="base-btn-light">En savoir plus</p>
                </div>
            </router-link>
            <router-link to="/services/gravure" class="services-item">
                <img src="img/gravure.jpg" alt="gravure">
                <div class="service-overlay"></div>
                <div class="service-item-content">
                    <h2>Gravure</h2>
                    <p class="base-btn-light">En savoir plus</p>
                </div>
            </router-link>
            <router-link to="/services/entretien" class="services-item">
                <img src="img/entretien.jpg" alt="entretien">
                <div class="service-overlay"></div>
                <div class="service-item-content">
                    <h2>Entretien</h2>
                    <p class="base-btn-light">En savoir plus</p>
                </div>
            </router-link>
        </div>
        <div class="grillz-section">
            <div id="left-image">
                <img id="left-image" src="img/travis-grillz.jpg" alt="travis-grillz">
                <div class="left-overlay"></div>
            </div>
            <div class="grillz-info">
                <h1>Grillz</h1>
                <p>Découvrez ce bijoux aussi bien attrayant que provoquant.</p>
                <div class="grillz-buttons">
                    <router-link class="base-btn-light" to="/grillz/about">Découvrir</router-link>
                    <router-link class="base-btn-light" to="/">Commander</router-link>
                </div>
            </div>
            <div id="right-image">
                <img src="img/zola-grillz.png" alt="zola-grillz">
                <div class="right-overlay"></div>
            </div>
        </div>
        <div class="events-section">
            <h1>Prochains évenements</h1>
            <EventsBloc id="events-bloc"/>
        </div>
    </div>
</template>

<script>
import BasicCard from '../components/BasicCard'
import EventsBloc from '../components/EventsBloc'
import JumpingArrow from '../components/JumpingArrow'

export default {
    components: {
        BasicCard,
        EventsBloc,
        JumpingArrow
    },
    data: () => {
        return {
            cards: [
                {
                    img: "img/bijouterie-joaillerie.jpg",
                    title: "Bijouterie/Joaillerie",
                    description: "Réalisations sur mesure, uniques.Nos conceptions sont réalisables à partir de plusieurs métaux précieux et pierres précieuses naturelles.Nous ne réalisons aucun bijoux en plaqué or et n'utilisons aucune pierre de synthèse.",
                    path: "/joaillerie/bijouterie"
                },
                {
                    img: "img/alliances.jpg",
                    title: "Alliances",
                    description: "Réalisations sur mesure, uniques.Nos conceptions sont réalisables à partir de plusieurs métaux précieux et pierres précieuses naturelles.Nous ne réalisons aucun bijoux en plaqué or et n'utilisons aucune pierre de synthèse.",
                    path: "/joaillerie/alliances"
                },
                {
                    img: "img/haute-joaillerie.jpg",
                    title: "Haute joaillerie",
                    description: "Réalisations sur mesure, uniques.Nos conceptions sont réalisables à partir de plusieurs métaux précieux et pierres précieuses naturelles.Nous ne réalisons aucun bijoux en plaqué or et n'utilisons aucune pierre de synthèse.",
                    path: "/joaillerie/haute-joaillerie"
                }
            ]
        }
    },
    computed:{
        shiftcards: function(){
            return this.cards.splice(1,2)
        }
    },
    methods: {
        isInViewport : function (element) {
            var elementHeight = element.clientHeight;
            var windowHeight = window.innerHeight;
            // get number of pixels that the document is scrolled
            var scrollY = window.scrollY || window.pageYOffset;
            
            // get current scroll position (distance from the top of the page to the bottom of the current viewport)
            var scrollPosition = scrollY + windowHeight;
            // get element position (distance from the top of the page to the bottom of the element)
            var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight/2;
            
            // is scroll position greater than element position? (is element in view?)
            if (scrollPosition > elementPosition) {
                return true;
            }
            
            return false;
        },
        animate: function(){
            var elem = document.getElementById("timeline-img")
            if(this.isInViewport(elem)){
                elem.classList.add("timeline-animate")
            }
            else{
                elem.classList.remove("timeline-animate")
            }
        }
    },
    mounted: function(){
        window.addEventListener('scroll', this.animate);
    },
    beforeDestroy: function(){
       window.addEventListener('scroll', this.animateTimeline);
    }
}
</script>

<style lang="scss" scoped>
    @import '~@/_variables.scss';

    .spacer{
        display: block;
        height: 1px;
        margin: 0 auto;
        width: 80%;
        background-color: white;
    }

    .home{
        background-color: black;

        .home-image-container{
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            top: 0;
            left: 0;
            width: 100%;
            height: calc(100vh - 70px - 53px);

            .home-image-overlay{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: black;
                opacity: 0.2;
            }

            img{
                object-fit: cover;
                width: 100%;
                height: 100%;
            }

            .jumping-arrow{
                position: absolute;
                bottom: 0;
            }

            .home-image-text{
                position: absolute;
                bottom: 20%;
                text-align: center;
                color: white;

                h1{
                    text-transform: uppercase;
                    font-size: calc(44px + (64 - 44) * ((100vw - 300px) / (1600 - 300)));
                    font-weight: 800;
                    // text-shadow: 2px 2px 3px black;
                }

                p{
                     font-size: calc(20px + (40 - 20) * ((100vw - 300px) / (1600 - 300)));
                    // text-shadow: 2px 2px 3px black;
                }
            }
        }

        .home-preambule-section{
            position: relative;
            height: 500px;
            margin-top: 5rem;

            img{
                position: absolute;
                width: 100%;
                height: 100%;
                opacity: 0.2;
                object-fit: cover;
            }

            .preambule-overlay{
                position: absolute;
                width: 100%;
                height: 100%;
                background: none;
                box-shadow: inset 0px 0px 15em 10em black;
            }
            
            .home-preambule-info{
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                align-items: center;
                position:  absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);

                h1{
                    text-align: center;
                    color: white;
                    margin-bottom: 30px;
                }

                p{
                    color: white;
                    text-align: center;
                    font-size: 16px;
                }
            }
        }

        .home-creation-section{

            display: block;
            position: relative;
            top: 0;
            left: 0;
            text-align: center;
            height: 850px;
            margin-top: 30px;

            #timeline-img{
                object-fit: cover;
                width: 90%;
                height: 100%;
                opacity: 0;
            }

            #timeline-img90{
                display: none;
            }

            .timeline-animate{
                animation: timelinekeys 1s ease;
                opacity: 1 !important;
            }

            @keyframes timelinekeys {
                0% {
                    opacity: 0;
                    transform: translateY(-50px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0px);
                }
            }

            .home-creation-content{
                position: absolute;
                height: 100%;
                top: 0;

                h1{
                    margin: 30px 0;
                    color: white;
                    width: 100%;
                    text-align: center;
                }

                ul{
                    display: flex;
                    justify-content: space-evenly;
                    width: 100%;
                    list-style: none;
                    
                    li{
                        width: 20%;
                        text-align: center;
                        
                        h1{
                            color: white;
                            font-size: 22px;
                        }

                        p{
                            color: white;
                            font-size: 14px;
                        }
                    }

                    #step1{
                        margin-top: 20px;
                        margin-right: 20px;
                    }

                    #step2{
                        margin-top: 450px;
                        margin-right: 40px;
                    }

                    #step3{
                        margin-top: 50px;
                        // margin-right: 40px;
                    }

                    #step4{
                        margin-top: 500px;
                        margin-right: 40px;
                    }
                }
            }
        }

        .home-jewellry-section{
            display: flex;
            flex-wrap: wrap;

            #first-card{
                height: 400px;
                width: 100%;
            }

            .secondary-cards{
                width: 50%;
                height: 400px;
            }
        }

        .jewellry-items-section{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;

            h1{
                width: 100%;
                color: white;
                text-align: center;
                margin: 5rem 0;
                font-size: calc(30px + (40 - 30) * ((100vw - 300px) / (1600 - 300)));
            }
            
            .left-item{
                width: 50%;
                display: flex;
                margin-bottom: 2rem;
            }

            .right-item{
                width: 50%;
                display: flex;
                margin-bottom: 2rem;

                img{
                    order: 2;
                }

                .item-description{
                    order: 1;
                }
            }

            img{
                width: 50%;
                object-fit: cover;
            }

            .item-description{
                display: flex;
                height: 100%;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 50%;

                h2{
                    color: white;
                    margin-bottom: 2rem;
                    font-size: calc(20px + (34 - 20) * ((100vw - 300px) / (1600 - 300)));
                }

                // button{
                //     background: none;
                //     border: 2px solid white;
                //     color: white;
                //     padding: 5px 20px;
                //     border-radius: 20px;

                //     &:hover{
                //         background-color: white;
                //         color: black;
                //     }
                // }
            }
        }

        .services-section{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            margin-bottom: 4rem;

            .services-info{
                position: relative;
                height: 400px;
                width: 100%;

                img{
                    height: 100%;
                    width: 100%;
                    object-fit: cover;
                }

                h1{
                    font-size: calc(30px + (40 - 30) * ((100vw - 300px) / (1600 - 300)));
                    color: white;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                }
            }

            .services-item{
                position: relative;
                width: 25%;
                height: 400px;
                overflow: hidden;
                
                img{
                    height: 100%;
                    width: 100%;
                    object-fit: cover;
                    filter: grayscale(100%);
                    transition: transform 0.5s ease-in-out;
                }

                .service-item-content{
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);

                    h2{
                        font-size: calc(24px + (34 - 24) * ((100vw - 300px) / (1600 - 300)));
                        color: white;
                    }
                }

                .service-overlay{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: black;
                    opacity: 0.2;
                    transition: opacity 0.5s ease-in-out;
                }

                &:hover .service-overlay{
                   opacity: 1;
                   transition: opacity 0.5s ease-in-out;
                }

                &:hover img{
                    transform: scale(1.05);
                    transition: transform 0.5s ease-in-out;
                }
            }
        }

        .grillz-section{
            display: flex;
            height: 500px;

            #left-image{
                position: relative;
                width: 40%;
                height: 100%;
                box-shadow: inset 0px 0px 15em 10em black;

                img{
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    filter: grayscale(100%);
                }

                .left-overlay{
                    position: absolute;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    background: none;
                    box-shadow: inset -20em 15em 15em -3em black;
                }
            }

            .grillz-info{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 30%;

                h1, p{
                    text-align: center;
                    color: white;
                }

                h1{
                    font-size: calc(20px + (40 - 20) * ((100vw - 300px) / (1600 - 300)));
                }

                p{
                    font-size: calc(10px + (18 - 10) * ((100vw - 300px) / (1600 - 300)));
                }

                .grillz-buttons{
                    width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: space-evenly;

                    // button{
                    //     border: 2px solid white;
                    //     padding: 5px 20px;
                    //     border-radius: 20px;
                    //     background: none;
                    //     color: white;

                    //     &:hover{
                    //         color: black;
                    //         background-color: white;
                    //     }
                    // }
                }
            }

            #right-image{
                position: relative;
                height: 100%;
                width: 40%;

                img{
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    filter: grayscale(100%);
                }

                .right-overlay{
                    position: absolute;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    background: none;
                    box-shadow: inset 20em 15em 15em -3em black;
                }
            }
        }

        .events-section{
            padding: 2rem 0;
            display: flex;
            flex-direction: column;
            align-items: center;

            h1{
                margin: 2rem 0;
                text-align: center;
                color: white;
            }

            #events-bloc{
                width: 50%;
            }
        }
    }

    @media screen and(max-width: $tablet) {

        .home{
            .home-image-container{
                height: calc(100vh - 70px);

                .home-image-text{

                    h1{
                        text-transform: uppercase;
                        font-weight: 800;
                    }
                }
            }

            .home-preambule-section{
                .preambule-overlay{
                    box-shadow: inset 0px 0px 5em 2em black;
                }

            }

            .home-creation-section{
                height: 2000px;

                #timeline-img{
                    display: none;
                }

                #timeline-img90{
                    display: block;
                    height: 100%;
                    width: 100%;
                    object-fit: cover;
                    transform: translateX(-12rem);
                }

                .home-creation-content{
                    display: flex;
                    flex-direction: column;

                    ul{
                        display: flex;
                        flex-direction: column;
                        flex-grow: 1;
                        width: 50%;
                        padding: 0;
                        margin-right: 5rem;
                        align-self: flex-end;
                        justify-content: space-around;

                        li{
                            width: 100%;
                        }

                        #step1{
                            margin: 0;
                        }

                        #step2{
                            margin: 0;
                        }

                        #step3{
                            margin: 0;
                        }

                        #step4{
                            margin: 0;
                        }
                    }
                }
            }

            .home-jewellry-section{
                .secondary-cards{
                    width: 100%;
                }
            }

            .jewellry-items-section{ 
                .left-item{
                    width: 100%;
                }

                .right-item{
                    width: 100%;
                }
            }

            .services-section{
                margin: 0;

                .services-item{
                    width: 50%;
                    flex-grow: 1;
                }
            }


            .grillz-section{
                height: 800px;
                flex-direction: column;
            
                #left-image{
                    display: none;
                }

                .grillz-info{
                    height: 300px;
                    width: 100%;
                }

                #right-image{
                    height: 500px;
                    width: 100%;

                    .right-overlay{
                        box-shadow: inset 0em 15em 15em -3em black;
                    }
                }
            }

            .events-section{
                #events-bloc{
                    width: 80%;
                }
            }
        }
    }
</style>