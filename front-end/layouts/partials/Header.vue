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
  const axios = require('axios')
 // var moment = require('moment');
  export default {
   
    components: {
      modal,
    },
    data () {
      return {
        isModalVisible: false,
        name:   '',
        email:  '',
        phone:  '',
        text:   ''

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
      },
      envio_formulario: function(element1) {
        var self = this;

        var formData = new FormData();
        formData.append('name',     self.name);
        formData.append('email',     self.email);
        formData.append('phone',     self.phone);
        formData.append('text',     self.text);
       

        

         
          axios.post(urlrequest,
            formData,
            {
              headers: {
                'Content-Type': 'multipart/form-data',
              }
            }
          ).then(function(response){
            // console.log(response);
            self.msg_success = response.data;
            $('.msg-success').css("display", "block");
            self.resertForm();
            self.img_loading_check = 0;

          }).catch(function (error){
            // console.log(error);
            self.msg_error = error.data;
            $('.msg-error').css("display", "block");
            self.resertForm();
            self.img_loading_check = 0;
          })
        },
      }
    }
    
</script>