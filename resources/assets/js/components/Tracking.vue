<template>
    <div class="container">
      <div class="head">
        <img src='/images/mapcover.png'>
        <p class="description">Here you can log which states you've visited so you can keep track of which ones you have left.</p>
        <p class="more">Please fill out the form on the left completely, click 'add state' and your visited state will show up on the list to the right.</p>
      </div>

      <StateForm @created="fetch"></StateForm>

      <div class="StateList" v-show="states.length > 0">
        <State v-for="(state, index) in states" :key="index" :state="state" @updated="update" @deleted="remove(index)"></State>
      </div>

      <p v-show="states.length === 0">You have not visited any states yet.</p>

      <transition name="fade">
      <MainLoader v-if="loading"></MainLoader>
      </transition>

        <footer>
          <div class="col-md-12">
            <p>This state tracker was created for my Spring 2017 MEJO 583 class. The style guide for this application can be found <a href="style.html">here</a>. To access the github repository for this project as well as samples to my other work, please visit <a href="http://monabazzaz.org/portfolio">my portfolio</a>. Cheers!</p>
          </div>
        </footer>
      </div>
</template>


<script>

  import axios from 'axios';
  import vmodal from 'vue-js-modal';
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
        this.fetch();
        // var i = this.states.indexOf(data.state);
        // for (var d in data) {
        //   this.states[i][d] = data[d];
        // }
      },

    remove (i) {
      console.log(`Tracking -> remove ID: ${i}`);
      this.states.splice(i, 1);
    }

  }
}
</script>


<style>
  body {
    background-color: #e5f0ff !important;
  }

/*body {
  background: url(/images/stripes.jpg);
  background-repeat: repeat;
  background-attachment: fixed;
  background-position: center;
  background-size: cover;
  }*/

  .head {
    text-align: center;
    padding-top: 15px;
  }

  img {
    width: 70%;
    height: auto;
  }

  .description {
    font-size: 1.75em;
    font-family: 'Coming Soon', cursive;
    padding-top: 20px;
    color: #4286f4;
  }

  .more {
    font-family: 'Coming Soon', cursive;
    color: red;
    padding-bottom: 20px;
  }

  .fade-enter-active, .fade-leave-active {
  transition: opacity .5s
  }
  .fade-enter, .fade-leave-to {
  opacity: 0
  }

  .no-padding {
    padding: 10px 0 0 0;
    background-color: #8cb1d9;
  }

  footer {
    text-align: center;
    padding: 20px;
    padding-top: 50px;
    margin-bottom: 20px;
  }

  footer p {
    color: red;
    font-family: 'Coming Soon', cursive;
    text-align: center;
  }

  footer p a:link {
    color: #4286f4 !important;
  }

  footer p a:visited {
    color: #4286f4 !important;
  }

</style>
