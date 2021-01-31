<template>
  <div>
    <div v-for="(article, index) in articles" class="">
      <div v-if="(index + 1) % 3 != 0" class="box-1">
        <div class="box-2">
          <div class="box-3">
            <img
              :src="article.imageUrl"
              alt=""
              class="sc-pFZIQ dbZyJY"
            />
            <div class="box-4">
              <p>{{ article.title }}</p>
              <a class="sc-crrsfI ewkcVi"
              <a 
                :href="article.id" 
              >
                <h2 class="sc-kEjbxe lkfIbP">Ut eveniet eum dicta.</h2></a
              >
              <div class="box-text">
                {{ article.article }}
              </div>
              <img src="" alt="" class="" />
            </div>
          </div>
        </div>
      </div>

      <div v-if="(index + 1) % 3 == 0" class="box-large">
        <img
          :src="article.imageUrl"
          alt="Voluptas ut recusandae et modi sed ut sed rem incidunt."
          class="sc-gsTCUz gGXYYk"
        />
        <div class="large-text">
         <p>{{ article.title }}</p>
          <a 
            :href="article.id" 
          >
            <h2 class="sc-kEjbxe lkfIbP">Ut eveniet eum dicta.</h2>
          </a
          >
          <div class="text">
            {{ article.article}}
          </div>
        </div>
      </div>
    </div>
     <modal  v-show="isModalVisible" @close="closeModal"/>
  </div>
 
</template>

<style>
.container {
  margin: 0 auto;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.title {
  font-family: "Quicksand", "Source Sans Pro", -apple-system, BlinkMacSystemFont,
    "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  display: block;
  font-weight: 300;
  font-size: 100px;
  color: #35495e;
  letter-spacing: 1px;
}

.subtitle {
  font-weight: 300;
  font-size: 42px;
  color: #526488;
  word-spacing: 5px;
  padding-bottom: 15px;
}

.links {
  padding-top: 15px;
}
</style>
<script>
import modal from '/components/modal.vue';
const axios = require("axios");
export default {
  name: 'app',
    components: {
      modal
    },
    
  data() {
    return {
      isModalVisible: false,
      articles: [],
      i: 0,
      valueStop: 0
    };
  },
  mounted() {
    
    var self = this;
    axios.get("http://localhost:8080/api/v1/articles").then(function(response) {
      self.articles = response.data;
      console.log(response);
    });
  },
  methods: {
      showmodal() {
        this.isModalVisible = true;
      },
      closeModal() {
        this.isModalVisible = false;
      }
      
    }
};

</script>
