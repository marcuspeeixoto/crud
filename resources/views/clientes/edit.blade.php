<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Cadastro de clientes</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Cadastro</h1>
        <hr>

        <form action="{{route('clientes.update',['id'=>$clientes->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div>
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" value="{{$clientes->nome}}" placeholder="Informe o nome">
                </div>
                <br>
                <div>
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" value="{{$clientes->telefone}}" placeholder="Informe o telefone">
                </div>
                <br>
                <div>
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" name="endereco" value="{{$clientes->endereco}}" placeholder="Informe o Endereço">
                </div>
                <br>
                <div>
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="{{$clientes->email}}" placeholder="Informe o email">
                </div>
                <br>
                <input type="submit" name="submit" class="btn btn-primary" value="Atualizar">

            </div>
            
                
            
            
    
        </form>
    </div>
   
      
    
</body>
</html>