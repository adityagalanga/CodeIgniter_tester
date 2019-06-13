<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
        <table border="1" style="border-collapse:collapse;width:50%">
            <tr style="background:gray;">
                <th>No Induk</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
            <?php
            foreach($data as $d){
                echo "<tr>";
                echo "<td>".$d['nim']."</td>";
                echo "<td>".$d['nama']."</td>";
                echo "<td>".$d['alamat']."</td>";
                ?>
                <td align="center">
                <a href="<?php echo base_url()."index.php/crud/edit_data/".$d['nim']; ?>">Edit</a> || 
                <a href="<?php echo base_url()."index.php/crud/do_delete/".$d['nim']; ?>">Delete</a></td>
                <?php
                echo "</tr>";
            }
            ?>
        </table>
        <a href= "<?php echo base_url()."index.php/crud/add_data"; ?>">Tambah Data</a>
    </body>
</html>