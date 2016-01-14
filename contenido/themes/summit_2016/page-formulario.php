<?php
/*
 Template Name: Pagina Formulario
 */

get_header(); 
  ?>
<form action="<?php echo get_template_directory_uri(); ?>/action.php" method="post" role="form">
<section class="wide_formulario">
        <div class="container">
        <h1>INSCRIPCIÓN MUTUAL 2016</h1>
            <div class="row">
            	<div class="col-md-7 " >
               	 <div class="content_txt_inscripcion">
                    	<div class="col-md-12">
                            <h2>Ingresa tus datos</h2>
                            <p>dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-5 form_inscripcion">
                        <input type="text" name="form[rut]" class="form-control in2_rut"  placeholder="Rut:">
                    
                    
                        <input type="text" name="form[nombre]" class="form-control in2_nombre" placeholder="Nombre:">
                    
                        
                        <input type="text" name="form[apellido]" class="form-control in2_apellido" placeholder="Apellido" >
                    
                    
                        <input type="text" name="form[correo]" class="form-control in2_correo" placeholder="Correo:" >
                    
                       
                        <input type="text" name="form[telefono]" class="form-control in2_telefono" placeholder="Teléfono:" >
                    
                    
                        <input type="text" name="form[empresa]" class="form-control  in2_empresa" placeholder="Empresa:" >
                    
                       
                        <input type="text" name="form[cargo]" class="form-control  in2_cargo" placeholder="Cargo:" >
                    
						<div class="content_clientesform ">
							<div class="squaredTwo"><input type="checkbox" value="1" id="boxcliente" name="boxcliente" /><label for="boxcliente"></label>
                            
                            </div><p>Cliente</p>

						</div>
</div>
                                    
              </div>
            </div>
        </div>            


</section>
<section class="fondo_gris">
	<div class="container">
<h3 class="programaform">PROGRAMA</h3>
<div class="col-md-12 tit_dias_form">DÍAS</div>
<div class="row">
<div class="col-md-3 columna_programa_form">
<h5>HORARIO</h5>
<div class="caja_fecha">9:00 HRS.</div>
<div class="caja_fecha">12:30 HRS.</div>
<div class="caja_fecha">14:00 HRS.</div>
<div class="caja_fecha">16:00 HRS.</div>
</div>
<div class="col-md-3 columna_programa_form coldia1">
<h5>1ER DIA</h5>
 <div class="col-md-11"> 
  <div class="checkbox-inline2"><p>Option 1</p><div class="squaredTwo"><input type="checkbox" value="1" id="squaredTwo1" name="d[1][1]" /><label for="squaredTwo1"></label></div></div>
  <div class="checkbox-inline2"><p>Option 2</p><div class="squaredTwo"><input type="checkbox" value="1" id="squaredTwo2" name="d[1][2]" /><label for="squaredTwo2"></label></div></div>
  <div class="checkbox-inline2"><p>Option 3</p><div class="squaredTwo"><input type="checkbox" value="1" id="squaredTwo3" name="d[1][3]" /><label for="squaredTwo3"></label></div></div>
  <div class="checkbox-inline2"><p>Option 4</p><div class="squaredTwo"><input type="checkbox" value="1" id="squaredTwo4" name="d[1][4]" /><label for="squaredTwo4"></label></div></div>
</div>
</div>
<div class="col-md-3 columna_programa_form coldia2">
<h5>2DO DIA</h5>
 <div class="col-md-11">
  <div class="checkbox-inline2"><p>Option 1</p><div class="squaredTwo"><input type="checkbox" value="1" id="squaredTwo5" name="d[2][1]" /><label for="squaredTwo5"></label></div></div>
  <div class="checkbox-inline2"><p>Option 2</p><div class="squaredTwo"><input type="checkbox" value="1" id="squaredTwo6" name="d[2][2]" /><label for="squaredTwo6"></label></div></div>
  <div class="checkbox-inline2"><p>Option 3</p><div class="squaredTwo"><input type="checkbox" value="1" id="squaredTwo7" name="d[2][3]" /><label for="squaredTwo7"></label></div></div>
  <div class="checkbox-inline2"><p>Option 4</p><div class="squaredTwo"><input type="checkbox" value="1" id="squaredTwo8" name="d[2][4]" /><label for="squaredTwo8"></label></div></div>
</div>
</div>
<div class="col-md-3 columna_programa_form coldia3">
<h5>3ER DIA</h5>
 <div class="col-md-11">
  <div class="checkbox-inline2"><p>Option 1</p><div class="squaredTwo"><input type="checkbox" value="1" id="squaredTwo9" name="d[3][1]" /><label for="squaredTwo9"></label></div></div>
  <div class="checkbox-inline2"><p>Option 2</p><div class="squaredTwo"><input type="checkbox" value="1" id="squaredTwo10" name="d[3][2]" /><label for="squaredTwo10"></label></div></div>
  <div class="checkbox-inline2"><p>Option 3</p><div class="squaredTwo"><input type="checkbox" value="1" id="squaredTwo11" name="d[3][3]" /><label for="squaredTwo11"></label></div></div>
  <div class="checkbox-inline2"><p>Option 4</p><div class="squaredTwo"><input type="checkbox" value="1" id="squaredTwo12" name="d[3][4]" /><label for="squaredTwo12"></label></div></div>
</div>
</div>

</div>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-8">
<div class="form-group"> 
<p>Seleccionar Todas las charlas</p>
	<div class="squaredTwo"><input type="checkbox" value="1" id="selecctodos" name="selecctodos" /><label for="selecctodos"></label>
     </div>
 </div>
 </div>
</div>
<div class="row">
<div class="col-md-12">
<button type="submit" class="btn_reg">REGISTRAR</button><button type="submit" class="btn_clear">LIMPIAR</button>
</div>
	</div>
</section>	
</form>






<?php

get_footer();