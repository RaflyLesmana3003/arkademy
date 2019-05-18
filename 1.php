<?php

    // statis
        $user= new \stdClass();
        $school= new \stdClass();
        $skills= new \stdClass();

        //school
        $school->name = "smkn 4 malang";
        $school->address = "malang";

        //skills
        $skill = array(
            array("name"=>"coding", "score"=>70),
            array("name"=>"design", "score"=>80),
            array("name"=>"business", "score"=>85)
        );
        $skills->skill = $skill ;

        //user
        $user->name = "rafly lesmana";
        $user->address = "malang";
        $user->hobbies = "coding";
        $user->is_marries = FALSE;
        $user->school = $school;
        $user->skills = $skills;


        

        echo json_encode($user);
 

?>