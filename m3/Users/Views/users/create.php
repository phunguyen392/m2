<?php
// echo '<br>'.__FILE__;
?>
<form action="index.php?controller=user&action=store" method="post" enctype="multipart/form-data">
    TEN :<br><input type="text" name="name"> <br>
    mail:<br> <input type="text" name="email"> <br>
    
    Mat khau:<br> <input type="text" name="password"> <br>
    SDT:<br> <input type="text" name="phone"> <br>
    anh: <br><input type="file" name="image"> <br>

  
    <input type="submit" value="Them">
</form>