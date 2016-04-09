<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Praktika8</title>
    <style>
        body{
            background-color: azure;
        }
        div#main{
            height: 400px;
            width: 600px;
            background-color:
            <?php $bg_col="#fff"; // vaikimisi valge
                if (isset($_GET['backgroundColor']) && $_GET['backgroundColor']!="") {
                    $bg_col=htmlspecialchars($_GET['backgroundColor']);
                }
                echo $bg_col;
            ?>;
            color: <?php $txt_col="black"; // vaikimisi valge
                if (isset($_GET['textColor']) && $_GET['textColor']!="") {
                    $txt_col=htmlspecialchars($_GET['textColor']);
                }
                echo $txt_col;
            ?>;
            border-width: <?php $bor_width=2; // vaikimisi 2px
                if (isset($_GET['borderWidth']) && $_GET['borderWidth']!="") {
                    if($_GET['borderWidth'] > 0){
                    $bor_width=htmlspecialchars($_GET['borderWidth']);
                    }
                }
                echo $bor_width."px";
            ?>;
            border-color: <?php $bor_clr="black";
                if (isset($_GET['borderColor']) && $_GET['borderColor']!="") {
                    $bor_clr=htmlspecialchars($_GET['borderColor']);
                }
                echo $bor_clr;
            ?>;
            border-style: <?php $bor_type="solid";
                if (isset($_GET['borderType']) && $_GET['borderType']!="") {
                    $bor_type=htmlspecialchars($_GET['borderType']);
                }
                echo $bor_type;
            ?>;
        }
    </style>
</head>
<body>
    <div id="main">
        <?php
            echo $_GET["text"];
        ?>
    </div>
    <form method="get">
        <hr>
        <table>
            <tr>
                <td>Text:</td>
                <td><textarea name="text" cols="40" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Background color:</td>
                <td><input type="color" name="backgroundColor"></td>
            </tr>
            <tr>
                <td>Text color:</td>
                <td><input type="color" name="textColor"></td>
            </tr>
            <tr>
                <td>Border width (0-20px):</td>
                <td><input type="number" name="borderWidth"></td>
            </tr>
            <tr>
                <td>Border color:</td>
                <td><input type="color" name="borderColor"></td>
            </tr>
            <tr>
                <td>Border type:</td>
                <td>
                    <select name="borderType">
                        <option value="dotted">dotted</option>
                        <option value="dashed">dashed</option>
                        <option value="solid">solid</option>
                        <option value="double">double</option>
                        <option value="groove">groove</option>
                        <option value="ridge">ridge</option>
                        <option value="inset">inset</option>
                        <option value="outset">outset</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Send request"></td>
            </tr>
        </table>
        <hr>
    </form>
</body>
</html>