<template>
  <div class="counter container">
    <div class="p-2">
      <svg class="counter-svg" >
          <use xlink:href="#logo"></use>
      </svg>
    </div>

    <div class="p-2 counter-img-div" >
      <img src="/client/images/mag.png" alt="casopis" class="counter-image">
    </div>

    <div class="p-2 " style="
                      display: flex;
                      flex-direction: column;
                      justify-content: center;
                      text-align: center;">
      <div><p class="para" style="margin-bottom: -6px;">BUDITE SA NAMA OD PRVOG BROJA</p></div>
      <Countdown :deadline="deadline" ></Countdown>

    </div>
  </div>
</template>

<script>
import Countdown from 'vuejs-countdown'

export default {
  data() {
    return {
      // Init vars
    }
  },

  components: {
    Countdown
  },

  props: ['deadline'],
  methods: {
    //
  }
}
</script>

<style>
.counter {
  margin-top: 32px;
  display: inline-flex;
  color:white;
  max-width: 980px;
  height: 250px;
  background-image: url("/client/images/back.png");
}
.counter-info-div {
  text-align: center;
  margin-top: 66px;
  margin-right: 80px;
}
.counter-img-div {
 margin-left: 20px;
}
.counter-image {
  margin-left: -25px;
  margin-top: -8px;
}
.counter-svg {
  width: 260px;
  fill: white;
  margin-left: 45px;
  margin-top: 40px;
}
.vuejs-countdown li:after {
   margin-top: 10px;
}
.vuejs-countdown .text {
  visibility: hidden;
  height: 0;

}
.dani-div {
  margin-left: 6px;
}
.sati-div {
  margin-right: -8px;
}
.minuti-div {
  margin-right: -25px;
}
.vuejs-countdown .digit {
  font-weight: 600 !important;
  line-height: 1.4  !important;
  font-size: 50px  !important;
  margin-bottom: 0  !important;
}
.vuejs-countdown {
  align-content: center;
}
.vuejs-countdown li:after {
  top: -4 !important;
}
.para {
  font-size: 16px;
  font-weight: 600;
  color: white;
  margin-bottom: 0;
}
.para-b {
  font-size: 13px;
  font-weight: 600;
  color: white;
  margin-bottom: 0;
}
@media only screen and (max-width: 800px) {

   .counter {
  display: none;
  color:white;
  visibility: hidden;
  height: 0;
}
}
</style>
