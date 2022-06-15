<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <style >
      span{
        color : red;
      }
    </style>
  </head>
  <body>
    <?php
    $name = $userName = $email = $pass = $cPass = $dob = $gender = $skills = $bloodGroup = "";

    $nameErr = $unameErr = $emailErr = $passErr = $cPassErr = $dobErr = $genderErr = $skillsErr = $bloodGroupErr = "";


    if(isset($_POST["submit"])){

            $error = false;

            //name validation
            if(empty($_POST["name"])){
                $nameErr = "* name cannot be empty";
                $error = true;
            }
            else{
                $name = $_POST["name"];
            }

            //user name validation
            if(empty($_POST["userName"])){
              $unameErr = "* user name cannot be empty";
              $error = true;
            }else if(strlen($_POST["userName"])<2){
              $unameErr = "user name must have atleast two characters.";
              $error = true;
            }else{
                $userName = $_POST["userName"];
              }

            //email validation
            if(empty($_POST["email"])){
                $emailErr = "* email cannot be empty";
                $error = true;
                //$email = "";
            }else{
                $email = $_POST["email"];
            }

            //date of birth validation
            if(empty($_POST["date"])){
                $dobErr = "* date cannot be empty";

                $error = true;
            }
            else{
                $dob = $_POST["date"];
                $d = explode("-", $dob);
                $yy = (int)$d[0];
                $mm = (int)$d[1];
                $dd = (int)$d[2];
            }

            //gender validation
            if(empty($_POST["gender"])){
                $genderErr = "* gender must be checked";

                $error = true;
            }else{
                $gender = $_POST["gender"];
            }

            //password validation
            if(empty($_POST["pass"])){
                $passErr = "* password is required";
                $error = true;
            }else if($_POST["pass"] != $_POST["cPass"]){
                $cPassErr = "* password doesnot match";
                $error = true;
            }else{
                $pass = $_POST["pass"];
            }
            //skills validayion

            if(empty($_POST['skills']))
             {
               $skillsErr = "* skills cannot be empty.";
             }
             //blood group validation
            if (empty($_POST['bloodGroup']))
             {
              $bloodGroupErr = "* Must select a group.";
             }
            else
             {

              $bloodGroup = $_POST["bloodGroup"];
             }

    }

?>
<form action="#" method="post">

  <fieldset>
    <legend><h2>Registration</h2></legend>
    Name: <input type="text" name="name"><span><?php echo $nameErr; ?></span><br>
    <hr>

    E-mail: <input type="email" name="email" ><span><?php echo $emailErr; ?></span><br>
    <hr>

    User name: <input type="text" name="userName" ><span><?php echo $unameErr; ?></span><br>
    <hr>

    Password: <input type="password" name="pass" ><span><?php echo $passErr; ?></span><br>
    <hr>

    Confirm password: <input type="password" name="cPass" ><span><?php echo $cPassErr; ?></span><br>
    <hr>

    Gender:
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="female") echo "checked";?>
    value="female">Female
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="male") echo "checked";?>
    value="male">Male
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="other") echo "checked";?>
    value="other">Other <span><?php echo $genderErr; ?></span><br>
    <hr>


    Date of Birth: <input type="date" name="date"><span><?php echo $dobErr; ?></span><br>
    <hr>

    Blood Group :
    <select name="bloodGroup">
        <option value = "">Select a Group :</option>
        <option <?php if ($bloodGroup == 0) echo 'selected'; ?> value = "0">A+</option>
        <option <?php if ($bloodGroup == 1) echo 'selected'; ?> value = "1">A-</option>
        <option <?php if ($bloodGroup == 2) echo 'selected'; ?> value = "2">B+</option>
        <option <?php if ($bloodGroup == 3) echo 'selected'; ?> value = "3">B-</option>
        <option <?php if ($bloodGroup == 4) echo 'selected'; ?> value = "4">AB+</option>
        <option <?php if ($bloodGroup == 5) echo 'selected'; ?> value = "5">AB-</option>
        <option <?php if ($bloodGroup == 6) echo 'selected'; ?> value = "6">O+</option>
        <option <?php if ($bloodGroup == 7) echo 'selected'; ?> value = "7">O-</option>


   </select>

    <?php if(isset($bloodGroupErr)) echo ('<span class="error"> ' . $bloodGroupErr . '</span>');
     ?>
     <br><br>
<hr>
    Skills:<input type="checkbox" name="skills[]" value="C">C
   <input type="checkbox" name="skills[]" value="C++">C++
   <input type="checkbox" name="skills[]" value="C#">C#
   <input type="checkbox" name="skills[]" value="Python">Python
   <span class="error"> <?php echo $skillsErr;?></span>
   <br><br>
    <input type="submit" value="Submit" name="submit">
  </fieldset>

</form>
  </body>
</html>
