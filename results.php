<!DOCTYPE html>
<html lang="en">
<head>
  <head>
    <title>BookShelf</title>
    <meta charset="utf-8">
    <link rel="icon" type="image" href="logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="cssstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style>
      input[type=text] {
        width: 200px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 2px;
        font-size: 16px;
        background-color: white;
        background-position: 10px 10px; 
        background-repeat: no-repeat;
        padding: 10px 10px 10px 10px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
        margin-top: 2.5px;
    }
  </style>
</head>

<body>
<div class="image">
  
</div>
<div id="logo">
<img src="logo.png" height="100" width="100">
<strong>BookShelf</strong>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="text-align: center;">
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">New</a></li>
      <li><a href="#">Best</a></li>
      <li><a href="#">Hits</a></li>
      <li><a href="#">Authors</a></li>
      <li><a href="#cat">Categories</a></li>
      <li><a href="#">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><input type="text" name="search" placeholder="Search"></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div id="content">
  <div class="row">
  <div class="col-sm-10">
  <table>
    <tr>
      <td  style="padding: 10px;">
        <img src="1.jpg" class="img-rounded"width="304" height="300">
        <h3>Nature's Magic(1997)<br><br></h3>
      </td>
      <td  style="padding: 10px;">
        <img src="2.jpg" class="img-rounded"width="304" height="300">
        <h3>Story behind The Tajmahal(1997)<br><br></h3>
      </td>
      <td  style="padding: 10px;">
        <img src="3.jpg" class="img-rounded"width="304" height="300">
        <h3>Dusk(2010)<br><br></h3>
      </td>
      
    </tr>

    <tr>
      <td  style="padding: 10px;">
        <img src="4.jpg" class="img-rounded"width="304" height="300">
        <h3>Star War(1996)<br><br></h3>
      </td>
      <td  style="padding: 10px;">
        <img src="5.jpg" class="img-rounded"width="304" height="300">
        <h3>Fault in our stars(2006)<br><br></h3>
      </td>
      <td  style="padding: 10px;">
        <img src="6.jpg" class="img-rounded"width="304" height="300">
        <h3>Monalisa(2001)<br><br></h3>
      </td>
    </tr>

    <tr>
      <td  style="padding: 10px;">
        <img src="7.jpg" class="img-rounded"width="304" height="300">
        <h3>Bhopal Gas Tragedy(1992)<br><br></h3>
      </td>
      <td  style="padding: 10px;">
        <img src="8.jpg" class="img-rounded"width="304" height="300">
        <h3>Annabelle(2017)<br><br></h3>
      </td>
      <td  style="padding: 10px;">
        <img src="9.jpg" class="img-rounded"width="304" height="300">
        <h3>Beauty and beast(2016)<br><br></h3>
      </td>
    </tr>

    <tr>
      <td  style="padding: 10px;">
        <img src="10.jpg" class="img-rounded"width="304" height="300">
        <h3>Corona(1983)<br><br></h3>
      </td>
      <td  style="padding: 10px;">
        <img src="11.jpg" class="img-rounded"width="304" height="300">
        <h3>Nature's Magic 2(1999)<br><br></h3>
      </td>
      <td  style="padding: 10px;">
        <img src="12.jpg" class="img-rounded"width="304" height="300">
        <h3>Man in black(2003)<br><br></h3>
      </td>
    </tr>

    <tr>
      <td  style="padding: 10px;">
        <img src="13.jpg" class="img-rounded"width="304" height="300">
        <h3>Love(2006)<br><br></h3>
      </td>
      <td  style="padding: 10px;">
        <img src="14.jpg" class="img-rounded"width="304" height="300">
        <h3>Albert Einstein(1887)<br><br></h3>
      </td>
      <td  style="padding: 10px;">
        <img src="15.jpg" class="img-rounded"width="304" height="300">
        <h3>Road to success(2005)<br><br></h3>
      </td>
    </tr>
  </table>
  <ul class="pagination">
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">...</a></li>
    <li><a href="#">10</a></li>
  </ul>
  </div>
  <div class="col-sm-2">
    <div style="width: 100%; float: right;">
        <table class="table" style=" width: 100%; border-width: 5px;">
          <thead><h2><br>Follow us on:</h2></thead>
        
          <tr style="background-color: #002966 ;"><td style="text-align: center;"><h4 ><a style="color:black;" href="http://www.facebook.com/bookshelf">Facebook</a></h4></td></tr>
          <tr style="background-color: #1a75ff ;"><td style="text-align: center;"><h4><a style="color: black;" href="http://www.twitter.com/bookshelf">Twitter</a></h4></td></tr>

        </table>
      </div>
      <div style="width: 100%; float: right;" id="cat">
        <table class="table" style=" width: 100%; border-width: 5px; background-color: #101010 ;">
          <thead><h2>Categories:</h2></thead>
        
          <?php
          $dbhost = 'localhost';
          $dbuser = 'root';
          $dbpass = '';
          $db  = 'bookshelf';
          $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

          $sql = "SELECT * FROM categories";


          $retval = mysqli_query($conn,$sql);

          while ($ret_pro=mysqli_fetch_array($retval)) {
            $cat1 = $ret_pro['cat2'];
            echo "<tr><td style='text-align: center;'><h4><a style='color:white;' href='index.php'>$cat1</a></h4></td></tr>";
          }
          ?>

        </table>
      </div>

      <div style="width: 100%; float: right;">
        <table class="table" style=" width: 100%; border-width: 5px; background-color: #101010;">
          <thead><h2><br>Years:</h2></thead>

          <?php
            global $i;
            $i=2017;
            while ($i>=2010) {
              echo "<tr><td style='text-align:center;'><h4><a style='color:white;' href='index.php'>Year $i</a></h4></td></tr>";
              $i--;
            }
            echo "<tr><td style='text-align:center;'><h4><a style='color:white;' href='index.php'>Before $i</a></h4></td></tr>";

          ?>

        </table>
      </div>
    </div>

  </div>
</div>

</div>
<div id="f">
<div class="panel panel-default">
  <div class="panel-body">
    <table class="table table-striped" style="text-align: center;">
    
    <tbody >
      
      <tr>
        <td>About Website</td>
        <td>Books 2017</td>
        <td>Login</td>
        <td>Privacy</td>
      </tr>
      <tr>
        <td>About me</td>
        <td>Books 2016</td>
        <td>Sign up</td>
        <td>Copyrights</td>
      </tr>
      <tr>
        <td>Contact me</td>
        <td>Books 2015</td>
        <td>Store books</td>
        <td>Request for book</td>
      </tr>
      <tr>
        <td></td>
        <td>Books before 2015</td>
        <td></td>
        <td>Upload and earn</td>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="panel-footer" style="text-align: center; margin-top: 20px;">
    &copy;copyright by BookShelf 2017
  </div>
</div>
</div>
</body>

</html>