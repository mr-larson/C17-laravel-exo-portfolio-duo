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
                <th scope="col">Birthday</th>
                <th scope="col">Website</th>
                <th scope="col">Phone</th>
                <th scope="col">City</th>
                <th scope="col">Age</th>
                <th scope="col">Degree</th>
                <th scope="col">Email</th>
                <th scope="col">Freelance</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($about as $about)
                    <tr>
                        <th scope="row">{{ $about->id }}</th>
                        <td>{{ $about->birthday }}</td>
                        <td>{{ $about->website }}</td>
                        <td>{{ $about->phone }}</td>
                        <td>{{ $about->city }}</td>
                        <td>{{ $about->age }}</td>
                        <td>{{ $about->degree }}</td>
                        <td>{{ $about->email }}</td>
                        <td>{{ $about->freelance }}</td>
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
