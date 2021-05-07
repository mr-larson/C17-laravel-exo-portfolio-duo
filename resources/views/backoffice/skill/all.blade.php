@extends('layouts.app')

@section('content')
    @include('partial.nav')

    <section class="container mr-5">
        
        <h1>tableau de Skills</h1>
        <a class="btn btn-secondary text-white" href="/skill/create">Create</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">Chiffres</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($skills as $skill)
                    <tr>
                        <th scope="row">{{ $skill->id }}</th>
                        <td>{{ $skill->nom }}</td>
                        <td>{{ $skill->chiffre }} %</td>
                        <td class="d-flex">
                            <a class="btn btn-primary text-white" href="/skill/{{ $skill->id }}/edit">Edit</a>
                            <form action="/skill/{{ $skill->id }}/delete" method="POST">
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
