<?php include "view/header.php"?>
<!------ Include the above in your HEAD tag ---------->
<br><br>
<div class="container col-md-4">
    <form  action="curl.php">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="c" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>