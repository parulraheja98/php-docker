<template>
  <div class="home">
    
    <up-start />
    
    <b-list-group v-if="profileExists===true">
    <b-list-group-item variant="info">Player Information :- </b-list-group-item>
    <b-list-group-item>Name :- {{name}}</b-list-group-item>
    <b-list-group-item>Height :- {{height}}</b-list-group-item>
    <b-list-group-item>Weight :- {{weight}}</b-list-group-item>
    <b-list-group-item>Country :- {{country}}</b-list-group-item>
  </b-list-group>

   
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
      profileExists:false,
      name:'',
      height:'',
      country:'',
      weight:''
    };
  },
  async created() {
    console.log("created");
    const id = this.$route.params.id;
    const dataResp = await axios.get("/api/players/"+id);
    console.log('checking response 1');
    console.log(dataResp);
    console.log('checking response 2');
    console.log(dataResp.data);
    if(dataResp.data.length != 0) {
    const playerProfile = dataResp.data;
    this.height = playerProfile.height;
    this.weight = playerProfile.weight;
    this.country = playerProfile.country;
    this.name = playerProfile.name;
    this.profileExists = true;
    }
    
    

  },

};
</script>
