<html>
   <head>
      <title>Login Page</title>
      <link rel="stylesheet" type="text/css" href="./CHTglike.css">
   </head>
   
   <body>
	
      <div align = "center">
         <div style = " background-color:lightpink; width:300px; border: solid 2px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px; font-family: Tahoma, Verdana, sans-serif;"><b>Login</b></div>
				
            <div style = "margin:30px;font-family: Tahoma, Verdana, sans-serif;">
               
               <form action = "http://codd.cs.gsu.edu/~kgarrett10/CHTDash.html method" = post>
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
				  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
				  <label>Remember Me </label><input type = "checkbox" name = "remember" class = "box" /> <br/><br />
				
                  <input style="font-family: Tahoma, Verdana, sans-serif;" type = "submit" value = " Submit "/><br />
               </form>
					
            </div>
				
         </div>
			
      </div>

   </body>

<?php if(!empty($_POST["remember"])) {
						setcookie ("username",$_POST["username"],time()+ 300);
						setcookie ("password",$_POST["password"],time()+ 300);
						echo "Cookies Set Successfuly";
							} else {
						setcookie("username","");
						setcookie("password","");
	echo "Cookies Not Set";
}

?>
</html>
