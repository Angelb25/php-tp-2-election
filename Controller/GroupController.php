<?php

namespace Controller;
use Model\Group;
class GroupController
{
    public function index()
    {
        $groups = Group::getAll();
        include __DIR__ . '/../index.php';
    }
}