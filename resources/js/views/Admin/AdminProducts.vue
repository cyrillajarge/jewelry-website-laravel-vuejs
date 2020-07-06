<template>
    <div class="products-page">
        <AdminPageTitle v-bind:title="page_title" />
        <div class="filter-section">
            <p>Produits:</p>
            <div v-if="categories" class="filter">
                <div class="select-container">
                    <Select v-bind:elements="categories" v-bind:initial="filter" v-on:selectedElement="setSelected"/>
                </div>
            </div>
        </div>
        <div>
            <AdminProduct v-for="product in this.products" v-bind:key="product.id" v-bind:product="product"/>
        </div>
        <button id="add-product-btn" @click="triggerModal">Ajouter un produit</button>
        <div v-if="modal" id="product-modal">
            <div class="modal-container">
                <h1>Ajouter un produit</h1>
                <form action="" @submit.prevent="addProduct">
                    <div class="form-element">
                        <label for="category">Categorie:</label>
                        <Select class="form-select" v-bind:elements="categories" v-bind:initial="category" v-on:selectedElement="setSelectedModal"/>
                    </div>
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
                    <button class="basic-btn-black" type="button" id="choose-images-btn" @click="triggerImagePicker">Choisir images</button>
                    <div class="selected-images-container">
                        <div v-for="id in selected_images" v-bind:key="id" class="selected-image-container">
                            <img :src="getSrc(id)" alt="selected">
                        </div>
                    </div>
                    <div class="form-element">
                        <button class="basic-btn-black" type="button" @click="triggerModal">Fermer</button>
                        <button class="basic-btn-green" type="submit">Sauvegarder</button>
                    </div>
                </form>
            </div>
        </div>
        <AdminImagePicker ref="image_picker" :allowed="3" v-on:selectedImages="setSelectedImages"/>
    </div>
</template>

<script>
import AdminPageTitle from '../../components/admin/AdminPageTitle'
import AdminProduct from '../../components/admin/AdminProduct'
import AdminImagePicker from '../../components/admin/AdminImagePicker'
import Select from '../../components/Select'

export default {
    components: {
        AdminPageTitle,
        AdminProduct,
        AdminImagePicker,
        Select
    },
    data () {
        return {
            'dropdown' : false,
            'filter' : '',
            'modal' : false,
            'category' : "",
            'name' : "",
            'slug': "",
            'description' : "",
            'selected_images': '',
            'page_title': "produits",
            'categories': '',
            'products': ''
        }
    },
    methods: {
        getSrc(id){
            return this.$store.getters.allImages.find(item => item.id == id).url
        },
        setSelectedImages(value){
            this.selected_images = value
        },
        triggerImagePicker(){
            this.$refs.image_picker.trigger()
        },
        triggerModal(){
            this.modal = !this.modal
        },
        triggerDropDown(){
            this.dropdown = !this.dropdown
        },
        formatCategory(name){
            return name.charAt(0).toUpperCase() + name.slice(1) + "s"
        },
        setSelected(category){
            this.filter = category
            this.fetchProducts()
            this.triggerDropDown()
        },
        setSelectedModal(value){
            // console.log(value)
            this.category = value
        },
        fetchProducts(){
            axios.get('/categories/' + this.filter.slug + '/products?include=products,products.images')
            .then(response => {
                this.products = response.data[0].products
            })
            .catch(error => {
                console.log(error)
            })
        },
        addProduct(){
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + this.$store.getters.token
            
            axios.post('/products', {
                'category_id': this.category.id,
                'name': this.name,
                'slug': this.slug,
                'description': this.description,
                'images' : this.selected_images
            })
            .then(response => {
                this.triggerModal()
                console.log("Product added successfully.")
            })
            .catch(error => {
                console.log(error)
            })
        }
    },
    mounted() {
        axios.get('/categories')
        .then(response => {
            this.categories = response.data
            this.filter = this.categories[0]
            this.category = this.categories[0]
            this.fetchProducts()
        })
        .catch(error => {
            console.log(error)
        })
    }
}
</script>

<style lang="scss" scoped>

    
    .products-page{
        display: flex;
        flex-direction: column;

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

        .filter-section{
            margin-bottom: 2em;
            display: flex;
            flex-direction: row;
            justify-content:flex-end;

            p{
                margin: auto 0;
            }
            
            .filter{
                width: 15em;
            }
        }

        #add-product-btn{
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

        #product-modal {
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
                        width: calc(100%/3);

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