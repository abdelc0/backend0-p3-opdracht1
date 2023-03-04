<?php

class Core
{
    // Properties

    // Constructor
    public function __construct()
    {
        $url = $this->getURL();
        
        var_dump($url);exit();
    }  
    
    public function getURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');

            $url = filter_var($url, FILTER_SANITIZE_URL);

            $url = explode('/', $url);

            return $url;
        }
    }
}
?>
