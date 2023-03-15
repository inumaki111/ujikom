<div class= "wrap" >
<div class= "container" >
    
<h3>Tugas 16, 17, 18</h3>

<form action="" method="post">

    <table>
        <tr>
            <td>Nama Barang : </td>
            <td><input type="text" name="barang"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name ="proses"></td>
        </tr>
    </table>
</form>

<?php

include "konekt18.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into uji set
    Barang = '$_POST[barang]'");
}
?>

<table border="1" cellpadding="6" cellspacing="0">
    <tr>
        <th class="kolom">No</th>
        <th class="kolom">Barang</th>
        <th class="kolom">Aksi</th>
    </tr>

    <?php
    
    include "konekt18.php";
    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from uji");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[barang]</td>
            <td><button><a href='?kode=$tampil[barang]'>Hapus</a></button></td>
        </tr>";

        $no++; 
    }
    ?>
</table>
</div>
</div>

<?php
if(isset($_GET['kode'])){
    mysqli_query($koneksi,"delete from uji where barang='$_GET[kode]'");

    echo "<meta http-equiv=refresh content=2;URL='t18.php'>";
}

?>