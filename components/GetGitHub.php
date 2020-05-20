<?php
class GetGitHub
{
    private $file_arr = [];
    private $menu = "<ul class='px-3'>";
    private $raw_url = "https://raw.githubusercontent.com/";
    private $error = false;
    private $time_hash = 24;
    private $error_mess = 'Внутренняя ошибка. Не удалось соединиться с GitHub, информация уже передана админестратору';
    public function __construct($user_repo, $hash_url){
        $this->raw_url .= $user_repo."/master/";
        $hash = file_get_contents($hash_url);
        $hash = json_decode($hash, true);
        if($hash && ($hash["time_stamp"] + ($this->time_hash * 60 * 60)) >= time()){
            $this->menu = $hash["menu"];
            $this->file_arr = $hash["file_arr"];
        }else{
            $this->CreateMenu("https://api.github.com/repos/".$user_repo."/contents/");
            $new_hash = [
              "time_stamp" => time(),
              "file_arr" => $this->file_arr,
              "menu" => $this->menu
            ];
            $to_write = json_encode($new_hash);
            $fp = fopen($hash_url, 'w');
            fwrite($fp, $to_write);
            fclose($fp);
        }
        $this->menu .= "</ul>";
    }
    private function CreateMenu($url){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0');
        $content = curl_exec($ch);
        curl_close($ch);
        $content = json_decode($content, true);
        
        if(!empty($content["message"])){
            $this->error = true;
        }else{
            $this->error = false;
            $i = 0;
            foreach($content as $file){//цикл перебора файлов
                $info = new SplFileInfo($file["name"]);
                $new_path_arr = explode("/", $file["path"]);
                $new_path_string = "";
                 foreach($new_path_arr as $key => $value){
                     $new_path_string .= "[". $i ."]['". $value ."']";
                 }
                if($info->getExtension()){
                    $new_path_string = ('$this->file_arr'.$new_path_string."='".$file["path"]."';");
                    eval($new_path_string);
                    $name = str_replace(".".$info->getExtension(),"", $info->getFilename());
                    $this->menu .= "<li><i class='far fa-file'></i><a class='file' href='". $this->raw_url.$file["path"]."'>".$name."</a></li>";
                    $i++;
                }else{
                    $this->menu .= "<li><i class='far fa-folder'></i><span>".$file["name"]."</span><ul>";
                    $this->CreateMenu($file["_links"]["self"]);
                }
                
            }
            $this->menu .= "</ul></li>";
        }

    }
    public function ShowArr(){
       echo "<pre>";
       var_dump($this->file_arr);
       echo "</pre>"; 
    }
    public function ShowMenu(){
        echo $this->menu;
        if($this->error){
            echo "<script>alert('".$this->error_mess."')</script>";
            mail("dimka@bdima.ru", "Возникла ошибка на сайте wiki.theool.net", "По каким то причинам серверу был заблокирован доступ к GitHub API, время блокировки: ".date(DATE_RFC822));
        }
    }
    public function GetArr(){
        return $this->file_arr;
    }
}

?>
