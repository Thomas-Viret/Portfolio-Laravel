@extends('layouts.app')

@section('content')




                <div class="neon-wrapper">
                @include('partials.accueil');
                @include('partials.nav');
                        <div class="neon-text">C<span class="fast-flicker">O</span>NTAC<span class="flicker">T</span></div>
                        <div class="tron">
                            <ul class="nav">
                                <li class="welcom-li">th.viret@gmail.com</th></li>
                                <li class="welcom-li"><a href="https://www.linkedin.com/in/thomasviret">Mon profile LinkedIn</a></li>
                                <li class="welcom-li"><a href="https://github.com/Thomas-Viret?tab=repositories">Mon Github</a></li>
                                <li class="welcom-li"><a href="<?= route('download')?>">Télécharger mon Curriculum Vitae</a></li>


                            </ul>
                        </div>
                    </div>






@endsection
