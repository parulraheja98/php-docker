<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.webp" />
    <up-start />
   
     <div v-if="userCreated===false">
        <form @submit=createNewPlayer method="post">
              Name :-    <input type='text' name='name' v-model='name' /> 
              Height :- <input type='text' name='height' v-model='height' />
              Weight :-  <input type='text' name='weight' v-model='weight' />
              Country :- <input type='text' name='country' v-model='country' />
              <button type="submit"> Submit </button>
        </form>
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
