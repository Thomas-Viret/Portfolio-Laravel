@extends('layouts.app')

@section('content')
                <!-- <div class="title m-b-md">
                    Thomas Viret
                </div> -->


                    <div class="neon-wrapper">
                        <div class="neon-text">T<span class="fast-flicker">HO</span>MAS VIR<span class="flicker">E</span>T</div>
                        <div class="tron">
                            <h1> Bienvenue dans mon Portfolio</h1>
                            <ul class="nav">
                                <li><a href="<?= route('main-presentation')?>">Présentation</a></li>
                                <li><a href="<?= route('main-projects')?>">Projets</a></li>
                                <li><a href="<?= route('main-skills')?>">Compétences</a></li>
                                <li><a href="<?= route('main-formation')?>">Formation</a></li>
                                <li><a href="<?= route('main-contact')?>">Contact</a></li>

                            </ul>
                        </div>
                    </div>



                <!-- <div class="links">
                    <ul>
                        <li><a href="#">Présentation</a></li>

                        <li><a href="#">Projets</a></li>

                        <li><a href="#">Compétences</a></li>

                        <li><a href="#">Formation</a></li>

                        <li><a href="#">Contact</a></li>

                    </ul>

                </div> -->



@endsection
