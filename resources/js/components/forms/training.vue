<template>
<div class="row">
    <div class="row">
        
    </div>
    <form @submit.prevent="submitForm" class="col m8">
       <div class="row">
           <div class="col s3 label-text" required>
               Your name
           </div>
           <div class="col s9">
                <div class="row" style="margin-bottom:0px">
            <div class="input-field col s4">
          <input  type="text" class="validate" v-model="fname">
          <label >First Name</label>
        </div>

        <div class="input-field col s4">
          <input  type="text" class="validate" v-model="mname">
          <label >Middle Name</label>
        </div>

            <div class="input-field col s4">
          <input  type="text" class="validate" v-model="lname">
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
                <select class="browser-default" name="" id="" v-model="choice">
                    <option v-for="c in choices" v-bind:value="c.id">{{c.name}} ({{c.start}} to {{c.end}})</option>
                </select>
            </div>

        </div>
        <div class="row">
            <!-- College Name -->
            <div class="col s3 label-text">
                Name of your College
            </div>
            <div class="col s9">
                <input type="text" name="" id="" v-model="colname">
            </div>
        </div>
        <div class="row">
            <!-- Academic Discipline -->
            <div class="col s3 label-text">
                Your academic discipline
            </div>
            <div class="col s6">
                <input type="text" name="" id="" v-model="deptname">
            </div>
            <div class="col s3">
                <div class="input-field">
          <input style="margin-top:-15px;" type="number" class="validate" v-model="year">
          <label >Year   </label>
        </div>
            </div>
        </div>

        <div class="row">
            <!-- Contact No -->
            <div class="col s3 label-text" >
                Your Contact Number
            </div>
            <div class="col s9">
                <input value="+91" type="text" name="" id="" v-model="mobile">
            </div>
        </div>
        <div class="row">
            <!-- email -->
            <div class="col s3 label-text">
                Your Email Address
            </div>
            <div class="col s9">
            <input type="email" name="" id="" v-model="email">
            </div>
        </div>
        <div class="row">
            <div class="center">
                <button type="submit" class="btn green">Apply</button>
            </div>
        </div>
    </form>
    {{choices}}
</div>
</template>

<script>

import axios from 'axios';
export default {
    data(){
        return {
            fname:'',
            mname:'',
            lname:'',
            colname:'',
            deptname:'',
            mobile:'',
            email:'',
            choice:1,
            year:'',
            choices:{},
        }
    },
    mounted(){
        axios.get('/api/getList').then(
            (response)=> {
                this.choices = response.data.choices;
            }
        )
    },
    methods:{
        submitForm(){
            axios.post('/api/register',{
                first_name : this.fname,
            email : this.email,
            middle_name : this.mname,
            last_name : this.lname,
            college_name : this.colname,
            mobile : this.mobile,
            dept : this.deptname,
            year : this.year,
            choice : this.choice,
            })
            .then((response)=>{
                if(response.data.code===1){
                    this.resetForm();
                     M.toast({html: 'Your application has been submitted successfully' });
                }
                else if(response.data.code===2){
                     M.toast({html: this.email+' or '+this.mobile+' seem to have already applied' });
                }

            }).catch(
                (err) => {
                    console.log(err);
                }
            )
        },
        resetForm(){
            this.fname = '';
            this.mname = '';
            this.lname = '';
            this.colname = '';
            this.deptname = '';
            this.mobile = '';
            this.email = '';
            this.choice = 1;
            this.year = '';
        }
    }

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
