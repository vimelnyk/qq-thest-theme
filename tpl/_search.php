<?php
    if( isset( $config['page_search'] ) && is_numeric( $config['page_search'] ) && isset( $oPage->aPages[$config['page_search']] ) ){ // search form starts here ?>
                    <a id="search" tabindex="-1"></a>
                    <form method="post"
                        action="<?php echo $oPage->aPages[$config['page_search']]['sLinkName']; ?>"
                        id="searchForm" class="search-form">
                        <fieldset class="search-form__fieldset">
                            <legend><?php echo $lang['Search_form']; ?></legend>
                            <label for="searchField"><?php echo $lang['search']; ?></label><input type="text"
                                name="sPhrase" id="searchField" placeholder="<?php echo $lang['search']; ?>"
                                value="<?php echo $sPhrase; ?>" class="search-form__input" accesskey="1" />
                            <input type="submit" value="<?php echo $lang['search']; ?> &raquo;"
                                class="search-form__submit" />

                        </fieldset>
                    </form><?php
    }  // search form ends here ?>