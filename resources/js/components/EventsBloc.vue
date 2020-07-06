<template>
    <div class="events-container">
        <div class="event" v-for="(event,i) in allEvents" v-bind:key="i">
            <div id="date">
                <p id="day">{{getDay(event.date)}}</p>
                <p id="month">{{getMonth(event.date)}}</p>
            </div>
            <div id="info">    
                <h1>{{event.name}}</h1>
                <p>{{event.description}}</p>
            </div>
            <div id="hourlocation">
                <p>De <span>{{pasrseTime(event.begin_time)}}</span> à <span>{{pasrseTime(event.end_time)}}</span></p>
                <p>{{event.location}}</p>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {

        }
    },
    methods:{
        getMonth: function(data){
            var elements = data.split('-')
            switch(elements[1]){
                case '01': return "Jan"
                case '02': return "Fev"
                case '03': return "Mar"
                case '04': return "Avr"
                case '05': return "Mai"
                case '06': return "Juin"
                case '07': return "Juil"
                case '08': return "Aout"
                case '09': return "Sep"
                case '10': return "Oct"
                case '11': return "Nov"
                case '12': return "Dec"
                default: return "Err" 
            }
        },
        getDay: function(data){
            var elements = data.split('-')
            return elements[2]
        },
        pasrseTime: function(data){
            return data.substring(0,5)
        }
    },
    computed: {
        allEvents() {
           return this.$store.getters.allEvents
        }
    }
}
</script>

<style lang="scss" scoped>
    .events-container{
        margin: auto 2rem;
        display: flex;
        flex-direction: column;


        .event{
            position: relative;
            display: flex;
            // border-left: 2px solid black;
            align-items: center;
            width: 100%;
            margin: 1rem 0;
            transition: transform 0.2s ease-in-out;
            z-index: 1;

            &::before{
                content: "";
                position: absolute;
                top: 50%;
                left: -90px;
                height: 20px;
                background: black;
                transform: translateY(-50%) rotateZ(-45deg);
                width: 10%;
                z-index: -1;
                transition: transform 0.25s ease-out;
            }

            &::after{
                content: "";
                position: absolute;
                top: 50%;
                left: -90px;
                height: 20px;
                background: black;
                transform: translateY(-50%) rotateZ(45deg);
                width: 10%;
                z-index: -1;
                transition: transform 0.25s ease-out;
            }

            &:hover{
                &::before{
                   transform: translateY(-50%) rotateZ(-90deg);
                   transition: transform 0.25s ease-out;
                }

                &::after{
                    transform: translateY(-50%);
                    transition: transform 0.25s ease-out;
                }
            }

            // &:hover{
            //     transform: translateX(30px);
            //     transition: transform 0.2s ease-in-out;
            // }

            #date{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100%;
                width: 80px;
                text-align: center;

                p{
                    font-size: calc(10px + (20 - 10) * ((100vw - 300px) / (1600 - 300)));
                    margin: 0;
                    color: black;
                }

                #day{
                    font-weight: 800;
                    font-size: 40px;
                }

                #month{
                    transform: translateY(-15px);
                }
            }

            #info{
                display: flex;
                flex-direction: column;
                margin-left: 3vw;
                flex-grow: 1;

                h1, p{
                    color: black;
                }

                h1{
                    font-weight: 800;
                    font-size: calc(15px + (24 - 15) * ((100vw - 300px) / (1600 - 300)));
                }

                p{
                    font-size: calc(12px + (14 - 12) * ((100vw - 300px) / (1600 - 300)));
                }
            }

            #hourlocation{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                color: black;

                p{
                    margin: 0;
                }

                span{
                    font-weight: 800;
                }
            }
        }
    }
</style>