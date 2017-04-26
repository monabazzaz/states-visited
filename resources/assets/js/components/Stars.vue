<template>
<div class="stars">
  <div class="star" @click="setRating(1)"><i :class="{'star-icon': true, 'active': rating >= 1}">&#x2605;</i></div>
  <div class="star" @click="setRating(2)"><i :class="{'star-icon': true, 'active': rating >= 2}">&#x2605;</i></div>
  <div class="star" @click="setRating(3)"><i :class="{'star-icon': true, 'active': rating >= 3}">&#x2605;</i></div>
  <div class="star" @click="setRating(4)"><i :class="{'star-icon': true, 'active': rating >= 4}">&#x2605;</i></div>
  <div class="star" @click="setRating(5)"><i :class="{'star-icon': true, 'active': rating >= 5}">&#x2605;</i></div>
</div>
</template>

<script>
export default {
  data () {
    return {
      rating: 0
    }
  },

  methods: {
    setRating (value) {
      this.rating = value
      this.$emit('ratingSelected', this.rating)
    }
  }
}
</script>

<!-- parent -->
<template>
  <Stars @ratingSelected="rated"></Stars>
</template>

<script>
export default {
  methods: {
    ratingSelected (r) {
      console.log(r)
    }
  }
}
</script>
