<template>
    <div class="card-container">
        <img :src="carddata.img" alt="image">
        <div class="image-overlay"></div>
        <div class="card-content">
            <h1>{{ carddata.title }}</h1>
            <p>{{ carddata.description }}</p>
            <router-link class="base-btn-dark" :to="carddata.path">Découvrir</router-link>
        </div>
    </div>
</template>
<script>
export default {
    data : () => {
        return{

        }
    },
    props: ['carddata']
}
</script>
<style lang="scss" scoped>
    .card-container{
        position: relative;
        height: 100%;
        width: 100%;
        text-align: center;
        overflow: hidden;

        &:hover img{
            transform: scale(1.05);
            transition: transform 0.5s ease-in-out;
        }

        &:hover .image-overlay{
            opacity: 1;
            transition: opacity 0.5s ease;
        }

        img{
            position: relative;
            height: 100%;
            width: 100%;
            object-fit: cover;
            transition: transform 0.5s ease-in-out;
            // z-index: 2;
        }

        .image-overlay{
            position: absolute;
            top: 0;
            height: 100%;
            width: 100%;
            background-color: white;
            opacity: 0.2;
            // z-index: 1;
            transition: opacity 0.5s ease;
        }

        .card-content{
            position: absolute;
            display: flex;
            flex-direction: column;
            height: 60%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            justify-content: space-evenly;
            align-items: center;
            z-index: 2;

            h1, p{
                color: black;
            }

            h1{
                font-size: calc(22px + (28 - 22) * ((100vw - 300px) / (1600 - 300)));
            }

            p{
                font-size: calc(12px + (14 - 12) * ((100vw - 300px) / (1600 - 300)));
            }

            // button{
            //     border: 2px solid black;
            //     padding: 5px 20px;
            //     border-radius: 20px;
            //     background: none;

            //     &:hover{
            //         color: white;
            //         background-color: black;
            //     }
            // }
        }
    }
</style>