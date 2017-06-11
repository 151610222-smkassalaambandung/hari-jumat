<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">

		<center>

				<h1>daftar :{{$data}} {{$data2}}</h1>

		</center>


	          <br>

		@foreach($query as $datas)
			<li>{{$datas}}</li>
			<hr>
		@endforeach

	</table>

</body>
</html>