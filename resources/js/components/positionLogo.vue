<template>
    <div>

        <div id="position-logo-full">
            {{fullLogo}}
        </div>

        <div id="position-logo-short">
            {{shortLogo}}
        </div>
        
    </div>
</template>

<script>
export default {
    props: ['fullLogo', 'shortLogo']
}
</script>

<style scoped>

#position-logo-full, #position-logo-short{
    font-size: 24px;
    z-index: -1;
    color: #44CCCC;
    opacity: 35%;
    top: 25%;
    position: relative;
    flex-grow: 1;
    text-align: center;
}

#position-logo-short{
    display: none;
}

@media only screen and (max-width: 1650px){
    #position-logo-full{
        display: none;
    }
    #position-logo-short{
        display: block;
    }
}

@media only screen and (max-width: 775px){
    #position-logo-full{
        display: none;
    }
    #position-logo-short{
        display: none;
    }
}

</style>