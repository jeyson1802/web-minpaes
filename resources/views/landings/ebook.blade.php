@extends('layouts.landing')

@section('title', 'eBook - El poder escondido de la iglesia')

@section('content')

<!-- COMING SOON SECTION STARTS -->
<section class="landing-page display-flex-column justify-content-center default-section-spacing">

<div class="landing-page__cover"></div>

<div class="container">

  <div class="row justify-content-end">

    <div class="flex-lg-6">

      <div class="landing-page__content text-center">

        <h1>Libro Gratis</h1>

        <p class="leading">¡Recibe este increíble libro que te encantará!</p>

        <p>Aprende sobre la santidad, el arrepentimiento, las vestiduras sagradas entre otros temas que te impactarán</p>

        <!-- SUBSCRIPTION SECTION STARTS -->
        <div class="subscription">

          <div class="section-heading mar-b-sm">
            <span>Recibe el Libro</span>
            <h2>Por tiempo Limitado</h2>
          </div><!-- .section-heading ends -->

          <form method="POST" action="/landing" class="landing">
            {{ csrf_field() }}
            <div class="row">
              <input type="hidden" id="campana" name="campana" value="facebook-ads-ebook">
              <div class="flex-md-12">
                <div class="form__group">
                  <input type="text" id="nombres" name="nombres" class="landing-page__form__input" placeholder="Ingrese sus nombres completos">
                </div>
              </div><!-- .flex-* ends -->

              <div class="flex-md-12">
                <div class="form__group">
                  <input type="number" id="celular" name="celular" class="landing-page__form__input" placeholder="Ingrese su celular">
                </div>
              </div><!-- .flex-* ends -->

              <div class="flex-md-12">
                <div class="form__group">
                  <input type="email" id="correo" name="correo" class="landing-page__form__input" placeholder="Ingrese su correo">
                </div>
              </div><!-- .flex-* ends -->

              <div class="flex-md-12">

                  <div class="form__group">
                    <label class="custom-label landing-page__checkbox">
                      Suscribirse al boletín informativo
                      <input id="suscripcion" name="suscripcion" type="checkbox" checked>
                      <span class="checkmark"></span>
                    </labeL>
                  </div><!-- .form__group ends -->

              </div><!-- .flex-* ends -->

              <div class="flex-md-12">
                <button type="submit" class="landing-page__button button-block-sm form__submit">Descargar</button>
              </div><!-- .flex-* ends -->
              

            </div><!-- .row ends -->

          </form><!-- .form ends -->

        </div><!-- .subscription ends -->
        <!-- SUBSCRIPTION SECTION ENDS -->

      </div><!-- .landing-page__content ends -->

    </div><!-- .flex-* ends -->

  </div><!-- .row ends -->

</div><!-- .container ends -->

</section><!-- .landing-page ends -->
<!-- COMING SOON SECTION ENDS -->

@endsection

@push('scripts')
@endpush