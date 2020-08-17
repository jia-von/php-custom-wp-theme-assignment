<?php 

//Enqueue theme stylesheets and scripts.

add_action( 'wp_enqueue_scripts', function () {
    // Get our JS ready to output in the <head> via wp_head() (see header.php.)
    wp_enqueue_script(
      'parsley-theme-scripts', // Our new name for this script file.
      get_theme_file_uri( '/assets/js/scripts.js' ), // URL / path to your script.
      array(), // Does your script depend on other JS libraries/files?
      strftime( get_theme_file_uri( '/assets/js/scripts.js' ) ), // Version number of this script.
      FALSE // Output in the "footer"? (Before </body> closing tag.)
    );
    // Get our CSS ready to output in the <head> via wp_head() (see header.php.)
    wp_enqueue_style(
      'parsley-theme-styles', // Our new name for this stylesheet file.
      get_theme_file_uri( '/assets/css/main.css' ), // URL / path to your styles.
      strftime( get_theme_file_uri( '/assets/css/main.css' ) ), // Version number of this stylesheet.
      'all' // What sort of stylesheet (media query) is this?
    );
  } );
