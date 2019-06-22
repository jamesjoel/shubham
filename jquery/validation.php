<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="../project/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#submit').click(function(){
        var a = $("#full_name").val();
        var b = $("#email").val();
        var c = $("#pass").val();
        var d = $("#re_pass").val();

        var check = true;


        if(a=="")
        {
          check=false;
          $("#full_name_msg").html("Insert Your Full Name");
        }
        else
        {
          $("#full_name_msg").html("&nbsp;");

        }

        if(b=="")
        {
          check=false;
          $("#email_msg").html("Insert Your Email Id");
        }
        else
        {
          var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

          if(reg.test(b)==false)
          {
            check=false;
            $("#email_msg").html("Insert Correct Email Id");
          }
          else
          {
            $("#email_msg").html("&nbsp;");
            
          }


        }
        if(c=="")
        {
          check=false;
          $("#pass_msg").html("Insert Your Password");
        }
        else
        {
          $("#pass_msg").html("&nbsp;");

        }
        if(d=="")
        {
          check=false;
          $("#re_pass_msg").html("Insert Your Re-Password");
        }
        else
        {
          if(c != d)
          {
            check=false;
          $("#re_pass_msg").html("Password and Re-Password not same");
          }
          else
          {
          $("#re_pass_msg").html("&nbsp;");
            
          }

        }





        return check;
      });
    });
  </script>
</head>
<body>
<div class="container">
  <div class="row mt-4">
    <div class="col-md-6 offset-md-3 mt-4">
      <form action="1.php" method="post">
        <div class="form-group">
          <label>Full Name</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
            </div>
          <input type="Text" id="full_name" class="form-control">

          </div>
          <small id="full_name_msg" class="text-danger">&nbsp;</small>

        </div>
       
        <div class="form-group">
          <label>Email</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><b>@</b></span>
            </div>
          <input type="Text" class="form-control" id="email">
        
          </div>
          <small id="email_msg" class="text-danger">&nbsp;</small>

        </div>
        <div class="form-group">
          <label>Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
            </div>
          <input type="password" id="pass" class="form-control">
        
          </div>
          <small id="pass_msg" class="text-danger">&nbsp;</small>

        </div>
         <div class="form-group">
          <label>Re-Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
            </div>
          <input type="password" id="re_pass" class="form-control">
        
          </div>
          <small id="re_pass_msg" class="text-danger">&nbsp;</small>

        </div>
        <input type="submit" id="submit" value="Signup" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
</body>
</html>
