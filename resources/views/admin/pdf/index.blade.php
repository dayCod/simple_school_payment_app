@extends('layout_admin.main')
@section('contents')
@section('title','PDF') 

<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
                <h2>PDF Data</h2><hr>   
            	<table class="table table-borderless">
            		<thead>
            			<tr>
            				<th>Nama Laporan</th>
            				<th >Aksi</th>
            			</tr>
            		</thead>
            		<tbody>
            			<tr>
            				<td># Laporan Pembayaran</td>
            				<form action="{{ route('getValue') }}" method="get" target="_blank">
                                <td>
                                    Start Date:<br>
                                    <input style="width: 200px;" class="form-control" type="date" name="from" value=""><br>  
                                    Until Date:<br> 
                                    <input style="width: 200px;" class="form-control" type="date" name="to" value=""><br>  
                                    <button class="btn btn-md btn-success" type="submit" name="tampil">Tampilkan</button>
                                </td>
                            </form>
            			</tr>
            		</tbody>
            	</table>
            </div>
          </div>
        </div>
</div>

@endsection