<template>
    <div class="page-element-container">
        <button class="dropdown-button" @click="showElement">{{element.name}}
            <i class="fa fa-chevron-down icon" v-if="!element_data" aria-hidden="true"></i>
            <i class="fa fa-chevron-up icon" v-if="element_data" aria-hidden="true"></i>
        </button>
        <form v-if="element_data" class="page-element-data" @submit.prevent="">
            <div class="form-element">
                <label for="titre">Titre:</label>
                <input type="text" name="titre" placeholder="Titre" v-model="title">
            </div>
            <div class="form-element">
                <label for="contenu">Contenu:</label>
                <textarea name="contenu" placeholder="Contenu" v-model="content"></textarea>
            </div>
            <div class="selected-images-container">
                <div v-for="id in selected_images" v-bind:key="id" class="selected-image-container">
                    <img :src="getSrc(id)" alt="selected">
                </div>
            </div>
            <button class="basic-btn-black" id="choose-btn" @click="triggerImagePicker">Choisir image<span v-if="element.nimages == 'multiple'">s</span></button>
            <button id="modify-btn" @click="saveData">Sauvegarder</button>
        </form>
        <AdminImagePicker ref="image_picker" :picker_type="element.nimages" :selected="selected_images"/>
    </div>
</template>

<script>
import AdminImagePicker from '../../components/admin/AdminImagePicker'

export default {
    components: {
        AdminImagePicker
    },
    props: ['element'],
    data () {
        return{
            'element_data': false,
            'title': this.element.title,
            'content': this.element.content,
            'selected_images': this.initializeSelected()
        }
    },
    methods:{
        showElement(){
            this.element_data = !this.element_data
        },
        triggerImagePicker(){
            this.$refs.image_picker.trigger()
        },
        getSrc(id){
            return this.$store.getters.allImages.find(item => item.id == id).url
        },
        saveData(){
            // axios.defaults.headers.common['Authorization'] = 'Bearer ' + context.state.token
            axios.patch('/pelements/' + this.element.id ,{
                'title': this.title,
                'content' : this.content,
                'images' : this.selected_images
            })
            .then(response => {
                console.log("Pelement saved successfully.")
            })
            .catch(error => {
                console.log(error)
            })
        },
        initializeSelected(){
            var ids = []
            for(var i=0;i<this.element.images.length;i++){
                ids.push(this.element.images[i].id)
            }
            return ids
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
        align-self: flex-start;

        border: 2px solid black;
        color: black;
        
        &:hover{
            background-color: black;
            color: white;
        }
    }
    .page-element-container{
        margin: 0.2em 0;

        .dropdown-button{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: 3em;

            background: none;
            outline: none;
            border: 1px solid black;
            border-radius: 5px;

            font-size: 1.5em;

            i{
                font-size: 0.5em;
            }
        }

        .page-element-data{
            padding: 1em;
            border-left: 1px solid rgb(180, 180, 180);
            border-right: 1px solid rgb(180, 180, 180);
            border-bottom: 1px solid rgb(180, 180, 180);

            display: flex;
            flex-direction: column;

            .form-element{
                display: flex;
                width: 100%;
                margin: 1em 0;

                label{
                    display: flex;
                    align-items: center;
                    width: 10em;
                }

                input, textarea{
                    flex-grow: 1;
                    // padding: 1em;

                    border: none;
                    border-bottom: 1px solid rgb(184, 184, 184);

                    &:hover, &:focus{
                        border-bottom: 1px solid black;
                    }
                }
            }

            .selected-images-container{
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                width: 100%;
                height: 80%;
                overflow: auto;

                .selected-image-container{
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

            #choose-btn{
                margin-top: 1em;
            }

            #modify-btn{
                align-self: flex-end;
                border: none;
                border-radius: 5px;
                background: none;
                padding: 0.5em 1em;
                outline: none;

                border: 2px solid green;
                color: green;
                
                &:hover{
                    background-color: green;
                    color: white;
                }
            }
        }
    }
</style>