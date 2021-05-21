@extends('layouts.app')

@section('title', 'Inicio - MINPAES')

@section('content')

<!-- HERO SECTION STARTS -->
<section class="hero full-width">

  <div class="hero__carousel owl-carousel" id="hero-carousel">
    <!-- Homepage slider -->

    <div class="slide display-flex-column justify-align-center" id="first-slide">

      <div class="container">

        <div class="hero__content text-center">

          <span class="hero__intro">Nos alegramos de que usted est&eacute; aqu&iacute;</span>
          <h1>Bienvenido a MINPAES</h1> 
          <p class="leading">Somos una casa que con el tiempo a venido defendiendo el evangelio de la cruz, la sangre de Cristo, 
          creyendo en la trinidad.</p>

          <div class="hero__cta">
            <a href="{{ url('nosotros') }}" class="button">Leer M&aacute;s</a>
          </div>

        </div><!-- .hero__content -->

      </div><!-- .container ends -->

    </div><!-- #first-slide ends -->

    <div class="slide display-flex-column justify-align-center" id="second-slide">

      <div class="container">

        <div class="hero__content text-center">

          <span class="hero__intro">¿Tienes alguna necesidad?</span>
          <h1>Ministerio de Oraci&oacute;n</h1>

          <p class="leading">En MINPAES fortalecemos nuestra fe en la oraci&oacute;n, env&iacute;enos su petici&oacute;n de oraci&oacute;n, sin
            importar el problema, para Dios no hay nada imposible. Como dice su en su palabra. </p>
          <p class="leading"> Otra vez os digo, que si dos de vosotros se pusieren de acuerdo en la tierra acerca de 
            cualquiera cosa que pidieren, les ser&aacute; hecho por mi Padre que est&aacute; en los cielos. Mateo 18:19</p>

          <div class="hero__cta">
            <a href="{{ url('registrooracion') }}" class="button">Leer M&aacute;s</a>
          </div>

        </div><!-- .hero__content -->

      </div><!-- .container ends -->

    </div><!-- #second-slide ends -->

  </div> <!-- #hero-carousel ends -->

</section><!-- .hero ends -->
<!-- HERO SECTION ENDS -->


<!-- SUMMARY SECTION STARTS -->
<section class="worship display-flex-column justify-content-center text-white">

  <div class="container">

    <div class="row justify-content-end">

      <div class="flex-lg-7">

        <div class="section-heading">
          <span>Iglesia</span>
          <h2>Ministerio a las Naciones para Arrepentimiento y Santidad</h2>
        </div><!-- .section-heading ends -->

        <p>
           Somos una casa que con el tiempo ha venido defendiendo el evangelio de la cruz, la sangre de Cristo, 
           creyendo en la trinidad y entendidos que Jesucristo vino en carne a la tierra, conociendo a un Jesucristo integral,
           que es un buen amigo un Juez justo, creyendo fielmente en los principios b&iacute;blicos sin dejar pasar alguno de ellos.
        </p>
        <p>
           Miramos siempre al autor y consumador de nuestra fe Cristo Jes&uacute;s, y trabajando para la vida eterna, estando aqu&iacute; 
           en la tierra limpiando nuestras vestiduras viviendo en arrepentimiento, en justicia, rectitud, y santidad sin la 
           cual nadie ver&aacute; a Dios, con cero tolerancias al pecado y peleando la buena batalla de la fe el d&iacute;a a d&iacute;a, sabiendo
           que el est&aacute;ndar es la santidad al cien por ciento de nuestras vidas consagradas.
        </p>

      </div><!-- .flex-* ends -->

    </div><!-- .row ends -->

  </div><!-- .container ends -->

</section><!-- .worship ends -->
<!-- SUMMARY SECTION ENDS -->


<!-- OUR ENVIRONMENT SECTION STARTS -->
<section class="our-environment">

  <div class="our-environment__cover clip background-primary hide-on-sm show-on-lg"></div>

  <div class="container">

    <div class="row">

      <div class="flex-lg-8">

        <div class="our-environment__content default-section-spacing">

          <div class="our-environment__details">
            <div>
              <span><i class="ri-heart-2-line"></i></span>
            </div>
            <div>
              <h3>Vocaci&oacute;n al servicio de Dios</h3>
              <p>Nuestra iglesia se caracteriza por el servicio a Dios en todos los ministerios de la iglesia. 
                En el &aacute;rea administrativa contamos con profesionales al servicio del Señor, todo por amor a Cristo.
              </p>
            </div>
          </div><!-- .our-environment__details ends -->

          <div class="our-environment__details">
            <div>
              <span><i class="ri-emotion-happy-line"></i></span>
            </div>
            <div>
              <h3>Adoraci&oacute;n en Esp&iacute;ritu y en Verdad</h3>
              <p>En MINPAES tenemos un remanente de adoraci&oacute;n que se caracteriza por realizarlo en Esp&iacute;rituy en Verdad.</p>
            </div>
          </div><!-- .our-environment__details ends -->

          <div class="our-environment__details">
            <div>
              <span><i class="ri-shield-line"></i></span>
            </div>
            <div>
              <h3>Dar en amor</h3>
              <p>Nuestra congregaci&oacute;n sobresale en el ver&iacute;culo b&iacute;blico: M&aacute;s Bienaventurado en dar que recibir. Se cree en el 
                dar por amor a Cristo.
              </p>
            </div>
          </div><!-- .our-environment__details ends -->

        </div><!-- .our-environment__content ends -->

      </div><!-- .flex-* ends -->

    </div><!-- .row ends -->

  </div><!-- .container ends -->

</section><!-- .our-environment ends -->
<!-- OUR ENVIRONMENT SECTION ENDS -->


