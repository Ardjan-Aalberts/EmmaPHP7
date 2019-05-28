<?php

class four_oh_four extends EmmaController
{
    public function index()
    {
        $this->page();
    }

    public function page()
    {
        Loader::view("404/fourohfour.php");
    }
}