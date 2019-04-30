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
                <a class="bg-transparent text-purple-900 px-6 border-transparent border-b hover:border-purple-900 mb-6 md:mb-0" href="/schedule">~ Schedule ~</a>
                <a class="bg-transparent text-purple-900 px-6 border-transparent border-b hover:border-purple-900 mb-6 md:mb-0" href="/lodging">~ Lodging ~</a>
                <a class="bg-transparent text-purple-900 px-6 border-b border-purple-900 mb-6 md:mb-0" href="/faqs">~ FAQs ~</a>
            </div>

            <div class="min-w-sm max-w-4xl mx-auto font-info text-4xl text-purple-900 leading-tight mt-12 px-4">
                <p class="font-bold mt-6 mb-6 text-center">
                    Frequently Asked Questions
                </p>

                <p class="mt-4 mb-6 text-center text-3xl">
                    We will continue to update this section as we approach the date. Please check back if your question is not addressed, or just reach out to us and we'll do our best to figure it out.
                </p>

                <div class="mx-auto flex items-center mt-8">
                    <div class="flex flex-wrap text-center md:text-left justify-center items-center pb-12">
                        <span class="text-5xl w-full text-bold md:text-4xl md:w-1/4 md:pr-4">Will there be alcohol?</span>
                        <p class="border-0 text-3xl w-full pt-6 md:w-3/4 md:pl-4 md:border-l">
                            You betcha. We will be providing plenty of beer, wine and a few select cocktails.
                        </p>
                        <div class="w-full border-b border-neutral-200 md:border-0 pt-4"></div>
                    </div>
                </div>

                <div class="mx-auto flex items-center mt-8">
                    <div class="flex flex-wrap text-center md:text-left justify-center items-center pb-12">
                        <span class="text-5xl w-full text-bold md:text-4xl md:w-1/4 md:pr-4">What will the food be?</span>
                        <p class="border-0 text-3xl w-full pt-6 md:w-3/4 md:pl-4 md:border-l">
                            Backyard BBQ fare. Pulled pork, brisket, mac'n'cheese... and some other stuff. Desert will be like cookies and stuff.
                        </p>
                        <div class="w-full border-b border-neutral-200 md:border-0 pt-4"></div>
                    </div>
                </div>

                <div class="mx-auto flex items-center mt-8">
                    <div class="flex flex-wrap text-center md:text-left justify-center items-center pb-12">
                        <span class="text-5xl w-full text-bold md:text-4xl md:w-1/4 md:pr-4">What if it rains?</span>
                        <p class="border-0 text-3xl w-full pt-6 md:w-3/4 md:pl-4 md:border-l">
                            We have no alternate plan for rain. If it's in the forecast dress appropriately and bring an umbrella. There will be a large tent, covered gazebo and porch areas, but other than that you're on your own.
                        </p>
                        <div class="w-full border-b border-neutral-200 md:border-0 pt-4"></div>
                    </div>
                </div>

                <div class="mx-auto flex items-center mt-8">
                    <div class="flex flex-wrap text-center md:text-left justify-center items-center pb-12">
                        <span class="text-5xl w-full text-bold md:text-4xl md:w-1/4 md:pr-4">What should I wear?</span>
                        <p class="border-0 text-3xl w-full pt-6 md:w-3/4 md:pl-4 md:border-l">
                            Whatever you want. Probably nothing too fancy. Casual attire is fine. Something weather appropriate.
                        </p>
                    </div>
                </div>

                <div class="mx-auto flex items-center mt-8">
                    <div class="flex flex-wrap text-center md:text-left justify-center items-center pb-12">
                        <span class="text-5xl w-full text-bold md:text-4xl md:w-1/4 md:pr-4">Where should I park?</span>
                        <p class="border-0 text-3xl w-full pt-6 md:w-3/4 md:pl-4 md:border-l">
                            It will be mostly street parking. We are trying to keep the driveway clear so that anyone with limited mobility can be dropped off easily. If we plan on having you to park somewhere else, we'll be in touch.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
