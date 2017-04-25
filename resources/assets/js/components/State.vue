<template>
  <div class="State panel panel-default">
    <div class="panel-heading">
      <a :href="'state:' + state.name">
        <i class="glyphicon glyphicon-earphone"></i>
      </a>

      <a class="tool" href="#" @click.prevent="remove">
        <i class="glyphicon glyphicon-remove pull-right"></i>
      </a>

      <a class="tool" href="#" @click.prevent="editing = true" v-show="!editing">
        <i class="glyphicon glyphicon-pencil pull-right"></i>
      </a>
    </div>
    <div class="panel-body">
      <div class="live" v-show="!editing">
        {{ state.name }} {{ state.year }}
      </div>
      <div class="editing" v-show="editing">
        <p>
          <select v-model="selected">
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
          <input type="text" v-model="year" />
          <input type="text" v-model="days" />
          <input type="text" v-model="notes" />
          <input type="text" v-model="rating" />
        </p>
        <p>
          <button class="btn btn-success" @click="save">Save</button>
          <button class="btn btn-default" @click="cancel">Cancel</button>
        </p>
      </div>
    </div>
  </div>
</template>
<script>
import axios from 'axios';

export default {

  props: [
    'state'
  ],

  data () {
    return {
      name: this.state.name,
      year: this.state.year,
      days: this.state.days,
      notes: this.state.notes,
      rating: this.state.rating,
      editing: false,
      loading: false
    }
  },

  methods: {

    remove () {
      console.log('State -> remove');
      axios.delete(`/states/${this.state.id}`)
        .then((response) => {
          console.log('State -> remove success');
          this.$emit('deleted')
          this.loading = false;
        })
        .catch((error) => {
          console.log('State -> remove error');
          // stop deleting and dont remove from the dom
          // tell the user deletion failed
        });
    },

    save () {
      console.log('State -> save');
      axios.put(`/states/${this.state.id}`, {
          name: this.name,
          year: this.year,
          notes: this.notes,
          days: this.days,
          rating: this.rating
        })
        .then((response) => {
          console.log('State -> save success');
          this.$emit('updated', {
            name: this.name,
            year: this.year,
            notes: this.notes,
            days: this.days,
            rating: this.rating
          });
          this.editing = false;
        })
        .catch((error) => {
          console.log('State -> save error');
          //show the user that it couldn't be updated
        });
    },

    cancel () {
      console.log('State -> cancel');
      this.name = this.state.name;
      this.year = this.state.year;
      this.notes = this.state.notes;
      this.days = this.state.days;
      this.rating = this.state.rating;
      this.editing = false;
    }

  }

}
</script>

<style>
.tool > i {
  margin-left: 15px;
}
</style>
