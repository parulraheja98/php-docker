<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.webp" />
    <up-start />
    this is a test
    <div v-for="player in players">
           
           <b-list-group>
            <b-list-group-item variant="info">Player Information :- </b-list-group-item>
            <b-list-group-item>Name :- {{player.name}}</b-list-group-item>
            <b-list-group-item>  <a :href="'/profile/' + player.id">Click here to view the Profile </a> </b-list-group-item>
            <b-list-group-item>  <a :href="'/profile/del/' + player.id">Delete this profile </a> </b-list-group-item> 
          </b-list-group>
         

    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import UpStart from "@/components/UpStart.vue";
import axios from "axios";
 

export default {
  name: "home",
  data() {
    return {
      serverMessage: null,
      check:[],
      players:[],
      test:'',
      linkRef:''
    };
  },
  async created() {
    
    console.log('reaching this stage 1');
    console.log(this.$route.params);
    this.linkRef = this.$route.params;
    console.log('reaching this stage 2');
    console.log("created");
    const dataResp = await axios.get("/api/players");
    console.log('checking response 1');
    console.log(dataResp);
    console.log('checking response 2');
    console.log(dataResp.data[0]);
    this.players = dataResp.data;
  
    

  }
};
</script>
