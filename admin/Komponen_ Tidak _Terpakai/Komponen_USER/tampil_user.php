<html>
<body style=background:url("as.png") repeat fixed #000}>
<fieldset style=" background:skyblue;width: 50%; margin: 120px auto ;">
<center><b><h2 style=color:red>User</h2></b></center>
<b>
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
- -</b>

<?php
echo "
<br>
<form method=POST action=form_user.php>
<center><input type=submit value='Tambah User'></center>
</form>
<TABLE align=center BORDER=3>
<tr style=background-color:pink>
<th>no</th><th>username</th>
<th>nama lengkap</th><th>email</th><th>level</th><th>aksi</th></th></tr>";
include "../config/koneksi.php";
$tampil=mysql_query("SELECT * FROM user ORDER BY id_user DESC");
$no=1;
while ($r=mysql_fetch_array($tampil)){
echo "<tr><td>$no</td>
<td>$r[id_user]</td>
<td>$r[nama_lengkap]</td>
<td><a href=mailto:$r[email]>$r[email]</a></td>
<td>$r[level]</td>
<td><a href=edit_user.php?id=$r[id_user]>Edit</a> |
<a href=hapus_user.php?id=$r[id_user]>Hapus</a>
</td></tr>";
$no++;
}
echo "</table>";
?>
</fieldset>
</body>
</html>