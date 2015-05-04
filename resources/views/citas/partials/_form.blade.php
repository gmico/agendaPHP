<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		
		<div class="form-group">
    {!! Form::label('titol', 'Titol:') !!}
    {!! Form::text('titol') !!}
</div>
<div class="form-group">
    {!! Form::label('lloc', 'Lloc:') !!}
    {!! Form::text('lloc') !!}
</div>
<div class="form-group">
    {!! Form::label('descripcio', 'Descripcio:') !!}
    {!! Form::text('descripcio') !!}
</div>
<div class="form-group">
    {!! Form::label('datacita', 'Data de la cita:') !!}
    {!! Form::input('date','datacita',date('d/m/Y'),['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
 
 
	</body>
</html>
