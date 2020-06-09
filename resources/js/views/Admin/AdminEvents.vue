<template>
    <div class="events-page">
        <AdminPageTitle v-bind:title="page_title"/>
        <div class="events-container">
            <AdminEventCard v-for="event in allEvents" v-bind:key="event.id" v-bind:event="event"/>
        </div>
        <button id="new-event-btn" class="basic-btn-black" @click="triggerModal">Ajouter un évènement</button>
        <div v-if="modal" id="event-modal">
            <div class="modal-container">
                <h1>Ajouter un évènement</h1>
                <form action="#" @submit.prevent="addEvent">
                    <div class="form-element">
                        <label for="titre">Titre:</label>
                        <input name="titre" type="text" placeholder="Titre" v-model="name">
                    </div>
                    <div class="form-element">
                        <label for="description">Description:</label>
                        <input name="description" type="text" placeholder="Description" v-model="description">
                    </div>
                    <div class="form-element">
                        <label for="date">Date:</label>
                        <input name="date" type="date" v-model="date">
                    </div>
                    <div class="form-element">
                        <label for="begin_time">Heure de début:</label>
                        <input name="begin_time" type="time" v-model="begin_time">
                    </div>
                    <div class="form-element">
                        <label for="end_time">Heure de fin:</label>
                        <input name="end_time" type="time" v-model="end_time">
                    </div>
                    <div class="form-element">
                        <label for="lieu">Lieu:</label>
                        <input name="lieu" type="text" placeholder="Lieu" v-model="location">
                    </div>
                    <div class="form-element">
                        <button class="basic-btn-black" @click="triggerModal">Fermer</button>
                        <button class="basic-btn-green" type="submit">Sauvegarder</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import AdminPageTitle from '../../components/admin/AdminPageTitle'
import AdminEventCard from '../../components/admin/AdminEventCard'

export default {
    components: {
        AdminEventCard,
        AdminPageTitle
    },
    data () {
        return{
            'page_title': 'évenements',
            'modal': false,
            'name': '',
            'description': '',
            'date': '',
            'begin_time': '',
            'end_time': '',
            'location': ''
        }
    },
    methods:{
        triggerModal(){
            this.modal = !this.modal
        },
        addEvent(){
            this.$store.dispatch('addEvent',{
                'name': this.name,
                'description': this.description,
                'date': this.date,
                'begin_time': this.begin_time,
                'end_time': this.end_time,
                'location': this.location
            })
            this.triggerModal()
        }
    },
    computed: {
        allEvents(){
            return this.$store.getters.allEvents
        }
    }
}
</script>

<style lang="scss" scoped>

    .basic-btn-black{
        border: none;
        border-radius: 5px;
        background: none;
        padding: 0.5em 1em;
        outline: none;

        border: 2px solid black;
        color: black;
        
        &:hover{
            background-color: black;
            color: white;
        }
    }

    .basic-btn-red{
        border: none;
        border-radius: 5px;
        background: none;
        padding: 0.5em 1em;
        outline: none;

        border: 2px solid red;
        color: red;
        
        &:hover{
            background-color: red;
            color: white;
        }
    }

    .basic-btn-green{
        border: none;
        border-radius: 5px;
        background: none;
        padding: 0.5em 1em;
        outline: none;

        border: 2px solid green;
        color: green;
        
        &:hover{
            background-color: green;
            color: white;
        }
    }

    #event-modal {
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed; 
        z-index: 55;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.4);

        .modal-container{
            background-color: white;
            width: 40em;

            h1{
                text-align: center;
                margin: 1em 0;
            }

            form{
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                align-items: center;
                margin-bottom: 1em;

                .form-element{
                    display: flex;
                    justify-content: space-between;
                    width: 80%;
                    margin: 1em 0;
                    
                    label{
                        width: 30%;
                    }

                    input{
                        width: 70%;
                        border: none;
                        border-bottom: 1px solid rgb(184, 184, 184);

                        &:hover, &:focus{
                            border-bottom: 1px solid black;
                        }
                    }
                }
            }
        }
    }


    .events-page{
        display: flex;
        flex-direction: column;

        .events-container{
            width: 100%;
            margin: 2em 0;
        }

        #new-event-btn{
            align-self: flex-end;
        }
    }
</style>