<!DOCTYPE html>
<html>
   <head>
      <title>
      </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="style.less"></script>
      <link rel="stylesheet" href="v2/uikit.css" />
      <link rel="stylesheet" href="css.css" />
      <script src="jsv3/uikit.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit-icons.min.js"></script>	
   </head>
   <body>
      <nav class="uk-navbar-container" uk-navbar>
         <div class="uk-navbar-flip name="jon">
            <ul class="uk-navbar-nav">
               <li><a href="index.html">FrontPage</a></li>
            </ul>
            <ul class="uk-navbar-nav">
               <li><a href="portofolio.html">Portofolio</a></li>
            </ul>
            <ul class="uk-navbar-nav">
               <li><a href="blog.html">Blog</a></li>
            </ul>
            <ul class="uk-navbar-nav">
               <li><a href="documentation.html">Documentation</a></li>
            </ul>
            <ul class="uk-navbar-nav">
               <li><a href="contact.html">Contact</a></li>
            </ul>
         </div>
      </nav>
      <div class="uk-margin uk-text-contrast uk-text-center uk-flex uk-flex-center uk-flex-middle" data-uk-parallax="{bg: '-200'}" style="height: 800px; background-image: url(img/afisare/gold.jpg); background-size: 1600px 900px; background-repeat: no-repeat; background-position: 50% -43.1122px;">
         <div class="uk-width-medium-1-1">
            <?php
               $numeErr = $emailErr = $telefonErr = $dataErr = "";
               $nume = $email = $telefon = $data = NULL;
               $descriere = $_POST["descriere"];
               $eveniment = $_POST["eveniment"];
			   
               if ($_SERVER["REQUEST_METHOD"] == "POST") {
               if (empty($_POST["name"])) {
               echo "
               <p class='err'>
               <b> Trebuie sa va introduceti numele! 
               </b>
               </p>";
               } else {
               $nume = test_input($_POST["name"]);
               }
               if (empty($_POST["email"])) {
               echo  "
               <p class='err'>
               <b>Trebuie sa va introduceti email-ul! 
               </b>
               </p>"	;
               } else {
               $email = test_input($_POST["email"]);
               }
               if (empty($_POST["telefon"])) {
               echo  "
               <p class='err'>
               <b>Trebuie sa introduceti un numar de telefon! 
               </b>
               </p>";
               } else {
               $telefon = test_input($_POST["telefon"]);
               }
               if (empty($_POST["data"])) {
               echo  "
               <p class='err'>
               <b>Data evenimentului este necesara! 
               </b>
               </p>";
               } else {
               $data = test_input($_POST["data"]);
               }
               }
               function test_input($data) {
               $data = trim($data);
               $data = stripslashes($data);
               $data = htmlspecialchars($data);
               return $data;
               }
               echo "
               <h2>Datele dvs:
               </h2>";
               echo "Nume: ", $nume;
               echo "
               <br>";
               echo "Email ", $email;
               echo "
               <br>";
               echo "Telefon: ", $telefon;
               echo "
               <br>";
               echo "Data: " , $data;
               echo "
               <br>";
               ?>
            <div class="uk-container-center textFirstPageSmall2">
               <p>
                  <?php
                     echo "Descriere: ", $descriere;
                     echo "<br>";
                     ?>	
               </p>
            </div>
            <?php
               echo "Eveniment: ", $eveniment;
               echo "<br>";
               if(!is_null($nume) || !is_null($email) || !is_null($telefon) || !is_null($data)){
               echo "<p class='ok'>Mesajul a fost trimis cu success!</p>";
               }	else { 
               echo "<p class='err'>Mesajul nu a fost trimis deoarece unu sau mai multe campuri obligatorii nu au fost completate!</p>";
               }
               ?>
            <br>
            <input type="submit" value="INAPOI" onclick="window.location.href='contact.html'" />
         </div>
      </div>
      </div>
      </div>
      </div>
      <div class="footer">
         <ul class="uk-list ">
            <li>0736 010 166</li>
            <li>office@ivyevents.ro</li>
            <li>Str. A. Imbroane 90 (vis-a-vis de Muzeul Satului Bana?ean) Timisoara, </li>
            <li>Romania</li>
            <li>
               <a href="" class="uk-icon-button uk-icon-facebook	" style="position: relative; left: -600px"></a>
               <a href="" class="uk-icon-button uk-icon-instagram	" style="position: relative; left: -600px"></a>
               <a href="" class="uk-icon-button uk-icon-snapchat	" style="position: relative; left: -600px"></a>
            </li>
            <li> </li>
         </ul>
      </div>
   </body>
</html>