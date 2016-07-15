<?PHP
define('ROOT', rtrim(str_replace('\\', '/', dirname(__FILE__)), '/'). '/');


$date = date(d.m.y); 
$name_arch = ROOT. 'backup.zip';
$files_dir = rtrim(ROOT, '/');
$files_to_arch = array();

require_once(ROOT. 'wdtzip.php');

for($d = @opendir($files_dir); $file = @readdir($d);)
{      
    if($file!='.' && $file!='..')
    {
        //$files_to_arch[]= $files_dir. '/'. $file;
        $files_to_arch[]= $file;
    }
}

chdir($files_dir);

$archive = new PclZip($name_arch);
$v_list = $archive->create(implode(',', $files_to_arch));

//print_r($files_to_arch);
//$v_list=$archive->create(
//    implode(',', $files_to_arch),
//    PCLZIP_OPT_REMOVE_PATH,
//    $files_dir
//);

if($v_list == 0)
{
   die("Error : ".$archive->errorInfo(true));
}
else
{
   echo 'OK';
}
?>
