<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Custom styles for smooth transition and animation */
        .navbar {
            transition: background-color 0.3s ease;
        }

        #menu {
            transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
        }

        #menu.open {
            max-height: 300px;
            /* adjust based on content height */
            opacity: 1;
        }

        .menu-link {
            transition: background-color 0.3s ease;
        }

        .menu-link:hover {
            background-color: #defaca;
        }
    </style>
</head>

<body>
    <nav id="navbar" class="navbar fixed top-0 left-0 w-full z-50 bg-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="#" class="text-white font-bold text-xl flex">
                        <img class="w-12" src="{{ asset('imge/undipa.png') }}" alt="">
                        <p></p>
                    </a>
                </div>

                <!-- Menu - Centered on medium and up screens -->
                <div class="hidden md:flex justify-center flex-grow font-medium">
                    <div class="flex space-x-4">
                        <a href="#" class="menu-link text-white hover:text-black px-3 py-2 rounded-md">Home</a>
                        <a href="#"
                            class="menu-link text-white hover:text-black px-3 py-2 rounded-md">Announcement</a>
                        <a href="#" class="menu-link text-white hover:text-black px-3 py-2 rounded-md">Contact</a>
                    </div>
                </div>

                <!-- Login Button and Burger Icon -->
                <div class="flex items-center">
                    {{-- <button id="login-btn" class="text-white  px-5 py-2  rounded-xl font-medium">Log In</button> --}}
                    <button id="login-btn"
                        class="text-white hover:bg-[#c27426] px-5 py-2 bg-[#f49a40] rounded-xl font-medium max-md:hidden">Log In</button>
                    <button id="menu-btn" class="text-white focus:outline-none ml-3 md:hidden">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="menu" class="md:hidden">
            <div class="flex flex-col items-center justify-center px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#"
                    class="menu-link block text-gray-800 hover:text-gray-500 px-3 py-2 rounded-md">Home</a>
                <a href="#"
                    class="menu-link block text-gray-800 hover:text-gray-500 px-3 py-2 rounded-md">Announcement</a>
                <a href="#"
                    class="menu-link block text-gray-800 hover:text-gray-500 px-3 py-2 rounded-md">Contact</a>
                <button id="login-btn"
                    class="text-white hover:bg-[#416054] px-5 py-2 bg-[#3C3D37] rounded-xl font-medium">log In</button>
            </div>
        </div>
    </nav>

    <div class="pt-24 \ bg-[#0f4d38]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center lg:items-start">
                <div class="text-center lg:text-left lg:w-1/2 pt-10 lg:pt-32 lg:pl-32">
                    <h1 class="font-bold text-4xl lg:text-5xl text-[#defaca] pb-3" id="tulis"
                        style="min-height: 60px;"></h1>
                    <h1 class="font-bold text-4xl lg:text-5xl text-white pb-10">Laboratoty Assistant</h1>
                    <a href="#"
                        class="border-double border-4 border-white hover:bg-[#c27426] text-white rounded-full px-10 py-2 bg-[#f49a40]">Register</a>
                    <a href="#"
                        class="border-double border-4 border-white hover:bg-[#c27426] text-white rounded-full px-10 py-2 bg-[#f49a40]">Instruction</a>
                </div>
                <div class="w-full lg:w-1/2 grid place-content-center pt-10 lg:pt-10 max-md:hidden">
                    <img src="{{ asset('imge/undipa.png') }}" class="w-48  lg:w-64 mx-auto lg:mx-0" alt="">
                </div>
            </div>
        </div>

        <div class="pt-7">
            <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg"
                class="transition duration-300 ease-in-out delay-150">
                <style>
                    .path-0 {
                        animation: pathAnim-0 4s;
                        animation-timing-function: linear;
                        animation-iteration-count: infinite;
                    }

                    @keyframes pathAnim-0 {
                        0% {
                            d: path("M 0,400 L 0,150 C 28.999534281651577,159.80867298603377 57.999068563303155,169.61734597206754 107,166 C 156.00093143669685,162.38265402793246 225.00326002843894,145.33928909776364 276,152 C 326.99673997156106,158.66071090223636 359.98789132294104,189.02549763687782 403,201 C 446.01210867705896,212.97450236312218 499.04517467979656,206.5587203547251 537,180 C 574.9548253202034,153.4412796452749 597.8314099578728,106.73962094422184 644,107 C 690.1685900421272,107.26037905577816 759.6291854887121,154.48279586838763 803,171 C 846.3708145112879,187.51720413161237 863.6518480872787,173.32919558222764 897,156 C 930.3481519127213,138.67080441777236 979.7634221621727,118.20042180270188 1029,102 C 1078.2365778378273,85.79957819729812 1127.2944632640304,73.86911720696487 1170,76 C 1212.7055367359696,78.13088279303513 1249.0587247817055,94.32310936943861 1293,109 C 1336.9412752182945,123.67689063056139 1388.4706376091472,136.8384453152807 1440,150 L 1440,400 L 0,400 Z");
                        }

                        25% {
                            d: path("M 0,400 L 0,150 C 38.34825461866876,115.72747862211116 76.69650923733752,81.45495724422234 123,103 C 169.30349076266248,124.54504275577766 223.56221766931873,201.9076496452218 268,206 C 312.4377823306813,210.0923503547782 347.0546200853876,140.9144441748905 395,133 C 442.9453799146124,125.0855558251095 504.2193019891308,178.43457365521613 545,200 C 585.7806980108692,221.56542634478387 606.0681719580889,211.34726120424494 641,210 C 675.9318280419111,208.65273879575506 725.5080101785136,216.17638152780407 773,195 C 820.4919898214864,173.82361847219593 865.8997873278569,123.94721268453868 911,98 C 956.1002126721431,72.05278731546132 1000.8928405100587,70.03476773404117 1039,97 C 1077.1071594899413,123.96523226595883 1108.5288506319073,179.91371637929663 1159,185 C 1209.4711493680927,190.08628362070337 1278.9917569623124,144.3103667487724 1329,130 C 1379.0082430376876,115.6896332512276 1409.504121518844,132.84481662561382 1440,150 L 1440,400 L 0,400 Z");
                        }

                        50% {
                            d: path("M 0,400 L 0,150 C 54.13143173861691,192.0772986210841 108.26286347723382,234.15459724216822 147,223 C 185.73713652276618,211.84540275783178 209.07997782968164,147.4589096524112 247,111 C 284.92002217031836,74.5410903475888 337.4172252040396,66.00976414818696 386,92 C 434.5827747959604,117.99023585181304 479.2511213541601,178.50203375484088 526,212 C 572.7488786458399,245.49796624515912 621.5782893793197,251.98210083244942 662,224 C 702.4217106206803,196.01789916755058 734.4357211285612,133.56956291536144 774,104 C 813.5642788714388,74.43043708463856 860.6788261064352,77.7396475061048 904,101 C 947.3211738935648,124.2603524938952 986.8489744456979,167.47184706021935 1035,178 C 1083.1510255543021,188.52815293978065 1139.9252761107737,166.37296425301784 1189,153 C 1238.0747238892263,139.62703574698216 1279.4499211112075,135.0362959277092 1320,136 C 1360.5500788887925,136.9637040722908 1400.2750394443963,143.4818520361454 1440,150 L 1440,400 L 0,400 Z");
                        }

                        75% {
                            d: path("M 0,400 L 0,150 C 31.198316330776905,138.96132058599056 62.39663266155381,127.92264117198111 108,124 C 153.6033673384462,120.07735882801889 213.61178568456165,123.27075589806611 255,128 C 296.38821431543835,132.7292441019339 319.15622460019944,138.99433523575442 368,150 C 416.84377539980056,161.00566476424558 491.76331591464066,176.7519031589162 543,168 C 594.2366840853593,159.2480968410838 621.7905117412377,125.99805212858077 661,107 C 700.2094882587623,88.00194787141923 751.0746371204085,83.25588832676073 791,99 C 830.9253628795915,114.74411167323927 859.9109397771281,150.9783945643763 907,157 C 954.0890602228719,163.0216054356237 1019.2816037710791,138.8305334157342 1064,130 C 1108.718396228921,121.16946658426579 1132.9626451385557,127.69947177268696 1176,147 C 1219.0373548614443,166.30052822731304 1280.8678156746982,198.37157949351803 1328,201 C 1375.1321843253018,203.62842050648197 1407.5660921626509,176.814210253241 1440,150 L 1440,400 L 0,400 Z");
                        }

                        100% {
                            d: path("M 0,400 L 0,150 C 28.999534281651577,159.80867298603377 57.999068563303155,169.61734597206754 107,166 C 156.00093143669685,162.38265402793246 225.00326002843894,145.33928909776364 276,152 C 326.99673997156106,158.66071090223636 359.98789132294104,189.02549763687782 403,201 C 446.01210867705896,212.97450236312218 499.04517467979656,206.5587203547251 537,180 C 574.9548253202034,153.4412796452749 597.8314099578728,106.73962094422184 644,107 C 690.1685900421272,107.26037905577816 759.6291854887121,154.48279586838763 803,171 C 846.3708145112879,187.51720413161237 863.6518480872787,173.32919558222764 897,156 C 930.3481519127213,138.67080441777236 979.7634221621727,118.20042180270188 1029,102 C 1078.2365778378273,85.79957819729812 1127.2944632640304,73.86911720696487 1170,76 C 1212.7055367359696,78.13088279303513 1249.0587247817055,94.32310936943861 1293,109 C 1336.9412752182945,123.67689063056139 1388.4706376091472,136.8384453152807 1440,150 L 1440,400 L 0,400 Z");
                        }
                    }
                </style>
                <path
                    d="M 0,400 L 0,150 C 28.999534281651577,159.80867298603377 57.999068563303155,169.61734597206754 107,166 C 156.00093143669685,162.38265402793246 225.00326002843894,145.33928909776364 276,152 C 326.99673997156106,158.66071090223636 359.98789132294104,189.02549763687782 403,201 C 446.01210867705896,212.97450236312218 499.04517467979656,206.5587203547251 537,180 C 574.9548253202034,153.4412796452749 597.8314099578728,106.73962094422184 644,107 C 690.1685900421272,107.26037905577816 759.6291854887121,154.48279586838763 803,171 C 846.3708145112879,187.51720413161237 863.6518480872787,173.32919558222764 897,156 C 930.3481519127213,138.67080441777236 979.7634221621727,118.20042180270188 1029,102 C 1078.2365778378273,85.79957819729812 1127.2944632640304,73.86911720696487 1170,76 C 1212.7055367359696,78.13088279303513 1249.0587247817055,94.32310936943861 1293,109 C 1336.9412752182945,123.67689063056139 1388.4706376091472,136.8384453152807 1440,150 L 1440,400 L 0,400 Z"
                    stroke="none" stroke-width="0" fill="#defaca" fill-opacity="1"
                    class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
            </svg>
        </div>
    </div>

    <div class="h-[2000px]  bg-gradient-to-b from-[#defaca] to-white"></div>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('#tulis', {
            strings: ['Welcome To', 'Upgrade Your Skill', 'Join As'],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true,
            showCursor: false
        });
        // Toggle mobile menu with smooth transition
        document.getElementById('menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('menu');
            const navbar = document.getElementById('navbar');
            const menuBtn = document.getElementById('menu-btn').querySelector('svg');

            menu.classList.toggle('open');

            // Change navbar and menu background color when burger menu is clicked
            if (menu.classList.contains('open')) {
                navbar.classList.add('bg-white', 'shadow-md');
                navbar.querySelectorAll('a').forEach(link => {
                    link.classList.remove('text-white');
                    link.classList.add('text-gray-800');
                });
                document.getElementById('login-btn').classList.remove('text-white', 'border-white');
                document.getElementById('login-btn').classList.add('text-gray-800', 'border-gray-800');
                menuBtn.classList.remove('text-white');
                menuBtn.classList.add('text-gray-800');
            } else {
                if (window.scrollY < 50) { // If not scrolled down, revert to transparent
                    navbar.classList.remove('bg-white', 'shadow-md');
                    navbar.classList.add('bg-transparent');
                    navbar.querySelectorAll('a').forEach(link => {
                        link.classList.remove('text-gray-800');
                        link.classList.add('text-white');
                    });
                    document.getElementById('login-btn').classList.remove('text-gray-800', 'border-gray-800');
                    document.getElementById('login-btn').classList.add('text-white', 'border-white');
                    menuBtn.classList.remove('text-gray-800');
                    menuBtn.classList.add('text-white');
                }
            }
        });

        // Change navbar color on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            const menu = document.getElementById('menu');
            const loginBtn = document.getElementById('login-btn');
            const menuBtn = document.getElementById('menu-btn').querySelector('svg');

            if (window.scrollY > 50) {
                navbar.classList.add('bg-white', 'shadow-md');
                navbar.classList.remove('bg-transparent');
                navbar.querySelectorAll('a').forEach(link => {
                    link.classList.remove('text-white');
                    link.classList.add('text-gray-800');
                });
                loginBtn.classList.remove('text-black', 'border-white');
                loginBtn.classList.add('text-gray-800', 'border-gray-800');
                menuBtn.classList.remove('text-white');
                menuBtn.classList.add('text-gray-800');
                menu.classList.remove('bg-transparent');
                menu.classList.add('bg-white');
            } else {
                if (!menu.classList.contains('open')) {
                    navbar.classList.add('bg-transparent');
                    navbar.classList.remove('bg-white', 'shadow-md');
                    navbar.querySelectorAll('a').forEach(link => {
                        link.classList.remove('text-gray-800');
                        link.classList.add('text-white');
                    });
                    loginBtn.classList.remove('text-gray-800', 'border-gray-800');
                    loginBtn.classList.add('text-white', 'border-white');
                    menuBtn.classList.remove('text-gray-800');
                    menuBtn.classList.add('text-white');
                    menu.classList.add('bg-transparent');
                    menu.classList.remove('bg-white');
                }
            }
        });
    </script>
</body>

</html>
