<?php


// Write a PHP function to get the characters after the last '/' in an url. Go to the editor
$url = 'http://www.example.com/5478631';
echo substr($url, strrpos($url, '/' )+1);

echo '</br>';


//Write PHP function that takes an HTML tag as string and returns its ID value if existed or false if it has no ID
    function getId(){
        $tag = "<div id='container'></div> ";
        $findId = strpos($tag , "id");
        if($findId > 0 )
        {
            $id = explode("'", $tag );
            echo $id[1];
        }else{

            echo "false";
        }
    }
    getId();
?>

