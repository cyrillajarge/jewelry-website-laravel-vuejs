<template>
    <div class="carousel-container">
        <div class="slide">
            <img src="img/services.jpg" alt="">
        </div>
        <div class="slide">
            <img src="img/Ring-commercial.jpg" alt="">
        </div>
        <div class="slide">
            <img src="img/zola-grillz.png" alt="">
        </div>
        <!-- <div class="overlay"></div> -->
        <a class="prev" @click="plusSlides(-1)"></a>
        <a class="next" @click="plusSlides(1)"></a>
    </div>
</template>

<script>
export default {
    data () {
        return{
            slideIndex: 1
        }
    },
    methods: {
        plusSlides: function(val){
            this.slideIndex += val
        },
        showSlides: function(){
            var slides = document.getElementsByClassName('slide')
            for(var i=0;i<slides.length;i++){
                slides[i].style.display = 'none'
            }
            this.slideIndex++
            if(this.slideIndex>slides.length){
                this.slideIndex = 1
            }
            slides[this.slideIndex-1].style.display = 'block'
            setTimeout(this.showSlides, 5000)
        }
    },
    mounted (){
        this.showSlides()
    }
}
</script>

<style lang="scss" scoped>
    .carousel-container{
        height: 100%;
        width: 100%;
        position: relative;

        .slide{
            display: none;
            position: relative;
            width: 100%;
            height: 100%;

            img{
                position: absolute;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
        }

        // .overlay{
        //     position: absolute;
        //     height: 100%;
        //     width: 100%;
        //     top: 0;
        //     left: 0;
        //     background: rgb(2,0,36);
        //     background: linear-gradient(180deg, rgba(2,0,36,0) 0%, rgba(0,0,0,1) 80%);
        // }
    }
</style>