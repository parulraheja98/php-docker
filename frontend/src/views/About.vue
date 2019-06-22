<template>
  <div class="about">
    <h1>This is an about page for vue-router demo</h1>
  </div>
</template>


<script>

export default {
  name: "CreatePlayer",
  data() {
    return {
      serverMessage: null,
      playerProfile:[]
    }

},
async created() {
  console.log('checking data 1');
  console.log(this.$route.params.testing);
  console.log('checking data 2');
}

}



</script>