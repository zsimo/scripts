<?php

    $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
	socket_bind($socket, '127.0.0.1', 65000);
	socket_listen($socket);

	print_r("socket listen on 127.0.0.1");

?>