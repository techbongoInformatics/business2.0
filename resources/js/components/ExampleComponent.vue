<template>
    <div class="container">
        <training-form></training-form>
    </div>
</template>

<script>
import TrainingForm from './forms/training.vue';
    export default {
        components:{
            'training-form' : TrainingForm
        },
        mounted() {

            console.log('Component mounted.')
        }

    }
</script>
