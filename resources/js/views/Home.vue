<template>
    <div class="home">
        <div class="home-landing">
            <div class="home-image-container">
                <div class="image-container">
                    <img src="img/Ring-commercial.jpg" alt="women-ad-ring">
                </div>
                <div class="black-block"></div>
                <div class="home-image-overlay"></div>
                <div class="home-image-text">
                    <h1>Veef.C</h1>
                    <p>Création sur mesure de bijoux</p>
                    <router-link class="base-btn-light" :to="{name: 'house'}">En savoir plus</router-link>
                </div>
                <img id="logo" src="/img/Logo.png" alt="Logo">
            </div>
            <JumpingArrow class="jumping-arrow"/>
        </div>
        <div>
            <div class="home-preambule-section">
                <div class="preambule-image-container">
                    <img src="img/ringsb&w.jpg" alt="ringsb&w">
                </div>
                <div class="home-preambule-info">
                    <h1 class="section-title">Création sur mesure</h1>
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
                <h1 class="section-title">Nos étapes de création</h1>
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
            <h1 class="section-title">Nos réalisations</h1>
            <p>Nous sommes heureux de vous présenter notre catalogue d'idées, destiné à vous inspirer pour la créations de vos bijoux et objets sur-mesure.</p>
            <router-link :to="cards[0].path" class="realisation-card"><BasicCard :carddata="cards[0]" :type="'full'" :position="'right'" :color="true"/></router-link>
            <router-link :to="cards[1].path" class="realisation-card"><BasicCard :carddata="cards[1]" :type="'half'" :position="'left'" :color="true"/></router-link>
            <router-link :to="cards[2].path" class="realisation-card"><BasicCard :carddata="cards[2]" :type="'half'" :position="'right'" :color="true"/></router-link>
        </div>
        <div class="jewellry-items-section">
            <h1 class="section-title">Nos bijoux</h1>
            <div class="items-container">
                <router-link class="left-item" to="/bijouterie/bagues">
                    <img src="img/ring.png" alt="bagues">
                    <div class="item-description">
                        <h2>Bagues</h2>
                        <router-link class="base-btn-dark" to="/bijouterie/bagues">Découvrir</router-link>
                    </div>
                </router-link>
                <router-link class="right-item" to="/bijouterie/boucles-oreilles">
                    <img src="img/earrings.png" alt="boucles d'oreilles">
                    <div class="item-description">
                        <h2>Boucles d'oreilles</h2>
                        <router-link class="base-btn-dark" to="/bijouterie/boucles-oreilles">Découvrir</router-link>
                    </div>
                </router-link>
                <router-link class="left-item" to="/bijouterie/colliers">
                    <img src="img/necklace.png" alt="colliers">
                    <div class="item-description">
                        <h2>Colliers</h2>
                        <router-link class="base-btn-dark" to="/bijouterie/colliers">Découvrir</router-link>
                    </div>
                </router-link>
                <router-link class="right-item" to="/bijouterie/bracelets">
                    <img src="img/bracelet.webp" alt="bracelets">
                    <div class="item-description">
                        <h2>Bracelets</h2>
                        <router-link class="base-btn-dark" to="/bijouterie/bracelets">Découvrir</router-link>
                    </div>
                </router-link>
                <router-link class="left-item" to="/bijouterie/pendentifs">
                    <img src="img/pendentif.png" alt="pendentifs">
                    <div class="item-description">
                        <h2>Pendentifs</h2>
                        <router-link class="base-btn-dark" to="/bijouterie/pendentifs">Découvrir</router-link>
                    </div>    
                </router-link>
                <router-link class="right-item" to="/">
                    <img src="img/autre-bijoux.png" alt="autres réalisations">
                    <div class="item-description">
                        <h2>Autres réalisations</h2>
                        <router-link class="base-btn-dark" to="/">Découvrir</router-link>    
                    </div>    
                </router-link>
            </div>         
        </div>
        <div class="services-section">
            <h1 class="section-title">Nos services</h1>
            <router-link :to="services[0].path" class="service-card"><BasicCard :carddata="services[0]" :type="'half'" :position="'right'" :color="false"/></router-link>
            <router-link :to="services[1].path" class="service-card"><BasicCard :carddata="services[1]" :type="'half'" :position="'left'" :color="false"/></router-link>
            <router-link :to="services[2].path" class="service-card"><BasicCard :carddata="services[2]" :type="'half'" :position="'right'" :color="false"/></router-link>
            <router-link :to="services[3].path" class="service-card"><BasicCard :carddata="services[3]" :type="'half'" :position="'left'" :color="false"/></router-link>
        </div>
        <div class="grillz-section">
            <div id="left-image">
                <img id="left-image" src="img/travis-grillz.jpg" alt="travis-grillz">
            </div>
            <div id="right-image">
                <img src="img/zola-grillz.png" alt="zola-grillz">
            </div>
            <div class="grillz-info">
                <h1>Grillz</h1>
                <p>Découvrez ce bijoux aussi bien attrayant que provoquant.</p>
                <div class="grillz-buttons">
                    <router-link class="base-btn-light" to="/grillz/about">Découvrir</router-link>
                    <router-link class="base-btn-light" to="/">Commander</router-link>
                </div>
            </div>
            <div class="grillz-overlay"></div>
        </div>
        <div class="events-section">
            <h1 class="section-title">Prochains évenements</h1>
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
            ],
            services: [
                {
                    img: "/img/reparation-bijoux.jpg",
                    title: "Réparations",
                    description: "Vestibulum sem risus, facilisis vitae molestie ac, congue at urna. Morbi et condimentum sapien. Cras laoreet nisi a risus vestibulum, quis consectetur mi consequat.",
                    path: "/services/reparation"
                },
                {
                    img: "/img/transformation-bijoux.png",
                    title: "Transformations",
                    description: "Vestibulum sem risus, facilisis vitae molestie ac, congue at urna. Morbi et condimentum sapien. Cras laoreet nisi a risus vestibulum, quis consectetur mi consequat.",
                    path: "/services/transformation"
                },
                {
                    img: "/img/gravure.jpg",
                    title: "Gravures",
                    description: "Vestibulum sem risus, facilisis vitae molestie ac, congue at urna. Morbi et condimentum sapien. Cras laoreet nisi a risus vestibulum, quis consectetur mi consequat.",
                    path: "/services/gravure"
                },
                {
                    img: "/img/entretien.jpg",
                    title: "Entretien",
                    description: "Vestibulum sem risus, facilisis vitae molestie ac, congue at urna. Morbi et condimentum sapien. Cras laoreet nisi a risus vestibulum, quis consectetur mi consequat.",
                    path: "/services/entretien"
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

    .section-title{
        text-align: center;
        color: black;
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
            background-color: lightgrey;
            z-index: -1;
        }
    }

    .spacer{
        display: block;
        height: 1px;
        margin: 0 auto;
        width: 80%;
        background-color: white;
    }

    .home{
        .home-landing{
            display: flex;
            flex-direction: column;
            justify-self: center;
            align-items: center;
            height: calc(100vh - 70px - 53px);

            .home-image-container{
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

                .black-block{
                    height: 100%;
                    width: 25%;
                }

                .home-image-overlay{
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

                .home-image-text{
                    position: absolute;
                    bottom: 20%;
                    right: 15%;
                    // transform: translateY(-50%);
                    text-align: center;
                    color: white;
                    display: flex;
                    flex-direction: column;

                    h1{
                        align-self: center;
                        margin-bottom: 1em;
                        text-transform: uppercase;
                        font-size: 55px;
                        font-weight: 400;
                        position: relative;
                        background: none;
                        z-index: 1;

                        &::after{
                            position: absolute;
                            bottom: 0;
                            left: 0;
                            content: "";
                            height: 25px;
                            width: 100%;
                            background-color: grey;
                            z-index: -1;
                        }
                    }


                    p{
                        font-size: 20px;
                        margin-bottom: 2em;
                    }
                }

                #logo{
                    position: absolute;
                    top: -40%;
                    right: 1%;
                }
            }
        }

        .home-preambule-section{
            height: 500px;
            margin-top: 5em;
            display: flex;
            flex-direction: row;

            .preambule-image-container{
                position: relative;
                width: 50%;

                img{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }
            }
            
            .home-preambule-info{
                width: 50%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 0 3em;

                h1{
                    text-align: center;
                    color: black;
                    margin-bottom: 2em;
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
                        background-color: lightgrey;
                        z-index: -1;
                    }
                }

                p{
                    color: black;
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
            margin-top: 10em;

            #timeline-img{
                object-fit: contain;
                width: 90%;
                height: 100%;
                opacity: 0;
                filter: invert(1);
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
                display: flex;
                flex-direction: column;

                h1{
                    margin-bottom: 2em;
                    align-self: center;
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
                            color: black;
                            font-size: 22px;
                        }

                        p{
                            color: black;
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
            margin-top: 10em;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;

            h1{
                margin-bottom: 2em;
                align-self: center;
            }

            p{
                margin: 0 auto;
                margin-bottom: 4em;
                text-align: center;
                width: 60%;
                font-size: 16px;
            }

            .realisation-card{
                height: 500px;
                width: 100%;
                margin: 4em 0;
            }
        }

        .jewellry-items-section{
            display: flex;
            flex-direction: column;

            h1{
                margin-top: 4em;
                margin-bottom: 2em;
                align-self: center;
            }

            .items-container{
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
            
                .left-item{
                    border-radius: 10px;
                    width: 50%;
                    display: flex;
                    margin-bottom: 2rem;
                    position: relative;
                    z-index: 1;

                    &::before{
                        content: "";
                        position: absolute;
                        top: 50%;
                        left: 0;
                        height: 80px;
                        background: black;
                        transform: translateY(-50%) rotateZ(-45deg);
                        width: 50%;
                        z-index: -1;
                        transition: transform 0.25s ease-out;
                    }

                    &::after{
                        content: "";
                        position: absolute;
                        top: 50%;
                        left: 0;
                        height: 80px;
                        background: black;
                        transform: translateY(-50%) rotateZ(45deg);
                        width: 50%;
                        z-index: -1;
                        transition: transform 0.25s ease-out;
                    }

                    &:hover{
                        &::before{
                        transform: translateY(-50%) rotateZ(-90deg);
                        transition: transform 0.25s ease-out;
                        }

                        &::after{
                            transform: translateY(-50%);
                            transition: transform 0.25s ease-out;
                        }
                    }

                    // &:hover{
                    //     background-color: black;
                    //     transition: background 0.5s ease-in-out;

                    //     .item-description{
                    //         h2{
                    //             color: white;
                    //             transition: color 0.5s ease-in-out;
                    //         }

                    //         a{
                    //             color: white;
                    //             transition: color 0.5s ease-in-out;

                    //             &::before{
                    //                 background: #868686;
                    //                 transition: background 0.5s ease-in-out;
                    //             }

                    //             &::after{
                    //                 background: white;
                    //                 transition: background 0.5s ease-in-out;
                    //             }
                    //         }
                    //     }
                    // }
                }

                .right-item{
                    border-radius: 10px;
                    width: 50%;
                    display: flex;
                    margin-bottom: 2rem;
                    position: relative;
                    z-index: 1;

                    &::before{
                        content: "";
                        position: absolute;
                        top: 50%;
                        right: 0;
                        height: 80px;
                        background: black;
                        transform: translateY(-50%) rotateZ(-45deg);
                        width: 50%;
                        z-index: -1;
                        transition: transform 0.25s ease-out;
                    }

                    &::after{
                        content: "";
                        position: absolute;
                        top: 50%;
                        right: 0;
                        height: 80px;
                        background: black;
                        transform:  translateY(-50%) rotateZ(45deg);
                        width: 50%;
                        z-index: -1;
                        transition: transform 0.25s ease-out;
                    }

                    &:hover{
                        &::before{
                        transform: translateY(-50%) rotateZ(-90deg);
                        transition: transform 0.25s ease-out;
                        }

                        &::after{
                            transform: translateY(-50%);
                            transition: transform 0.25s ease-out;
                        }
                    }

                    // &:hover{
                    //     background-color: black;
                    //     transition: background 0.5s ease-in-out;

                    //     .item-description{
                    //         h2{
                    //             color: white;
                    //             transition: color 0.5s ease-in-out;
                    //         }

                    //         a{
                    //             color: white;
                    //             transition: color 0.5s ease-in-out;

                    //             &::before{
                    //                 background: #868686;
                    //                 transition: background 0.5s ease-in-out;
                    //             }

                    //             &::after{
                    //                 background: white;
                    //                 transition: background 0.5s ease-in-out;
                    //             }
                    //         }
                    //     }
                    // }

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
                        color: black;
                        margin-bottom: 2em;
                        font-size: 25px;
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
        }

        .services-section{
            margin-top: 5em;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            margin-bottom: 4rem;

            h1{
                align-self: center;
            }

            .service-card{
                height: 500px;
                margin: 4em 0;
            }
        }

        .grillz-section{
            display: flex;
            justify-content: space-between;
            height: 500px;
            margin-top: 10em;
            position: relative;

            #left-image{
                width: 40%;
                height: 100%;
                box-shadow: inset 0px 0px 15em 10em black;

                img{
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    // filter: grayscale(100%);
                }
            }

            #right-image{
                height: 100%;
                width: 40%;
                

                img{
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    // filter: grayscale(100%);
                }
            }

            .grillz-info{
                z-index: 2;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 30%;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                

                h1, p{
                    text-align: center;
                    color: white;
                }

                h1{
                    font-size: calc(20px + (40 - 20) * ((100vw - 300px) / (1600 - 300)));
                    position: relative;
                    background: none;
                    z-index: 1;
                    margin-bottom: 1em;

                    &::after{
                        position: absolute;
                        bottom: 2px;
                        left: 0;
                        content: "";
                        height: 20px;
                        width: 100%;
                        background-color: grey;
                        z-index: -1;
                    }
                }

                p{
                    font-size: 16px;
                    margin-bottom: 2em;
                }

                .grillz-buttons{
                    width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: space-evenly;
                }
            }

            .grillz-overlay{
                z-index: 1;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgb(2,0,36);
                background: linear-gradient(90deg, rgba(0, 0, 0, 0) 0%, rgba(0,0,0,1) 40%, rgba(0,0,0,1) 60%, rgba(0,0,0,0) 100%);
            }
        }

        .events-section{
            margin-bottom: 6em;
            display: flex;
            flex-direction: column;
            align-items: center;

            h1{
                margin-top: 4em;
                margin-bottom: 2em;
                text-align: center;
                color: black;
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