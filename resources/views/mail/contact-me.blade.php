<link rel="stylesheet" href="https://api.juandiegows.com/css/style.email.css">
<div class="content">
    <main class="main">
        <p>hola, Mr. Juan Diego</p>
        <p> {{ $name ?? "Juan Diego Mejia Maestre"  }} quiere ponerse en contacto contigo.</p>
        <p> <b class="titulo"> asunto :</b> {{ $subject ?? 'prueba de correo'  }}</p>
        <p> <b class="titulo"> Email :</b> {{ $email ?? 'jdmeji@misena.edu.co' }}</p>
        <p> <b class="titulo"> Mensaje : </b> {{ $messageText ?? 'este es el mensaje del correo' }}</p>
        <p> <b class="titulo"> Fecha :</b> {{ $created_at ?? now() }}</p>
    </main>
</div>
