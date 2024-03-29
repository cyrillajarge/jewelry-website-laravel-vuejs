<template>
    <div v-if="this.category" class="product-category">
        <div class="category-landing">
            <div class="category-image-container">
                <div class="image-container">
                    <img src="http://placeimg.com/1000/1000/any" alt="Image">
                </div>
                <div class="overlay"></div>
                <div class="landing-content">
                    <h1>Découvrez nos {{this.category.name}}.</h1>
                </div>
            </div>
            <JumpingArrow class="jumping-arrow" />
        </div>
        <div class="product-intro">
            <p>
                {{this.category.description}}
            </p>
        </div>
        <div class="products-container">
            <div class="products-cards-container">
                <router-link
                    v-for="product in this.category.products" v-bind:key="product.id"
                    :to="{ name: 'product-info', params: { category_slug: category.slug, product_slug: product.slug }}">
                    <ProductCard 
                        class="product-card"
                        :product="product"
                        :category_slug="category.slug"
                    />
                </router-link>
            </div>
        </div>
        <div class="categories-suggestions">
            <h1 class="suggestions-title">Ces catégories peuvent aussi vous intéresser</h1>
            <div class="categories-suggestions-container">
                <router-link
                    :to="'/bijouterie/'+suggestion.slug"
                    class="suggestion-card-container"
                    v-for="suggestion in getCategoriesSuggestions()" v-bind:key="suggestion.id">
                    <img :src="getSrc(suggestion.image_id)" alt="Suggestion">
                    <div class="overlay"></div>
                    <div class="suggestion-card-content">
                        <h1>{{suggestion.name}}</h1>
                        <button class="base-btn-dark">Plus</button>
                    </div>
                </router-link>
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
    data () {
        return{
            'image': {
                "name": "Découvrez nos alliances",
                "url": "/img/alliances.jpg"
            },
            'category': ''
        }
    },	
    beforeRouteUpdate (to, from, next) {
        this.getProducts(to.params.slug)
        next();
    },
    created(){
        this.getProducts(this.$route.params.slug)
    },
    methods: {
        getProducts(slug){
            axios.get('/categories/' + slug + '/products?include=products, products.images')
            .then(response => {
                this.category = response.data[0]
            })
            .catch(error => {
                console.log(error)
            })
        },
        capitalize(name){
            return name.charAt(0).toUpperCase() + name.slice(1)
        },
        getSrc(id){
            return this.$store.getters.allImages.find(item => item.id == id).url
        },
        getCategoriesSuggestions(){
            let category_slug = this.$route.params.slug
            let categories = this.$store.getters.allCategories
            categories = categories.filter((obj) => obj.slug != category_slug)
            for (let i = categories.length; i; i--) {
                let j = Math.floor(Math.random() * i);
                [categories[i - 1], categories[j]] = [categories[j], categories[i - 1]];
            }
            return categories.splice(0,3)
        }
    }
}
</script>

<style lang="scss" scoped>
@import '~@/_variables.scss';

    .product-category{
        .category-landing{
            display: flex;
            flex-direction: column;
            justify-self: center;
            align-items: center;
            height: calc(100vh - 70px - 53px);

            .category-image-container{
                position: relative;
                display: flex;
                flex-direction: row;
                width: 100%;
                height: 75%;
                margin: auto 0;

                .image-container{
                    height: 100%;
                    width: 85%;

                    img{
                        height: 100%;
                        width: 100%;
                        object-fit: cover;
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

                .landing-content{
                    position: absolute;
                    top: 50%;
                    right: 15%;
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
                }
            }

            .jumping-arrow{
                position: absolute;
                bottom: 0;
            }
        }

        .product-intro{
            display: flex;
            flex-direction: column;
            width: 60%;
            margin: 0 auto;

            p{
                margin: 6em 0;
                color: black;
                line-height: 2em;
                text-align: center;
                font-size: 20px;
            }
        }

        .products-container{
            width: 100%;
            // margin: 0 auto;

            .products-cards-container{
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                align-items: flex-start;
                padding: 1em 0;
            }
        }

        .categories-suggestions{
            display: flex;
            flex-direction: column;
            margin: 10em 0;

            .suggestions-title{
                align-self: flex-start;
                color: black;
                margin-bottom: 2em;
                position: relative;
                background: none;
                z-index: 1;
                font-size: 30px;

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

            .categories-suggestions-container{
                display: flex;
                flex-direction: row;
                justify-content: space-around;

                .suggestion-card-container{
                    position: relative;
                    width: 300px;
                    height: 300px;

                    img{
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }

                    .overlay{
                        background-color: white;
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        opacity: 0.2;
                        transition: opacity 0.5s ease-in-out;
                    }

                    .suggestion-card-content{
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%,-50%);
                        display: flex;
                        flex-direction: column;

                        h1{
                            font-size: 25px;
                            color: black;
                            margin-bottom: 1em;
                        }

                        button{
                            border: none;
                            background: none;
                        }
                        
                    }

                    &:hover{
                        .overlay{
                            opacity: 1;
                            transition: opacity 0.5s ease-in-out;
                        }
                    }
                }
            }
        }
    }
</style>