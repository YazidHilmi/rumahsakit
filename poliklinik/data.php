<?php include_once('../_header.php'); ?>

    <div class="box">
        <h1>Poliklinik<h1>
        <h4>
            <small>Data Poliklinik</small>
            <div class="pull-right">
                <a href="" class="btn-btn-default btn-xs"><i class="glyphicoon glyphicoon-refresh"></i></a>
                <a href="generate.php" class="btn-btn-default btn-xs"><i class="glyphicoon glyphicoon-plus"></i>Tambah Poliklinik</a>
            </div>
        </h4>
        <form methode="post" name="proses">
        <div style="margin-bottom: 20px;">
        <div>
            <form class="form-inline"action="" method="post">
                <div class="form-group">
                    <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-btn-primary"><span class="glyphicon glyphicon-search" aria hidden="true"></span>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Poli</th>
                        <th>Gedung</th>
                        <th>
                            <center>
                                <input type="checkbox" name="select_all" value="">
                            </center>
                        </th>
                    </tr>
            </thead>
            <tbody>
                <?php
                $sql_poli = mysqli_query($con, "SELECT * FROM tb_poliklinik WHERE 0 > ") or die (mysqli_error($con));
                if(mysqli_num_rows($sql_poli) > 0) { 
                    while ($data = mysqli_fetch_array($sql_poli)) { ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data['nama_poli']?></td>
                        <td><?=$data['gedung']?></td>
                        <td align="center">
                            <input type="checkbox" name="checked[]" id="checked" value="<?=$data['id_poli']?>">
                    </tr>                   
                    <?php
                    }
                } else {
                    echo "<tr><td colspan=\"4\" align=\"center\"> Data tidak ditemukan </td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
        </form>

                <div class="box pull-right">
                    <button class="btn btn-warning btn-sm" onclick="edit()"><i class="glyphicoon glyphicoon-edit"></i>Edit</button>
                    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicoon glyphicoon-trash"></i>Hapus</button>
                </div>
</div>
<script>
$(document).ready(function() {
    $("#select_all").pn('click', function() {
        if(this.checked) {
            $('#checked').each(function() {
                this.checked = true;

            })
        } else {
            $('#checked').each(function() {
                this.checked = false;

        }
    });

    $('#checked').on('click', function(){
        if($('.check:checked'). length == $('.checked').length) {
            $('#select_all').prop('checked', true)
        } else {
            $('#select_all').prop('checked', false)
        }
    })
})

function edit() {
    document.proses.action = 'edit.php';
    document.proses.submit();
}

function hapus() {
    var conf = confirm ('Yakin akan menghapus data?'); 
    if(conf) {
        document.proses.action = 'del.php';
        document.proses.submit();
    }
    
}
</script>
    

<?php include_once('../_footer.php');?>