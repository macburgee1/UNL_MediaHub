<?php

require_once 'UNL/Autoload.php';
require_once dirname(__FILE__).'/../config.inc.php';

$all_items_feed = 'http://pipes.yahoo.com/pipes/pipe.run?_id=facba651e446f1754f729a8edd6e1083&_render=php';
$feed_url = $recent_items_feed = 'http://pipes.yahoo.com/pipes/pipe.run?_id=fc9a8e08fbaa48a6da49e871fbea3d24&_render=php';

$mediahub = new UNL_MediaHub();

$mediahub->harvest(new UNL_MediaHub_Harvester_YahooPipe($feed_url));

