<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if(Session::has('currentUser'))
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Groups</a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($groups as $group)
                                <li>
                                    <a href="{{route('group.show', ['id' => $group->getProperty('id')])}}">
                                        <span class="badge">{{$group->getProperty('unread')}}</span>
                                        <span class="menu-label team-name">{{$group->getProperty('name')}}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Session::has('currentUser'))
                    <img class="pull-left avatar" src="{{$user->avatar}}">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{$user->getName()}}</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="{{route('logout')}}">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <a href="{{$loginUrl}}" class="btn btn-primary navbar-btn">Login with Facebook</a>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>