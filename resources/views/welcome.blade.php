
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <title>Sistema de Som</title>
</head>
<body>
    <div class="banner">
    </div>

    <div class="form-container">
        <form action="{{route('upload')}}" id="videoupload" method="post" enctype="multipart/form-data">
            @csrf
            <h1>Sistema de SOM (TSVR GAMES)</h1>
            <p>Escolha a musica em extensao.mp3 no botao abaixo:</p>
            <input type="file" name="my_audio" id="my_audio">
            <p>Digite um nome para a sua musica</p>
            <input type="text" class="texto" required name="nome"  maxlength="20" placeholder="DIGITE UM NOME PARA SUA MUSICA">
            <input type="submit" value="Enviar"  class="button">
            <div class="music">
            </div>
        </form>
        <!-- <form action="upload_file.php" method="post" enctype="multipart/form-data">
            <label for="file"><span>Filename:</span></label>
            <input type="file" name="file" id="file" /> 
            <br />
            <input type="submit" name="submit" value="Submit" />
        </form> -->

    </div>
    @yield('content')
    
</body>
</html>