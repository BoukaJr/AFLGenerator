<template>
    <div class="player-container">
        <div class="background">
            <div v-if="aflplayer" class="player">
                {{aflplayer.name}}
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

@font-face {
    font-family: 'six_capsregular';
    src: url('/fonts/Six Caps/sixcaps-regular-webfont.woff2') format('woff2'),
         url('/fonts/Six Caps/sixcaps-regular-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

.player-container{
    justify-content: left;
    width: 200px;
    height: 110px;
    padding: 5px;
}

.background{
    margin: auto;
    width: 170px;
    height: 84px;
    border-radius: 22px;
    position: relative;
    background-color: #5772FF;
    overflow: hidden;
    text-overflow: clip; 
}

.player{
    color: white;
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
    font-family: six_capsregular;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 84px;
    position: absolute;
    white-space: nowrap;
}

.position{
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
    font-family: six_capsregular;
    font-style: normal;
    font-weight: normal;
    font-size: 120px;
    position: absolute;
    white-space: nowrap;
}

</style>