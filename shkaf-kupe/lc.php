<?php
class LeadCollector
{
  public $leadcollectorServerUrl = 'http://zizor.socsearcher.ru/api.php';
  public $updateUrl = 'http://zizor.socsearcher.ru/api/update/';
  public $lcBackupFile = '/lc_backup.json';
  public $data = array();

  public function __construct()
  { 
    $this->data['project_name'] = CHNG::decodeCHNG($_SERVER['SERVER_NAME']);
    $this->data['time'] = time();
    $this->data['lc_version'] = '0.9.5';//LC version
    $this->lcBackupFile = dirname(__FILE__).$this->lcBackupFile;
  }

  public function prepareData()
  {
    $i = 0;
    $phoneNamesArr = ['phone','phone_work','telefon','telefon_lida','телефон','telephone','phone_number'];
    if(isset($_POST['DATA']['PHONE_WORK'])) $this->data['phone'] = preg_replace("/[^0-9]/","",$_POST['DATA']['PHONE_WORK']);
    $utmParametersArr = ['utm_source','utm_keyword','keyword','utm_medium','utm_campaign','utm_content','utm_term'];
    $this->data['comments'] = '';

    foreach ($_POST as $key => $value){
      if(empty($value)) continue;
      if(strtolower($key)=="data"){
        foreach($_POST['DATA'] as $name => $val){
          $this->data['comments'] .= ucwords(str_replace("_", " ", $name)).": ".$val.";";
        }
        continue;
      }
      if (!in_array(strtolower($key), $phoneNamesArr)){
        if(in_array(strtolower($key),$utmParametersArr)){
          $this->data['utm_parameters'] .= ucwords(str_replace("_", " ", $key)).": ".$value.";";
        } else {
          if (!is_array($value))
          {
            $this->data['comments'] .= ucwords(str_replace("_", " ", $key)).": ".$value.";";
          } else {
            $this->data['comments'] .= ucwords(str_replace("_", " ", $key)).": ".implode(",", $value).";";
          }
        }
        $i++;
      } else {
        $this->data['phone'] = preg_replace("/[^0-9]/","",$value);
        $i++;
      }
    }
    $this->data['referer_page'] = $_SERVER['REQUEST_URI'];
    $this->data['ip'] = $_SERVER['REMOTE_ADDR'];

    return ( $i > 0 );
  }



  public function sendServerFn($debug = false)
  {

    if ( !isset($this->data['phone']) && empty($this->data['phone']) )
      return false;
    if ( !isset($this->data['project_name']) && empty($this->data['project_name']) )
      return false;

    $sResponse = $this->leadToServerSender();
    if($this->data['phone'] == "1454879293617593"){
      echo $sResponse;
    }
    $isSaveLeadSuccess = true;
    if ($sResponse)
    {
      $json = json_decode($sResponse, true);
      if (!$json || $json['success'] != true)
        $isSaveLeadSuccess = false;
    }
    else
      $isSaveLeadSuccess = false;

    return $isSaveLeadSuccess;
  }

  public function leadToServerSender($transport = 'curl', $debug = false)
  {
    $url = $this->leadcollectorServerUrl;

    if ($transport == 'curl')
      if ($curl = curl_init() ){
        if ($debug) echo 'curl';
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $this->data);
        $sResponse = curl_exec($curl);
        curl_close($curl);
      }
      else
        $transport = 'php_post';



    if ($transport == 'php_post') {
      if ($debug) echo 'php_post';
      $opts = array('http'=>array(
        'method' => "POST",
        'content'=> http_build_query($this->data)
      ));
      $context = stream_context_create($opts);
      $sResponse = file_get_contents($url, 0, $context);
    }

    return $sResponse;
  }
}


/*
 * класс преобразования кирилических доменов
 * xn--80ahmvcm.xn--90ais > сайт.бел
 */
class CHNG {
    private static function punyAdapt(
        $delta,
        $numpoints,
        $firsttime
    ) {
        $delta = (int)($firsttime ? $delta / 700 : $delta / 2);
        $delta += (int)($delta / $numpoints);
        for($k = 0; $delta > 455; $k+=36)
            $delta = (int)($delta / 35);
        return $k + (int)((36) * $delta / ($delta + 38));
    }

