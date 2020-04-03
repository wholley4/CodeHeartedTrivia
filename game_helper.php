<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./CHTglike.css" title="style" />
        <title>Selection Screen</title>
    </head>
    <body>
    <form action="./game_main.php" method="get" id="helper_form">
        <h1 style="margin-bottom:10px;margin-top:0px;padding:0px;"> Pick your CS Helper </h1>
        <div>
            <table class="helper">
                <tr style="height:50px;">
                    <td rowspan="2"> <img src="./project2/kid1.png" class="helper_picture">
                    </td>
                    <td> 
                        <h2 style="margin-bottom: 0px;">Taylor</h2>
                        <i>User Interface</i>
                        <br>
                        <input type="radio" id="helper1" name="helper" value="helper1">
                        <label for="helper1">Select</label>
                    </td>
                </tr>
            </table>
            <table class="helper">
                <tr style="height:50px;">
                    <td rowspan="2"> <img src="./project2/kid2.png" class="helper_picture">
                    </td>
                    <td> 
                        <h2 style="margin-bottom: 0px;">Prime</h2>
                        <i>Hardware</i>
                        <br>
                        <input type="radio" id="helper2" name="helper" value="helper2">
                        <label for="helper2">Select</label>
                    </td>
                </tr>
            </table>
            <table class="helper">
                <tr style="height:50px;">
                    <td rowspan="2"> <img src="./project2/kid3.png" class="helper_picture">
                    </td>
                    <td> 
                        <h2 style="margin-bottom: 0px;">Ben</h2>
                        <i>Requirements</i>
                        <br>
                        <input type="radio" id="helper3" name="helper" value="helper3">
                        <label for="helper3">Select</label>
                    </td>
                </tr>
            </table>
        </div>
        <div style="clear:left;">
            <table class="helper">
                <tr style="height:50px;">
                    <td rowspan="2"> <img src="./project2/kid4.png" class="helper_picture">
                    </td>
                    <td> 
                        <h2 style="margin-bottom: 0px;">Roman</h2>
                        <i>Security</i>
                        <br>
                        <input type="radio" id="helper4" name="helper" value="helper4">
                        <label for="helper4">Select</label>
                    </td>
                </tr>
            </table>
            <table class="helper">
                <tr style="height:50px;">
                    <td rowspan="2"> <img src="./project2/kid5.png" class="helper_picture">
                    </td>
                    <td> 
                        <h2 style="margin-bottom: 0px;">Sarah</h2>
                        <i>Logic</i>
                        <br>
                        <input type="radio" id="helper5" name="helper" value="helper5">
                        <label for="helper5">Select</label>
                    </td>
                </tr>
            </table>
            <table class="helper">
                <tr style="height:50px;">
                    <td rowspan="2"> <img src="./project2/kid6.png" class="helper_picture">
                    </td>
                    <td> 
                        <h2 style="margin-bottom: 0px;">Sruti</h2>
                        <i>Data Structures</i>
                        <br>
                        <input type="radio" id="helper6" name="helper" value="helper6">
                        <label for="helper6">Select</label>
                    </td>
                </tr>
            </table>
        </div>
        <input type="hidden" name="state" value="0000000000">
        <input type="hidden" name="level" value="0">
        <input type="hidden" name="hint" value="1">
    </form>
    <br>
    <div>
        <button type="submit" form="helper_form" value="Submit" class="submit">Submit</button>
    </div>
    </body>
</html>