<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Latest compiled and minified CSS -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700" rel="stylesheet">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    
body {
    font-family:'Oswald', sans-serif !important;


}
li.nav-item {
    vertical-align: middle;
}

.button:hover {
  background: #fff;
  text-decoration: none;
}

.btn-large {
  padding: 1em;
  text-align: center;
}

.btn-create:before {
  content: "+";
  padding-right: .5em;
  font-weight: bold;
}

.btn-create.btn-large {
  position: relative;
  padding-left: 3em;
  padding-right: 1.5em;
}
.btn-create.btn-large:before {
  content: "+";
  font-size: 2em;
  position: absolute;
  left: 16px;
  left: 1rem;
  top: 6.4px;
  top: 0.4rem;
}

.button-dropdown {
  position: relative;
  display: inline-block;
}
a.nav-link, a.button-dropdown {
    transition: 1s;
}
.button-dropdown .btn-create {
  -moz-border-radius: 3px 0 0 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px 0 0 3px;
}
.button-dropdown .button.toggle {
  text-indent: 100%;
  overflow: hidden;
  display: inline-block;
  width: 33px;
  padding: 1em .3em;
  vertical-align: bottom;
  margin-left: -3px;
  -moz-border-radius: 0 3px 3px 0;
  -webkit-border-radius: 0;
  border-radius: 0 3px 3px 0;
  border-left: 0;
  position: relative;
}
.button-dropdown .button.toggle:after {
  content: '';
  position: absolute;
  top: 1.4em;
  left: 16px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-top-color: #fff;
}
.button-dropdown .dropdown {
  display: none;
  position: absolute;
  top: 70%;
  left: 0;
  right: 0;
  border-radius: 2px;
  list-style-type: none;
  padding: 0;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  width: 103px;
}
.button-dropdown .dropdown li:first-child .dropdown-link {
  -moz-border-radius: 3px 3px 0 0;
  -webkit-border-radius: 3px;
  border-radius: 3px 3px 0 0;
}
.button-dropdown .dropdown li:first-child .dropdown-link:before {
  content: '';
  position: absolute;
  bottom: 100%;
  right: 13px;
  width: 0;
  height: 0;
  border: 6px outset transparent;
  border-bottom: 6px solid  rgba(204, 204, 204,  0.4);
  transition: 0.3s;
}
.dropdown {
    padding-top: 15px !important;
}
.button-dropdown .dropdown li:last-child .dropdown-link {
  -moz-border-radius: 0 0 3px 3px;
  -webkit-border-radius: 0;
  border-radius: 0 0 3px 3px;
  border: 0;
}
.button-dropdown .dropdown .dropdown-link {
  display: block;
  position: relative;
  padding: .75em 1em;
  background: rgba(204, 204, 204,  0.4);
  color: white;
  text-decoration: none;
  transition: 0.3s;
  /* border-bottom: 0.5px solid white; */
}
.button-dropdown .dropdown .dropdown-link:hover {
 background: rgba(204, 204, 204,  0.6);
}

.button-dropdown li:first-child > .dropdown-link:hover:before {
  border-bottom-color:  rgba(204, 204, 204,  0.6);  
}

.dropdown:hover {
  display: block;
}

.button-dropdown:hover > .dropdown, .button-dropdown.open > .dropdown {
  display: block;
}

#landing {
    position: relative;
}
.center-screen {
  position: absolute;
  top: 38%;
  
   justify-content: center;
   align-items: center; 
  text-align: center;
   min-height: 100vh; 
}
.center {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
}
h1 {
    font-size: 3em !important;
    color:  white !important;
    font-weight: bold !important;
    text-transform: uppercase;
  
    	
/* text-shadow: 10px 40px 30px rgba(0,0,0,0.3) !important; */

}
.buttons {
    text-align: center;
    margin-top: 10%;
}
a.button {
    border: 2px solid #09814A;
    font-size: 1.3em;
    border-radius: 5px;
    font-weight: bold;
    padding: 10px 15px;
    text-decoration: none;
    color: white !important;
    background-color: #09814A;
    cursor: pointer; 
    transition: 0.5s;  
}
a.featured-btn {
    border: 2px solid #09814A;
    font-size: 1.1em;
    border-radius: 5px;
    font-weight: bold;
    padding: 5px 15px;
    text-decoration: none;
    color: white !important;
    background-color: #09814A;
    cursor: pointer; 
    transition: 0.5s;  
}
a.button:hover, a.featured-btn:hover {
    background-color: #6BBF59 !important;
    text-decoration: none;
    color: white !important;
    border: 2px solid #6BBF59;
}
.wrapper {
    position: relative;
    background-image: linear-gradient(to bottom, rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.5) 100%), url("{{ asset('images/landing3.png') }}");
    /* background-image: url("{{ asset('images/landing.png') }}") ; */
    background-repeat: no-repeat;
    /* background-size:contain; */
    background-size: cover; 
    width: 100%;
    height: 100vh;
}
.icon-grid {
    background-color: #EBF5EE;
}
.fixed {
    background-color: rgba(107, 191, 89, 0.9) !important;
    color: white;
}
.menu{
    background-color: #09814A;
    position:fixed;
    top:0;
    z-index: 999;
    width: 100% !important;
    transition: 0.3s;
}

.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}
.position-ref {
    position: relative;
}
.full-height {
    height: 100vh;
}

a.nav-link {
color: white;
border-radius: 5px;
background-color: ;
    font-weight: bold;
    font-size: 1.1em;
    text-decoration: none;
    transition: 0.3s;
}

a.nav-link {
    padding: 7px 15px !important;
}
a.nav-link:hover {

    color: white;
    border-radius: 7px;
    background-color: rgba(204, 204, 204,  0.1);
} 
hr {
    background-color: white !important;
} 
footer a {
    color: white !important;
} 
</style>
</head>
<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
