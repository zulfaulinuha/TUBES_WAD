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
			<td style="width: 75px;"></td>
			<td style="width: 550px;">
				<div style="size: 10px; text-align: center;"><b>REPORT ASSET<br>
					FAKULTAS REKAYASA INDUSTRI<br>
					TEKNIK INDUSTRI - TELKOM UNIVERSITY</b>
				</div>
				<div style="size: 8px;">
					Jl Telekomunikasi No.1 Terusan Buah Batu, Gedung Karang, Bandung, Jawa Barat 40257
				</div>
			</td>
		</tr>
	</table>
	<hr>
	<br>
	<div id="content">
		<table border="1" style="border-collapse: collapse;">
			<tr align="center">
				<th style="width: 40px;">NO</th>
				<th style="width: 225px;">Instansi</th>
				<th style="width: 120px;">Hardware Type</th>
				<th style="width: 130px;">Serial Number</th>
				<th style="width: 100px;">Jenis</th>
				<th style="width: 100px;">Tgl. Pembelian</th>
				<th style="width: 125px;">Harga</th>
				<th style="width: 100px;">Jangka Waktu</th>
				<th style="width: 110px;">Status</th>
			</tr>
			@foreach($asset as $key => $value)
			<tr>
				<td align="center">{{ $key+1 }}</td>
				<td>{{ $value->cabang->name}}</td>
				<td>{{ $value->hardware_type }}</td>
				<td>{{ $value->serial_number }}</td>
				<td>{{ $value->jenis->name }}</td>
				<td>{{ date('d-m-Y', strtotime($value->tanggal_pembelian)) }}</td>
				<td>Rp {{number_format($value->harga, 0, ',', '.')}}</td>
				<td>{{ date('d-m-Y', strtotime($value->jangka_waktu)) }}</td>
				<td>{{ $value->status->name}}</td>
			</tr>
			@endforeach
		</table>
	</div>
	<p>Dicetak pada tanggal {{date('d M Y')}} oleh {{Auth::user()->name}}</p>
</page>