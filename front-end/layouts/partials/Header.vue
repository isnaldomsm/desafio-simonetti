<template>
  <div class="top-menu">
    <a href="/">
    	<p class="text-1">Rockr Blog</p>
    </a>
    <div class="div-container">
      <a class="text-3" href="/">
      	<p>Posts</p>
      </a>
      
      <p   v-on:click="showmodal" class="makeStyles-button-3">Contact</p>
    

    </div>
    <modal  v-show="isModalVisible" @close="closeModal"/>
  </div>

</template>
<script>
  import modal from '/components/modal.vue';

  export default {
   
    components: {
      modal,
    },
    data () {
      return {
        isModalVisible: false,
      };
    },
    mounted() {
      // this.showmodal();
    },
    methods: {
      showmodal() {
        this.isModalVisible = true;
      },
      closeModal() {
        this.isModalVisible = false;
      }
    },
  };
</script>