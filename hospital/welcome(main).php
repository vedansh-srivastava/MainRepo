<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/styles.css">
  </head>
  <body>
    <div class="top-container">

      <nav class="navbar navbar-light bg-light navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="#" style="margin-left:30px;">
            <img src="images/logo.png" alt="" width="50">
          </a>
        </div>

        <div class="d-flex" style="margin-right: 40px;">

         <a class="nav-link active" aria-current="page" href="query.php">Query</a>
         <a class="nav-link active" aria-current="page" href="feedback.php">Feedback</a>
         <a class="nav-link active" aria-current="page" href="aboutus.php">Developer</a>
        </div>

      </nav>


    </div>

    <div class="middle-container">

      <div class="card" style="width: 18rem; margin: 50px 0px 0px 200px; display:inline-block;" >

        <img src="images/patient.png" class="card-img-top" alt="patient-img">
        <center>
          <div class="card-body">
            <h5 class="card-title"><b>Patient</b></h5>
            <p class="card-text">"In an emergency, what treatment is given by ear? Words of Comfort."</p>
            <p class="card-text" style="font-style: italic;">~Abraham Verghese, MD</p><br>
            <a href="patient-login.php" class="btn btn-primary">Login</a>
            <a href="patient-signup.php" class="btn btn-primary">Register</a>
          </div>
        </center>
      </div>

      <div class="card" style="width: 18rem; margin: 50px 0px 0px 100px; display: inline-block;">

        <img src="images/doctor.png" class="card-img-top" alt="doctor-img">
        <center>
          <div class="card-body">
            <h5 class="card-title"><b>Doctor</b></h5>
            <p class="card-text">“The good physician treats the disease; the great physician treats the patient who has the disease.” </p>
            <p class="card-text" style="font-style: italic;">~ William Osler</p>
            <a href="doctor-login.php" class="btn btn-primary">Login</a>

          </div>
        </center>
      </div>

      <div class="card" style="width: 18rem; margin: 50px 0px 0px 100px; display: inline-block;">

        <img src="images/admin.png" class="card-img-top" alt="admin-img">
        <center>
          <div class="card-body">
            <h5 class="card-title"><b>Administration</b></h5>
            <div style="height:5px">

            </div>
            <p class="card-text">“Goals must always be to be happy, healthy and to be surrounded by loved ones.” </p>

            <a href="admin-login.php" class="btn btn-primary">Login</a>

          </div>
        </center>
      </div>

    </div>



    <div class="lower-container">

    </div>

  </body>
</html>
