<?php

$connect = mysqli_connect('mysql.db.mdbgo.com','daveborucki_cmsdb','Daveborucki_cmsdb_pass123','daveborucki_cmsdb');

if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}