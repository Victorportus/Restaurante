
<!--Comienza el cuerpo de la página-->
<div class="container-fluid">
    <div class="col-md-10">
        <h2>Esta es la página de <?php echo $title;?></h2>
    </div>
    <div class="col-md-2">
    </div>


    <form method="post" action="../Gracias/saveorder" name="formorden">
        <input type="hidden" name="idrecord" value="<?php echo $idrecord ?>" />
        <div class="container row">        
                <div class="col-md-6 checkbox">
                    <!--Botones radio para pan-->
                    <h3>Por favor elija su pan</h3>
                    <input type="radio" id="rustico" name="pan" value="Pan Rustico">
                    <label for="rustico">Rustico</label><br>
                    <input type="radio" id="brioche" name="pan" value="Pan Brioche">
                    <label for="brioche">Brioche</label><br>
                    <input type="radio" id="artesanal" name="pan" value="Pan Artesanal">
                    <label for="artesanal">Artesanal</label><br>
                    <input type="radio" id="integral" name="pan" value="Pan Integral">
                    <label for="integral">Integral</label><br>
                </div>
                <div class="col-md-6 checkbox">
                    <!--Botones radio para carne-->
                    <h3>Por favor elija su carne</h3>
                    <input type="radio" id="res" name="carne" value="Res">
                    <label for="res">Res</label><br>
                    <input type="radio" id="pollo" name="carne" value="Pollo">
                    <label for="pollo">Pollo</label><br>
                    <input type="radio" id="falafel" name="carne" value="Falafel">
                    <label for="falafel">Falafel</label><br>
                </div>        
        </div>

        <!--Segundo renglón-->    
        <div class="container row">
            <div class="col-md-6 checkbox">
                <!--Botones radio para bebidas-->
                <h3>Por favor elija su verdura</h3>
                <input type="radio" id="mexicana" name="verdura" value="Tipo Mexicana">
                <label for="mexicana">Tipo Mexicana</label><br>
                <input type="radio" id="asia" name="verdura" value="Tipo Asia">
                <label for="asia">Tipo Asia</label><br>
                <input type="radio" id="cesar" name="verdura" value="Tipo César">
                <label for="cesar">Tipo César</label><br>
                <input type="radio" id="mixta" name="verdura" value="Tipo Mixta">
                <label for="mixta">Tipo Mixta</label><br>
            </div>
            <div class="col-md-6 checkbox">
                <!--Botones radio para bebidas-->
                <h3>Por favor elija su bebida</h3>
                <input type="radio" id="cola" name="bebida" value="Coca-Cola">
                <label for="cola">Coca-cola</label><br>
                <input type="radio" id="agua" name="bebida" value="Agua">
                <label for="agua">Agua</label><br>
                <input type="radio" id="te" name="bebida" value="Té">
                <label for="te">Té</label><br>
                <input type="radio" id="jugo" name="bebida" value="Jugo">
                <label for="jugo">Jugo</label><br>
            </div>
        </div>

        <div class="container row">
            <div class="col-md-6 checkbox">
                <!--Botones radio para acompañamientos-->
                <h3>Por favor elija su acompañamiento</h3>
                <input type="radio" id="francesa" name="acompañamiento" value="Papas a la francesa">
                <label for="francesa">Papas a la francesa</label><br>
                <input type="radio" id="casco" name="acompañamiento" value="Papas casco">
                <label for="casco">Papas casco</label><br>
                <input type="radio" id="aros" name="acompañamiento" value="Aros de cebolla">
                <label for="aros">Aros de cebolla</label><br>
            </div>
            <div class="col-md-6 checkbox">
                <p class="completar">Por favor confirme presionando el botón</p>
                <input type="submit" id="save" name="save" class="btn btn-warning" onclick="return required()" role="button" value="¡Ordenar!" />
            </div>
        </div>

    </form>    
    
</div>
<!--Termina el cuerpo de la página-->
