<template>
    <div v-if="this.product" class="product-wrapper">
        <h1 class="product-name">{{this.product.name}}</h1>
        <div class="product-image-viewer">
            <div class="product-big">
                <div class="product-big-placeholder">
                    <img :src="this.product.images[this.selected].url" :alt="this.product.images[selected].name">
                </div>
            </div>
            <div class="product-thumbnails">
                <div class="thumbnail-placeholder" v-for="(image,i) in this.product.images" v-bind:key="image.id" @click="selectImage(i)">
                    <img :src="image.url" alt="Image">
                    <div v-if="i != selected" class="overlay"></div>
                </div>
            </div>
        </div>
        <div class="product-info">
            <div class="tabs">
                <div class="tab">
                    <button class="tablinks selected" id="descriptionTab" @click="openTab('Description')" ref="defaultopen">Description.</button>
                    <button class="tablinks" id="compositionTab" @click="openTab('Composition')">Composition.</button>
                </div>
                <div id="Description" class="tabcontent">
                    <div v-html="this.product.description"/>
                </div>
                <div id="Composition" class="tabcontent">
                    <p>La bonne composition</p>
                </div>
            </div>
            <div class="download">
                <button class="base-btn-dark">Télécharger la fiche</button>
            </div>
        </div>
        <div class="product-suggestions-wrapper">
            <div class="product-suggestions-container">
                <h1>Ces bijoux peuvent peut-être vous intéresser</h1>
                <div class="product-cards-container">
                    <router-link
                        v-for="(suggestion, i) in this.suggestions" v-bind:key="i"
                        :to="{ name: 'product-info', params: { category_slug: getCategorySlug(suggestion.category_id), product_slug: suggestion.slug }}">
                        <ProductCard v-bind:product="suggestion"/>
                    </router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ProductCard from '../components/ProductCard'

export default {
    components: {
        ProductCard
    },
    data () {
        return {
            "selected": 0,
            "suggestions": '',
            'product' : ''
        }
    },
    beforeRouteUpdate (to, from, next) {
        this.getProduct(to.params.product_slug)
        this.getSuggestions()
        next();
    },
    created(){
        this.getProduct(this.$route.params.product_slug)
        this.getSuggestions()
    },
    methods: {
        selectImage(i){
            this.selected = i
        },
        getCategorySlug(id){
            let categories = this.$store.getters.allCategories
            for(let i = 0;i<categories.length;i++){
                if(categories[i].id == id){
                    return categories[i].slug
                }
            }
        },
        openTab(id){
            var tabscontent = document.getElementsByClassName('tabcontent')
            for(let i = 0;i<tabscontent.length;i++){
                tabscontent[i].style.display = "none"
            }
            var desctab = document.getElementById("descriptionTab")
            var compositiontab =  document.getElementById("compositionTab")
            if(id=="Composition"){
                desctab.classList.remove('selected')
                compositiontab.classList.add('selected')
                document.getElementById(id).style.display = "flex"
            } else {
                desctab.classList.add('selected')
                compositiontab.classList.remove('selected')
                document.getElementById(id).style.display = "flex"
            }
        },
        getProduct(product_slug){
            axios.get('/products/' + product_slug + '?include=images')
            .then(response => {
                this.product = response.data[0]
                this.$nextTick(() => {
                    this.$refs.defaultopen.click()
                })
            })
            .catch(error => {
                console.log(error)
            })
        },
        getSuggestions(){
            axios.get('/products?include=images')
            .then(response => {
                const shuffled = response.data.sort(() => 0.5 - Math.random())
                let chosen = shuffled.slice(0, 3)
                this.suggestions = chosen
                for(var i=0;i<this.suggestions.length;i++){
                    var id = this.suggestions[i].category_id
                    this.$store.getters.allCategories
                }
            })
            .catch(error => {
                console.log(error)
            })
        }
    }
}
</script>

<style lang="scss" scoped>

    p{
        font-size: calc(12px + (16 - 12) * ((100vw - 300px) / (1600 - 300)));
        line-height: 2em;
        text-align: justify;
    }

    .product-wrapper{
        background-color: white;
        display: flex;
        flex-direction: column;

        .product-name{
            background-color: white;
            color: black;
            padding-top: 1em;
            position: relative;
            font-size: calc(20px + (40 - 20) * ((100vw - 300px) / (1600 - 300)));
            z-index: 1;
            align-self: flex-start;

            &::after{
                position: absolute;
                bottom: -5px;
                left: 0;
                content: "";
                height: 20px;
                width: 100%;
                background-color: lightgray;
                z-index: -1;
            }
        }

        .product-image-viewer{
            background-color: white;
            display: flex;
            height: 80em;
            width: 100%;
            margin: 0 auto;

            .product-big{
                width: 75%;
                padding: 4em 0;

                .product-big-placeholder{
                    height: 100%;
                    width: 100%;

                    img{
                        height: 100%;
                        width: 100%;
                        object-fit: cover;
                    }
                }
            }

            .product-thumbnails{
                width: 25%;
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
                padding: 2em;
                
                .thumbnail-placeholder{
                    position: relative;
                    width: 100%;
                    height: 30%;

                    img{
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }

                    .overlay{
                        position: absolute;
                        top: 0;
                        left: 0;
                        height: 100%;
                        width: 100%;
                        background-color: white;
                        opacity: 0.4;
                    }
                }
            }
        }

        .product-info{
            display: flex;

            .tabs{
                width: 80%;
                display: flex;
                flex-direction: column;

                .tab {
                    display: flex;
                    justify-content: flex-start;
                    

                    .tablinks {
                        color: black;
                        font-size: calc(20px + (24 - 20) * ((100vw - 300px) / (1600 - 300)));
                        text-transform: capitalize;
                        font-weight: 600;
                        background: none;
                        border: none;
                        outline: none;
                        cursor: pointer;
                        
                        &:hover{
                            text-decoration: underline;
                        }

                        &:active{
                            text-decoration: underline;
                        }
                    }

                    .selected{
                        text-decoration: underline;
                    }
                }

                .tabcontent {
                    display: none;
                    padding: 12px 12px;

                    p{
                        color: black;
                    }
                }
            }

            .download{
                width: 20%;
                display: flex;
                align-items: center;
                justify-content: center;

                button{
                    background: none;
                    border: none;
                    padding: 0;
                }
            }
        }


        .product-suggestions-wrapper{
            padding: 2em 0;
            
            .product-suggestions-container{
                width: 90%;
                margin: 0 auto;

                h1{
                    color: white;
                    position: relative;
                    font-size: calc(20px + (40 - 20) * ((100vw - 300px) / (1600 - 300)));

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

                .product-cards-container{
                    margin: 3em 0;
                    display: flex;
                    flex-direction: row;
                    justify-content: space-evenly;
                }
            }
        }
    }
</style>