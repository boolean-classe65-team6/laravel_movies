@extends('layouts.admin')

@section('page_title', 'Main home')

@section('page_content')

    <body class="d-flex h-100 text-center text-bg-white" data-q-sc-loaded="true" cz-shortcut-listen="true">

        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="mb-auto">
                <div>
                    <h3 class="float-md-start mb-0">Cover</h3>
                    {{-- home route --}}
                    <nav class="nav nav-masthead justify-content-center float-md-end">
                        {{-- public home route --}}
                        <li class="nav-item">
                            <a href="{{ route('home') }}"
                                class="nav-link"
                                aria-current="page">
                                <svg class="bi pe-none me-2 text-light" width="16" height="16">
                                    <use xlink:href="/bootstrap-icons.svg#house-fill"></use>
                                </svg>
                            </a>
                        </li>
                        {{-- movies route --}}
                        <li class="nav-item">
                            <a href="{{ route('admin.movies.index') }}"
                                class="nav-link "
                                aria-current="page">
                                <svg class="bi pe-none me-2 text-light" width="16" height="16">
                                    <use xlink:href="/bootstrap-icons.svg#patch-question-fill"></use>
                                </svg>
                            </a>
                        </li>
                    </nav>
                </div>
            </header>

            <main class="px-3">
                <h1>Main admin page</h1>
                <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit
                    the text, and add your own fullscreen background photo to make it your own.</p>
                <p class="lead">
                    <a href="{{ route('admin.movies.index') }}" class="btn btn-lg btn-primary fw-bold border-white bg-black">Movies</a>
                </p>
            </main>

        </div>





    </body>
@endsection
