<template>
    <div class="card-container">
        <div v-bind:class="containerClass">
            <img v-if="!this.color" :src="carddata.img" alt="image" :style="{ filter: 'grayscale(' + 100 + '%)'}" />
            <img v-if="this.color" :src="carddata.img" alt="image" />
        </div>
        <div v-if="type == 'full'" v-bind:class="overlayClass"></div>
        <div v-bind:class="contentClass">
            <h1 v-if="carddata.title">{{ carddata.title }}</h1>
            <p v-if="carddata.description">{{ carddata.description }}</p>
            <router-link v-if="carddata.link" v-bind:class="buttonClass" :to="carddata.path">Découvrir</router-link>
        </div>
    </div>
</template>
<script>
export default {
    data : () => {
        return{

        }
    },
    props: ['carddata','type','position','color'],
    computed: {
        containerClass: function(){
            if(this.type == 'full'){
                var classes = ['full-image-container']
                if(this.position == 'left'){
                    classes.push('full-image-left')
                }
                else if(this.position == 'right'){
                    classes.push('full-image-right')
                }
                else{
                    classes.push('full-image')
                }
                return classes
            }
            else{
                var classes = ['half-image-container']
                if(this.position == 'left'){
                    classes.push('image-left')
                }
                else{
                    classes.push('image-right')
                }
                return classes
            }
        },
        overlayClass: function(){
            return 'image-overlay'
        },
        contentClass: function(){
            if(this.type == 'full'){
                var classes = ['full-card-content']
                if(this.position == 'left'){
                    classes.push('full-content-right')
                }
                else if(this.position == 'right'){
                    classes.push('full-content-left')
                }
                else{
                    classes.push('full-content-center')
                }
                return classes
            }
            else{
                var classes = ['half-card-content']
                if(this.position == 'left'){
                    classes.push('text-right')
                }
                else{
                    classes.push('text-left')
                }
                return classes
            }
        },
        overlayClass: function(){
            var classes = ['image-overlay']
            if(this.position == 'left'){
                classes.push('overlay-right')
            }
            else if(this.position == 'right'){
                classes.push('overlay-left')
            }
            else{
                classes.push('overlay-center')
            }
            return classes
        },
        buttonClass: function(){
            if(this.type == 'full'){
                return 'base-btn-light'
            }
            else{
                return 'base-btn-dark'
            }
        }
    }
}
</script>
<style lang="scss" scoped>
    a:hover{
        text-decoration: none !important;
        font-style: none !important;
    }

    .card-container{
        position: relative;
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: row;
        margin: 2em 0;
    }

    .full-image-container{
        height: 100%;
    }

    .full-image-left{
        width: 70%;
        margin-right: auto;
    }

    .full-image-right{
        width: 70%;
        margin-left: auto;
    }

    .full-image{
        width: 100%;
    }

    .half-image-container{
        width: 50%;
        height: 100%;
    }

    .image-left{
        order: 1;
    }

    .image-right{
        order: 2;
    }

    img{
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    .black-block{
        background-color: black;
        width: 30%;
        height: 100%;
    }

    .image-overlay{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .overlay-right{
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(0, 0, 0, 0) 0%, rgba(0,0,0,1) 70%, rgba(0,0,0,1) 100%);
    }

    .overlay-left{
        background: rgb(2,0,36);
        background: linear-gradient(270deg, rgba(0, 0, 0, 0) 0%, rgba(0,0,0,1) 70%, rgba(0,0,0,1) 100%);
    }

    .overlay-center{
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(0, 0, 0, 0) 0%, rgba(0,0,0,1) 30%, rgba(0,0,0,1) 70%, rgba(0,0,0,0) 100%);
    }

    .full-card-content{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 30%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 0 3em;

        h1{
            color: white;
            text-align: center;
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

        p{
            color: white;
            text-align: center;
            font-size: 16px;
            margin-bottom: 2em;
        }

        a{
            text-align: center;
        }
    }

    .full-content-left{
        left: 15%;
    }

    .full-content-right{
        right: 15%;
    }

    .full-content-center{
        left: 50%;
        transform: translate(-50%,-50%);
    }

    .half-card-content{
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
            margin-bottom: 3em;
        }
    }

    .text-right{
        order: 2;
    }

    .text-left{
        order: 1;
    }
</style>