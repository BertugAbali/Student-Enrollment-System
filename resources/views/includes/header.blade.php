<nav class="navbar navbar-expand-md  navbar-dark bg-dark navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
        Student Enrollment System
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{url('/students')}}" class="nav-link">Students</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/student/create')}}" class="nav-link">Create Student</a>
                </li>
              
                <li class="nav-item">
                    <a href="{{url('/classes/')}}" class="nav-link">Classes</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/class/create')}}" class="nav-link">Create Class</a>
                </li>
            </ul>
           
        </div>
    </div>
</nav>