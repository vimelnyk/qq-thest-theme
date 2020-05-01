<?php
if( !defined( 'CUSTOMER_PAGE' ) )
  exit;
?><!DOCTYPE HTML>
<html lang="<?php echo $config['language']; ?>">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
  <title><?php echo $sTitle.$config['title']; ?></title>
  <meta name="Description" content="<?php echo $sDescription; ?>" />

  <link rel="stylesheet" href="<?php echo $config['dir_skin'].$config['style']; ?>" />
  <link rel="stylesheet" href="<?php echo $config['dir_skin']; ?>assets/prod/main.min.css" />

  <script src="<?php echo $config['dir_plugins']; ?>jquery.min.js"></script>
  <script src="<?php echo $config['dir_core']; ?>common.js"></script>
  <script src="<?php echo $config['dir_libraries']; ?>quick.box.js"></script>
  <script src="<?php echo $config['dir_skin']; ?>assets/prod/main.min.js"></script>
  <script>
    var aCF = {
      'sWarning' : '<?php echo $lang['cf_no_word']; ?>',
      'sEmail' : '<?php echo $lang['cf_mail']; ?>',
      'sInt' : '<?php echo $lang['cf_wrong_value']; ?>'
    };
  </script>
  <?php displayAlternateTranslations( ); ?>
</head>
<body<?php if( isset( $aData['iPage'] ) && is_numeric( $aData['iPage'] ) ) echo ' id="page'.$aData['iPage'].'"'; elseif( isset( $aData['iProduct'] ) && is_numeric( $aData['iProduct'] ) ) echo ' id="product'.$aData['iProduct'].'"'; ?>>
<ul id="skiplinks">
  <li><a href="#menu2" tabindex="1"><?php echo $lang['Skip_to_main_menu']; ?></a></li>
  <li><a href="#content" tabindex="2"><?php echo $lang['Skip_to_content']; ?></a></li>
  <?php 
    if( isset( $config['page_search'] ) && is_numeric( $config['page_search'] ) && isset( $oPage->aPages[$config['page_search']] ) ){ ?>
  <li><a href="#search" tabindex="3"><?php echo $lang['Skip_to_search']; ?></a></li>
  <?php } ?>
</ul>

<div id="container">

  <header id="header">

    <div id="head1" class="d-flex align-items-center justify-content-between"><?php // first top menu starts here ?>
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <span>
            +380 (44) 444 44 44
          </span>
          <span>
            mail@mail.com
          </span>
        </div>
        
      </div>
    </div>

    <div id="head2"><?php // banner, logo and slogan starts here ?>
      <div class="container">
        <div class="row justify-content-between align-items-center">

          <div class="col-4">
            
                    <div id="logo" class="logo"><?php // logo and slogan ?>
                      <div id="title" class="logo__title"><a href="./"><?php echo $config['logo']; ?></a></div>
                      <div id="slogan" class="logo__slogan"><?php echo $config['slogan']; ?></div>
                    </div>

          </div>
          <div class="col-6">
<?php 
        if( !isset( $config['this_is_order_page'] ) ){ // left column with left menu ?>
        <?php
          if( isset( $config['page_search'] ) && is_numeric( $config['page_search'] ) && isset( $oPage->aPages[$config['page_search']] ) ){ // search form starts here ?>
            <a id="search" tabindex="-1"></a>
            <form method="post" action="<?php echo $oPage->aPages[$config['page_search']]['sLinkName']; ?>" id="searchForm" class="search-form">
              <fieldset class="search-form__fieldset">
                <legend><?php echo $lang['Search_form']; ?></legend>
                <label for="searchField"><?php echo $lang['search']; ?></label><input type="text" name="sPhrase" id="searchField" value="<?php echo $sPhrase; ?>" class="search-form__input" accesskey="1" />
                <input type="submit" value="<?php echo $lang['search']; ?> &raquo;" class="search-form__submit" />
          
              </fieldset>
            </form><?php
          }  // search form ends here ?>
         <?php 
        }?> 
          </div>
          <div class="col-2">
          <div class="cart">
          <?php echo $oPage->throwMenu( 1, $iContent, 0 ); // content of top menu first ?>
          </div>
          </div>
        </div>
      
        
      </div>
    </div>

    <div id="head3"><?php // second top menu starts here ?>
      <nav class="container navigation">
              <?php 
        if( !isset( $config['this_is_order_page'] ) ){ // left column with left menu ?>
       
          <?php 
          echo $oPage->throwMenu( 3, $iContent, 1, true ); // content of left menu ?><?php 
        }?>
      </div>
    </div>

    </header>

  <main id="body"<?php if( isset( $config['this_is_order_page'] ) ) echo ' class="order"'; elseif( isset( $config['this_is_basket_page'] ) ) echo ' class="basket-page"'; ?>>
    <div class="container">
      <div class="row">

      <aside id="column" class="col-md-3 sidebar">
      <?php 
        if( !isset( $config['this_is_order_page'] ) ){ // left column with left menu ?>
       
          <?php 
          echo $oPage->throwMenu( 3, $iContent, 1, true ); // content of left menu ?><?php 
        }?>
      </aside>
      <div id="content" class="col-md-9">