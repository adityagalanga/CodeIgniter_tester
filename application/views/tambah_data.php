<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
        <form method="POST" action="<?php echo base_url()."index.php/crud/do_insert"; ?>">
        <table border="0" style="border-collapse:collapse;">
            <tr>
                <td>
                    No Induk
                </td>
                <td>
                    <input type="text" name="nim"/>
                </td>
            </tr>
            <tr>
                <td>
                    Nama
                </td>
                <td>
                    <input type="text" name="nama"/>
                </td>
            </tr>
            <tr>
                <td>
                    Alamat
                </td>
                <td>
                    <input type="text" name="alamat"/>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btnSubmit" value="simpan"/>
                </td>
            </tr>
        </table>
    </form>
    </body>
</html>