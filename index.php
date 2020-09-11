<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <title>Password_Generator</title>
</head>

<body>
    <div class="overrall-container">
            <h2>Password Generator</h2>
        <div class="inside_container">
        <i class="fas fa-clipboard"  id="copy" style="float: right;margin-right:3px;font-size:20px"></i>
            <div class="outputselect">
                <span id="output"></span>
            </div>
            <div class="inputscheckbox">
                <label for="upercase">Password Length</label>
                <input type="number" id="length" value="20" max="26">
                <div class="inputscheckbox">
                    <label for="upercase"> UpperCase characters</label>
                    <input type="checkbox" id="upper" checked>
                </div>
                <div class="inputscheckbox">
                    <label for="upercase"> LowerCase characters</label>
                    <input type="checkbox" id="lower" checked>
                </div>
                <div class="inputscheckbox">
                    <label for="upercase"> Number characters</label>
                    <input type="checkbox" id="number" checked>
                </div>
                <div class="inputscheckbox">
                    <label for="upercase"> symbol characters</label>
                    <input type="checkbox" id="symbol" checked>
                </div>
                <div class="btngenetator">
                <button id="generate">Generate Password</button>
                </div>
            </div>
        </div>
    </div>
<script src="app.js"></script>
</body>

</html>