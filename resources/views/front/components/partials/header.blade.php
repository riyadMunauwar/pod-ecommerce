<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky bg-white dark:bg-slate-900">
    <div class="container relative">
        <!-- Logo container-->
        <a class="logo" href="/">
            <img src="{{ asset('assets/images/elitg-logo.png') }}" class="w-20 inline-block dark:hidden" alt="">
            <img src="{{ asset('assets/images/elitg-logo.png') }}" class="w-20 hidden dark:inline-block" alt="">
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            <li class="dropdown inline-block relative me-1">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle text-[20px]" type="button">
                    <i class="uil uil-search align-middle"></i>
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute overflow-hidden end-0 m-0 mt-4 z-10 w-52 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                    <div class="relative">
                        <i class="uil uil-search text-lg absolute top-[3px] end-3"></i>
                        <input type="text" class="form-input h-9 pe-10 sm:w-44 w-36 border-0 focus:ring-0" name="s" id="searchItem" placeholder="Search...">
                    </div>
                </div>
            </li>

            <li class="dropdown inline-block relative">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white inline-flex" type="button">
                    <i class="mdi mdi-cart"></i>
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-60 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                    <ul class="py-3 text-start" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                <span class="flex items-center">
                                    <img src="../../assets/images/shop/items/s1.html" class="rounded shadow dark:shadow-gray-800 w-9" alt="">
                                    <span class="ms-3">
                                        <span class="block font-semibold">T-shirt (M)</span>
                                        <span class="block text-sm text-slate-400">$320 X 2</span>
                                    </span>
                                </span>

                                <span class="font-semibold">$640</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                <span class="flex items-center">
                                    <img src="../../assets/images/shop/items/s2.html" class="rounded shadow dark:shadow-gray-800 w-9" alt="">
                                    <span class="ms-3">
                                        <span class="block font-semibold">Bag</span>
                                        <span class="block text-sm text-slate-400">$50 X 5</span>
                                    </span>
                                </span>

                                <span class="font-semibold">$250</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                <span class="flex items-center">
                                    <img src="../../assets/images/shop/items/s3.html" class="rounded shadow dark:shadow-gray-800 w-9" alt="">
                                    <span class="ms-3">
                                        <span class="block font-semibold">Watch (Men)</span>
                                        <span class="block text-sm text-slate-400">$800 X 1</span>
                                    </span>
                                </span>

                                <span class="font-semibold">$800</span>
                            </a>
                        </li>

                        <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>

                        <li class="flex items-center justify-between py-1.5 px-4">
                            <h6 class="font-semibold mb-0">Total($):</h6>
                            <h6 class="font-semibold mb-0">$1690</h6>
                        </li>

                        <li class="py-1.5 px-4">
                            <a href="{{ route('cart') }}" class="btn btn-sm rounded-md bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white">View Cart</a>
                            <a href="{{ route('checkout') }}" class="btn btn-sm rounded-md bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white">Checkout</a>
                            <p class="text-sm text-slate-400 mt-1">*T&C Apply</p>
                        </li>
                
                    </ul>
                </div>
            </li>

            <li class="inline-block">
                <a href="javascript:void(0)" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white" data-modal-toggle="ContactUs">
                    <i class="mdi mdi-heart"></i>
                </a>
            </li>
    
            @auth
                <li class="dropdown inline-block relative">
                    <button data-dropdown-toggle="dropdown" class="dropdown-toggle btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white inline-flex" type="button">
                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </button>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                        <ul class="py-2 text-start" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="" class="block py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-user align-middle me-1"></i> Account</a>
                            </li>
                            <li>
                                <a href="" class="block py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-clipboard-notes align-middle me-1"></i> Order History</a>
                            </li>
                            <li>
                                <a href="" class="block py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-arrow-circle-down align-middle me-1"></i> Profile</a>
                            </li>
                            <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                            <li>                            
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <a @click.prevent="$root.submit();" href="{{ route('logout') }}" class="block py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-sign-out-alt align-middle me-1"></i>Logout</a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            @endauth

            @guest
                <li class="inline-block md:ml-8">
                    <a href="{{ route('login') }}" class="text-indigo-600 hover:text-white border-2 border-indigo-600 hover:bg-indigo-600 focus:ring-4 focus:outline-none focus:ring-purple-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">Login</a>
                </li>

                <li class="inline-block">
                    <a href="{{ route('register') }}" type="button" class="text-indigo-600 hover:text-white border-2 border-indigo-600 hover:bg-indigo-600 focus:ring-4 focus:outline-none focus:ring-purple-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">Signup</a>
                </li>
            @endguest

        </ul>
        <!--Login button End-->

        @php 

            $menus = \App\Models\Menu::where('is_published', true)->orderBy('order')->get();

        @endphp

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu">
                @foreach($menus ?? [] as $menu)

                    @if($menu->hasCategory())

                        @if($menu->view_style === 'mega')

                            <li class="has-submenu parent-parent-menu-item">

                                <a href="javascript:void(0)">{{ $menu->name ?? '' }}</a><span class="menu-arrow"></span>
                                
                                <ul class="submenu megamenu">
                                    @foreach($menu->category->children ?? [] as $child)
                                        <li>
                                            <ul>
                                                <li class="megamenu-head">{{ $child->name ?? '' }}</li>
                                                @foreach($child->children ?? [] as $grandChild)
                                                    <li><a href="{{ route('category-archieve', ['category_slug' => $grandChild->slug ?? '']) }}" class="sub-menu-item">{{ $grandChild->name ?? '' }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                        @else 

                            <li class="has-submenu parent-parent-menu-item">

                                <a href="javascript:void(0)">{{ $menu->name ?? '' }}</a><span class="menu-arrow"></span>

                                <ul class="submenu">
                                    @foreach($menu->category->children ?? [] as $child)
                                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> {{ $child->name ?? '' }}</a><span class="submenu-arrow"></span></a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                
                                                @if($child->hasChildren())

                                                    <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> {{ $child->name ?? '' }} </a><span class="submenu-arrow"></span>
                                                        <ul class="submenu">

                                                            @foreach($child->children ?? [] as $grandChild)
                                                                <li><a href="{{ route('category-archieve', ['category_slug' => $grandChild->slug ?? '']) }}" class="sub-menu-item">{{ $grandChild->name ?? '' }}</a></li>
                                                            @endforeach

                                                        </ul>  
                                                    </li>

                                                @else 
                                                    <li><a href="{{ route('category-archieve', ['category_slug' => $child->slug ?? '']) }}" class="sub-menu-item">{{ $child->name ?? '' }}</a></li>
                                                @endif
                                            </ul> 
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endif

                    @else
                        <li><a href="{{ $menu->link }}" class="sub-menu-item">{{ $menu->name ?? '' }}</a></li>
                    @endif

                @endforeach

                <li class="has-submenu parent-parent-menu-item">

                    <a href="javascript:void(0)">Career</a><span class="menu-arrow"></span>

                    <ul class="submenu">
                        <li><a href="{{ route('designer.register') }}" class="sub-menu-item">Be a Desinger</a></li>
                        <li><a href="{{ route('vendor.register') }}" class="sub-menu-item">Be a Vendor</a></li>
                    </ul>
                </li>
                                        
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->



<!-- Start Modal -->
<div id="ContactUs" tabindex="-1" class="fixed z-50 hidden overflow-hidden inset-0 m-auto">
    <div class="relative w-full h-auto max-w-lg p-4">
        <div class="relative bg-white dark:bg-slate-900 rounded-lg shadow dark:shadow-gray-800">
            <button type="button" class="absolute -top-4 -end-4 text-gray-400 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hover:text-gray-900 rounded-full text-sm p-1.5 ms-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="ContactUs">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
            </button>
            <div class="p-6 py-10 text-center">

                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-32 w-32 fill-red-600/5 mx-auto"></i>
                    <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-red-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                        <i class="uil uil-heart-break"></i>
                    </div>
                </div>
        
                <h4 class="text-xl font-semibold mt-6">Your wishlist is empty.</h4>
                <p class="text-slate-400 my-3">Create your first wishlist request...</p>

                <a href="#" class="btn btn-sm bg-transparent hover:bg-indigo-600 border-indigo-600 text-indigo-600 hover:text-white rounded-md mt-2">Create a new wishlist</a>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
