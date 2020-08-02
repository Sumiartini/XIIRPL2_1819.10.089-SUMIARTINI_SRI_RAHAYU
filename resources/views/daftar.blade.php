<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
</head>
<body>
@csrf

	<table border="2">
		<tr>
			<td>no</td>
			<td>username</td>
			<td>password</td>
		</tr>

@foreach($a as $b)
		<tr>
			<td>{{$b->id}}</td>
			<td>{{$b->name}}</td>
			<td>{{$b->password}}</td>
		</tr>
@endforeach
	</table>


</body>
</html>