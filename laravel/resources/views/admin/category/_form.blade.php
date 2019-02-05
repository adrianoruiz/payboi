<form action="multipart/form-data">
<div class="row">
	<div class="col-md-6">
		<div class="form-group">

			{!! Form::label('section_id', 'Sessão:') !!}
			@if(isset($dados->section_id))
				{!! Form::select('section_id', $sections, $dados->section_id, ['class'=>'form-control', 'placeholder' => 'Selecione', 'ng-keypress' =>'submitEnter($event)']) !!}
			@else
				{!! Form::select('section_id', $sections, null, ['class'=>'form-control', 'placeholder' => 'Selecione', 'ng-keypress' =>'submitEnter($event)']) !!}
			@endif
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('order', 'Ordem:') !!}
			{!! Form::text('order', null, ['class'=>'form-control', 'ng-model'=>'dados.order', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('name', 'Categoria:') !!}
			{!! Form::text('name', null, ['class'=>'form-control', 'ng-model'=>'dados.name', 
			 'ng-keypress' =>'submitEnter($event)']) !!}
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
		
</div>
</form>

