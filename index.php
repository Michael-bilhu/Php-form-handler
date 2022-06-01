<html>
  <head>
    <title>World's smallest from Handler</title>
  </head>
  <body>
    <h1>World's smallest from Handler</h1>
  <?php
  if(isset($_POST["FirstName"])){//show data
<<<<<<< HEAD
    echo $_POST["FirstName"]
  }else{//show form
    echo '
         <form method ="post" action="">
         <p>First Name: <Input type="text"name 
         ="FirstName"</p>
=======
    echo $_POST["FirstName"];
  }else{//show form
    echo '
         <form method ="post" action="">
         <p>First Name: <input type="text"name="FirstName" /</p>
>>>>>>> 782560a2aaa8c59d3be685c172807a77b6738f17
          <p><input type="Submit" /></p>
         </form>

         ';
  }

?>




    
 
  </body>
</html>
