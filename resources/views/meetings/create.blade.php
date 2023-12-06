@extends('layout')
@section('content')
<section class="content-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
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
                        <input type="date" class="form-control" name="date" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Toplantı Oluştur</button>
                </form>
            </div>

            <div class="col-md-6">
                <form method="post" action="{{ route('meetings.show-calendar') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="meeting_code" class="form-label">Toplantı Kodu:</label>
                        <input type="text" class="form-control" name="meeting_code" required>
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">İsim:</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>

                    <button type="submit" class="btn btn-success">Takvimi Göster</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@section('css')@endsection
@section('js')@endsection
