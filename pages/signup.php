<?php 
  /**
   * Draws the signup page
   */
  include_once('../includes/session.php');
  include_once('../templates/tpl_common.php');
  include_once('../templates/tpl_auth.php');

  if($_SESSION['username'])
    die(header('Location: ../pages/main.php'));

  $page_title = 'Bluedit - Register';

  draw_header(null, $page_title);
  draw_signup();
  draw_footer();
?>