<?php

$Connect = pg_connect("postgres://ypckzzwuxfbsaq:1ea06ede567cfc723c5b6ba6858fd79353b15749ce7b304cc39a75fea2271d94@ec2-54-205-232-84.compute-1.amazonaws.com:5432/d87b6rn5h9kq45");
if (!$Connect) {
        die("Connection failed");
    }
?>
