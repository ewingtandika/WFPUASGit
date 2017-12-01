<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
	<title>Styled Table - Bootsnipp.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
	<style type="text/css">
		.table-bordered {
			border: 1px solid #dddddd;
			border-collapse: separate;
			border-left: 0;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
		}

		.table {
			width: 100%;
			margin-bottom: 20px;
			background-color: transparent;
			border-collapse: collapse;
			border-spacing: 0;
			display: table;
		}

		.widget.widget-table .table {
			margin-bottom: 0;
			border: none;
		}

		.widget.widget-table .widget-content {
			padding: 0;
		}

		.widget .widget-header + .widget-content {
			border-top: none;
			-webkit-border-top-left-radius: 0;
			-webkit-border-top-right-radius: 0;
			-moz-border-radius-topleft: 0;
			-moz-border-radius-topright: 0;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}

		.widget .widget-content {
			padding: 20px 15px 15px;
			background: #FFF;
			border: 1px solid #D5D5D5;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border-radius: 5px;
		}

		.widget .widget-header {
			position: relative;
			height: 40px;
			line-height: 40px;
			background: #E9E9E9;
			background: -moz-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fafafa), color-stop(100%, #e9e9e9));
			background: -webkit-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
			background: -o-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
			background: -ms-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
			background: linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
			text-shadow: 0 1px 0 #fff;
			border-radius: 5px 5px 0 0;
			box-shadow: 0 2px 5px rgba(0,0,0,0.1),inset 0 1px 0 white,inset 0 -1px 0 rgba(255,255,255,0.7);
			border-bottom: 1px solid #bababa;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9');
			-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9')";
			border: 1px solid #D5D5D5;
			-webkit-border-top-left-radius: 4px;
			-webkit-border-top-right-radius: 4px;
			-moz-border-radius-topleft: 4px;
			-moz-border-radius-topright: 4px;
			border-top-left-radius: 4px;
			border-top-right-radius: 4px;
			-webkit-background-clip: padding-box;
		}

		thead {
			display: table-header-group;
			vertical-align: middle;
			border-color: inherit;
		}

		.widget .widget-header h3 {
			top: 2px;
			position: relative;
			left: 10px;
			display: inline-block;
			margin-right: 3em;
			font-size: 14px;
			font-weight: 600;
			color: #555;
			line-height: 18px;
			text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.5);
		}

		.widget .widget-header [class^="icon-"], .widget .widget-header [class*=" icon-"] {
			display: inline-block;
			margin-left: 13px;
			margin-right: -2px;
			font-size: 16px;
			color: #555;
			vertical-align: middle;
		}
	</style>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="span7" style="width:800px; margin:50px auto; float:none;">
		<br>
		<div style="margin-bottom: 25px;">
			<div style="text-align: right; width: 50%; display: inline-block;">
				NRP:<br>
				Nama:<br>
				Jumlah SKS maksimum yang dapat diambil:
			</div>
			<div style="text-align: left; width: 49%; display: inline-block;">
				<b>{{ $Mahasiswa->nrp }}<br>
			{{ $Mahasiswa->nama }}<br>
				24</b>
			</div>
		</div>
		<div class="widget stacked widget-table action-table">
			<div class="widget-header" style="text-align: center;">
				<!-- <i class="icon-th-list"></i> -->
				<h3>FPP 1</h3>
			</div> 
			<div class="widget-content">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Nomor MK</th>
							<th>Mata Kuliah</th>
							<th>KP</th>
							<th>SKS</th>
							<th class="td-actions">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($Matakuliah as $key => $Matakuliah)
						<tr>
							<td>{{ $Matakuliah->kode_matkul }}</td>
							<td>{{ $Matakuliah->nama }}</td>
							<td>{{ $Matakuliah->kp }}</td>
							<td>{{ $Matakuliah->jumlah_sks }}</td>
					
						
							<td class="td-actions">
								<a href="javascript:;" class="btn btn-small">
									<i class="btn-icon-only icon-remove"></i>										
								</a>
							</td>
						</tr>
					@endforeach
						<tr>
							<td colspan="3" style="text-align: center;">Jumlah SKS</td>
							<td colspan="2" style="text-align: center;">10</td>
						</tr>
					</tbody>
				</table>
			</div> <!-- /widget-content -->
		</div> <!-- /widget -->
		<br>
		<div>
			<form method="POST" action="{{url('/fppa')}}" style="margin: 0 auto; width: 570px;">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}"> 
			<label style="float: left; margin: 10px;">Nomor MK</label>				
				<input type="text" name="kode_matkul" class="span2" style="float:left; margin: 10px;">
				<label style="float: left; margin: 10px;">KP</label>
				<input type="text" name="kp" class="span1" style="float: left; margin: 10px;">

				<input type="submit" value="Add" class="btn btn-primary" style="float: left; margin: 10px;">
			</form>
		</div>
	</div>
	<script type="text/javascript">

	</script>
</body>
</html>
