<template>
    <div class="admin-sidebar">
        <router-link id="logo-link" to="/admin">VEEF.C</router-link>
        <div class="admin-sidebar-content">
            <div class="admin-navigation">
                <button class="dropdown-button" @click="showPages">PAGES
                    <i class="fa fa-chevron-down icon" v-if="!pages_submenu" aria-hidden="true"></i>
                    <i class="fa fa-chevron-up icon" v-if="pages_submenu" aria-hidden="true"></i>
                </button>
                <div class="admin-sidebar-sub" v-if="pages_submenu">
                    <router-link v-for="page in allParentPages" v-bind:key="page.id" class="sidebar-link" :to="{ name: 'admin-page', params: { slug: page.slug, id: page.id }}">{{page.name}}</router-link>
                </div>
                <router-link class="sidebar-link" to="/admin/events">EVENEMENTS</router-link>
                <router-link class="sidebar-link" to="/admin/settings">REGLAGES</router-link>
                <router-link class="sidebar-link" to="/admin/images">IMAGES</router-link>
            </div>
            <button id="logout-btn" @click="logout">Déconnexion</button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return{
            pages_submenu: false
        }
    },
    methods: {
        logout(){
            this.$store.dispatch('destroyToken')
        },
        showPages(){
            this.pages_submenu = !this.pages_submenu
        }
    },
    computed: {
        allParentPages(){
            return this.$store.getters.allParentPages
        }
    }
}
</script>

<style lang="scss" scoped>
    .admin-sidebar{
        height: 100%;
        width: 100%;
        background-color: black;
        display: flex;
        flex-direction: column;
        align-items: center;

        #logo-link{
            color: white;
            text-decoration: none;
            font-size: 3em;
            margin: none;
            
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .admin-sidebar-content{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: 100%;

            .admin-navigation{
                width: 100%;

                .admin-sidebar-sub{
                    border-top: 1px solid white;
                    border-bottom: 1px solid white;
                }

                .sidebar-link{
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .dropdown-button{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    position: relative;

                    background: none;
                    border: none;
                    padding: 0;
                    outline: none;
                    
                    .icon{
                        position: absolute;
                        right: 10px;
                    }
                }

                .sidebar-link, .dropdown-button{
                    text-decoration: none;
                    height: 3em;
                    width: 100%;
                    color: white;
                    text-transform: uppercase;

                    cursor: pointer;

                    &:hover{
                        background-color: white;
                        color: black;
                    }
                }

            }

            #logout-btn{
                justify-self: flex-end;
                width: 90%;

                border: none;
                border-radius: 5px;
                background: none;
                padding: 0.5em 1em;
                margin-bottom: 1em;

                border: 2px solid white;
                color: white;

                &:hover{
                    background-color: white;
                    color: black;
                }
            }
        }
    }
</style>