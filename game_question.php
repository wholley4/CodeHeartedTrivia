<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./CHTglike.css" title="style" />
        <title>Game Question</title>
    </head>
    <body>
        <h1 style="margin-bottom:10px;margin-top:0px;padding:10px"> <?php echo $_GET['category']; ?> </h1>
        <h2> 
            <?php 
                $questions = array("1","If it's monday, I will go to school. I went to school. What can you assume?","3","4","5","6","7","8","9","10");
                $answer = array("1","Nothing","3","4","5","6","7","8","9","10");
                echo $questions[$_GET['num']];
            ?> 
        </h2>
        <div class="container" style="text-align: center;">
            <div> Answer: <input id="response"> </input> </div>
            <div> <button>Hint</button> <button>Submit</button> </div>
        </div>
        
    </body>
</html>