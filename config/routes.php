<?php
return [
    "/jobs/" => ["controller" => "App\Controller\JobController", "action" => "list"],
    "/job/" => ["controller" => "App\Controller\JobController", "action" => "show"],
    "/about/" => ["controller" => "App\Controller\PageController", "action" => "about"],
    "/" => ["controller" => "App\Controller\PageController", "action" => "home"],
];