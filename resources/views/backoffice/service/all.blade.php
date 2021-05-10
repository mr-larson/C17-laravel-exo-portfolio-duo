@extends('layouts.app')

@section('content')
    @include('partial.nav')

    <section class="container mr-5">
        
        <h1>tableau de service</h1>
        <a class="btn btn-secondary text-white" href="/service/create">Create</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Icone</th>
                <th scope="col">Titre</th>
                <th scope="col">Texte</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <th scope="row">{{ $service->id }}</th>
                        <td>{!! $service->icone !!}</td>
                        <td>{{ $service->titre }}</td>
                        <td>{{ $service->texte }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary text-white" href="/service/{{ $service->id }}/edit">Edit</a>
                            <form action="/service/{{ $service->id }}/delete" method="POST">
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

    
