<?php
  define( 'WP_USE_THEMES', FALSE );
  require( '../../../../wp-load.php' );

if($_POST) {
  $to_Email = "szabogabi@gmail.com";
  $dev_Email = "leads@vieeye.hu";
  $subject = __('Kapcsolatfelvétel a weboldalon','cadcam');
  $resp_subject = "Viarent Srbjia - Köszönjük, hogy kapcsolatba lépett velünk! ";

  if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

    $output = json_encode(
    array(
      'type'=>'error',
      'text' => 'Request must come from Ajax'
    ));

    die($output);
  }

  if( !isset($_POST["userName"]) || !isset($_POST["userEmail"]) ) {
    $output = json_encode(array('type'=>'error', 'text' => __('Hiányzó kötelező mező','cadcam') ));
    die($output);
  }
  $user_Name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
  $user_Email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
  $user_Tel = filter_var($_POST["userTel"], FILTER_SANITIZE_STRING);
//   $user_Service = filter_var($_POST["userService"], FILTER_SANITIZE_STRING);
  $user_Message = filter_var($_POST["userMsg"], FILTER_SANITIZE_STRING);

  $user_Message = str_replace("\&#39;", "'", $user_Message);
  $user_Message = str_replace("&#39;", "'", $user_Message);

  if(strlen($user_Name)<4) {
    $output = json_encode(array('type'=>'error', 'text' => __('Kérjük, adja meg a teljes nevét!','cadcam')));
    die($output);
  }
  if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) {
    $output = json_encode(array('type'=>'error', 'text' => __('Érvénytelen e-mail-cím','cadcam')));
    die($output);
  }
//   if(strlen($user_Tel)<6) {
//     $output = json_encode(array('type'=>'error', 'text' => __('Érvénytelen telefonszám','cadcam')));
//     die($output);
//   }


  $headers = 'From: '.$user_Email.'' . "\r\n" .
  'Reply-To: '.$user_Email.'' . "\r\n" .
  'BCC: '.$dev_Email.'' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

  $sentMail = @wp_mail($to_Email, $subject, 'Név: '.$user_Name. "\r\n". 'E-mail: '.$user_Email. "\r\n" .'Telefon: '.$user_Tel . "\r\n". "\r\n\n"  .' '.$user_Message, $headers);

  if(!$sentMail) {
    $output = json_encode(array('type'=>'error', 'text' => __('Üzenet küldése nem sikerült. Vegye fel velünk a kapcsolatot e-mailben vagy telefonon!','cadcam')));
    die($output);
  } else {

    $resp_headers = 'From: '.$to_Email.'' . "\r\n" .
    'Reply-To: '.$to_Email.'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $resp_text=__('Tisztelt','cadcam').' '.$user_Name.'!'."\r\n\n".
    __('Köszönjük, hogy kapcsolatba lépett velünk! Szakértőnk hamarosan jelentkezik a megadott elérhetőségek egyikén.','cadcam')."\r\n\n".
    'Üdvözlettel,'."\r\n".'A Viarent Srbjia csapata';
    @wp_mail($user_Email, $resp_subject, $resp_text, $resp_headers);
    $output = json_encode(array('type'=>'message', 'text' => __('Köszönjük az érdeklődést, az Ön által megadott e-mail-címre üzenetet küldtünk.','cadcam')));
    die($output);
  }
}

?>