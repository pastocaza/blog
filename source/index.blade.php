@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>About</h1>

    <img src="/assets/img/about.jpg"
         alt="About image"
         class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">Hello! I'm <a href="https://twitter.com/perastocaza">Percy Astocaza</a>, a full-stack web developer based in Chimbote, Peru.</p>

    <p class="mb-6">I'm also a <a href="https://www.codementor.io/@percyastocaza">Codementor</a>, where I help people with software problems and teach students programming concepts in a simple manner.</p>

    <p class="mb-6">My favorite stack includes
        <a href="https://laravel.com">Laravel</a>, <a href="https://vuejs.org">Vue</a> or <a href="https://reactjs.org">React</a> and
        <a href="https://tailwindcss.com">Tailwind CSS</a>, but I'm happy to work with other technologies and learn new things.</p>

    <p class="mb-6">In my free time, I enjoy spending time with my wife and our Peruvian dog Tabita, read light novels and watch movies.</p>
@endsection
