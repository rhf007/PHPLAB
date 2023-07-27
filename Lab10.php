<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>


<!-- $fname = $lname = $address = $country = $gender = $skill = $username = $password = $department = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $address = test_input($_POST["address"]);
  $country = test_input($_POST["country"]);
  $gender = test_input($_POST["gender"]);
  $skill = test_input($_POST["fname"]);
  $username = test_input($_POST["fname"]);
  $password = test_input($_POST["fname"]);
  $department = test_input($_POST["fname"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 --> 


    <form method="POST" action="done.php">
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname">
        
        <span class="error">* <?php if(isset($fnameerr))echo $fnameerr;?></span>

        <br>
        <br>

        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname">

        <br>
        <br>

        <label for="address">Address</label>
        <br>
        <textarea name="address" id="address"></textarea>
        <br>
        <br>
        <label for="country">Country</label>
        <select name="country" id="country">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
        </select>

        <br>
        <br>


<!-- 
        <input id="male" type="radio" name="aa" value="male">
        <label for="male">Male</label> -->
<!-- 
        <input type="radio" name="gender" value="female">
        <label for="female">Female</label> -->

        <br>
        <br>

       <!--  <input type="checkbox" value="PHP" name="skill[]" id="PHP">
        <label for="PHP">PHP</label>

        <input type="checkbox" value="J2SE" name="skill[]" id="J2SE">
        <label for="J2SE">J2SE</label>
 -->
        <br>
        <br>

        <!-- <input type="checkbox" value="MySQL" name="skill[]" id="MySQL">
        <label for="MySQL">MySQL</label>

        <input type="checkbox" value="PostgreeSQL" name="skill[]" id="PostgreeSQL">
        <label for="PostgreeSQL">Postgree</label>
 -->
        <br>
        <br>

        <label for="username">Username</label>
        <input type="text" id="username" value="username" name="username">

        <br>
        <br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password">

        <br>
        <br>

        <label for="department">Department</label>
        <input type="text" id="department" name="depatrment">

        <br>
        <br>

        <p id="code" name="code">kfdhvsihv</p>
        <input type="text" id="usercode" name="usercode">
        <input type="submit" value="Submit now" />

        <br>
        <br>


        <!-- <input type="radio" id="html" name="ll" value="HTML"> -->

        <input type="reset" value="Reset" />

    </form>
</body>
</html>