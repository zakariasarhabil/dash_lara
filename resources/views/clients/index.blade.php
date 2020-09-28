@extends('layouts.app')

 @section('content')

{{--<h1>list of client </h1>

<ul>
    @foreach ($clients as $client)

    <li>
    <h2>{{$client-> name}}</h2>
    </li>
    @endforeach
</ul> --}}








<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>List  <b>Client</b></h2>
                    </div>
                    <div class="col-sm-7">
                    <a href="{{ route('client.create') }}" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>

                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>montant</th>
                        <th>date</th>
                        <th>description</th>
                        <th>debtor</th>
                        <th>creditor</th>
                        <th>statut</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($clients as $client)
                    <tr>
                    <td>{{ $client->id }}</td>
                        <td>
                            <a href="#"> {{$client-> name}}</a>
                        </td>
                        <td>{{$client-> email}}</td>
                        <td>{{$client-> montant}}</td>
                        <td>date</td>
                        <td>
                            {{$client-> description}}
                        </td>
                        <td>
                            {{$client-> debtor}}
                        </td>

                        <td>
                            {{$client-> creditor}}
                        </td>

                        <td><span class="status text-success"></span> {{$client-> statut}}</td>


                    <td><a href="{{ route('client.edit', ['client' => $client->id]) }}">Edit</a></td>

                   <td> <form method="POST" action="{{ route('client.destroy', ['client' => $client->id]) }}">
                        @csrf

                        @method('DELETE')

                          <button type="submit" class="btn">delete</button>
                        </form></td>


                        @empty

                        <h2>le list est vide </h2>


                        @endforelse
                    </tr>




                </tbody>
            </table>

        </div>
    </div>
</div>



@endsection
