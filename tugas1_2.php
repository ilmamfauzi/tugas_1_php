<?php
$menu1 = 'Cireng';
$harga1 = 'Rp1.000';
$menu2 = 'Es Duren';
$harga2 = 'Rp15.000';
$menu3 = 'Es Milo';
$harga3 = 'Rp20.000';
$menu4 = 'Es Teh';
$harga4 = 'Rp5.000';
$menu5 = 'Piscok';
$harga5 = 'Rp1.000';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
</head>

<body>
  <h1>DAFTAR MENU</h1>
  <table border="1">
    <tr>
      <td>No</td>
      <td>Nama Menu</td>
      <td>Harga</td>
    </tr>
    <tr>
      <td>1</td>
      <td><?php echo $menu1; ?></td>
      <td><?php echo $harga1; ?></td>
    </tr>
    <tr>
      <td>2</td>
      <td><?php echo $menu2; ?></td>
      <td><?php echo $harga2; ?></td>
    </tr>
    <tr>
      <td>3</td>
      <td><?php echo $menu3; ?></td>
      <td><?php echo $harga3; ?></td>
    </tr>
    <tr>
      <td>4</td>
      <td><?php echo $menu4; ?></td>
      <td><?php echo $harga4; ?></td>
    </tr>
    <tr>
      <td>5</td>
      <td><?php echo $menu5; ?></td>
      <td><?php echo $harga5; ?></td>
    </tr>
  </table>
</body>

</html>