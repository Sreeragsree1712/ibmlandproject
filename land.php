<?php
session_start();
if (isset($_POST['submit'])) {

  $title = $_POST['submit'];

  include 'dbh.php';
  $im = "SELECT * FROM land WHERE loname = '$title'" ;

  $records = mysqli_query($conn,$im);
  ?>

  <!DOCTYPE html>
  <html lang='en' dir='ltr'>
  <head>
  <meta charset='utf-8'>
  <title><?php echo($title) ?></title>
  <style> body {background-color: lightblue;} </style>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
  </head>
  <body>

        <div class='jumbotron-fluid'>
        <div class='container'>

        <?php
        while($result = mysqli_fetch_assoc($records)){
            $hname = $result['loname'];
            $person = $_SESSION['id'];
            $landid = $result['lno'];
            $nsql = "UPDATE user1 SET lno = '$landid' WHERE id ='$person' ";
            $updatecount = mysqli_query($conn,$nsql);
            ?>

          <br>
          <a href='homepage.php' type='button' class='btn btn-primary' style='font-size: 20px'>Back to Home </a>
          <br><h4 style='display: inline;'><br>Land Owner Name : </h4><h1 style='display: inline;'> <?php echo($result['loname']) ?></h1>
          <br><h4 style='display: inline;' >Place : </h4><h4 style='display: inline;'> <?php echo($result['place']) ?></h4>
          <br><h4 style='display: inline;' >Land Tax : </h4><h4 style='display: inline;'> Rs <?php echo($result['tax']) ?> per month</h4>
          <br><h4 style='display: inline;' >Land Type : </h4><h4 style='display: inline;'> <?php echo($result['ltype']) ?></h4>
          <br><h4 style='display: inline;' >Land Area : </h4><h4 style='display: inline;'> <?php echo($result['area']) ?> sqrt </h4>
          <br><br><br>
<?php
        }
        ?>
        </div>
        </div>
      </body>
      </html>

<?php
}
?>
