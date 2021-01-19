<template>
    <div>
        <!-- Container for the forward line -->
        <div class="container">
            <div v-for="n in 3">
                <player
                    :playerposition='"Forward"'
                    :poscolor='(n+1) % 2 ? "#CC4444" : "#C70000"'
                    :aflplayer="forwards[(n-1)]"
                    :color='(n+1) % 2 ? "#FF5757" : "#9A0000"'
                />
            </div>
        </div>
        <!-- Container for the half forward line -->
        <div class="container">
            <div v-for="n in 3">
                <player
                    :playerposition='"Half Forward"'
                    :poscolor='(n) % 2 ? "#CC4444" : "#C70000"'
                    :aflplayer="forwards[(n+2)]"
                    :color='(n) % 2 ? "#FF5757" : "#9A0000"'
                />
            </div>
        </div>
        <!-- Container for the centre line -->
        <div class="container">
            <div v-for="n in 3"> 
                <player
                    :playerposition='"Centre"'
                    :poscolor='(n+1) % 2 ? "#CC4444" : "#C70000"'
                    :aflplayer="midfielders[(n)]"
                    :color='(n+1) % 2 ? "#FF5757" : "#9A0000"'
                />
            </div>
        </div>
        <!-- Container for the half back line -->
        <div class="container">
            <div v-for="n in 3">
                <player
                    :playerposition='"Half Back"'
                    :poscolor='(n) % 2 ? "#CC4444" : "#C70000"'
                    :aflplayer="defenders[(n-1)]"
                    :color='(n) % 2 ? "#FF5757" : "#9A0000"'
                />
            </div>
        </div>
        <!-- Container for the back line -->
        <div class="container">
            <div v-for="n in 3">
                <player
                    :playerposition='"Back"'
                    :poscolor='(n+1) % 2 ? "#CC4444" : "#C70000"'
                    :aflplayer="defenders[(n+2)]"
                    :color='(n+1) % 2 ? "#FF5757" : "#9A0000"'
                />
            </div>
        </div>
        <!-- Container for the followers -->
        <div>
            <div class="container">
                <div v-for="n in 3"> 
                    <player
                        :playerposition='"Follower"'
                        :poscolor='(n) % 2 ? "#CC4444" : "#C70000"'
                        :aflplayer="midfielders[(n+3)]"
                        :color='(n) % 2 ? "#FF5757" : "#9A0000"'
                    />
                </div>
            </div>
        </div>
        <!-- Containers for the interchange bench -->
        <div>
            <div class="container">
                <div>
                    <player
                        :playerposition='"Interchange"'
                        :poscolor='"#C70000"'
                        :aflplayer="defenders[6]"
                        :color='"#9A0000"'
                    />
                </div>
                <div>
                    <player
                        :playerposition='"Interchange"'
                        :aflplayer="midfielders[6]"
                        :poscolor='"#CC4444"'
                        :color='"#FF5757"'
                    />
                </div>
                <div>
                    <player
                        :playerposition='"Interchange"'
                        :aflplayer="forwards[6]"
                        :poscolor='"#C70000"'
                        :color='"#9A0000"'
                    />
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div>
                    <player
                        :playerposition='"Interchange"'
                        :aflplayer="midfielders[7]"
                        :poscolor='"#C70000"'
                        :color='"#9A0000"'
                    />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import player from "./player"

export default {
    props: ['forwards', 'midfielders', 'defenders'],
    components:{
        player
    }
}
</script>

<style scoped>
.container{
    justify-content: center;
    display: flex;
    position: relative;
    margin: auto;
    top: 20px;
    width: 100%;
    height: 130px;
}
</style>