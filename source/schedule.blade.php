@extends('_layouts.master')

@section('body')
    <div class="min-h-screen bg-repeat" style="background-image: url('/assets/images/seamless_paper_texture.png');">
        <div class="container mx-auto">
            <div class="flex text-center items-center justify-center pt-12 mb-6">
                <span class="font-hobbiton text-6xl text-purple-900">Alex</span>
                <span class="font-hobbiton text-4xl text-purple-900 mx-4">&</span>
                <span class="font-hobbiton text-6xl text-purple-900">Kaili</span>
            </div>

            <div class="flex flex-wrap md:flex justify-center md:items-center md:justify-around mt-12 font-info text-xl md:text-4xl">
                <a class="bg-transparent text-purple-900 px-6 border-transparent border-b hover:border-purple-900 mb-6 md:mb-0" href="/">~ Home ~</a>
                <a class="bg-transparent text-purple-900 px-6 border-b border-purple-900 mb-6 md:mb-0" href="/schedule">~ Schedule ~</a>
                <a class="bg-transparent text-purple-900 px-6 border-transparent border-b hover:border-purple-900 mb-6 md:mb-0" href="/lodging">~ Lodging ~</a>
                <a class="bg-transparent text-purple-900 px-6 border-transparent border-b hover:border-purple-900 mb-6 md:mb-0" href="/faqs">~ FAQs ~</a>
            </div>

            <div class="w-full px-6 text-center min-w-sm max-w-4xl mx-auto font-info text-4xl text-purple-900 leading-tight mt-12">
                <p class="font-bold mt-6 mb-8">
                    The times below are all approximate, we're not going to stress over it.
                </p>

                <div class="flex-col items-center">
                    <div class="flex flex-wrap justify-center pb-12 mt-6">
                        <span class="text-4xl pb-6 md:pr-4 md:w-1/4">5:00pm</span>
                        <p class="text-3xl min-w-md md:w-3/4 md:pl-4">
                            A brief ceremony will be held in the backyard. We have no indoor alternate location planned, so if it calls for rain please bring an umbrella.
                        </p>
                    </div>
                    <div class="w-full border-b border-neutral-200"></div>
                </div>

                <div class="flex-col items-center">
                    <div class="flex flex-wrap justify-center pb-12 mt-6">
                        <span class="text-4xl pb-6 md:pr-4 md:w-1/4">5:30pm</span>
                        <p class="text-3xl min-w-md md:w-3/4 md:pl-4">
                            Grab a drink and find a seat. There will be a large tent area with seating as well as scattered tables. There are no assigned seats, so figure it out.
                        </p>
                    </div>
                    <div class="w-full border-b border-neutral-200"></div>
                </div>

                <div class="flex-col items-center">
                    <div class="flex flex-wrap justify-center pb-12 mt-6">
                        <span class="text-4xl pb-6 md:pr-4 md:w-1/4">6:30pm</span>
                        <p class="text-3xl min-w-md md:w-3/4 md:pl-4">
                            Dinner will be served. It is buffet style, and it will be un-organized and chaotic. Best of luck.
                        </p>
                    </div>
                    <div class="w-full border-b border-neutral-200"></div>
                </div>
            </div>

        </div>

    </div>
@endsection
