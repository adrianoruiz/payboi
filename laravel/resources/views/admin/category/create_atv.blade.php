@extends('layouts.admin.app')

@section('content')

<!-- Toastr style -->
<link href="{!! asset('css/plugins/toastr/toastr.min.css') !!}" rel="stylesheet">
{{-- autocompletar --}}
<link href="{!! asset('css/plugins/select2/select2.min.css') !!}" rel="stylesheet">


<div ng-controller="categoryActiveController" class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>{{ $headers['title'] or ''}}</h5>
					<button ng-click="resetar()" class="btn btn-w-m bt-sm btn-primary pull-right"> <i class="fa fa-refresh" aria-hidden="true"></i> Resatar categoria </button>
				</div>
				<div class="ibox-content">


					
			@include('admin.category._form_atv')

		<!-- inicio botoes -->
			<div class="form-group">
				<button ng-click="store()" class="btn btn-w-m btn-primary"> Salvar </button>
				<a href="{{ url()->previous() }}" class="btn btn-w-m btn-danger">Cancelar</a>
			</div>
		<!-- fim botoes -->

			<div class="row load" style="display:none;">
				<div class="col-sm-12">
					<div class="progress progress-striped light active">
						<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100">
							<span class="sr-only"></span>
						</div>
					</div>
				</div>
			</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection



@section('scripts')
<!-- // controler do angular  -->
    <script src="{!! asset('js/controller/admin/categoryActiveController.js') !!}"></script>
	 <!-- Toastr -->
    <script src="{!! asset('js/plugins/toastr/toastr.min.js') !!}"></script>
     <!-- Select2 autocomplet -->
    <script src="{!! asset('js/plugins/select2/select2.full.min.js') !!}"></script>

@endsection