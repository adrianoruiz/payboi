<div class="row">
	
	<div class="col-md-12">
		<div class="form-group">

			<select name="category"  ng-model="dados.category" 
			ng-change="chamaAtv()" id="category"  
			 class="form-control select2_autocomplete" required="required">
				<option></option>
				@foreach ($categorys as $row)
					<option value="{{ $row->id }}" >{{ $row->name }}</option>
				@endforeach
			</select>
			
		</div>
	</div>

</div>

<div class="row">
	<div class="col-md-12">
		<h4>Atividades:</h4>
	</div>
</div>

<div class="row">
@foreach($activitys as $key => $row)
	<div class="col-md-3">
		<div class="checkbox">
		  <label>

		  	<input type="checkbox" class="atividades" 
		    id="atividade_{{ $row->id }}" ng-change="true" 
		  	ng-model="checkboxModel.value{{ $row->id }}" ng-click="remove({{ $key}},{{ $row->id }})"
		  	ng-true-value="'{{ $row->id }}'" {{-- ng-false-value="'{{ $row->id }}_NO'" --}}>
		  	{{ $row->description }}
			
			<!-- @{{ checkboxModel.value<?php echo $row->id; ?>  }} -->
		  </label> 

		  	<input type="text"
			 class="form-control order" id="order_{{ $row->id }}" ng-model="order.value{{ $row->id }}"
		  	 name="order_{{ $row->id }}" placeholder="Ordem"  style="width:80px">

		</div>
	</div>
@endforeach

</div>

