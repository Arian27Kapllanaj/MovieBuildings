<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <h2 id="title">Movie Buildings</h2>

    <div id="body-design">
        <p><a id="login-button" href="{{ url('login') }}">Log In</a></p>
    </div> <!-- body design-->

</body>

<style>
    #title{
        text-align: center;
        background-color: white;
    }

    #login-button{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: #f1f1f1;
        color: black;
        font-size: 16px;
        padding: 16px 30px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        text-align: center;
    }   

    #login-button:hover {
        background-color: black;
        color: white;
    }

    body{
        background: url(images/backgroundImage.png);   
     }  
    
</style>
</html>