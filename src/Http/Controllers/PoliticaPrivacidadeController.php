<?php
namespace Vinz\Lgpd\Http\Controllers;

use App\Http\Controllers\Controller;
use Vinz\Lgpd\Models\PoliticaPrivacidade;

class PoliticaPrivacidadeController extends Controller
{
    public function politica_privacidade()
    {
        $itens = PoliticaPrivacidade::getAtivos();
        return view("PoliticaPrivacidade.politicaPrivacidade", ["itens" => $itens]);
    }
}