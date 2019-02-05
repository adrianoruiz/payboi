<h2>Dados login</h2>
<div class="row">
	<div class="col-md-8 col-xs-12 col-md-offset-2" ng-if="dados.avatar">
		<div style="background-image: url(@{{dados.avatar}}); width: 100px; height: 100px; background-size: cover;     margin: 0 auto; "  class="img-circle img-center" >
                                        </div>
        {{-- <div class="row text-center" ng-if="dados.avatar">
            <img src="@{{dados.avatar}}"
            class="img-responsive" alt="Image" width="250" style="margin:5px auto 10px auto">
        </div> --}}
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="logomarca">Foto: <small>(jpg, jpeg ou png)</small></label>
            <input type="file" name="image" id="image" class="form-control image"
            onchange="angular.element(this).scope().uploadFile(this.files)"
            placeholder="Logo Marca" ng-model="dados.image">
            
        </div>
    </div>
</div>
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
	{{-- @if(isset($dados->role))
		<div class="col-lg-6">
			<div class="form-group">
				{!! Form::label('role', 'Selecione o tipo:') !!}
					{!! Form::select('role', ['admin' => 'Administrador', 'client' => 'Usuário', 'fornecedor' => 'Fornecedor'], $dados->role, ['class'=>'form-control', 'ng-keypress' =>'submitEnter($event)']) !!}
			</div>
		</div>
	@endif --}}
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('password', 'Senha:') !!}
			{!! Form::password('password', array('class'=>'form-control', 'ng-model'=>'dados.password', 'ng-keypress' =>'submitEnter($event)')) !!}
		</div>
	</div>
	{{-- <div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('telephone', 'Telefone:') !!}
			{!! Form::text('telephone', null, ['class'=>'form-control', 'ng-model'=>'dados.telephone', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div> --}}
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('cell_phone', 'Celular:') !!}
			{!! Form::text('cell_phone', null, ['class'=>'form-control', 'ng-model'=>'dados.cell_phone', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>
	<div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('cnpj_cpf', 'CNPJ/CPF:') !!}
			{!! Form::text('cnpj_cpf', null, ['class'=>'form-control', 'ng-model'=>'dados.cnpj_cpf', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>
</div>


<div class="row">
	{{-- <div class="col-lg-6">
		<div class="form-group">
			{!! Form::label('rg', 'RG:') !!}
			{!! Form::text('rg', null, ['class'=>'form-control', 'ng-model'=>'dados.rg', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div> --}}
	
	<div class="col-lg-4">
		<div class="form-group">
			{!! Form::label('street', 'Rua:') !!}
			{!! Form::text('street', null, ['class'=>'form-control', 'ng-model'=>'dados.street', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>
	<div class="col-lg-4">
		<div class="form-group">
			{!! Form::label('number', 'Número:') !!}
			{!! Form::text('number', null, ['class'=>'form-control', 'ng-model'=>'dados.number', 'ng-keypress' =>'submitEnter($event)']) !!}
		</div>
	</div>
	<div class="col-lg-4">
		<div class="form-group">
			{!! Form::label('cep', 'Cep:') !!}
			{!! Form::text('cep', null, ['class'=>'form-control', 'ng-model'=>'dados.cep', 'ng-keypress' =>'submitEnter($event)']) !!}
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
			@if(isset($dados->id_city) && $dados->id_city != 0)
				{!! Form::select('id_city', $citys, $dados->id_city, ['class'=>'form-control', 'ng-keypress' =>'submitEnter($event)']) !!}
			@else
				{!! Form::select('id_city', [], null, ['class'=>'form-control', 'placeholder' => '...', 'ng-keypress' =>'submitEnter($event)']) !!}
			@endif
		</div>
	</div>
	
</div>
