<template>
    <div class="login-wrapper">
        <div class="login-container">
            <h1>Panneau d'administration</h1>
            <form action="#" @submit.prevent="login">
                <input type="email" name="email" placeholder="Email" v-model="username">
                <input type="password" name="password" placeholder="Mot de passe" v-model="password">
                <button type="submit">Se connecter</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "admin_login",
    data () {
        return {
            username: '',
            password: ''
        }
    },
    methods: {
        login(){
            this.$store.dispatch('retrieveToken', {
                username: this.username,
                password: this.password
            })
        }
    }
}
</script>

<style lang="scss" scoped>

    .login-wrapper{
        height: 100vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;

        .login-container{
            height: 30em;
            width: 35em;
            display: flex;
            flex-direction: column;

            h1{
                margin-top: 2em;
                text-align: center;
                width: 100%;
            }

            form{
                flex-grow: 1;
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
                align-items: center;

                input{
                    border: none;
                    border-bottom: 1px solid rgb(194, 194, 194);
                    padding: 1em 1em;
                    width: 80%;

                    &:hover, &:active{
                        border-color: black;
                    }
                }

                button{
                    text-transform: uppercase;
                    border: 0.5px solid black;
                    border-radius: 5px;
                    background: none;
                    text-decoration: none;
                    padding: 0.5em 1.5em;

                    &:hover{
                        color: white;
                        background-color: black;
                    }
                }
            }
        }
    }
</style>