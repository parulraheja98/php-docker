<template>
  <div class="home">
    
    <up-start />
   
     <div v-if="userCreated===false">
        <b-form @submit=createNewPlayer method="post">
          <b-form-group id="input-group-1" label="Name" label-for="input-1">
            <b-form-input type="text" name="name" v-model="name" required placeholder="Enter name"></b-form-input>
          </b-form-group>
          <b-form-group id="input-group-2" label="Height" label-for="input-2">
              <b-form-input type="text" name="height" v-model="height" required placeholder="Enter height"></b-form-input>
          </b-form-group>   
          <b-form-group id="input-group-3" label="Weight" label-for="input-1">
              <b-form-input type="text" name="weight" v-model="weight" required placeholder="Enter weight"/></b-form-input>
           </b-form-group>
           <b-form-group id="input-group-4" label="Country" label-for="input-1">   
              <b-form-input type="text" name="country" v-model="country" required placeholder="Enter country"></b-form-input>
           </b-form-group>   
              <b-button type="submit"> Submit </b-button>
        </b-form>
   </div>
    <div v-else="userCreated===true">
      <b-alert show variant="success"> {{message}} </b-alert>
      </div>
  </div>
</template>

<script>
// @ is an alias to /src
import UpStart from "@/components/UpStart.vue";
import axios from "axios";
 

export default {
  name: "CreatePlayer",
  data() {
    return {
      serverMessage: null,
      check:[],
      players:[],
      test:'',
      name:'',
      weight:'',
      country:'',
      height:'',
      message:'',
      userCreated:false
    };
  },
methods:{
   createNewPlayer:async function(e) {
    e.preventDefault();
    console.log(this.name);
    console.log(this.weight);
    console.log(this.height);
    console.log(this.country);
    console.log('reaching this stage');
    var response =  await axios.post('/api/players/add',{
        name:this.name,
        weight:this.weight,
        height:this.height,
        country:this.country
      });

      console.log(response.data);
      if(response.data.message) {
        this.userCreated = true;
        this.message = response.data.message;
      }
   
  }
}
}
</script>
