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
                                   <table class="table table-bordered table-striped table-condensed" id="table" >
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Names</th>
                                                <th class="text-center">Email Address</th>
                                                <th class="text-center">Messages</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">Action</th>
                                              
                                               
                                            

                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($messages as $message)
                                            <tr class="">
                                                <td>{{$loop->index}}</td>
                                                <td>{{ $message->name}}</td>
                                                <td>{{ $message->email }}</td>
                                                <td>{{ $message->message }}</td>
                                                <td>{{ date('F d, Y', strtotime($message->created_at)) }}</td>          
                                                <td>
                                                    <a href="" onclick="return confirm('Do you really want to delete This?')">
                                                    <button class="delete-modal btn btn-danger">
                                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                                    </button>
                                                    </a>
                                                   
                                                </td>
                                            </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>


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