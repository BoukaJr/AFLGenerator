<template>
    <div class="player-container">
        <div class="background">

            <div v-if="aflplayer" class="player-name">
                {{aflplayer.name}}
            </div>

            <div v-if="aflplayer" class="playerstats">

                <div v-if="aflplayer.position=='Forward'">
                    Goals kicked: {{aflplayer.goals}}
                </div>

                <div v-if="aflplayer.position=='Midfielder'">
                    Average Disposals: {{aflplayer.averageDisposals}}
                </div>

                <div v-if="aflplayer.position=='Defender'">
                    Average Marks: {{aflplayer.averageMarks}}
                </div>
                
            </div>
            
        </div>
    </div>
</template>

<script>
export default{
    props: ['aflplayer', 'playerposition', 'poscolor', 'color']
}
</script>

<style scoped>

.playerstats, .player-name{
    position: absolute;
    white-space: nowrap;
    color: white;
    transform: translate(-50%, -50%);
    line-height: 84px;
}

.player-container{
    justify-content: left;
    width: 175px;
    height: 110px;
    padding: 5px;
}

.background{
    margin: auto;
    width: 160px;
    height: 80px;
    border-radius: 22px;
    position: relative;
    background-color: #5772FF;
    overflow: hidden;
    text-overflow: clip; 
}

.player-name{
    left: 50%;
    top: 45%;
    font-size: 17px;
}

.playerstats{
    left: 50%;
    top: 70%;
    font-size: 11px;
}

@media only screen and (max-width: 375px){
    .player-container{
        width: 110px;
        height: 70px;
        padding: 1px;
    }
    .background{
        width: 100px;
        height: 60px;
    }
    .player-name{
        font-size: 10px;
    }
    .playerstats{
        font-size: 8px;
    }
}

</style>