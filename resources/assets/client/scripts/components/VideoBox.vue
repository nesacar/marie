<template>
  <div>
    <div class="image image--16-9 video-box mb-3">
      <iframe
        :src="videoSrc"
        frameborder="0"
        allow="autoplay; encrypted-media"
        allowfullscreen
      ></iframe>
    </div>
    <ul class="video-box_list">
      <li v-for="(thumb, i) in thumbs"
        :key="i"
        class="video-box_list-item tint tint--light tint--hover"
        @click="() => onClick(i)"
        tabindex="0"
      >
        <div class="video-box_thumbnail">
          <div class="image image--16-9 js-lazy-image"
            :data-src="thumb.src"
            :data-alt="thumb.alt"
          ></div>
        </div>
        <h3 class="video-title text-serif">{{thumb.title}}</h3>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: {
    index: {
      type: Number,
      default: 0,
    },

    thumbs: {
      type: Array,
      /**
     * Thumb prop type definition.
     * 
     * @typedef {Object} Thumb
     * @property {string} src thumbnail image src.
     * @property {string} alt thumbnail image alt description.
     * @property {string} href lik that thumbnail is pointing to.
     * @property {string} title thumbnail title value.
     */
      default() {
        return [];
      },
    },
  },

  data() {
    return {
      videoSrc: this.thumbs[this.index].href,
    };
  },

  methods: {
    /**
     * Sets the `href` of the thumb with the passed index as active link.
     * 
     * @param {number} index
     */
    onClick(index) {
      this.videoSrc = this.thumbs[index].href;
    },
  },
};
</script>
