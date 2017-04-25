<template>
    <div class="container">
      <h1>Journey to all 50 States</h1>
      <p class="description">Here you can log which states you've visited so you can keep track of which ones you have left.</p>


      <StateForm @created="fetch"></StateForm>

      <div class="StateList" v-show="states.length > 0">
        <State v-for="(state, index) in states" :key="index" :state="name" @updated="update" @deleted="remove(index)"></State>
      </div>

      <p v-show="states.length === 0">You have not visited any states yet.</p>

      <transition name="fade">
      <MainLoader v-if="loading"></MainLoader>
      </transition>

    </div>
</template>


<script>

  import axios from 'axios';
  import State from './State';
  import StateForm from './StateForm';
  import MainLoader from './MainLoader';

  export default {
    components: {
    State,
    StateForm,
    MainLoader
  },

  data () {
  return {
    states: [],
    loading: false
  }
},

  mounted () {
    this.fetch();
  },

  methods: {

    fetch () {
      console.log('Tracking -> fetch');
      this.loading = true;
      axios.get('/states')
        .then((response) => {
          console.log('Tracking -> fetch success');
          console.log(response.data);
          this.states = response.data;
          this.loading= false;
        })
        .catch((response) => {
          console.log('Tracking -> fetch error');
          // show error
          this.loading = false;
        })
    },

    update (data) {
        // this.fetch();
        var i = this.states.indexOf(data.state);
        for (var d in data) {
          this.states[i][d] = data[d];
        }
      },

    remove (i) {
      console.log(`Tracking -> remove ID: ${i}`);
      this.states.splice(i, 1);
    }

  }
}
</script>


<style>

  .fade-enter-active, .fade-leave-active {
  transition: opacity .5s
  }
  .fade-enter, .fade-leave-to {
  opacity: 0
  }

</style>
