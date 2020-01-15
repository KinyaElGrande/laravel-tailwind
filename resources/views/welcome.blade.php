<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Laravel</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://use.fontawesome.com/7dfd18fbdb.js"></script>


</head>
<body class="bg-grey-light font-sans">
    <div class="bg-white">
        <div class="container mx-auto flex items-center py-4">
            <nav class="w-2/5">
                <a href="#" class="top-nav-item"><i class="fa fa-home fa-lg"></i> Home</a>
                <a href="#" class="top-nav-item"><i class="fa fa-bolt fa-lg"></i> Moments</a>
                <a href="#" class="top-nav-item"><i class="fa fa-bell fa-lg"></i> Notifications</a>
                <a href="#" class="top-nav-item"><i class="fa fa-envelope fa-lg"></i> Messages</a>
            </nav>
            <div class="w-1/5 text-center"><a href=""><i class="fa fa-twitter fa-lg text-blue"></i></a></div>
            <div class="w-2/5 flex justify-end">
                <div class="mr-4 relative">
                    <input type="text" class="bg-grey-lighter h-8 px-4 py-2 text-xs w-48 rounded-full" placeholder="Search Twitter">
                    <span class="flex items-centre absolute inset-y-0 right-0  mr-3"><i class="fa fa-search text-grey"></i></span>
                </div>
                <div class="mr-4">
                    <a href=""><img src="/img/kinya.png" alt="" class="h-8 w-8 rounded-full"></a>
                </div>
                <div>
                    <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full">Tweet</button>
                </div>
            </div>
        </div>
    </div>

    <div class="hero h-64 bg-cover h-112"></div>

    <div class="bg-white shadow">
        <div class="container mx-auto flex items-center relative">
            <div class="w-1/4 ">
                <img src="/img/avataaars.png" alt="" class="rounded-full h-48 w-48 absolute left-0 top-0 -mt-24 ml-32">
            </div>
            <div class="w-1/2">
                <ul class="list-reset flex">
                    <li class = "text-center py-3 px-4 border-b-2 border-solid border-teal">
                    <a href="" class="text-grey-darker hover:no-underline">
                        <div class="text-sm font-bold letterSpacing-tight mb-1">Tweets</div>
                        <div class="text-lg letterSpacing-tight font-bold text-teal">60</div>
                    </a>
                    </li>
                    <li class = "text-center py-3 px-4 border-b-2 border-solid">
                    <a href="" class="text-grey-darker hover:no-underline">
                        <div class="text-sm font-bold letterSpacing-tight mb-1">Following</div>
                        <div class="text-lg letterSpacing-tight font-bold hover:text-teal">5</div>
                    </a>
                    </li>
                    <li class = "text-center py-3 px-4 border-b-2 border-solid">
                    <a href="" class="text-grey-darker hover:no-underline">
                        <div class="text-sm font-bold letterSpacing-tight mb-1">Followers</div>
                        <div class="text-lg letterSpacing-tight font-bold hover:text-teal">3200</div>
                    </a>
                    </li>
                    <li class = "text-center py-3 px-4 border-b-2 border-solid">
                    <a href="" class="text-grey-darker hover:no-underline">
                        <div class="text-sm font-bold letterSpacing-tight mb-1">Likes</div>
                        <div class="text-lg letterSpacing-tight font-bold hover:text-teal">130</div>
                    </a>
                    </li>
                    <li class = "text-center py-3 px-4 border-b-2 border-solid">
                    <a href="" class="text-grey-darker hover:no-underline">
                        <div class="text-sm font-bold letterSpacing-tight mb-1">Moments</div>
                        <div class="text-lg letterSpacing-tight font-bold hover:text-teal">65</div>
                    </a>
                    </li>
                </ul>
            </div>
            <div class="w-1/4 flex justify-end items-center">
                <div class="mr-6">
                    <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full">Following</button>
                </div>
                <div>
                    <a href="" class="text-grey-dark"><i class="fa fa-ellipsis-v fa-lg"></i></a>
                </div>
            
            </div>
        </div> <!--end container -->
    </div>

    <div class="container mx-auto flex mt-3">
        <div class="w-1/4 pr-6 mt-8 mb-4">
            <h1><a href="">Wagithomo</a></h1>
            <div>@joe_wagithomo</div>
        </div>
        <div class="w-1/2"></div>
        <div class="w-1/4"></div>

    </div>
    
</body>
</html>