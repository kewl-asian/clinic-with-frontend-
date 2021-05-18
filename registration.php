
<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration</title>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
<style type="text/css">



</style>
    <div>
      <?php

       ?>
    </div>

    <div >
      <form action="registration.php" method="post" >
          <div class="cointaner">

          <div class="row">
            <div class="col-sm-5">

             <div id="login-box">
         <div class="left">


             <div id="locator">
             <img src="img2/logo.png" width="80" height="80"><br>
             </div>
             <h1 style="text-align:left"> REGISTRATION </h1>



            <p>Fill up the form with correct values</p>
            <hr class="mb-3">
            <label for="firstname"><b>First Name </b></label>
            <input class="form-control" id="firstname" type="text" name="firstname" required>

            <label for="lastname"><b>Last Name </b></label>
            <input class="form-control" id="lastname" type="text" name="lastname" required>

            <label for="emailadd"><b>Email Address </b></label>
            <input class="form-control" id="emailadd" type="emailadd" name="emailadd" placeholder="name@example.com" required>

            <label for="phonenum"><b>Phone Number </b></label>
            <input class="form-control" id="phonenum" type="text" name="phonenum" required>

            <label for="password"><b>Password </b></label>
            <input class="form-control" id="password" type="password" name="password" required>

             <p>By creating an account you agree to our <a href="terms.html">Terms & Conditions</a>.</p>

            <hr class="mb-1">
            <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">

            <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
          </div>
        </div>

      </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script type="text/javascript">
      $(function(){
        $('#register').click(function(e){

          var valid = this.form.checkValidity();
          if(valid){

            var firstname = $('#firstname').val();
            var lastname  = $('#lastname').val();
            var emailadd  = $('#emailadd').val();
            var phonenum  = $('#phonenum').val();
            var password  = $('#password').val();

            e.preventDefault();

            $.ajax({
              type: 'POST',
              url: 'process.php',
              data: {firstname: firstname,lastname: lastname,emailadd: emailadd,phonenum: phonenum,password: password},
              success: function(data){
                Swal.fire({
                  'icon': 'success',
                  'title': 'Successful',
                  'text': data,
                  })
              },
              error: function(data){
                Swal.fire({
                  'icon': 'error',
                  'title': 'Errors',
                  'text': 'There were errors while saving the data.'
                  })
              }
            });

          }else{

          }


          });


      });
    </script>
  </body>
</html>
