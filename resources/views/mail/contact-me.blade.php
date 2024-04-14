<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://api.juandiegows.com/css/style.email.css">
</head>
<div class="content" style="box-sizing: border-box; background: #92a8d1; width: 100%; height: 100%; padding: 0% 20%; display: grid; place-content: center; font-family: 'Montserrat', sans-serif; font-optical-sizing: auto; font-style: normal;">
    <main class="main" style="width: 100%; min-width: 50%; background-color: #0150bc; padding: 5%; border-radius: 10px; hegth:100vh;">
        <p style="margin: 5px 0; color: white;">hola, Mr. Juan Diego</p>
        <p style="margin: 5px 0; color: white;">{{ $name ?? "Juan Diego Mejia Maestre" }} quiere ponerse en contacto contigo.</p>
        <p style="margin: 5px 0; color: white;"><b style="text-transform: capitalize; font-weight: 700; color: #fc804a;"> asunto :</b> {{ $subject ?? 'prueba de correo' }}</p>
        <p style="margin: 5px 0; color: white;"><b style="text-transform: capitalize; font-weight: 700; color: #fc804a;"> Email :</b> {{ $email ?? 'jdmeji@misena.edu.co' }}</p>
        <p style="margin: 5px 0; color: white;"><b style="text-transform: capitalize; font-weight: 700; color: #fc804a;"> Mensaje : </b> {{ $messageText ?? 'este es el mensaje del correo' }}</p>
        <p style="margin: 5px 0; color: white;"><b style="text-transform: capitalize; font-weight: 700; color: #fc804a;"> Fecha :</b> {{ $created_at ?? now() }}</p>
    </main>
</div>
