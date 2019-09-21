<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.css">
</head>
<body>
<div class="ct" id="t1">
  <div class="ct" id="t2">
         <div class="ct" id="t5">
          <ul id="menu">
            <a href="#t1"><li class="icon fa fa-bolt" id="uno"></li></a>
            <a href="#t2"><li class="icon fa fa-facebook" id="dos"></li></a>
          </ul>
          <div class="page" id="p1">
             <section class="icon fa fa-bolt"><span class="title">Bolt</span><span class="hint">Like this pen to see the magic!...<br> Just kidding, it won't happen anything but I'll be really happy If you do so.</span></section>  
          </div>
          <div class="page" id="p2">
            <section class="icon">
<!-- Material form login -->
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Sign in</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" style="color: #757575;" action="#!">

      <!-- Email -->
      <div class="md-form">
        <input type="text" id="materialLoginFormName" class="form-control" required>
        <label for="materialLoginFormEName">Name</label>
      </div>

      <div class="md-form">
          <input type="email" class="form-control" required>
          <label for="materialLoginFormEmail">E-Mail</label>
      </div>
      <div class="md-form">
          <input id='phone' type="tel" pattern='[0-9]' class='form-control' maxlength='11' required>
          <label for="phone">Phone</label>
      </div>

      <select name='first[]' class="mdb-select md-form">
        <option value="null" disabled selected>First Preference</option>
        <option value="talent">Talent Committee</option>
        <option value="markting">Markting Committee</option>
        <option value="events">Events Committee</option>
        <option value="preformance">Perfoemance Committee</option>
        <option value="dcr">DCR Committee</option>
        <option value="it">IT Committee</option>
        <option value="jr robotics">Junior Robotics Committee</option>
    </select>
    <select name='second[]' class="mdb-select md-form">
        <option value="null" disabled selected>Second Preference</option>
        <option value="talent">Talent Committee</option>
        <option value="markting">Markting Committee</option>
        <option value="events">Events Committee</option>
        <option value="preformance">Perfoemance Committee</option>
        <option value="dcr">DCR Committee</option>
        <option value="it">IT Committee</option>
        <option value="jr robotics">Junior Robotics Committee</option>
    </select>


      <!-- Password -->
      <div class="md-form">
        <input type="text" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">Mail</label>
      </div>


      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

      <!-- Register -->

      <!-- Social login -->
    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->            </section>
          </div>  
        </div>
  </div>
</div>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mdb.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>