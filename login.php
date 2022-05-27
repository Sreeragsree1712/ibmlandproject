<?php
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Land Registration Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
            <a href="login.php" class="navbar-brand"> </a>
            <span class="navbar-text" style='font-size: 30px; margin-right: 30px'>Land Registration Portal</span>

            <ul class="navbar-nav">
              <li class="nav-item" style='font-size: 20px'> <a href="user-login.php" class="nav-link"> SignIn</a> </li>

            </ul>

        </nav>

        <div class="container">
          <div class="jumbotron">
            <h1>Help you to find land details at online</h1> <br>
            <a href="test.php" type="button" class="btn btn-primary btn-block" style='font-size: 20px'>Sign Up Now</a>
          </div>
        </div>
      </div>

      </header>

    <footer class="page-footer font-small blue">


 <!-- ChatBot -->
<link rel="stylesheet" type="text/css" href="css/jquery.convform.css">
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery.convform.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</head>
<body>
<!-- ChatBot -->
<link rel="stylesheet" type="text/css" href="css/jquery.convform.css">
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery.convform.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</head>
<body>
  
<!-- ChatBot -->
<div class="chat_icon">
	<i class="fa fa-comments" aria-hidden="true"></i>
</div>

<div class="chat_box">
	<div class="my-conv-form-wrapper">
		<form action="" method="GET" class="hidden">
<input type="text" name="name" data-conv-question="Please, Enter your name">

      <select data-conv-question="Hello {name}  How can I help you" name="category">
        <option value="id">find land id</option>
        <option value="imp">contact</option>
      </select>

      <div data-conv-fork="category">
        <div data-conv-case="id">
          <input type="text" name="domainName" data-conv-question="sign in to find your land id">    
        </div>
        <div data-conv-case="imp" data-conv-fork="first-question2">
          <input type="text" name="companyName" data-conv-question="office Number : 0487 2351447"> 
        </div>
      </div>

      
   
     

  	</form>
	</div>
</div>
<!-- ChatBot end -->

    </footer>
  </body>
</html>
