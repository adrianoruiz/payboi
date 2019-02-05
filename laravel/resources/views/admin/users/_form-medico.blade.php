<div class="row">
    <div class="col-lg-8 col-xs-12 col-lg-offset-2">
        <div class="row text-center" ng-if="dados.avatar">
             <img src="@{{dados.avatar}}" 
             class="img-responsive" alt="Image" style="margin:5px auto 10px auto; max-height: 180px;">
         </div>
    </div>
    <div class="col-lg-12">
		<div class="form-group">
			<label for="logomarca">Foto: <small>(jpg, jpeg ou png)</small></label>
		<input type="file" name="image" id="image" class="form-control image" 
		onchange="angular.element(this).scope().uploadFile(this.files)"
		placeholder="Logo Marca" ng-model="dados.image">
			
		</div>
	</div>

    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('name', 'Nome:') !!} {!! Form::text('name', null, ['class'=>'form-control', 'ng-model'=>'dados.name', 'ng-keypress'
            =>'submitEnter($event)']) !!}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('dt_birth', 'Data de nascimento:') !!} {!! Form::text('dt_birth', null, ['class'=>'form-control', 'ng-model'=>'dados.dt_birth',
            'ng-keypress' =>'submitEnter($event)']) !!}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
			{!! Form::label('role', 'Selecione o tipo:') !!}
			@if(isset($dados->role)) 
                {!! Form::select('role', ['admin' => 'Administrador Master', 'adminfilial' => 'Administrador Filial', 'doctor' => 'Médico', 'client' => 'Paciente' ], $dados->role,	['class'=>'form-control', 'ng-keypress' =>'submitEnter($event)', 'readonly' => 'readonly'  ])
                !!}
		
			@else 
            {!! Form::select('role', ['admin' => 'Administrador Master', 'adminfilial' => 'Administrador Filial', 'doctor' => 'Médico', 'client' => 'Paciente'], 'doctor', ['class'=>'form-control', 'placeholder' => 'Selecione', 'ng-keypress' =>'submitEnter($event)','readonly' => 'readonly'])
			!!} 
			@endif
        </div>
    </div>

	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('crm', 'CRM:') !!}
			{!! Form::text('crm', null, ['class'=>'form-control', 'ng-model'=>'dados.crm', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>

    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('cnpj_cpf', 'CPF ou CNPJ:') !!} {!! Form::text('cnpj_cpf', null, ['class'=>'form-control', 'ng-model'=>'dados.cnpj_cpf',
            'ng-keypress' =>'submitEnter($event)']) !!}
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('rg', 'RG:') !!} {!! Form::text('rg', null, ['class'=>'form-control', 'ng-model'=>'dados.rg', 'ng-keypress'
            =>'submitEnter($event)']) !!}
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('email', 'E-mail:') !!} {!! Form::text('email', null, ['class'=>'form-control', 'ng-model'=>'dados.email',
            'ng-keypress' =>'submitEnter($event)']) !!}
        </div>
    </div>

	 <div class="col-lg-2">
		<div class="form-group">
			{!! Form::label('password', 'Senha:') !!}
			{!! Form::text('password', null, ['class'=>'form-control', 'ng-model'=>'dados.password', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>

    <div class="col-lg-2">
        <div class="form-group">
            {!! Form::label('cell_phone', 'Celular:') !!} {!! Form::text('cell_phone', null, ['class'=>'form-control', 'ng-model'=>'dados.cell_phone',
            'ng-keypress' =>'submitEnter($event)']) !!}
        </div>
    </div>
    <div class="col-lg-2">
        <div class="form-group">
            {!! Form::label('telephone', 'Telefone:') !!} {!! Form::text('telephone', null, ['class'=>'form-control', 'ng-model'=>'dados.telephone',
            'ng-keypress' =>'submitEnter($event)']) !!}
        </div>
    </div>



</div>


<div class="row">
    <div class="col-lg-12">
        <h2>Dados Obrigatórios</h2>
        <hr>
    </div>
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('id_specialty', 'Especialidade:') !!}
			@if(isset($dados->id_specialty))
				{!! Form::select('id_specialty', $especialidades , $dados->id_specialty, ['class'=>'form-control', 'ng-keypress' =>'submitEnter($event)']) !!}
			@else
				{!! Form::select('id_specialty', $especialidades , null, ['class'=>'form-control', 'placeholder' => 'Selecione a Especialidade', 'ng-keypress' =>'submitEnter($event)']) !!}
			@endif

		</div>
	</div>
	<div class="col-lg-3">
		<div class="form-group">
			{!! Form::label('service_value', 'Valor da Consulta:') !!}
			{!! Form::text('service_value', null, ['class'=>'form-control', 'ng-model'=>'dados.service_value', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>

	<div class="col-lg-3">
		<div class="form-group">
			{!! Form::label('commission_value', 'Valor Comissão%') !!}
			{!! Form::text('commission_value', null, ['class'=>'form-control', 'ng-model'=>'dados.commission_value', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
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
            {!! Form::label('complement', 'Complemento:') !!} {!! Form::text('complement', null, ['class'=>'form-control', 'ng-model'=>'dados.complement',
            'ng-keypress' =>'submitEnter($event)']) !!}
        </div>
    </div>
     <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('neighborhood', 'Bairro:') !!} {!! Form::text('neighborhood', null, ['class'=>'form-control', 'ng-model'=>'dados.neighborhood',
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
            {!! Form::label('state', 'Estado:') !!} 
            @if(isset($dados->state)) 
                {!! Form::select('state', $state , $dados->state, ['class'=>'form-control',
            'ng-keypress' =>'submitEnter($event)']) !!}
            @else
                {!! Form::select('state', $state , null, ['class'=>'form-control','placeholder' => 'Selecione o Estado', 'ng-keypress' =>'submitEnter($event)']) !!} 
            @endif

        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('id_city', 'Cidade:') !!} 
            @if(isset($dados->id_city))
                {!! Form::select('id_city', $city, $dados->id_city, ['class'=>'form-control', 'ng-keypress' =>'submitEnter($event)']) !!} 
            @else 
                {!! Form::select('id_city', [], null, ['class'=>'form-control', 'placeholder' => 'Selecione o Estado!', 'ng-keypress' =>'submitEnter($event)']) !!} 
            @endif
        </div>
    </div>

</div>




