@extends('layouts.app')

@section('title', $viewData["title"])

@section('content')

<div class="card">

    <div class="card-header">
        Products
    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th width="200">Action</th>
                </tr>
            </thead>

            <tbody>

            @foreach($viewData["products"] as $product)

                <tr>
                    <td>{{ $product->getId() }}</td>
                    <td>{{ $product->getName() }}</td>
                    <td>${{ $product->getPrice() }}</td>

                    <td>
                        <a class="btn btn-primary btn-sm"
                           href="{{ route('admin.product.edit', ['id'=> $product->getId()]) }}">
                            Edit
                        </a>

                        <a class="btn btn-danger btn-sm"
                           href="{{ route('admin.product.delete', ['id'=> $product->getId()]) }}">
                            Delete
                        </a>
                    </td>
                </tr>

            @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection