<template>
    <div>
      <!-- <button @click="showVideo('https://www.youtube.com/embed/PpYoHRFqclE')" class="linkwrap bg-transparent border-0 w-100">
          <iframe width="100%" height="auto" src='https://www.youtube.com/embed/PpYoHRFqclE' frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <img src="https://images.pexels.com/photos/3526067/pexels-photo-3526067.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="  " class="img-fluid">
      </button> -->
        <!-- <div style="background-image: url('/img/group-4@2x.jpg')" class="background-image content h-100 video__hover " @click="showVideo('https://www.youtube.com/embed/PpYoHRFqclE')">
        </div> -->
        <img :src='imgurl' alt="" class="img-fluid content video__hover" @click="showVideo(videolink)">
      <!-- <div style="background-image: url('/img/content-video-block-img-copy@2x.jpg')" class="background-image content section-half-bg video__hover d-block d-md-none" @click="showVideo('https://www.youtube.com/embed/PpYoHRFqclE')">
        </div> -->

        <div v-if="showModal">
        <transition name="modal">
          <div class="modal-mask">
            <div class="modal-wrapper">
              <div class="modal-dialog" role="document" style="max-width: 760px">
                <div class="modal-content bg-transparent border-0">
                  <div class="modal-header border-0">
                    <button type="button" class="close btn-lg" data-dismiss="modal" aria-label="Close"  @click="showModal = false">
                      <span aria-hidden="true" class="text-light h3">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" width="100%" height="auto" v-bind:src='video' frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="modal-footer border-0">
                    <button type="button" class="btn btn-outline-light" @click="showModal = false">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </transition>
      </div>

    </div>
</template>

<script>
// TODO: Need to divide images and video into two components

export default {
  data: function() {
    return {
      showModal: false,
      video: null,
      activeBtn: 0,
    }
  },

  props: ['imgurl', 'videolink'],

  methods: {
    showVideo(videoLink) {
      this.video = videoLink;
      this.showModal = true;
    },

    activate: function(el){
      this.activeBtn = el;
    },

  },



  components: {

  },
}

</script>

<style scoped>
    .video__hover:hover {
      cursor: pointer;
    }

   .galleryImage {
			max-height: 300px;
			object-fit: cover;
			width: auto;
    }

    .btn-gallery {
      max-width: 290px;
      width: 100%;
      font-size: 20px;
      font-weight: 300;
      letter-spacing: 2.7px;
    }

    .btn-gallery:hover {
      color: #b4cdd5;
    }

    .btn-active {
      background-color: #ffffff;
      color: #b4cdd5;
    }

    .modal-mask {
      position: fixed;
      z-index: 9998;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, .8);
      display: table;
      transition: opacity .3s ease;
    }

    .modal-wrapper {
      display: table-cell;
      vertical-align: middle;
    }

    /*
    * Set the video gallery behind modal button
    */
    .linkwrap {
      position:relative;
      display:inline-block;
    }

    .linkwrap iframe {
      z-index: 2;
    }

</style>