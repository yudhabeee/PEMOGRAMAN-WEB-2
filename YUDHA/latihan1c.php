<!-- HTML -->
<!DOCTYPE html>
<html>
<head>
    <title>Web Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
/* CSS */
.container {
    display: flex;
    flex-direction: column;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

.box {
    width: 50px;
    height: 50px;
    border: 1px solid black;
    margin: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 24px;
}


    </style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="box">A</div>
        </div>
        <div class="row">
            <div class="box">A</div>
            <div class="box">B</div>
        </div>
        <div class="row">
            <div class="box">A</div>
            <div class="box">B</div>
            <div class="box">C</div>
        </div>
    </div>
</body>
</html>