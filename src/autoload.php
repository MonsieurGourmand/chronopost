<?php

spl_autoload_register(function ($class) {
    require("Creneau/autoload.php");
    require("PointRelais/autoload.php");
    require("Quickcost/autoload.php");
    require("Shipping/autoload.php");
    require("Tracking/autoload.php");
});
