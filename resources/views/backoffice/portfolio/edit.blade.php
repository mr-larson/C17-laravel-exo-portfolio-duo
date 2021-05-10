@extends('layouts.app')

@section('content')
  
    <div class="container">

      <h2>edit Portfolio</h2>
      <form method="POST" action="/portfolio/{{ $portfolio->id }}/update">
          @csrf
          <div class="mb-3">
            <label  class="form-label">url</label>
            <select class="custom-select"  name="url">
              <option value="/img/portfolio/portfolio-1.jpg" {{ $portfolio->url == "portfolio"? "selected":null }} selected>image 1</option> 
              <option value="/img/portfolio/portfolio-2.jpg" {{ $portfolio->url == "portfolio"? "selected":null }}>image 2</option> 
              <option value="/img/portfolio/portfolio-3.jpg" {{ $portfolio->url == "portfolio"? "selected":null }}>image 3</option> 
              <option value="/img/portfolio/portfolio-4.jpg" {{ $portfolio->url == "portfolio"? "selected":null }}>image 4</option> 
              <option value="/img/portfolio/portfolio-5.jpg" {{ $portfolio->url == "portfolio"? "selected":null }}>image 5</option> 
              <option value="/img/portfolio/portfolio-6.jpg" {{ $portfolio->url == "portfolio"? "selected":null }}>image 6</option> 
              <option value="/img/portfolio/portfolio-7.jpg" {{ $portfolio->url == "portfolio"? "selected":null }}>image 7</option> 
              <option value="/img/portfolio/portfolio-8.jpg" {{ $portfolio->url == "portfolio"? "selected":null }}>image 8</option> 
              <option value="/img/portfolio/portfolio-9.jpg" {{ $portfolio->url == "portfolio"? "selected":null }}>image 9</option> 
            </select>
            <img class="col-4 img-thumbnail mt-3" src="/img/portfolio/portfolio-1.jpg" alt="">
          </div>
          <div class="mb-3">
            <label class="form-label">categorie</label>
            <select class="custom-select"  name="categorie">
              <option value="card" {{ $portfolio->categorie == "card"? "selected":null }}>Card</option> 
              <option value="app" {{ $portfolio->categorie == "app"? "selected":null }} selected>App</option>
              <option value="web" {{ $portfolio->categorie == "web"? "selected":null }}>Web</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
      
    </div>

  @include('partial.footer')
@endsection

<script>
  window.onload=function(){
  
    let selected = document.querySelector(".custom-select");
  
    selected.addEventListener("change", event=>{
      const img = document.querySelector("img");
      img.src = event.target.value;
    })
}
</script>