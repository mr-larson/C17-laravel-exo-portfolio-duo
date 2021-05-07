@extends('layouts.app')

@section('content')
    @include('partial.nav')

    <section class="container mr-5">
        
        <h1>tableau de About</h1>
        <a class="btn btn-secondary text-white" href="/about/create">Create</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($about as $about)
                    <tr>
                        <th scope="row">{{ $about->id }}</th>
                        <td>{{ $about->nom }}</td>
                        <td>{{ $about->address }}</td>
                        <td>{{ $about->phone }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary text-white" href="/about/{{ $about->id }}/edit">Edit</a>
                            <form action="/about/{{ $about->id }}/delete" method="POST">
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
