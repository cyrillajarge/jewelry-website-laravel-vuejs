<template>
    <div class="select">
        <button type="button" @click="triggerSelect()">
            {{capitalize(selected.name)}}
            <i class="fa fa-chevron-down select-icon" v-if="!visible" aria-hidden="true"></i>
            <i class="fa fa-chevron-up select-icon" v-if="visible" aria-hidden="true"></i>
        </button>
        <ul v-if="visible" class="items-container">
            <li class="select-item" v-for="element in elements" v-bind:key="element.id" @click="selectElement(element)">{{capitalize(element.name)}}</li>
        </ul>
    </div>
</template>

<script>
export default {
    props: ['elements','initial'],
    data () {
        return{
            'visible': false,
            'selected': this.initial
        }
    },
    methods: {
        triggerSelect(){
            this.visible = !this.visible
        },
        selectElement(element){
            this.selected = element
            this.triggerSelect()
            this.$emit('selectedElement', this.selected)
        },
        capitalize(name){
            return name.charAt(0).toUpperCase() + name.slice(1)
        }
    }
}
</script>

<style lang="scss" scoped>
    ul{
        list-style: none;
    }

    .select{
        position: relative;

        button{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 5px 10px;
            width: 100%;
            border: none;
            background: none;
            border-bottom: 1px solid rgb(184, 184, 184);

            &:hover, &:focus{
                border-bottom: 1px solid black;
            }

            .select-icon{
                margin: auto 0;
            }
        }

        .items-container{
            position: absolute;
            display: flex;
            flex-direction: column;
            padding: 0;

            background-color: white;
            border-bottom: 1px solid black;
            border-left: 1px solid black;
            border-right: 1px solid black;
            // border-bottom-left-radius: 5px;
            // border-bottom-right-radius: 5px;
            width: 100%;
            z-index: 50;
            
            .select-item{
                width: 100%;
                text-align: center;
                text-transform: capitalize;
                margin: 0;
                cursor: pointer;

                &:hover{
                    background-color: black;
                    color: white;
                }
            }
        }
    }




</style>