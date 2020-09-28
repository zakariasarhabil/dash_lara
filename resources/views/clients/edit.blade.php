@extends('layouts.app')

 @section('content')

<div class="container">
<form method="POST" action="{{ route('client.update', ['client' => $client->id]) }}">
    @csrf

    @method('PUT')

    @include('clients.form')



      <button type="submit" class="btn btn-primary">Update Client</button>
    </form>
  </div>






 @endsection
