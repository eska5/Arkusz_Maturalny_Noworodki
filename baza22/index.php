<!DOCTYPE html> 
<html> 
 <head> 
   <meta charset="utf-8"> 
   <title>Projekt bazy danych</title> 
   <link rel="Stylesheet" type="text/css" href="style.css" />
   <meta name="description" content="Baza danych">
   <meta name="keywords" content="baza danych">
   <meta name="author" content="Gal Anonim">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
 <body>

  <div id="header">
    <h1>PROJEKT BAZY DANYCH</h1>
  </div>

  <div id="menu">
    <ul>
      <li><a href="index.php?id=dodaj">A</a></li>
      <li><a href="index.php?id=home">B</a></li>
      <li><a href="index.php?id=dodatkowy">C</a></li>
      <li><a href="index.php?id=pokaz">D</a></li>
      <li><a href="index.php?id=usun">E</a></li>
    </ul>
        
    </nav>
  </div>
  
  <div id="content">
    <p>
    <?php
    
    require('config.inc.php');
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    } 
    

    
    
    $id = isset($_GET['id'])?$_GET['id']:"";
        switch($id)
        {
            case "home": require('home.inc.html'); break;
            case "pokaz": require('pokaz.inc.html'); break;
            case "dodaj": require('dodaj.inc.html'); break;
            case "usun": require('usun.inc.html'); break;
            case "dodatkowy": require('dodatkowy.inc.html'); break;
            default: require('pokaz.inc.html');
        }
mysqli_close($conn);
    ?>
    </p>
  </div>

  <div id="footer">
        &copy; 2018 Gal Anonim
  </div>

</body>
</html>