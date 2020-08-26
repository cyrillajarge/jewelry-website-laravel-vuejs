<template>
    <div>
        <div class="contact-header">
            <!-- <h1>Pour tout renseignement, n'hésitez pas à nous contacter!</h1> -->
        </div>
        <div class="contact-form">
            <div class="contact-left">
                <h1 class="left-title">À propos</h1>
                <div class="profile-image-container">
                    <img src="http://placeimg.com/1000/1000/any" alt="Image">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla odio elit, pellentesque sed lectus in, lacinia pellentesque sapien. Duis libero nunc, interdum in venenatis accumsan, eleifend a odio. Ut fermentum porttitor arcu, eu congue nisi elementum a.</p>
                <div class="info-element">
                    <i class="fa fa-address-card" aria-hidden="true"></i>
                    <p>22 rue des Halles - 67000 Strasbourg</p>
                </div>
                <div class="info-element">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <p>c.veef@gmail.com</p>
                </div>
                <div class="info-element">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <p>+3365245956575</p>
                </div>
                <div class="social">
                    <h2 class="social-title">Suivez nous sur nos réseaux sociaux.</h2>
                    <div class="social-links">
                        <a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="contact-right">
                <h1 class="right-title">Envoyez-nous un message!</h1>
                <form @submit.prevent="submit">
                    <div class="input-section">
                        <div class="form-element">
                            <input id="nom" type="text" placeholder="Nom" v-model="fields.lastname">
                            <div v-if="errors && errors.lastname" class="text-danger">{{ errors.lastname[0] }}</div>
                            <span class="underline"></span>
                        </div>
                        <div class="form-element">
                            <input id="prenom" type="text" placeholder="Prenom" v-model="fields.firstname">
                            <span class="underline"></span>
                            <div v-if="errors && errors.firstname" class="text-danger">{{ errors.firstname[0] }}</div>
                        </div>
                        <div class="form-element">
                            <input id="email" type="email" placeholder="Email" v-model="fields.email">
                            <span class="underline"></span>
                            <div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
                        </div>
                        <div class="form-element">
                            <input id="tel" type="text" placeholder="Numéro de téléphone" v-model="fields.phone">
                            <span class="underline"></span>
                            <div v-if="errors && errors.phone" class="text-danger">{{ errors.phone[0] }}</div>
                        </div>
                    </div>
                    <div class="form-textarea">
                        <textarea name="" id="" placeholder="Votre message" v-model="fields.message"></textarea>
                        <span class="underline"></span>
                        <div v-if="errors && errors.message" class="text-danger">{{ errors.message[0] }}</div>
                    </div>
                    <div class="attachments">
                        <input type="file" name="files" id="files" @change="handleFileChange($event)">
                        <label for="files">Ajouter une pièce jointe <strong>(jpeg , png ou pdf)</strong></label>
                        <p v-if="this.filename">{{this.filename}}</p>
                        <div v-if="errors && errors.file" class="text-danger">{{ errors.file[0] }}</div>
                    </div>
                    <div class="send-btn-container">
                        <button class="base-btn-dark" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="contact-appointment-form">
            <form action="">

            </form>
        </div>
    </div>
</template>

<script>
export default {
    data () {
        return{
            fields:{},
            filename: null,
            errors:{}
        }
    },
    methods:{
        handleFileChange(event){
            console.log("handleFileChange ", event.target.files)
            let file = event.target.files[0]
            this.filename = file.name
            this.fields.file = file
        },
        submit(){

            let formData = new FormData();
            formData.append('firstname', this.fields.firstname);
            formData.append('lastname', this.fields.lastname);
            formData.append('email', this.fields.email);
            formData.append('phone', this.fields.phone);
            formData.append('message', this.fields.message);
            if(this.fields.file) formData.append('file', this.fields.file);

            this.errors = {}
            axios.post('/submit', formData).then(response => {
                alert('Message sent!');
            }).catch(error => {
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors || {};
                }
            });
        }
    }
}
</script>

