<template v-for="article in articles">
	

	<div class="articles-box1">
		
		<div class="articles-box2">
			<img
				:src="articles.imageUrl"
				alt="Imagem Ilustrativa"
			/>
			<div class="articles-box3">
				<p>{{articles.author}}</p>
				<h1>{{articles.title}}.</h1>
			</div>
		</div>
		<div class="articles-box4">
			{{articles.article}}
		</div>

	</div>
</div>
</template>
<script>
const axios = require("axios");
export default {
  data() {
    return {
      articles: []
      
    };
  },
  mounted() {
    var self = this;
    axios.get("http://localhost:8080/api/v1/articles" + this.$route.fullPath).then(function(response) {
      self.articles = response.data;
      console.log(articles);
      if(articles){
      	window.location.href = "/";
      }
    });
  }
};
</script>