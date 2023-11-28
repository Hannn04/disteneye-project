<?php

    $connect = mysqli_connect("localhost", "root", "", "expo");

    if (mysqli_connect_errno()) {
        echo "ga konek".mysqli_connect_error();
    }