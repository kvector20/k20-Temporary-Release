<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="icon" href="img/logo.jpg">
</head>
<body>
<div class="cover">
    <div class="container smooth-scroll">
        <h1 class='animated slower pulse infinite'>Be Different And <span>Join Us</span></h1>
        <a href="#form" class="btn btn-danger btn-rounded">Join Now</a>
    </div>
</div>
<div class="joinus container">
    <div class="container">
<div class="card wow fadeInUp" id='form'>

<h5 class="card-header color white-text text-center py-4">
  <strong>K'20 Second Recruitment</strong>
</h5>

<!--Card content-->
<div class="card-body px-lg-5 pt-0">

  <!-- Form -->
  <form class="text-left" style="color: #757575;" action="data.php" method='post'>
  <div class="md-form animated slower fadeInUp delay-3s">

      <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
       - General Notes : <br>
       * Fill The Form In Engish Please <br>
       * Speical Characters Not Allowed Execpt [ @ , - , _ , . ] <br>
       * Http Link Not Allowed
      </small>

    </div>

    <!-- Email -->
    <div class="md-form animated slower fadeInUp delay-3s">
      <input type="text" id="materialLoginFormName" pattern='[a-z].{2,}' name='name' class="form-control" required>
      <label for="materialLoginFormEName">Name</label>
      <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
       - Enter Your Full Name Without Any Special character Ex : Ahmed Mohamed
      </small>

    </div>

    <div class="md-form animated slower fadeInUp delay-4s">
        <input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name='mail' required>
        <label for="materialLoginFormEmail">E-Mail</label>
        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
       - Enter A Valid E-Mail Ex : Ahmed.123@gmail.com
      </small>

    </div>
    <div class="md-form animated slower fadeInUp delay-5s">
        <input id='phone' type="tel" pattern='[0-9]{11}' name='phone' class='form-control' maxlength='11' required>
        <label for="phone">Phone</label>
        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
       - Enter A Valid Phone Number Ex : 0101110002
      </small>

    </div>

    <select name='first[]' class="browser-default custom-select animated slower fadeInUp delay-5s" style='z-index:1225 !important' required>
      <option value="" disabled selected>First Preference</option>
      <option value="talent">Talent Committee</option>
      <option value="markting">Markting Committee</option>
      <option value="photo">Photography & video making</option>
      <option value="Design">Design Committee</option>
      <option value="Magazine">Magazine Committee</option>
      <option value="project managment">Project Managment Committee</option>
      <option value="events">Events Committee</option>
      <option value="preformance">Perfoemance Committee</option>
      <option value="dcr">DCR Committee</option>
      <option value="it">IT Committee</option>
      <option value="Mobile">Mobile application Committee</option>
      <option value="ui">Ui/Ux Committee</option>
      <option value="jr robotics">Junior Robotics Committee</option>
  </select>


  <select name='second[]' class="browser-default custom-select animated slower fadeInUp delay-5s" style='z-index:1225 !important' required>
  <option value="" disabled selected>Second Preference</option>
      <option value="talent">Talent Committee</option>
      <option value="markting">Markting Committee</option>
      <option value="photo">Photography & video making</option>
      <option value="Design">Design Committee</option>
      <option value="Magazine">Magazine Committee</option>
      <option value="project managment">Project Managment Committee</option>
      <option value="events">Events Committee</option>
      <option value="preformance">Perfoemance Committee</option>
      <option value="dcr">DCR Committee</option>
      <option value="it">IT Committee</option>
      <option value="Mobile">Mobile application Committee</option>
      <option value="ui">Ui/Ux Committee</option>
      <option value="jr robotics">Junior Robotics Committee</option>
  </select>




    <button name='send' class="btn btn-danger btn-rounded btn-block my-4 waves-effect z-depth-0 animated slower fadeInUp delay-5s" type="submit">Send</button>

  </form>
  <!-- Form -->

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