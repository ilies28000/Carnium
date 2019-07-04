<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../styles/main.css">
  <title>Document</title>
</head>
<body>
    <div class="cont_a">  
      <a href="../index.html"> <- Revenir a l'acceuil</a>
    </div>
   <div class='head_block'>
      <div class='head_black'>
      </div>
      <h2>Réservation de groupe</h2>
   </div>
   
   <div class="resa_contain">
    <div class='form_container'>
      <div class="form_title">
          <h4>Réservation de groupe</h4>
          <p><em>A partir de 8 personnes</em></p>
      </div> 
  <?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  if(isset($_POST['send']))
  {


      require 'vendor/phpmailer/phpmailer/src/Exception.php';
      require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
      require 'vendor/phpmailer/phpmailer/src/SMTP.php';

      // a parametrer
      $email = 'reservation.carnium@gmail.com';//email d'envoi
      $password = 'Carnium2019';// mdp
      $smtp = 'smtp.gmail.com';//serveur d'envoi
      $to_email = 'iliesbenosman@gmail.com';//adresse email à qui envoyer le mail.


      $to_id = $email;
      $user_message = $_POST['user_message'];
      $toid = $_POST['toid'];
      // $subject = $_POST['subject'].' de '.$_POST['toid'];
      $user_name = $_POST['user_name'];
      $user_prenom = $_POST['user_prenom'];
      $user_number = $_POST['user_number'];
      $user_numero = $_POST['user_numero'];
      $user_date = $_POST['user_date'];


      $mail = new PHPMailer;
      $mail->isSMTP();
      //$mail->SMTPDebug = 4;
      $mail->SetFrom($email);
      $mail->Host = $smtp;
      $mail->Port = 587;
      $mail->SMTPSecure = 'tls';
      $mail->SMTPAuth = true;
      $mail->Username = $email;
      $mail->Password = $password;
      $mail->addAddress($to_email);
      $mail->Subject = $toid;
      $mail->msgHTML("Nom : ".$user_name. '<br>' ."Prenom : ".$user_prenom. '<br>'. "Date de reservation : ".$user_date. '<br>' ."Nombre de personne : ".$user_number. '<br>' ."Message : ".$user_message. '<br>' ."Adresse Email : ".$toid. '<br>' ."Tel : ".$user_numero. '<br>');
      if (!$mail->send()) {
      $error = "Mailer Error: " . $mail->ErrorInfo;
      echo '<p id="para">'.$error.'</p>';
      }
      else {
      echo '<p id="para">Message Bien Recue!</p>';
      }
  }
  else {
    ?>
    <!-- <input type="text" placeholder="Votre email" name="toid"/> -->
    <!-- <input type="text" placeholder="Sujet de votre mail" name="subject"/> -->
    <!-- <textarea rows="4" cols="50" placeholder="Votre message" name="message"></textarea> -->
    <!-- <input type="submit" value="Send" name="send"/> -->
  <!-- </form> -->
  <form action="contact.php" method="post">
            <!-- <div>
                <label for="name">Sujet :</label>
                <input type="text" placeholder="Sujet de votre mail" name="subject"/> 
            </div> -->
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" placeholder="Votre nom" name="user_name"/>
            </div>
            <div>
                <label for="name">Prénom :</label>
                <input type="text" id="prenom" placeholder='Votre prénom' name="user_prenom">
            </div>
            <div>
                <label for="mail">e-mail :</label>
                <input type="email" pattern="[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*"
                required id="mail" placeholder="Votre email" name="toid"/>
            </div>
            <div>
                <label for="numero">Numero de téléphone :</label>
                <input type="number" id="telephone"  placeholder="Votre numéro de téléphone" name="user_numero">
            </div>
            <div>
                <label for="date">Date de réservation :</label>
                <input type="date" id="date" name="user_date">
            </div>
            <div>
                <label for="number">Nombre de personnes :</label>
                <input type="number" id="nbr" min='8' max="20" placeholder="A partir de 8 personnes"name="user_number">
            </div>
            <div>
                <label for="msg">Informations supplémentaires :</label>
                <textarea id="msg" placeholder="Un message à nous transmettre" name="user_message"></textarea>
            </div>
            <div class="button">
                <input id="button" type="submit" value="Send" name="send"/>
            </div>
        </form>
<?php } ?>
</div>
      <div class="info_supp">
        <div class='resto_data'>
          <div class="form_title">
          <h4>Réservation via Lafourchette</h4>
          <p><em>A partir d'une personne</em></p>
          <img src="../images/lafourchette.png" alt="logo Lafourchette">
          <a href="https://www.lafourchette.com/restaurant/carnium/459713">Lafourchette.com</a>
          <hr>
        </div>
        </div>
        <div class='open_hour'>
          <h3>Nos horaires</h3>
          <p>Du Lundi au Samedi : 
            <p>12h00-14h30 </p>
            <p>18h00-22h00</p>
          </p>
          <p>Fermé le Dimanche</p>
        </div>
      </div>
   </div>
</body>
<script>
</script>
</html>
<?php

?>
