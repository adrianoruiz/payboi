@extends('layouts.admin.app')

@section('title', $headers['title'])

@section('content')
<style>
    .alert{
        padding: 5px;
        margin-bottom: 5px;
        border: 1px solid transparent;
        border-radius: 4px;
    }
</style>

<link rel="stylesheet" href="{!! asset('css/plugins/dataTables/datatables.min.css') !!}" />
	<div ng-controller="contentController"  class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>{{$headers['title']  or 'admin'}}</h5>
					</div>
					<div class="ibox-content">


{{-- INICIO LSITAGEM --}}

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                        <thead>
                            <tr>
                                <th style="width:40px;">ID</th>
                                <th style="width:40px;">Imagem</th> 
                                <th>Título</th> 
                                <th>Sessão</th> 
                                <th>Etapas</th> 
                                <th>Avaliações</th> 
                                <th>View</th> 
                               
                                <th style="width:70px;">Ordem</th>
                                <th style="width:100px;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contents as $row)
                                <tr class="gradeX">
                                    <td>{{ $row->id }}</td>
                                    <td><img src="{!! asset('uploads/conteudos/'.$row->image) !!}" alt="" class="img-responsive" style="max-height:50px;"></td>
                                    <td>{{ $row->title }}</td>
                                    <td>{{ $row->section }}</td>
                                    <td>{{ $row->category }}</td>
                                    <td>
                                        <a href="/admin/evaluation/{{ $row->id }}">
                                        <div class="alert alert-danger">
                                            <strong>Ruim:</strong> {{ $row->ruim }}
                                        </div>
                                        <div class="alert alert-warning">
                                            <strong>Reg.:</strong> {{ $row->regular }}
                                        </div>
                                        <div class="alert alert-info">
                                            <strong>Bom:</strong> {{ $row->bom }}
                                        </div>
                                        </a>
                                    </td>

                                    <td>{{ $row->view }}</td>
                                  
                                    <td> {{ $row->order }} </td>

                                    <td>
                                        <div class="pull-right">
                                        <a href=" {{ route('admin.content.edit', $row->id) }}" class="btn btn-primary" ><i class="fa fa-edit"></i></a>
                                        <button ng-click="delete({{$row->id}})" class="btn btn-danger">
                                        <i class="fa fa-times-circle"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Imagem</th> 
                                <th>Título</th> 
                                <th>Sessão</th> 
                                <th>Categoria</th> 
                                <th style="width:70px;">Ordem</th>
                                <th style="width:100px;">Ações</th>
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
    <script src="{!! asset('js/controller/admin/contentController.js') !!}"></script>
    
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
                "order": [ 5, "asc" ],
                buttons: [
                    // { extend: 'copy'},
                    // {extend: 'csv'},
                    {extend: 'excel', title: 'Conteúdos'},
                    {extend: 'pdf', title: 'Conteúdos'},
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