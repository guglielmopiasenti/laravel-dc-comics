@extends('layout.main')

@section('title', 'Add comic')

@section('content')
<div class="card-title d-flex align-items-center justify-content-center">
  <h1>Add comic</h1>
  <a href="{{route('teams.index')}}" class="btn-secondary">Go back</a>
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
  </form>
</div>
@endsection