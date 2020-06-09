<template>
    <div class="admin-navbar">
        <div class="admin-navbar-left">
            <h1>Panneau d'administration</h1>
        </div>
        <div class="admin-navbar-right">
            <h1>Bienvenu, administrateur!</h1>
            <i class="fa fa-user-circle" aria-hidden="true"></i>
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>

<style lang="scss" scoped>

    h1, i{
        color: white;
        margin: 0;
    }

    h1{
        font-size: 1em;
        font-weight: 400;
    }

    i{
        font-size: 1.5em;
    }

    .admin-navbar{
        width: 100%;
        height: 3em;
        background-color: black;

        display: flex;
        justify-content: space-between;
        align-items: center;

        .admin-navbar-left{
            margin-left: 1em;
        }

        .admin-navbar-right{
            display: flex;
            align-items: center;

            i{
                font-size: 1.5em;
                margin: 0 1em;
            }
        }
    }
</style>