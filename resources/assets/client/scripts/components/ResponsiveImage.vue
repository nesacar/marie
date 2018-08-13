<template>
  <div>
    <img
      :src="src"
      :alt="alt"
      :style="{width, height}"
      v-if="loaded"
    />
  </div>
</template>

<script>
export default {
  props: {
    src: {
      type: String,
      required: true,
    },

    alt: {
      type: String,
      default: 'image description',
    },
  },

  data() {
    return {
      width: '100%',
      height: 'auto',
      loaded: false,
    };
  },

  mounted() {
    const img = new Image();
    img.src = this.src;
    img.onload = this._onLoad;
  },

  methods: {
    _onLoad(evt) {
      const {naturalWidth, naturalHeight} = evt.target;
      const isLandscape = naturalWidth > naturalHeight;

      if (isLandscape) {
        this.height = '100%';
        this.width = 'auto';
      }

      this.loaded = true;
    },
  },
};
</script>
