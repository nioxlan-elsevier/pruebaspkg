<?php
namespace NioxlanElsevier\Pruebaspkg;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __invoke()
    {
        return "Hola mundo";
    }
}