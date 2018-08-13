<template>
  <div>
    <div class="slider-item gallery-slide">
      <image-slide
        :src="image.src"
        :alt="image.title"
      >
        <h2 class="text-sans-serif h6 mb-2">{{image.title}}</h2>
        <p>{{image.desc}}</p>
      </image-slide>
    </div>
    <div>
      <button
        aria-label="previous slide"
        class="control control--prev"
        @click="() => onClick(-1)"
      ></button>
      <button
        aria-label="next slide"
        class="control control--next"
        @click="() => onClick(1)"
      ></button>
    </div>
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
      default: 0,
    },
  },

  data() {
    return {
      current: this.index,
    };
  },

  computed: {
    image() {
      return this.srcset[this.current];
    },
  },

  methods: {
    onClick(n) {
      const current = this.current + n;
      const len = this.srcset.length - 1;
      this.current = Math.max(0, Math.min(current, len));
    },
  },
}
</script>

