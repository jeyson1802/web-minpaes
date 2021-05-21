@extends('layouts.message')

@section('title', '404')

@section('content')

<!-- NOT FOUND SECTION STARTS -->
<section class="not-found display-flex-column justify-content-center default-section-spacing">

<div class="not-found__cover"></div>

<div class="container">

  <div class="row justify-content-end">

    <div class="flex-lg-6">

      <div class="not-found__content text-center">

        <h1>404 - P&aacute;gina No Encontrada</h1>

        <p class="leading">Pareces p&eacute;rdido pero no temas porque Jes&uacute;s es <span class="bold">el Camino</span>,
          <span class="bold">la Verdad</span>, y <span class="bold">la Vida</span>.</p>

        <p>¡La p&aacute;gina que est&aacute;s buscando no se puede encontrar! Verifique la falta de ortograf&iacute;a e intente nuevamente o cont&aacute;ctenos.</p>

        <a href="{{ url('registrocontacto') }}" class="button">Cont&aacute;ctenos</a>

      </div>

    </div><!-- .flex-* ends -->

  </div><!-- .row ends -->

</div><!-- .container ends -->

</section><!-- .not-found ends -->
<!-- NOT FOUND SECTION ENDS -->

@endsection
@push('scripts')
@endpush