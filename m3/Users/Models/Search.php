<?php
echo '<pre>';
print_r($search);
?>
<form method="GET" action="index.php?controller=post&action=search">
            <input type="text" name="search">
            <input type="submit" name="timkiem" value="Tìm">
        </form>
<?php
if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $sql = "SELECT * FROM `posts` WHERE `id` LIKE '%$search%'";
      }

?>
