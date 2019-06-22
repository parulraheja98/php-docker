<template>
  <div class="up-start">
    <h1 class="title">
      Please read the Readme.md file in project root for requirements.
    </h1>
    <p class="message" v-if="serverMessage">{{ serverMessage }}</p>
    <p class="testing"> {{test}} </p>
    <b-list-group>
      <b-list-group-item>Default list group item</b-list-group-item>
      <b-list-group-item variant="primary">Primary list group item</b-list-group-item>
    </b-list-group>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "UpStart",
  data() {
    return {
      serverMessage: null,
      check:[],
      test:''
    };
  },
  async created() {
    console.log("created");
    const response = await axios.get("/api/start");
    this.serverMessage = response.data.message;
    const dataResp = await axios.get("http://localhost:8888/api/players");
    console.log('checking response 1');
    console.log(dataResp);
    console.log('checking response 2');
    console.log(dataResp.data[0]);
    this.test = dataResp.data[0].name;

  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.up-start {
  .title {
    color: red;
  }

  .message {
    font-size: 2rem;
  }
}
</style>
