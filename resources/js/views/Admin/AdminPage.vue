<template>
    <div class="pages-page">
        <AdminPageTitle v-bind:title="pageTitle"/>
        <div v-if="subPages.length != 0" class="subpages-links">
            <router-link v-for="subpage in subPages" v-bind:key="subpage.id" :to="{ name: 'admin-page', params: { id: subpage.id, slug: subpage.slug}}">{{subpage.name}}</router-link>
        </div>
        <div v-else class="page-content">
            <AdminPageElement v-for="element in elements" v-bind:key="element.id" v-bind:element="element"/>
        </div>
    </div>
</template>

<script>
import AdminPageTitle from '../../components/admin/AdminPageTitle'
import AdminPageElement from '../../components/admin/AdminPageElement'

export default {
    components:{
        AdminPageTitle,
        AdminPageElement
    },
    data () {
        return {
            elements: []
        }
    },
    watch:{
        '$route' : 'fetchElements'
    },
    methods:{
        fetchElements(){
            axios.get('/pelements/page/' + this.$route.params.id)
            .then(response => {
                this.elements = response.data 
            })
            .catch(error => {
                console.log(error)
            })
        }
    },
    computed: {
        subPages(){
            return this.$store.getters.subPages(this.$route.params.id)
        },
        pageTitle(){
            return this.$route.params.slug
        }
    },
    created() {
        this.fetchElements()
    }
}
</script>

<style lang="scss" scoped>
    .pages-page{
        display: flex;
        flex-direction: column;

        .subpages-links{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            
            a{
                display: flex;
                justify-content: center;
                align-items: center;
                height: 10em;
                width: 15em;
                margin: 1em 0;

                border: 2px solid black;
                border-radius: 20px;
                text-decoration: none;
                color: black;

                &:hover{
                    background-color: black;
                    color: white;
                }
            }
        }

        .page-content{
            margin: 2em 0;
            display: flex;
            flex-direction: column;
        }
    }
</style>