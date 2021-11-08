@extends('_layouts.main')

@section('body')
<section class="h-screen p-8 bg-cover"
    style="background-image: linear-gradient(rgba(227, 114, 38, 0.75),rgba(227, 114, 38, 0.75)), url('/assets/images/hero.jpg') ;">
    <div class="h-full max-w-5xl mx-auto flex flex-col justify-center items-center">

        <h1 class="text-5xl text-center text-white font-bold">Make Your Home
            <div class="text-xl">
                Modern + Organized + Functional
            </div>
        </h1>
    </div>
</section>
<section class="container py-5 md:pt-10 md:pb-0">
    <div class="grid md:grid-cols-2 gap-8 mt-8">
        <div class="-mb-14">
            <x-lightbox-image src="assets/images/kitchen-remodel-after-01.jpg" alt="After the kitchen was remodeled" />
            <x-lightbox-image class="relative mx-auto w-60 bottom-14 shadow-2xl md:shadow-lg md:ml-0 md:right-10"
                src="assets/images/kitchen-remodel-after-02.jpg" alt="After the kitchen was remodeled" />
        </div>
        <div>
            <h3>Kitchen Remodels</h3>
            <p>The kitchen is one of the areas that can effect the re-sell value of your home the most. We love to see
                how happy our customers are after allowing us to dramatically transform their kitchen and increasing the
                usability and value of their home.</p>
            <div class="grid md:grid-cols-3 gap-4">
                <x-lightbox-image src="assets/images/kitchen-remodel-before-01.jpg"
                    alt="Before the kitchen was remodeled" />
                <x-lightbox-image src="assets/images/kitchen-remodel-before-02.jpg"
                    alt="Before the kitchen was remodeled" />
                <x-lightbox-image src="assets/images/kitchen-remodel-before-03.jpg"
                    alt="Before the kitchen was remodeled" />
            </div>
        </div>
    </div>
</section>
<section class="container py-5 md:mb-10 md:mt-0">
    <div class="grid md:grid-cols-2 gap-8 mt-8">
        <div>
            <h3>Additions</h3>
            <p>Adding an addition to your home is a great way to get more space without the expense and hassle of
                moving.</p>
            <div class="grid grid-cols-2 gap-4">
                <x-lightbox-image src="assets/images/home-addition-during-03.jpg" alt="During the addition" />
                <x-lightbox-image src="assets/images/home-addition-during-04.jpg" alt="During the addition" />
            </div>
        </div>
        <div>
            <x-lightbox-image src="assets/images/home-addition-during-01.jpg" alt="During the addition" />
        </div>
    </div>
</section>
@endsection