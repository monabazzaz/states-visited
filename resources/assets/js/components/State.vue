<template>
  <!-- <div class="container-fluid"> -->
    <div class= "visited">
      <div class="State panel panel-default rightbox">
        <div class="panel-heading">

          <a class="tool" href="#" @click.prevent="editing = true" v-show="!editing">
            <i class="glyphicon glyphicon-pencil"></i>
          </a>

          <a class="tool" href="#" @click.prevent="remove">
            <i class="glyphicon glyphicon-remove pull-right"></i>
          </a>
          
        </div>
        <div class="panel-body">
          <div class="live" v-show="!editing">
            {{ state.name }} {{ state.year }}
          </div>
          <div class="editing" v-show="editing">
            <p>
            <div class="form-group">
              <label for="name col-form-label">Edit state visited</label>
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
            </div>
            <div class="form-group">
              <label for="year col-form-label">Edit year visited</label>
              <input class="form-control" type="text" v-model="year" />
            </div>
            <div class="form-group">
              <label for="days col-form-label">Edit number of days</label>
              <input class="form-control" type="text" v-model="days" />
            </div>
            <div class="form-group">
              <label for="notes col-form-label">Edit your memos</label>
              <textarea class="form-control" v-model="notes"></textarea>
            </div>
            <div class="form-group">
              <label for="rating col-form-label">Edit your rating</label>
              <star-rating v-model="rating" v-bind:star-size="30"></star-rating>
            </div>
            </p>
            <p>
              <button class="btn btn-success" @click="save">Save</button>
              <button class="btn btn-default" @click="cancel">Cancel</button>
            </p>
          </div>
        </div>
        <div class="panel-body">
          <div class="live" v-show="!editing">
            {{ state.notes }}
          </div>
        </div>
      </div>
      <!-- <div class="col-lg-4 col-md-4 col-sm-12"></div> -->
    </div>
  <!-- </div> -->
</template>
<script>
import axios from 'axios';
import vmodal from 'vue-js-modal';
import StarRating from 'vue-star-rating';

export default {

  components: {
    StarRating
  },

  props: [
    'state'
  ],

  data () {
    return {
      name: this.state.name,
      year: this.state.year,
      days: this.state.days,
      notes: this.state.notes,
      rating: parseInt(this.state.rating),
      editing: false,
      loading: false,
      preview: false
    }
  },

  methods: {

    show () {
      this.$modal.show('preview');
    },
    hide () {
      this.$modal.hide('preview');
    },

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

.visited {
  float: right;
  width: 700px;
  position: relative;
  display: block;
  /*border: solid 1px black;
  border-radius: 3px;*/
  padding-top: 20px;
}

.form-control {
  font-family: 'Julius Sans One', sans-serif;
  color: #4286f4;
}

.tool > i {
  margin-left: 15px;
}

@media screen and (max-width: 700px){
  .visited {
    width: 350px;
  }
}
</style>
