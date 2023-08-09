@props(['design' => null, 'src' => ''])


<div class="absolute inset-0 w-full h-full">

    <div class="absolute w-full h-full inset-0">
        <img class="block w-full h-full" src="{{ $src }}">
    </div>

    <div style="background-color: rgba(0, 0, 0, {{ $design->design_opacity }} )" class="absolute w-full h-full inset-0"></div>

  
    <div style="top: {{ $design->design_top }}%; left: {{ $design->design_left }}%; width: {{ $design->design_width }}%; height: {{ $design->design_height }}%; transform: rotate({{ $design->design_rotate_angel }}deg);" class="absolute">
        <img class="block w-full h-full" src="{{ $design->designUrl() }}" alt="">
    </div>
   
</div>