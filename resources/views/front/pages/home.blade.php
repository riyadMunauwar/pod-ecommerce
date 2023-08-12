<x-front.master-layout title="elitg.com | Home">

    @include('front.partials.home-banner-top')
    

    <livewire:front.partials.featured-product-caurosel />


    @include('front.partials.home-featured-banner')

    <livewire:front.partials.most-viewed-product />

    @include('front.partials.top-categories')

    <livewire:front.partials.popular-product />

    @include('front.partials.home-banner-bottom')

    <livewire:front.partials.recent-product />

    <livewire:front.partials.featured-product />

    <livewire:front.partials.featured-product-image-only-caurosel />

    @include('front.partials.apps-download')

</x-front.master-layout>


