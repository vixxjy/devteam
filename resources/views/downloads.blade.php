@extends('layouts.main')

@section('style')
<!--<link rel="stylesheet"-->
<!--    href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/css/uikit.min.css">-->
<link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.19/css/dataTables.uikit.min.css">
@endsection

@section('content')
        <main class="body">
            <div class="container uk-margin-medium-top uk-margin-medium-bottom">
               <div>
                    <h3 class="uk-article-title">PDF DOWNLOADS</h3>
                    <!--<p>Please Search for your Student Result by typing in the Candidate Registration Number in the search form </p>-->
                    <hr>
                    <!--<p>Having identified such areas of weakness, close attention is paid to these crop of  </p>-->
                    <!--<p>Suffice it to equally say that the student only exit the probationary module only </p>-->
               </div>
                 <!--tables-->
                     <table id="example" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Title</th>
                                <th>Pdf File</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($pdfs as $pdf)
                             
                            <tr class="">
                                <td>{{$pdf->id}}</td>
                                <td>{{ $pdf->title}}</td>
                                <!--<td><a href="{{secure_asset('pdf/'.$pdf->upload_file)}}" download>{{$pdf->upload_file }}</a></td>-->
                                <td><a href="{{ route('pdf.download', $pdf->uuid) }}">{{$pdf->upload_file }}</a></td>
                            </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>S/N</th>
                                <th>Title</th>
                                <th>Pdf File</th>
                            </tr>
                        </tfoot>
                    </table>
                    <!--end table-->

            </div>
        </main>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script
    src="https://cdn.datatables.net/1.10.19/js/dataTables.uikit.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
 </script>

@endsection
