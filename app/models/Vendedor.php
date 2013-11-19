<?php
class Vendedor extends Eloquent {
	protected $table = 'vendedor'; //Declaramos la tabla que usa el modelo.
	protected $fillable = array('nombre', 'apellido'); //Declaramos los campos con los que se puede crear el objeto desde el form.
	
	public function productos()
	{
		return $this -> hasMany('Producto', 'vendedor_id'); //Relación con el modelo de la tabla 'producto'.
	}

	public static function agregarVendedor($input) //Recibir información del formulario para crear el vendedor;
	{
		$respuesta = array();
		$reglas = array( //Reglas para validar un nuevo vendedor.
			'nombre' => array('required', 'max:100'),
			'apellido'  => array('required', 'max:100')
		);

		$validator = Validator::make($input, $reglas); //Verificamos que los datos sean válidos.

		if ($validator -> fails()) { //Si no cumple las reglas devolver errores al controlador.
			$respuesta['mensaje'] = $validator;
			$respuesta['error'] = true;
		} else { //Si cumple las reglas crear el objeto 'vendedor'.
			$vendedor = static::create($input);

			//Mensaje de éxito al controlador:
			$respuesta['mensaje'] = 'Vendedor creado';
			$respuesta['error'] = false;
			$respuesta['data'] = $vendedor;
		}

		return $respuesta;
		
	}
}
?>