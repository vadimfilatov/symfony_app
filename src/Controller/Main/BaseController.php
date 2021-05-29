<?php


namespace App\Controller\Main;


class BaseController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    public function renderDefault()
    {
        return [
            'title' => 'default'
        ];
    }
}