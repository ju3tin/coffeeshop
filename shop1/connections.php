 <?php 
  
    $server="eu-cdbr-west-02.cleardb.net"; 
    $user="be1251cea96efe"; 
    $pass="f9393f52@"; 
    $db="heroku_421c90367cd9a12"; 
      
    // connect to mysql 
      
    mysql_connect($server, $user, $pass) or die("Sorry, can't connect to the mysql."); 
      
    // select the db 
      
    mysql_select_db($db) or die("Sorry, can't select the database."); 
  
?>


