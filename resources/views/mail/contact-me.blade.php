   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>JuanDiegoWS</title>
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://api.juandiegows.com/css/style.email.css">
   </head>
   <body>

       <div class="content">
           <main class="main">
               <p>hola, Mr. Juan Diego</p>
               <p> {{ $name ?? "Juan Diego Mejia Maestre"  }} quiere ponerse en contacto contigo,</p>
               <p> <b class="titulo"> asunto :</b> {{ $subject ?? 'prueba de correo'  }}</p>
               <p> <b class="titulo"> Email :</b> {{ $email ?? 'jdmeji@misena.edu.co' }}</p>
               <p> <b class="titulo"> Mensaje : </b> {{ $messageText ?? 'este es el mensaje del correo' }}</p>
               <p> <b class="titulo"> Fecha :</b> {{ $created_at ?? now() }}</p>
           </main>


       </div>

   </body>
   </html>
