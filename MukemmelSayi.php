<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Mükemmel Sayı </title>
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
        <h1>Mükemmel Sayı Sorgulama</h1>
        <form name="toplam">
            <input type="text" id="deger" placeholder="Bir sayı giriniz"><br><br>
            <button type="button" id="hesapla" >SORGULA</button><br><br>
            
        </form>


    <script>
 
        var btn=document.getElementById("hesapla");
        btn.onclick=function(){
            var i,j;
            var toplam=0;
            var sayi=Number(document.getElementById("deger").value);
            for(i=1;i<sayi;i++)
             {
                 if (sayi%i==0)
                 {
                    toplam=toplam+i;	
                 }
             }
                 if (sayi==toplam)
                 {
                    alert(sayi+" Sayısı Mükemmel Sayıdır.");	 
                 }
                 else
                 {
                    alert(sayi+" Sayısı Mükemmel Sayı Değildir.");	 
                 }
             }
    </script>
</body>
</html>