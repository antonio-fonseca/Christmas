<?php

namespace App\Http\Controllers;

use App\Mail\Letterina;
use App\Mail\LetterinaRicevuta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function getHome(){
        $prodottiHome = [
            [
                'name'=>'Casa di Barbie', 'category'=>'Giocattoli',
                'price'=>'€108,00',
                'url'=>'/media/casa_barbie.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Macchinina', 'category'=>'Giocattoli',
                'price'=>'€28,00',
                'url'=>'/media/macchinina.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'PS5', 'category'=>'Elettronica',
                'price'=>'€499,99',
                'url'=>'/media/ps5.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
        ];
            return view('home', ['prodotti'=>$prodottiHome]);
    }

    public function getProdotti(){
        $prodotti = [
            [
                'name'=>'Casa di Barbie', 'category'=>'Giocattoli',
                'price'=>'€108,00',
                'url'=>'/media/casa_barbie.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Macchinina', 'category'=>'Giocattoli',
                'price'=>'€28,00',
                'url'=>'/media/macchinina.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'PS5', 'category'=>'Elettronica',
                'price'=>'€499,99',
                'url'=>'/media/ps5.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'BANG!', 'category'=>'Giochi da tavolo',
                'price'=>'€20,00',
                'url'=>'/media/BANG.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Barbie a cavallo', 'category'=>'Giocattoli',
                'price'=>'€32,90',
                'url'=>'/media/Cavallo-Barbie.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Bambola Anna - Frozen', 'category'=>'Giocattoli',
                'price'=>'€14,90',
                'url'=>'/media/Frozen_Anna.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Bambola Elsa - Frozen', 'category'=>'Giocattoli',
                'price'=>'€14,90',
                'url'=>'/media/Frozen_Elsa.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Action Figure Broly - Dragon Ball', 'category'=>'Giocattoli',
                'price'=>'€17,90',
                'url'=>'/media/Giocattolo-Broly.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Action Figure Goku - Dragon Ball', 'category'=>'Giocattoli',
                'price'=>'€17,90',
                'url'=>'/media/Giocattolo-Goku.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Action Figure Vegeta - Dragon Ball', 'category'=>'Giocattoli',
                'price'=>'€17,90',
                'url'=>'/media/Giocattolo-Vegeta.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Hogwarts Legacy - Gioco PS5', 'category'=>'Elettronica',
                'price'=>'€59,99',
                'url'=>'/media/Hogwarts-Legacy.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Lego Tulkun - Avatar', 'category'=>'Giochi da tavolo',
                'price'=>'€64,90',
                'url'=>'/media/Lego-Avatar-Tulkun.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Lego Dart Fener - Star Wars', 'category'=>'Giochi da tavolo',
                'price'=>'€48,90',
                'url'=>'/media/Lego-Dart-Fener.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Lego Dobby Elfo Domestico - Harry Potter', 'category'=>'Giochi da tavolo',
                'price'=>'€37,90',
                'url'=>'/media/Lego-Dobby.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Monopoly', 'category'=>'Giochi da tavolo',
                'price'=>'€24,90',
                'url'=>'/media/Monopoly.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Nintendo Switch Console', 'category'=>'Elettronica',
                'price'=>'€299,99',
                'url'=>'/media/Nintendo-Switch-Console.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Risiko', 'category'=>'Giochi da tavolo',
                'price'=>'€29,90',
                'url'=>'/media/Risiko.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Spiderman Miles Morales - Giochi PS5', 'category'=>'Elettronica',
                'price'=>'€79,99',
                'url'=>'/media/Spiderman-Miles-Morales.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Super Mario - Giochi Swicth', 'category'=>'Elettronica',
                'price'=>'€49,99',
                'url'=>'/media/Super-Mario.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Zelda - Giochi Switch', 'category'=>'Elettronica',
                'price'=>'€59,99',
                'url'=>'/media/Zelda.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
        ];
        return view('prodotti',['prodotti'=>$prodotti]);
    }
    public function getProdottiDettagli($name){
        $prodotti = [
            [
                'name'=>'Casa di Barbie', 'category'=>'Giocattoli',
                'price'=>'€108,00',
                'url'=>'/media/casa_barbie.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Macchinina', 'category'=>'Giocattoli',
                'price'=>'€28,00',
                'url'=>'/media/macchinina.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'PS5', 'category'=>'Elettronica',
                'price'=>'€499,99',
                'url'=>'/media/ps5.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'BANG!', 'category'=>'Giochi da tavolo',
                'price'=>'€20,00',
                'url'=>'/media/BANG.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Barbie a cavallo', 'category'=>'Giocattoli',
                'price'=>'€32,90',
                'url'=>'/media/Cavallo-Barbie.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Bambola Anna - Frozen', 'category'=>'Giocattoli',
                'price'=>'€14,90',
                'url'=>'/media/Frozen_Anna.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Bambola Elsa - Frozen', 'category'=>'Giocattoli',
                'price'=>'€14,90',
                'url'=>'/media/Frozen_Elsa.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Action Figure Broly - Dragon Ball', 'category'=>'Giocattoli',
                'price'=>'€17,90',
                'url'=>'/media/Giocattolo-Broly.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Action Figure Goku - Dragon Ball', 'category'=>'Giocattoli',
                'price'=>'€17,90',
                'url'=>'/media/Giocattolo-Goku.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Action Figure Vegeta - Dragon Ball', 'category'=>'Giocattoli',
                'price'=>'€17,90',
                'url'=>'/media/Giocattolo-Vegeta.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Hogwarts Legacy - Gioco PS5', 'category'=>'Elettronica',
                'price'=>'€59,99',
                'url'=>'/media/Hogwarts-Legacy.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Lego Tulkun - Avatar', 'category'=>'Giochi da tavolo',
                'price'=>'€64,90',
                'url'=>'/media/Lego-Avatar-Tulkun.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Lego Dart Fener - Star Wars', 'category'=>'Giochi da tavolo',
                'price'=>'€48,90',
                'url'=>'/media/Lego-Dart-Fener.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Lego Dobby Elfo Domestico - Harry Potter', 'category'=>'Giochi da tavolo',
                'price'=>'€37,90',
                'url'=>'/media/Lego-Dobby.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Monopoly', 'category'=>'Giochi da tavolo',
                'price'=>'€24,90',
                'url'=>'/media/Monopoly.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Nintendo Switch Console', 'category'=>'Elettronica',
                'price'=>'€299,99',
                'url'=>'/media/Nintendo-Switch-Console.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Risiko', 'category'=>'Giochi da tavolo',
                'price'=>'€29,90',
                'url'=>'/media/Risiko.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Spiderman Miles Morales - Giochi PS5', 'category'=>'Elettronica',
                'price'=>'€79,99',
                'url'=>'/media/Spiderman-Miles-Morales.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Super Mario - Giochi Swicth', 'category'=>'Elettronica',
                'price'=>'€49,99',
                'url'=>'/media/Super-Mario.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
            [
                'name'=>'Zelda - Giochi Switch', 'category'=>'Elettronica',
                'price'=>'€59,99',
                'url'=>'/media/Zelda.jpg',
                'desc'=>"Some quick example text to build on the card title and make up the bulk of the card's content."
            ],
        ];
        foreach($prodotti as $prodotto){
            if ($prodotto['name']==$name) {
                return view('prodottiDettagli',['prodotto'=>$prodotto]);
            }
        }
    }

    public function getChiSiamo(){
        return view('chi-siamo');
    }

    public function getContattaci(){
        return view('contattaci');
    }

    public function postMail(Request $request){
        // dd($request->all());
        $name = $request['name'];
        $email = $request['email'];
        $body = $request['body'];
        $emailElf = "elf@babbo.com";

        $user = compact('name','email','body');
        // dd($user);

        Mail::to($email)->send(new Letterina($user));
        // dd("inviato con successo");

        Mail::to($emailElf)->send(new LetterinaRicevuta($user));

        return redirect(route('home'))->with('message','la tua letterina è stata ricevuta');
    }

    public function getDettagliToLettera($name){
        return redirect(route('contattaci'))->with('name', $name);
    }
}
