<h1 class="mt-4">Peminjaman Buku</h1>
    <div class="card">
    <div class="card-body">
        <div class="row">
        <div class="col-md-12">
            <form method="post">
            <?php
                    if (isset($_POST['submit'])) {
                    $id_buku = $_POST['id_buku'];
                    $id_user = $_SESSION['user']['id_user'];
                    $tggl_peminjaman = $_POST['tggl_peminjaman'];
                    $tggl_pengembalian = $_POST['tggl_pengembalian'];
                    $status_peminjaman = $_POST['status_peminjaman'];

                    $query = mysqli_query($koneksi, "INSERT INTO peminjaman
                    (id_buku,id_user,tggl_peminjaman,tggl_pengembalian,status_peminjaman)
                     values ('$id_buku','$id_user','$tggl_peminjaman','$tggl_pengembalian','$status_peminjaman')");

                        if($query) {
                            echo '<script>alert("Tambah Data Berhasil."); location.href="?page=peminjaman";</script>';
                        }else{
                            echo '<script>alert("Tambah Data Gagal."); </script>';
                        }
                     }
                ?>

               
                    <div class="row mb-3">
                        <div class="col-md-2">
                            Nama Buku Yang Di Pinjam</div>
                        <div class="col-md-8">
                           <select name="id_buku" class="form-control">
                               <?php
                               $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                               while($buku = mysqli_fetch_array($buk)) {
                                   ?>
                                   <option value="<?php echo $buku['id_buku']; ?>"><?php echo $buku ['judul_buku'];?></option>
                                   <?php
                               }
                               ?>
                               </select>
                            </div>
                    </div>

                
                <div class="row mb-3">
                <div class="col-md-2">Tanggal Peminjaman</div>
                <div class="col-md-8">
                <input type="date" class="form-control" name="tggl_peminjaman">
            </div>
              </div>        
                </select>
            </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Tanggal Pengembalian</div>
                <div class="col-md-8">
                    <input type="date" class="form-control" name="tggl_pengembalian">
                            </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-2">Status Peminjaman</div>
                                <div class="col-md-8">
                                    <select name="status_peminjaman" class="form-control">
                                        <option value="dipinjam">Dipinjam</option>
                                        <option value="dikembalikan"Dikembalikan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            <button type="reset" class="btn btn-secondary">Reset </button>
             <a href="?page=peminjam" class="btn btn-danger">Kembali</a>
            </form>
                </div>
            </div>
            </form>
        </div>
        </div>
        <div>