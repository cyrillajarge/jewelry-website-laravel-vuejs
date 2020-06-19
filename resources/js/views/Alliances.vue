<template>
    <div>
        <div class="alliances-full-header">
            <FullHeightHeader :image="image"/>
            <div class="overlay"></div>
            <div class="full-header-content">
                <h1>Alliances.</h1>
            </div>
            <JumpingArrow class="jumping-arrow" />
        </div>
        <div class="alliances-intro">
            <p>
                Chaque union est unique c'est pourquoi chaque bijou devrait l'être également.<br>
                Réalisez une création sur-mesure ou découvrez notre sélection d'idées, chaque modèle étant personnalisable à votre guise.
            </p> 
        </div>
        <div class="alliances-container">
            <h1>Nos alliances</h1>
            <div class="alliances-cards-container">
                <div class="product-card" v-for="(product, i) in products" v-bind:key="i">
                    <ProductCard v-bind:product="product" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import FullHeightHeader from '../components/FullHeightHeader'
import JumpingArrow from '../components/JumpingArrow'
import ProductCard from '../components/ProductCard'

export default {
    components: {
        FullHeightHeader,
        JumpingArrow,
        ProductCard
    },
    mounted(){
        // axios.get('/categories/1/products')
        // .then(response => {
        //     console.log(response)
        // })
        // .catch(error => {
        //     console.log(error)
        // })
    },
    data () {
        return{
            'image': {
                "name": "Alliances",
                "url": "/img/alliances.jpg"
            },
            'products': [
                {
                    "image":{
                        "name": "Ring",
                        "url": "/img/ring.png"
                    },
                    "name": "Alliance #1",
                    "description": "The good ring",
                    "routename": "alliance-info",
                    "id": "123"
                },
                {
                    "image":{
                        "name": "Ring",
                        "url": "/img/ring.png"
                    },
                    "name": "Alliance #2",
                    "description": "The good ring",
                    "routename": "alliance-info",
                    "id": "123"
                },
                {
                    "image":{
                        "name": "Ring",
                        "url": "/img/ring.png"
                    },
                    "name": "Alliance #3",
                    "description": "The good ring",
                    "routename": "alliance-info",
                    "id": "123"
                },
                {
                    "image":{
                        "name": "Ring",
                        "url": "/img/ring.png"
                    },
                    "name": "Alliance #4",
                    "description": "The good ring",
                    "routename": "alliance-info",
                    "id": "123"
                },
                {
                    "image":{
                        "name": "Ring",
                        "url": "/img/ring.png"
                    },
                    "name": "Alliance #5",
                    "description": "The good ring",
                    "routename": "alliance-info",
                    "id": "123"
                }
            ]
        }
    }
}
</script>

<style lang="scss" scoped>
@import '~@/_variables.scss';

    .alliances-full-header{
        position: relative;
        height: calc(100vh - 70px - 53px);

        .overlay{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            opacity: 0.15;
        }
        
        .full-header-content{
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);

            h1{
                font-size: calc(44px + (60 - 44) * ((100vw - 300px) / (1600 - 300)));
                text-align: center;
                color: white;
            }
        }

        .jumping-arrow{
            position: absolute;
            bottom: 0;
            left: 50%;
        }
    }

    .alliances-intro{
        display: flex;
        flex-direction: column;
        width: 60%;
        margin: 0 auto;

        p{
            margin: 6em 0;
            color: white;
            line-height: 2em;
            text-align: center;
            font-size: calc(14px + (16 - 14) * ((100vw - 300px) / (1600 - 300)));
        }
    }

    .alliances-container{
        width: 80%;
        margin: 0 auto;
        
        h1{
            color: white;
            font-size: calc(20px + (40 - 20) * ((100vw - 300px) / (1600 - 300)));

            position: relative;
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

        .alliances-cards-container{
            margin: 3em 0;
            display: flex;
            flex-wrap: wrap;

            .product-card{
                margin: 1em 0;
                width: 50%;
            }
        }
    }
</style>