@extends('_layouts.master')

@section('body')
    <div class="min-h-screen bg-repeat" style="background-image: url('/assets/images/seamless_paper_texture.png');">
        <div class="container mx-auto">
            <div class="flex text-center items-center justify-center pt-12 mb-6">
                <span class="font-hobbiton text-6xl text-purple-900">Alex</span>
                <span class="font-hobbiton text-4xl text-purple-900 mx-4">&</span>
                <span class="font-hobbiton text-6xl text-purple-900">Kaili</span>
            </div>

            <div class="flex items-center justify-around mt-12 font-info text-4xl">
                <a class="bg-transparent text-purple-900 px-6 border-b border-purple-900" href="/">~ Home ~</a>
                <a class="bg-transparent text-purple-900 px-6 border-transparent border-b hover:border-purple-900" href="/schedule">~ Schedule ~</a>
                <a class="bg-transparent text-purple-900 px-6 border-transparent border-b hover:border-purple-900" href="/lodging">~ Lodging ~</a>
                <a class="bg-transparent text-purple-900 px-6 border-transparent border-b hover:border-purple-900" href="/faqs">~ FAQs ~</a>
            </div>

            <div class="flex items-center justify-center max-w-sm mx-auto mt-10 mb-12">
                <img class="rounded-full" src="/assets/images/us2.png"/>
            </div>

            <div class="text-center font-info text-5xl text-purple-900 leading-tight font-bold mt-12">
                <div>Sunday August 10, 2019 @ 5:00pm</div>
                <div>Chardon, OH</div>
            </div>

        </div>

    </div>
@endsection
