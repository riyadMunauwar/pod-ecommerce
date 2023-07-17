 <!-- start sidebar section -->
 <div :class="{'dark text-white-dark' : $store.app.semidark}">
    <nav
        x-data="sidebar"
        class="sidebar fixed top-0 bottom-0 z-50 h-full min-h-screen w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] transition-all duration-300"
    >
        <div class="h-full bg-white dark:bg-[#0e1726]">
            <div class="flex items-center justify-between px-4 py-3">
                <a href="index.html" class="main-logo flex shrink-0 items-center">
                    <img class="ml-[5px] w-8 flex-none" src="{{ asset('assets/images/elitg-letter-logo.png') }}" alt="image" />
                    <span class="align-middle text-2xl font-semibold ltr:ml-1.5 rtl:mr-1.5 dark:text-white-light lg:inline">ELITG</span>
                </a>
                <a
                    href="javascript:;"
                    class="collapse-icon flex h-8 w-8 items-center rounded-full transition duration-300 hover:bg-gray-500/10 rtl:rotate-180 dark:text-white-light dark:hover:bg-dark-light/10"
                    @click="$store.app.toggleSidebar()"
                >
                    <svg class="m-auto h-5 w-5" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            opacity="0.5"
                            d="M16.9998 19L10.9998 12L16.9998 5"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </a>
            </div>
            <ul
                class="perfect-scrollbar relative h-[calc(100vh-80px)] space-y-0.5 overflow-y-auto overflow-x-hidden p-4 py-0 font-semibold"
                x-data="{ activeDropdown: null }"
            >
                <li class="menu nav-item">
                    <button
                        type="button"
                        class="nav-link group"
                        :class="{'active' : activeDropdown === 'dashboard'}"
                        @click="activeDropdown === 'dashboard' ? activeDropdown = null : activeDropdown = 'dashboard'"
                    >
                        <div class="flex items-center">
                            <svg
                                class="group-hover:!text-primary"
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    opacity="0.5"
                                    d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                    fill="currentColor"
                                />
                                <path
                                    d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z"
                                    fill="currentColor"
                                />
                            </svg>

                            <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Dashboard</span>
                        </div>
                        <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'dashboard'}">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </button>
                    <ul x-cloak x-show="activeDropdown === 'dashboard'" x-collapse class="sub-menu text-gray-500">
                        <li>
                            <a href="index.html">Sales</a>
                        </li>
                        <li>
                            <a href="analytics.html">Analytics</a>
                        </li>
                    </ul>
                </li>

                <h2 class="-mx-4 mb-1 flex items-center bg-white-light/30 py-3 px-7 font-extrabold uppercase dark:bg-dark dark:bg-opacity-[0.08]">
                    <svg
                        class="hidden h-5 w-4 flex-none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <span>Design</span>
                </h2>

                <li class="nav-item">
                    <ul>
                        <li class="nav-item">
                            <a href="" class="group">
                                <div class="flex items-center">
                                    <svg 
                                        xmlns="http://www.w3.org/2000/svg" 
                                        fill="none" viewBox="0 0 24 24" 
                                        stroke-width="1.5" 
                                        stroke="currentColor" 
                                        class="group-hover:!text-primary"
                                        width="20"
                                        height="20"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>

                                    <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Add Design</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="apps-scrumboard.html" class="group">
                                <div class="flex items-center">
                                    <svg 
                                        class="group-hover:!text-primary"
                                        width="20"
                                        height="20"
                                        xmlns="http://www.w3.org/2000/svg" 
                                        fill="none" 
                                        viewBox="0 0 24 24" 
                                        stroke-width="1.5" 
                                        stroke="currentColor" 
                                        >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                    </svg>

                                    <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark"
                                        >My Design List</span
                                    >
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="apps-contacts.html" class="group">
                                <div class="flex items-center">

                                    <svg
                                        class="group-hover:!text-primary"
                                        width="20"
                                        height="20"
                                        xmlns="http://www.w3.org/2000/svg" 
                                        fill="none" viewBox="0 0 24 24" 
                                        stroke-width="1.5" 
                                        stroke="currentColor" 
                                        class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>

                                    <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Profile</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="apps-calendar.html" class="group">
                                <div class="flex items-center">
                                    <svg 
                                        class="group-hover:!text-primary"
                                        width="20"
                                        height="20"
                                        xmlns="http://www.w3.org/2000/svg" 
                                        fill="none" 
                                        viewBox="0 0 24 24" 
                                        stroke-width="1.5" 
                                        stroke="currentColor" 

                                        >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                    </svg>

                                    <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Security</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- end sidebar section -->