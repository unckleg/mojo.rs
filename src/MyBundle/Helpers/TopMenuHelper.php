<?php

namespace MyBundle\Helpers;

use Symfony\Component\Console\Helper\HelperInterface;
use Symfony\Component\Console\Helper\Helper;

class TopMenuHelper extends Helper
{
    public function showMenu()
    { ?>

    <div class="header-top">
        <div class="container">
            <a href="#offcanvas" class="uk-navbar-toggle hidden-lg" data-uk-offcanvas>
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
            </a>
            <nav>
                <ul class="nav nav-pills nav-top nav-top-right">
                    <li class="search"><a data-target=".search-wrapper" data-toggle="modal" href="javascript:void(0);"><i class="fa fa-search"></i></a></li>
                    <li class="dropdown langs">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-globe"></i> <span>Jezik</span> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Engleski</a></li>
                            <li><a href="#">Random</a></li>
                            <li><a href="#">Random</a></li>
                        </ul>
                    </li>
                    <li class="login">
                        <a data-target=".form-wrapper" data-toggle="modal" href="javascript:void(0);"><i class="fa fa-user"></i> <span>Pristup/Registracija</span></a>
                    </li>
                    <li class="shopping-cart">
                        <a href="#offcanvas-cart" data-uk-offcanvas><i class="fa fa-shopping-cart"></i> <span>(<span>0</span>)</span></a>
                    </li>
                </ul>
            </nav>
            <div class="navbar-collapse nav-main-collapse collapse">
                <nav class="nav-main">
                    <ul class="nav nav-pills nav-main-menu">
                        <li class="dropdown active">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Početna</a>
                        </li>
                        <li>
                            <a href="">Novo</a>
                        </li>
                        <li>
                            <a href="">Muško</a>
                        </li>
                        <li>
                            <a href="">Žensko</a>
                        </li>
                        <li>
                            <a href="">Akcija</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">O Nama</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="">Novosti</a>
                                </li>
                                <li>
                                    <a href="">Kontakt</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>

    <?php
    }

    public function getName()
    {
        return "topMenuHelper";
    }
}