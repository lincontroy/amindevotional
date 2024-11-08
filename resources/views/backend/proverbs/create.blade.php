@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Add Proverb</h5>
    <div class="card-body">
        <form method="post" action="{{ route('proverbs.store') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputTitle" class="col-form-label">Verse e.g (— Proverbs 3:1-3 (ESV))</label>
                <input id="inputTitle" type="text" name="verse" placeholder="Enter proverb"
                    value="{{ old('psalm') }}" class="form-control" required>
                @error('verse')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputEmail" class="col-form-label">Wording</label>
                <textarea id="inputEmail" name="words" placeholder="Enter words"
                    value="{{ old('words') }}" class="form-control" required></textarea>
                @error('words')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <button type="reset" class="btn btn-warning">Reset</button>
                <button class="btn btn-success" type="submit">Submit</button>
            </div>


        </form>
    </div>
</div>

@endsection

@push('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');

    </script>
@endpush
