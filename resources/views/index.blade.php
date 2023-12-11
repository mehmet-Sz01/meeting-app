<!-- resources/views/index.blade.php -->
@extends('layout')

@section('content')
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-4">Toplantı Yönetim Uygulaması</h1>
            <p class="lead">
                İşlerinizi düzenleyin, takviminizi yönetin ve toplantılarınızı kolayca planlayın.
            </p>
            <a href="{{ route('meetings.create') }}" class="btn btn-primary btn-lg">Toplantı Oluştur Kısmına Git</a>
        </div>
    </section>

    <section class="features-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-item">
                        <i class="fas fa-calendar-alt"></i>
                        <h3>Toplantı Takvimi</h3>
                        <p>Katılımcılarınızı düzenleyin ve toplantı tarihlerini takip edin.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <i class="fas fa-edit"></i>
                        <h3>Açıklama Ekleme</h3>
                        <p>Toplantılarınıza açıklamalar ekleyerek detayları paylaşın.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <i class="fas fa-users"></i>
                        <h3>Katılımcı Yönetimi</h3>
                        <p>Toplantı katılımcılarınızı yönetin ve davetiyeler gönderin.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <style>
        /* Stil eklemek için CSS kuralları buraya eklenebilir. */
        .hero-section {
            background-color: #f8f9fa;
            padding: 100px 0;
        }

        .features-section {
            padding: 50px 0;
        }

        .feature-item {
            text-align: center;
            margin-bottom: 30px;
        }

        .feature-item i {
            font-size: 3em;
            color: #007bff;
            margin-bottom: 20px;
        }
    </style>
@endsection

@section('js')@endsection
