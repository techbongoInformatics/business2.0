<template>
<div class="row">
    <div class="row">
        
    </div>
    <form @submit.prevent="" class="col m8">
       <div class="row">
           <div class="col s3 label-text">
               Your name
           </div>
           <div class="col s9">
                <div class="row" style="margin-bottom:0px">
            <div class="input-field col s4">
          <input  type="text" class="validate">
          <label >First Name</label>
        </div>

        <div class="input-field col s4">
          <input  type="text" class="validate">
          <label >Middle Name</label>
        </div>

            <div class="input-field col s4">
          <input  type="text" class="validate">
          <label >Last Name</label>
        </div>
        </div>
           </div>
       </div>
        <div class="row">
            <!-- Training choice -->
            <div class="col s3 label-text">
                Training you are looking for:
            </div>
            <div class="col s9">
                <select class="browser-default" name="" id="">
                    <option value="0">someText</option>
                </select>
            </div>

        </div>
        <div class="row">
            <!-- College Name -->
            <div class="col s3 label-text">
                Name of your College
            </div>
            <div class="col s9">
                <input type="text" name="" id="">
            </div>
        </div>
        <div class="row">
            <!-- Academic Discipline -->
            <div class="col s3 label-text">
                Your academic discipline
            </div>
            <div class="col s6">
                <input type="text" name="" id="">
            </div>
            <div class="col s3">
                <div class="input-field">
          <input style="margin-top:-15px;" type="number" class="validate">
          <label >Year   </label>
        </div>
            </div>
        </div>

        <div class="row">
            <!-- Contact No -->
            <div class="col s3 label-text">
                Your Contact Number
            </div>
            <div class="col s9">
                <input value="+91" type="text" name="" id="">
            </div>
        </div>
        <div class="row">
            <!-- email -->
            <div class="col s3 label-text">
                Your Email Address
            </div>
            <div class="col s9">
            <input type="email" name="" id="">
            </div>
        </div>
    </form>
</div>
</template>

<script>
export default {

}
</script>

<style>
div:hover{
    border:1px red solid;
}
.label-text{
    margin-top: 1.4rem;
}

</style>
