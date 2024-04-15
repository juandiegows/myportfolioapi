   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>JuanDiegoWS</title>
       <style>
           .titulo {
               text-transform: capitalize;
               font-weight: 900;
               color: #fc804a;
           }

           .name,
           .saludo>b {
               font-weight: 500;
               color: #fc804a;
           }

       </style>

   </head>
   <body>

       <div class="content">
           <div class="main">
               <p class="saludo" style=" font-family: 'Bungee Spice', sans-serif">hola, <b>{{ $name ?? "Juan Diego Mejia Maestre"  }} </b> </p>
               <p>Este correo es para confirmate que hemos recibido tu mensaje y te responderemos lo más pronto posible desde este correo o desde el correo mejiamaestrejuandiego@gmail.com, tu mensaje enviado es el siguiente...</p>
               <p> <b class="titulo"> asunto :</b> {{ $subject ?? 'prueba de correo'  }}</p>
               <p> <b class="titulo"> Email :</b> {{ $email ?? 'jdmeji@misena.edu.co' }}</p>
               <p class="message"> <b class="titulo"> Mensaje : </b> {{ $messageText ?? 'este es el mensaje del correo' }}</p>
               <p> <b class="titulo"> Enviando en este fecha :</b> {{ $created_at ?? now() }}</p>
               <p>Gracias por ponerte en contacto conmigo y por visitar mi portafolio.</p>
           </div>


       </div>

   </body>
   </html>
