<?php

/***************************************************
 *                      ROUTES                     *
 **************************************************/

/***
 * If protected is false, level can be removed from array, because there's no need to check if the user has the correct
 * level.
 *
 * Level 0 means that everyone who is logged in can access the page, people who are not logged in will be redirected to
 * the login page.
 *
 * If there's a faulty route / non-existing controller the app will crash, and not allow anyone to access any page to
 * prevent errors.
 */

$routes = array(
    "" =>
        array(
            "controller" => "index_controller",
            "protected" => false,
            "level" => array(0)
        ),
    "home" =>
        array(
            "controller" => "index_controller",
            "protected" => false,
            "level" => array(0)
        ),
    "404" =>
        array(
            "controller" => "four_oh_four",
            "protected" => false,
            "level" => array(0)
        ));

// What is this doing here?
$allowed_requests = array(
    null
);

define("ROUTES", $routes);
