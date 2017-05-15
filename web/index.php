<?php

include_once(__DIR__. "/../src/bootstrap.php");

date_default_timezone_set('Europe/Paris');

$params = isset($_POST) ? $_POST : [];
$action = array_key_exists("action", $params) ? $params['action'] : null;

if (!isset($_SESSION['participations'])) {
    $_SESSION['participations'] = [];
}

$session_participations = $_SESSION['participations'];

if ($action == "add_participation")
{
    try {
        $id = array_key_exists("id", $params) ? $params['id'] : null;

        if (!in_array($id, $session_participations)) {
            $Film = Film::addParticipation($id);
            $session_participations[] = $id;
        }
    } catch (\Exception $e) {
        if (Config::$config['debug']) {
            throw $e;
        } else {
            echo "Une erreur est survenue";
        }
    }

    die;
}

include_once(__DIR__. "/../views/view.php");