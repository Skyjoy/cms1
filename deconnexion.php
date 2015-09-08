<?php

start_session();

unset($_SESSION['user']);

$_SESSION['user'] = null;

session_destroy();