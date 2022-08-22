@extends('layouts.admin')

@section('page_title', 'Modifica del Film #' . $movie->id)

@section('page_content')
  <div class="container">
    <form action="{{ route('admin.movies.update', $movie->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="titleInput" class="form-label">Titolo</label>
        <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title"
          id="titleInput" value="{{ old('title') ?? $movie->title }}">
        <div class="invalid-feedback">
          {{ $errors->first('title') }}
        </div>
      </div>

      <div class="mb-3">
        <label for="overviewInput" class="form-label">Descrizione</label>
        <textarea class="form-control {{ $errors->has('overview') ? 'is-invalid' : '' }}" name="overview" id="overviewInput"
          rows="3">{!! old('overview') ?? $movie->overview !!}</textarea>
        <div class="invalid-feedback">
          {{ $errors->first('overview') }}
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="release_dateInput" class="form-label">Data uscita</label>
            <input type="date" class="form-control {{ $errors->has('release_date') ? 'is-invalid' : '' }}"
              name="release_date" id="release_dateInput" value="{{ old('release_date') ?? $movie->release_date }}">
            <div class="invalid-feedback">
              {{ $errors->first('release_date') }}
            </div>
          </div>
        </div>

        <div class="col">
          <div class="mb-3">
            <label for="running_timeInput" class="form-label">Durata (minuti)</label>
            <input type="number" step="1"
              class="form-control {{ $errors->has('running_time') ? 'is-invalid' : '' }}" name="running_time"
              id="running_timeInput" value="{{ old('running_time') ?? $movie->running_time }}">
            <div class="invalid-feedback">
              {{ $errors->first('running_time') }}
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label for="poster_imgInput" class="form-label">Poster</label>
            <input type="text" class="form-control {{ $errors->has('poster_img') ? 'is-invalid' : '' }}"
              name="poster_img" id="poster_imgInput" value="{{ old('poster_img') ?? $movie->poster_img }}">
            <div class="invalid-feedback">
              {{ $errors->first('poster_img') }}
            </div>
          </div>
        </div>

        <div class="col">
          <div class="mb-3">
            <label for="parental_ratingInput" class="form-label">Parental Rating</label>
            <select class="form-select {{ $errors->has('parental_rating') ? 'is-invalid' : '' }}" name="parental_rating"
              id="parental_ratingInput">
              <option value=""></option>
              @foreach ($movieRatings as $rating)
                <option value="{{ $rating['code'] }}"
                  {{ $rating['code'] === (old('parental_rating') ?? $movie->parental_rating) ? 'selected' : '' }}>
                  {{ $rating['code'] . ' - ' . $rating['title'] }} </option>
              @endforeach
            </select>
            <div class="invalid-feedback">
              {{ $errors->first('parental_rating') }}
            </div>
          </div>
        </div>

        <div class="col">
          <div class="mb-3">
            <label for="original_languageInput" class="form-label">Lingua originale</label>
            <input type="text" class="form-control {{ $errors->has('original_language') ? 'is-invalid' : '' }}"
              name="original_language" id="original_languageInput"
              value="{{ old('original_language') ?? $movie->original_language }}">
            <div class="invalid-feedback">
              {{ $errors->first('original_language') }}
            </div>
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-success">Salva</button>
      <a href="{{ route('admin.movies.index') }}" class="btn btn-secondary">Annulla</a>

    </form>
  </div>
@endsection