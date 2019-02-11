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

@section('title', 'St Augustines | pdf')

  
@section('content')

<div class="wrapper">

@include('backend.partials.sidebar')

    <div class="main-panel">

@include('backend.partials.nav')
            <div class="content">
            <div class="container-fluid">
                <div class="row">
               
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Pdf</h4>
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
                                <form action="{{ route('pdf.add')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="image">Image<span class="text-danger"> [Max 2MB] *</span></label>
                                                <input  type="file" class="form-control border-input" accept=".pdf" name="upload_file" placeholder="Upload file" required>
                                                <span class="text-danger">{{ $errors->first('upload_file') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Title<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control border-input" name="title" placeholder="Title" value="{{ old('title') }}" required min="0">
                                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <a href="/dashboard" class="btn btn-default">Cancel</a>
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add PDF</button>
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
                                                <th class="text-center">Title</th>
                                                <th class="text-center">Pdf File</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($pdfs as $pdf)
                                     
                                            <tr class="">
                                                <td>{{$pdf->id}}</td>
                                                <td>{{ $pdf->title}}</td>
                                                <!--<td><a href="{{secure_asset('pdf/'.$pdf->upload_file)}}" download>{{$pdf->upload_file }}</a></td>-->
                                                <td><a href="{{ route('pdf.download', $pdf->uuid) }}">{{$pdf->upload_file }}</a></td>
                                                <td>
                                                    <!--<a href=""><button id="edit-modal" class="edit-modal btn btn-info">-->
                                                    <!--    <span class="glyphicon glyphicon-edit"></span> Edit-->
                                                    <!--</button></a>-->
                                                    <a href="{{ route('pdf.delete', $pdf->id) }}" onclick="return confirm('Do you really want to delete This?')">
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
                            <!--end table-->
                        </div>
                    </div>


                </div>
            </div>
        </div>

@include('backend.partials.footer')

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