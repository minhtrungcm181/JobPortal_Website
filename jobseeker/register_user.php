   <!DOCTYPE HTML>
   <html>

   <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Job Seeker Registration</title>
       <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
       <!-- <link href="/css/main.css" rel="stylesheet"> -->
       <link href="css/signup_js.css" rel="stylesheet">
       <script type="text/javascript" src="../js/validate.js"></script>
       <script src="../js/jquery-1.12.0.min.js"></script>
       <script src="../js/bootstrap.min.js"></script>
       <script type="text/javascript">
           function checkForm() {

               // Fetching values from all input fields and storing them in variables.
               var email = document.getElementById("emailerror").innerHTML;
               var pass1 = document.getElementById("passerror").innerHTML;
               var pass2 = document.getElementById("passerror2").innerHTML;
               var name = document.getElementById("nameerror").innerHTML;
               var mobno = document.getElementById("mobnoerror").innerHTML;
               var skills = document.getElementById("skillerror").innerHTML;
               //Check input Fields Should not be blanks.
               var p1 = document.getElementById("passnew").value;
               var p2 = document.getElementById("passconf").value;
               if (p1 != p2) {
                   document.getElementById("passerror2").innerHTML = "Password Donot Match";
               } else {
                   document.getElementById("passerror2").innerHTML = "";

               }

               if (email == '' && pass1 == '' && pass2 == '' && name == "" && mobno == '' && skills == '') {
                   //document.getElementById("reguser").submit();
                   return true;
               } else {
                   alert("Fill in with correct information");
                   return false;

               }
           }
       </script>
   </head>
   <body>

       <div class="signup-modal">
           <form id="reguser" onsubmit="return checkForm()" METHOD="post" ACTION="process_user.php" enctype="multipart/form-data">
               <h1> Sign up </h1>
               <div class="form-group row">
                   <div class="col-md-6">
                       <label for="firstname" class="col-6">First name</label>
                       <input id="firstname" type="text" class="form-control" name="firstname" value="" autofocus="">
                   </div>
                   <div class="col-md-6">
                      <label for="lastname" class="col-6">Last name</label>
                       <input id="lastname" type="text" class="form-control" name="lastname" value="">
                   </div>
               </div>
               <div class="form-group">
                   <label for="email"> Email </label>
                   <input type="email" name="useremail" placeholder="Your E-mail" class="form-control" id="email" required onblur="validate('email','emailerror',this.value)">
               </div>

               <div class="form-group">
                   <label for="passnew">Password</label>
                   <input type="password" id="passnew" placeholder="New Password" name="pass1" class="form-control" required onblur="validate('password','passerror',this.value)">
               </div>

               <div class="form-group">
                   <label for=" passconf">Confirm the Password</label>
                   <input type="password" id="passconf" placeholder="Confirm Password" name="pass2" class="form-control" required>
               </div>
               <div class="form-group">
                   <button class="btn btn-lg btn-primary btn-block" type="submit" id="reg" value="submit">Register</button>
               </div>
           </form>
           <p class="text-center">
            Already have an account ?
            <a href="../login.php"> Login</a>
           </p>
       </div>
   </body>

   </html>