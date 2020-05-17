<?php
class PageController
{
    public function actionDoc(){
        require_once(ROOT."/components/GetGitHub.php");
        $menu = new GetGitHub("smile1601/SecurellaVM", ROOT."/hash/hash.json");
        require_once(ROOT."/components/Parsedown.php");
        //Функция кодирования русских символов и пробелов
        require_once(ROOT."/components/url_encode.php");

        if(isset($_POST["url"])){  
            $url = htmlspecialchars($_POST["url"]);
            $url = my_url_encode($url);
            $ch = curl_init();
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            $page = curl_exec($ch);
            curl_close($ch);
            $info = new SplFileInfo($url);
            if($info->getExtension() == "md"){
                $parsedown = new Parsedown();
                echo $parsedown->parse($page);
            }else{
                echo "<pre>".$page."</pre>";
            }
        }else{
            require_once(ROOT."/views/doc.php");
        }
    }
}