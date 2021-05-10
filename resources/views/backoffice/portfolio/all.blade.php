@extends('layouts.app')

@section('content')
    @include('partial.nav')

    <section class="container mr-5">
        
        <h1>tableau de Portfolio</h1>
        <a class="btn btn-secondary text-white" href="/portfolio/create">Create</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">url</th>
                <th scope="col">categorie</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="col-6">
                @foreach ($portfolios as $portfolio)
                    <tr>
                        <th scope="row">{{ $portfolio->id }}</th>
                        <td><img class="img-thumbnail col-4" src={{ $portfolio->url }} alt=""></td>
                        <td>{{ $portfolio->categorie }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary text-white" href="/portfolio/{{ $portfolio->id }}/edit">Edit</a>
                            <form action="/portfolio/{{ $portfolio->id }}/delete" method="POST">
                                @csrf
                                <button class="btn btn-danger text-white" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
           
    </section>
    
    @include('partial.footer')
@endsection

    
