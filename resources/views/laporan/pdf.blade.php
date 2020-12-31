<page>
	<style type="text/css">
		table {
			padding: 5px;
		}

		/*table, th, td {
			border: 1px solid black;
		} */
		
	</style>
	<table>
		<tr>
			<td>
				<img src="img/logo.png" height="60" alt="User Image">
			</td>
			<td style="width: 100px;"></td>
			<td style="width: 400px;">
				<div style="size: 10px; text-align: center;"><b>REPORT PROYEK<br>
					KANTOR JASA AKUNTAN<br>
					TEDDY ALFONSO</b>
				</div>
				<div style="size: 8px;">
					IZIN USAHA : SK MENKEU RI NOMOR 428/KM.1PPPK/2018
				</div>
			</td>
		</tr>
	</table>
	<hr>
	<br>
	<div id="content">
		<h3 align="center">Laporan {{$laporan->nama}}</h3>
		<table>
			<tr>
				<td>Nama Project </td>
				<td>{{$print[0]->nama}} </td>
			</tr>
			<tr>
				<td>Stakeholder Project </td>
				<td>{{$print[0]->stakeholder}} </td>
			</tr>
			<tr>
				<td>PIC Project </td>
				<td>{{$print[0]->karyawan->nama}} </td>
			</tr>
			<tr>
				<td>Deatline Project </td>
				<td>{{$print[0]->deatline}} </td>
			</tr>
			<tr>
				<td>Status Project </td>
				<td>{{$print[0]->status}} </td>
			</tr>
		</table>
		<br>
		<table border="1" style="border-collapse: collapse;">
			<tr align="center">
				<th style="width: 40px;">NO</th>
				<th style="width: 100px;">Tanggal</th>
				<th style="width: 100px;">Proggress</th>
				<th style="width: 130px;">Laporan</th>
			</tr>
			@foreach($print[0]->histories as $key => $value)
			<tr>
				<td align="center">{{ $key+1 }}</td>
				<td>{{ date('d-m-Y', strtotime($value->tanggal)) }}</td>
				<td>{{ $value->status}}</td>
				<td><a href="{{ asset("storage/file/$value->project_id/$value->laporan")}}" target="_blank"">File</a></td>
			</tr>
			@endforeach
		</table>
	</div>
	<p>Dicetak pada tanggal {{date('d M Y')}} oleh {{Auth::user()->name}}</p>
</page>