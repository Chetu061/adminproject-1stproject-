
@extends('layouts.master')
@section('css')
@section('content')


  


     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Management</h3>
              </div>
              <div class="card-header">
                <h3 class="card-title"><a href="{{route('product.create')}}">
                  <button type="button" class="btn btn-primary btn-sm">Add</button></h3></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if(session()->has('message'))
                 <div class="alert alert-success">
                  {{session()->get ('message')}}
                 </div>
                    @endif
                    
           <table class="table table-bordered table-hover" id="dataTable">
                  <thead>
                    <tr>
                      <th style="width:5px">ID</th>
                      <th style="width:10px">Title</th>
                      <th style="width:15px">Description</th>
                      <th style="width:10px">Image</th>
                      <th style="width:10px">Category_id</th>
                      <th style="width:50px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                      @foreach($data as $d)
                       <tr>
                        <td> {{$d->id}}</td>
                        <td>{{$d->title}}</td>
                       <td>{{$d->description}}</td>
                       <td>
                        <img src="{{asset('uploads/'.$d->image)}}"
                       width="50px"
                       height="50px"alt="not image"></td>
                       
                       <td>{{$d->category->title}}</td>
                       <td> 
                         <button  type="button" class="btn btn-warning btn-sm"> 
                           <a href="{{route('product.edit',$d->id)}}">
                          Edit</button> </a>                                             

                          
                            <button  type="button" class="btn btn-danger btn-sm"> 
                             <a href="{{route('product.delete',$d->id)}}"> 

                              Delete</button></a> 
                  </td>
                  </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
 
            </div>
</div>
      </div>
      </div><!-- /.container-fluid -->
     
    </section>
  </div>



  @endsection
  {{-- datatable code --}}
  @push('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js">
  </script>

  <script>

$(document).ready(function() {
  
    $('#dataTable').DataTable();//dataTable is id of <table>
});
</script>
  @endpush

   
 
 
  