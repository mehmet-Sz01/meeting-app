@extends('layout')
@section('content')
    <h1 class="m-0">Toplantı oluştur</h1>
    <section class="content-header">
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @if(session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="post" action="{{ route('meetings.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Başlık:</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Açıklama:</label>
                            <textarea class="form-control" name="description" required></textarea>
                        </div>

                    <div class="mb-3">
                        <label for="date" class="form-label">Tarih:</label>
                        <input type="date" class="form-control" name="dates" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Toplantı Oluştur</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@section('css')@endsection
@section('js')@endsection
