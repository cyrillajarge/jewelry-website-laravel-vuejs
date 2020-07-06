import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)
axios.defaults.baseURL = 'http://wood-website.test/api'

export const store = new Vuex.Store({
    state: {
        token: sessionStorage.getItem('access_token') || null,
        events: [],
        pages: [],
        images: [],
        categories: []
    },
    getters: {
        loggedIn : (state) => {
            return state.token !== null
        },
        token : (state) => {
            return state.token
        },
        allEvents : (state) => {
            return state.events
        },
        allPages : (state) => {
            return state.pages
        },
        subPages : (state) => (parent) => {
            return state.pages.filter(item => item.parent_id == parent)
        },
        allParentPages : (state) => {
            return state.pages.filter(item => item.parent_id == null)
        },
        allImages : (state) => {
            return state.images
        },
        allCategories : (state) => {
            return state.categories
        },
        firstCategory: (state) => {
            return state.categories[0]
        }
    },
    mutations: {
        retrieveToken(state, token){
            state.token = token
        },
        destroyToken(state){
            state.token = null
        },
        addEvent(state, event){
            state.events.push({
                'name': event.name,
                'description': event.description,
                'date': event.date,
                'begin_time': event.begin_time,
                'end_time': event.end_time,
                'location': event.location
            })
        },
        updateEvent(state, event) {
            const index = state.events.findIndex(item => item.id == event.id)
            state.events.splice(index, 1, {
                'name': event.name,
                'description': event.description,
                'date': event.date,
                'begin_time': event.begin_time,
                'end_time': event.end_time,
                'location': event.location
            })
        },
        deleteEvent(state, id){
            const index = state.events.findIndex(item => item.id == id)
            state.events.splice(index, 1)
        },
        retrieveEvents(state, events) {
            state.events = events
        },
        retrievePages(state, pages){
            state.pages = pages
        },
        retrieveImages(state, images){
            state.images = images
        },
        deleteImage(state, id){
            const index = state.images.findIndex(item => item.id == id)
            state.images.splice(index, 1)
        },
        retrieveCategories(state, categories){
            state.categories = categories
        }
    },
    actions: {
        destroyToken(context) {
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + context.state.token

            if(context.getters.loggedIn){
                axios.post('/logout')
                .then(response => {
                    sessionStorage.removeItem('access_token')
                    context.commit('destroyToken')
                })
                .catch(error => {
                    sessionStorage.removeItem('access_token')
                    context.commit('destroyToken')
                })
            }
        },
        retrieveToken(context, credentials){
            axios.post('/login',{
                'username': credentials.username,
                'password': credentials.password
            })
            .then(response => {
                const token = response.data.access_token
                
                sessionStorage.setItem('access_token', token)
                context.commit('retrieveToken',token)
            })
              .catch(error => {
                console.log(error)
            })
        },
        addEvent(context, event){
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + context.state.token

            axios.post('/events', {
                'name': event.name,
                'description': event.description,
                'date': event.date,
                'begin_time': event.begin_time,
                'end_time': event.end_time,
                'location': event.location
            })
            .then(response => {
                context.commit('addEvent', response.data)
            })
            .catch(error => {
                console.log(error)
            })
        },
        updateEvent(context, event) {
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + context.state.token
            
            axios.patch('/events/' + event.id, {
                'name': event.name,
                'description': event.description,
                'date': event.date,
                'begin_time': event.begin_time,
                'end_time': event.end_time,
                'location': event.location
            })
            .then(response => {
                context.commit('updateEvent', response.data)
            })
            .catch(error => {
                console.log(error)
            })
        },
        deleteEvent(context, id){
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + context.state.token

            axios.delete('/events/' + id)
            .then(response => {
                context.commit('deleteEvent', id)
            })
            .catch(error => {
                console.log(error)
            })
        },
        retrieveEvents(context) {
            axios.get('/events')
            .then(response => {
                context.commit('retrieveEvents', response.data)
            })
              .catch(error => {
                console.log(error)
            })
        },
        retrievePages(context){
            axios.get('/pages')
            .then(response =>{
                context.commit('retrievePages', response.data)
            })
            .catch(error => {
                console.log(error)
            })
        },
        retrieveImages(context){
            axios.get('/images')
            .then(response => {
                context.commit('retrieveImages', response.data)
            })
            .catch(error => {
                console.log(error)
            })
        },
        deleteImage(context, id){
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + context.state.token

            axios.delete('/images/' + id)
            .then(response => {
                context.commit('deleteImage', id)
            })
            .catch(error => {
                console.log(error)
            })
        },
        retrieveCategories(context){
            axios.get('/categories')
            .then(response => {
                context.commit('retrieveCategories', response.data)
            })
            .catch(error => {
                console.log(error)
            })
        }
    }
})