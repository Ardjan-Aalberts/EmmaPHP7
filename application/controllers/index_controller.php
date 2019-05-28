<?php

class index_controller extends EmmaController
{
    public function init()
    {

    }

    public function index()
    {
        $this->page();
    }

    public function page($page = "index")
    {
        Loader::view("home/" . $page . ".php");
    }
}