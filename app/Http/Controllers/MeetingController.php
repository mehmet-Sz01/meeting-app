<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class MeetingController extends Controller
{

    public function showDate()
    {
        return view('meetings.show-Date');
    }

    public function create()
    {
        return view('meetings.create');

    }

    public function store(Request $request): RedirectResponse
    {

        $filePath = storage_path('meeting_scheduler.json');

        if (File::exists($filePath))
            $meetings =json_decode(file_get_contents($filePath),true);
        else
            $meetings=[];

        //google api bağlanacak
//       $client = Socialite::driver('google')->stateless()->userFromToken($request->session()->get('google_token'));

        $meetingCode= (string) Str::uuid();

        $meeting = [
            'participants' => ['Ali', 'Fatma', 'Mehmet', 'Merve'],
            'title' => $request->title,
            'description' => $request->description,
            'dates' => $request->dates,
            'code'=> $meetingCode,
        ];

        $meetings[] = $meeting;

        file_put_contents($filePath, json_encode($meetings, JSON_PRETTY_PRINT));

        return redirect()->route('meetings.create')->with('success', 'Toplantı oluşturuldu! Kod: ' . $meetingCode);
    }


    public function showMeetingCode()
    {
        $meetingCode = $this->getMeetingCodeFromFile();
        return view('meetings.show_code', compact('meetingCode'));
    }


    public function meetingCalender()
    {
        return view('meetings.meetingCalender');
    }

public function showCalendar(Request $request)
{
    // Toplantı kodunu ve kullanıcı ismini al
    $meetingCode = $request->meeting_code;
    $participants = $request->username;

    // Toplantı kodunu kontrol et
    if ($this->isValidMeetingCode($meetingCode)) {
        return redirect()->route('meetings.meetingCalender')->with('error', 'Geçersiz toplantı kodu.');
    }

    // Toplantı bilgilerini al
    $meeting = $this->getMeetingByCode($meetingCode);

    // Kullanıcının uygunluk durumunu kontrol et
    $availability = $this->getUserAvailability($participants, $meeting);

    return view('meetings.show', compact('meeting', 'participants', 'availability'));
}

public function isValidMeetingCode($code): bool
{

    $storedCode = $this->getMeetingCodeFromFile();
    return $storedCode && $storedCode === $code;
}

  public function getMeetingByCode($code): array
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

public function getUserAvailability($username, $meeting): array
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

public function findCommonAvailability($userAvailabilities): array
{
    // Bu fonksiyonu ihtiyacınıza göre düzenleyebilirsiniz
    // Tüm kullanıcıların uygun oldukları ortak zamanları bulan bir algoritma
    // Örneğin, en çok ortaklayan saatleri seçebilirsiniz.
    $commonAvailability = array_intersect(...array_values($userAvailabilities));

    return $commonAvailability;
}
    public function getMeetingCodeFromFile()
    {
        $filePath = storage_path('meeting_scheduler.json');

        if (File::exists($filePath))
            $meetings =json_decode(file_get_contents($filePath),true);
        else
            $meetings=[];

        return $meetings;
    }

    public function showMeetings()
    {
        // JSON dosyasındaki verileri okuyun
        $jsonFilePath = storage_path('meeting_scheduler.json');
        $meeting = json_decode(file_get_contents($jsonFilePath), true);

        // View'e verileri geçirin
        return view('meetings.show', compact('meeting'));
    }


}
