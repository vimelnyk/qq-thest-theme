<?php
if( !defined( 'CUSTOMER_PAGE' ) )
  exit;
?>
<!DOCTYPE HTML>
<html lang="<?php echo $config['language']; ?>">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title><?php echo $sTitle.$config['title']; ?></title>
    <meta name="Description" content="<?php echo $sDescription; ?>" />

    <link rel="stylesheet" href="<?php echo $config['dir_skin']; ?>colors.css" />
    <link rel="stylesheet" href="<?php echo $config['dir_skin']; ?>assets/prod/main.min.css" />
    <link rel="stylesheet" href="<?php echo $config['dir_skin'].$config['style']; ?>" />

    <script src="<?php echo $config['dir_plugins']; ?>jquery.min.js"></script>
    <script src="<?php echo $config['dir_core']; ?>common.js"></script>
    <script src="<?php echo $config['dir_libraries']; ?>quick.box.js"></script>
    <script src="<?php echo $config['dir_skin']; ?>assets/prod/main.min.js"></script>
    <script>
    var aCF = {
        'sWarning': '<?php echo $lang['cf_no_word']; ?>',
        'sEmail': '<?php echo $lang['cf_mail']; ?>',
        'sInt': '<?php echo $lang['cf_wrong_value']; ?>'
    };
    </script>
    <?php displayAlternateTranslations( ); ?>
</head>
<body<?php if( isset( $aData['iPage'] ) && is_numeric( $aData['iPage'] ) ) echo ' id="page'.$aData['iPage'].'"'; elseif( isset( $aData['iProduct'] ) && is_numeric( $aData['iProduct'] ) ) echo ' id="product'.$aData['iProduct'].'"'; ?>>
  <div id="overlay" class="overlay"></div>
  <div id="mobileMenu" class="mobile-menu d-lg-none">
    <button id="closeMobileMenu" type="button" class="close-mobile-menu"></button>
    <?php include 'tpl/_main_menu.php';?>
  </div>
    <ul id="skiplinks">
        <li><a href="#menu2" tabindex="1"><?php echo $lang['Skip_to_main_menu']; ?></a></li>
        <li><a href="#content" tabindex="2"><?php echo $lang['Skip_to_content']; ?></a></li>
        <?php 
    if( isset( $config['page_search'] ) && is_numeric( $config['page_search'] ) && isset( $oPage->aPages[$config['page_search']] ) ){ ?>
        <li><a href="#search" tabindex="3"><?php echo $lang['Skip_to_search']; ?></a></li>
        <?php } ?>
    </ul>

    <div id="container">
      <header class="header-mobile d-lg-none">
        <div class="header-mobile__head">
            <?php include 'tpl/_phones_list.php';?>
        </div>
        <div class="header-mobile__main background-main">
          <button id="openMobileMenu" type="button" class="open-mobile-menu">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <?php include 'tpl/_logo.php';?>
          <?php include 'tpl/_mini-basket.php';?>
        </div>
        <div class="header-mobile__search background-light-grey">
          <div class="container">
            <div class="row">
              <div class="col">
                <?php include 'tpl/_search.php';?> 
              </div>
            </div>
          </div>
        </div>

      </header>

      <header id="header" class="header-desktop d-none d-lg-block">

            <div id="head1" class="header-desktop__head background-light-grey">
                <?php ?>
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <?php include 'tpl/_phones_list.php';?>
                    </div>
                </div>
            </div>

            <div id="head2" class="header-desktop__body">
                <div class="container">
                    <div class="row justify-content-between align-items-center">

                        <div class="col-4">
                            <?php include 'tpl/_logo.php';?>
                        </div>
                        <div class="col-6">                            
                          <?php include 'tpl/_search.php';?>                           
                        </div>
                        <div class="col-2">
                          <?php include 'tpl/_mini-basket.php';?>
                        </div>
                    </div>
                </div>
            </div>

            <div id="head3" class="header-desktop__nav background-main">
                <div class="container navigation">
                    <?php include 'tpl/_main_menu.php';?>
                </div>
            </div>
    </div>

    </header>

    <main id="body"
        <?php if( isset( $config['this_is_order_page'] ) ) echo ' class="order"'; elseif( isset( $config['this_is_basket_page'] ) ) echo ' class="basket-page"'; ?>>
        <div class="container">
            <div class="row">
              <?php 
                  if( !isset( $config['this_is_order_page'] ) ){  ?>
                <aside id="column" class="col-lg-3 sidebar d-none d-lg-block">
                    <?php include 'tpl/_main_menu.php'; ?>
                </aside>
              <?php } ?>
                <div id="content" class="col">