<!-- LATEST SERMONS SECTION STARTS -->
<div class="latest-sermons background-lighter-white">

  <div class="row no-margin">

    <div class="flex-lg-5 no-padding">

      <div class="card sermon">

        <div class="card__header">
          <img src="images/ensenanzas/sermon-1@1.5x.jpg" alt="La Salvación"
            class="card__image sermon__image">
        </div><!-- .card__header ends -->

        <div class="card__footer">

          <div class="sermon__metas">
            <div class="sermon__meta--date meta"><i class="ri-calendar-event-line"></i> <span>03/05/2020</span>
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
            <a href="{{ url('ensenanzas/01/lasalvacioncristiana') }}" class="button">Leer más</a>
          </div>

        </div><!-- .card__footer ends -->

      </div><!-- .card ends -->

    </div><!-- .flex-* ends -->

    <div class="flex-lg-7">

      <div class="latest-sermons__sermons">

        <div class="section-heading">
          <span>Ense&ntilde;anzas</span>
          <h2>Nuestras Ense&ntilde;anzas</h2>
        </div><!-- .section-heading ends -->

        <div class="row">

          <div class="flex-md-6 mar-b-sm">

            <div class="card custom-height sermon" data-aos="flip-down">

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
                </div>

                <div class="sermon__link__home">
                  <a href="{{ url('ensenanzas/01/siervosgenuinos') }}" class="button">Leer más</a>
                </div>

              </div><!-- .card__footer ends -->

            </div><!-- .card ends -->

          </div><!-- .flex-* ends -->

          <div class="flex-md-6 mar-b-sm">

            <div class="card custom-height sermon" data-aos="flip-down" data-aos-delay="300">

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
                </div>

                <div class="sermon__link__home">
                  <a href="{{ url('ensenanzas/01/ministeriodelespiritusanto') }}" class="button">Leer más</a>
                </div>

              </div><!-- .card__footer ends -->

            </div><!-- .card ends -->

          </div><!-- .flex-* ends -->

        </div><!-- .row ends -->

      </div><!-- .latest-sermons__sermons ends -->

    </div><!-- .flex-* ends -->

  </div><!-- .row ends -->

</div><!-- .latest-sermons ends -->
<!-- LATEST SERMONS SECTION ENDS -->


<!-- OUR TESTIMONIALS SECTION STARTS -->
<section class="our-testimonial default-section-spacing">


  <div class="our-testimonial__content">

    <div class="container">

      <div class="section-heading text-white text-center">
        <span>Testimonios</span>
        <h2>Hermanos de nuestra Iglesia</h2>
      </div><!-- .section-heading ends -->

      <div class="our-testimonial__carousel owl-carousel" id="our-testimonial">

        <div class="testimonial">
          <div class="testimonial__text text-white">
            <h3>Cindy Zarate</h3>
            El problema que yo tenía era en las trompas de Falopio, porque las dos trompas estaban obstruidas y cuando el diagnóstico del médico en ese entonces que fue casi fines del 2014 y principio del 2015, nos digo que lo que teníamos que hacer era una inseminación in vitro, el doctor me enseño un diagnostico que me había salido que no tenía óvulos que me encontraba en la pre-menopausia y que la única forma que yo podría quedar embarazada en ese momento era haciéndome una inseminación in vitro pero con óvulos donados . Me hice nuevamente el examen y el doctor me dijo los óvulos han crecido me dijo, están creciendo a un tamaño normal, están muy hermosos, están muy bonitos y en ese momento yo me alegre y cuando ella me dice en la noche anda al día siguiente, yo tuve un sueño, y en mi sueño había quedado embarazada. Al día siguiente me fui hacerme mi análisis de embarazo y efectivamente salió positivo y ahí quede embarazada para la gloria de Dios. Por eso es que puedo contar mi testimonio dando fe que Jesús es un Dios real, que es un Dios poderoso y que para El no hay nada imposible, creo que mi hija es un milagro de Dios y que él pudo cumplir el anhelo de mi corazón. Le damos gracias a Dios por este milagro que creímos con fe,y aquí esta este es el resultado del poder de Dios.
          </div>

        </div><!-- .testimonial ends -->

        <div class="testimonial">

          <div class="testimonial__text text-white">
          <h3>Diana Rojas</h3>
            Mi testimonio es el siguiente, yo tenía cáncer al útero, fui a muchos médicos, a muchas clínicas, todos corroboraban mi enfermedad, cuando me detectan a mí la cervicitis crónica, yo pensé en suicidarme, esto fue a medio día y yo en la noche ya había comprado todo para poder suicidarme, es ahí donde pedía a gritos que alguien me salvara que alguien me ayudara, no pensé en nada más que en eso, en que no había ninguna salvación para mí, y no había nada. Esto fue en abril, el 13 de abril del 2015, a solo casi un mes y medio de mi sanación, como Dios pudo haberme salvado de una cervicitis crónica, los diagnósticos decían, aun los medico decía que no era posible que yo este sana, porque ya el cáncer había avanzado mucho. Fui a muchos médicos y corroboraron que mi diagnóstico fue cambiado, que ya no tenía cáncer al útero; para darle la gloria a Dios estoy aquí de testimonio a cada uno de ustedes inyectándole fe y esperanza. Ellos son mis dos hermosos hijos, gracias a la bendición de Dios, y que el curo todas mi heridas, hoy gozo de esta alegría junto a ellos.
          </div>

        </div><!-- .testimonial ends -->

      </div><!-- .our-testimonial__carousel ends -->

    </div><!-- .container ends -->

  </div><!-- .our-testimonial__content ends -->

</section><!-- .our-testimonial ends -->
<!-- OUR TESTIMONIALS SECTION ENDS -->


@endsection

@push('scripts')

@endpush