<a href="index.php?action=create"> Them moi </a>


<h1 class="m-0 font-weight-bold text-primary">csm3</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>

                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>mail</th>
                        <th>mat khau</th>
                        <th>SDT</th>
                        <th>anh</th>
                        <th>Tùy chọn</th>


                    </tr>

                    <!-- Bắt đầu lặp -->
                    <?php
                    foreach ($items as $r) :
                        // echo '<pre>';
                        // print_r($r);
                        // die();
                    ?>
                        <tr>
                            <td><?php echo $r['id']; ?> </td>
                            <td><?php echo $r['name']; ?> </td>
                            <td><?php echo $r['email']; ?> </td>
                            <td><?php echo $r['password']; ?> </td>
                            <td><?php echo $r['phone']; ?> </td>
                            <td><img width="100" src="<?php echo 'http://localhost/m3/Users/' . $r['image']; ?>" alt=""></td>

                            <td>
                                <a href="index.php?action=edit&id=<?php echo $r['id']; ?>">Sua</a> |
                                <a href="index.php?action=show&id=<?php echo $r['id']; ?>">Xem</a> |
                                <a onclick=" return confirm('ban chac chan k?'); " href="index.php?action=destroy&id=<?php echo $r['id']; ?>">Xoa</a>
                            </td>
                        </tr>

                        <!-- Kết thúc vòng lặp -->
                    <?php endforeach; ?>

                    </tbody>
            </table>
        </div>
    </div>
</div>



