<!DOCTYPE html>
<html>
<head>
	<title>data </title>
</head>
<body>
<center>
			<center><h1>DATA </h1></center>
	<table border="1">
	

		<tr>		
		<th> id </th>
		<th>nama </th>
		<th>jenis kelamin </th>
		<th>alamat </th>


</tr>
<?php
	$no =1;
?>
@foreach ($a as $data)
	<tr>
	 	<td>{{$no++}}</td>
	 	<td>{{$data->nama}}</td>
	 	<td>{{$data->jk}}</td>
	 	<td>{{$data->alamat}}</td>
	 </tr>
	 @endforeach


		

		</table>
		</center>


</body>
</html>