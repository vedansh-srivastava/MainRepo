<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="stylesheet" href="styles/patient-dashboard-styles.css">
  </head>
  <body>

    <div class="tab">
      <center>
          <button class="tablinks btn btn-outline-dark" onclick="openCity(event, 'Aryan')" id="defaultOpen">Aryan</button><br>
          <button class="tablinks btn btn-outline-dark"" onclick="openCity(event, 'Tejas')">Tejas</button><br>
          <button class="tablinks btn btn-outline-dark"" onclick="openCity(event, 'Vedansh')">Vedansh</button><br>
          <button class="tablinks btn btn-outline-dark"" onclick="openCity(event, 'Khetpal')">Khetpal</button>
        </center>
        </div>

<!-- Tab content -->
        <div id="Aryan" class="tabcontent">
          <h3>Aryan Bro</h3>
          <h1>Mai bhi changa</h1>
        </div>

        <div id="Tejas" class="tabcontent">
          <h3>Tejas Birather</h3>
          <h1>Mera piyo vi changa</h1>
        </div>

        <div id="Vedansh" class="tabcontent">
          <h3>Me dat 1</h3>
          <h1>Mere yaar vi change</h1>
        </div>

        <div id="Khetpal" class="tabcontent">
          <h3>Murena.Anand(Betichod)</h3>
          <h1>Rishtedaar bainchod!</h1>
        </div>
        <br>


    <script type="text/javascript">
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;


    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }


    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }


    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";

  }
  document.getElementById("defaultOpen").click();
    </script>

</html>