<style lang="scss" scoped>
    @import '~@/_variables.scss';

    .contact-header{
        margin: 5em 0;

        h1{
            text-align: center;
        }
    }

    .contact-form{
        margin: 4em 0;
        height: 800px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;

        .contact-left{
            width: 30%;
            padding: 0 2em;
            height: 100%;
            background-color: black;
            display: flex;
            flex-direction: column;

            .left-title{
                text-align: center;
                margin: 1em 0;
                color: white;
            }


            .profile-image-container{
                align-self: center;
                width: 200px;
                height: 200px;
                border-radius: 150px;
                overflow: hidden;
                
                img{
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }
            }

            p{
                margin-top: 1em;
                margin-bottom: 3em;
                text-align: center;
                color: white;
            }

            .info-element{
                display: flex;
                align-items: center;
                margin: 0.2em 0;

                i{
                    color: white;
                }

                p{
                    color: white;
                    margin: 0;
                    margin-left: 1em;
                }
            }

            .social{
                margin-top: auto;
                margin-bottom: 1em;
                display: flex;
                flex-wrap: wrap;

                .social-title{
                    width: 100%;
                    margin: 1em 0;
                    text-align: center;
                    font-size: 18px;
                    color: white;
                }

                .social-links{
                    width: 100%;
                    display: flex;
                    flex-direction: row;
                    justify-content: space-around;

                    i{
                        color: white;
                    }
                }
            }
        }

        .contact-right{
            width: 70%;
            height: 100%;
            background-color: white;
            padding: 0 4em;
            display: flex;
            flex-direction: column;

            .right-title{
                color: black;
                margin: 1em 0;
                text-align: center;
            }

            form{
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                width: 100%;
                flex-grow: 1;

                .input-section{
                    width: 100%;
                    display: flex;
                    flex-direction: row;
                    flex-wrap: wrap;
                    height: 15em;
                    align-items: center;
                    justify-content: center;

                    .form-element{
                        position: relative;
                        width: 50%;
                        height: 4em;
                        padding: 0 20px;

                        .underline{
                            position: absolute;
                            bottom: 0;
                            left: 20px;
                            background-color: black;
                            height: 2px;
                            width: calc(100% - 40px);
                            padding: 0 10px;
                            transform: scale(0, 1);
                        }

                        input{
                            width: 100%;
                            height: 100%;
                            border: none;
                            border-bottom: 0.5px solid rgb(204, 204, 204);
                            background: none;
                            color: black;

                            &:focus+.underline{
                                transform: scale(1);
                                transition: all 0.2s linear;
                            }
                        }
                    }
                }

                .form-textarea{
                    width: 100%;
                    position: relative;
                    padding: 0 20px;

                    .underline{
                        position: absolute;
                        bottom: 0;
                        left: 20px;
                        background-color: black;
                        height: 2px;
                        width: calc(100% - 40px);
                        transform: scale(0, 1);
                    }

                    textarea{
                        width: 100%;
                        min-height: 15em;
                        height: 100%;
                        border: none;
                        resize: none;
                        border-bottom: 0.5px solid rgb(204, 204, 204);
                        background: none;
                        color: black;

                        &:focus+.underline{
                            transform: scale(1);
                            transition: all 0.2s linear;
                        }
                    }
                }

                .attachments{
                    width: 100%;
                    margin-top: 2em;
                    position: relative;

                    label{
                        color: black;
                        cursor: pointer;
                    }

                    input{
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        opacity: 0;
                        cursor: pointer;
                    }
                }

                .send-btn-container{
                    width: 100%;
                    text-align: end;
                    margin-top: auto;
                    margin-bottom: 2em;

                    button{
                        font-size: 16px;
                        background: none;
                        border: none;
                    }
                }
            }
        }
    }
</style>