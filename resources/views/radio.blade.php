@extends('layouts.app')

@section('title', 'Radio - MINPAES')

@section('content')

 <!-- BANNER SECTION STARTS -->
<section class="banner full-width">

  <div class="container">

    <div class="banner__content">

      <div class="banner__heading">
        <h1>Radio</h1>
        <p>MINPAES - Ministerio a las Naciones para Arrepentimiento y Santidad</p>
      </div>

      <div class="breadcrumb">
        <div class="breadcrumb__home--link"><a href="./">Inicio</a></div>
        <span></span>
        <div class="breadcrumb__current--page-link">Radio</div>
      </div><!-- .breadcrumb ends -->

    </div><!-- .banner__content ends -->

  </div><!-- .container ends -->

</section><!-- .banner ends -->
<!-- BANNER SECTION ENDS -->


 <!-- PRODUCT DETAILS SECTION STARTS -->
<div class="product-details default-section-spacing">

  <div class="container">

    <div class="product-details__content">

      <div class="row">

        <div class="flex-md-6 flex-lg-5">

          <iframe src="https://studio23.radiolize.com/public/radio_-_jesus_es_el_senor_-_minpaes/embed" frameborder="0" allowtransparency="false" style="width: 100%; min-height: 150px; border: 0;"></iframe>

        </div><!-- .flex-* ends -->

        <div class="flex-md-6 flex-lg-7">

          <div class="product-details__details">
            <h3 class="product-details__name">Radio - Jes&uacute;s es el Se&ntilde;or - MINPAES</h3>            
          </div><!-- .product-details__details ends -->

          <div class="product-details__description">
            <div class="bold uppercase">Programaci&oacute;n</div>
            <p>Nuestra radio ha sido diseñada para la alcanzar a muchos con el evangelio de Jesucristo, poniendo el fundamento 
               en sus vidas a través del oír y el oír su palabra, por medio de predicas, adoraciones, tiempos de oración, 
               testimonios. Pero lo más importante que queremos es preparar el corazón de todo un remanente santo para su 
               eternidad por medio de mensajes como el arrepentimiento, la santidad. Y dando a Conocer a Jesucristo con el 
               buen amigo y el juez justo, para cada vida que la oiga será de mucha edificación, conéctate con tu espíritu 
               y disfruta de todos los mensajes.</p>
          </div><!-- .product-details__description ends -->

        </div><!-- .flex-* ends -->

      </div><!-- .row ends -->

    </div><!-- .product-details__content ends -->

  </div><!-- .container ends -->

</div><!-- .product-details ends -->
<!-- PRODUCT DETAILS SECTION ENDS -->

@endsection

@push('scripts')
    
@endpush