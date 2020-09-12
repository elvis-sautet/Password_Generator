<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <script src="./jquerycodeforall.js"></script>
    <script src="sweetalert.min.js"></script>
    <title>Password_Generator</title>
</head>

<body class="bg-secondary">
    <div class="container list-group-item mt-5 rounded" style="width: fit-content;overflow:hidden;">
        <h2 class="bg-secondary text-center text-white img-thumbnail">Password Generator</h2>
        <p class="text-center"><small class="text-capitalize text-primary">by sautet ...</small></p>
        <div class="form-group">
            <i class="fas fa-clipboard float-right btn-lg mr-0" id="copy" style="cursor: pointer;z-index:1000;"></i>
            <span class="form-control text-secondary border-primary" id="output" style="white-space:nowrap;"></span>
        </div>
        <div class="form-group m-0 font-weight-bolder">
            <label class="text-capitalize text-primary">Password Length</label>
            <input type="number" id="length" class="float-right form-control p-0 border-primary" style="width: 20%;height:fit-content" value="20" max=20>
            <script>
                var fieldLength = document.getElementById("length");
                fieldLength.addEventListener("change",()=>{
                    if(fieldLength.value > 20){
                        fieldLength.value = 20;
                    }
                });
            </script>
        </div>
        <div class="clearfix"></div>
        <div class="form-group m-0 font-weight-bolder">
            <label class="text-capitalize text-primary"> UpperCase characters</label>
            <input type="checkbox" id="upper" class="float-right" checked>
        </div>
        <div class="form-group m-0 font-weight-bolder">
            <label class="text-capitalize text-primary"> LowerCase characters</label>
            <input type="checkbox" id="lower" class="float-right" checked>
        </div>
        <div class="form-group m-0 font-weight-bolder">
            <label class="text-capitalize text-primary"> Number characters</label>
            <input type="checkbox" id="number" class="float-right" checked>
        </div>
        <div class="form-group m-0 font-weight-bolder">
            <label class="text-capitalize text-primary"> symbol characters</label>
            <input type="checkbox" id="symbol" class="float-right" checked>
        </div>
        <button type="submit" class="btn btn-primary font-weight-bold" id="generate">Generate Password</button>
        
    </div>
    <script src="index.js"></script>
</body>

</html>