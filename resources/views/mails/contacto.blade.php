<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Registro Contacto</title>
</head>
<body>
    <p>Hola {{ $contacto->nombres }}</p>
    <p>Gracias por escribirnos y por haber dispuesto tu corazón para creer lo que Dios puede hacer en tu vida, 
       como dice en su palabra: Y yo os digo: Pedid, y se os dará; buscad, y hallaréis; llamad, y se os abrirá. Lucas 11:9</p>
    <br>
    <img src="{{ $message->embed(public_path() . '/images/ministry-1@1.5x.jpg') }}" />
    <br>
    <p>Pronto te estaremos respondiendo, bendecido día.</p>
</body>
</html>