<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class MeetingController extends Controller
{
    public function create()
    {
        return view('meetings.create');
    }

    public function store(Request $request)
    {
        $meetings = $this->getMeetingsFromFile();

        $meeting = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
        ];

        $meetings[] = $meeting;

        $this->writeMeetingsToFile($meetings);

        // Oluşturulan toplantıya özel bir kod oluştur
        $meetingCode = $this->generateMeetingCode();

        // Kodu dosyaya yaz
        $this->writeMeetingCodeToFile($meetingCode);

        return redirect()->route('meetings.create')->with('success', 'Toplantı oluşturuldu! Kod: ' . $meetingCode);
    }

    private function generateMeetingCode()
    {
        // Özel bir kod oluşturabilirsiniz, örneğin rastgele bir string
        return str_random(8);
    }

    private function writeMeetingCodeToFile($code)
    {
        $filePath = storage_path('app/meeting_code.txt');
        File::put($filePath, $code);
    }

    public function showMeetingCode()
    {
        $meetingCode = $this->getMeetingCodeFromFile();
        return view('meetings.show_code', compact('meetingCode'));
    }

    private function getMeetingCodeFromFile()
    {
        $filePath = storage_path('app/meeting_code.txt');

        if (File::exists($filePath)) {
            return File::get($filePath);
        }

        return null;
    }



public function showCalendar(Request $request)
{
    // Toplantı kodunu ve kullanıcı ismini al
    $meetingCode = $request->input('meeting_code');
    $username = $request->input('username');

    // Toplantı kodunu kontrol et
    if (!$this->isValidMeetingCode($meetingCode)) {
        return redirect()->route('meetings.create')->with('error', 'Geçersiz toplantı kodu.');
    }

    // Toplantı bilgilerini al
    $meeting = $this->getMeetingByCode($meetingCode);

    // Kullanıcının uygunluk durumunu kontrol et
    $availability = $this->getUserAvailability($username, $meeting);

    return view('meetings.show_calendar', compact('meeting', 'username', 'availability'));
}

private function isValidMeetingCode($code)
{
    $storedCode = $this->getMeetingCodeFromFile();
    return $storedCode && $storedCode === $code;
}

private function getMeetingByCode($code)
{
    // Bu fonksiyonu ihtiyacınıza göre düzenleyebilirsiniz
    // Örneğin, kodu kullanarak ilgili toplantıyı veritabanından çekebilirsiniz.
    return [
        $meeting = [
            'title' => 'Toplantı Başlığı',
            'description' => 'Toplantı Açıklaması',
            'date' => '2023-12-01', // Örnek tarih
            'participants' => ['Ali', 'Ayşe', 'Mehmet', 'Merve'], // Katılımcılar
            // Diğer toplantı bilgileri...
        ],
    ];
}

private function getUserAvailability($username, $meeting)
{
    // Bu fonksiyonu ihtiyacınıza göre düzenleyebilirsiniz
    // Kullanıcının uygunluk durumunu kontrol etmek için örnek bir işlem
    // Örneğin, kullanıcının uygun olduğu saatleri bir dizi olarak döndürebilirsiniz.
    return [
        '2023-12-01 10:00',
        '2023-12-01 14:00',
        // Diğer uygun saatler...
    ];
}



public function chooseBestTime(Request $request)
{
    $meetingCode = $request->input('meeting_code');

    if (!$this->isValidMeetingCode($meetingCode)) {
        return redirect()->route('meetings.create')->with('error', 'Geçersiz toplantı kodu.');
    }

    $meeting = $this->getMeetingByCode($meetingCode);

    // Tüm kullanıcıların uygun zamanlarını al
    $userAvailabilities = [];
    foreach ($meeting['participants'] as $participant) {
        $userAvailabilities[$participant] = $this->getUserAvailability($participant, $meeting);
    }

    // Ortak uygun zamanları bul
    $bestTime = $this->findCommonAvailability($userAvailabilities);

    return view('meetings.best_time', compact('meeting', 'bestTime'));
}

private function findCommonAvailability($userAvailabilities)
{
    // Bu fonksiyonu ihtiyacınıza göre düzenleyebilirsiniz
    // Tüm kullanıcıların uygun oldukları ortak zamanları bulan bir algoritma
    // Örneğin, en çok ortaklayan saatleri seçebilirsiniz.
    $commonAvailability = array_intersect(...array_values($userAvailabilities));

    return $commonAvailability;
}




}
