<!doctype html>

<html lang="en">
    <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/meucss.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

        <title>Bootstrap</title>

    </head>
    <body>

        <div id="container">
            <!-- Titulo da Página -->
            <form method="post" action="pessoa.php">

                <div class ="row" id="titulo">
                    <h1>Dados Pessoais</h1> 
                </div>

                <div class ="row" id="nome">
                    <div class="col-3">
                        <input type="text" name="name" placeholder="Digite seu nome..">
                    </div>
                </div>

                <div class ="row">
                    <div class="col-3">
                        Data de Nascimento 
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <input type="date" name="nasc" placeholder="Data de Nascimento:DD/MM/AAAA">
                    </div>
                </div>

                <div class ="row">
                    <div class="col-3">
                        Sexo
                    </div>

                    <div class ="col-3">
                        <span>Masculino </span><input type="radio" name="radio" value="Masculino">
                        <span> Feminino</span> <input type="radio" name="radio" value="Feminino">
                    </div>
                </div>

                <div class ="row">
                    <h1>Endereço</h1> 
                </div>

                <div class ="row">
                    <div class="col-3">
                        <input type="text" name="cep" placeholder="Digite o CEP">
                        <span>
                            <a href="#" name="buscacep" style="font-size: 12px"> Buscar endereço pelo CEP</a>
                        </span>
                    </div>
                </div>

                <div class ="row">
                    <div class="col-3">
                        <input type="text" name="rua" placeholder="Digite a Rua">
                    </div>
                    <div class="col-3">
                        <input type="text" name="numero" placeholder="Nº">
                    </div>                
                </div>

                <div class ="row" >
                    <div class="col">
                        <input type="text" name="bairro" placeholder="Bairro">
                    </div>
                </div>

                <div class ="row" >
                    <div class="col-3">
                        <select name="estado">
                            <option>Estado</option>
                            <option>SP</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <select name="cidade">
                            <option>Cidade</option>
                            <option>São Paulo</option>
                        </select>

                    </div>
                </div>
                <div class="row botao">
                    <div class="col-2 botao" ><input type="reset" class="btn btn-primary botao" name="btlimpar" value="Limpar"></div>
                    <div class="col-2 botao"><input type="submit" class="btn btn-success " name="btenviar" value="Enviar"></div>
                </div>
            </form>
        </div>     
    </body>
</html>