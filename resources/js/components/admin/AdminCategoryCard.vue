<template>
    <div class="page-element-container">
        <div class="dropdown-button" @click="showDropdown">
            <h1>{{capitalize(category.name)}}</h1>
            <button @click="deleteCategory($event, category)" class="basic-btn-red">Supprimer</button>
            <i class="fa fa-chevron-down icon" v-if="!show_dropdown" aria-hidden="true"></i>
            <i class="fa fa-chevron-up icon" v-if="show_dropdown" aria-hidden="true"></i>
        </div>
        <form v-if="show_dropdown" class="page-element-data" action="" @submit.prevent="updateCategory">
            <div class="form-element">
                <label for="name">Name:</label>
                <input type="text" name="name" v-model="name">
            </div>
            <div class="form-element">
                <label for="slug">Slug:</label>
                <input type="text" name="slug" v-model="slug">
            </div>
            <div class="form-element">
                <label for="description">Description:</label>
                <textarea name="description" v-model="description"></textarea>
            </div>
            <div class="selected-images-container">
                <div v-if="selected_image.length == 1" class="selected-image-container">
                    <img :src="getSrc(selected_image[0])" alt="selected">
                </div>
            </div>
            <button class="basic-btn-black" id="choose-btn" type="button" @click="triggerImagePicker">Choisir image</button>
            <button id="modify-btn" type="submit">Sauvegarder</button>
        </form>
        <AdminImagePicker ref="image_picker" :allowed="1" v-bind:selected="selected_image" v-on:selectedImages="setSelectedImage"/>
    </div>
</template>

<script>
import AdminImagePicker from '../../components/admin/AdminImagePicker'

export default {
    components: {
        AdminImagePicker
    },
    props: ['category'],
    data () {
        return{
            'show_dropdown': false,
            'name': this.category.name,
            'slug': this.category.slug,
            'description': this.category.description,
            'selected_image': this.initializeSelected()
        }
    },
    methods:{
        capitalize(name){
            return name.charAt(0).toUpperCase() + name.slice(1)
        },
        setSelectedImage(value){
            this.selected_image = value
        },
        deleteCategory(event, category){
            event.stopPropagation()
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + this.$store.getters.token
            
            axios.delete('/categories/' + this.category.id)
            .then(response => {
                console.log(response)
            })
            .catch(error => {
                console.log(error)
            })
        },
        showDropdown(){
            this.show_dropdown = !this.show_dropdown
        },
        triggerImagePicker(){
            this.$refs.image_picker.trigger()
        },
        getSrc(id){
            return this.$store.getters.allImages.find(item => item.id == id).url
        },
        updateCategory(){
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + this.$store.getters.token
            axios.patch('/categories/' + this.category.id ,{
                'name': this.name,
                'description' : this.description,
                'image_id' : this.selected_image[0]
            })
            .then(response => {
                console.log("Category modified successfully.")
            })
            .catch(error => {
                console.log(error)
            })
        },
        initializeSelected(){
            return [this.category.image_id]
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

    .basic-btn-red{
        border: none;
        border-radius: 5px;
        background: none;
        margin: 1em;
        padding: 0.5em 1em;
        outline: none;

        border: 2px solid red;
        color: red;
        
        &:hover{
            background-color: red;
            color: white;
        }
    }

    .page-element-container{
        margin: 0.2em 0;

        .dropdown-button{
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: 4em;

            background: none;
            outline: none;
            border: 1px solid black;
            border-radius: 5px;
            margin-bottom: 0.5em;

            h1{
                margin: 0;
                margin-left: 0.5em;
                display: flex;
                align-items: center;
                font-size: 1.5em;
            }

            button{
                margin-right: 4em;
            }

            i{
                position: absolute;
                right: 1em;
                margin: auto 0;
                font-size: 1em;
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