<template>
  <!-- <div class="container-fluid"> -->
    <div class="StateForm">
      <!-- <div class= "row"> -->
        <div class="form-group leftbox">
        <label for="name col-form-label">Select a state</label>
        <select class="form-control" v-model="name">
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select>
        <div class="form-group">
          <label for="year col-form-label">What year did you visit?</label>
          <input class="form-control" type="text" v-model="year" />
        </div>
        <div class="form-group">
          <label for="days col-form-label">How many days did you stay?</label>
          <input class="form-control" type="text" v-model="days" />
        </div>
        <div class="form-group">
          <label for="notes col-form-label">Add some memos</label>
          <textarea class="form-control" v-model="notes"></textarea>
        </div>
        <div class="form-group">
          <label for="rating col-form-label">Give it a rating!</label>
          <input class="form-control" v-model="rating" />
        </div>
        <button class="btn btn-primary" @click="create" :disabled="loading">Add State</button>
      </div>
      <!-- <div class="col-lg-8 col-md-8 col-sm-12"></div> -->
    </div>
  <!-- </div> -->
<!-- </div> -->
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

<style>
  .StateForm {
    padding-top: 20px;
    padding-bottom: 30px;
    float: left;
    width: 350px;
    position: relative;
    display: inline-block;
    overflow: hidden;
  }

  .leftbox {
    padding: 15px;
    border: 1px solid;
    border-color: #2317C9;
    border-radius: 3px;
  }

  label {
    font-family: 'Julius Sans One', sans-serif;
    color: #4286f4;
  }

</style>
