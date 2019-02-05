@extends('layouts.admin.app')

@section('title', $headers['title'])

@section('content')

<link rel="stylesheet" href="{!! asset('css/plugins/dataTables/datatables.min.css') !!}" />
	<div ng-controller="clientController"  class="wrapper wrapper-content animated fadeInRight">
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
                                <th>Imagem</th> 
                                <th>Nome</th> 
                                <th>Fantasia</th> 
                                <th>E-mail</th> 
                                <th>Data cadastro</th> 
                                <th>status</th> 
                                <th style="width:100px;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dados as $row)
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
                                    <td> .. </td>
                                    <td>{{ $row->email }}</td>
                                    <td> {{ $row->created_at->format("d/m/Y") }}</td>
                                    <td>
                                        @if( $row->status != '1')
                                            <span class="label label-warning ">Inativo</span>
                                        @else
                                            <span class="label label-primary">Ativo</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="pull-right">
                                        <button ng-click="aceitarParceiro({{$row->id}})" class="btn btn-primary" ><i class="fa fa-check"></i></button>
                                        <button ng-click="rejeitarParceiro({{$row->id}})" class="btn btn-warning">
                                        <i class="fa fa-times-circle"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                Sem solicitações no momento!
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th> 
                                {{-- <th>Celular</th>  --}}
                                <th>E-mail</th> 
                                <th>Data cadastro</th> 
                                <th>Perfil</th> 
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
    <script src="{!! asset('js/controller/admin/clientController.js') !!}"></script>
    
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
                    {extend: 'excel', title: 'Aprovação de Parceiros'},
                    {extend: 'pdf', title: 'Aprovação de Parceiros'},
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