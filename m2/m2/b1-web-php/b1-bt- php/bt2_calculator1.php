
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // in du lieu nguoi dung gui len
        echo "<pre>";
        var_dump ($_REQUEST);
        echo "</pre>";
        // gan vao bien
        $so_thu_nhat = $_REQUEST["so_thu_nhat"];
        $so_thu_hai = $_REQUEST["so_thu_hai"];
        $toan_tu = $_REQUEST["toan_tu"];

        // xu ly
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
            default:
            $ket_qua = $so_thu_nhat / $so_thu_hai;

                break;
        }
        echo "ket qua la " . $ket_qua;
    }

    ?>
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
        </select><br>
        <button type="submit">tinh toan</button>
        
    </form>

