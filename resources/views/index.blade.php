<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700;800&display=swap" rel="stylesheet">

    
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Euro-Tel | Kezdőlap</title>
</head>
<body>
    <!--MENU--> 
    <div id="menu" class="fixed end-0 h-full w-96 bg-white z-10 origin-right hidden">
    
        <div class="flex h-28 items-center justify-end">
            <img id="menuClose" src="{{ asset('images/icons/close.svg') }}" class="mr-5 cursor-pointer"/>
        </div>
        <!--HASZNALT IPHONEOK-->
        <a href="/products?type=phone&brand=apple">
            <div class="flex items-center justify-center h-20 font-md hover:bg-secondary hover:text-white transition duration-100">
                HASZNÁLT IPHONEOK
            </div>
        </a>
        <!--HASZNALT SAMSUNG-->
        <a href="/products?type=phone&brand=samsung">
            <div class="flex items-center justify-center h-20 font-md hover:bg-secondary hover:text-white transition duration-100">
                HASZNÁLT SAMSUNGOK
            </div>
        </a>
        <!--OSSZES HASZNALT-->
        <a href="/products?type=phone">
            <div class="flex items-center justify-center h-20 font-md hover:bg-secondary hover:text-white transition duration-100">
                EGYÉB HASZNÁLT TELEFONOK
            </div>
        </a>
        <!--KIEGESZITOK-->
        <a href="/products?type=accessories">
            <div class="flex items-center justify-center h-20 font-md hover:bg-secondary hover:text-white transition duration-100">
                KIEGÉSZÍTŐK
            </div>
        </a>
        <!--TOKOK-->
        <a href="/products?type=cases">
            <div class="flex items-center justify-center h-20 font-md hover:bg-secondary hover:text-white transition duration-100">
                TELEFONTOKOK
            </div>
        </a>
        <!--SZERVIZ-->
        <a href="/repair">
            <div class="flex items-center justify-center h-20 font-md hover:bg-secondary hover:text-white transition duration-100">
                SZERVIZ
            </div>
        </a>

    </div>
    <!--NAVBAR-->
    <div class="flex h-28 w-full items-center">
        <img src="{{ asset('images/logo.png') }}" class="absolute ml-24 h-27" />
        <input type="text" placeholder="Keresés..." class="ml-auto h-14 w-3/12 rounded-full bg-gray-100 p-4 outline-none hover:bg-gray-200 transition font-poppins" />
        <button type="submit" value="" class="-ml-12 h-10 w-10 rounded-full hover:bg-secondaryDarker bg-secondary text-white cursor-pointer" >
            <img src="{{ asset('images/icons/search.svg') }}" class="-ml-2 translate-x-2/4" />
        </button>
        <span id="menuBtn" class="ml-10 mr-5 cursor-pointer"><img src="{{ asset('images/icons/menu.svg') }}"></span>
    </div>

    <!--NAV INFO-->
    <div class="flex h-12 w-full items-center justify-center bg-gray-200 text-sm">
        <div class="inline-block align-middle"><img class="inline-block h-4 mr-2" src="{{ asset('images/icons/phone.svg') }}"/>+36(20) 310 0355</div>
    </div>
    <!--HEADER IMAGE-->
    <div class="flex items-center justify-end h-header w-full bg-headerImg bg-center bg-cover">
        <div class="h-full w-full bg-black opacity-40"></div>
        <div class="absolute text-white mr-24 drop-shadow-2xl w-2/4 h-auto text-8xl font-black text-right inline-block align-middle leading-tight">
            Találd meg a neked megfelelőt!<br>
            <a href="/products?type=phone" class="text-lg font-normal pl-5 pr-5 pt-4 pb-4 hover:bg-secondaryDarker bg-secondary transition rounded">Telefonjaink</a>
        </div>
        <div class="absolute text-white drop-shadow-2xl w-2/4 h-5 text-lg font-black text-center inline-block w-full mb-3 self-end align-middle leading-tight">
            <a href="#">•</a>
            <a href="#">•</a>
            <a href="#">•</a>
            <a href="#">•</a>
            <a href="#">•</a>
        </div>
    </div>
    <!--UNDER HEADER INFO-->
    <div class="flex h-12 w-full items-center justify-center bg-secondary text-sm text-white">
        <div class="inline-block align-middle"><img class="inline-block h-4 mr-2" src="{{ asset('images/icons/alert.svg') }}"/>Figyelem! Ez még csak egy sablon oldal!</div>
    </div>

    <!--APPLE LOGO-->
    <div class="flex w-full mt-20 mb-20 justify-center">
        <img src="{{ asset('images/icons/apple.svg') }}" class="align-middle w-16" />
    </div>

    <section id="bestIphones">
        <!--ITEM CONTAINER-->
        <div class="flex items-center justify-center w-full h-auto pb-3">

            <!--ITEM-->
            <div class="cursor-pointer hover:opacity-30 transition duration-200 w-3/12 pb-10 ml-5 mr-5 border border-solid border-gray-100 rounded-md inline-block text-center">
                <img src="{{ asset("images/iphone 14 pro max.png") }}" class="h-96 mt-3 mb-3 inline-block" /><br />
                <span class="font-bold text-2xl">iPhone 14 Pro Max</span><br />
                <span class="text-xl font-light">399.000Ft</span>
            </div>
            <div class="cursor-pointer hover:opacity-30 transition duration-200 w-3/12 pb-10 ml-5 mr-5 border border-solid border-gray-100 rounded-md inline-block text-center">
                <img src="{{ asset("images/iphone 14 pro max.png") }}" class="h-96 mt-3 mb-3 inline-block" /><br />
                <span class="font-bold text-2xl">iPhone 14 Pro Max</span><br />
                <span class="text-xl font-light">399.000Ft</span>
            </div>
            <div class="cursor-pointer hover:opacity-30 transition duration-200 w-3/12 pb-10 ml-5 mr-5 border border-solid border-gray-100 rounded-md inline-block text-center">
                <img src="{{ asset("images/iphone 14 pro max.png") }}" class="h-96 mt-3 mb-3 inline-block" /><br />
                <span class="font-bold text-2xl">iPhone 14 Pro Max</span><br />
                <span class="text-xl font-light">399.000Ft</span>
            </div>

        </div>

    </section>

    <!--SAMSUNG LOGO-->
    <div class="flex w-full mt-20 mb-20 justify-center">
        <img src="{{ asset('images/icons/samsung.svg') }}" class="align-middle w-40" />
    </div>

    <section id="bestSamsungs">
        <!--ITEM CONTAINER-->
        <div class="flex items-center justify-center w-full h-auto pb-3">

            <!--ITEM-->
            <div class="cursor-pointer hover:opacity-30 transition duration-200 w-3/12 pb-10 ml-5 mr-5 border border-solid border-gray-100 rounded-md inline-block text-center">
                <img src="{{ asset("images/samsung galaxy s23 ultra.png") }}" class="h-96 mt-3 mb-3 inline-block" /><br />
                <span class="font-bold text-2xl">Samsung Galaxy S23 Ultra</span><br />
                <span class="text-xl font-light">399.000Ft</span>
            </div>
            <div class="cursor-pointer hover:opacity-30 transition duration-200 w-3/12 pb-10 ml-5 mr-5 border border-solid border-gray-100 rounded-md inline-block text-center">
                <img src="{{ asset("images/samsung galaxy s23 ultra.png") }}" class="h-96 mt-3 mb-3 inline-block" /><br />
                <span class="font-bold text-2xl">Samsung Galaxy S23 Ultra</span><br />
                <span class="text-xl font-light">399.000Ft</span>
            </div>
            <div class="cursor-pointer hover:opacity-30 transition duration-200 w-3/12 pb-10 ml-5 mr-5 border border-solid border-gray-100 rounded-md inline-block text-center">
                <img src="{{ asset("images/samsung galaxy s23 ultra.png") }}" class="h-96 mt-3 mb-3 inline-block" /><br />
                <span class="font-bold text-2xl">Samsung Galaxy S23 Ultra</span><br />
                <span class="text-xl font-light">399.000Ft</span>
            </div>

        </div>

    </section>

    <section id="cases">
        <!--CASES PART-->
        <div class="flex justify-center items-center h-casesSection w-full bg-casesBg bg-contain bg-no-repeat bg-center mt-32">

            <div id="left" class="inline-block h-auto w-3/12 float-left">
                <span class="font-black text-7nhalf whitespace-nowrap">Minőségi tokok</span><br />
                <p class="text-2xl">
                    Óriási telefon tok választékunkból biztosan megtalálod a neked megfelelőt!
                </p><br />
                <a href="/products?type=cases" class="text-lg font-normal pl-5 pr-5 pt-4 pb-4 mt-10 hover:bg-secondaryDarker bg-secondary transition rounded text-white">Less rájuk!</a>
            </div>
            <div id="right" class="h-auto w-4/12 inline-block float-right -transform-y-23">
                <img class="w-full inline-block" src="{{ asset("images/iphone case.webp") }}" alt="iphone cases" />
            </div>

        </div>

    </section>

    <!--CONTACT INFOS-->
    <section id="contact">

        <div class="mapouter mt-20 mb-32"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Esztergom Kossuth Lajos utca 6. &amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Game</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>

    </section>

    <!--FOOTER-->
    <footer id="footer" class="relative bg-secondary h-80 w-full">

        <div class="inline-block float-left w-3/12 h-80">
            <div class="m-10">
                <span class="font-bold text-2xl text-white">Euro-Tel</span>
                <br />
                <span class="text-white">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    In commodo, velit ut interdum venenatis, urna nunc lacinia arcu, ac interdum mi ex non tellus.
                </span>
            </div>
        </div>
        <div class="inline-block float-left h-80 m-0"><div class="m-10"><span class="font-normal text-xl text-white">Nyitvatartás</span><br /><br />
            <span class="text-white">
                hétfő: 9:30 - 17:00<br />
                kedd: 9:30 - 17:00<br />
                szerda: 9:30 - 17:00<br />
                csütörtök: 9:30 - 17:00<br />
                péntek: 9:30 - 17:00<br />
                szombat: 9:30 - 12:00<br />
                vasárnap: ZÁRVA
            </span></div></div>
        <div class="inline-block float-left h-80 m-0"><div class="m-10"><span class="font-normal text-xl text-white">Kapcsolat</span><br /><br />
            <span class="text-white">
                Esztergom, Kossuth Lajos utca 6<br />
                +36(20)310 0355<br />
                amobilboltesztergom@gmail.com<br /><br />
                Nyergesújfalu Kossuth Lajos utca 110.<br />
                +36(30)872 4464<br />
                eurotel.nyergesujfalu@gmail.com
            </span></div></div>
        <div class="inline-block float-left h-80 m-0"><div class="m-10"><span class="font-bold text-white">Euro-Tel</span></div></div>

        <div class="absolute w-full top-full -translate-y-full text-center text-secondaryLighter">©2023 Euro-Tel</div>

    </footer>

</body>
</html>