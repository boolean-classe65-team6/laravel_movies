@extends('layouts.admin')

@section('page_title', 'Movies')

@section('page_content')
    <div class="container">
        <div class="text-center py-3">
            <a href="{{ route('admin.movies.create') }}" class="btn btn-primary">Aggiungi un film</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Poster</th>
                    <th>Titolo</th>
                    <th>Parental Rating</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies ?? '' as $movie)
                    <tr>
                        <td>{{ $movie->id }}</td>
                        <td><img src="{{ $movie->poster_img }}" alt="" class="img-thumbnail" style="height: 80px"></td>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->parental_rating }}</td>
                        <td>
                            <a href="{{ route('admin.movies.show', $movie->id) }}" class="btn btn-warning">
                                <svg class="bi" width="16" height="16">
                                    <use xlink:href="/bootstrap-icons.svg#eye-fill"></use>
                                </svg>
                            </a>

                            <a href="{{ route('admin.movies.edit', $movie->id) }}" class="btn btn-info">
                                <svg class="bi" width="16" height="16">
                                    <use xlink:href="/bootstrap-icons.svg#pencil-square"></use>
                                </svg>
                            </a>

                            <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">
                                    <svg class="bi" width="16" height="16">
                                        <use xlink:href="/bootstrap-icons.svg#trash"></use>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
