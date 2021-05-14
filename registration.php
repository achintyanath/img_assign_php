<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
   
</head>
<body>
    <div id ="container">
        <div id="details">
            <h1>
                Welcome to Chatbook!
            </h1>
           
        </div>
        <div id="formname">
            <form id="form1">
            <table>
            <tr>
                <div>
                 
                   <td><label for="username">Name</label></td>
                    <td><input type="text" id="username" name="username">
                    <div id ="errormessage" style="display:none">
                    The name must begin with capital letter and should not include numbers. 
                    
                    </div>
                    </td>
               </div>
           </tr>
           <tr>
                <div>
                 
                   <td><label for="user">Userame</label></td>
                    <td><input type="text" id="username" name="username">
                    <div id ="errormessage" style="display:none">
                    Not a unique user. 
                    
                    </div>
                    </td>
               </div>
           </tr>
           <tr>
            <div>
                <td>
                <label for="cityname"> City </label>
                </td>
                <td>
                <input type="text" id="cityname" name="cityname">
                <div id ="errormessage2" style="display:none">
                    The city's name must begin with a capital letter and should not include numbers & special characters. 
                </div>
                </td>
            </div>
            </tr>
            <tr>
             <div>
             <td>Gender</td>
                <td><input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>

                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label><br>
                </td>
            </div>
            </tr>
            <tr>

            <div>
            <td>
                <label for="age">Age</label>
                </td>
                <td>
                <input type="text" id="age" name="age">
                <div id ="errormessage3" style="display:none">
                   Age must be a number between 1-120. 
                </div>
                </td>
                </div>
        </tr>
        <tr>

                <div>
                <td><label for="qualification">Educational Qualification</label></td>
                <td>
                <select id="qualification" name="qualification">

                        <option value="graduate">Graduate</option>
                        <option value="postgrad">Post-Graduate</option>
                        <option value="phd">P.Hd</option>
                       
                </select></td>
            </div>
            </tr>
            <tr>
            <div>
            <td>
                <label for="phonenumber">Phone Number</label>
                </td>
                <td>
                <input type="text" id="phonenumber" name="phonenumber">
                <div id ="errormessage4" style="display:none">
                   Enter a valid phone number. 
                 </div>
                 </td>
            </div>
        </tr>
        <tr>
                <div>
                <td>
                <label for="email">Email</label><br>
                </td>
                <td>
                <input type="text" id="email" name="email">
                <div id ="errormessage5" style="display:none">
                    Enter a valid email-id. 
                  </div>
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
                <div id ="errormessage6" style="display:none">
                    Enter a valid password<br>
                  </div>
                  
                  <div id ="instructions">
                    Atleast 8 characters, one upper letter,one lower letter,one number & one special character.
                  </div>
                  </td>
            </div>
            </tr>
            <tr>
            <div>
            <td>
                <label for="confirmpass">Confirm Password</label>
                </td>
                <td>
                <input type="password" id="confirmpass" name="confirmpass">
                <div id ="errormessage7" style="display:none">
                    Password didn't match.
                  </div>
                </td>
            </div>
            </tr>
            </table>
            <div>
                <button type="submit" form="form1" value="Submit" id ="button" style>Sign Up</button>

            </div>

            </form>
            
        </div>
    </div>
    <script src="registration_js.js"></script>
</body>
</html>