<template>
  <div id="main">
    <header id="header">
      <Menu></Menu>
    </header>
    <div id="content" class="p-5">
      <router-view></router-view>
    </div>
  </div>
</template>
<script>
import Menu from './components/Menu.vue'
export default {
  components: {
    Menu
  }
}
</script>