<?
namespace Library\Models;

use Library\Database;
use Library\Models\User;

class FullUser extends User{
    protected $groups=[];

    function __constructor(){
        parent::__construct();
    }
    function getUserGroups()
    {
        return $this->groups;
    }
        function getUserGroupsDB(){
        $table=Database::$options['tables']['Users_In_Communities'];
        $query="SELECT `gid_community` as groups FROM $table as tab WHERE tab.uid_user= $this->uid";
        $execute= Database::$connect->prepare($query);
        $execute->execute();
        $answer= $execute->fetchAll();
        foreach($answer as $group){
           array_push($this->groups,$group);
        }
    }
}