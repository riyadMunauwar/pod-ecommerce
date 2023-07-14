<!-- Footer Start -->
<footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">    
    <div class="container relative">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="py-[60px] px-0">
                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                        <div class="lg:col-span-3 md:col-span-12">
                            <a href="#" class="text-[22px] focus:outline-none">
                                <img class="w-20 inline-block" src="{{ asset('assets/images/elitg-logo-white.png') }}" alt="">
                            </a>
                            <p class="mt-6 text-gray-300">Unleash Your Creativity with Print On Demand Wear Your Unique Style!</p>
                            <ul class="list-none mt-6">
                                <li class="inline"><a href="https://1.envato.market/elitg" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                                <li class="inline"><a href="https://dribbble.com/elitg" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                                <li class="inline"><a href="https://www.behance.net/elitg" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-behance" title="Behance"></i></a></li>
                                <li class="inline"><a href="http://linkedin.com/company/elitg" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                                <li class="inline"><a href="https://www.facebook.com/elitg" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                <li class="inline"><a href="https://www.instagram.com/elitg/" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                <li class="inline"><a href="https://twitter.com/elitg" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                            </ul><!--end icon-->
                        </div><!--end col-->
                
                        <div class="lg:col-span-6 md:col-span-12">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Quick Links</h5>

                            @php 

                                $columns = \App\Models\FooterColumn::published()->with('attributes')->get();

                            @endphp 

                            <div class="grid md:grid-cols-12 grid-cols-1">
                                @foreach($columns ?? [] as $column)
                                    <div class="md:col-span-4">
                                        <ul class="list-none footer-list mt-6">
                                            @foreach($column->attributes as $attribute)
                                                <li><a href="{{ $attribute->name ?? '' }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> {{ $attribute->link ?? '' }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Newsletter</h5>
                            <p class="mt-6">Sign up and receive the latest tips via email.</p>
                            <form>
                                <div class="grid grid-cols-1">
                                    <div class="foot-subscribe my-3">
                                        <label class="form-label">Write your email <span class="text-red-600">*</span></label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                            <input type="email" class="form-input ps-12 rounded w-full py-2 px-3 h-10 bg-gray-800 border-0 text-gray-100 focus:shadow-none focus:ring-0" placeholder="Email" name="email" required="">
                                        </div>
                                    </div>
                                
                                    <button type="submit" id="submitsubscribe" name="send" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Subscribe</button>
                                </div>
                            </form>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div><!--end col-->
            </div>
        </div><!--end grid-->

        <div class="grid grid-cols-1">
            <div class="py-[30px] px-0 border-t border-slate-800">
                <div class="grid lg:grid-cols-4 md:grid-cols-2">
                    <div class="flex items-center lg:justify-center">
                        <i class="uil uil-truck align-middle text-lg mb-0 me-2"></i>
                        <h6 class="mb-0 font-medium">Free delivery</h6>
                    </div><!--end content-->

                    <div class="flex items-center lg:justify-center">
                        <i class="uil uil-archive align-middle text-lg mb-0 me-2"></i>
                        <h6 class="mb-0 font-medium">Non-contact shipping</h6>
                    </div><!--end content-->

                    <div class="flex items-center lg:justify-center">
                        <i class="uil uil-transaction align-middle text-lg mb-0 me-2"></i>
                        <h6 class="mb-0 font-medium">Money-back quarantee</h6>
                    </div><!--end content-->

                    <div class="flex items-center lg:justify-center">
                        <i class="uil uil-shield-check align-middle text-lg mb-0 me-2"></i>
                        <h6 class="mb-0 font-medium">Secure payments</h6>
                    </div><!--end content-->
                </div><!--end grid-->
            </div><!--end-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="py-[30px] px-0 border-t border-slate-800">
        <div class="container relative text-center">
            <div class="grid md:grid-cols-2 items-center">
                <div class="md:text-start text-center">
                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> All Right Reserved by <a href="https://elitg.com/" target="_blank" class="text-reset">ElitG</a>.</p>
                </div>

                <ul class="list-none md:text-end text-center mt-6 md:mt-0">
                    <li class="inline"><a href="#"><img src="assets/images/payments/american-ex.png" class="max-h-6 inline" title="American Express" alt=""></a></li>
                    <li class="inline"><a href="#"><img src="assets/images/payments/discover.png" class="max-h-6 inline" title="Discover" alt=""></a></li>
                    <li class="inline"><a href="#"><img src="assets/images/payments/master-card.png" class="max-h-6 inline" title="Master Card" alt=""></a></li>
                    <li class="inline"><a href="#"><img src="assets/images/payments/paypal.png" class="max-h-6 inline" title="Paypal" alt=""></a></li>
                    <li class="inline"><a href="#"><img src="assets/images/payments/visa.png" class="max-h-6 inline" title="Visa" alt=""></a></li>
                </ul>
            </div><!--end grid-->
        </div><!--end container-->
    </div>
</footer><!--end footer-->
<!-- Footer End -->