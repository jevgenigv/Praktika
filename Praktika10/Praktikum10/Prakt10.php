<?php
function sessionStart()
{
    session_start();
}

function sessionStop()
{
    $_SESSION = array();
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 42000, '/');
    }
    session_destroy();
}

sessionStart();
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Praktika8</title>
        <style>
            body {
                background-color: azure;
            }

            div#main {
                height: 400px;
                width: 600px;
                background-color: <?php $bg_col="#fff"; // vaikimisi valge
                if (isset($_GET['backgroundColor']) && $_GET['backgroundColor']!="") {
                    $bg_col=htmlspecialchars($_GET['backgroundColor']);
                }
                $_SESSION['backgroundColor']=$bg_col;
                echo $bg_col;
            ?>;
                color: <?php $txt_col="black"; // vaikimisi valge
                if (isset($_GET['textColor']) && $_GET['textColor']!="") {
                    $txt_col=htmlspecialchars($_GET['textColor']);
                }
               $_SESSION['textColor']=$txt_col;

                echo $txt_col;
            ?>;
                border-width: <?php $bor_width=2; // vaikimisi 2px
                if (isset($_GET['borderWidth']) && $_GET['borderWidth']!="") {
                    if($_GET['borderWidth'] > 0){
                    $bor_width=htmlspecialchars($_GET['borderWidth']);
                    }
                    $_SESSION['borderWidth']=$bor_width;
                }
                echo $bor_width."px";
            ?>;
                border-color: <?php $bor_clr="black";
                if (isset($_GET['borderColor']) && $_GET['borderColor']!="") {
                    $bor_clr=htmlspecialchars($_GET['borderColor']);
                }
                $_SESSION['borderColor']=$bor_clr;
                echo $bor_clr;
            ?>;
                border-style: <?php $bor_type="solid";
                if (isset($_GET['borderType']) && $_GET['borderType']!="") {
                    $bor_type=htmlspecialchars($_GET['borderType']);
                }
                $_SESSION['borderType']=$bor_type;
                echo $bor_type;

            ?>;
            }
        </style>
    </head>
    <body>
    <div id="main">
        <?php
        $_SESSION['text']=$_GET['text'];
        echo $_GET["text"];
        ?>
    </div>
    <form method="get">
        <hr>
        <table>
            <tr>
                <td>Text:</td>
                <td><textarea name="text" cols="40" rows="5"><?php echo $_SESSION['text'];?></textarea></td>
            </tr>
            <tr>
                <td>Background color:</td>
                <td><input type="color" name="backgroundColor" value="<?php echo $_SESSION['backgroundColor'] ?>"></td>
            </tr>
            <tr>
                <td>Text color:</td>
                <td><input type="color" name="textColor" value="<?php echo $_SESSION['textColor'] ?>"></td>
            </tr>
            <tr>
                <td>Border width (0-20px):</td>
                <td><input type="number" name="borderWidth" value="<?php echo $_SESSION['borderWidth'] ?>"></td>
            </tr>
            <tr>
                <td>Border color:</td>
                <td><input type="color" name="borderColor" value="<?php echo $_SESSION['borderColor'] ?>"></td>
            </tr>
            <tr>
                <td>Border type:</td>
                <td>
                    <select name="borderType">
                        <?php
                        switch ($_SESSION['borderType']):
                            case "dotted":
                                ?>
                                <option value="dotted" selected>dotted</option>
                                <option value="dashed">dashed</option>
                                <option value="solid">solid</option>
                                <option value="double">double</option>
                                <option value="groove">groove</option>
                                <option value="ridge">ridge</option>
                                <option value="inset">inset</option>
                                <option value="outset">outset</option>
                                <?php
                                break;
                            case "dashed":
                                ?>
                                <option value="dotted">dotted</option>
                                <option value="dashed" selected>dashed</option>
                                <option value="solid">solid</option>
                                <option value="double">double</option>
                                <option value="groove">groove</option>
                                <option value="ridge">ridge</option>
                                <option value="inset">inset</option>
                                <option value="outset">outset</option>
                                <?php
                                break;
                            case "solid":
                                ?>
                                <option value="dotted">dotted</option>
                                <option value="dashed">dashed</option>
                                <option value="solid" selected>solid</option>
                                <option value="double">double</option>
                                <option value="groove">groove</option>
                                <option value="ridge">ridge</option>
                                <option value="inset">inset</option>
                                <option value="outset">outset</option>
                                <?php
                                break;
                            case "double": ?>
                                <option value="dotted">dotted</option>
                                <option value="dashed">dashed</option>
                                <option value="solid">solid</option>
                                <option value="double" selected>double</option>
                                <option value="groove">groove</option>
                                <option value="ridge">ridge</option>
                                <option value="inset">inset</option>
                                <option value="outset">outset</option>
                                <?php
                                break;
                            case "groove":
                                ?>
                                <option value="dotted">dotted</option>
                                <option value="dashed">dashed</option>
                                <option value="solid">solid</option>
                                <option value="double">double</option>
                                <option value="groove" selected>groove</option>
                                <option value="ridge">ridge</option>
                                <option value="inset">inset</option>
                                <option value="outset">outset</option>
                                <?php
                                break;
                            case "ridge":
                                ?>
                                <option value="dotted">dotted</option>
                                <option value="dashed">dashed</option>
                                <option value="solid">solid</option>
                                <option value="double">double</option>
                                <option value="groove">groove</option>
                                <option value="ridge" selected>ridge</option>
                                <option value="inset">inset</option>
                                <option value="outset">outset</option>
                                <?php
                                break;
                            case "inset":
                                ?>
                                <option value="dotted">dotted</option>
                                <option value="dashed">dashed</option>
                                <option value="solid">solid</option>
                                <option value="double">double</option>
                                <option value="groove">groove</option>
                                <option value="ridge">ridge</option>
                                <option value="inset" selected>inset</option>
                                <option value="outset">outset</option>                                <?php
                                break;
                            case "outset":
                                ?>
                                <option value="dotted">dotted</option>
                                <option value="dashed">dashed</option>
                                <option value="solid">solid</option>
                                <option value="double">double</option>
                                <option value="groove">groove</option>
                                <option value="ridge">ridge</option>
                                <option value="inset">inset</option>
                                <option value="outset" selected>outset</option>                                <?php
                                break;
                            default:?>
                                <option value="dotted">dotted</option>
                                <option value="dashed">dashed</option>
                                <option value="solid">solid</option>
                                <option value="double">double</option>
                                <option value="groove">groove</option>
                                <option value="ridge">ridge</option>
                                <option value="inset">inset</option>
                                <option value="outset">outset</option>
                                <?php

                        endswitch;
                        ?>
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
<?php
sessionStop();
?>