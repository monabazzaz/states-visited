<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Style Guide</title>
    <!---links to referenced styles--->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Armata|Arsenal|Coming+Soon|Glegoo|Julius+Sans+One|Nixie+One|Playfair+Display+SC|Poiret+One" rel="stylesheet">

  </head>

  <body>
    <div class="container">

    <div class="container-fluid">
      <div class="row">
        <h1 class="styletitle">STYLE GUIDE</h1>
      </div>
      <!---color palette for style page--->
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <h2 class="fonts">COLORS</h2>
        </div>
        <div class="col-md-1"></div>
          <a href="#"><div class="col-md-2 dkblu"><h3>#4286f4</h3></div></a>
          <a href="#"><div class="col-md-2 ltblu"><h3>#e5f0ff</h3></div></a>
          <a href="#"><div class="col-md-2 gry"><h3>#2317c9</h3></div></a>
          <div class="col-md-1"></div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3"></div>
        <div class="col-md-1"></div>
          <a href="#"><div class="col-md-2 ltgry"><h3>#ff0000</h3></div></a>
          <a href="#"><div class="col-md-2 wht"><h3>#ffffff</h3></div></a>
          <a href="#"><div class="col-md-2 yel"><h3>#FFC939</h3></div></a>
        <div class="col-md-1"></div>
      </div>
      <br>
      <br>
      <!---font variations for style page--->
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <h2 class="fonts">TYPOGRAPHY</h2>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 merris">
          <h1 class="merri1">Coming Soon, cursive Lighter</h1>
          <h1 class="merri2">Coming Soon, cursive Regular</h1>
          <h1 class="merri3"><strong>Coming Soon, cursive Bold</strong></h1>
        </div>
        <div class="col-md-1"></div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3"></div>
        <div class="col-md-1"></div>
        <div class="col-md-6 notis">
          <p class="noti1">Julius Sans One, sans-serif Regular</p>
          <p class="noti2">Julius Sans One, sans-serif Bold</p>
        </div>
        <div class="col-md-2"></div>
      </div>
      <br>
      <br>
    <!---example button variations for style page--->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3">
        <h2 class="fonts">BUTTONS</h2>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-6 btns">
        <a href="#" class="btn btn-sm pull-center">Button small</a>
        <br>
        <br>
        <a href="#" class="btn btn-primary">Button medium</a>
        <br>
        <br>
        <a href="#" class="btn btn-lg">Button large</a>
        <br>
      </div>
      <div class="col-md-1"></div>
    </div>
    <br>
    <br>
    <!---example input variations for style page--->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3">
        <h2 class="fonts">INPUT AREAS</h2>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-6 xamps">
        <h4>Text Input</h4>
        <div class="form-group">
          <label for="whatyear">What year did you visit?</label>
          <input class="form-control" type="text" name="firstName" id="whatyear" placeholder="" />
        </div>
        <h4>Select Input</h4>
        <div class="form-group">
          <label for="name">Select a State</label>
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
        <h4>Textarea Input</h4>
        <div class="form-group">
          <label for="memos">Add Some Memos</label>
          <textarea class="form-control" name="memos" id="memos" value="" placeholder=""></textarea>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
    <br>
    <br>
    <!---example of ordered and unorder lists for style page--->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3">
        <h2 class="fonts">LISTS</h2>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-6 xamps">
        <h4>Ordered Lists</h4>
        <ol>
          <li>List object number 1</li>
          <li>List object number 2</li>
          <li>List object number 3</li>
        </ol>
        <h4>Unordered Lists</h4>
        <ul>
          <li>List object number 1</li>
          <li>List object number 2</li>
          <li>List object number 3</li>
        </ul>
      </div>
      <div class="col-md-1"></div>
    </div>
    <br>
    <br>
  </div>
</div>

<!---references to needed bootstrap javascript--->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </body>
</html>
