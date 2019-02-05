@extends('layouts.admin.app')

@section('content')

<!-- Toastr style -->
<link href="{!! asset('css/plugins/toastr/toastr.min.css') !!}" rel="stylesheet">

<div ng-controller="usersController" class="wrapper wrapper-content animated fadeInRight">

	<div class="row" >
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>{{ $headers['title'] or 'admin'}}</h5>
				</div>
				<div class="ibox-content">
			
				@include('admin.users._form')

					<input type="hidden" id="id_dado" value="{{$dados->id}}">
				<!-- inicio botoes -->
					<div class="form-group">
						<button ng-click="update({{$dados->id}})" class="btn btn-w-m btn-primary"> Salvar </button>
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
				

	<!-- {!!  url()->current(); !!} -->
					<?php
				
// $parameters = \Request::segment(4);

					?>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


@section('scripts')
<script>
</script>
<!-- // controler do angular  -->
    <script src="{!! asset('js/controller/admin/usersController.js') !!}"></script>
	 <!-- Toastr -->
    <script src="{!! asset('js/plugins/toastr/toastr.min.js') !!}"></script>
    <script src="{{ asset('js/plugins/masked/maskedinput.js') }}"></script>
    
@endsection