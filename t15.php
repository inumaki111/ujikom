<div class= "wrap" >
<div class= "container" >
    
<h3>Uji kom</h3>

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
        </tr>";

        $no++; 
    }
    ?>
</table>
</div>
</div>