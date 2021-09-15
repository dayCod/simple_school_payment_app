@extends('layout_admin.main')
@section('contents')
@section('title','CRUD Data Spp') 

<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal">
  Create
  <i class="fa fa-plus-circle"></i>
</button>
            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Data SPP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form action="{{ route('asSpp.store') }}" method="post">@csrf


  <div class="form-group">
    <input type="number" class="form-control" name="tahun" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tahun.." autocomplete="off" required autofocus>
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nominal" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nominal.." autocomplete="off" required autofocus>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
            </br>
            <br>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                  	<th>no</th>
                    <th>tahun</th>
                    <th>nominal</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($data as $dt)
                  <tr>
                    <td align="center">{{$loop->index+1}}</td>
                    <td> {{$dt->tahun}} </td>
                    <td> Rp. {{number_format($dt->nominal)}} </td>
                    <td>
                    	<center>
	                    	<div class="btn-group">
	                    		<a href="{{ action('crudDataSppController@edit', $dt['id']) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                          <a href="{{ action('crudDataSppController@destroy', $dt['id']) }}" class="btn btn-sm btn-danger delete-btn"><i class="fa fa-trash"></i> </a>                         
	                    	</div>
                    	</center>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table><hr>
              <p></p>
            </div>
          </div>
        </div>
      </div>
@endsection