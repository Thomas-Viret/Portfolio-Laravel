@extends('layouts.app')

@section('content')




                <div class="neon-wrapper">
                @include('partials.accueil');
                @include('partials.nav');
                        <div class="neon-text">PRO<span class="fast-flicker">J</span>E<span class="flicker">T</span>S</div>
                        <div class="tron">
                        <h1> Liste de mes projets</h1>
                            <ul class="nav">
                                <li>
                                    <h2>O'solidaires</h2><p>Site d'entraide</p>
                                    <div class="techno-all">
                                            <p class="techno">Symfony</p>
                                            <p class="techno">Twig</p>
                                            <p class="techno">ORM Doctrine</p>
                                            <p class="techno">Bootstrap</p>
                                            <p class="techno">MySQL</p>
                                            <p class="techno">MVC</p>
                                        </div>
                                    <div class="links-ext">

                                        <a  href="http://54.156.70.255/project/osolidaires/public/front/requests"><img class="external" src="{{ asset('Images/lien (1).svg') }}"></a>
                                        <a  href="https://github.com/Thomas-Viret/osolidaires"><img class="external" src="{{ asset('Images/github.svg') }}"></a>
                                </li>
                                <li>
                                    <h2>Movie db</h2><p>Site d'informations cinématographiques </p>
                                    <div class="techno-all">
                                            <p class="techno">Symfony</p>
                                            <p class="techno">Twig</p>
                                            <p class="techno">ORM Doctrine</p>
                                            <p class="techno">Bootstrap</p>
                                            <p class="techno">MySQL</p>
                                            <p class="techno">MVC</p>
                                        </div>
                                    <div class="links-ext">
                                        <a  href="http://54.156.70.255/project/movie-db/public/"><img class="external" src="{{ asset('Images/lien (1).svg') }}"></a>
                                        <a  href="https://github.com/Thomas-Viret/movie-db"><img class="external" src="{{ asset('Images/github.svg') }}"></a>
                                </li>
                                <li>
                                    <h2>Angry Birds</h2><p>Site d'informations sur les personnages d'Angry Birds</p>
                                    <div class="techno-all">
                                            <p class="techno">Symfony</p>
                                            <p class="techno">Twig</p>
                                            <p class="techno">ORM Doctrine</p>
                                            <p class="techno">Bootstrap</p>
                                            <p class="techno">MVC</p>
                                        </div>
                                    <div class="links-ext">
                                        <a  href="http://54.156.70.255/project/angry-birds/public/"><img class="external" src="{{ asset('Images/lien (1).svg') }}"></a>
                                        <a  href="https://github.com/Thomas-Viret/angry-birds"><img class="external" src="{{ asset('Images/github.svg') }}"></a>
                                </li>
                                <li>
                                    <h2>OSHOP</h2><p>Site e-commerce de vente de chaussures</p>
                                    <div class="techno-all">
                                            <p class="techno">PHP</p>
                                            <p class="techno">AltoRouter</p>
                                            <p class="techno">Bootstrap</p>
                                            <p class="techno">MySQL</p>
                                            <p class="techno">MVC</p>
                                        </div>
                                    <div class="links-ext">
                                        <a  href="http://54.156.70.255/project/oshop/public/"><img class="external" src="{{ asset('Images/lien (1).svg') }}"></a>
                                        <a  href="https://github.com/Thomas-Viret/oshop"><img class="external" src="{{ asset('Images/github.svg') }}"></a>
                                    </div>

                                </li>
                                <li>
                                    <h2>FRESH COFFEE SHOP</h2><p>Site vitrine d'un commerce de vente de café</p>
                                    <div class="techno-all">
                                            <p class="techno">PHP</p>
                                            <p class="techno">Bootstrap</p>
                                            <p class="techno">MySQL</p>
                                            <p class="techno">MVC</p>
                                        </div>
                                    <div class="links-ext">
                                        <a  href="http://54.156.70.255/project/coffee-shop/"><img class="external" src="{{ asset('Images/lien (1).svg') }}"></a>
                                        <a  href="https://github.com/Thomas-Viret/coffee-shop"><img class="external" src="{{ asset('Images/github.svg') }}"></a>
                                </li>
                                <li>
                                    <h2>PORTFOLIO</h2><p>Le PortFolio que vous parcourez actuellement</p>
                                    <div class="techno-all">
                                            <p class="techno">LARAVEL</p>
                                            <p class="techno">MySQL</p>
                                            <p class="techno">MVC</p>
                                            <p class="techno">JavaScript</p>
                                        </div>
                                    <div class="links-ext">
                                        <a  href="http://54.156.70.255/project/coffee-shop/"><img class="external" src="{{ asset('Images/lien (1).svg') }}"></a>
                                        <a  href="https://github.com/Thomas-Viret/coffee-shop"><img class="external" src="{{ asset('Images/github.svg') }}"></a>
                                </li>

                            </ul>
                        </div>
                    </div>






@endsection
