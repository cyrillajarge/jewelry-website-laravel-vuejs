<template>
    <div class="settings-page">
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
            "page_title": "réglages"
        }
    }
}
</script>

<style lang="scss" scoped>
    .settings-page{
        display: flex;
        flex-direction: column;
    }
</style>