<div class="content">
  <div class="row">
    <a href="?m=supplier&s=tambah" class="btn btn-info">Tambah Supplier</a>
    <h2>Supplier</h2>
    <table class="table table-bordered tabel-hover tabel-striped">
        <thead>
            <th>Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kontak</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            include_once ('koneksi.php');
            $sql ='SELECT * FROM supplier';
            $query = mysqli_query($koneksi, $sql);
            if (mysqli_num_rows($query)==0) {
                echo "<tr><td colspan='5'>Data Kosong</td></tr>";
            }else {
                $no =1;
                while ($r =mysqli_fetch_assoc($query)){
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>". $r['nama']."</td>";
                    echo "<td>". $r['alamat']."</td>";
                    echo "<td>". $r['kontak']."</td>";
                    echo '<td><a href="?m=supplier&s=edit&id=' . $r['id'] . '" class="btn btn-sm btn-warning">Edit</a>&nbsp;
                        <a href="?m=supplier&s=hapus&id=' . $r['id'] . '" onclick="return confirm(\'Menghapus Jurusan akan menghilangkan SEMUA data siswa yang ada pada Jurusan tersebut, yakin Jurusan ini akan dihapus?\')" class="btn btn-sm btn-danger">Hapus</a></td>';
                        $no++;

                }
            }

            ?>
        </tbody>
    </table>
  </div>  
</div>