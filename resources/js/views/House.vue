<template>
    <div class="house">
        <div class="house-landing">
            <div class="house-landing-container">
                <div class="house-carousel-container">
                    <Carousel />
                </div>
                <div class="overlay"></div>
                <h1>Notre histoire</h1>
            </div>
            <JumpingArrow class="jumping-arrow"/>
        </div>
        <div class="info-section">
            <p class="main-description">Le fait d'avoir des choses à la fois petites et précieuse m'a depuis tout jeune très intéressé au secteur du luxe et plus spécifiquement a celui de la bijouterie. Je m'apelle <strong>Clément Veef</strong> et depuis 2018, je m'éforce à créer un concept original, innovant et rajeuns de bijouterie joaillerie. Grace à l'ambition, l'acharnement et surtout la passion, j'ai aujourd'hui créé le concept de bijouterie joaillerie sur mesure. Le concept de bijoux sur mesure n'est pas nouveau étant donné que de grandes maisons de joailleire et bon nombre d'artisans le font depuis bien longtemps. Néamoins, je suis parti d'un constat simple; beaucoup de personnes cherchent à avoir un produit et un service personnalisé, or aujourd'hui en France (berceau de la joaillerie) l'offre n'est plus du tous personnalisée avec des bijoux fait à la chaine de façon industrielle. Les maisons de haute joaillerie qui travaillent encore à la pièce ne vont a mon sens pas assez loin dans la personnalisation de l'offre. C'est pourquoi j'ai décidé de créé ma propre bijouterie, en faisant une offre personnalisée de A à Z.</p>
            <div class="info-card-section">    
                <BasicCard
                    v-for="(info,i) in infos" v-bind:key="i"
                    :carddata="info"
                    :type="'half'"
                    :position="getPosition(i)"
                    :color="true"
                    class="info-card"
                />
            </div>
        </div>
    </div>
</template>

<script>
import Carousel from '../components/Carousel'
import JumpingArrow from '../components/JumpingArrow'
import BasicCard from '../components/BasicCard'

