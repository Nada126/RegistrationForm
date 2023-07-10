@include("header")
<body  >
    
    <div class="container mt-5">
        
        <h1 class="text-primary mt-3 mb-4 text-center"><b>{{ __("index.RegistrationForm")}}</b></h1>
        
        @yield('content')
        
    </div>

  @include("footer")
    
</body>
</html>