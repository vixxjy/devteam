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
                    <h3 class="uk-article-title">STUDENT ENTRANCE RESULTS</h3>
                    <p>Please Search for your Student Result by typing in the Candidate Registration Number in the search form </p>
                    <hr>
                    <!--<p>Having identified such areas of weakness, close attention is paid to these crop of  </p>-->
                    <!--<p>Suffice it to equally say that the student only exit the probationary module only </p>-->
               </div>
                 <!--tables-->
                     <table id="example" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Exam No</th>
                                <th>Maths</th>
                                <th>Q/R</th>
                                <th>English</th>
                                <th>V/R</th>
                                <th>G Paper</th>
                                <th>Total Score</th>
                                <th>Cumm</th>
                                <th>Remarks</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{ $data->exam_no}}</td>
                                <td>{{ $data->mathematics }}</td>
                                <td>{{ $data->reasoning }}</td>
                                 <td>{{ $data->english}}</td>
                                <td>{{ $data->vreasoning }}</td>
                                <td>{{ $data->general }}</td>
                                 <td>{{ $data->totalscore}}</td>
                                <td>{{ $data->cummulative }}</td>
                                <td><b>{{ $data->remarks }}</b></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                 <th>S/N</th>
                                <th>Exam No</th>
                                <th>Maths</th>
                                <th>Q/R</th>
                                <th>English</th>
                                <th>V/R</th>
                                <th>G Paper</th>
                                <th>Total Score</th>
                                <th>Cumm</th>
                                <th>Remarks</th>
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
