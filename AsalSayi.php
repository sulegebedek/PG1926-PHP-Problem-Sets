<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Asal Sayı </title>
    <style>
    *{
        box-sizing: border-box;
    }
    body{
        margin: 0;
        padding: 0;
        background-color: #4b4949;
    
    }
    h1{
        color: #333333;
    }
    #panel{
        border: 1px solid #4b4949;
        width: 500px;
        height: auto;
        margin: auto;
        margin-top: 110px;
        background-color:whitesmoke;
        border-radius: 10px;
        padding: 25px;
    }
    #panel h1{
        text-align: center;
    }
    input{
        width: 50%;
        height: 30px;
        display: block;
        margin: auto;
        border: none;
        background-color: whitesmoke;
        border-bottom: 2px solid #4b4949;
        padding: 0 5px;
    }
    input:focus{
        outline: 0;
        width: 60%;
        transition: 1s;
        border: 2px solid #4b4949;
        border-radius: 5px;
    }
    button{
        margin: auto;
        width: 120px;
        height: 40px;
        display: block;
        margin-top: 15px;
        background-color: #4b4949;
        border: none;
        border-radius: 5px;
        color: white;
        font-size: 17px;
    }
    button:hover{
        background-color: rgb(182, 181, 181);
        color: #3b3a3a;
        transition: 1s;
        border: 1px solid #3b3a3a;
    
    }
    #panel p{
        color:#333333;
        font-size: 17px;
        text-align: center;
    }
    #panel a{
        color: #333333;
        text-decoration: none;
    }
    
    </style>
</head>
<body>
    
    <div id="panel">
        <h1>Asal Sayı Sorgulama</h1>
        <form >
            <input type="text" name="sayi" placeholder="Bir sayı giriniz"><br><br>
            <button>SORGULA</button><br><br>
            <label id="sonuc"></label>
        </form>

        <?php 
                
        $degisken = $_GET["sayi"];

        $asal=0; $i=2;

        do
        {
            if ($degisken % $i == 0)
            {
                $asal = 1;
            }
            $i++;
        }
        while($i<$degisken);
         
        if ($asal != 1)
        {
            $sonuc=" Sayısı Asaldır";
        }
        else if ($degisken == 2)
        {
            $sonuc=" Sayısı Asaldır";
        }
        else 
        {
            $sonuc=" Sayısı Asal Değildir"; 
        }

        echo $degisken;
        echo $sonuc;
        ?></div>

</body>
</html>