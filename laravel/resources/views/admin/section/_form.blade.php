<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			{!! Form::label('name', 'Sessão:') !!}
			{!! Form::text('name', null, ['class'=>'form-control', 'ng-model'=>'dados.name', 
			 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>
</div>




