<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Formulário de Cadastro de clientes</h1>
    <hr>
    <div class="container">
        
    <form>
        <div class="row">
            <div class = "col-6">
                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" class="form-control" >
                </div>
            </div>

            <div class = "col-3">
                <div class="mb-3">
                <label>CPF</label>
                <input type="text" class="form-control">
                </div>
            </div> 

            <div class = "col-3">
                <div class="mb-3">
                    <label>Data de Nascimento</label>
                    <input type="date" class="form-control">
                </div>
            </div>

        </div>

            <div class = "row">
                <div class = "col-10">
                    <div class="mb-3">
                        <label>Endereço</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class = "col-2">
                    <div class="mb-3">
                        <label>Número</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>

            <div class = "row">
                
                <div class = "col-4">
                    <div class="mb-3">
                        <label>Cidade</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class = "col-4">
                    <div class="mb-3">
                        <label>Bairro</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class = "col-4">
                    <div class="mb-3">
                        <label>CEP</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

            </div>


            <div class = "row">
                <div class = "col-4">
                    <div class="mb-3">
                        <label>Telefone</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
    

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>