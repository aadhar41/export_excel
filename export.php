<?php
    include('database.php');
    $sql = "SELECT * FROM students ORDER BY name ASC";
    $res = mysqli_query($conn, $sql);
    $html = '<table><tr><td>Name</td><td>City</td><td>Email</td></tr>';
    while ($row = mysqli_fetch_assoc($res)) {
        $html .= '<tr><td>'.$row['name'].'</td><td>'.$row['city'].'</td><td>'.$row['email'].'</td></tr>';
    }
    $html .= '</table>';
    header('Content-Type:application/xls');
    header('Content-Disposition:attachment;filename=report.xls');
    echo $html;
?>