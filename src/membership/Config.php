<?php

namespace membership;

class Config {
    
    protected $config_host;
    protected $config_database;
    protected $config_username;
    protected $config_password;
    
    function __construct()
    {
        $this->config_host = "localhost";
        $this->config_database = "member";
        $this->config_username = "aichatbot;
        $this->config_password = "Bulldog@1979";
    }
}
