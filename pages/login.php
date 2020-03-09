<?php 
  /**
   * Draws the login page
   */
  include_once('../includes/session.php');
  include_once('../templates/tpl_common.php');
  include_once('../templates/tpl_auth.php');

  // Verify if user is logged in
  if($_SESSION['username'])
    die(header('Location: ../pages/main.php'));
  
  $page_title = 'Bluedit - Login';

  draw_header(NULL, $page_title);
  draw_login();
  draw_footer();
?>