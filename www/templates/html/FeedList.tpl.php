<div id="feedlist">
    <h1>Available Channels</h1>
    <p>Select a channel to view.</p>
    <div class="clear"></div>
    <?php
    if (count($context->items)) {
        $pager_layout = new UNL_MediaYak_List_PagerLayout($context->pager,
            new Doctrine_Pager_Range_Sliding(array('chunk'=>5)),
                    UNL_MediaYak_Controller::getURL($context, array_merge($context->options, array('page'=>'{%page_number}'))));
        $pager_links = $pager_layout->display(null, true);
        echo '<ul>';
        foreach ($context->items as $feed) {
            echo '<li>
            <a href="'.htmlentities(UNL_MediaYak_Controller::getURL($feed), ENT_QUOTES).'"><img src="'.htmlentities(UNL_MediaYak_Controller::getURL($feed), ENT_QUOTES).'/image" alt="'.htmlentities($feed->title).' image" /></a>
            <div class="aboutFeed">
            <h3><a href="'.htmlentities(UNL_MediaYak_Controller::getURL($feed), ENT_QUOTES).'">'.htmlentities($feed->title).'</a> </h3>
            '.$savvy->render($feed, 'Feed/Creator.tpl.php').'
            <p>'.htmlentities($feed->description).'</p>
            
            </div>
            <div class="clear"></div>
            </li>';
        }
        echo '</ul>';
        ?>
        
        </div>
        <em>Displaying <?php echo $context->first; ?> through <?php echo $context->last; ?> out of <?php echo $context->total; ?></em>
        <?php echo $pager_links; ?>
<?php 
    } else {
        echo '
        <p>
            Sorry, I could not find any channels.
        </p>';
    }
    ?>
