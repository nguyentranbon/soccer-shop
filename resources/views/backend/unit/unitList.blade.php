@extends('backend.master')

@section('title')

<h1 class="mt-4">Units</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item">Units</li>
    <li class="breadcrumb-item active"><a class="btn btn-info" style="margin-top:-6px;" title="Add" href="{!! URL::route('admin.unit.getAdd') !!}">Add Unit</a></li>
</ol>

@stop

@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Product list
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $unit)
                        <td>{!! $unit->id !!}</td>
                        <td>{!! $unit->name !!}</td>
                        <td>{!! $unit->description !!}</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-primary" title="Add"><i class="fas fa-plus"></i></a>
                            <a href="#" class="btn btn-warning" title="Update"><i class="fas fa-pencil-alt"></i></a>
                            <a href="#" class="btn btn-danger" title="Delete"><i class="far fa-trash-alt"></i></a>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop
