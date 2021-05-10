@extends('layouts.app')

@section('content')
  
    <div class="container">

      <h2>Create portfolio</h2>
      <form method="POST" action="/portfolio/store">
          @csrf
          <div class="mb-3">
            <label  class="form-label">url</label>
            <select class="custom-select"  name="url">
              <option value="/img/portfolio/portfolio-1.jpg"  selected>image 1</option> 
              <option value="/img/portfolio/portfolio-2.jpg">image 2</option> 
              <option value="/img/portfolio/portfolio-3.jpg">image 3</option> 
              <option value="/img/portfolio/portfolio-4.jpg">image 4</option> 
              <option value="/img/portfolio/portfolio-5.jpg">image 5</option> 
              <option value="/img/portfolio/portfolio-6.jpg">image 6</option> 
              <option value="/img/portfolio/portfolio-7.jpg">image 7</option> 
              <option value="/img/portfolio/portfolio-8.jpg">image 8</option> 
              <option value="/img/portfolio/portfolio-9.jpg">image 9</option> 
            </select>
            <img class="col-4 img-thumbnail mt-3"src="/img/portfolio/portfolio-1.jpg" alt="">
          </div>
          <div class="mb-3">
            <label class="form-label">categorie</label>
            <select class="custom-select"  name="categorie">
              <option value="card" >Card</option> 
              <option value="app" selected>App</option>
              <option value="web">Web</option>
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