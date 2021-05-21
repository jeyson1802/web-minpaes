@extends('layouts.app')

@section('title', 'Oracion - MINPAES')

@section('content')

 <!-- BANNER SECTION STARTS -->
<section class="banner full-width">

  <div class="container">

    <div class="banner__content">

      <div class="banner__heading">
        <h1>Petici&oacute;n de Oraci&oacute;n</h1>
        <p>MINPAES - Ministerio a las Naciones para Arrepentimiento y Santidad</p>
      </div>

      <div class="breadcrumb">
        <div class="breadcrumb__home--link"><a href="./">Inicio</a></div>
        <span></span>
        <div class="breadcrumb__current--page-link">Oraci&oacute;n</div>
      </div><!-- .breadcrumb ends -->

    </div><!-- .banner__content ends -->

  </div><!-- .container ends -->

</section><!-- .banner ends -->
<!-- BANNER SECTION ENDS -->


 <!-- CONTACT FORM STARTS -->
 <section class="contact default-section-spacing">

  <div class="container">

    <form method="POST" action="/oracion" class="form contact__form">
      {{ csrf_field() }}
      <div class="row">

        <div class="flex-md-6">

          <div class="form__group">

            <label for="nombres" class="form__label">Nombres y Apellidos <span class="color-danger">*</span></label>
            <input type="text" id="nombres" class="form__input" name="nombres" placeholder="Ingrese sus nombres y apellidos" required>

          </div><!-- .form__group ends -->

        </div><!-- .flex-* ends -->

        <div class="flex-md-6 mar-b-sm">

          <div class="form__group">

            <label for="correo" class="form__label">Correo Electr&oacute;nico <span class="color-danger">*</span></label>
            <input type="email" id="correo" class="form__input" name="correo" placeholder="Ingrese su correo" required>

          </div><!-- .form__group ends -->

        </div><!-- .flex-* ends -->

        <div class="flex-md-6">

          <div class="form__group">

            <label for="celular" class="form__label">Celular <span class="color-danger">*</span></label>
            <input type="number" id="celular" class="form__input" name="celular" placeholder="Ingrese su n&uacute;mero de celular" required>
            
          </div><!-- .form__group ends -->

        </div><!-- .flex-* ends -->

        <div class="flex-md-6 mar-b-sm">

          <div class="form__group">

            <label for="pais" class="form__label">Pa&iacute;s <span class="color-danger">*</span></label>
            <select class="form__input" id="pais" name="pais" required>
                <option value="">Seleccione</option>
                <option value="Argentina">Argentina</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Brasil">Brasil</option>
                <option value="Chile">Chile</option>
                <option value="Colombia">Colombia</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Guyana">Guyana</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Perú" selected>Perú</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Otro">Otro</option>
            </select>

          </div><!-- .form__group ends -->

        </div><!-- .flex-* ends -->

        <div class="flex-md-12 mar-b-sm">

          <div class="form__group">

            <label for="tipopeticion" class="form__label">Tipo de petición <span class="color-danger">*</span></label>
            <select class="form__input" id="tipopeticion" name="tipopeticion" required>
                <option value="">Seleccione</option>
                <option value="Sanidad">Sanidad</option>
                <option value="Matrimonio">Matrimonio</option>
                <option value="Familia">Familia</option>
                <option value="Liberacion">Liberaci&oacute;n</option>
                <option value="Salvacion">Salvaci&oacute;n</option>
                <option value="Otro">Otro</option>
            </select>

          </div><!-- .form__group ends -->

        </div><!-- .flex-* ends -->

        <div class="flex-md-12 mar-b-sm">

          <div class="form__group">

            <label for="peticion" class="form__label">Petici&oacute;n <span class="color-danger">*</span></label>
            <textarea name="peticion" id="peticion" class="form__textarea form__input" placeholder="Ingrese su petici&oacute;n" required></textarea>
          
          </div><!-- .form__group ends -->

        </div><!-- .flex-* ends -->

        <div class="flex-md-12">

            <div class="form__group">
              <label class="custom-label form__checkbox">
                Suscribirse al boletín informativo
                <input id="suscripcion" name="suscripcion" type="checkbox" checked>
                <span class="checkmark"></span>
              </labeL>
            </div><!-- .form__group ends -->

        </div><!-- .flex-* ends -->

        <div class="flex-md-12 mar-b-sm">

          <button id="btnoracion" name="btnoracion" class="button" type="submit" name="submit">Solicitar</button>

        </div><!-- .flex-* ends -->



      </div><!-- .row ends -->

    </form><!-- .form ends -->

  </div><!-- .container ends -->

</section><!-- .contact ends -->
<!-- CONTACT FORM ENDS -->

@endsection

@push('scripts')
    
@endpush