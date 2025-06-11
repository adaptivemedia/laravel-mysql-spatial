<?php

namespace Stubs;

class PDOStub extends \PDO
{
    /**
     * Constructor that accepts parameters but does nothing with them
     */
    public function __construct($dsn = '', $username = null, $password = null, $options = null)
    {
        // Do nothing - this is a stub
    }
}
