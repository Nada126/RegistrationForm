
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Project </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('cssfile.css') }}">
    <script defer src="{{ asset('API_Ops.js') }}"></script>
</head>
<header>
    <div class="nav">
        <ul>
            <li><a class=" happ" href="#" target="_self">{{ __("index.Firstpage")}} </a></li>
            <li><a class=" happ" href="index.php" target="_self"> {{ __("index.secpage")}}</a></li>
            <!--  <li><a class=" happ" href="#" target="_self">Basic3</a></li>
            <li><a class=" happ" href="#" target="_self">Basic4</a></li> -->
            <li><a class=" happ" href="{{ LaravelLocalization::getLocalizedURL('ar') }}" target="_self">{{ __("index.arbutton")}}</a></li>
            <li><a class=" happ" href="{{ LaravelLocalization::getLocalizedURL('en') }}" target="_self">{{ __("index.enbutton")}}</a></li>
   


        </ul>
    </div>

</header>