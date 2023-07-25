<form action="" method="post">
    so thu nhat:<br>
    <input type="number" name="so_thu_nhat" value=""><br>
    so thu hai:<br>
    <input type="number" name="so_thu_hai" value=""><br>
    <select name="toan_tu" id="">
        <option value="cong">cong</option>
        <option value="tru">tru</option>
        <option value="nhan">nhan</option>
        <option value="chia">chia</option>
        <option value="binh phuong">binh phuong</option>
        <option value="can bac hai">can bac hai</option>

    </select><br>
    <button type="submit">tinh toan</button>

</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // in du lieu nguoi dung gui len
    // echo "<pre>";
    // var_dump($_REQUEST);
    // echo "</pre>";
    // gan vao bien
    $so_thu_nhat = $_REQUEST["so_thu_nhat"];
    $so_thu_hai = $_REQUEST["so_thu_hai"];
    $toan_tu = $_REQUEST["toan_tu"];

    // xu ly
    try {
        switch ($toan_tu) {
            case 'cong':
                $ket_qua = $so_thu_nhat + $so_thu_hai;
                break;
            case "tru":
                $ket_qua = $so_thu_nhat - $so_thu_hai;
                break;
            case "nhan":
                $ket_qua = $so_thu_nhat * $so_thu_hai;
                break;
            case "binh phuong":
                if ($so_thu_nhat) {
                    $ket_qua = $so_thu_nhat * $so_thu_nhat;
                }else{
                    $ket_qua = $so_thu_hai * $so_thu_hai;
                }
                break;
             case "can bac hai":
                if($so_thu_nhat){
                    $ket_qua = sqrt($so_thu_nhat);
                }   else{
                    $ket_qua = sqrt($so_thu_hai);
                }
                break;
            default:
                if ($so_thu_hai == 0) {
                    throw new Exception("Làm sao mà chia cho 0 được mà còn chia -_-");
                }
                $ket_qua = $so_thu_nhat / $so_thu_hai;
                break;
        }
        echo "ket qua la " . $ket_qua;
    } catch (Exception $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}


?>
