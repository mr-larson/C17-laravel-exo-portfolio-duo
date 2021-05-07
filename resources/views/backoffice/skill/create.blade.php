@extends('layouts.app')

@section('content')
  
    <div class="container">

      <h2>edit skills</h2>
      <form method="POST" action="/skill/store">
          @csrf
          <div class="mb-3">
            <label  class="form-label">nom</label>
            <input type="text" class="form-control" name="nom">
          </div>
          <div class="mb-3">
            <label class="form-label">chiffre</label>
            <input type="text" class="form-control" name="chiffre">
          </div>
          <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection