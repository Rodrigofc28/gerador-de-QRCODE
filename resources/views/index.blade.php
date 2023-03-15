<!DOCTYPE html>
<html lang="br-pt">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
    <title>Gerador de Codigos QR</title>
    
</head>    
    
    


<body>
    <main>
    <section class="gerador">
    <form action="/gerar/create" method="post">
    {{ csrf_field() }}
        <h1> Gerador de QrCode</h1>
        
        <label for="qrcode">Digite o link:</label><input type="text" name="qrcode" id="qrcode">
        <input type="submit" value="Gerar">
    </form>
    
    @if(isset($output))
    
        <img src="../{{$output}}" alt="">
        <a href="/gerar/store/{{$output}}">Download</a>
    
      @endif
    </section>
    <section class="conteudo" >
        <div>
            <h1>Ola,</h1>
            <p>Precisando de um site pra sua empresa, E-comerce  ou um sistema personalizado preencha o campo abaixo</p>
            <form action="#" method="post">
                <label >Nome :<input type="text"></label><br>
                <label >Email :<input type="email" name="" id=""></label><br>
                <label >Tel :<input type="tel" name="" id=""></label><br>
            </form>
        </div>
    </section>
    <footer>
        <span>Copyright&copy; Rodrigo de Freitas Camargo 2023</span><!--marca  registrada usa se &reg; -->
    </footer> 
    </main>
    
</body>

</html>