<fieldset>

    <div class="form-wrapper">

<div class="fields fields-edit-order {{ $errors->has('users_id') ? 'has-error' : '' }}">
    <label for="users_id">Users</label>
    <div class="select-input">
        <select class="form-control" id="users_id" name="users_id" required="true">
        	    <option value="" style="display: none;" {{ old('users_id', optional($order)->users_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select users</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('users_id', optional($order)->users_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('users_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="fields fields-edit-order {{ $errors->has('ears_id') ? 'has-error' : '' }}">
    <label for="ears_id">Ears</label>
    <div class="select-input">
        <select class="form-control" id="ears_id" name="ears_id" required="true">
        	    <option value="" style="display: none;" {{ old('ears_id', optional($order)->ears_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select ears</option>
        	@foreach ($ears as $key => $ear)
			    <option value="{{ $key }}" {{ old('ears_id', optional($order)->ears_id) == $key ? 'selected' : '' }}>
			    	{{ $ear }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('ears_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="fields fields-edit-order {{ $errors->has('eyes_id') ? 'has-error' : '' }}">
    <label for="eyes_id">Eyes</label>
    <div class="select-input">
        <select class="form-control" id="eyes_id" name="eyes_id" required="true">
        	    <option value="" style="display: none;" {{ old('eyes_id', optional($order)->eyes_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select eyes</option>
        	@foreach ($eyes as $key => $eye)
			    <option value="{{ $key }}" {{ old('eyes_id', optional($order)->eyes_id) == $key ? 'selected' : '' }}>
			    	{{ $eye }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('eyes_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="fields fields-edit-order {{ $errors->has('noses_id') ? 'has-error' : '' }}">
    <label for="noses_id">Noses</label>
    <div class="select-input">
        <select class="form-control" id="noses_id" name="noses_id" required="true">
        	    <option value="" style="display: none;" {{ old('noses_id', optional($order)->noses_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select noses</option>
        	@foreach ($noses as $key => $nose)
			    <option value="{{ $key }}" {{ old('noses_id', optional($order)->noses_id) == $key ? 'selected' : '' }}>
			    	{{ $nose }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('noses_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="fields fields-edit-order {{ $errors->has('mouths_id') ? 'has-error' : '' }}">
    <label for="mouths_id">Mouths</label>
    <div class="select-input">
        <select class="form-control" id="mouths_id" name="mouths_id" required="true">
        	    <option value="" style="display: none;" {{ old('mouths_id', optional($order)->mouths_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select mouths</option>
        	@foreach ($mouths as $key => $mouth)
			    <option value="{{ $key }}" {{ old('mouths_id', optional($order)->mouths_id) == $key ? 'selected' : '' }}>
			    	{{ $mouth }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('mouths_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="fields fields-edit-order {{ $errors->has('tails_id') ? 'has-error' : '' }}">
    <label for="tails_id">Tails</label>
    <div class="select-input">
        <select class="form-control" id="tails_id" name="tails_id" required="true">
        	    <option value="" style="display: none;" {{ old('tails_id', optional($order)->tails_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select tails</option>
        	@foreach ($tails as $key => $tail)
			    <option value="{{ $key }}" {{ old('tails_id', optional($order)->tails_id) == $key ? 'selected' : '' }}>
			    	{{ $tail }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('tails_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="fields fields-edit-order {{ $errors->has('shoes_id') ? 'has-error' : '' }}">
    <label for="shoes_id">Shoes</label>
    <div class="select-input">
        <select class="form-control" id="shoes_id" name="shoes_id" required="true">
        	    <option value="" style="display: none;" {{ old('shoes_id', optional($order)->shoes_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select shoes</option>
        	@foreach ($shoes as $key => $shoe)
			    <option value="{{ $key }}" {{ old('shoes_id', optional($order)->shoes_id) == $key ? 'selected' : '' }}>
			    	{{ $shoe }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('shoes_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="fields fields-edit-order {{ $errors->has('created_by') ? 'has-error' : '' }}">
    <label for="created_by" class="col-md-2 control-label">Created By</label>
    <div class="select-input">
        <select class="form-control" id="created_by" name="created_by">
        	    <option value="" style="display: none;" {{ old('created_by', optional($order)->created_by ?: '') == '' ? 'selected' : '' }} disabled selected>Select created by</option>
        	@foreach ($creators as $key => $creator)
			    <option value="{{ $key }}" {{ old('created_by', optional($order)->created_by) == $key ? 'selected' : '' }}>
			    	{{ $creator }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('created_by', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="fields fields-edit-order {{ $errors->has('updated_by') ? 'has-error' : '' }}">
    <label for="updated_by">Updated By</label>
    <div class="select-input">
        <select class="form-control" id="updated_by" name="updated_by">
        	    <option value="" style="display: none;" {{ old('updated_by', optional($order)->updated_by ?: '') == '' ? 'selected' : '' }} disabled selected>Select updated by</option>
        	@foreach ($updaters as $key => $updater)
			    <option value="{{ $key }}" {{ old('updated_by', optional($order)->updated_by) == $key ? 'selected' : '' }}>
			    	{{ $updater }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('updated_by', '<p class="help-block">:message</p>') !!}
    </div>
</div>


    </div>
</fieldset>