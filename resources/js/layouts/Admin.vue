<template>
    <div class="admin">
        <AdminLogIn v-if="!loggedIn"/>
        <div v-if="loggedIn" class="logged-in">
            <div class="sidebar">
                <AdminSideBar/>
            </div>
            <div class="admin-main">
                <AdminNavBar />
                <div class="admin-content">
                    <slot/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import AdminSideBar from '../components/admin/AdminSideBar'
import AdminLogIn from '../components/admin/AdminLogIn'
import AdminNavBar from '../components/admin/AdminNavBar'

export default {
    components: {
        AdminLogIn,
        AdminNavBar,
        AdminSideBar
    },
    data () {
        return {
        }
    },
    computed: {
        loggedIn(){
            return this.$store.getters.loggedIn
        }
    }
}
</script>

<style lang="scss">
    .admin{
        height: 100vh;
        width: 100vw;
        background-color: white;

        .logged-in{
            display: flex;
            height: 100vh;

            .sidebar{
                flex: 0 0 20em;
                z-index: 10;
            }

            .admin-main{
                flex: 1 1 auto;
                overflow: auto;

                .admin-content{
                    margin: 0 2em;
                    margin-top: 2em;
                }
            }
        }
        
    
    }
</style>