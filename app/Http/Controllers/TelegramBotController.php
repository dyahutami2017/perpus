<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;
use Telegram\Bot\FileUpload\InputFile;
use App\Buku;

class TelegramBotController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->level == 'user') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }

        $datas = Anggota::get();
        return view('anggota.index', compact('datas'));
    }
    public function updatedActivity()
    {
        $activity = Telegram::getUpdates();
        dd($activity);
    }
    public function indexTelegram()
    {
        return view('telegram.message');
    }
    public function storeMessage(Request $request)
    {
        
        $request->validate([
            'file' => 'file|mimes:jpeg,png,gif'
        ]);

        $text = "<b>Pengumuman Perpustakaan SMK N 2 Pengasih </b> \n"
        . $request->message;
        
        $photo = $request->file('file');

            if($text){
                Telegram::sendMessage([
                    'chat_id' => env('TELEGRAM_CHANNEL_ID',''),
                    'parse_mode' => 'HTML',
                    'text' => $text,
                 ]);
                 
            }
            if($photo)
            {
                 Telegram::sendPhoto([
                    'chat_id' => env('TELEGRAM_CHANNEL_ID', ''),
                    'photo' => InputFile::createFromContents(file_get_contents($photo->getRealPath()), str_random(10) . '.' . $photo->getClientOriginalExtension())
                 ]);
            }
                  
        alert()->success('Berhasil.','Pesan sudah terkirim!');
        return redirect()->back();
    }

   
    public function storeAnnounce(Request $request)
    {
        
              
        $pilih = Buku::whereIn('id', $request -> ids)->get();
        
        $str_head = "Ada Buku Baru Nih , Judul Berikut :\n";
        $str = '';
        foreach($pilih as $key=>$item) {
            $str .= 1+$key.'. '.$item->judul.' <b> Penerbit : </b>'.$item->penerbit. ','. ' <b> Lokasi : </b>'.$item->lokasi. "\n";
        }

        $final_str = $str_head.''.$str;
        
        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID',''),
            'parse_mode' => 'HTML',
            'text' => $final_str,
         ]);
         alert()->success('Berhasil.','Pesan sudah terkirim!');
         return redirect()->back();
    }
}