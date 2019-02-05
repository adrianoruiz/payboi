<div class="row">
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('name', 'Nome:') !!}
			{!! Form::text('name', null, ['class'=>'form-control', 'ng-model'=>'dados.name', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('email', 'E-mail:') !!}
			{!! Form::text('email', null, ['class'=>'form-control', 'ng-model'=>'dados.email', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('role', 'Selecione o tipo:') !!}
			@if(isset($dados->role))
				{!! Form::select('role', ['admin' => 'Administrador', 'client' => 'Cliente', 'fornPj' => 'Fornecedor Pj', 'fornPf' => 'Fornecedor Pf'  ], $dados->role, ['class'=>'form-control', 'ng-keypress' =>'submitEnter($event)']) !!}
			@else
				{!! Form::select('role', ['admin' => 'Administrador', 'client' => 'Cliente', 'fornPj' => 'Fornecedor Pj', 'fornPf' => 'Fornecedor Pf' ], $role[0], ['class'=>'form-control', 'placeholder' => 'Selecione', 'ng-keypress' =>'submitEnter($event)']) !!}
			@endif
		</div>
	</div>
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('password', 'Senha:') !!}
			{!! Form::password('password', array('class'=>'form-control', 'ng-model'=>'dados.password', 'ng-keypress' =>'submitEnter($event)')) !!}
		</div>
	</div>
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('telephone', 'Telefone:') !!}
			{!! Form::text('telephone', null, ['class'=>'form-control', 'ng-model'=>'dados.telephone', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('cell_phone', 'Celular:') !!}
			{!! Form::text('cell_phone', null, ['class'=>'form-control', 'ng-model'=>'dados.cell_phone', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('site', 'Site:') !!}
			{!! Form::text('site', null, ['class'=>'form-control', 'ng-model'=>'dados.site', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>
	@if( $role[0] != 'fornPj' )
		<div class="col-lg-6">
			<div class="form-group">
				{!! Form::label('cpf', 'CPF:') !!}
				{!! Form::text('cpf', null, ['class'=>'form-control', 'ng-model'=>'dados.cnpj_cpf', 'ng-keypress' =>'submitEnter($event)']) !!}
			</div>
		</div>
	@else
		<div class="col-lg-6">
			<div class="form-group">
				{!! Form::label('cnpj', 'CNPJ:') !!}
				{!! Form::text('cnpj', null, ['class'=>'form-control', 'ng-model'=>'dados.cnpj_cpf', 'ng-keypress' =>'submitEnter($event)']) !!}
			</div>
		</div>
	@endif
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('rg', 'RG:') !!}
			{!! Form::text('rg', null, ['class'=>'form-control', 'ng-model'=>'dados.rg', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('cep', 'Cep:') !!}
			{!! Form::text('cep', null, ['class'=>'form-control', 'ng-model'=>'dados.cep', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('street', 'Rua:') !!}
			{!! Form::text('street', null, ['class'=>'form-control', 'ng-model'=>'dados.street', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('number', 'Número:') !!}
			{!! Form::text('number', null, ['class'=>'form-control', 'ng-model'=>'dados.number', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('state', 'Estado:') !!}
			@if(isset($dados->state))
				{!! Form::select('state', $state, $dados->state, ['class'=>'form-control', 'ng-keypress' =>'submitEnter($event)']) !!}
			@else
				{!! Form::select('state', $state, null, ['class'=>'form-control', 'placeholder' => 'Selecione', 'ng-keypress' =>'submitEnter($event)']) !!}
			@endif

		</div>
	</div>
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('id_city', 'Cidade:') !!}
			@if(isset($dados->id_city))
				{!! Form::select('id_city', $citys, $dados->id_city, ['class'=>'form-control', 'ng-keypress' =>'submitEnter($event)']) !!}
			@else
				{!! Form::select('id_city', [], null, ['class'=>'form-control', 'placeholder' => '...', 'ng-keypress' =>'submitEnter($event)']) !!}
			@endif
		</div>
	</div>
	
</div>


