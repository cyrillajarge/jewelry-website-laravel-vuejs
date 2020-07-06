<template>
    <div class="product-card-container">
        <div class="image-container">
            <img :src="product.images[0].url" :alt="product.images[0].name">
        </div>
        <div class="info-container">
            <h1>{{ product.name }}</h1>
            <p>{{ product.description }}</p>
            <!-- <router-link class="base-btn-dark link-btn" :to="{ name: 'product-info', params: { category_slug: this.category_slug, product_slug: this.product.slug }}">Voir la fiche</router-link> -->
        </div>
    </div>
</template>

<script>
export default {
    props:["product","category_slug"],
    data () {
        return {
            
        }
    }
}
</script>

<style lang="scss" scoped>

    .product-card-container{
        display: flex;
        flex-direction: column;
        height: 500px;
        width: 300px;
        margin: 1em 0;
        // background-color: red;

        .image-container{
            position: relative;
            width: 100%;
            height: 400px;
            z-index: 1;
            background-color: rgb(250, 250, 250);

            img{
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            &::before{
                content: "";
                position: absolute;
                top: 50%;
                left: 35%;
                height: 300px;
                background: black;
                transform: translateY(-50%) rotateZ(-45deg);
                width: 30%;
                z-index: -1;
                transition: transform 0.25s ease-out;
            }

            &::after{
                content: "";
                position: absolute;
                top: 50%;
                left: 35%;
                height: 300px;
                background: black;
                transform: translateY(-50%) rotateZ(45deg);
                width: 30%;
                z-index: -1;
                transition: transform 0.25s ease-out;
            }
        }

        &:hover{
            .image-container{
                &::before{
                    transform: translateY(-50%) rotateZ(-90deg);
                    transition: transform 0.25s ease-out;
                }

                &::after{
                    transform: translateY(-50%);
                    transition: transform 0.25s ease-out;
                }
            }
        }

        .info-container{
            height: 100px;

            h1{
                margin-top: 0.5em;
                margin-bottom: 0;
                margin-left: 0.5rem;
                font-size: 25px;
                color: black;
            }
            
            p{
                margin-left: 0.5rem;
                font-size: 14px;
                color: rgb(73, 73, 73);
            }
        }
    }
</style>