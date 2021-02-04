<template>
    <div>
        <!-- Container for the forward line -->
        <div class="container">
            <positionLogo id="position-logo-component"
                :fullLogo='"FORWARD"'
                :shortLogo='"F"'
            />
            <div v-for="n in 3">
                <player
                    :playerposition='"Forward"'
                    :aflplayer="forwards[(n-1)]"
                />
            </div>
            <positionLogo id="position-logo-component"
                :fullLogo='"FORWARD"'
                :shortLogo='"F"'
            />
        </div>
        <!-- Container for the half forward line -->
        <div class="container">
            <positionLogo id="position-logo-component"
                :fullLogo='"HALF FORWARD"'
                :shortLogo='"HF"'
            />
            <div v-for="n in 3">
                <player
                    :playerposition='"Half Forward"'
                    :aflplayer="forwards[(n+2)]"
                />
            </div>
            <positionLogo id="position-logo-component"
                :fullLogo='"HALF FORWARD"'
                :shortLogo='"HF"'
            />
        </div>
        <!-- Container for the centre line -->
        <div class="container">
            <positionLogo id="position-logo-component"
                :fullLogo='"CENTRE"'
                :shortLogo='"C"'
            />
            <div v-for="n in 3"> 
                <player
                    :playerposition='"Centre"'
                    :aflplayer="midfielders[(n)]"
                />
            </div>
            <positionLogo id="position-logo-component"
                :fullLogo='"CENTRE"'
                :shortLogo='"C"'
            />
        </div>
        <!-- Container for the half back line -->
        <div class="container">
            <positionLogo id="position-logo-component"
                :fullLogo='"HALF BACK"'
                :shortLogo='"HB"'
            />
            <div v-for="n in 3">
                <player
                    :playerposition='"Half Back"'
                    :aflplayer="defenders[(n-1)]"
                />
            </div>
            <positionLogo id="position-logo-component"
                :fullLogo='"HALF BACK"'
                :shortLogo='"HB"'
            />
        </div>
        <!-- Container for the back line -->
        <div class="container">
            <positionLogo id="position-logo-component"
                :fullLogo='"BACK"'
                :shortLogo='"B"'
            />
            <div v-for="n in 3">
                <player
                    :playerposition='"Back"'
                    :aflplayer="defenders[(n+2)]"
                />
            </div>
            <positionLogo id="position-logo-component"
                :fullLogo='"BACK"'
                :shortLogo='"B"'
            />
        </div>
        <!-- Container for the followers -->
        <div>
            <div class="container">
                <positionLogo id="position-logo-component"
                    :fullLogo='"FOLLOWERS"'
                    :shortLogo='"FOLL"'
                />
                <div v-for="n in 3"> 
                    <player
                        :playerposition='"Follower"'
                        :aflplayer="midfielders[(n+3)]"
                    />
                </div>
                <positionLogo id="position-logo-component"
                    :fullLogo='"FOLLOWERS"'
                    :shortLogo='"FOLL"'
                />
            </div>
        </div>
        <!-- Containers for the interchange bench -->
        <div>
            <div class="container">
                <positionLogo id="position-logo-component"
                    :fullLogo='"INTERCHANGE"'
                    :shortLogo='"I/C"'
                />
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
                <positionLogo id="position-logo-component"
                    :fullLogo='"INTERCHANGE"'
                    :shortLogo='"I/C"'
                />
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
import positionLogo from "./positionLogo.vue"

export default {
    props: ['forwards', 'midfielders', 'defenders'],
    components:{
        player,
        positionLogo
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

#position-logo-component{
    flex-grow: 1;
}

@media only screen and (max-width: 2160px){
    #position-logo{
        display: none;
    }
}

@media only screen and (max-width: 375px){
    .container{
        justify-content: center;
        display: flex;
        position: relative;
        margin: auto;
        width: 100%;
        height: 70px;
    }
}

</style>