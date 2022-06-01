<html>
  <head>
    <title>PHP Test Page</title>
  </head>
  <body>
    <h1>World's smallest from Handler</h1>
  <?php
  if(isset($_POST["FirstName"])){//show data
    echo $_POST["FirstName"]
  }else{//show form
    echo '
         <form method ="post" action="">
         <p>First Name: <Input type="text"name ="FirstName"</p>
          <p><input type="Submit" /></p>
         </form>

         ';
  }

?>




    
 
  </body>
</html>
