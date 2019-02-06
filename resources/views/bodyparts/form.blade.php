<fieldset>

    <div class="form-wrapper">
<div class="fields {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name">Name</label>
    <div class="select-input">
        <input class="form_input" name="name" type="text" id="name" value="{{ old('name', optional($bodypart)->name) }}" maxlength="50" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="fields {{ $errors->has('created_by') ? 'has-error' : '' }}">
    <label for="created_by">Created By</label>
    <div class="select-input">
        <select class="form-control" id="created_by" name="created_by">
        	    <option value="" style="display: none;" {{ old('created_by', optional($bodypart)->created_by ?: '') == '' ? 'selected' : '' }} disabled selected>Select created by</option>
        	@foreach ($creators as $key => $creator)
			    <option value="{{ $key }}" {{ old('created_by', optional($bodypart)->created_by) == $key ? 'selected' : '' }}>
			    	{{ $creator }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('created_by', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="fields {{ $errors->has('updated_by') ? 'has-error' : '' }}">
    <label for="updated_by">Updated By</label>
    <div class="select-input">
        <select class="form-control" id="updated_by" name="updated_by">
        	    <option value="" style="display: none;" {{ old('updated_by', optional($bodypart)->updated_by ?: '') == '' ? 'selected' : '' }} disabled selected>Select updated by</option>
        	@foreach ($updaters as $key => $updater)
			    <option value="{{ $key }}" {{ old('updated_by', optional($bodypart)->updated_by) == $key ? 'selected' : '' }}>
			    	{{ $updater }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('updated_by', '<p class="help-block">:message</p>') !!}
    </div>

</div>

    </div>

</fieldset>

