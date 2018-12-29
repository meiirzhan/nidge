<template>
    <div class="col-md-6 col-12 main-map-wrapper">
    	<yandex-map
		  :coords="[43.229767, 76.943013]"
		  zoom="18"
		  style="width: 100%; height: 100%;"
		  :cluster-options="{
		    1: {clusterDisableClickZoom: true}
		  }"
		  :behaviors="['ruler']"
		  :controls="['trafficControl']"
		  :placemarks="placemarks"
		  map-type="map"
		  @map-was-initialized="initHandler"
		  class="main-image"
		>

		    <ymap-marker
		      marker-id="1"
		      marker-type="placemark"
		      :coords="[43.229767, 76.943013]"
		      hint-content="Hint content 1"
		      :balloon="{header: 'header', body: 'body', footer: 'footer'}"
		      :icon="{color: 'green', glyph: 'user'}"
		      cluster-name="1"
		    ></ymap-marker>

		</yandex-map>
    </div>
</template>

<script>
	const { yandexMap, ymapMarker } = require('vue-yandex-maps');
  export default {
      name: "MapPart",
      components: {
  			yandexMap,
  			ymapMarker
      }
  }
</script>

<style scoped>
  .main-map-wrapper {
    overflow: hidden;
    z-index: 2;
  }
  @media (max-width: 728px) {
    .main-map-wrapper,
  	.main-map-wrapper > section
     {
	  	height: 300px;
	  }
  }
</style>
