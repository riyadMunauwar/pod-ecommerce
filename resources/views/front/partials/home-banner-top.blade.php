@php 

    $home_top_banner = \App\Models\Banner::published()->where('show_in_page', 'home')->where('name', 'home-top')->first();

@endphp

@if($home_top_banner)

<section class="relative mt-20">
  <div class="container-fluid relative">
      <div class="relative py-48 table w-full shadow-md overflow-hidden">
          <div class="absolute inset-0 bg-[url('{{ $home_top_banner->imageUrl() }}')] bg-no-repeat md:bg-left bg-center bg-cover"></div>
          <div class="absolute inset-0 bg-slate-950/30"></div>
          <div class="container relative">
              <div class="grid grid-cols-1">
                  <div class="md:text-start text-center">

                    @if($home_top_banner->title)
                        <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">{{ $home_top_banner->title ?? '' }}</h1>
                    @endif

                    @if($home_top_banner->sub_title)
                      <p class="text-white/70 text-xl max-w-xl">{{ $home_top_banner->sub_title ?? '' }}</p>
                    @endif

                    @if($home_top_banner->button_text)
                      <div class="mt-6">
                          <a href="{{ $home_top_banner->button_link ?? '/'  }}" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2"><i class="mdi mdi-cart-outline"></i> {{ $home_top_banner->button_text ?? '' }}</a>
                      </div>
                    @endif
                  </div>
              </div><!--end grid-->
          </div><!--end container-->
      </div>
  </div><!--end Container-->
</section>

@endif