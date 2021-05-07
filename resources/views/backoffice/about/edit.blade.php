@extends('layouts.app')

@section('content')
    <div class="container">

      <h2>edit about</h2>
      <form method="POST" action="/about/{{ $about->id }}/update">
          @csrf
          <div class="mb-3">
            <label  class="form-label">birthday</label>
            <input type="text" class="form-control" value="{{ $about->birthday }}" name="birthday">
          </div>
          <div class="mb-3">
            <label class="form-label">website</label>
            <input type="text" class="form-control" value="{{ $about->website }}" name="website">
          </div>
          <div class="mb-3">
            <label class="form-label">phone</label>
            <input type="text" class="form-control" value="{{ $about->phone }}" name="phone">
          </div>
          <div class="mb-3">
            <label class="form-label">city</label>
            <input type="text" class="form-control" value="{{ $about->city }}" name="city">
          </div>
          <div class="mb-3">
            <label class="form-label">age</label>
            <input type="text" class="form-control" value="{{ $about->age }}" name="age">
          </div>
          <div class="mb-3">
            <label class="form-label">degree</label>
            <input type="text" class="form-control" value="{{ $about->degree }}" name="degree">
          </div>
          <div class="mb-3">
            <label class="form-label">email</label>
            <input type="text" class="form-control" value="{{ $about->email }}" name="email">
          </div>
          <div class="mb-3">
            <label class="form-label">freelance</label>
            <input type="text" class="form-control" value="{{ $about->freelance }}" name="freelance">
          </div>
          <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection