@extends('layouts.app')

@section('content')
  
    <div class="container">

      <h2>edit fact</h2>
      <form method="POST" action="/fact/store">
          @csrf
          <div class="mb-3">
            <label  class="form-label">icone</label>
            <input type="text" class="form-control" name="icone">
          </div>
          <div class="mb-3">
            <label class="form-label">chiffre</label>
            <input type="text" class="form-control" name="chiffre">
          </div>
          <div class="mb-3">
            <label class="form-label">texte</label>
            <input type="text" class="form-control" name="texte">
          </div>
          <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection