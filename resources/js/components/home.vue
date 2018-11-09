<template>
    <div class="row outer">
        <div  >
        <div class="row " style="min-height:30vh;margin-bottom:10vh;padding-top:10vh">
            <h2 class="heading white-text center">
                Infrastructure Provisioning Training
            </h2>
            <h5 class="heading center teal-text">
                Powered by TechBongo
            </h5>
        </div>
        <div class="row door ">
            <div class="center col m4 s10 offset-m4 offset-s1">
                <div class="row">
                    <div class="col s12 m6 s10" style="margin-bottom:10px;">
                        <button class="btn btn-large yellow black-text" @click.prevent="showInstructions">
                            See the instructions
                        </button>
                    </div>
                     <div class="col s12 m6 s10">
                         <button class="btn btn-large green black-text" @click.prevent="showForm">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </div>
         </div>
    </div>
</template>

<script>
export default {
data(){
return{

}
},
methods:{
    showInstructions(){
        this.$emit('show-pdf');
    },
    showForm(){
        this.$emit('show-form');
        
    }
}
}
</script>

<style scoped>

.outer{
    position: fixed;
    top: 0px;
    height: 100vh;
    width: 100vw;
    margin-bottom: 0px!important;
    color: rgba(1, 3, 17, 0.774)
}
.door{
    min-height: 1em;
    
    margin-bottom: auto;
}

</style>
