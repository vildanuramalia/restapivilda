<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class NewsController extends Controller {
    public function getData(){
        $client = new Client();
        $request = $client->get('https://newsapi.org/v2/top-headlines?country=id&apiKey=66aed02c6a8e4766a62c1dfd5bfa8da9');
        $response = $request->getBody();
        $result = json_decode($response);
        return view('home',['artikel'=>$result->articles]);
    }
    public function searchData(Request $request){
        $client = new Client();
        $query = $request->keyword;
        $req = $client->get('https://newsapi.org/v2/top-headlines?country=id&apiKey=66aed02c6a8e4766a62c1dfd5bfa8da9&q='.$query);
        $response = $req->getBody();
        $result = json_decode($response);
        return view('home',['artikel'=>$result->articles]);
       }
}
