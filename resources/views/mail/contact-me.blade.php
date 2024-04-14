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
       <style>
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
               min-height: 500px;
               height: 100%;
               padding: 0% 20%;
               display: grid;
               place-content: center;
           }


           .main {
               width: 100%;
               height: 90%;
               margin: 30px;
               background-color: #0b0012;
               border-radius: 10px;
               padding: 15px;
               box-sizing: border-box;
           }

           p {
               margin: 5px 0;
               color: white;
           }

           .titulo {
               text-transform: capitalize;
               font-weight: 900;
               color: #fc804a;
           }

           @media(max-width : 500px) {

               .content {
                   min-height: 0;
                   padding: 0%;
               }

               .main {
                   width: 90%;
                   margin: auto;
                   padding: 20px;
               }
           }

       </style>

   </head>
   <body>

       <div class="content">
           <div class="main">
               <p>hola, Mr. Juan Diego</p>
               <p> {{ $name ?? "Juan Diego Mejia Maestre"  }} quiere ponerse en contacto contigo,</p>
               <p> <b class="titulo"> asunto :</b> {{ $subject ?? 'prueba de correo'  }}</p>
               <p> <b class="titulo"> Email :</b> {{ $email ?? 'jdmeji@misena.edu.co' }}</p>
               <p> <b class="titulo"> Mensaje : </b> {{ $messageText ?? 'este es el mensaje del correo' }}</p>
               <p> <b class="titulo"> Fecha :</b> {{ $created_at ?? now() }}</p>
           </div>


       </div>

   </body>
   </html>
