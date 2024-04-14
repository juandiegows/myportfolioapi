<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://api.juandiegows.com/css/style.email.css">
</head>
<div class="content">
    <main class="main">
        <p style="background: yellow">hola, Mr. Juan Diego</p>
        <p> {{ $name ?? "Juan Diego Mejia Maestre"  }} quiere ponerse en contacto contigo.</p>
        <p> <b class="titulo"> asunto :</b> {{ $subject ?? 'prueba de correo'  }}</p>
        <p> <b class="titulo"> Email :</b> {{ $email ?? 'jdmeji@misena.edu.co' }}</p>
        <p> <b class="titulo"> Mensaje : </b> {{ $messageText ?? 'este es el mensaje del correo' }}</p>
        <p> <b class="titulo"> Fecha :</b> {{ $created_at ?? now() }}</p>
    </main>
</div>
