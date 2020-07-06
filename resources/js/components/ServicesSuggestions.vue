<template>
    <div class="services-suggestions">
        <h1>Nous proposons également d'autres services:</h1>
        <div class="suggestion-container">
            <router-link to="/services/transformation" class="suggestion-card">
                <img src="/img/transformation-bijoux.png" alt="Transoformation">
                <div class="card-text">
                    <h1>Transformation</h1>
                    <button class="base-btn-light">En savoir plus</button>
                </div>
            </router-link>
            <router-link to="/services/reparation" class="suggestion-card">
                <img src="/img/reparation-bijoux.jpg" alt="Réparation">
                <div class="card-text">
                    <h1>Réparation</h1>
                    <button class="base-btn-light">En savoir plus</button>
                </div>
            </router-link>
            <router-link to="/services/entretien" class="suggestion-card">
                <img src="/img/entretien.jpg" alt="Entretien">
                <div class="card-text">
                    <h1>Entretien</h1>
                    <button class="base-btn-light">En savoir plus</button>
                </div>
            </router-link>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>

<style lang="scss" scoped>
    .services-suggestions{
        margin-top: 5em;

        .suggestion-container{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            margin: 5em 0;

            .suggestion-card{
                width: 300px;
                height: 300px;
                position: relative;

                img{
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }

                .card-text{
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    z-index: 2;

                    h1{
                        font-size: 30px;
                        color: white;
                        position: relative;
                        margin-bottom: 1em;

                        &::after{
                            position: absolute;
                            bottom: -5px;
                            left: 0;
                            content: "";
                            height: 20px;
                            width: 100%;
                            background-color: grey;
                            z-index: -1;
                        }
                    }

                    button{
                        border: none;
                        background: none;
                    }
                }

                &::after{
                    content: "";
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(90deg, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 75%, rgba(0,0,0,1) 100%);
                    transition: all 2s ease-in-out;
                    z-index: 1;
                }
            }
        }
    }
</style>