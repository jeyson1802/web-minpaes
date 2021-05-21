@extends('layouts.app')

@section('title', 'Galeria - MINPAES')

@section('content')

<!-- BANNER SECTION STARTS -->
<section class="banner full-width">

  <div class="container">

    <div class="banner__content">

      <div class="banner__heading">
        <h1>Galer&iacute;a</h1>
        <p>MINPAES - Ministerio a las Naciones para Arrepentimiento y Santidad</p>
      </div>

      <div class="breadcrumb">
        <div class="breadcrumb__home--link"><a href="./">Inicio</a></div>
        <span></span>
        <div class="breadcrumb__current--page-link">Galeria</div>
      </div><!-- .breadcrumb ends -->

    </div><!-- .banner__content ends -->

  </div><!-- .container ends -->

</section><!-- .banner ends -->
<!-- BANNER SECTION ENDS -->

<!-- OUR GALLERY STARTS -->
<section class="our-gallery gallery gallery--equal-grid default-section-spacing text-center">

  <div class="section-heading">
    <span>Nuestra Galer&iacute;a</span>
    <h2>Explore nuestra iglesia</h2>
  </div><!-- .section-heading ends -->

  <div class="row">

    <div class="flex-md-6 flex-lg-3 no-padding no-margin">

      <a href="images/gallery/gallery-1@2x.jpg" class="gallery-link" data-lightbox="church-picture"
        data-title="Recibimiento Profeta Dr. David Owuor">

        <div class="card gallery__card">

          <div class="card__header">
            <img src="images/gallery/gallery-1@1.5x.jpg" alt="Recibimiento Profeta Dr. David Owuor" class="card__image">
          </div>

        </div><!-- .card ends -->

      </a><!-- .gallery-link -->

    </div><!-- .flex-* ends -->

    <div class="flex-md-6 flex-lg-3 no-padding no-margin">

      <a href="images/gallery/gallery-2@2x.jpg" class="gallery-link" data-lightbox="church-picture"
        data-title="Predica Iglesia Surco">

        <div class="card gallery__card">

          <div class="card__header">
            <img src="images/gallery/gallery-2@1.5x.jpg" alt="Predica Iglesia Surco" class="card__image">
          </div>

        </div><!-- .card ends -->

      </a><!-- .gallery-link -->

    </div><!-- .flex-* ends -->

    <div class="flex-md-6 flex-lg-3 no-padding no-margin">

      <a href="images/gallery/gallery-3@2x.jpg" class="gallery-link" data-lightbox="church-picture"
        data-title="Arzobispo César Pisconti">

        <div class="card gallery__card">

          <div class="card__header">
            <img src="images/gallery/gallery-3@1.5x.jpg" alt="Arzobispo César Pisconti" class="card__image">
          </div>

        </div><!-- .card ends -->

      </a><!-- .gallery-link -->

    </div><!-- .flex-* ends -->

    <div class="flex-md-6 flex-lg-3 no-padding no-margin">

      <a href="images/gallery/gallery-4@2x.jpg" class="gallery-link" data-lightbox="church-picture"
        data-title="Arzobispo César Pisconti y Pastora Mery Pisconti">

        <div class="card gallery__card">

          <div class="card__header">
            <img src="images/gallery/gallery-4@1.5x.jpg" alt="Arzobispo César Pisconti y Pastora Mery Pisconti" class="card__image">
          </div>

        </div><!-- .card ends -->

      </a><!-- .gallery-link -->

    </div><!-- .flex-* ends -->

    <div class="flex-md-6 flex-lg-3 no-padding no-margin">

      <a href="images/gallery/gallery-5@2x.jpg" class="gallery-link" data-lightbox="church-picture"
        data-title="Visita a Kenia del Ministerio">

        <div class="card gallery__card">

          <div class="card__header">
            <img src="images/gallery/gallery-5@1.5x.jpg" alt="Visita a Kenia del Ministerio" class="card__image">
          </div>

        </div><!-- .card ends -->

      </a><!-- .gallery-link -->

    </div><!-- .flex-* ends -->

    <div class="flex-md-6 flex-lg-3 no-padding no-margin">

      <a href="images/gallery/gallery-6@2x.jpg" class="gallery-link" data-lightbox="church-picture"
        data-title="Adoración servicio del domingo">

        <div class="card gallery__card">

          <div class="card__header">
            <img src="images/gallery/gallery-6@1.5x.jpg" alt="Adoración servicio del domingo" class="card__image">
          </div>

        </div><!-- .card ends -->

      </a><!-- .gallery-link -->

    </div><!-- .flex-* ends -->

    <div class="flex-md-6 flex-lg-3 no-padding no-margin">

      <a href="images/gallery/gallery-7@2x.jpg" class="gallery-link" data-lightbox="church-picture"
        data-title="Previo Bautismo de la Iglesia">

        <div class="card gallery__card">

          <div class="card__header">
            <img src="images/gallery/gallery-7@1.5x.jpg" alt="Previo Bautismo de la Iglesia" class="card__image">
          </div>

        </div><!-- .card ends -->

      </a><!-- .gallery-link -->

    </div><!-- .flex-* ends -->

    <div class="flex-md-6 flex-lg-3 no-padding no-margin">

      <a href="images/gallery/gallery-8@2x.jpg" class="gallery-link" data-lightbox="church-picture"
        data-title="Bautismo de la Iglesia">

        <div class="card gallery__card">

          <div class="card__header">
            <img src="images/gallery/gallery-8@1.5x.jpg" alt="Bautismo de la Iglesia" class="card__image">
          </div>

        </div><!-- .card ends -->

      </a><!-- .gallery-link -->

    </div><!-- .flex-* ends -->

  </div><!-- .row ends -->

</section><!-- .our-gallery ends -->
<!-- OUR GALLERY ENDS -->


@endsection

@push('scripts')
    
@endpush