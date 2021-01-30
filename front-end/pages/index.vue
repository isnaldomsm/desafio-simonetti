<template>

    <div>
      <div v-for="(article, index) in articles" class="">
         
          <div  v-if="(index + 1) % 3 != 0"  class="box-1">
           
            <div  class="box-2">
              <div class="box-3">
                <img src="https://source.unsplash.com/640x640/?trees" alt="Ut eveniet eum dicta."class="sc-pFZIQ dbZyJY"/>
                <div class="box-4">
                  <p>{{article.title}}</p>
                  <a class="sc-crrsfI ewkcVi" href="/post/">
                    <h2 class="sc-kEjbxe lkfIbP">Ut eveniet eum dicta.</h2></a>
                  <div class="box-text">
                   {{article.article}}
                  </div>
                  <img src="" alt="" class="sc-pFZIQ dbZyJY" />
                </div>
              </div>
            </div>
            </div>
        
            <div  v-if="(index + 1) % 3 == 0" class="box-large">
              <img src="https://source.unsplash.com/640x640/?trees" alt="Voluptas ut recusandae et modi sed ut sed rem incidunt." class="sc-gsTCUz gGXYYk">
              <div class="large-text"><p class="sc-eCssSg gTggYy">Marilie Pollich</p>
                <a href="/post/ec734fe1-1d9d-4ab8-b84c-8082f9875abd"><h2 class="sc-hKgILt bZtvZN">Voluptas ut recusandae et modi sed ut sed rem incidunt.</h2></a>
                <div class="text">Doloribus est voluptas qui exercitationem et. Qui itaque fugit dolore repellendus non impedit explicabo molestias. Id dolorum qui.
Aliquam sed velit consequatur cumque eveniet corrupti commodi mollitia commodi. Ea sint neque consequuntur id impedit volupta...
              </div>
              </div>
              </div>
                       
          
              
       
      </div>
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

const axios = require('axios')
export default {
  data () {
    return {
      articles: [],
      i: 0, 
      valueStop: 0,

    }
  },
  mounted () {
    var self = this;
    axios.get('http://localhost:8080/api/v1/articles')
  .then(function (response) {



      self.articles = response.data;
      console.log(response);


  });
  }
}


</script>
