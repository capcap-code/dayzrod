<?php

session_start();

session_unset();

session_destroy();

header('location:https://crossfire.epic-gaming.net');

exit();
?>