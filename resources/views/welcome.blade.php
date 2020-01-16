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
                    <li class = "text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                    <a href="" class="text-grey-darker hover:no-underline">
                        <div class="text-sm font-bold letterSpacing-tight mb-1">Following</div>
                        <div class="text-lg letterSpacing-tight font-bold hover:text-teal">5</div>
                    </a>
                    </li>
                    <li class = "text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                    <a href="" class="text-grey-darker hover:no-underline">
                        <div class="text-sm font-bold letterSpacing-tight mb-1">Followers</div>
                        <div class="text-lg letterSpacing-tight font-bold hover:text-teal">3200</div>
                    </a>
                    </li>
                    <li class = "text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                    <a href="" class="text-grey-darker hover:no-underline">
                        <div class="text-sm font-bold letterSpacing-tight mb-1">Likes</div>
                        <div class="text-lg letterSpacing-tight font-bold hover:text-teal">130</div>
                    </a>
                    </li>
                    <li class = "text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
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

    <div class="container mx-auto flex mt-3 text-sm">
        <div class="w-1/4 pr-6 mt-8 mb-4">
            <h1><a href="" class="text-black text-2xl font-bold">Wagithomo</a></h1>
            <div class="mb-4"><a href="" class="text-grey-darker">@Joe_kate</a></div>

            <div class="mb-4">
                Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.By <a href=""> @kinya_elgrande</a>,
                <a href="">@kamtu</a>, and <a href="">@john_doe</a>
            </div>

            <div class="mb-2"><i class="fa fa-link fa-lg text-grey-darker mr-1"><a href="" class="text-sm"> wagitomo.co.ke</a></i></div>
            <div class="mb-4"><i class="fa fa-calendar fa-lg text-grey-darker mr-1"><a href="" class="text-grey-darker text-sm"> Joined on January 2020</a></i></div> 

            <div class="mb-4">
                <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full">Tweet to Wagithomo</button>
            </div>

            <div class="mb-4"><i class="fa fa-user fa-lg text-grey-darker mr-1"><a href="" class="text-sm"> 65 Followers you know</a></i></div>

            <div class="mb-4 ">
                <a href=""><img src="/img/kinya.jpg" alt="" class="rounded-full h-12 w-12"></a>
             <!--   <a href=""><img src="/img/kinya.png" alt="" class="inset-x-0 left-0 rounded-full h-12 w-12"></a>
                <a href=""><img src="/img/lioness.jpg" alt="" class="rounded-full h-12 w-12"></a>
                <a href=""><img src="/img/kinya.jpg" alt="" class="rounded-full h-12 w-12"></a>
                <a href=""><img src="/img/manish.jpg" alt="" class="rounded-full h-12 w-12"></a>
                <a href=""><img src="/img/prince.jpg" alt="" class="rounded-full h-12 w-12"></a>
                <a href=""><img src="/img/kinya.jpg" alt="" class="rounded-full h-12 w-12"></a>
                <a href=""><img src="/img/kinya.jpg" alt="" class="rounded-full h-12 w-12"></a>
                <a href=""><img src="/img/myAvatar.png" alt="" class="rounded-full h-12 w-12"></a>
                <a href=""><img src="/img/kinya.jpg" alt="" class="rounded-full h-12 w-12"></a>
            -->  
            </div>
            <div class="mb-4">
                <i class="fa fa-picture-o fa-lg text-grey-dark  mr-1"><a href="">  Photos and Videos</a></i>
            </div>

        </div>
        <div class="w-1/2 bg-white mb-4">
            <div class="p-3 text-lg font-bold border-b border-solid border-grey-light">
               <a href="" class="text-black mr-6">Tweets</a>
               <a href="" class="mr-6">Tweets &amp; Replies</a>
               <a href="">Media</a> 
            </div>

            <div class="flex border-b border-solid border-grey-light">
                <div class="w-1/8 text-right pl-3 pt-3">
                    <div> <i class="fa fa-thumb-tack text-teal mr-2"></i></div>
                    <div><a href=""><img src="{{'/img/avataaars.png'}}" alt=""></a></div>
                </div>

                <div class="w-7/8 p-3 pl-0">
                    <div class="text-xs text-grey-dark">Pinned Tweet</div>
                    <div class="flex justify-between">
                        <div>
                            <span class="font-bold"><a href="" class="text-black">Wagithomo</a></span>
                            <span class="text-grey-dark">@Joe_kate</span>
                            <span class="text-grey-dark">&middot;</span>
                            <span class="text-grey-dark">15 January 2020</span>         
                        </div>
                        <div>
                            <a href="" class="text-grey-dark hover:text-teal"><i class="fa fa-chevron-down"></i></a>
                        </div>
                    </div>

                    <div>
                        <div class="mb-4">
                            <p class="mb-6"> 🥳👳🏾‍♀ Wagithomo reloaded!!</p>
                            <p class="mb-6"> Reure Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, odio!</p>
                            <p class="mb-4"><a href="">elgrande.com/wagithomos/ja...</a></p>
                            <p><a href=""><img src="/img/myAvatar.png" alt="" class="border border-solid border-grey-light rounded-sm"></a></p>
                        </div>
                    </div>

                    <div class="pb-2">
                        <span class="mr-8"><a href="" class="text-grey-dark hover:no-underline hover:text-blue-light"><i class="fa fa-comment fa-lg mr-2"></i> 26</a></span>
                        <span class="mr-8"><a href="" class="text-grey-dark hover:no-underline hover:text-green"><i class="fa fa-retweet fa-lg mr-2"></i> 50</a></span>
                        <span class="mr-8"><a href="" class="text-grey-dark hover:no-underline hover:text-red"><i class="fa fa-heart fa-lg mr-2"></i> 634</a></span>
                        <span class="mr-8"><a href="" class="text-grey-dark hover:no-underline hover:text-teal"><i class="fa fa-envelope fa-lg mr-2"></i> 26</a></span>
                    </div>
                </div>

            </div>

        </div>
        <div class="w-1/4"></div>

    </div>
    
</body>
</html>