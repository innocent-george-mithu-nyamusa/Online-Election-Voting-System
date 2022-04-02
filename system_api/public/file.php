<?php 

$fingeprint = "New Stuff";

function getFingerprint(){
    global $fingeprint;

    return $fingeprint;
}

function setFingerprint(string $rfingerId) {
    global $fingeprint;

    $fingeprint = $rfingerId;
}