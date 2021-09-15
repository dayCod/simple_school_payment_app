<!DOCTYPE html>
<html>
<head>
	<title>BUKTI PEMBAYARAN SPP | SCHOOL SPP APP</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.sccs') }}">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
		h4{
			margin-top: 10pt;
		}
		@media print{
			#print{
				display: none;
			}
		}
	</style>
	<center>
		<h4>Aplikasi Pembayaran Spp</h4>
		<H3>BUKTI TRANSAKSI PEMBAYARAN</H3>
	</center><br>
	<a href="#" class="btn btn-primary" id="print" onclick="window.print()">Lihat PDF</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th align="center">No Pembayaran</th>
				<th align="center">Nama Petugas</th>
				<th align="center">No SPP</th>
				<th align="center">NISN</th>
				<th align="center">Nama</th>
				<th align="center">Bulan Dibayar - Sampai Bulan</th>
				<th align="center">Tahun Dibayar</th>
				<th align="center">Jumlah Dibayar</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $d)
			<tr>
				<td>{{ Carbon\Carbon::parse($d->created_at)->format('Ymds') }}</td>
				<td>{{ $d->nama_petugas }}</td>
				<td>{{ $d->updated_at->format('ymddhs') }}</td>
				<td>{{ $d->nisn }}</td>
				<td>{{ $d->nama }}</td>
				@if($d->bulan_dibayar == $d->sampai_bulan)
				<td align="center">{{ $d->bulan_dibayar }}</td>
				@elseif($d->bulan_dibayar != $d->sampai_bulan)
				<td>{{ $d->bulan_dibayar }} - {{ $d->sampai_bulan }}</td>
				@endif
				<td>{{ $d->created_at->format('Y') }}</td>
				<td>Rp. {{ number_format($d->jumlah_dibayar) }}</td>
			</tr>
			@endforeach
			<tr>
				<td colspan="7" align="right">Total</td>
		
 				<td align="right"><b>Rp. {{ number_format($array->sum('jumlah_dibayar')) }} </b></td>
 			
 				
			</tr>
		
		</tbody>
	</table>
	<table width="100%">
		<tr>
			<td></td>
			<td width="200px">
				<br>
				<p>Bogor, {{ Carbon\Carbon::now()->format('d M Y') }} </p>
				<br><br><br><br>
				<p>_________________________</p>
			</td>
		</tr>
	</table>
</body>
</html>