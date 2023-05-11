<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Weekly Collections</title>
    <?php include'header.php';?>
    <link rel="stylesheet" href="weekly_style.css">
    </head>
<body>
    <?php 
    include "nav_rajiya.php";
    include "admin/connection.php";
    ?>
    <div class='container mt-5'>
        <span class="title_d">Weekly Collection Details</span>
        <div id="section">
        <?php 
     $query=mysqli_query($db,"SELECT * FROM weekly_collections");       
    if (mysqli_num_rows($query)>0) {       
        while ($row=mysqli_fetch_assoc($query)) {
            echo '<div class="week">
            <div class="top"><b><span class="date">'.$row["date"].'</span></b><strong><span class="number">Weekly Collection NO: '.$row["collection_no"].'</span></strong></div>
            <hr class="tophr">
            <div class="middle">
                <div class="puc" >
                <span class="puc_collect">PUC Amount :</span>
                <div class="puc_amount">
                    <div class="puc1"><b>PUC-1 : ₹ </b><span class="puc1_amount">'.$row["p1"].'</span>
                    </span></div>
                    <div class="puc2"><b>PUC-2 : ₹ </b><span class="puc2_amount">'.$row["p2"].'</span>
                    </span></div>
                    <div class="puc_total"><b>PUC - Total : ₹ </b><span class="puc_total_amount">'.$row["p1"]+$row["p2"].'</span>
                    </span></div>
                </div>
                </div>
                <div class="eng">
                <span class="eng_collect">Engineering Amount :</span>
                <div class="eng_amount">
                <div class="e1"><b>E-1 : ₹ </b><span class="e1_amount">'.$row["e1"].'</span>
                    </span></div>
                    <div class="e2"><b>E-2 : ₹ </b><span class="e2_amount">'.$row["e2"].'</span>
                    </span></div>
                    <div class="e3"><b>E-3 : ₹ </b><span class="e3_amount">'.$row["e3"].'</span>
                    </span></div>
                    <div class="e4"><b>E-4 : ₹ </b><span class="e4_amount">'.$row["e4"].'</span>
                    </span></div>
                    <div class="eng_total"><b>ENG - Total : ₹ </b><span class="eng_total_amount">'.$row["e1"]+$row["e2"]+$row["e3"]+$row["e4"].'</span>
                    </span></div>

                </div>
                </div>
            </div>
            <div class="bottom">
                <div class="grand"><b>Grand Total </b> (PUC + ENG)<b> : ₹</b><span class="grand_total">'.$row["p1"]+$row["p2"]+$row["e1"]+$row["e2"]+$row["e3"]+$row["e4"].'</span></div>
            </div>
        </div>';
            
        }
    }
    ?>












                
        </div>
    </div>
</body>
</html>