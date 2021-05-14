<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <h1>
    Welcome To Chatbook!
    </h1>
<div id ="container">
<form id="form2" action="check.php" method="post">

    <table>
    
    <tr>
                <div>
                 
                   <td><label for="username">Username</label></td>
                    <td><input type="text" id="username" name="username">
                    
                    </td>
               </div>
     </tr>
     <tr>
            <div>
            <td>
                <label for="password">Password</label>
                </td>
                <td>
                <input type="password" id="password" name="password">
                
                  
                  </td>
            </div>
    </tr>
   <tr>
    <div>
    <td>
                <button type="submit" form="form2" value="Submit" id ="button" style>Log in</button>
</td>
            </div>
            <div>
            <td>
            <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Remember Me<label><br>
</td>
            </div>

            </table>
    </form>
    </table>
    <div id ="reges">
    <p>
    Don't have a account. <a href ="registration.php">Sign in</a>
    </p>

    
    </div>



</body>
</html>

