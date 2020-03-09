<?php 
  include_once('../includes/session.php');
  include_once('../templates/tpl_common.php');
  include_once('../templates/tpl_story_cards.php');
  include_once('../templates/tpl_asides.php');
  include_once('../templates/tpl_modals.php');
  include_once('../database/db_story.php');
  include_once('../database/db_user.php');
  include_once('../database/db_channel.php');

  $page_title = 'Bluedit - Search';
  $username = $_SESSION['username'];

  draw_header($username, $page_title); ?>

  <section class="channel">
    
    <?php
      $stories = getStories($_GET);
      draw_story_cards($stories, '<h3>Showing '.count($stories).' search results: </h3>'); 
      ?> 

      <section class="aside-container">
      <?php 

        draw_main_aside();
        
        if($username) { 
          $subscribed_channels = getSubscribedChannels($username);
          draw_channels_aside($subscribed_channels, 'Subscriptions');
        }
        else {
          $channels = get_all_channels();
          draw_channels_aside($channels, 'All Channels');
        }
      ?>
    </section>
  </section>

  <?php

  draw_search_modal($_GET);
  draw_modal_outer_background();
  draw_footer();

?>