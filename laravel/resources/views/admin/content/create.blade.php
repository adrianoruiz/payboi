@extends('layouts.admin.app')

@section('content')

<!-- Toastr style -->
<link href="{!! asset('css/plugins/toastr/toastr.min.css') !!}" rel="stylesheet">

<div ng-controller="contentController" class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>{{ $headers['title'] or ''}}</h5>
				</div>
				<div class="ibox-content">
					
			@include('admin.content._form')

		<!-- inicio botoes -->
			<div class="form-group" style="margin-top:10px">
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

<!-- Summer Editor style -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">


@endsection



@section('scripts')
<!-- // controler do angular  -->
    <script src="{!! asset('js/controller/admin/contentController.js') !!}"></script>
	 <!-- Toastr -->
    <script src="{!! asset('js/plugins/toastr/toastr.min.js') !!}"></script>

   <!-- SUMMERNOTE -->
	 {{-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>  --}}
	  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
	  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

    <script src="{!! asset('summernote-0.8.9/lang/summernote-pt-BR.js') !!}"></script>



    <script>
       $(document).ready(function() {
           $('.summernote').summernote({
			  height: 200,                 // set editor height
			  minHeight: null,             // set minimum height of editor
			  maxHeight: null,             // set maximum height of editor
			  placeholder: 'Digite seu texto aqui...',
			  lang: 'pt-BR' ,			   // verificar para deixar: 'pt-BR'
			   toolbar: [
				    ['style', ['bold', 'italic', 'underline', 'clear']],
				    ['fontname', ['fontname']],
				    ['font', ['strikethrough', 'superscript', 'subscript']],
				    ['fontsize', ['fontsize']],
				    ['color', ['color']],
				    ['picture', ['picture']],
				    ['link', ['link']],
				    ['codeview', ['codeview']],
				    ['fullscreen', ['fullscreen']],
				    ['table', ['table']],
				    ['para', ['ul', 'ol', 'paragraph']],
				    ['height', ['height']]
				  ]

			});

       });

       $('select[name=section_id]').change(function () {
	    var ct = $(this).val();
	    $.get('/admin/content/get_category/' + ct, function (busca) {
	        $('select[id=category_id]').empty();
	            $('select[id=category_id]').append('<option value="">Selecione... </option>');
	        $.each(busca, function (key, value) {
	            $('select[id=category_id]').append('<option value="' + value.id + '">' + value.name + '</option>');
	        });
	    });
	});
    </script>
@endsection