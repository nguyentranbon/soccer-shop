@extends('backend.master')

@section('title')

<h1 class="mt-4">Products</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item">Products</li>
    <li class="breadcrumb-item active"><a class="btn btn-info" style="margin-top:-6px;" href="#">Add Product</a></li>
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
                        <th>Images</th>
                        <th>Sku</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Unit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr align="left">
                        <td>Tiger Nixon</td>
                        <td>{!! $item->product_sku !!}</td>
                        <td>{!! $item->product_name !!}</td>
                        <td>61</td>
                        <td>
                            <?php $unit = DB::table('units')->where('id',$item->unit_id)->first(); ?>
                            @if(!empty($unit->unit_name))
                            {!! $unit->unit_name} !!}
                            @else
                            {!! NULL !!}
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-primary" title="Add"><i class="fas fa-plus"></i></a>
                            <a href="#" class="btn btn-warning" title="Update"><i class="fas fa-pencil-alt"></i></a>
                            <a href="#" class="btn btn-danger" title="Delete"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop
