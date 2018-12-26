<?php

/*
 * Admin Options of Theme Settings using Titan
 * 
 */


require_once( 'titan-framework-checker.php' );
 

add_action( 'tf_create_options', 'cg_theme_create_options' ); 

function cg_theme_create_options() {


    // Initialize Titan with my special unique namespace
    $titan = TitanFramework::getInstance( 'genietheme' );
 
    // Create my admin panel
    $panel = $titan->createAdminPanel( array(
        'name' => 'Theme Options',
    ) );
 
    
    $generaltab = $panel->createTab( array(
    'name' => 'General Tab',
    ) );
    
    // Create options for my admin panel
    $generaltab->createOption( array(
        'name' => 'LOGO',
        'id' => 'head_logo',
        'type' => 'upload',
        'desc' => 'Upoad logo of site.'
    ) );
    
     $generaltab->createOption( array(
        'name' => 'Header Scripts',
        'id' => 'header_scripts',
        'type' => 'textarea',
        'desc' => 'Enter your header scripts or code like google analytics,webmaster code etc...'
    ) );
 
    
  $generaltab->createOption( array(
        'name' => 'Footer Scripts',
        'id' => 'footer_scripts',
        'type' => 'textarea',
        'desc' => 'Enter your footer scripts or code like google analytics,webmaster code etc...'
    ) );
 
  
    $generaltab->createOption( array(
        'type' => 'save'
    ) );
    
     $Styletab = $panel->createTab( array(
    'name' => 'Styles',
    ) );
    
    
     $Styletab->createOption( array(
        'name' => 'Background color',
        'id' => 'site_bg_color',
        'type' => 'color',
         'css' => 'body { background-color: value; }'
       
    ) );
    
   
     
      $Styletab->createOption( array(
        'type' => 'save'
    ) );
    
$titan = TitanFramework::getInstance( 'genietheme' );
   $pageMetaBox = $titan->createMetaBox( array(
       'name' => 'Additional Page Options',
   ) );

 $pageMetaBox->createOption( array(
        'name' => 'FILES',
        'id' => 'files-site',
        'type' => 'upload',
       
    ) );
}

function get_titan_option($id){
        $titan = TitanFramework::getInstance( 'genietheme' );
        return $titan->getOption( $id );      

}
?>
