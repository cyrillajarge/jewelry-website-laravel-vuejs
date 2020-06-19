<template>
    <div class="product-card-container">
        <img :src="product.image.url" :alt="product.image.name">
        <div class="product-card-overlay"></div>
        <div class="product-card-content">
            <h1>{{ product.name }}</h1>
            <p>{{ product.description }}</p>
            <router-link class="base-btn-dark" :to="{ name: product.routename, params: { id: product.id }}">Voir la fiche</router-link>
        </div>
    </div>
</template>

<script>
export default {
    props:["product"],
    data () {
        return {
            
        }
    }
}
</script>

<style lang="scss" scoped>

    .product-card-container{
        width: 50%;
        margin: 0 auto;
        position: relative;

        img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-card-overlay{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .product-card-content{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            h1,p{
                color: black;
            }
        }

        &:hover{
            .product-card-overlay{
                opacity: 1;
                transition: opacity 0.5s ease-in-out;
            }

            .product-card-content{
                opacity: 1;
                transition: opacity 0.5s ease-in-out;
            }
        }
    }
</style>