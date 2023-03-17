@extends('layouts.master')
@section('content')

     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Category Management</h3>
              </div>
               <div class="card-header">
                <h3 class="card-title"><a href="{{route('category.create')}}">
                  <button type="button" class="btn btn-primary btn-sm">Add</button></h3></a>
              </div> 
              <!-- /.card-header -->
              <div class="card-body">
               
                @if(session()->has('message'))
                 <div class="alert alert-success">
                  {{session()->get ('message')}}
                 </div>
                    @endif
                    
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th style="width: 20px">Title</th>
                      <th style="width: 30px">Status</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                      @foreach($data as $d)
                      <tr>
                        
                         <td> {{$d->id}}</td>
                        <td>{{$d->title}}</td>
                        
                        @if($d->status==0)
                        <td> <span class="badge badge-danger">Deactive</span></td> 
                        
                        @else
                        <td><span class="badge badge-success">Active</span></td> 
                  
                        @endif
                       
                         <td> 
                      <button class="btn btn-warning " type="button" class="btn btn-warning text-dark"> 
                              <a href="{{route('category.edit',$d->id)}}">
                               Edit</button></a>
                            <button  type="button" class="btn btn-danger"> 
                              <a href="{{route('category.delete',$d->id)}}">
                            Delete</button></a>
                  </td>
                  
                  
                  </tr>
                      @endforeach
                    
                       
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
</div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
  </div>
  @endsection