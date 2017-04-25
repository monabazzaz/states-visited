<template>
  <div class="StateForm">
    <input type="selected" v-model="name" />
    <input type="text" v-model="year" />
    <input type="text" v-model="days" />
    <input type="text" v-model="notes" />
    <input type="text" v-model="rating" />
    <button class="btn btn-primary" @click="create" :disabled="loading">Create State</button>
  </div>
</template>

<script>
import axios from 'axios';
import Loader from './Loader';

export default {
  components: {
    Loader
  },

  data() {
    return {
      name: '',
      year: '',
      days: '',
      notes: '',
      rating: '',
      loading: false
    }
  },

  methods: {
    create () {
      console.log('StateForm -> create');
      if (this.loading) {
        alert('request is already being made');
        return false;
      }
      this.loading = true;
      this.sendRequest();
    },

    sendRequest () {
      axios.post('/states', {
        name: this.name,
        year: this.year,
        days: this.days,
        notes: this.notes,
        rating: this.rating
      })
      .then((response) => {
        console.log('StateForm -> sendRequest success');
        console.log(response.data);
        this.loading = false;
        this.reset();
        this.$emit('created');
      })
      .catch((error) => {
        console.error('StateForm -> sendRequest error');
        // show an error message
      });
    },

    reset () {
      this.name = '';
      this.year = '';
      this.days = '';
      this.notes = '';
      this.rating = '';
    }
  }
};
</script>

<style scoped>
</style>
