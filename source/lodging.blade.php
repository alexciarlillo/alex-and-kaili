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
                <a class="bg-transparent text-purple-900 px-6 border-b border-purple-900 mb-6 md:mb-0" href="/lodging">~ Lodging ~</a>
                <a class="bg-transparent text-purple-900 px-6 border-transparent border-b hover:border-purple-900 mb-6 md:mb-0" href="/faqs">~ FAQs ~</a>
            </div>

            <div class="font-info text-4xl text-purple-900 leading-tight mt-12 px-6 pb-6">
                <p>
                    We will reserve a block of rooms at the newly constructed Holiday Inn once they are open for business. We will provide the details and updated information ASAP, please check back.
                </p>

                <div class="ml-4 mt-8">
                    <div class="font-bold">
                        Holiday Express & Suites
                    </div>
                    <div>
                        11200 Gold Ct.
                    </div>
                    <div>
                        Painesville, OH 44077
                    </div>
                </div>

                <div class="mt-12 mb-12 text-center">Alternative Lodging Options</div>

                <div class="ml-4 mt-8">
                    <div class="font-bold">
                        Comfort Inn
                    </div>
                    <div>
                        7581 Auburn Rd.
                    </div>
                    <div>
                        Painesville, OH 44077
                    </div>
                </div>

                <div class="ml-4 mt-8">
                    <div class="font-bold">
                        Quail Hollow Resort
                    </div>
                    <div>
                        11080 Concord Hambden Rd.
                    </div>
                    <div>
                        Painesville, OH 44077
                    </div>
                    <div class="text-3xl">
                        * This place DOES NOT have good reviews... but it has a pool?
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
