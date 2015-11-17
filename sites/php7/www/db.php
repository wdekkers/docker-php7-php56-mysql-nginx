<?php
# You can change the database name and password in the docker-compose.yml file 
# Set the values as they are needed for your setup

# Create a new object with the connection data in there
$db = new \stdClass();
$db->host = "192.168.99.100";
$db->port = "3306";
$db->database = "YOUR_DATABASE_NAME";
$db->user = "root";
$db->password = "MY_PASSWORD";

# Make the actual database connection
$mysqli = new \mysqli(
  $db->host,
  $db->user,
  $db->password,
  $db->database,
  $db->port
);

# Set the Charset
$mysqli->set_charset("utf8");
?>