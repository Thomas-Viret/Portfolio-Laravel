@extends('layouts.app')

@section('content')


                    <div class="neon-wrapper">
                        <div class="neon-text"><div class="lastname">T<span class="fast-flicker">HO</span>MAS </div><div>VIR<span class="flicker">E</span>T</div></div>
                        <div class="tron">
                            <h1> Bienvenue dans mon Portfolio</h1>
                            <ul class="nav">
                                <li class="welcom-li"><a href="<?= route('main-presentation')?>">Présentation</a></li>
                                <li class="welcom-li"><a href="<?= route('main-projects')?>">Projets</a></li>
                                <li class="welcom-li"><a href="<?= route('main-skills')?>">Compétences</a></li>
                                <li class="welcom-li"><a href="<?= route('main-formation')?>">Formation</a></li>
                                <li class="welcom-li"><a href="<?= route('main-contact')?>">Contact</a></li>

                            </ul>
                        </div>
                    </div>


@endsection
