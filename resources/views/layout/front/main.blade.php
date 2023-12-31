<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('layout.front.head')
</head>



<body>
    <!-- @if(!Request::is('login/user','instructor-signup','student-signup','register-users','traveling-signup'))
        <header>
               
        </header>   
    @endif  -->
    <header>
        @include('layout.front.header')
    </header>   
    @yield('content')
    
    <!-- @if(!Request::is('login/user','create/acount','register-users','instructor-signup'))
        
    @endif -->
    
    @include('layout.front.footer')
</body>

</html>