@extends('backend.layouts.main')

@section('style')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet"
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection

@section('title', 'St Augustines | Events')

  
@section('content')

<div class="wrapper">

@include('backend.partials.sidebar')

    <div class="main-panel">

@include('backend.partials.nav')
            <div class="content">
            <div class="container-fluid">
                <div class="row">
               
                    <div class="col-md-12">
                        <div class="card p-5">
                            <div class="header">
                                <h4 class="title">Add User</h4>
                            </div>
                            <div class="content">
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach()
                                    </div>
                                @endif
                                  @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p><b>{{ $message }}</b></p>
                                    </div>
                                @endif
                                <form action="{{ route('user.store')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Username<span class="text-danger">*</span></label>
                                                <input autofocus type="text" class="form-control border-input" name="username" placeholder="Username" value="{{ old('username') }}" required>
                                                <span class="text-danger">{{ $errors->first('username') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control border-input" name="email" placeholder="Email" value="{{ old('email') }}" required >
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            </div>
                                        </div>
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group">-->
                                        <!--        <label>Author<span class="text-danger">*</span></label>-->
                                        <!--        <input type="text" class="form-control border-input" name="author" placeholder="Event author" value="{{ old('author') }}" required >-->
                                        <!--        <span class="text-danger">{{ $errors->first('author') }}</span>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Role<span class="text-danger">*</span></label>
                                                 <select name="role" class="form-control" >
                                                    <option value="admin">Admin</option>
                                                    <option value="agent">Editor</option>
                                                  
                                                </select> 
                                                <span class="text-danger">{{ $errors->first('role') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password<span class="text-danger">*</span></label>
                                                <input type="password" class="form-control border-input" name="password" placeholder="Password" value="{{ old('password') }}" required >
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            </div>
                                        </div>
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group">-->
                                        <!--        <label>Author<span class="text-danger">*</span></label>-->
                                        <!--        <input type="text" class="form-control border-input" name="author" placeholder="Event author" value="{{ old('author') }}" required >-->
                                        <!--        <span class="text-danger">{{ $errors->first('author') }}</span>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>
                              

                                    <div class="text-center">
                                        <a href="/dashboard" class="btn btn-default">Cancel</a>
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add User</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            
                                          <hr>
                             <!--tables-->
                            <div class="row">
                                <div class="col-md-12">
                                   <table class="table table-bordered table-striped table-condensed" id="table" >
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Username</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Role</th>
                                                
                                                <th class="text-center"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($datas as $data)
                                            <tr class="">
                                                <td>{{$data->id}}</td>
                                                <td>{{ $data->username}}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->role }}</td>
                                               
                                                <td><a href="{{route('edit.user', $data->id)}}"><button id="edit-modal" class="edit-modal btn btn-info">
                                                        <span class="glyphicon glyphicon-edit"></span>
                                                    </button></a>
                                                    <a href="{{route('delete.user', $data->id)}}" onclick="return confirm('Do you really want to delete This?')">
                                                    <button class="delete-modal btn btn-danger">
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                    </button>
                                                    </a>
                                                   
                                                </td>
                                            </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--end table-->

                </div>
           

    @include('backend.partials.footer')


    </div>
</div>
</div>

@endsection
@section('script')
<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    $('.table').DataTable();
} );
 </script>

@endsection

