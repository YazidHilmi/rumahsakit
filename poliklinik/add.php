<?php include_once('../_header.php'); ?>

<div class="box">
        <h1>Poliklinik<h1>
        <h4>
            <small>Data Poliklinik</small>
            <div class="pull-right">
                <a href="data.php" class="btn-btn-warning btn-xs">Data</a>
                <a href="generate.php" class="btn-btn-warning btn-xs">Tambah Data Lagi</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <form action="proses.php" method="post">
                    <input type="hidden" name="total" value="<?=@$_POST['count_add']?>">
                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>Nama Poli</th>
                            <th>Gedung</th>
                        </tr>
                        <?php
                        for ($i=1; $i<=$_POST['count_add']; $i++) { ?>
                            <tr>
                                <td><?=$i ?></td>
                                <td>
                                    <input type="text" name="nama-<?=$i?>" class="form-control" required>
                                </td>
                                <td>
                                    <input type="text" name="nama-<?=$i?>" class="form-control" required>
                                </td>
                        <?php
                        }
                        ?>
                    </table>
                    <div class="form-group pull-right">
                        <input type="submit" name="add" value="Simpan Semua" class="btn-btn-success">
                    </div>
                </form>
        </div>
    </div>
</div>

<?php include_once('../_footer.php'); ?>