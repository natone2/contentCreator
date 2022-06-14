<?php
   date_default_timezone_set('Europe/Madrid');
   include 'php/creator.php';
   include 'php/dbh.con.php';
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Nuevo post</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cutive+Mono|Montserrat&display=swap" />
      <link rel="apple-touch-icon" sizes="180x180" href="img/icon.png" />
      <link rel="icon" type="image/png" sizes="32x32" href="img/icon.png" />
      <link rel="icon" type="image/png" sizes="16x16" href="img/icon.png" />
      <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0" />
      <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="editor" />
      <meta property="og:site_name" content="alex" />
      <link rel="stylesheet" href="styles/creator.css" />
      <link rel="stylesheet" href="styles/prism.css" />
      <link rel="stylesheet" href="styles/emoji.css" />
      <script src="js/prism.js"></script>
      <meta property="og:site_name" content="Nuevo Post" />
      <meta property="og:title" content="Nuevo Post" />
      <meta property="og:description" content="Generador de Artículos para website/blog basado en Blogger o Wordpress" />
      <meta property="og:url" content="content_creator.php" />
   </head>
   <body>
      <section id="main-title">
         <div class="title">
            <h3><a href="index.html">&larr; Volver</a></h3>
            <h1>📄 Álex Villalba - Editor de artículos</h1>
            <h2>
               Nuevo post - <script>var today = new Date();
                  var dd = String(today.getDate()).padStart(2, '0');
                  var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                  var yyyy = today.getFullYear();
                  
                  today = dd + '/' + mm + '/' + yyyy;
                  document.write(today);
               </script>
            </h2>
         </div>
      </section>
      <section id="text-content">
      <div class="article">
         <?php
            echo "<form method='POST' action='".setArticle($art)."'>
            <input type='hidden' name='uid' value='Álex Villalba'>
            <input type='hidden' name='date' value='".date('d-m-Y H:i:s')."'>
            <textarea cols='120' rows='27' name='message'></textarea><br><br>
            <button class='test' type='submit' name='postSubmit'>Vista previa</button>
            </form>"
            ;
          
            $texto = "ssss";

            escribirDocumento("web/articles", "test.html", $texto);

            getArticles($art);

            ?>
      <br><br>       
      </div>
   </body>
</html>