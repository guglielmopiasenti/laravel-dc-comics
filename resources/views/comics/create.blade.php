@extends('layouts.main')

@section('title', 'Add comic')

@section('main-content')
<div class="container">

    <div class="card-title d-flex align-items-center justify-content-center">
        <h1 class="my-3 mx-5">Add comic</h1>
        <a href="{{ route('comics') }}" class="btn btn-secondary">Go back</a>
    </div>
    <div class="card-body">
        {{-- Form --}}
        <form>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" required></textarea>
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="url" class="form-control" id="thumb" name="thumb" required>
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" min="0" required>
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" required>
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" required>
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" required>
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="artists" class="form-label">Artists</label>
                    <input type="text" class="form-control" id="artists" name="artists" required>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="writers" class="form-label">Writers</label>
                    <input type="text" class="form-control" id="writers" name="writers" required>
                </div>
            </div>
            <div class="col-12 text-end">
                <div class="mb-3">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </div>
    </div>
</div>
    </form>
    </div>
@endsection
