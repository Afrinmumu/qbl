<?php

if(isset($_FILES['filefield'])){
$file=$_FILES['filefield'];
$upload_directory='uploads/';
$ext_str = "gif,jpg,jpeg,mp3,tiff,bmp,doc,docx,ppt,pptx,txt,pdf";
$allowed_extensions=explode(',',$ext_str);
$max_file_size = 10485760;
$ext = substr($file['name'], strrpos($file['name'], '.') + 1); 
if (!in_array($ext, $allowed_extensions) ) {
echo "only".$ext_str." files allowed to upload"; 

} 

if($file['size']>=$max_file_size){

echo "only the file less than ".$max_file_size."mb  allowed to upload";

}

//if(!move_uploaded_file($file['tmp_name'],$upload_directory.$file['name'])){

$path=md5(microtime()).'.'.$ext;

if(move_uploaded_file($file['tmp_name'],$upload_directory.$path)){

mysql_connect("localhost","root","");

mysql_select_db("qbl");

echo"Your File Successfully Uploaded";

mysql_query("INSERT INTO GRAVATOR VALUES ('$path')");

}

else{

echo "The file cant moved to target directory."; 
}

}



?>
<form action="" method="post" enctype="multipart/form-data">
<label>Upload File

<input id="filefield" type="file" name="filefield" />

</label>

<label>

<input id="Upload" type="submit" name="Upload" value="Upload" />


<input type="hidden" name="MAX_FILE_SIZE" value="100000" />

</label>
</form>
