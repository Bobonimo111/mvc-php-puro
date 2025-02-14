<?
namespace app\config;

class App{
    public function __construct() {
        $http_path = $_SERVER["REQUEST_URI"];
        $http_method = $_SERVER["REQUEST_METHOD"];
    
        echo $http_method;
    }
}