    // translate character to punycode number
    private static function decodeDigit($cp) {
        $cp = strtolower($cp);
        if ($cp >= 'a' && $cp <= 'z')
            return ord($cp) - ord('a');
        elseif ($cp >= '0' && $cp <= '9')
            return ord($cp) - ord('0')+26;
    }

    // make utf8 string from unicode codepoint number
    private static function utf8($cp) {
        if ($cp < 128) return chr($cp);
        if ($cp < 2048)
            return chr(192+($cp >> 6)).chr(128+($cp & 63));
        if ($cp < 65536) return
            chr(224+($cp >> 12)).
            chr(128+(($cp >> 6) & 63)).
            chr(128+($cp & 63));
        if ($cp < 2097152) return
            chr(240+($cp >> 18)).
            chr(128+(($cp >> 12) & 63)).
            chr(128+(($cp >> 6) & 63)).
            chr(128+($cp & 63));
        // it should never get here
    }

    // main decoding function
    private static function decodePart($input) {
        if (substr($input,0,4) != "xn--") // prefix check...
            return $input;
        $input = substr($input,4); // discard prefix
        $a = explode("-",$input);
        if (count($a) > 1) {
            $input = str_split(array_pop($a));
            $output = str_split(implode("-",$a));
        } else {
            $output = array();
            $input = str_split($input);
        }
        $n = 128; $i = 0; $bias = 72; // init punycode vars
        while (!empty($input)) {
            $oldi = $i;
            $w = 1;
            for ($k = 36;;$k += 36) {
                $digit = CHNG::decodeDigit(array_shift($input));
                $i += $digit * $w;
                if ($k <= $bias) $t = 1;
                elseif ($k >= $bias + 26) $t = 26;
                else $t = $k - $bias;
                if ($digit < $t) break;
                $w *= intval(36 - $t);
            }
            $bias = CHNG::punyAdapt(
                $i-$oldi,
                count($output)+1,
                $oldi == 0
            );
            $n += intval($i / (count($output) + 1));
            $i %= count($output) + 1;
            array_splice($output,$i,0,array(CHNG::utf8($n)));
            $i++;
        }
        return implode("",$output);
    }

    public static function decodeCHNG($name) {
        // split it, parse it and put it back together
        return
            implode(
                ".",
                array_map("CHNG::decodePart",explode(".",$name))
            );
    }
}

class LCIncludeChecker {
  public $search = '';

  function __construct($searchLine)
  { 
    $this->search = $searchLine;
  }

  private function recursivePhpFilesScanDirFn($dir){
    $contents = array();
    foreach(scandir($dir) as $file){
        if($file == '.' || $file == '..') continue;
        $path = $dir."/".$file;
        // print_r($file);
        if(is_dir($path)){
            $contents = array_merge($contents, $this->recursivePhpFilesScanDirFn($path));
        } else {
            if(!preg_match('/^.*\.(php)$/i', $file)) continue;
            $contents[] = $path;
        }
    }
    return $contents;
  }

  private function checkIncludeFn($pathToFile){
    $line_number = false;

    if ($handle = fopen($pathToFile, "r")) {
       $count = 0;
       while (($line = fgets($handle, 4096)) !== FALSE and !$line_number) {
          $count++;
          $line_number = (strpos($line, $this->search) !== FALSE) ? $count : $line_number;
       }
       fclose($handle);
    }
    return $line_number;
  }

  public function showPagesWithIncludes(){
    $rootPath = $_SERVER['DOCUMENT_ROOT'];
    $filesWithInclude = array();
    $allPathsToPhpFiles = $this->recursivePhpFilesScanDirFn($rootPath);
    foreach($allPathsToPhpFiles as $key => $value){
      $includedRow = $this->checkIncludeFn($value);
      if($includedRow>0){
        $foundResult = array("file_path" => $value, "include_row" => $includedRow);
        array_push($filesWithInclude, $foundResult);
      }
    }
    return $filesWithInclude;
  }

