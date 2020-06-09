<template>
    <div class="login-container">
        <div class="login-left">
            <h1>S'identifier</h1>
            <form action="" method="post">
                <input class="input-classic input-style" type="email" name="email" placeholder="Email">
                <div class="input-classic password-input">
                    <input class="input-style" type="text" name="password" placeholder="Mot de passe">
                    <router-link class="forgot-password" to="/">Mot de passe oublié?</router-link>
                </div>
                <div class="end-form">
                    <div class="remember-me">
                        <input type="checkbox" checked="checked" id="remember">
                        <label for="remember">Se souvenir de moi</label>
                    </div>
                    <button type="submit">Se connecter</button>
                </div>
            </form>
        </div>
        <div class="login-right">
            <h1>Nouveau client?</h1>
            <div class="guest-container-info">
                <h2>Gagner du temps maintenant</h2>
                <p>Pas besoin de compte pour effectuer des commandes.</p>
                <router-link to="/"><button>Continuer comme invité</button></router-link>
            </div>
            <div class="register-container-info">
                <h2>Gagner du temps plus tard</h2>
                <p>Créer un compte pour régler plus rapidement et avoir un accès rapide à ton historique de commandes.</p>
                <router-link to="/register"><button>Créer un compte</button></router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>

<style lang="scss" scoped>
    .login-container{
        display: flex;
        height: 40rem;
        padding: 5rem 0;
        width: 60%;
        margin: 0 auto;

        .login-left{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 50%;
            margin-right: 3rem;

            form{
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
                flex-grow: 1;

                .input-classic{
                    height: 3rem;
                    width: 100%;
                }

                .input-style{
                    border: 1px solid rgba(0,0,0,0.5);
                    border-radius: 5px;
                    padding: 5px 10px;

                    &:hover, &:focus{
                        border: 2px solid black;
                    }
                }

                .password-input{
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: flex-end;

                    input{
                        width: 100%;
                        height: 100%;
                    }
                }

                .forgot-password{
                    margin-top: 1rem;
                    color: black;
                }

                .end-form{
                    display: flex;
                    flex-direction: row;
                    flex-wrap: wrap;
                    width: 100%;
                    justify-content: space-between;

                    button{
                        order: 1;
                        width: 30%;
                    }

                    .remember-me{
                        order: 2;
                        align-self: center;
                        
                        input{
                            // border: 4px solid black;
                            background-color: red;
                        }
                        
                    }
                }
            }
            
        }

        .login-right{
            padding-left: 3rem;
            width: 50%;
            border-left: 1px solid gray;
            display: flex;
            flex-direction: column;
            justify-content: space-between;

            .guest-container-info{

            }

            .register-container-info{
                
            }

        }
    }

    button{
        height: 3rem;
        // width: 8rem;
        border: 2px solid black;
        background: none;
        color: black;
        padding: 5px 20px;
        border-radius: 5px;

        &:hover{
            background-color: black;
            color: white;
        }
    }
</style>