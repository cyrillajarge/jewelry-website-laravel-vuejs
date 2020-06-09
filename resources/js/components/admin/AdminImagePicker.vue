<template>
    <div class="image-picker" v-if="picker">
        <div class="modal-container">
            <h1>Images</h1>
            <div class="images-container">
                <div v-for="image in allImages" v-bind:key="image.id" class="image-container" @click="triggerImage(image.id)">
                    <img :src="image.url" :alt="image.name">
                    <div class="img-overlay"></div>
                    <div class="img-selected" v-if="belongsToSelected(image.id)"></div>
                </div>
            </div>
            <div class="picker-buttons">
                <button id="close-btn" class="basic-btn-black" @click="trigger">Fermer</button>
                <button class="basic-btn-black" @click="trigger">Choisir</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:['picker_type','selected'],
    data () {
        return {
            selectedImages: this.selected,
            picker: false,
        }
    },
    computed: {
        allImages(){
            return this.$store.getters.allImages
        }
    },
    methods: {
        triggerImage(id){
            if(this.picker_type == 'multiple'){
                const index = this.selectedImages.findIndex(item => item == id)
                if(index==-1){
                    this.selectedImages.push(id)
                }
                else{
                    this.selectedImages.splice(index, 1)
                }
            }
            else{
                if(this.selectedImages.length == 0){
                    this.selectedImages.push(id)
                }
                else{
                    if(this.selectedImages[0] == id){
                        this.selectedImages.pop()
                    }
                    else{
                        this.selectedImages.pop()
                        this.selectedImages.push(id)
                    }
                }
            }
        },
        belongsToSelected(id){
            for(var i=0;i<this.selectedImages.length;i++){
                if(this.selectedImages[i] == id){
                    return true
                }
            }
            return false
        },
        trigger(){
            this.picker = !this.picker
        }
    }
}
</script>

<style lang="scss">
    .image-picker {
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed; 
        z-index: 55;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.4);

        .modal-container{
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            padding: 1em;
            background-color: white;
            width: 80vw;
            height: 60vh;

            .images-container{
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                width: 100%;
                height: 80%;
                overflow: auto;
                border: 2px solid black;

                .image-container{
                    position: relative;
                    height: 15em;
                    width: calc(100%/4);

                    img{
                        height: 100%;
                        width: 100%;
                        object-fit: cover;
                    }

                    .img-overlay{
                        position: absolute;
                        top: 0;
                        left: 0;
                        height: 100%;
                        width: 100%;
                        background-color: black;
                        opacity: 0;
                        transition: opacity 0.3s ease-in-out;
                    }

                    .img-selected{
                        position: absolute;
                        top: 0;
                        left: 0;
                        height: 100%;
                        width: 100%;
                        background-color: goldenrod;
                        opacity: 0.5;
                    }

                    &:hover .img-overlay{
                        opacity: 0.3;
                        transition: opacity 0.3s ease-in-out;
                    }
                }
            }

            .picker-buttons{
                display: flex;
                align-items: center;
                justify-content: flex-end;

                #file-input{
                    display: none;
                }
                
                .basic-btn-black{
                    border: none;
                    border-radius: 5px;
                    background: none;
                    padding: 0.5em 1em;
                    outline: none;
                    margin: 0 1em;

                    border: 2px solid black;
                    color: black;
                    
                    &:hover{
                        background-color: black;
                        color: white;
                    }
                }

                #close-btn{
                    margin-right: auto;
                }
            }
        }
    }
</style>