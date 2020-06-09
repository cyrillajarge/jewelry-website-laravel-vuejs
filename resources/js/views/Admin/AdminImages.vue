<template>
    <div class="admin-images">
        <AdminPageTitle v-bind:title="page_title"/>
        <div class="images-container">
            <div v-for="(image,i) in allImages" v-bind:key="image.id" class="image-container" @click="triggerImage(i)">
                <img :src="image.url" :alt="image.name">
                <div class="img-overlay"></div>
                <div class="img-selected" v-if="belongsToSelected(i)"></div>
            </div>
        </div>
        <button class="basic-btn-red" id="delete-btn" @click="deleteImages">Supprimer sélection</button>
        <div class="image-import-container">
            <div class="preview-images-container">
                <div v-for="(image,i) in images_to_upload" v-bind:key="i" class="image-container">
                    <img :src="generateUrl(image)"/>
                </div>
            </div>
            <div class="import-btns">
                <input type="file" multiple id="file-input" @change="onFilesSelected">
                <button class="basic-btn-black" @click="triggerFileInput">Parcourir...</button>
                <button class="basic-btn-black" @click="importImages">Importer</button>
            </div>
        </div>
    </div>
</template>

<script>
import AdminPageTitle from '../../components/admin/AdminPageTitle'
import AdminImagePicker from '../../components/admin/AdminImagePicker'

export default {
    components:{
        AdminPageTitle
    },
    data () {
        return{
            'page_title': 'images',
            images_to_upload: [],
            selectedImages: [],
            message: '',
        }
    },
    methods:{
        triggerFileInput(){
            this.images_to_upload = []
            document.getElementById('file-input').click()
        },
        onFilesSelected(event){
                this.images_to_upload = event.target.files
        },
        generateUrl(image){
            return URL.createObjectURL(image)
        },
        importImages(){
            const config = {
                headers: { 'content-type': 'multipart/form-data' }
            }

            for(var i=0; i<this.images_to_upload.length;i++){
                let formData = new FormData();
                formData.append('image', this.images_to_upload[i])
                axios.post('/images', formData, config)
                .then(response => {
                    this.images_to_upload = []
                    this.message = "Images importées avec succès."
                })
                .catch(error => {
                    console.log(error)
                    this.message = "Une erreur est survenue lors de l'importation."
                })
            }
        },
        triggerImage(i){
            const index = this.selectedImages.findIndex(item => item == i)
            if(index==-1){
                this.selectedImages.push(i)
            }
            else{
                this.selectedImages.splice(index, 1)
            }
        },
        belongsToSelected(i){
            for(var j=0;j<this.selectedImages.length;j++){
                if(this.selectedImages[j] == i){
                    return true
                }
            }
            return false
        },
        deleteImages(){
            for(var index=0;index<this.selectedImages.length;index++){
                this.$store.dispatch('deleteImage', this.allImages[this.selectedImages[index]].id)
            }
        }
    },
    computed: {
        allImages(){
            return this.$store.getters.allImages
        }
    }

}
</script>

<style lang="scss" scoped>
    .basic-btn-black{
        border: none;
        border-radius: 5px;
        background: none;
        padding: 0.5em 1em;
        outline: none;

        border: 2px solid black;
        color: black;
        
        &:hover{
            background-color: black;
            color: white;
        }
    }

    .basic-btn-red{
        border: none;
        border-radius: 5px;
        background: none;
        padding: 0.5em 1em;
        outline: none;

        border: 2px solid red;
        color: red;
        
        &:hover{
            background-color: red;
            color: white;
        }
    }

    .admin-images{
        display: flex;
        flex-direction: column;

        #delete-btn, #import-btn{
            align-self: flex-end;
        }

        .images-container{
            margin-top: 2em;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
            height: 80%;
            overflow: auto;

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
    
        .image-import-container{
            margin: 2em 0;

            #file-input{
                display: none;
            }

            .preview-images-container{
                margin-top: 2em;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                width: 100%;
                height: 80%;
                overflow: auto;

                .image-container{
                    position: relative;
                    height: 15em;
                    width: calc(100%/4);

                    img{
                        height: 100%;
                        width: 100%;
                        object-fit: cover;
                    }
                }
            }
        }

        .import-btns{
            margin-top: 1em;
        }
    
    }
</style>