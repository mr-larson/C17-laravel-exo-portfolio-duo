@extends('layouts.app')

@section('content')
  
    <div class="container">

      <h2>edit Portfolio</h2>
      <form method="POST" action="/portfolio/{{ $portfolio->id }}/update">
          @csrf
          <div class="mb-3">
            <label  class="form-label">url</label>
            <input type="text" class="form-control" value="{{ $portfolio->url }}" name="url">
          </div>
          <div class="mb-3">
            <label class="form-label">categorie</label>
            <textarea class="form-control" id="" cols="30" rows="10" name="description">{{ $portfolio->categorie }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection