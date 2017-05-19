<?php
/**
 * Htpasswd : admin/Karate78$
 */

include_once(__DIR__. "/../../src/bootstrap.php");

date_default_timezone_set('Europe/Paris');

$params = isset($_POST) ? $_POST : [];
$get =  isset($_GET) ? $_GET : [];
$action = array_key_exists("action", $get) ? $get['action'] : null;
$success = null;

if ($action == "delete")
{
    $id = $get["id"];
    $Ad = Ad::findById($id);
    $Ad->delete();
    header("Location: /admin");
    exit;
}
elseif (!empty($params))
{
    $ad = $params["ad"];
    $id = array_key_exists("id", $ad) ? $ad['id'] : null;
    $title = $ad['title'];
    $content = $ad['content'];

    if ($id === null) {
        $Ad = new Ad();
        $Ad->set("title", $title);
        $Ad->set("content", trim($content));
        $Ad->set("date", time());
        $Ad->save();
        $success = "L'annonce a été créée avec succès !";
    } else {
        $Ad = Ad::findById($id);
        $Ad->set("title", $title);
        $Ad->set("content", trim($content));
        $Ad->save();
        $success = "L'annonce a été modifiée avec succès !";
    }
}

$Ads = Ad::findByLast();

include_once(__DIR__. "/views/view.php");