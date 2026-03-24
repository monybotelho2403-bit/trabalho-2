<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="dash.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css  ">
<title>Dashboard</title>
</head>

<body>

<div class="dashboard-container">

<?php include("menu.php"); ?>

<main>
            <div class="header-content">
                <h2>Gestão de Usuário</h2>
                <p>Visualize e gerencie as permissões dos usuários do sistema.</p>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Acesso</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Eric Freitas</td>
                                <td>eric@unifev.edu.br</td>
                                <td>Administrador</td>
                                <td><span class="badge ativo">Ativo</span></td>
                                <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button></td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Ana Souza</td>
                                <td>ana.souza@email.com</td>
                                <td>Editor</td>
                                <td><span class="badge ativo">Ativo</span></td>
                                <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button></td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Carlos Lima</td>
                                <td>carlos.lima@servidor.com</td>
                                <td>Usuário</td>
                                <td><span class ="badge inativo">Inativo</span></td>
                                <td><button class ="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button></td>
                            </tr>
                        </tbody>
                </table>
            </div>
        </main>

</div>

<?php include 'rodape.php' ?>
</body>
</html>