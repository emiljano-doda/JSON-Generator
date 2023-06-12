<?php
/*
 * Simple JSON generation from static array
 * http://localhost/songs/album_tracks.php?id=2
 */

include_once './data.php';

// Check if album id is posted as GET parameter
if (isset($_GET["id"]) && $_GET["id"] != "") {

    // Check if the album id exists in album_tracks array
    if (array_key_exists($_GET["id"], $album_tracks)) {
        // print album tracks json
        echo json_encode($album_tracks[$_GET["id"]]);
    } else {
        // no album found
        echo "{}";
    }
}
?>
