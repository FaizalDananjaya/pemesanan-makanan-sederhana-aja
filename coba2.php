<!DOCTYPE html>
<html>
<head>
<title>Form Pemesanan</title>
</head>
<body>
<script language="JavaScript" type="text/javascript">
function jumlah() 
{
var myForm = document.form1;
var bakso = 12000 * eval(myForm.order1.value);
var soto = 10000 * eval(myForm.order2.value);
var mie = 15000 * eval(myForm.order3.value);
var degan = 5000 * eval(myForm.order4.value);
var campur = 7000 * eval(myForm.order5.value);
var teh = 2000 * eval(myForm.order6.value);
var jeruk = 3000 * eval(myForm.order7.value);
var sweet = 10000 * eval(myForm.order8.value);
var hasil = bakso+soto+mie+degan+campur+teh+jeruk+sweet;
if (hasil > 50000) {
    myForm.total.value = hasil;
    myForm.diskon.value = 10000;
    myForm.bayar.value = hasil - eval(myForm.diskon.value);
 } else {
    myForm.total.value = hasil;
    myForm.diskon.value = 0;
    myForm.bayar.value = hasil - eval(myForm.diskon.value);
 }
}
function resetForm(){
document.form1.reset();
}
</script>
<a href="index.php">
</a>
<form name="form1" action="#">
<font  size="6">PUYUH RESTO</font>
<table border="2" cellspacing=0 cellpadding=5 >
<colgroup align="center">
<colgroup align="center">
<colgroup align="center">
<thead valign="middle">
<tr>
<th width="35"><font color="black" size="4" align="center">No</font>
<th width="200"><font color="black" size="4">Makanan/Minuman</font>
<th width="180"><font color="black" size="4">Harga Satuan</font>
<th width="100"><font color="black" size="4">Pesan</font>
</tr>
<tbody>
<tr>
<td>1<td>Bakso Istimewa<td>@<input  type="text"  value="12000" disabled="true"/><td>
<input  type="text"  name="order1" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>2<td>Soto Spesial<td>@<input  type="text"    value="10000" disabled="true"/><td>
<input  type="text"  name="order2" value="0" onChange="jumlah()" />
</tr>
<tr>
<td>3<td>Mie Ayam Super<td>@<input  type="text"   value="15000" disabled="true"/> <td>
<input  type="text"  name="order3" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>4<td>Es Degan<td>@<input  type="text"   value="5000" disabled="true"/>
<td><input  type="text"  name="order4" value="0" onChange="jumlah()" />
</tr>
<tr>
<td>5<td>Es Campur<td>@<input  type="text"   value="7000" disabled="true"/> <td>
<input  type="text"  name="order5" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>6<td>Es Teh<td>@<input  type="text"   value="2000" disabled="true"/> <td>
<input  type="text"  name="order6" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>7<td>Es Jeruk<td>@<input  type="text"   value="3000" disabled="true"/> <td>
<input  type="text"  name="order7" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>8<td>Ice Sweet Tea<td>@<input  type="text"   value="10000" disabled="true"/> <td>
<input  type="text"  name="order8" value="0" onChange="jumlah()"/>
maaf jika ada kesalahan masih dalam tahap belajar
</tr>
<tr>
<td colspan=3 align="right">Jumlah Total<td><input  type="text"  name="total"/>
</tr>
<tr>
<td colspan=3 align="right">Diskon<td><input  type="text"  name="diskon" />
</tr>
<tr>
<td colspan=3 align="right">Jumlah Bayar<td><input  type="text"  name="bayar" />
</tr>
</table>
<br/>
<?php 
	$namafile = "coba.txt";
	$filehandle = fopen($namafile, 'r')or die("file gagal ditemukan!");
	$datastring = fread($filehandle, 10000);
	fclose($filehandle);
	?>
<input type="button" value="CANCEL" onClick="resetForm()" />
<input type="submit" value="RESET" onClick="jumlah()" />
</form>
</body>
</html>
</html>
