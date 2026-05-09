<?php
                    session_start();
                        
                        $id=$_GET['id'];
                        $st=$_GET['st'];
                        include ("code_part/connection.php");
                        if($st=='0')
                        {
                           $sql="UPDATE `tbl_feedback` SET `status` = '1' WHERE `tbl_feedback`.`id` = $id;"; 
                        }
                        else
                        {
                            $sql="UPDATE `tbl_feedback` SET `status` = '0' WHERE `tbl_feedback`.`id` = $id;";
                            
                           }
                           
                           $qry=mysqli_query($con,$sql);
        
                        if($qry)
                        {
                            echo '<script>window.location.href="feedback.php";</script>';
                        }
?>