@extends('layouts.app')

@section('content')
  
    <div class="container">

      <h2>edit about</h2>
      <form method="POST" action="/about/store">
          @csrf
          <div class="mb-3">
            <label  class="form-label">birthday</label>
            <input type="text" class="form-control" name="birthday">
          </div>
          <div class="mb-3">
            <label class="form-label">website</label>
            <input type="text" class="form-control" name="website">
          </div>
          <div class="mb-3">
            <label class="form-label">phone</label>
            <input type="text" class="form-control" name="phone">
          </div>
          <div class="mb-3">
            <label class="form-label">city</label>
            <input type="text" class="form-control" name="city">
          </div>
          <div class="mb-3">
            <label class="form-label">age</label>
            <input type="text" class="form-control" name="age">
          </div>
          <div class="mb-3">
            <label class="form-label">degree</label>
            <input type="text" class="form-control" name="degree">
          </div>
          <div class="mb-3">
            <label class="form-label">email</label>
            <input type="text" class="form-control" name="email">
          </div>
          <div class="mb-3">
            <label class="form-label">freelance</label>
            <input type="text" class="form-control" name="freelance">
          </div>
          <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection