<h1 class="mt-4">Laporan Peminjam Buku</h1>
<div class="card">
        <a href="cetak.php" target="_blank" class="btn btn-primary"><i class="fa fa-print">

        </i> Cetak Data </a>
        <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Buku</th>
                    <th>Tgl Peminjam</th>
                    <th>Tgl Pengembalian</th>
                    <th>Status Peminjam</th>
                </tr>
                <?php
                $i =1;
                    $query = mysqli_query ($koneksi, "SELECT*FROM peminjaman LEFT JOIN user on 
                    user.id_user = peminjaman.id_user LEFT JOIN buku on buku.id_buku =  peminjaman.id_buku");
                    while($data = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $data['nama']; ?> </td>
                        <td><?php echo $data['judul_buku']; ?> </td>
                        <td><?php echo $data['tggl_peminjaman']; ?> </td>
                        <td><?php echo $data['tggl_pengembalian']; ?> </td>
                        <td><?php echo $data['status_peminjaman']; ?> </td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
    </div>
        </div>
</div>