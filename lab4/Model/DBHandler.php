<?php
use Illuminate\Database\Capsule\Manager as DB;
class DBHandler{
    
    
    static public function connect(){
        $db = new DB();
        $db->addConnection([
        "driver" => _driver_,
        "host" => _host_,
        "database" => _database_,
        "username" => _username_,
        "password" => _password_
    ]);
    $db->setAsGlobal();
    $db->bootEloquent();
    }
    static public function get_data($start = 0){
        $all_requrds = DB::table("items")->skip($start)->take(_Pager_size_)->get();
        return $all_requrds;
    }
    //public function disconnect();   
    static public function get_record_by_id($id){
        $searched_glasses = Capsule::table('items')->find($id);
    }
    
    
}