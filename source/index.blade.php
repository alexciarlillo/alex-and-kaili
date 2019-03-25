@extends('_layouts.master')

@section('body')
    {{--<div class="wrapper">--}}
        {{--<div class="min-h-screen inner-gradient"></div>--}}
        {{--<div class="content">--}}
            {{--<h1 class="font-hobbiton tracking-wide text-5xl">Hello world!</h1>--}}
            {{--<h1 class="font-kelt text-5xl">Hello world!</h1>--}}

        {{--</div>--}}
    {{--</div>--}}

    <div class="min-h-screen bg-cover bg-center" style="background-image: url('/assets/images/bg3.png');">
        <div class="container mx-auto">
            <div class="flex justify-center p-16">
                <h1 class="font-hobbiton text-6xl text-purple-900">Alex & Kaili Are Getting Married!</h1>
            </div>

            <div class="h-56 rounded overflow-hidden shadow-lg bg-neutral-100 card">
                When?
            </div>
        </div>

    </div>
@endsection
