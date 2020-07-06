<template>
    <div class="categories-page">
        <AdminPageTitle v-bind:title="page_title" />
        <div class="category-cards-container">
            <AdminCategoryCard v-for="category in allCategories" v-bind:key="category.id" :category="category"/>
        </div>
        <button class="add-button" type="button" @click="triggerModal">Ajouter une catégorie</button>
        <div v-if="modal" id="category-modal">
            <div class="modal-container">
                <h1>Ajouter une catégorie</h1>
                <form action="" @submit.prevent="addCategory">
                    <div class="form-element">
                        <label for="titre">Nom:</label>
                        <input name="titre" type="text" placeholder="Nom" v-model="name">
                    </div>
                    <div class="form-element">
                        <label for="slug">Slug:</label>
                        <input name="slug" type="text" placeholder="Slug" v-model="slug">
                    </div>
                    <div class="form-element">
                        <label for="description">Description:</label>
                        <textarea name="description" type="text" placeholder="Description" v-model="description"></textarea>
                    </div>
                    <button class="basic-btn-black" type="button" id="choose-images-btn" @click="triggerImagePicker">Choisir image</button>
                    <div class="selected-images-container">
                        <div v-if="selected_image" class="selected-image-container">
                            <img :src="getSrc(selected_image[0])" alt="selected">
                        </div>
                    </div>
                    <div class="form-element">
                        <button class="basic-btn-black" type="button" @click="triggerModal">Fermer</button>
                        <button class="basic-btn-green" type="submit">Sauvegarder</button>
                    </div>
                </form>
            </div>
        </div>
        <AdminImagePicker ref="image_picker" :allowed="1" v-on:selectedImages="setSelectedImage"/>
    </div>
</template>

<script>
import AdminPageTitle from '../../components/admin/AdminPageTitle'
import AdminCategoryCard from '../../components/admin/AdminCategoryCard'
import AdminImagePicker from '../../components/admin/AdminImagePicker'

export default {
    components: {
        AdminPageTitle,
        AdminCategoryCard,
        AdminImagePicker
    },
    data () {
        return{
            'page_title': "Catégories",
            'modal': false,
            'name': "",
            'slug': "",
            'description': "",
            'selected_image': ""
        }
    },
    methods:{
        getSrc(id){
            console.log(id)
            return this.$store.getters.allImages.find(item => item.id == id).url
        },
        triggerImagePicker(){
            this.$refs.image_picker.trigger()
        },
        triggerModal(){
            this.modal = !this.modal
        },
        addCategory(){
            console.log("coucou")
        },
        setSelectedImage(value){
            this.selected_image = value
        },
        addCategory(){
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + this.$store.getters.token
            axios.post('/category' ,{
                'name': this.name,
                'slug': this.slug,
                'description' : this.description,
                'image_id' : this.selected_image[0]
            })
            .then(response => {
                console.log("Category modified successfully.")
                this.triggerModal()
            })
            .catch(error => {
                console.log(error)
            })
        }
    },
    computed:{
        allCategories(){
            return this.$store.getters.allCategories
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

    .basic-btn-green{
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

    .categories-page{
        display: flex;
        flex-direction: column;

        .category-cards-container{
            margin-top: 2em;
        }

        .add-button{
            margin-top: 2em;
            align-self: flex-end;
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

        #category-modal {
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
                background-color: white;
                width: 40em;

                h1{
                    text-align: center;
                    margin: 1em 0;
                }

                form{
                    display: flex;
                    flex-direction: column;
                    justify-content: space-around;
                    align-items: center;
                    margin-bottom: 1em;

                    .selected-images-container{
                        display: flex;
                        flex-direction: row;
                        flex-wrap: wrap;
                        width: 80%;
                        height: 80%;
                        overflow: auto;
                        margin-top: 2em;

                        .selected-image-container{
                            position: relative;
                            height: 15em;
                            width: 100%;

                            img{
                                height: 100%;
                                width: 100%;
                                object-fit: cover;
                            }
                        }

                    }

                    .form-select{
                        width: 70%;
                    }

                    #choose-images-btn{
                        width: 80%;
                    }

                    .form-element{
                        display: flex;
                        justify-content: space-between;
                        width: 80%;
                        margin: 1em 0;
                        
                        label{
                            width: 30%;
                        }

                        input{
                            width: 70%;
                            border: none;
                            border-bottom: 1px solid rgb(184, 184, 184);

                            &:hover, &:focus{
                                border-bottom: 1px solid black;
                            }
                        }

                        textarea{
                            width: 70%;
                            border: none;
                            border-bottom: 1px solid rgb(184, 184, 184);

                            &:hover, &:focus{
                                border-bottom: 1px solid black;
                            }
                        }

                        select{
                            width: 70%;
                            border: none;
                            border-bottom: 1px solid rgb(184, 184, 184);
                            appearance: none;
                            text-transform: capitalize;

                            &:hover, &:focus{
                                border-bottom: 1px solid black;
                            }

                            option{
                                text-transform: capitalize;
                                background: black;
                                color: white;

                                &:hover{
                                    background: black;
                                    color: white;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
</style>