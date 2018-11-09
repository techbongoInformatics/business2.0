<template>
   <div>
        <div class="row no-margin " id="landing" style="background-image: linear-gradient(rgba(1, 3, 17, 0.97),rgba(1, 3, 17, 0.97)), url('images/bg.jpg');">
        <div v-if="flag">
            <training-form v-on:hide-form="hideForm"></training-form>
        </div>
        <div v-else>
            <home v-on:show-form="showForm" v-on:show-pdf="showIns"></home>
        </div>
    </div>
   
   </div>
    
</template>

<script>

import footer from './footer.vue';
import LandingPage from './home.vue';
import TrainingForm from './forms/training.vue';
    export default {
        data(){
            return{
                flag:false,
            }
        },
        components:{
            'training-form' : TrainingForm,
            'home' : LandingPage,
            'footer' :footer,
        },
        mounted() {

            console.log('Component mounted.')
        },
        methods:{
            showForm(){
                this.flag=true;
            },
            showIns(){
                window.open('http://careers.techbongo.com/KGEC_proposal.pdf');
            },
            hideForm(){
                 this.flag=false;
            }
        }

    }
</script>
<style>
.no-margin{
margin-bottom: 0px!important;
}
#landing{
    
     background-size:contain;
     /* background-repeat: no-repeat; */
     /* background-position: center; */
    min-height: 100vh;
    width: 100vw;
    
    background-attachment:fixed;
}
</style>

