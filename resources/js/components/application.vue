<template>
    <div>
        <div class="heading">
            <div class="heading-background">
            </div>
            <div class="heading-text">
                Quinn's AFL Team Generator
            </div>
        </div>
        <div class="players">
            <players :forwards="forwards" :midfielders="midfielders" :defenders="defenders" :positions="positions"/>
        </div>
        <div class="button-div" v-on:click="rerollPlayers">
            <div class="button-background">
            </div>
            <div class="button-text">
                Make me a new team!
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
        this.getForwards();
        this.getMidfielders();
        this.getDefenders();
    }
}
</script>

<style scoped>
@font-face {
    font-family: 'six_capsregular';
    src: url('/fonts/Six Caps/sixcaps-regular-webfont.woff2') format('woff2'),
         url('/fonts/Six Caps/sixcaps-regular-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

.heading{
    position: relative;
    margin: auto;
    top: 20px;
    left: 50%;
    width: 450px;
    height: 200px;
    margin-left: -225px;
}

.heading-background{
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
    position: absolute;
    width: 437px;
    height: 150px;
    background: #FF5757;
    border-radius: 22px;
}

.heading-text{
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
    font-family: six_capsregular;
    font-style: normal;
    font-weight: normal;
    font-size: 64px;
    line-height: 84px;
    position: absolute;
    white-space: nowrap;
}

.button-background{
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
    position: absolute;
    width: 437px;
    height: 150px;
    background: #FF5757;
    border-radius: 22px;
}

.button-div{
    position: relative;
    margin: auto;
    top: 20px;
    left: 50%;
    width: 450px;
    height: 200px;
    margin-left: -225px;
}

.button-text{
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
    font-family: six_capsregular;
    font-style: normal;
    font-weight: normal;
    font-size: 64px;
    line-height: 84px;
    position: absolute;
    white-space: nowrap;
}

.button-div:hover{
    color: white;
}
</style>