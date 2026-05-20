<?php

function base_url($path = "")
{
    $protocol =
        isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] !== "off"
            ? "https://"
            : "http://";
    $host = $_SERVER["HTTP_REFERER"];
    $baseUrl = $protocol . $host;
    return $baseUrl . "/" . ltrim($path, "/");
}

function base_path($path = "")
{
    $rootPath = dirname(__DIR__);
    return $rootPath . DIRECTORY_SEPARATOR . ltrim($path, DIRECTORY_SEPARATOR);
}

function uploads_path($fileName = "")
{
    return base_path("uploads/" . ltrim($fileName, "/"));
}

function asset_url($path = "")
{
    return base_url("assets/") . ltrim($path, "/");
}

function redirect($url)
{
    header("Location: " . base_url($url));
    exit();
}
