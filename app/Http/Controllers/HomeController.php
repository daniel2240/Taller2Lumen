<?php

namespace App\Http\Controllers;

class HomeController extends Controller

{
    public static $id = array("1001","1002","1003","1004","1005","1006","1007","1008","1009","1010"
    );
    public static $name = array("Federico","Maicol","Yasuri","Yamile","Ivan","Julian","Camilo","Ferley",
    "Cristian","Felipe"
    );
    public static $size = array("1,56","1,60","1,58","1,70","1,52","1,67","1,73","1,65","1,69","1,70"
    );
    public static $spell = array("Robar sin usar las manos","Desaparece las cosas de quien lo ve",
    "Si te metes con ella, te saca la gilette","Te marca una Y que no es de yeye, sino de Yasuri Yamile",
    "Es mago, desaparece los que están en su contra","Experto en tirar piropos de camionero","Desaparece las candelas",
    "Negociante, vende todas las cosas del hogar sin importar de quien sean","Expero en olfatear",
    "Cultiva sus propias plantas"
    );
    public static $image = array("https://storage.googleapis.com/taller2/neas/MicrosoftTeams-image%20(18).png",
    "https://storage.googleapis.com/taller2/neas/Gamin3_400x400.jpeg",
    "https://storage.googleapis.com/taller2/neas/descarga%20(1).jpg",
    "https://storage.googleapis.com/taller2/neas/EgxW2P0XsAEbNRF.jpg",
    "https://storage.googleapis.com/taller2/neas/duque.png",
    "https://storage.googleapis.com/taller2/neas/descarga.jpg",
    "https://storage.googleapis.com/taller2/neas/descarga%20(2).jpg",
    "https://storage.googleapis.com/taller2/neas/hqdefault.jpg",
    "https://storage.googleapis.com/taller2/neas/images.jpg",
    "https://storage.googleapis.com/taller2/neas/mqdefault.jpg"
    );
    public static $quote = array("Plata es plata","¿Que me mira? ¿Nunca ha visto un angel o que?",
    "Si te hace feliz, aumenta la dosis","No llore papi, acuerdese que somos neas",
    "De que me hablas viejo","Puedo ser tu bro, tu mor y tu cardio",
    "Pero usted por que cree eso de mi mami, si yo soy un man serio","Yo le doy lengua a lo mango",
    "¿Se le perdió uno igualito?","Todo bien, todo bonito, sólo nacional a morir. Fuiciosooos"
    );

public function index()

{
    $totalNeas = (count(HomeController::$id));
    $randomNumber = (rand(0,($totalNeas-1)));
    $randomNeaId = HomeController::$id[$randomNumber];
    $randomNeaName = HomeController::$name[$randomNumber];
    $randomNeaSpell = HomeController::$spell[$randomNumber];
    return response()->json(['Id' => $randomNeaId,'Nombre ' => $randomNeaName,'Habilidad ' => $randomNeaSpell, 'server_ip' => gethostbyname(gethostname())]);
}

public function images()
{
    $totalNeas = (count(HomeController::$id));
    $randomNumber = (rand(0,($totalNeas-1)));
    $randomNeaImage = HomeController::$image[$randomNumber];
    $randomQuote = HomeController::$quote[$randomNumber];
    return view('home.images')->with("randomNeaImage", $randomNeaImage)->with( "randomQuote", $randomQuote)->with("serverIp", gethostbyname(gethostname()));
    #return response("\"<img src=\"".$randomNeaImage."\"alt=\"\"><br>.$randomQuote.server_ip=>".gethostbyname(gethostname()));
}
}