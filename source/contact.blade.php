---
title: Contact
description: Get in touch with me
---
@extends('_layouts.main')

@section('body')
    <h1>Contact</h1>

    <p class="mb-8">
        Hey! I currently work full-time, but I always have time for a side project. Feel free to contact me if you need to solve a problem or have a great idea in mind.
    </p>

    <div class="md:w-3/4 mt-6 sm:mt-12 text-grey-darkest antialiased">
        <div class="py-4 flex">
            <div class="w-32 sm:w-48">Twitter:</div>
            <a class="link no-underline" href="https://twitter.com/perastocaza">@perastocaza</a>
        </div>
        <div class="py-4 flex border-t">
            <div class="w-32 sm:w-48">GitHub:</div>
            <a class="link no-underline" href="https://github.com/pastocaza">@pastocaza</a>
        </div>
        <div class="py-4 flex border-t">
            <div class="w-32 sm:w-48">
                <div class="sm:hidden">Email:</div>
                <div class="hidden sm:block">Email address:</div>
            </div>
            <a class="link no-underline" href="mailto:percy@astocaza.dev">percy@astocaza.dev</a>
        </div>
    </div>
@stop
