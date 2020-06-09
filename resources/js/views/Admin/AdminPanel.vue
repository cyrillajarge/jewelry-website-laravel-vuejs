<template>
    <div class="homepanel-page">
        <AdminPageTitle v-bind:title="page_title" />
    </div>
</template>

<script>
import AdminPageTitle from '../../components/admin/AdminPageTitle'

export default {
    components: {
        AdminPageTitle
    },
    data () {
        return {
            "page_title": "panneau d'accueil"
        }
    }
}
</script>

<style lang="scss" scoped>
    .homepanel-page{
        display: flex;
        flex-direction: column;
    }
</style>