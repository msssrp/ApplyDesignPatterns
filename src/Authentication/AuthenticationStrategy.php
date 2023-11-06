<?php

interface AuthenticationStrategy
{
    public function authenticate($credentials);
}
?>
