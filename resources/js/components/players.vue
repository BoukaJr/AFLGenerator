<template>
    <div>
        <!-- Container for the forward line -->
        <div class="container">
            <div v-for="n in 3">
                <player
                    :playerposition='"Forward"'
                    :aflplayer="forwards[(n-1)]"
                />
            </div>
        </div>
        <!-- Container for the half forward line -->
        <div class="container">
            <div v-for="n in 3">
                <player
                    :playerposition='"Half Forward"'
                    :aflplayer="forwards[(n+2)]"
                />
            </div>
        </div>
        <!-- Container for the centre line -->
        <div class="container">
            <div v-for="n in 3"> 
                <player
                    :playerposition='"Centre"'
                    :aflplayer="midfielders[(n)]"
                />
            </div>
        </div>
        <!-- Container for the half back line -->
        <div class="container">
            <div v-for="n in 3">
                <player
                    :playerposition='"Half Back"'
                    :aflplayer="defenders[(n-1)]"
                />
            </div>
        </div>
        <!-- Container for the back line -->
        <div class="container">
            <div v-for="n in 3">
                <player
                    :playerposition='"Back"'
                    :aflplayer="defenders[(n+2)]"
                />
            </div>
        </div>
        <!-- Container for the followers -->
        <div>
            <div class="container">
                <div v-for="n in 3"> 
                    <player
                        :playerposition='"Follower"'
                        :aflplayer="midfielders[(n+3)]"
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
                        :aflplayer="defenders[6]"
                    />
                </div>
                <div>
                    <player
                        :playerposition='"Interchange"'
                        :aflplayer="midfielders[6]"
                    />
                </div>
                <div>
                    <player
                        :playerposition='"Interchange"'
                        :aflplayer="forwards[6]"
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
    width: 100%;
    height: 94px;
}
</style>