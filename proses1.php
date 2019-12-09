
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informasi</title>
</head>
<body>
    <h3>Informasi Biodata</h3>
    <form>
        <table width="600px">
            <tr>
                <td width="30%"><p id="nama">Nama</p></td>
                <td width="2%">:</td>
                <td width="30%">
                    <?php echo $_POST['nama'] ?>
                </td>
            </tr>
            <tr>
                <td width="30%"><p id="alamat">Alamat</p></td>
                <td width="2%">:</td>
                <td width="30%">
                    <?php echo $_POST['alamat'] ?>
                </td>
            </tr>
            <tr>
                <td width="30%"><p id="jk">Jenis Kelamin</p></td>
                <td width="2%">:</td>
                <td width="30%">
                    <?php echo $_POST['jk'] ?>
                </td>
            </tr>
            <tr>
                <td width="30%"><p id="agama">Agama</p></td>
                <td width="2%">:</td>
                <td width="30%">
                    <?php echo $_POST['sAgama'] ?>
                </td>
            </tr>
            <tr>
                    <td></td>
                    <td></td>
                    <td width="30%">
                        
                    </td>
            </tr>
        </table>
    </form>
</body>
</html>