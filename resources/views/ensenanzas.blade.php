@extends('layouts.app')

@section('title', 'Ense&ntilde;anzas - MINPAES')

@section('content')

<!-- BANNER SECTION STARTS -->
<section class="banner full-width">

  <div class="container">

    <div class="banner__content">

      <div class="banner__heading">
        <h1>Ense&ntilde;anzas</h1>
        <p>MINPAES - Ministerio a las Naciones para Arrepentimiento y Santidad</p>
      </div>

      <div class="breadcrumb">
        <div class="breadcrumb__home--link"><a href="./">Inicio</a></div>
        <span></span>
        <div class="breadcrumb__current--page-link">Ense&ntilde;anzas</div>
      </div><!-- .breadcrumb ends -->

    </div><!-- .banner__content ends -->

  </div><!-- .container ends -->

</section><!-- .banner ends -->
<!-- BANNER SECTION ENDS -->


<!-- ALL SERMONS SECTION STARTS -->
<div class="all-sermons default-section-spacing">

  <div class="container">

    <div class="section-heading text-center">
      <span>Ense&ntilde;anzas</span>
      <h2>Nuestras Ense&ntilde;anzas</h2>
    </div><!-- .section-heading ends -->

    <div class="all-sermons__sermons">

      <div class="row">

        <div class="flex-md-6 flex-lg-4 mar-b-sm">

          <div class="card sermon">

            <div class="card__header">
              <img src="images/ensenanzas/sermon-1@1.5x.jpg" alt="A man reading the Holy Bible"
                class="card__image sermon__image">
            </div><!-- .card__header ends -->

            <div class="card__footer">

              <div class="sermon__metas">
                <div class="sermon__meta--date meta"><i class="ri-calendar-event-line"></i>
                  <span>03/05/2020</span>
                </div>
                <div class="sermon__meta--speaker meta"><i class="ri-user-star-line"></i> <span>Arzobispo Cesar Pisconti</span>
                </div>
              </div><!-- .sermon__metas -->

              <div class="sermon__content">
                <div class="title">
                  <h3>La Salvación</h3>
                </div>
                <div class="excerpt">
                  <p>Sabemos que es un tiempo tan difícil que estamos viviendo aun los que no conocen de Dios saben, que algo está 
                     pasando en el mundo entero, ven como algo inusual.</p>
                </div>
              </div>

              <div class="sermon__link">
                <a href="{{ url('ensenanzas/01/lasalvacioncristiana') }}" class="button">Leer m&aacute;s</a>
              </div>

            </div><!-- .card__footer ends -->

          </div><!-- .card ends -->

        </div><!-- .flex-* ends -->

        <div class="flex-md-6 flex-lg-4 mar-b-sm">

          <div class="card sermon">

            <div class="card__header">
              <img src="images/ensenanzas/sermon-2@1.5x.jpg" alt="A man reading the Holy Bible"
                class="card__image sermon__image">
            </div><!-- .card__header ends -->

            <div class="card__footer">

              <div class="sermon__metas">
                <div class="sermon__meta--date meta"><i class="ri-calendar-event-line"></i>
                  <span>03/05/2020</span>
                </div>
                <div class="sermon__meta--speaker meta"><i class="ri-user-star-line"></i> <span>Profeta Dr. David Owuor</span>
                </div>
              </div><!-- .sermon__metas -->

              <div class="sermon__content">
                <div class="title">
                  <h3>Siervos Genuinos</h3>
                </div>

                <div class="excerpt">
                  <p>Ya es tiempo que los pastores de Dios se levanten, y se hagan contar, estos son los tiempos en los cuales 
                     estamos viviendo, que Dios está buscando siervos genuinos que puedan preparar a la iglesia</p>
                </div>
              </div>

              <div class="sermon__link">
                <a href="{{ url('ensenanzas/01/siervosgenuinos') }}" class="button">Leer m&aacute;s</a>
              </div>

            </div><!-- .card__footer ends -->

          </div><!-- .card ends -->

        </div><!-- .flex-* ends -->

        <div class="flex-md-6 flex-lg-4 mar-b-sm">

          <div class="card sermon">

            <div class="card__header">
              <img src="images/ensenanzas/sermon-3@1.5x.jpg" alt="" class="card__image sermon__image">
            </div><!-- .card__header ends -->

            <div class="card__footer">

              <div class="sermon__metas">
                <div class="sermon__meta--date meta"><i class="ri-calendar-event-line"></i>
                  <span>03/05/2020</span>
                </div>
                <div class="sermon__meta--speaker meta"><i class="ri-user-star-line"></i> <span>Profeta Dr. David Owuor</span>
                </div>
              </div><!-- .sermon__metas -->

              <div class="sermon__content">
                <div class="title">
                  <h3>Ministerio del Espíritu Santo</h3>
                </div>

                <div class="excerpt">
                  <p>Si estás haciendo tu propio ministerio, entonces si necesitas dinero, pero si el 
                     ministerio es del Señor, solo necesitas la unción del Espíritu Santo, esa unción, se traduce al favor 
                     de Dios en tu ministerio.</p>
                </div>
              </div>

              <div class="sermon__link">
                <a href="{{ url('ensenanzas/01/ministeriodelespiritusanto') }}" class="button">Leer m&aacute;s</a>
              </div>

            </div><!-- .card__footer ends -->

          </div><!-- .card ends -->

        </div><!-- .flex-* ends -->


      </div><!-- .row ends -->

    </div><!-- .all-sermons__sermons ends -->

    <div class="pagination">

      <span class="pagination__arrow"><a href="#"><i class="ri-arrow-left-s-line"></i></a></span>
      <span class="pagination__number"><a href="#">1</a></span>
      <span class="pagination__arrow"><a href="#"><i class="ri-arrow-right-s-line"></i></a></span>

    </div><!-- .pagination ends -->

  </div><!-- .container ends -->

</div><!-- .all-sermons ends -->
<!-- ALL SERMONS SECTION ENDS -->


@endsection

@push('scripts')
    
@endpush