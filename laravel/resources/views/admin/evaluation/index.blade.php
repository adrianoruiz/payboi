@extends('layouts.admin.app')

@section('title', $headers['title'])

@section('content')

<link rel="stylesheet" href="{!! asset('css/plugins/dataTables/datatables.min.css') !!}" />
	<div ng-controller="usersController"  class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>{{$headers['title']  or ''}}</h5>
					</div>
					<div class="ibox-content">


{{-- INICIO LSITAGEM --}}


                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                        <thead>
                            <tr>
                                <th style="width:40px;">ID</th>
                                 <th>Foto</th> 
                                <th>Pessoa</th> 
                                <th>Post</th> 
                                <th>Avaliação</th> 
                                <th>Comentário</th> 
                                <th>Data</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($answer as $row)
                                <tr class="gradeX">
                                    <td>{{ $row->id }}</td>   

                                     <td>
                                        @if($row->avatar) 
                                        <div style="background-image: url({{ $row->avatar }}); width: 80px; height: 80px; background-size: cover; background-position: center top "  class="img-circle" >
                                        </div>
                                        
                                        @else
                                        <div style="background-image: url('http://www.coacep.org/img/avatar.jpg'); width: 80px; height: 80px; background-size: cover; background-position: center top "  class="img-circle" >
                                        </div>

                                        @endif
                                    </td>

                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->title}}</td>
                                    <td>
                                    	@if($row->evaluation==1)
                                    	<div class="alert alert-danger">
                                    		<strong>Ruim</strong> 
                                    	</div>
                                    		
                                    	@endif
                                    	@if($row->evaluation==2)
                                    	<div class="alert alert-warning">
                                    		<strong>Regular</strong> 
                                    	</div>
                                    		
                                    	@endif
                                    	@if($row->evaluation==3)
                                    	<div class="alert alert-success">
                                    		<strong>Bom</strong> 
                                    	</div>
                                    		
                                    	@endif
                                    </td>
                                    <td>{{ $row->comment }}</td>
                                    <td>{{ $row->data_pt }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                             <tr>
                                <th style="width:40px;">ID</th>
                                <th>Pessoa</th> 
                                <th>Post</th> 
                                <th>Avaliação</th> 
                                <th>Comentário</th> 
                                <th>Data</th> 
                            </tr>
                        </tfoot>
                    </table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

    <!-- // controler do angular  -->
    <script src="{!! asset('js/controller/admin/usersController.js') !!}"></script>
    
	<!-- datatable -->
	<script src="{!! asset('js/plugins/dataTables/datatables.min.js') !!}"></script>
	
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){

            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                "language": {
                    "url": "/js/plugins/dataTables/Portuguese-Brasil.json"
                },
                "order": [ 0, "desc" ],
                buttons: [
                    // { extend: 'copy'},
                    // {extend: 'csv'},
                    {extend: 'excel', title: 'Usuários'},
                    {extend: 'pdf', title: 'Usuários'},
                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');
                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>

@endsection