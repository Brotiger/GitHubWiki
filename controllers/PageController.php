<?php
class PageController
{
    private $search_arr = [];
    private function force($arr){
        foreach($arr as $key => $value){
            if(is_string($value)){
                $this->search_arr[$key] = [$value][0];
            }else{
                $this->force($value);
            }
        }
    }
    public function actionDoc(){
        require_once(ROOT."/components/GetGitHub.php");
        $menu = new GetGitHub(REPO, ROOT."/hash/hash.json");
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
        }else if(isset($_POST["search"])){
            $search = htmlspecialchars($_POST['search']);
            $fined_files = "";
            $search = trim($search);
            if($search){
                $this->force($menu->GetArr());
                foreach($this->search_arr as $key => $value){
                    $url = "https://raw.githubusercontent.com/".REPO."/master/".my_url_encode($value);
                    $ch = curl_init();
                    curl_setopt($ch,CURLOPT_URL,$url);
                    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
                    $page = curl_exec($ch);
                    curl_close($ch);
                    $search_pos = mb_strpos(mb_strtolower($page), mb_strtolower($search));
                    if($search_pos !== false){
                        $short_text = mb_substr($page, $search_pos, 200);
                        $short_text .= "...";
                        $file_path = str_replace($key, "", $value);
                        $file_info = new SplFileInfo($key);
                        $key = str_replace(".".$file_info->getExtension(),"", $file_info->getFilename());
                        $fined_files .= "<div class='alert alert-primary' id='search_file'>".$file_path."<a class='file' href='https://raw.githubusercontent.com/".REPO."/master/".$value."'>".$key."</a><p>".$short_text."</p></div>";
                    }
                }
                if($fined_files){
                    echo "<h2 class='pb-3'>Результат поиска</h2>".$fined_files;
                }else{
                    echo "<h2 class='pb-3'>Результат поиска</h2><div class='alert alert-danger'>По вашему запросу не найдено ни одного документа. Проверьте, что все слова написаны без ошибок.</div>";
                }
            }
        }else{
            require_once(ROOT."/views/doc.php");
        }
    }
}