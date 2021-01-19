<template>
    <div class="player-container">
        <div class="background" v-bind:style="{background:color}">
            <div class="position" v-bind:style="{color:poscolor}">
                {{playerposition}}
            </div>
            <div class="player">
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
    width: 400px;
    height: 130px;
    padding: 5px;
}

.background{
    margin: auto;
    width: 380px;
    height: 120px;
    border-radius: 22px;
    position: relative;
}

.player{
    color: white;
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
    font-family: six_capsregular;
    font-style: normal;
    font-weight: normal;
    font-size: 60px;
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