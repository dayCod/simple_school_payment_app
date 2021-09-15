<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.sccs') }}">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h3>Laporan Pembayaran</h3>
		<small class="text-muted">Menampilkan data untuk bulan sekarang yaitu, {{ Carbon\Carbon::parse($date->created_at)->format('M') }}</small><br>
	</center>

	<table style="border: 1px solid black;" width="100%">
			<tr>
				<th style="border: 1px solid; padding: 12px" width="15%">No Pembayaran</th>
				<th style="border: 1px solid; padding: 12px" width="15%">Nama Petugas</th>
				<th style="border: 1px solid; padding: 12px" width="15%">No SPP</th>
				<th style="border: 1px solid; padding: 12px" width="15%">NISN</th>
				<th style="border: 1px solid; padding: 12px" width="15%">Nama</th>
				<th style="border: 1px solid; padding: 12px" width="15%">Bulan&Tahun Dibayar</th>
				<th style="border: 1px solid; padding: 10px" width="15%">Jumlah Dibayar</th>
			</tr>
			@foreach($data as $d)
			<tr>
				<td style="border: 1px solid; padding: 10px;">{{ Carbon\Carbon::parse($d->created_at)->format('Ymds') }}</td>
				<td style="border: 1px solid; padding: 10px;">{{ $d->nama_petugas }}</td>
				<td style="border: 1px solid; padding: 10px;">{{ $d->updated_at->format('ymddhs') }}</td>
				<td style="border: 1px solid; padding: 10px;">{{ $d->nisn }}</td>
				<td style="border: 1px solid; padding: 10px;">{{ $d->nama }}</td>
				<td style="border: 1px solid; padding: 10px;">{{ $d->bulan_dibayar }} {{ $d->created_at->format('Y') }}</td>
				<td style="border: 1px solid; padding: 10px;">{{ $d->jumlah_dibayar }}</td>
			</tr>
			@endforeach
			<tr>
				<td colspan="6" align="right" style="border: 1px solid; padding: 10px;">Total</td>
				<td align="right" style="border: 1px solid; padding: 10px;"><b>Rp. {{ $array->sum('jumlah_dibayar') }} </b></td>
			</tr>
			
	</table>
	<table width="100%">
		<tr>
			<td></td>
			<td width="200px">
				<br>
				<p>Bogor,  {{ Carbon\Carbon::now()->format('d M Y') }} </p>
				<br><br><br><br>
				<p>_________________________</p>
			</td>
		</tr>
	</table>

</body>
</html>