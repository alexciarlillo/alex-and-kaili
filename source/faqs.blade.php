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
                <a class="bg-transparent text-purple-900 px-6 border-b border-purple-900 mb-6 md:mb-0" href="/">~ Home ~</a>
                <a class="bg-transparent text-purple-900 px-6 border-transparent border-b hover:border-purple-900 mb-6 md:mb-0" href="/schedule">~ Schedule ~</a>
                <a class="bg-transparent text-purple-900 px-6 border-transparent border-b hover:border-purple-900 mb-6 md:mb-0" href="/lodging">~ Lodging ~</a>
                <a class="bg-transparent text-purple-900 px-6 border-transparent border-b hover:border-purple-900 mb-6 md:mb-0" href="/faqs">~ FAQs ~</a>
            </div>

            <div class="min-w-sm max-w-4xl mx-auto font-info text-4xl text-purple-900 leading-tight mt-12">
                <p class="font-bold mt-6 mb-6 text-center">
                    Frequently Asked Questions
                </p>

                <div class="mx-auto flex flex-col items-center mt-8">
                    <div class="flex flex-between justify-start pb-12">
                        <span class="text-4xl w-1/4 border-r pr-6">Will there be alcohol?</span>
                        <p class="text-3xl w-3/4 pl-6">
                            You betcha. There will not be an open bar, however we will be providing plenty of beer, wine and a few select cocktails.
                        </p>
                    </div>
                </div>

                <div class="mx-auto flex flex-col items-center mt-8">
                    <div class="flex flex-between justify-start pb-12">
                        <span class="text-4xl w-1/4 border-r pr-6">What will the food be?</span>
                        <p class="text-3xl w-3/4 pl-6">
                            Backyard BBQ fare. Pulled pork, brisket, mac'n'cheese... and some other stuff. Desert will be like cookies and stuff.
                        </p>
                    </div>
                </div>

                <div class="mx-auto flex flex-col items-center mt-8">
                    <div class="flex flex-between justify-start pb-12">
                        <span class="text-4xl w-1/4 border-r pr-6">What if it rains?</span>
                        <p class="text-3xl w-3/4 pl-6">
                            We have no alternate plan for rain. If it's in the forecast dress appropriately and bring an umbrella. There will be a large tent, covered gazebo and porch areas, but other than that you're on your own.
                        </p>
                    </div>
                </div>

                <div class="mx-auto flex flex-col items-center mt-8">
                    <div class="flex flex-between justify-start pb-12">
                        <span class="text-4xl w-1/4 border-r pr-6">What should I wear?</span>
                        <p class="text-3xl w-3/4 pl-6">
                            Whatever you want. Probably nothing too fancy. Definitely not formal attire. Something weather appropriate.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
