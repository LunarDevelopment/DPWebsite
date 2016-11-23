@extends('frontend.layouts.master')

@section('content')
    <div id="meet-the-team">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-success">Meet The Team</h1>
                <p>At Digital Picnic we are proud to employ over 30 of the industry's most dedicated
                    individuals. We are passionate about what we do and from Administration to
                    Marketing to Sales, we all have a vested interest in not only the success of Digital
                    Picnic but also the success of our clients.</p>
                <p><strong>Click on the photographs to find out more about us...</strong></p>
                <p class="text-success sort-by-team"><strong>SORT BY TEAM</strong></p>
                <p class="sort-by-team-links">
                    <button v-on:click="showAll">All</button>
                    |
                    <button v-on:click="showMarketing">Marketing</button>
                    |
                    <button v-on:click="showSales">Sales</button>
                    |
                    <button v-on:click="showTech">Tech</button>
                    |
                    <button v-on:click="showAdmin">Admin</button>
                    |
                    <button v-on:click="showFacilities">Facilities</button>
                    |
                    <button v-on:click="showDirectors">Director</button>
                </p>
            </div>
        </div>
        <div class="row">
            @foreach($team_members as $team_member)
                <div class="meet-the-team-individual col-md-15 col-sm-3 col-xs-6 text-center"
                     v-show="{{ strtolower($team_member['department']) }}">
                    <a type="button" data-toggle="modal"
                       data-target="#{{ strtolower(str_replace(' ', '', $team_member['forename'] . ' ' . $team_member['surname'])) }}">
                        <img style="max-width:100%;" src="{{ $team_member['image_url'] }}" class="img-rounded"
                             alt="{{ $team_member['forename'] . ' ' . $team_member['surname'] }}"
                             onmouseover="this.src='{{ $team_member['rollover_url'] }}'"
                             onmouseout="this.src='{{ $team_member['image_url'] }}'">
                    </a>
                    <p><strong class="text-success">{{ $team_member['forename'] . ' ' . $team_member['surname'] }}</strong></p>
                    <p>{{ $team_member['role'] }}</p>
                </div>
                <!-- Modal Window-->
                <div id="{{ strtolower(str_replace(' ', '', $team_member['forename'] . ' ' . $team_member['surname'])) }}" class="modal fade" tabindex="-1"
                     role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="panel modal-panel panel-warning">
                            <button type="button" class="pull-right modal-close" data-dismiss="modal">
                                <img src="/img/website/blackx.png">
                            </button>
                            <img class="img-circle panel-icon" src="{{ $team_member['rollover_url'] }}">
                            <h1 class="text-success">{{ $team_member['forename'] . ' ' . $team_member['surname'] }}</h1>
                            <h3>{{ $team_member['role'] }}</h3>
                            <p>{{ $team_member['description'] }}</p>
                            @if($team_member['linkedin_url'] != '')
                                <a href="{{ $team_member['linkedin_url'] }}"><img class="social-icon"
                                                                                  src="/img/website/linkedin.svg"></a>
                                <a class="hidden-xs" href="{{ $team_member['linkedin_url'] }}">Connect with me on linkedin</a>
                            @endif
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            @endforeach
        </div>
    </div>
@endsection

@section('before-scripts-end')
    <script src="/js/meet-the-team.js"></script>
@endsection