@extends('layouts.message')

@section('title', '500')

@section('content')

<div class="fail message">

    <div class="container text-center">
      <span class="icon fail"><i class="ri-close-circle-line"></i></span>
      <h1>¡Error!</h1>
      <p class="leading">Disc&uacute;lpenos su mensaje no pudo ser enviado. <a href="./" class="bold">Int&eacute;ntelo de nuevo.</a></p>
    </div>

</div>

@endsection

@push('scripts')

@endpush