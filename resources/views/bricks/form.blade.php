<fieldset>

    <div class="form-wrapper">
<div class="fields {{ $errors->has('bodyparts_id') ? 'has-error' : '' }}">
    <label for="bodyparts_id">Bodyparts</label>
    <div class="select-input">
        <select class="form-control" id="bodyparts_id" name="bodyparts_id" required="true">
        	    <option value="" style="display: none;" {{ old('bodyparts_id', optional($brick)->bodyparts_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select bodyparts</option>
        	@foreach ($bodyparts as $key => $bodypart)
			    <option value="{{ $key }}" {{ old('bodyparts_id', optional($brick)->bodyparts_id) == $key ? 'selected' : '' }}>
			    	{{ $bodypart }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('bodyparts_id', '<p>:message</p>') !!}
    </div>
</div>

<div class="fields {{ $errors->has('file') ? 'has-error' : '' }}">
    <label for="file">File Upload</label>
    <div class="select-input">

            <label class="input-group-btn">

                    <input type="file" name="file" id="file" class="hidden">

            </label>
          {{--  <input type="text" class="form_input uploaded-file-name" readonly>--}}


        @if (isset($brick->file) && !empty($brick->file))

                    <input type="checkbox" name="custom_delete_file" value="1" {{ old('custom_delete_file', '0') == '1' ? 'checked' : '' }}> Delete

                <span class="filename">
                    {{ $brick->file }}
                </span>

        @endif
        {!! $errors->first('file', '<p>:message</p>') !!}
    </div>
</div>

<div class="fields {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name">Name</label>
    <div class="select-input">
        <input class="form_input" name="name" type="text" id="name" value="{{ old('name', optional($brick)->name) }}" maxlength="100" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="fields {{ $errors->has('created_by') ? 'has-error' : '' }}">
    <label for="created_by">Created By</label>
    <div class="select-input">
        <select class="form-control" id="created_by" name="created_by">
        	    <option value="" style="display: none;" {{ old('created_by', optional($brick)->created_by ?: '') == '' ? 'selected' : '' }} disabled selected>Select created by</option>
        	@foreach ($creators as $key => $creator)
			    <option value="{{ $key }}" {{ old('created_by', optional($brick)->created_by) == $key ? 'selected' : '' }}>
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
        	    <option value="" style="display: none;" {{ old('updated_by', optional($brick)->updated_by ?: '') == '' ? 'selected' : '' }} disabled selected>Select updated by</option>
        	@foreach ($updaters as $key => $updater)
			    <option value="{{ $key }}" {{ old('updated_by', optional($brick)->updated_by) == $key ? 'selected' : '' }}>
			    	{{ $updater }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('updated_by', '<p>:message</p>') !!}
    </div>
</div>

    </div>

</fieldset>

