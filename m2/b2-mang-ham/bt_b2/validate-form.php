<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
 
<?php
const REQUIRED_MSG = "is required";
 
// định nghĩa các biến và set giá trị mặc định là blank
$tenErr = $emailErr = $gioi_tinhErr = $websiteErr = "";
$ten = $email = $gioi_tinh = $comment = $website = "";
 
// xác thực form bằng PHP
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["ten"])) {
    $tenErr = "ten " . REQUIRED_MSG;
  } else {
    $ten = test_input($_POST["ten"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$ten)) {
      $tenErr = "Only letters and white space allowed"; 
    }
  }
   
  if (empty($_POST["email"])) {
    $emailErr = "Email " . REQUIRED_MSG;
  } else {
    if (!preg_match("/^[a-zA-Z][\\w-]+@([\\w]+\\.[\\w]+
          |[\\w]+\\.[\\w]{2,}\\.[\\w]{2,})$/", $email)) {
      $emailErr = "Invalid email format"; 
    }
  }
     
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*
          [-a-z0-9+&@#\/%=~_|]/i", $website)) {
      $websiteErr = "Invalid URL"; 
    }
  }
 
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
 
  if (empty($_POST["gioi_tinh"])) {
    $gioi_tinhErr = "gioi_tinh " . REQUIRED_MSG;
  } else {
    $gioi_tinh = test_input($_POST["gioi_tinh"]);
  }
}
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
 
<h2>Ví dụ Validate Form trong PHP</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <table>
    <tr>
      <td>ten:</td>
      <td><input type="text" ten="ten">
        <span class="error">* <?php echo $tenErr;?></span>
      </td>
    </tr>
    <tr>
      <td>E-mail:</td>
      <td><input type="text" ten="email">
        <span class="error">* <?php echo $emailErr;?></span>
      </td>
    </tr>
    <tr>
      <td>Website:</td>
      <td><input type="text" ten="website">
        <span class="error"><?php echo $websiteErr;?></span>
      </td>
    </tr>
    <tr>
      <td>Comment:</td>
      <td><textarea ten="comment" rows="5" cols="40"></textarea></td>
    </tr>
    <tr>
      <td>gioi_tinh:</td>
      <td>
        <input type="radio" ten="gioi_tinh" value="nam">nam
        <input type="radio" ten="gioi_tinh" value="nu">nu
        <input type="radio" ten="gioi_tinh" value="khac">khac
        <span class="error">* <?php echo $gioi_tinhErr;?></span>
      </td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" ten="submit" value="gui"></td>
    </tr>
  </table>
</form>
 
<?php
echo "<h2>Thông tin bạn đã nhập:</h2>";
echo $ten;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gioi_tinh;
?>
 
</body>
</html>