<?php
$fileupload = $_REQUEST['fileupload']; //�Ѻ������ҡ�����	
//$fileupload2 = $_REQUEST['fileupload2']; //�Ѻ������ҡ�����	

//�ѧ�����ѹ���
//    date_default_timezone_set('Asia/Bangkok');
//	$date = date("Ymd");	
//�ѧ������������Ţ
//    $numrand = (mt_rand());
//�������
$upload=$_FILES['fileupload'];
if($upload <> '') {   //not select file
//��������� upload file ���� 
$path="fileupload/";  

//��Ҫ����������͡������������ʡ��
 $type = strrchr($_FILES['fileupload']['name'],".");

//�ó��ա�������������駪����������������������˹�Ҫ���������
if ($type <> "")
{
	$newname = $filename.$type;
}
else
{
//�ó�����ա��������� ������繵����ҧ
		$newname = "";
}

//��駪����������������������˹�Ҫ���������
//	$newname = $filename.$type;


//$newname = $date.$numrand.$type;
$path_copy=$path.$newname;
$path_link="fileuploads/".$newname;

//�Ѵ�͡�����纷��������������
$result = move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	
	}
	// javascript �ʴ���� upload file
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Upload File Succesfuly  $newname');";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to upload again');";
	echo "</script>";
}
?>