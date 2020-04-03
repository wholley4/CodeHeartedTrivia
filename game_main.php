<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./CHTglike.css" title="style" />
        <title>Main Board</title>
    </head>
    <body>
        <div class="container">
            <div style="width:10%; float: left; background-color:palevioletred; height: 100vh" id="tower">
                <h3 class="center"> Prize Tower </h3>
                <?php 
                    $level = $_GET['level'];
                    $value = array("$50000","$25000","$10000","$7500","$5000","$2500","$1000","$500","$250","$100");
                    $sum = 0;
                    for($x=0; $x < count($value); $x++){
                        $sum = $level + $x +1;
                        if($sum<count($value)){
                            echo "<div class=\"prize\">".$value[$x]."</div>";
                        }
                        else if($sum==count($value)){
                            echo "<div class=\"prize_current\">".$value[$x]."</div>";
                        }
                        else{
                            echo "<div class=\"prize_past\">".$value[$x]."</div>";
                        }
                    }
                ?>
            </div>
            <div style="width:90%; float: left; height: 100vh">
                <div> 
                    Hint image active
                    <a class="logout" href="./CodeHeartedTriviahomepage.html"> End Game &nbsp;</a> 
                </div>
                <h1 style="margin-bottom:0px;margin-top:0px; padding: 0px"> Game Board </h1>
                <h2 style="margin-bottom:5vh;margin-top:0px;"> Select a category. </h2>
                <div class="game_table"> 
                    <?php
                        $state = $_GET['state'];
                        $arr = str_split($state);
                        $cats = $value = array("Freshman Loops","Freshman Logic","Sophomore Data Structure","Sophomore Java Classes","Junior Big O","Junior Algorithm","Senior Induction","Senior UNIX","Graduate S.E. Processes","Graduate PLC");
                        for($x=0; $x < count($value); $x++){
                            if($arr[$x]==0){
                                echo "<div class=\"unanswered\"><a href=\"./game_question.php?state=".strval($state)."&level=".$_GET['level']."&hint=".$_GET['hint']."&helper=".$_GET['helper']."&num=".$x."&category=".$cats[$x]."\">".$cats[$x]."</a></div>";
                            }
                            else{
                                echo "<div class=\"answered\">".$cats[$x]."</div>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>