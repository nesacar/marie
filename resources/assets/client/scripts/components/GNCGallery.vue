<template>
  <div class="slider-item gallery-slide">
    <image-slide
      :src="image.src"
      :alt="image.title"
    >
      <h2 class="text-sans-serif h6 mb-2">{{image.title}}</h2>
      <p>{{image.desc}}</p>
    </image-slide>
  </div>
</template>

<script>
import ImageSlide from './ImageSlide.vue';

export default {
  components: {
    'image-slide': ImageSlide,
  },

  props: {
    srcset: {
      type: Array,
      required: true,
    },

    index: {
      type: Number,
      default: 1,
    },
  },

  computed: {
    image() {
      return this.srcset[this.index];
    },
  },

  mounted() {
    console.log('mounted', this.image)
  },
}
</script>

