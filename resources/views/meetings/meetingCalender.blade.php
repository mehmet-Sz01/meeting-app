@extends('layout')
@section('content')
    <h1 class="m-0">Planlanmış Toplantılar</h1>
    <br><br>
    <section class="content-header">
<div class="col-md-6">
    @if(session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
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
        <button type="submit" class="btn btn-success">Toplantıya Git</button>
        <button type="submit" class="btn btn-primary pull-right">Takvimi Göster</button>
    </form>
</div>
    </section>
@endsection
@section('css')@endsection
@section('js')@endsection


