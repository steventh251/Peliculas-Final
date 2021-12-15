
<div>
    <div class="row" >
        <div class="mx-auto col-md-4">
            <img class="mx-auto d-block" style="width: 140px; height:140px;"
                src="{{ Storage::disk('public')->url('images/usuarios/default.png') }}" alt="">
            <form wire:submit.prevent="login">
                <div class="mb-3">
                    <FONT FACE="raro, courier" SIZE=4 COLOR="#ffffff">Ingrese su correo</FONT>
                    <input wire:model="email" type="email" class="form-control" placeholder="correo@gmail.com">
                </div>
                <div class="mb-3">
                    <FONT FACE="raro, courier" SIZE=4 COLOR="#ffffff">Ingrese su contraseña</FONT>
                    <input wire:model="password" type="password" class="form-control">
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                <a href="{{ route('createUsuarios') }}" class="btn btn-success float-right">Registrar</a>
            </form>
        </div>
    </div>

</div>
<body style="background-color: #00bfff">

</body>
