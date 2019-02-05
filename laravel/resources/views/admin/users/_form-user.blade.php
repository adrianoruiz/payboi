<div class="row">
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('name', 'Nome:') !!}
			{!! Form::text('name', null, ['class'=>'form-control', 'ng-model'=>'dados.name', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
    </div>
    
    <div class="col-lg-3">
		<div class="form-group">
			{!! Form::label('dt_nasce', 'Data de nascimento:') !!}
			{!! Form::text('dt_nasce', null, ['class'=>'form-control', 'ng-model'=>'dados.dt_nasce', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
    </div>

	<div class="col-lg-3">
		<div class="form-group">
			{!! Form::label('role', 'Selecione o tipo:') !!}
			@if(isset($dados->role))
				{!! Form::select('role', ['admin' => 'Administrador Master', 
				'adminfilial' => 'Administrador Filial',
				'doctor' => 'Médico', 
				'client' => 'Paciente' ], $dados->role, ['class'=>'form-control', 'ng-keypress' =>'submitEnter($event)']) !!}
			@else
				{!! Form::select('role', ['admin' => 'Administrador Master', 
				'adminfilial' => 'Administrador Filial',
				'doctor' => 'Médico', 
				'client' => 'Paciente' ], 'adminfilial', ['class'=>'form-control', 'placeholder' => 'Selecione', 'ng-keypress' =>'submitEnter($event)']) !!}
			@endif
		</div>
	</div>

    <div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('cnpj_cpf', 'CPF ou CNPJ:') !!}
			{!! Form::text('cnpj_cpf', null, ['class'=>'form-control', 'ng-model'=>'dados.cnpj_cpf', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
    </div>
    
     <div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('cnpj_cpf', 'RG:') !!}
			{!! Form::text('cnpj_cpf', null, ['class'=>'form-control', 'ng-model'=>'dados.cnpj_cpf', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
    </div>

    
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('email', 'E-mail:') !!}
			{!! Form::text('email', null, ['class'=>'form-control', 'ng-model'=>'dados.email', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>

	<div class="col-lg-3">
		<div class="form-group">
			{!! Form::label('password', 'Senha:') !!}
			{!! Form::text('password', null, ['class'=>'form-control', 'ng-model'=>'dados.password', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>
	
	<div class="col-lg-3">
		<div class="form-group">
			{!! Form::label('cell_phone', 'Celular:') !!}
			{!! Form::text('cell_phone', null, ['class'=>'form-control', 'ng-model'=>'dados.cell_phone', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>
	
	
	 <div class="col-lg-12">
        <h2>Endereço</h2>
        <hr>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('street', 'Endereço:') !!} {!! Form::text('street', null, ['class'=>'form-control', 'ng-model'=>'dados.street',
            'ng-keypress' =>'submitEnter($event)']) !!}
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('number', 'Número:') !!} {!! Form::text('number', null, ['class'=>'form-control', 'ng-model'=>'dados.number',
            'ng-keypress' =>'submitEnter($event)']) !!}
        </div>
    </div>

     <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('complemento', 'Complemento:') !!} {!! Form::text('complemento', null, ['class'=>'form-control', 'ng-model'=>'dados.complemento',
            'ng-keypress' =>'submitEnter($event)']) !!}
        </div>
    </div>
     <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('bairro', 'Bairro:') !!} {!! Form::text('bairro', null, ['class'=>'form-control', 'ng-model'=>'dados.bairro',
            'ng-keypress' =>'submitEnter($event)']) !!}
        </div>
    </div>
    
      <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('cep', 'Cep:') !!} {!! Form::text('cep', null, ['class'=>'form-control', 'ng-model'=>'dados.cep', 'ng-keypress'
            =>'submitEnter($event)']) !!}
        </div>
    </div>


    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('state', 'Estado:') !!} @if(isset($dados->state)) {!! Form::select('state', $state , $dados->state, ['class'=>'form-control',
            'ng-keypress' =>'submitEnter($event)']) !!} 
            @else {!! Form::select('state', $state , null, ['class'=>'form-control',
            'placeholder' => 'Selecione o Estado', 'ng-keypress' =>'submitEnter($event)']) !!}
             @endif

        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('id_city', 'Cidade:') !!} @if(isset($dados->id_city)) {!! Form::select('id_city', $city, $dados->id_city,
            ['class'=>'form-control', 'ng-keypress' =>'submitEnter($event)']) !!} 
            @else {!! Form::select('id_city', $city,
            null, ['class'=>'form-control', 'placeholder' => 'Selecione', 
            'ng-keypress' =>'submitEnter($event)']) !!} 
            @endif
        </div>
    </div>

	
</div>


