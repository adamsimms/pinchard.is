<?php    

//require_once('vender/aws/S3.php');
//require 'vendor/aws/S3.php';
//$s3 = new S3('AKIAINXBPMZES7BVO7GA', 'EJ7GIrkLv6IU/jaa0V5uNoXQLdZhiB25nm84AlWH');
// 
//$bucket_contents = $s3->getBucket('shutter-island');
//foreach ($bucket_contents as $file){
//    if ($file['size']) {
//        $dt = new DateTime();
//        $dt ->setTimestamp($file['time']);
//            echo $dt->format('d') . "<br>";
//    }
//}


//$url = 'http://d3kq73uimqeic8.cloudfront.net/';
//$xml = simplexml_load_file($url) or die("Error: Cannot create object");
//$array = array();
//foreach($xml->children() as $content) {
//    if ($content->Key) {
//        $array[] = array(
//                    "filename"=>$content->Key,
//                    "timestamp"=>$content->LastModified,
//                    );
//        echo $content->LastModified . "<br>";
//    }
//}


//$json = file_get_contents('http://d3kq73uimqeic8.cloudfront.net/');
//$obj = json_encode($json);
//echo $obj;
        
/*
    
    $files = glob("photo/*.*");
    
    $array = array();
    $validYearArray = array();
    $validMonthArray = array();
    
    foreach ($files as $file) {

        //$exif = exif_read_data($file, 'IFD0');
        //echo $exif===false ? "No header data found.<br />\n" : "Image contains headers<br />\n";

        $exif = exif_read_data($file, 0, true);
        
        $filename = "";
        if (isset($exif['FILE']['FileName'])) {
            $filename = $exif['FILE']['FileName'];
        }
        
        $datetime = "";
        
        if (isset($exif['EXIF']['DateTimeOriginal'])) {
            $datetime = $exif['EXIF']['DateTimeOriginal'];
        } else if (isset($exif['EXIF']['DateTimeDigitized'])) {
            $datetime = $exif['EXIF']['DateTimeDigitized'];
        } else if (isset($exif['IFD0']['DateTime'])) {
            $datetime = $exif['IFD0']['DateTime'];
        } else if (isset($exif['FILE']['FileDateTime'])) {
            $datetime = date("Y:m:d H:i:s", $exif['FILE']['FileDateTime']);
        }
        
        
        $file_datetime= new DateTime($datetime);
        $file_year = $file_datetime->format("Y");
        $file_month = $file_datetime->format("m");
        
        if (!in_array($file_year, $validYearArray)) {
            $validYearArray[] = $file_year;
        }
        
        
        $curr_date = $_POST['date'];
        $splited_string = explode("-", $curr_date);
        $curr_year = $splited_string[1];
        $curr_month = $splited_string[0];
        
        
        $valastmon= $_POST['valastmon'];//boolean value check if only last month for the year should be returned
        if ($valastmon == "1") {
            if ($curr_year == $file_year) {
                $array[] = array(
                    "filename"=>$filename,
                    "datetime"=>$datetime,
                    );
            }
        } else  {
            if ($curr_year == $file_year && $curr_month == $file_month) {
            $array[] = array(
                "filename"=>$filename,
                "datetime"=>$datetime,
                );
            }
        }
         
        if ($curr_year == $file_year) {
            if (!in_array($file_month, $validMonthArray)) {
                $validMonthArray[] = $file_month;
            }
        }

//        foreach ($exif as $key => $section) {
//            foreach ($section as $name => $val) {
//                echo "$key.$name: $val<br />\n";
//            }
//        }        
    }
    
    usort($array, function($a, $b) {
        return $a['datetime'] > $b['datetime'];
    });
    usort($validMonthArray, function($a, $b) {
        return $a > $b;
    });
    
    
    if ($_POST['valastmon'] == "1") {
        $lastValidMonth = end($validMonthArray);
        foreach ($array as $i => $element) {
            $datetime = $element['datetime'];
            $file_datetime= new DateTime($datetime);
//            $file_year = $file_datetime->format("Y");
            $file_month = $file_datetime->format("m");
            if ($file_month != $lastValidMonth) {
                unset($array[$i]);
            }
        }
    }
    
    
    
    $returnArray = array("array"=>$array, "validYearArray"=>$validYearArray, "validMonthArray"=>$validMonthArray);
    echo json_encode($returnArray);
  */   
?>