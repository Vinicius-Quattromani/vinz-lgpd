<?php        
namespace Vinz\Lgpd\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class PoliticaPrivacidade extends Model
{
    protected $table = "politica_privacidade";

    public static function getAtivos(){
        return self::where("ativo", 1)->get();
    }
}
