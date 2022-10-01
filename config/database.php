<?php 
  // // creating constants for account details
  // define('DB_HOST', 'localhost');
  // define('DB_USER', 'sweetretreat');
  // define('DB_PW', 'sweet727');
  // define('DB_NAME', 'sw_application');

  // // making new connection
  // // fix issue where sqli is not working
  // // method 1: continue watching yt vid on how to set up xampp on heroku
  // // method 2: localhost name is not found on heroku so i need to change it (connects to method 1)
  // $conn = new mysqli(DB_HOST, DB_USER, DB_PW, DB_NAME);

  // // checking for connection error
  // if($conn->connect_error) {
  //   die('Connection failed' . $conn->connect_error);
  // }

  //Get Heroku ClearDB connection information
  $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
  $cleardb_server = $cleardb_url["host"];
  $cleardb_username = $cleardb_url["user"];
  $cleardb_password = $cleardb_url["pass"];
  $cleardb_db = substr($cleardb_url["path"],1);
  $active_group = 'default';
  $query_builder = TRUE;
  // Connect to DB
  $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>