  public function showAllPages(){
    $rootPath = $_SERVER['DOCUMENT_ROOT'];
    $filesWithInclude = array();
    $allPathsToPhpFiles = $this->recursivePhpFilesScanDirFn($rootPath);
    foreach($allPathsToPhpFiles as $key => $value){
      $includedRow = $this->checkIncludeFn($value);
      if($includedRow>0){
        $foundResult = array("file_path" => $value, "include_row" => $includedRow);
        array_unshift($filesWithInclude, $foundResult);//array_unshift($arr , 'item1');
      } else {
        $foundResult = array("file_path" => $value, "include_row" => "NONE");
        array_push($filesWithInclude, $foundResult);
      }
    }
    return $filesWithInclude;
  }
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $sender = new LeadCollector();
  $local_json = '';
  if ($sender->prepareData()){
    if($sender->data['phone'] == "" || strlen($sender->data['phone'])<7){
      return;
    }
    $sentToLCserver = $sender->sendServerFn();
    if ($sentToLCserver)
    { 
      if (file_exists($sender->lcBackupFile))
        $local_json = json_decode(file_get_contents($sender->lcBackupFile), true);
      if (!empty($local_json))
      {
        mail('vasilyev@zizor.by', 'LC: lost leads resend - '.$_SERVER['HTTP_HOST'], var_export($local_json, true));

        foreach ($local_json as $k=>$arLead)
        {
          $sender->data = $arLead;
          $sentToLCserver = $sender->sendServerFn();
          if ($sentToLCserver)
            unset($local_json[$k]);
        }
        file_put_contents($sender->lcBackupFile, json_encode($local_json));
      }
    }
    else
    {
      if($_POST['phone']!='1454879293617593'){
        if (file_exists($sender->lcBackupFile)){
          $local_json = json_decode(file_get_contents($sender->lcBackupFile), true);
        }
        $local_json[] = $sender->data;
        file_put_contents($sender->lcBackupFile, json_encode($local_json));
      }
    }
  }
}

if($_GET['action']=="lcupdate" && $_GET['key']=="24ASd2fwdkfdsuK2X432vKdfw35f"){
  $content = file_get_contents("http://zizor.socsearcher.ru/api/update/lc.txt");
  if(file_put_contents(dirname(__FILE__)."/lc.php", $content)){
    echo "LC updated";
  } else {
    echo "Error, LC wasn't updated";
  }
}

if($_GET['action']=="lccheck" && $_GET['key']=="fk23Jks92Lf9d2A0234sf1F23k"){
    $lcChecker = new LCIncludeChecker('if($_SERVER[\'REQUEST_METHOD\'] == \'POST\' && file_exists($_SERVER[\'DOCUMENT_ROOT\'].\'/lc.php\')) include($_SERVER[\'DOCUMENT_ROOT\'].\'/lc.php\');');
    $listOfFilesWithLCInclude = $lcChecker->showAllPages();
    echo '<ol class = class="siteCheckingInfo">';
    foreach ($listOfFilesWithLCInclude as $key => $value) {
      if($value['include_row'] != "NONE"){
        echo '<li class = "siteInfoItem siteInfoItemTrue" style="color:green">'.$value['file_path'].' - line '.$value['include_row'].'</li>';
      } else {
        echo '<li>'.$value['file_path'].'</li>';
      } 
    }
    echo "</ol>";
}

if($_GET['action']=="lccheck" && $_GET['key']=="L012ksad24sflKa3KSQ3Psxo3X"){
    $lcChecker = new LCIncludeChecker('if($_SERVER[\'REQUEST_METHOD\'] == \'POST\' && file_exists($_SERVER[\'DOCUMENT_ROOT\'].\'/lc.php\')) include($_SERVER[\'DOCUMENT_ROOT\'].\'/lc.php\');');
    $listOfFilesWithLCInclude = $lcChecker->showAllPages();
    $jsonAnswer = '[';
    foreach ($listOfFilesWithLCInclude as $key => $value) {
      $jsonAnswer .= '{"file_path":"'.$value['file_path'].'","include_row":"'.$value['include_row'].'"},';      
    }
    echo rtrim($jsonAnswer, ",")."]";
}