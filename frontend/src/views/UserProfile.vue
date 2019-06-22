<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.webp" />
    <up-start />
    this is a test
   
   
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
      playerProfile:[]
    };
  },
  async created() {
    console.log("created");
    const id = this.$route.params.id;
    const dataResp = await axios.get("/api/players/"+id);
    console.log('checking response 1');
    console.log(dataResp);
    console.log('checking response 2');
    console.log(dataResp.data[0]);
    this.playerProfile = dataResp.data[0];
    

  },

};
</script>
