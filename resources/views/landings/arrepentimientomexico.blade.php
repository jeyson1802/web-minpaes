@extends('layouts.landing')

@section('title', 'Arrepientete Mexico')

@section('content')

<!-- COMING SOON SECTION STARTS -->
<section class="landing-page-arrep-mex display-flex-column justify-content-center default-section-spacing">

<div class="landing-page-arrep-mex__cover"></div>

<div class="container">

  <div class="row justify-content-end">

    <div class="flex-lg-6">

      <div class="landing-page-arrep-mex__content text-center">

        <h1>Ingreso Libre</h1>

        <h3>📌 MacroPlaza - Monterrey - México</h3>

        <h3>29 Junio a las 18 horas</h3>

        <!-- SUBSCRIPTION SECTION STARTS -->
        <div class="subscription">

          <div class="landing-page-arrep-mex__section__heading">
            <h3>🎁 Registrate para recibir una sorpresa</h3>
          </div><!-- .section-heading ends -->

          <form method="POST" action="/landing" class="landing">
            {{ csrf_field() }}
            <div class="row">
              <input type="hidden" id="campana" name="campana" value="facebook-ads-arrepentimiento-mexico">
              <div class="flex-md-12">
                <div class="form__group">
                  <input type="text" id="nombres" name="nombres" class="landing-page-arrep-mex__form__input" placeholder="Ingrese sus nombres completos" required>
                </div>
              </div><!-- .flex-* ends -->

              <div class="flex-md-12">
                <div class="form__group">
                  <input type="number" id="celular" name="celular" class="landing-page-arrep-mex__form__input" placeholder="Ingrese su celular" required>
                </div>
              </div><!-- .flex-* ends -->

              <div class="flex-md-12">
                <div class="form__group">
                  <input type="email" id="correo" name="correo" class="landing-page-arrep-mex__form__input" placeholder="Ingrese su correo" required>
                </div>
              </div><!-- .flex-* ends -->

              <div class="flex-md-12">
                <button type="submit" class="landing-page-arrep-mex__button button-telegram button-block-sm form__submit">Registrarme</button>
              </div><!-- .flex-* ends -->


            </div><!-- .row ends -->

          </form><!-- .form ends -->

        </div><!-- .subscription ends -->
        <!-- SUBSCRIPTION SECTION ENDS -->

      </div><!-- .landing-page-arrep-mex__content ends -->

    </div><!-- .flex-* ends -->

  </div><!-- .row ends -->

</div><!-- .container ends -->

</section><!-- .landing-page-arrep-mex ends -->
<!-- COMING SOON SECTION ENDS -->

@endsection

@push('scripts')
@endpush
