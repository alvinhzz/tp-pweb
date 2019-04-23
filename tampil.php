<?php
$no='1.';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="#55ACEE">
  	<center><h1 style="font-family: arial;">Pemesanan</h1></center>
  	<table width="100%">
  		<tr bgcolor="#292F33" style="color: #ffff;">
  			<th>No.</th>
  			<th>Nama</th>
        <th>No. HP</th>
        <th>Alamat</th>
  			<th>Gender</th>
        <th>Seat Class</th>
        <th>Passenger</th>
        <th>Ticket</th>
  			<th>Origin</th>
  			<th>Destination</th>
  			<th>Date</th>
  		</tr>
  		<tr>
			<th><?=$no;?></th>
			<th><?=$_POST ['nama1']."&nbsp".$_POST ['nama2'];?></th>
			<th><?=$_POST ['tlp'];?></th>
			<th><?=$_POST ['alamat'];?></th>
      <th><?=$_POST ['jk'];?></th>
      <th><?=$_POST ['kelas'];?></th>
      <th><?=$_POST ['penumpang'];?></th>
      <th><?=$_POST ['jmlh_tiket'];?></th>
      <th><?=$_POST ['berangkat'];?></th>
      <th><?=$_POST ['datang'];?></th>
      <th><?=$_POST ['tgl']."/".$_POST ['bln']."/".$_POST ['thn'];?></th>
		</tr>
	</table>
</body>
</html>