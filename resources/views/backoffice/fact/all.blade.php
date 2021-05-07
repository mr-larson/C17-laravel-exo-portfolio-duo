@extends('layouts.app')

@section('content')
    @include('partial.nav')

    <section class="container">
        
        <h1>tableau de fact</h1>
        <a class="btn btn-success text-white" href="/fact/create">Create</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Icone</th>
                <th scope="col">Chiffres</th>
                <th scope="col">Texte</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($fact as $fact)
                    <tr>
                        <th scope="row">{{ $fact->id }}</th>
                        <td>{{ $fact->icone }}</td>
                        <td>{{ $fact->chiffre }}</td>
                        <td>{{ $fact->texte }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary text-white" href="/fact/{{ $fact->id }}/edit">Edit</a>
                            <form action="/fact/{{ $fact->id }}/delete" method="POST">
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
