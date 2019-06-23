<template>
  <div id="app">
    <div id="navigation-bar">
       <b-navbar toggleable="sm" type="dark" variant="info">
    <b-navbar-toggle target="nav-text-collapse"></b-navbar-toggle>

    <b-navbar-brand href="/"><img src="./assets/logo.webp" height="80px" /></b-navbar-brand>
     <b-navbar-nav class="ml-auto">
     
      <b-navbar-brand href="/">Home</b-navbar-brand>
      <b-navbar-brand href="/createplayer">Create Player</b-navbar-brand>
     </b-navbar-nav>
   
  </b-navbar>
    </div>
    <router-view />
  </div>
</template>

<style lang="scss">
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}
#nav {
  padding: 30px;
  a {
    font-weight: bold;
    color: #2c3e50;
    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
