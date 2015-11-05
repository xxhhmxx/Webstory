<?php  
        session_start();  
        ob_start();  
?>  
<head>  
    <meta http-equiv="content-type" content="text/html charset=utf-8" />  
</head>  
<?php  
        $id_sp = $_GET['id_sp'];  
        if($id_sp != "") //  Nếu có ID truyền vào  
        {  
            // $conn=mysql_connect("flower","root","") or die("can't connect your database");  
                // mysql_select_db("sanpham",$conn);  
				require 'opendb.php';

                // Kiểm tra xem id này có trong CSDL hay k?  
                $q = mysql_query("SELECT codep FROM product WHERE codep in ('$id_sp')");  
                $num_q = mysql_num_rows($q); 
				require 'closedb.php';
 
                // Nếu tồn tại  
                if($num_q == 1)  
                {  
                        //session_register("select");  
                        //  nếu id này có trong giỏ hàng rồi  
                        if(isset($_SESSION['select'][$id_sp]))  
                        {  
                                // Tăng số lượng nó lên  
                                $_SESSION['select'][$id_sp] ++;  
                        }  
                        else // Chưa có trong giỏ hàng (mới chọn)  
                        {  
                                $_SESSION['select'][$id_sp] = 1; // Số lượng mặc định là 1  
                        }  
                        // Chuyển tức khắc qua trang giỏ hàng  
                        header("location: showcart.php");  
                }  
                else  
                {  
                        echo "<p align='center' style='font-size:18;color:red'>Không tồn tại sản phẩm này!</p>";  
                        header("refresh:3; showcart.php");  
                }  
        }  
        else // Nếu không có id truyền vào  
        {  
                echo "<p align='center' style='font-size:18;color:red'>Access Denny!</p>";  
        }  
  
?>