@extends('layouts.app')

@section('content')
  
    <div class="container">

      <h2>edit Service</h2>
      <form method="POST" action="/service/store">
          @csrf
          <div class="mb-3">
            <label class="form-label">icone</label>
            <textarea class="form-control" name="" id="" cols="30" rows="10" name="icone"></textarea>
          </div>
          <div class="mb-3">
            <label  class="form-label">titre</label>
            <input type="text" class="form-control"  name="titre">
          </div>
          <div class="mb-3">
            <label  class="form-label">texte</label>
            <input type="text" class="form-control"  name="texte">
          </div>
          <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection