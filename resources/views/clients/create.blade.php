@extends('layouts.app')

 @section('content')

<div class="container">
<form method="POST" action="{{ route('client.store') }}">
    @csrf

    @include('clients.form')


      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>






 @endsection
