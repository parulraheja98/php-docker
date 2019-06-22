<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.webp" />
    <up-start />
    this is a test
   <form method="POST" action="http://localhost:8888/api/players/add">
        Name :-    <input type='text' name='name' /> 
        Height :- <input type='text' name='height' />
        Weight :-  <input type='text' name='weight' />
        Country :- <input type='text' name='country' />
        <button type="submit"> Submit </button>
   </form>
   
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
      test:''
    };
  }
};
</script>
