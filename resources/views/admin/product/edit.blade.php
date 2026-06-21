@extends('layouts.app')

@section('title', $viewData["title"])

@section('content')

<div class="card">

    <div class="card-header">
        Edit Product
    </div>

    <div class="card-body">

        <form method="POST"
              action="{{ route('admin.product.update', ['id' => $viewData['product']->getId()]) }}">

            @csrf

            <div class="mb-3">
                <label>Name</label>

                <input type="text"
                       class="form-control"
                       name="name"
                       value="{{ $viewData['product']->getName() }}">
            </div>

            <div class="mb-3">
                <label>Description</label>

                <input type="text"
                       class="form-control"
                       name="description"
                       value="{{ $viewData['product']->getDescription() }}">
            </div>

            <div class="mb-3">
                <label>Image</label>

                <input type="text"
                       class="form-control"
                       name="image"
                       value="{{ $viewData['product']->getImage() }}">
            </div>

            <div class="mb-3">
                <label>Price</label>

                <input type="number"
                       class="form-control"
                       name="price"
                       value="{{ $viewData['product']->getPrice() }}">
            </div>

            <button class="btn btn-primary">
                Update
            </button>

        </form>

    </div>

</div>

@endsection