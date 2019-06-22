
<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.webp" />
    <div>
        <div v-if="playerDeleted===false">

        </div>

        <div v-else="playerDeleted===true">
        <b-alert show variant="success"> {{message}}  </b-alert>
        </div>
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
      playerProfile:[],
      playerDeleted:false,
      message:''
    };
  },
  async created() {
    console.log("created");
    const id = this.$route.params.id;
    const dataResp = await axios.get("/api/players/del/"+id);
    console.log('checking response 1');
    console.log(dataResp);
    console.log('checking response 2');
    if(dataResp.data.message) {
       this.playerDeleted = true;
       this.message = dataResp.data.message;
    }
    

  },

};

</script>