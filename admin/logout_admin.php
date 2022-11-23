<?php
require 'admin_db_conn.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: login_admin.php");