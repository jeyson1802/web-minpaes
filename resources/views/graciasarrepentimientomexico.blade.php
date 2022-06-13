@extends('layouts.gracias')

@section('title', 'Gracias - MINPAES')

@section('content')

    <div class="thank-you message">

        <div class="container text-center">
            <span class="icon success"><i class="ri-checkbox-circle-line"></i></span>
            <h1>¡Felicidades!</h1>
            <div class="section-heading">
                <h2>En unos minutos recibirás un e-mail de confirmación.</h2>
            </div>

            <div class="section-heading">
                <h2>&#128073; Recomendaciones antes del evento.&#128072;</h2>
            </div>

            <div class="row">

                <div class="flex-md-12 flex-lg-12 mar-b-sm">

                    <div class="our-belief__box">

                        <div class="heading thanks">
                            <h2>1. Añadir evento a tu calendario.</h2>
                        </div>

                    </div>

                    <a title="Añade el evento al calendario " class="addeventatc" data-id="tm13989959"
                            href="https://www.addevent.com/event/tm13989959" target="_blank" rel="nofollow">Añade el evento
                            al calendario</a>
                </div>

            </div>

            <div class="row">

                <div class="flex-md-12 flex-lg-12 mar-b-sm">

                    <div class="our-belief__box">

                        <div class="heading thanks">
                            <h2>2. Ingresar al canal de Telegram del evento.</h2>
                        </div>

                    </div>

                    <a href="https://t.me/+zIXd7gX-_7QwYzQ5" target="_blank" class="button-telegram">UNIRME AL CANAL</a>
                </div>

            </div>
        </div>

    </div>

@endsection

@push('scripts')
    <script type="text/javascript" src="https://cdn.addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>
@endpush
