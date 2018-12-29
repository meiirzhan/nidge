<template>
    <div class="col-md-6 col-12 main-video-wrapper">
      <div class="video-wrapper">
        <youtube :video-id="videoId" ref="youtube" width="100%" height="100%" :player-vars="playerVars" @playing="playing"></youtube>
      </div>
    </div>
</template>

<script>
    export default {
        name: "VideoPart",
        data() {
          return {
            videoId: 'aHK6Sxe31jo',
            playerVars: {
              autoplay: 1,
              loop: 1,
              showinfo: 0,
              rel: 0,
              controls: 0,
              playlist: 'aHK6Sxe31jo'
            }
          }
        },
        mounted() {

        }
    }
</script>

<style scoped>
  .main-video-wrapper {
    overflow: hidden;
    z-index: 2;
    min-height: 300px;
    position: relative;
  }
  .video-wrapper {
    /* margin-left: -15px; */
    /* margin-left: -15px; */
    left: -50%;
    right: -50%;
    /* width: 100%; */
    height: 100%;
    position: absolute;
  }
  .video-wrapper .iframe {
    width: 100%;
  }
  .main-image {
    height: auto;
    width: 50wh;
  }
  @media (max-width: 767px) {
    .main-image {
      max-width: 110%;
      /*max-height: 300px;*/

    }
  }
</style>
