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
                <div class="row">
                    <div class="col-md-12">
                    <table class="table table-bordered table-striped table-condensed" id="table" >
                            <thead>
                                <tr>
                                   
                                    <th class="text-center">Student name</th>
                                    <th class="text-center">Date of birth</th>
                                    <th class="text-center">Gender</th>
                                    <th class="text-center">Class</th>
                                    <th class="text-center">Parent</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">State</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Date</th>  

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                <td>{{ $admission->name}}</td>
                                <td>{{ $admission->birth}}</td>
                                <td>{{ $admission->gender}}</td>
                                <td>{{ $admission->class}}</td>
                                <td>{{ $admission->parent }}</td>
                                <td>{{ $admission->email }}</td>
                                <td>{{ $admission->state}}</td>
                                <td>{{ $admission->phone }}</td>
                                <td>{{ date('F d, Y', strtotime($admission->created_at)) }}</td> 
                                            
                                </tr>
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