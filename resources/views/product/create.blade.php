@extends('layouts.app')

@section('title', 'Create Product')

@section('content')

<div class="card">

    <div class="card-header">
        Create Product
    </div>

    <div class="card-body">

        @if ($errors->any())

            <div class="alert alert-danger">

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <form method="POST"
              action="{{ route('product.save') }}"
              enctype="multipart/form-data">

            @csrf

            <div class="mb-3">

                <label>Name</label>

                <input type="text"
                       class="form-control"
                       name="name">

            </div>

            <div class="mb-3">

                <label>Description</label>

                <input type="text"
                       class="form-control"
                       name="description">

            </div>

            <div class="mb-3">

                <label>Price</label>

                <input type="number"
                       class="form-control"
                       name="price">

            </div>

            <div class="mb-3">

                <label>Image</label>

                <input type="file"
                       class="form-control"
                       name="image">

            </div>

            <button class="btn btn-primary">
                Save
            </button>

        </form>

    </div>

</div>

@endsection