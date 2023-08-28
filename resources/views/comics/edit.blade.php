@extends('layouts.main')

@section('title', 'Edit comic')

@section('main-content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <div class="card-title d-flex align-items-center justify-content-center">
        <h1 class="my-3 mx-5">Edit comic</h1>
        <a href="{{ route('comics') }}" class="btn btn-secondary">Go back</a>
    </div>
    <div class="card-body">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <!-- Title -->
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $comic->title) }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Description -->
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" required>{{ old('description', $comic->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Thumb -->
                <div class="col-4">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="url" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}" required>
                        @error('thumb')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Price -->
                <div class="col-4">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $comic->price) }}" min="0" required>
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Series -->
                <div class="col-4">
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series', $comic->series) }}" required>
                        @error('series')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Sale Date -->
                <div class="col-4">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" required>
                        @error('sale_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Type -->
                <div class="col-4">
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type', $comic->type) }}" required>
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Artists -->
                <div class="col-4">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artists</label>
                        <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" value="{{ old('artists', $comic->artists) }}" required>
                        @error('artists')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Writers -->
                <div class="col-12">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers</label>
                        <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" value="{{ old('writers', $comic->writers) }}" required>
                        @error('writers')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Submit -->
                <div class="col-12 text-end">
                    <div class="mb-3">
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
