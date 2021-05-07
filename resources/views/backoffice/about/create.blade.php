@extends('layouts.app')

@section('content')
  
    <div class="container">

      <h2>edit about</h2>
      <form method="POST" action="/about/store">
          @csrf
          <div class="mb-3">
            <label  class="form-label">nom</label>
            <input type="text" class="form-control" name="nom">
          </div>
          <div class="mb-3">
            <label class="form-label">address</label>
            <input type="text" class="form-control" name="address">
          </div>
          <div class="mb-3">
            <label class="form-label">phone</label>
            <input type="text" class="form-control" name="phone">
          </div>
          <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection