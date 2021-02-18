@extends('backend.master')


@section('content')

<form action="{!! route('admin.unit.getAdd') !!}" method="POST" enctype="multipart/form-data">
    <h1 class="mt-4">Units</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Units</li>
        <li class="breadcrumb-item active">Add Unit</li>

        <div class="navbar-right" style="position: absolute; right: 35px;margin-top: -7px;">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="#" ><i class="btn btn-light" >Cancel</i></a>
        </div>
    </ol>

    <input type="hidden" name="_token" value="{!! csrf_token() !!}" />

    <div class="form-group">
        <label>Name</label>
        <input class="form-control" name="txtUnitName" value="{!! old('txtUnitName') !!}" placeholder="Enter unit name." />
        <div>
            {!! $errors->first('txtUnitName') !!}
        </div>
    </div>

    <div class="form-group">
        <label>Mô tả</label>
        <textarea class="form-control" rows="3" id="txtUnitDescription" name="txtUnitDescription" placeholder="Enter unit description" ></textarea>
        <div>
            {!! $errors->first('txtUnitDescription') !!}
        </div>
    </div>


</form>
@stop