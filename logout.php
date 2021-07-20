<?php

include 'core/seassion.php';

session_destroy();

header('Location: index');


?>