export default {
    components: {
        Carousel,
        JumpingArrow,
        BasicCard
    },
    methods: {
        getPosition(index){
            if(index%2 == 0){
                return 'left'
            }
            else{
                return 'right'
            }
        }
    },
    data () {
        return {
            infos: [
                {
                    "title": "Les partenaires",
                    "description": "Tout d'abord, nous avons porté une attention paticulière sur le choix de nos partenaires pour que chaque bijoux créé à la demande des clients soit parfait. C'est pour cela que nous avons décidé de travailler uniquement avec des artisans français. Etant donné que la réalisation de bijoux et de grillz nécéssite des compétences et connaissances totalement différentes, nous avons preféré contacter un atelier pour nos bijoux, et un grillz maker indépendant pour la réalisation de nos grillz.",
                    "img": "http://placeimg.com/640/480/any"
                },
                {
                    "title": "Le salon de création",
                    "description": "Pour mettre nos clients dans le meilleur cadre possible, nous avons décidé de créé un salon justement dédié a ces créations, où l'essentiel des choses sont mise en œuvre pour répondre et devellopper les différents projets de nos clients. Une sorte de bureau pour mette à l'aise nos clients, accueillir chaleureusement par notre designer et notre chef de projet.",
                    "img": "http://placeimg.com/640/480/any"
                },
                {
                    "title": "Nos créations",
                    "description": "Nous avons voulu déveloper tout cela pour créé l'inconcevable. En faisant du sur mesure les limites sont rares. C'est pourquoi nous sommes fiers de dire que nous pouvons quasiment tout faire. La bijouterie joallerie éxiste depuis tant d'années, et notre entreprise constituée de collaborateurs pour la majorité assez jeune apporte dans ce secteur un regard différent et plus neuf. Secteur en perpétuel évolution, notre atraie pour la joaillerie passe aussi bien par des demandes classiques, avec une touche de personnalisation mais également par des demandes plus originales les unes que les autres. Avec l'interêt des stars pour les bijoux de plus en plus incroyables, nous nous sommes spécialisé dans des créations pur et dur aussi bien de bagues, colliers, bracelets … que  des lunettes en or, des ongles en diamant, ou encore de la personnalisation de chaussures",
                    "img": "http://placeimg.com/640/480/any"
                },
                {
                    "title": "Le grillz",
                    "description": "Une autre partie de nos créations sur-mesure est bien sur le 'grillz', c'est une prothèse dentaire amovible généralement réalisée en chrome et en or. Bijoux assez négligé en France, ils ont fait leur apparition grâce aux stars amméricaines, pour avoir le sourir le plus étincelant possible. Notre entreprise a décidé de s'intéresser à ce bijou, chose qui n'a pour le moment jamais été faite en joaillerie française. Très intriguant, de par le côté provoquant qu'il fait ressortir, nous proposons une large gamme avec du jamais vu comme à nos habitudes, des Grillz en platine. Aussi bien adapté aux femmes pour son côté non conventionnel qu'au hommes, nous vous receverons avec plaisir dans notre salon de création pour réaliser votre projet. Il est également possible si vous souhaitez un grillz réalisé par notre maison, de commander un kit à distance disponible sur notre site, pour faire de chez vous l'empreinte qui va ensuites servir pour sa réalisation.",
                    "img": "http://placeimg.com/640/480/any"
                },
                {
                    "title": "Les services",
                    "description": "Nous souhaitons avoir une joaillerie proposant une offre de services des plus complets, en réalisant, premièrement un service de percage des oreilles réalisé par une équipe formée et qualifiée, les percages au pistolet sont réalisés à partir de 3 ans, technique plus adaptée pour les enfants. Pour toute personne voulant avoir des piercings autre que le lobe nous avons créé un évenement qui sera mis en place 5 fois dans l'année où un professionnele du piercing est invité pour satisfaire au mieux vos exigences. Les réalisations sont faites à l'aiguille. Comme nous savons que vos bijoux vous tiennent à cœur, nous avons dévellopé les services transformation qui conciste a donné une seconde vie a vos bijoux. En plus de ce dernier, nous proposons evidement un service de réparation où nous sommes en capacité d'effectuer des réparations courantes sur n'importe quel type de bijoux.",
                    "img": "http://placeimg.com/640/480/any"
                },
                {
                    "title": "Les écrins",
                    "description": "Ob haec et huius modi multa, quae cernebantur in paucis, omnibus timeri sunt coepta. et ne tot malis dissimulatis paulatimque serpentibus acervi crescerent aerumnarum, nobilitatis decreto legati mittuntur: Praetextatus ex urbi praefecto et ex vicario Venustus et ex consulari Minervius oraturi, ne delictis supplicia sint grandiora, neve senator quisquam inusitato et inlicito more tormentis exponeretur. Eodem tempore etiam Hymetii praeclarae indolis viri negotium est actitatum, cuius hunc novimus esse textum. cum Africam pro consule regeret Carthaginiensibus victus inopia iam lassatis, ex horreis Romano populo destinatis frumentum dedit, pauloque postea cum provenisset segetum copia, integre sine ulla restituit mora. Mensarum enim voragines et varias voluptatum inlecebras, ne longius progrediar, praetermitto illuc transiturus quod quidam per ampla spatia urbis subversasque silices sine periculi metu properantes equos velut publicos signatis quod dicitur calceis agitant, familiarium agmina tamquam praedatorios globos post terga trahentes ne Sannione quidem, ut ait comicus, domi relicto. quos imitatae matronae complures opertis capitibus et basternis per latera civitatis cuncta discurrunt.",
                    "img": "http://placeimg.com/640/480/any"
                },
                {
                    "title": "Programme de fidélité",
                    "description": "Grâce à notre programme de fidélité vous pourrez bénéficier de nombreux cadeaux et d'avantages sur les tarifs de vos futurs achats. Pour ce faire : une carte cénacle (fidélité/identification) en argent 925 avec le nom de la personne (éventuellement la photo gravée) et surtout la mention « membre Cénacle » pour profiter d’un suivi et d’une attention qui se fait très rare.",
                    "img": "http://placeimg.com/640/480/any"
                },
                {
                    "title": "Les événements",
                    "description": "Retrouvez nous sur diffèrents salons aussi bien locaux, nationaux qu'Europées. Vous pouvez également nous rencontrer durant les piercing days.",
                    "img": "http://placeimg.com/640/480/any"
                },
                {
                    "title": "Les réseaux sociaux",
                    "description": "Vous pourrez découvrir nos créations et la vie de notre joaillerie à travers les différents réseaux tels que Instagram, Facebook et encore YouTube où nous sommes très heureux de vous partager notre expérience aussi bien avec nos clients que nos shootings, les coulisses de notre joaillerie, ainsi que nos évènements.",
                    "img": "http://placeimg.com/640/480/any"
                }
            ]
        }
    }
}
</script>

<style lang="scss" scoped>
    @import '~@/_variables.scss';

    .house{
        .house-landing{
            display: flex;
            flex-direction: column;
            justify-self: center;
            align-items: center;
            height: calc(100vh - 70px - 53px);

            .house-landing-container{
                position: relative;
                display: flex;
                flex-direction: row;
                width: 100%;
                height: 75%;
                margin: auto 0;

                .house-carousel-container{
                    height: 100%;
                    width: 75%;
                }

                h1{
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    right: 15%;

                    color: white;

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

                .overlay{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgb(2,0,36);
                    background: linear-gradient(90deg, rgba(2,0,36,0) 0%, rgba(0,0,0,1) 75%, rgba(0,0,0,1) 100%);
                }
            }
        }

        .info-section{
            .main-description{
                color: black;
                width: 75%;
                text-align: center;
                margin: 10em auto;
                font-size: 20px;
                line-height: 2em;
            }

            .info-card-section{
                .info-card{
                    margin: 10em 0;
                }
            }
        }
    }
</style>