<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dewi nurjanah</title>
</head>
<body>
    <form action="" method='POST'>
        <table width='50%' border='1' align='center'>
            <tr>
                <td>Laki-Laki</td>
                <td align='center'>:</td>
                <td><input type='radio' name='lk' value='1'> ADA 
                <input type='radio' name='lk' value='0'> TIDAK ADA</td>
            </tr>
            <tr>
                <td>Perempuan</td>
                <td align='center'>:</td>
                <td><input type='radio' name='pn' value='1'> ADA 
                <input type='radio' name='pn' value='0'> TIDAK ADA</td>
            </tr>
            <tr>
                <td>Penonton</td>
                <td align='center'>:</td>
                <td><input type='radio' name='pt' value='1'> ADA 
                <input type='radio' name='pt' value='0'> TIDAK ADA</td>
            </tr>
            <tr>
                <td colspan='3' align='center'><input type="submit" name='tombol'></td>
            </tr>
        </table>
    <?php
     echo'<table width="50%" border="0" align="center">';
    if(ISSET($_POST['tombol'])){
        $a = $_POST['lk'];
        $b = $_POST['pn'];
        $c = $_POST['pt'];
        echo'<tr><th>hasilnya adalah :</th></tr>';
    if($a == '0' and $b == '0' and $c == '0'){
        echo'<tr><td align="center">TIDAK SAH</td></tr>';
        }
    if($a == '1' and $b == '0' and $c == '0'){
        echo'<tr><td align="center">TIDAK SAH</td></tr>';
        }
    if($a == '0' and $b == '1' and $c == '0'){
        echo'<tr><td align="center">TIDAK SAH</td></tr>';
        }
    if($a == '1' and $b == '0' and $c == '1'){
        echo'<tr><td align="center">TIDAK SAH</td></tr>';
        }
    if($a == '1' and $b == '1' and $c == '1'){
        echo'<tr><td align="center">SAH</td></tr>';
        }
    if($a == '1' and $b == '1' and $c == '0'){
        echo'<tr><td align="center">SAH</td></tr>';
        }
    if($a == '0' and $b == '1' and $c == '1'){
        echo'<tr><td align="center">TIDAK SAH</td></tr>';
        }
    if($a == '1' and $b == '0' and $c == '1'){
        echo'<tr><td align="center">TIDAK TERIMA</td></tr>';
        }
    }else{
        echo'<tr><th>tekan proses untuk mengetahui hasil</th></tr>';
    }
    echo'</table>';
    ?>
    </form>
</body>
</html>
