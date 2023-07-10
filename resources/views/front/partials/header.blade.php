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
                            <a href="javascript:void(0)" class="btn btn-sm rounded-md bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white">View Cart</a>
                            <a href="javascript:void(0)" class="btn btn-sm rounded-md bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white">Checkout</a>
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
                        <i class="mdi mdi-account"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                        <ul class="py-2 text-start" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="shop-account.html" class="block py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-user align-middle me-1"></i> Account</a>
                            </li>
                            <li>
                                <a href="shop-cart.html" class="block py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-clipboard-notes align-middle me-1"></i> Order History</a>
                            </li>
                            <li>
                                <a href="shop-checkout.html" class="block py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-arrow-circle-down align-middle me-1"></i> Download</a>
                            </li>
                            <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                            <li>
                                <a href="auth-login.html" class="block py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-sign-out-alt align-middle me-1"></i> Logout</a>
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

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu">
                <li><a href="index-shop.html" class="sub-menu-item">Home</a></li>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Landings</a><span class="menu-arrow"></span>

                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="index-saas.html" class="sub-menu-item">Saas <span class="bg-emerald-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Animation</span></a></li>
                                <li><a href="index-classic-saas.html" class="sub-menu-item">Classic Saas </a></li>
                                <li><a href="index-modern-saas.html" class="sub-menu-item">Modern Saas </a></li>
                                <li><a href="index-apps.html" class="sub-menu-item">Application</a></li>
                                <li><a href="index-classic-app.html" class="sub-menu-item">Classic App </a></li>
                                <li><a href="index-smartwatch.html" class="sub-menu-item">Smartwatch</a></li>
                                <li><a href="index-marketing.html" class="sub-menu-item">Marketing</a></li>
                                <li><a href="index-seo.html" class="sub-menu-item">SEO Agency </a></li>
                                <li><a href="index-software.html" class="sub-menu-item">Software <span class="bg-orange-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></a></li>
                                <li><a href="index-payment.html" class="sub-menu-item">Payments</a></li>
                                <li><a href="index-charity.html" class="sub-menu-item">Charity </a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li><a href="index-it-solution.html" class="sub-menu-item">IT Solution</a></li>
                                <li><a href="index-it-solution-two.html" class="sub-menu-item">It Solution Two </a></li>
                                <li><a href="index-digital-agency.html" class="sub-menu-item">Digital Agency</a></li>
                                <li><a href="index-restaurent.html" class="sub-menu-item">Restaurent</a></li>
                                <li><a href="index-hosting.html" class="sub-menu-item">Hosting</a></li>
                                <li><a href="index-nft.html" class="sub-menu-item">NFT Marketplace <span class="bg-cyan-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Updated</span></a></li>
                                <li><a href="index-hotel.html" class="sub-menu-item">Hotel & Resort</a></li>
                                <li><a href="index-cafe.html" class="sub-menu-item">Cafe <span class="bg-orange-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></a></li>
                                <li><a href="index-gym.html" class="sub-menu-item">Gym <span class="bg-black dark:bg-slate-50 inline-block text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Dark</span></a></li>
                                <li><a href="index-yoga.html" class="sub-menu-item">Yoga </a></li>
                                <li><a href="index-spa.html" class="sub-menu-item">Spa & Salon <span class="bg-orange-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li><a href="index-job.html" class="sub-menu-item">Job</a></li>
                                <li><a href="index-startup.html" class="sub-menu-item">Startup</a></li>
                                <li><a href="index-business.html" class="sub-menu-item">Business</a></li>
                                <li><a href="index-corporate.html" class="sub-menu-item">Corporate</a></li>
                                <li><a href="index-corporate-two.html" class="sub-menu-item">Corporate Two </a></li>
                                <li><a href="index-real-estate.html" class="sub-menu-item">Real Estate</a></li>
                                <li><a href="index-consulting.html" class="sub-menu-item">Consulting </a></li>
                                <li><a href="index-insurance.html" class="sub-menu-item">Insurance </a></li>
                                <li><a href="index-construction.html" class="sub-menu-item">Construction </a></li>
                                <li><a href="index-law.html" class="sub-menu-item">Law Firm </a></li>
                                <li><a href="index-video.html" class="sub-menu-item">Video </a></li>
                            </ul>
                        </li>
                
                        <li>
                            <ul>
                                <li><a href="index-personal.html" class="sub-menu-item">Personal</a></li>
                                <li><a href="index-portfolio.html" class="sub-menu-item">Portfolio</a></li>
                                <li><a href="index-photography.html" class="sub-menu-item">Photography <span class="bg-black dark:bg-slate-50 inline-block text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Dark</span></a></li>
                                <li><a href="index-studio.html" class="sub-menu-item">Studio</a></li>
                                <li><a href="index-coworking.html" class="sub-menu-item">Co-Woriking</a></li>
                                <li><a href="index-course.html" class="sub-menu-item">Online Courses </a></li>
                                <li><a href="index-event.html" class="sub-menu-item">Event / Conference </a></li>
                                <li><a href="index-hospital.html" class="sub-menu-item">Hospital</a></li>
                                <li><a href="index-phone-number.html" class="sub-menu-item">Phone Number</a></li>
                                <li><a href="index-forums.html" class="sub-menu-item">Forums </a></li>
                            </ul>
                        </li>
                
                        <li>
                            <ul>
                                <li><a href="index-shop.html" class="sub-menu-item">Shop / eCommerce  <span class="bg-orange-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></a></li>
                                <li><a href="index-crypto.html" class="sub-menu-item">Cryptocurrency  <span class="bg-black dark:bg-slate-50 inline-block text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Dark</span></a></li>
                                <li><a href="index-landing-one.html" class="sub-menu-item">Landing One</a></li>
                                <li><a href="index-landing-two.html" class="sub-menu-item">Landing Two</a></li>
                                <li><a href="index-landing-three.html" class="sub-menu-item">Landing Three</a></li>
                                <li><a href="index-landing-four.html" class="sub-menu-item">Landing Four</a></li>
                                <li><a href="index-service.html" class="sub-menu-item">Service Provider</a></li>
                                <li><a href="index-food-blog.html" class="sub-menu-item">Food Blog </a></li>
                                <li><a href="index-blog.html" class="sub-menu-item">Blog </a></li>
                                <li><a href="index-furniture.html" class="sub-menu-item">Furniture </a></li>
                                <li><a href="index-landing-five.html" class="sub-menu-item">Landing Five <span class="bg-green-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Onepage</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Company </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-aboutus.html" class="sub-menu-item"> About Us</a></li>
                                <li><a href="page-services.html" class="sub-menu-item">Services</a></li>
                                <li><a href="page-team.html" class="sub-menu-item"> Team</a></li>
                                <li><a href="page-pricing.html" class="sub-menu-item">Pricing</a></li>
                                <li><a href="page-testimonial.html" class="sub-menu-item">Testimonial </a></li>
                            </ul> 
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Accounts</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="user-profile.html" class="sub-menu-item">User Profile</a></li>
                                <li><a href="user-billing.html" class="sub-menu-item">Billing</a></li>
                                <li><a href="user-payment.html" class="sub-menu-item">Payment</a></li>
                                <li><a href="user-invoice.html" class="sub-menu-item">Invoice</a></li>
                                <li><a href="user-social.html" class="sub-menu-item">Social</a></li>
                                <li><a href="user-notification.html" class="sub-menu-item">Notification</a></li>
                                <li><a href="user-setting.html" class="sub-menu-item">Setting</a></li>
                            </ul> 
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Real Estate</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="property-listing.html" class="sub-menu-item">Listing</a></li>
                                <li><a href="property-detail.html" class="sub-menu-item">Property Detail</a></li>
                            </ul> 
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Courses </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="course-listing.html" class="sub-menu-item">Course Listing</a></li>
                                <li><a href="course-detail.html" class="sub-menu-item">Course Detail</a></li>
                            </ul> 
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> NFT Market <span class="bg-red-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Added</span> </a><span class="submenu-arrow"></span></a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="nft-explore.html" class="sub-menu-item">Explore</a></li>
                                <li><a href="nft-auction.html" class="sub-menu-item">Auction</a></li>
                                <li><a href="nft-collection.html" class="sub-menu-item">Collections</a></li>
                                <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Creator <span class="bg-orange-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span> </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="nft-creators.html" class="sub-menu-item"> Creators</a></li>
                                        <li><a href="nft-creator-profile.html" class="sub-menu-item"> Creator Profile <span class="bg-orange-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></a></li>
                                        <li><a href="nft-creator-profile-edit.html" class="sub-menu-item"> Profile Edit <span class="bg-orange-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></a></li>
                                    </ul>  
                                </li>
                                <li><a href="nft-wallet.html" class="sub-menu-item">Wallet</a></li>
                                <li><a href="nft-create-item.html" class="sub-menu-item">Create NFT</a></li>
                                <li><a href="nft-detail.html" class="sub-menu-item">Single NFT</a></li>
                            </ul> 
                        </li>
                        <li><a href="food-recipe.html" class="sub-menu-item">Food Recipe </a></li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> eCommerce <span class="bg-orange-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="shop-grid.html" class="sub-menu-item">Product Grid</a></li>
                                <li><a href="shop-grid-two.html" class="sub-menu-item">Product Grid Two</a></li>
                                <li><a href="shop-item-detail.html" class="sub-menu-item">Product Detail</a></li>
                                <li><a href="shop-cart.html" class="sub-menu-item">Shop Cart</a></li>
                                <li><a href="shop-checkout.html" class="sub-menu-item">Checkout</a></li>
                                <li><a href="shop-account.html" class="sub-menu-item">My Account</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Photography </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="photography-about.html" class="sub-menu-item">About Us</a></li>
                                <li><a href="photography-portfolio.html" class="sub-menu-item">Portfolio</a></li>
                            </ul> 
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Job / Careers <span class="bg-red-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Added</span></a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-job-grid.html" class="sub-menu-item">All Jobs</a></li>
                                <li><a href="page-job-detail.html" class="sub-menu-item">Job Detail</a></li>
                                <li><a href="page-job-apply.html" class="sub-menu-item">Job Apply</a></li>
                                <li><a href="page-job-post.html" class="sub-menu-item">Job Post <span class="bg-orange-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></a></li>
                                <li><a href="page-job-career.html" class="sub-menu-item">Job Career <span class="bg-orange-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></a></li>
                                <li><a href="page-job-candidates.html" class="sub-menu-item">Job Candidates</a></li>
                                <li><a href="page-job-candidate-detail.html" class="sub-menu-item">Candidate Detail</a></li>
                                <li><a href="page-job-companies.html" class="sub-menu-item">All Companies</a></li>
                                <li><a href="page-job-company-detail.html" class="sub-menu-item">Company Detail</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Forums </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="forums-topic.html" class="sub-menu-item">Forum Topic</a></li>
                                <li><a href="forums-comments.html" class="sub-menu-item">Forum Comments</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Helpcenter </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="helpcenter.html" class="sub-menu-item">Overview</a></li>
                                <li><a href="helpcenter-faqs.html" class="sub-menu-item">FAQs</a></li>
                                <li><a href="helpcenter-guides.html" class="sub-menu-item">Guides</a></li>
                                <li><a href="helpcenter-support.html" class="sub-menu-item">Support</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="blog.html" class="sub-menu-item">Blogs</a></li>
                                <li><a href="blog-sidebar.html" class="sub-menu-item">Blogs & Sidebar</a></li>
                                <li><a href="blog-detail.html" class="sub-menu-item">Blog Detail</a></li>
                                <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Blog Posts </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blog-standard-post.html" class="sub-menu-item">Standard Post</a></li>
                                        <li><a href="blog-slider-post.html" class="sub-menu-item">Slider Post</a></li>
                                        <li><a href="blog-gallery-post.html" class="sub-menu-item">Gallery Post</a></li>
                                        <li><a href="blog-youtube-post.html" class="sub-menu-item">Youtube Post</a></li>
                                        <li><a href="blog-vimeo-post.html" class="sub-menu-item">Vimeo Post</a></li>
                                        <li><a href="blog-audio-post.html" class="sub-menu-item">Audio Post</a></li>
                                        <li><a href="blog-blockquote-post.html" class="sub-menu-item">Blockquote</a></li>
                                        <li><a href="blog-left-sidebar-post.html" class="sub-menu-item">Left Sidebar</a></li>
                                    </ul>  
                                </li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Email Template</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="email-confirmation.html" class="sub-menu-item">Confirmation</a></li>
                                <li><a href="email-password-reset.html" class="sub-menu-item">Reset Password</a></li>
                                <li><a href="email-alert.html" class="sub-menu-item">Alert</a></li>
                                <li><a href="email-invoice.html" class="sub-menu-item">Invoice</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                                <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                                <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                                <li><a href="auth-lock-screen.html" class="sub-menu-item">Lock Screen</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-terms.html" class="sub-menu-item">Terms of Services</a></li>
                                <li><a href="page-privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a></li>
                                <li><a href="page-maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                <li><a href="page-error.html" class="sub-menu-item">Error</a></li>
                                <li><a href="page-thankyou.html" class="sub-menu-item">Thank you</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Contact </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="contact-detail.html" class="sub-menu-item">Contact Detail</a></li>
                                <li><a href="contact-one.html" class="sub-menu-item">Contact One</a></li>
                                <li><a href="contact-two.html" class="sub-menu-item">Contact Two</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Multi Level Menu</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a></li>
                                <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Level 2.0 </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a></li>
                                        <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a></li>
                                    </ul>  
                                </li>
                            </ul>  
                        </li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Portfolio</a><span class="menu-arrow"></span>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li class="megamenu-head">Modern Portfolio</li>
                                <li><a href="portfolio-modern-two.html" class="sub-menu-item">Two Column</a></li>
                                <li><a href="portfolio-modern-three.html" class="sub-menu-item">Three Column</a></li>
                                <li><a href="portfolio-modern-four.html" class="sub-menu-item">Four Column</a></li>
                                <li><a href="portfolio-modern-five.html" class="sub-menu-item">Five Column</a></li>
                                <li><a href="portfolio-modern-six.html" class="sub-menu-item">Six Column</a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li class="megamenu-head">Classic Portfolio</li>
                                <li><a href="portfolio-classic-two.html" class="sub-menu-item">Two Column</a></li>
                                <li><a href="portfolio-classic-three.html" class="sub-menu-item">Three Column</a></li>
                                <li><a href="portfolio-classic-four.html" class="sub-menu-item">Four Column</a></li>
                                <li><a href="portfolio-classic-five.html" class="sub-menu-item">Five Column</a></li>
                                <li><a href="portfolio-classic-six.html" class="sub-menu-item">Six Column</a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li class="megamenu-head">Creative Portfolio</li>
                                <li><a href="portfolio-creative-two.html" class="sub-menu-item">Two Column</a></li>
                                <li><a href="portfolio-creative-three.html" class="sub-menu-item">Three Column</a></li>
                                <li><a href="portfolio-creative-four.html" class="sub-menu-item">Four Column</a></li>
                                <li><a href="portfolio-creative-five.html" class="sub-menu-item">Five Column</a></li>
                                <li><a href="portfolio-creative-six.html" class="sub-menu-item">Six Column</a></li>
                            </ul>
                        </li>
                
                        <li>
                            <ul>
                                <li class="megamenu-head">Masonry Portfolio</li>
                                <li><a href="portfolio-masonry-two.html" class="sub-menu-item">Two Column</a></li>
                                <li><a href="portfolio-masonry-three.html" class="sub-menu-item">Three Column</a></li>
                                <li><a href="portfolio-masonry-four.html" class="sub-menu-item">Four Column</a></li>
                                <li><a href="portfolio-masonry-five.html" class="sub-menu-item">Five Column</a></li>
                                <li><a href="portfolio-masonry-six.html" class="sub-menu-item">Six Column</a></li>
                            </ul>
                        </li>
                
                        <li>
                            <ul>
                                <li class="megamenu-head">Portfolio Detail</li>
                                <li><a href="portfolio-detail-one.html" class="sub-menu-item">Portfolio One</a></li>
                                <li><a href="portfolio-detail-two.html" class="sub-menu-item">Portfolio Two</a></li>
                                <li><a href="portfolio-detail-three.html" class="sub-menu-item">Portfolio Three</a></li>
                                <li><a href="portfolio-detail-four.html" class="sub-menu-item">Portfolio Four</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Shop</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="shop-grid.html" class="sub-menu-item">Product Grid</a></li>
                        <li><a href="shop-grid-two.html" class="sub-menu-item">Product Grid Two</a></li>
                        <li><a href="shop-item-detail.html" class="sub-menu-item">Product Detail</a></li>
                        <li><a href="shop-cart.html" class="sub-menu-item">Shop Cart</a></li>
                        <li><a href="shop-checkout.html" class="sub-menu-item">Checkout</a></li>
                        <li><a href="shop-account.html" class="sub-menu-item">My Account</a></li>
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
