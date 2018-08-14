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
export default {
  props: {
    srcset: {
      type: Array,
      required: true,
    },

    index: {
      type: Number,
      default: 0,
    },

    pgnc: {
      type: Number,
      default: 0,
      validator(value) {
        return 0 <= value && value <= 100;
      },
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
      const next = this.current + n;
      const len = this.srcset.length - 1;
      const current = Math.max(0, Math.min(next, len));

      const location = window.location.href;
      const nextLocation = location.replace(/image=\d+/, `image=${current + 1}`);

      if (Math.random() * 100 < this.pgnc) {
        window.location.replace(nextLocation);
        return;
      }

      window.history.pushState(null, '', nextLocation);

      this.current = current;
    },
  },
}
</script>

