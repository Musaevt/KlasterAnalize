<?php
namespace Analize\Controller;

use Library\Application;
use Library\AbstractController;
use Library\Models\FullUser;
use Library\Models\User;
use Library\Database;
use Analize\Models\Klustering;

class Controller extends AbstractController
{
    public function IndexAction()
    {
        $query="SELECT `uid` FROM ".Database::$options['tables']['User'];
        $execute= Database::$connect->prepare($query);
        $execute->execute();
        $answer= $execute->fetchAll();

        //print_r($answer);

        $data=[];
        $data[0]=[];
        $data[1]=[];
        foreach($answer as $uid) {
            $user = new FullUser();
            $user->setData($uid);
            $user->getUserGroupsDB();
            array_push($data[0],$uid);
            array_push($data[1],$user->getUserGroups());

            }

       $kluster=new Klustering();
        $kluster->start($data);



    }


}
