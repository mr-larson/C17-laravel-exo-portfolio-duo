@extends('layouts.app')

@section('content')
  
    <div class="container">

      <h2>edit portfolio</h2>
      <form method="POST" action="/portfolio/store">
          @csrf
          <div class="mb-3">
            <label  class="form-label">url</label>
            <input type="text" class="form-control" name="photo">
          </div>
          <div class="mb-3">
            <label class="form-label">categorie</label>
            <textarea class="form-control" id="" cols="30" rows="10" name="description"></textarea>
          </div>
          <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection