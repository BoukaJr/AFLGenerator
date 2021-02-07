<template>
    <div class= "application">

        <div class="heading">
            <div class="heading-text">
                Administrator Login
            </div>
        </div>

        <div class="form-div" v-on:click="rerollPlayers">
            <form>

                <div class="input">
                    <label for="username" class="form-text">Username</label>
                    <input type="text" class="username" name="username" placeholder="Username">
                    <label for="password" class="form-text">Password</label>
                    <input type="text" class="password" name="password" placeholder="Password">
                </div>

                <div class="button-div">
                    <div class="button-background">
                    </div>
                    <div class="button-background-white">
                    </div>
                    <div class="button-text">
                        Login
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</template>

<script>


</script>

<style scoped>
@font-face {
    font-family: 'six_capsregular';
    src: url('/fonts/Six Caps/adamina-regular-webfont.woff2') format('woff2'),
         url('/fonts/Six Caps/adamina-regular-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

.heading-text, .button-background, .button-background-white, .button-text{
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
    position: absolute;
}

.username, .password, .button-background{
    width: 200px;
    height: 40px;
}

.input{
    padding-top: 40px;
    padding-bottom: 40px;
}

.username, .password{
    height: 40px;
    border: 1px solid #ced4da;
}

.heading{
    position: relative;
    left: 50%;
    width: 450px;
    height: 40px;
    margin-left: -225px;
}
.form-text{
    font-size: 20px;
    margin-top: 20px;
    margin-bottom: 5px;
}

.heading-text{
    font-size: 34px;
    line-height: 84px;
    white-space: nowrap;
    color: #000000;
}

.button-background{
    height: 65px;
    background: #000000;
    border-radius: 22px;
}

.button-background-white{
    width: 197px;
    height: 62px;
    background: #FFFFFF;
    border-radius: 22px;
}

.button-div{
    position: relative;
    margin: auto;
    top: 70%;
    width: 170px;
    height: 65px;
    margin-top: 8px;
    color: #000000;
}

.form-div{
    width: 200px;
    position: relative;
    margin: auto;
    top: 70%;
    height: 300px;
    color: #000000;
}

.button-text{
    font-size: 22px;
    line-height: 84px;
    white-space: nowrap;
}

.button-div:hover{
    color: #5e5e5e;
}

</style>