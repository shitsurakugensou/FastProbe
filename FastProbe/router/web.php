<?php
/**
 * ProjectName: FastProbe-web.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/7/16
 * Time: 13:42
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */

$router->get("/", function (){
    include_once APP_VIEW . "/serverlist.php";
});
