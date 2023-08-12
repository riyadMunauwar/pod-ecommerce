<x-front.master-layout title="elitg.com | Home">

    @include('front.partials.home-banner-top')
    

    <livewire:front.partials.featured-product-caurosel />


    @include('front.partials.home-featured-banner')

    <livewire:front.partials.most-viewed-product />

    @include('front.partials.top-categories')
    @include('front.partials.popular-products')
    @include('front.partials.home-banner-bottom')
    @include('front.partials.recent-products')
    @include('front.partials.featured-products')
    @include('front.partials.featured-product-only-image-caurosel')
    @include('front.partials.apps-download')

</x-front.master-layout>


