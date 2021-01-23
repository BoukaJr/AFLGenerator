<template>
    <div>
        <div class="heading">
            <div class="heading-text">
                Quinn's AFL Team Generator
            </div>
        </div>
        <div class="players">
            <players :forwards="forwards" :midfielders="midfielders" :defenders="defenders"/>
        </div>
        <div class="button-div" v-on:click="rerollPlayers">
            <div class="button-background">
            </div>
            <div class="button-text">
                Create team
            </div>
        </div>
    </div>
</template>

<script>
import players from "./players"

export default {
    components:{
        players
    },
    data: function (){
        return{
            forwards:[],
            midfielders:[],
            defenders:[]
        } 
    },
    methods: {
        // Function to use on click
        rerollPlayers() {
            this.getForwards();
            this.getMidfielders();
            this.getDefenders();
        },
        // Method will return a list of random forward line players
        getForwards (){
            axios.get('api/players/randomForwards')
            .then( response => {
                this.forwards = response.data
            })
            .catch( error => {
                console.log('There has been an error loading the players');
            })
        },
        // Method will return a list of random midfielders
        getMidfielders (){
            axios.get('api/players/randomMidfielders')
            .then( response => {
                this.midfielders = response.data
            })
            .catch( error => {
                console.log('There has been an error loading the players');
            })
        },
        // Method will return a list of random back line players
        getDefenders (){
            axios.get('api/players/randomDefenders')
            .then( response => {
                this.defenders = response.data
            })
            .catch( error => {
                console.log('There has been an error loading the players');
            })
        }
    },
    // When the page is rendered generate a list of the players
    created() {

    }
}
</script>

<style scoped>
@font-face {
    font-family: 'six_capsregular';
    src: url('/fonts/Six Caps/adamina-regular-webfont.woff2') format('woff2'),
         url('/fonts/Six Caps/adamina-regular-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

.heading{
    position: relative;
    margin: auto;
    top: 20px;
    left: 50%;
    width: 450px;
    height: 65px;
    padding-bottom: 150px;
    margin-left: -225px;
}

.heading-text{
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
    font-family: six_capsregular;
    font-style: normal;
    font-weight: normal;
    font-size: 48px;
    line-height: 84px;
    position: absolute;
    white-space: nowrap;
    color: #5772FF;
}

.button-background{
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
    position: absolute;
    width: 155px;
    height: 65px;
    background: #5772FF;
    border-radius: 22px;
}

.button-div{
    position: relative;
    margin: auto;
    top: 70%;
    left: 80%;
    width: 155px;
    height: 65px;
    margin-left: -225px;
}

.button-text{
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
    font-family: six_capsregular;
    font-style: normal;
    font-weight: normal;
    font-size: 22px;
    line-height: 84px;
    position: absolute;
    white-space: nowrap;
}

.button-div:hover{
    color: white;
}
</style>