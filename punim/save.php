<?php
if (isset($_POST['message'])) {
    $msg = $_POST['message'];
    $time = date("Y-m-d H:i:s");
    $data = "[$time] ปูนิ่มบอกว่า: " . $msg . PHP_EOL;
    
    // บันทึกต่อท้ายไฟล์ชื่อ log.txt (ถ้าไม่มีไฟล์จะสร้างให้เอง)
    file_put_contents('log.txt', $data, FILE_APPEND);
    
    echo "Saved successfully";
}
?>