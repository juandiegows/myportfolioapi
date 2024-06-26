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

       <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
       <style>
           @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

           html,
           body,
           div,
           span,
           applet,
           object,
           iframe,
           h1,
           h2,
           h3,
           h4,
           h5,
           h6,
           p,
           blockquote,
           pre,
           a,
           abbr,
           acronym,
           address,
           big,
           cite,
           code,
           del,
           dfn,
           em,
           img,
           ins,
           kbd,
           q,
           s,
           samp,
           small,
           strike,
           strong,
           sub,
           sup,
           tt,
           var,
           b,
           u,
           i,
           center,
           dl,
           dt,
           dd,
           ol,
           ul,
           li,
           fieldset,
           form,
           label,
           legend,
           table,
           caption,
           tbody,
           tfoot,
           thead,
           tr,
           th,
           td,
           article,
           aside,
           canvas,
           details,
           embed,
           figure,
           figcaption,
           footer,
           header,
           hgroup,
           menu,
           nav,
           output,
           ruby,
           section,
           summary,
           time,
           mark,
           audio,
           video {
               margin: 0;
               padding: 0;
               border: 0;
               font-size: 100%;
               font: inherit;
               vertical-align: baseline;
           }

           /* HTML5 display-role reset for older browsers */
           article,
           aside,
           details,
           figcaption,
           figure,
           footer,
           header,
           hgroup,
           menu,
           nav,
           section {
               display: block;
           }

           body {
               line-height: 1;
           }

           ol,
           ul {
               list-style: none;
           }

           blockquote,
           q {
               quotes: none;
           }

           blockquote:before,
           blockquote:after,
           q:before,
           q:after {
               content: '';
               content: none;
           }

           table {
               border-collapse: collapse;
               border-spacing: 0;
           }

           .content {
               box-sizing: border-box;
               background: #92a8d1;
               width: 100%;
               min-height: 0;
               height: 100%;
               padding: 0% 20%;
               display: grid;
               place-content: center;
               font-family: "Montserrat", sans-serif;
           }


           .main {
               width: 60vw;
               margin: 20px auto;
               padding: 20px;
               background-color: #0b0012;
               border-radius: 10px;
               padding: 15px;
               box-sizing: border-box;
           }

           p {
               margin: 5px 0;
               color: white;
               text-decoration-color: white;
               text-decoration: none;
               font-family: 'Montserrat', sans-serif !important;
           }

           .titulo {
               text-transform: capitalize;
               font-weight: 900;
               color: #fc804a;
           }

           .message {
               text-align: justify;
           }

           .saludo {
               font-size: 20px;
               margin-bottom: 20px;
           }

           .name,
           .saludo>b {
               font-weight: 500;
               color: #fc804a;
           }

           .intro {
               margin-bottom: 30px;
           }

           body {
               font-family: 'Montserrat', sans-serif !important;
           }


           .bungee-spice-regular {
               color: #fc804a;
               font-family: "Bungee Spice", sans-serif !important;
               font-weight: 400;
               font-style: normal;
               font-size: 25px;
               margin-bottom: 30px;
           }

       </style>

   </head>
   <body>

       <div class="content">
           <div class="main">
               <h1 class="bungee-spice-regular">JuanDiegoWS</h1>
               <p class="saludo" style=" font-family: 'Bungee Spice', sans-serif">hola, <b>Mr. Juan Diego</b> </p>
               <p class="intro"> <b class="name"> {{ $name ?? "Juan Diego Mejia Maestre"  }} </b> quiere ponerse en contacto contigo,</p>
               <p> <b class="titulo"> asunto :</b> {{ $subject ?? 'prueba de correo'  }}</p>
               <p> <b class="titulo"> Email :</b> {{ $email ?? 'jdmeji@misena.edu.co' }}</p>
               <p class="message"> <b class="titulo"> Mensaje : </b> {{ $messageText ?? 'este es el mensaje del correo' }}</p>
               <p> <b class="titulo"> Fecha :</b> {{ $created_at ?? now() }}</p>
           </div>


       </div>

   </body>
   </html>
