<template>
    <div class="row no-margin">
        <div v-if="flag">
            <training-form></training-form>
        </div>
        <div v-else>
            <home v-on:show-form="showForm" v-on:show-pdf="showIns"></home>
        </div>
    </div>
    
</template>

<script>
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
        },
        mounted() {

            console.log('Component mounted.')
        },
        methods:{
            showForm(){
                this.flag=true;
            },
            showIns(){
                window.open('http://www.google.co.in');
            }
        }

    }
</script>
<style>
.no-margin{
margin-bottom: 0px!important;
}
</style>

