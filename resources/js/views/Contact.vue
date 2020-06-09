<template>
    <div>
        <div class="contact-header">
        
        </div>
        <div class="contact-form">
            <h1>Pour tout renseignement, n'hésitez pas à nous contacter!</h1>
            <form action="">
                <div class="input-section">
                    <div class="form-element">
                        <input id="nom" type="text" placeholder="Nom">
                        <span class="underline"></span>
                    </div>
                    <div class="form-element">
                        <input id="prenom" type="text" placeholder="Prenom">
                        <span class="underline"></span>
                    </div>
                    <div class="form-element">
                        <input id="email" type="email" placeholder="Email">
                        <span class="underline"></span>
                    </div>
                    <div class="form-element">
                        <input id="tel" type="text" placeholder="Numéro de téléphone">
                        <span class="underline"></span>
                    </div>
                </div>
                <div class="form-textarea">
                    <textarea name="" id="" placeholder="Votre message"></textarea>
                    <span class="underline"></span>
                </div>
                <div class="attachments">
                    <input type="file" name="files" id="files" multiple>
                    <label for="files">Ajouter des fichiers</label>
                </div>
                <div>
                    <button>Envoyer</button>
                </div>
            </form>
        </div>
        <div class="contact-appointment-form">
            <form action="">

            </form>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>

<style lang="scss" scoped>
    @import '~@/_variables.scss';

    .contact-form{
        margin: 4em 0;
        min-height: 600px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        h1{
            text-align: center;
            color: white;
            width: 100%;
            font-size: calc(20px + (30 - 20) * ((100vw - 300px) / (1600 - 300)));
            margin-bottom: 2em;
        }

        form{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            width: 50%;
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
                        background-color: white;
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
                        color: white;

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

                .underline{
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    background-color: white;
                    height: 2px;
                    width: 100%;
                    // padding: 0 10px;
                    transform: scale(0, 1);
                }

                textarea{
                    width: 100%;
                    min-height: 15em;
                    height: 100%;
                    border: none;
                    resize: none;
                    border-bottom: 0.5px solid rgb(204, 204, 204);
                    padding: 1em;
                    background: none;
                    color: white;

                    &:focus+.underline{
                        transform: scale(1);
                        transition: all 0.2s linear;
                    }
                }
            }

            .attachments{
                margin-top: 2em;
                position: relative;

                label{
                    border-bottom: 1px solid white;
                    color: white;
                    padding-bottom: 1em;
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
        }
    }
</style>