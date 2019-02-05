<form action="multipart/form-data">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				{!! Form::label('section_id', 'Sessão:') !!}
				@if(isset($dados->section_id))
					{!! Form::select('section_id', $sections, $dados->section_id, ['class'=>'form-control', 'ng-keypress' =>'submitEnter($event)']) !!}
				@else
					{!! Form::select('section_id', $sections, null, ['class'=>'form-control', 'placeholder' => 'Selecione', 'ng-keypress' =>'submitEnter($event)']) !!}
				@endif
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				{!! Form::label('category_id', 'Etapa:') !!}
				@if(isset($dados->category_id))
					{!! Form::select('category_id', $categorys, $dados->category_id, ['class'=>'form-control',  'ng-keypress' =>'submitEnter($event)']) !!}
				@else
				{!! Form::select('category_id', [], null, ['class'=>'form-control', 'placeholder' => 'Selecione a sessão',  'ng-keypress' =>'submitEnter($event)']) !!}
				@endif

			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="logomarca">Imagem Destaque: <small>(jpg, jpeg ou png)</small></label>
			<input type="file" name="image" id="image" class="form-control image" 
			onchange="angular.element(this).scope().uploadFile(this.files)"
			placeholder="Logo Marca" ng-model="dados.image">
				
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				{!! Form::label('youtube_link', 'Link do video youtube:') !!}
				{!! Form::text('youtube_link', null, ['class'=>'form-control', 'ng-model'=>'dados.youtube_link', 'ng-keypress' =>'submitEnter($event)']) !!}
			</div>
		</div>
		<div class="col-md-10">
			<div class="form-group">
				{!! Form::label('title', 'Título:') !!}
				{!! Form::text('title', null, ['class'=>'form-control', 'ng-model'=>'dados.title', 'ng-keypress' =>'submitEnter($event)']) !!}
			</div>
		</div>

		<div class="col-md-2">
			<div class="form-group">
				{!! Form::label('Ordem', 'Ordem:') !!}
				{!! Form::text('order', null, ['class'=>'form-control', 'ng-model'=>'dados.order', 'ng-keypress' =>'submitEnter($event)']) !!}
			</div>
		</div>
		<div class="col-md-12">

	        <div class="summernote"></div>
	           

			{{-- kljslkdjlkasjkld --}}
			{{-- <div class="form-group">
				{!! Form::label('content', 'Conteúdo:') !!}
				{!! Form::textarea('content', null, ['class'=>'form-control', 'ng-model'=>'dados.content']) !!}
			</div> --}}
		</div>
	</div>
</form>



