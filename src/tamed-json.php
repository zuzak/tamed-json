<?php
/* This file is part of tamed-json.
 * Copyright (c) 2012, nano <shinku@dollbooru.org> 
 *
 * Permission to use, copy, modify, and/or distribute this software for any purpose with or without fee is hereby granted, provided that the above copyright notice and this permission notice appear in all copies.
 *
 * THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS 
 * SOFTWARE.
*/

// Define menu url as a constant.
define("HOSPITALITY_URL", "http://www.aber.ac.uk/en/hospitality/hospitality-menu/");
// Set default timezone to make php shut up.
date_default_timezone_set("Europe/London");

// Check if we're running over CGI or CLI.
if (php_sapi_name() == 'cli') {
    // Display usage.
    if ($argc == 1 || $argv[1] == "--help")
        die(json_encode(array("status_code"=>1,"error"=>"usage: php ".$argv[0]." meal=dinner [date=ddmmyy]")));
    // Fill $_GET array with CLI arguments.
    parse_str(implode('&', array_slice($argv, 1)), $_GET);
}

// Lunch or Dinner?
if (isset($_GET["meal"]) && ($_GET["meal"] == "lunch" || $_GET["meal"] == "dinner"))
    $meal = $_GET["meal"];
else if (!isset($_GET["meal"])) // Missing meal parameter
    die(json_encode(array("status_code"=>1,"error"=>"Missing parameter: meal.")));
else // Invalid value
    die(json_encode(array("status_code"=>2,"error"=>"Invalid argument: meal=".htmlspecialchars($_GET["meal"]))));

// Get date.
if (isset($_GET["date"])) {
    $date = date_create_from_format("dmY", $_GET["date"]);
    if (!$date) // Error parsing date.
        die(json_encode(array("status_code"=>2,"error"=>"Invalid date format")));
}

