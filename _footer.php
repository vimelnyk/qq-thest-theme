<?php
if( !defined( 'CUSTOMER_PAGE' ) )
  exit;
?>
        <div id="options"><div class="print"><a href="javascript:window.print();"><?php echo $lang['print']; ?></a></div><div class="back"><a href="javascript:history.back();">&laquo; <?php echo $lang['back']; ?></a></div></div>
      </div>
    </div>
  </div> 
  <!-- content -->
         </div> 
       <!--.row -->

  <footer id="foot"><?php // footer starts here ?>
  <div>
     <?php echo $oPage->throwMenu( 2, $iContent, 0 ); // content of top menu second ?>
  </div>
    <div class="container">

      <div id="copy"><?php echo $config['foot_info']; ?></div><!-- copyrights here -->
      <!-- <div class="foot" id="powered"><a href="./"><img src="<?php echo $config['dir_skin']; ?>img/quick.cart.png" alt="Script logo" width="187" height="15" /></a></div> -->
    </div>
  </footer>
  
</main>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>