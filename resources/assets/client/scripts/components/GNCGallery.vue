<template>
  <div>
    <div class="slider-item gallery-slide ">
      <image-slide class="small-screen-flex-container"
        :src="image.src"
        :alt="image.title"
      >
      <div class="order-flex-1">
        <h2 class="text-sans-serif h6 mb-2">{{image.title}}</h2>
        <p>{{image.desc}}</p>
      </div>
      </image-slide>
    </div>
    <div class="controls">
      <button
        aria-label="previous slide"
        class="control control--prev"
        @click="() => onClick(-1)"
      ></button>
      <div
        class="control control--middle">
         {{ this.current + 1 }} /  {{ this.srcset.length}}
      </div>
      <button
        aria-label="next slide"
        class="control control--next"
        @click="() => onClick(1)"
      ></button>
    </div>
  </div>
</template>

<script>
import withGNC from '../mixins/withGNC';

export default {
  mixins: [
    withGNC
    ],

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
      let next = this.current + n;
      const len = this.srcset.length - 1;
      let current = Math.max(0, Math.min(next, len));
      let arrlength = this.srcset.length;
      const location = window.location.href;
      let treutniIndex = this.current + n
      let nextLocation = location.replace(/image=\d+/, `image=${current + 1}`);
      this.setLocation(nextLocation);



      // FUNKCIJA ZA SLIDE SHOW
      //  if ( next === arrlength ) {
      //   current = 0;
      //   console.log('radi', this.current)
      //    this.setLocation(nextLocation);
    
      // }
      // else if ( next < 0) {
      //   current = len;
      //   console.log('radi', this.current)
      //    this.setLocation(nextLocation);
    
      // }
      
      this.current = current;
    

    },
  },
}
</script>

