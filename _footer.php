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

  <footer id="foot" class="footer"><?php // footer starts here ?>
  <div class="footer__navigation background-main">      
    <div class="container">
      <div class="row">
     <?php echo $oPage->throwMenu( 2, $iContent, 0 ); // content of top menu second ?>
      </div>
    </div>
  </div>
  <div class="footer__copyright">
    <div class="container">
      <div class="row">
        <div class="col">
          <small id="copy"><?php echo $config['foot_info']; ?></small> 

        </div>
      </div>

    </div>

  </div>
  </footer>
  
</main>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>