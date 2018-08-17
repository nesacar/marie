export default {
  props: {
    pgnc: {
      type: Number,
      default: 0,
      vlidator(value) {
        return 0 <= value && value <= 100;
      },
    },
  },

  methods: {
    /**
     * Sets the given `location` as the window location.
     *
     * @param {string} location next location
     */
    setLocation(location) {
      if (Math.random() * 100 < this.pgnc) {
        window.location.replace(location);
        return;
      }

      window.history.pushState(null, '', location);
    },
  },
};
