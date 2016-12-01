<?php

/**
 * Controlleur gérant toutes les actions liées à un lieu.
 */
class LieuController extends Controller
{
    public function index() {
        $this->render("index");
    }
}