<?php
  define( 'WP_USE_THEMES', FALSE );
  require( '../../../../wp-load.php' );

if($_POST) {
  $to_Email = "office@viarent.rs";
  $dev_Email = "szekelykalman@delta-truck.hu";
  $subject = __('VIARENT.RS | Prispeo zahtev za ponudu – Zakup.','viars');
  $resp_subject = "SDT GROUP D.O.O. | Viarent.rs - Hvala što ste nam se obratili";

  if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

    $output = json_encode(
    array(
      'type'=>'error',
      'text' => 'Request must come from Ajax'
    ));

    die($output);
  }

  if( !isset($_POST["userName"]) || !isset($_POST["userEmail"]) ) {
    $output = json_encode(array('type'=>'error', 'text' => __('Obavezno polje koje nedostaje','viars') ));
    die($output);
  }
  $user_Name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
  $user_Email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
  $user_Tel = filter_var($_POST["userTel"], FILTER_SANITIZE_STRING);
  $user_Company = filter_var($_POST["userCompany"], FILTER_SANITIZE_EMAIL);
  $user_Address = filter_var($_POST["userAddress"], FILTER_SANITIZE_STRING);
  $user_Message = filter_var($_POST["userMsg"], FILTER_SANITIZE_STRING);
  $user_Vehicle = filter_var($_POST["userVehicle"], FILTER_SANITIZE_STRING);
  $user_Time = filter_var($_POST["userTime"], FILTER_SANITIZE_STRING);

  $user_Message = str_replace("\&#39;", "'", $user_Message);
  $user_Message = str_replace("&#39;", "'", $user_Message);

  if(strlen($user_Name)<4) {
    $output = json_encode(array('type'=>'error', 'text' => __('Molimo da navedete vaše puno ime i prezime!','viars')));
    die($output);
  }
  if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) {
    $output = json_encode(array('type'=>'error', 'text' => __('Invalid e-mail','viars')));
    die($output);
  }
//   if(strlen($user_Tel)<6) {
//     $output = json_encode(array('type'=>'error', 'text' => __('Érvénytelen telefonszám','viars')));
//     die($output);
//   }


  $headers = 'From: '.$user_Email.'' . "\r\n" .
  'Reply-To: '.$user_Email.'' . "\r\n" .
  'BCC: '.$dev_Email.'' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

  $sentMail = @wp_mail($to_Email, $subject, 'Vehicle: '.$user_Vehicle. "\r\n". 'Name: '.$user_Name. "\r\n". 'E-mail: '.$user_Email. "\r\n" .'Phone: '.$user_Tel . "\r\n". 'Rental period: '.$user_Time. "\r\n" . 'Company: '.$user_Company. "\r\n" .'Address: '.$user_Address . "\r\n". "\r\n\n"  .' '.$user_Message, $headers);

  if(!$sentMail) {
    $output = json_encode(array('type'=>'error', 'text' => __('Slanje poruke nije uspelo. Molimo obratite se mejlom ili telefonom!','viars')));
    die($output);
  } else {

    $resp_headers = 'From: '.$to_Email.'' . "\r\n" .
    'Reply-To: '.$to_Email.'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $resp_text=__('Poštovani gospodine','viars').' '.$user_Name.'!'."\r\n\n".
    __('Hvala što ste nam se obratili. Naš saradnik će vam se uskoro javiti preko datog kontakta.','viars')."\r\n\n".
    'S poštovanjem,'."\r\n".'SDT GROUP D.O.O.';
    @wp_mail($user_Email, $resp_subject, $resp_text, $resp_headers);
    $output = json_encode(array('type'=>'message', 'text' => __('Hvala što ste nam se obratili. Naš saradnik će vam se uskoro javiti preko datog kontakta.','viars')));
    die($output);
  }
}

?>