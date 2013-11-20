<?php
class VendedorController extends BaseController {
	public function mostrarVendedores()
	{
		$vendedores = Vendedor::all();//Obtenemos todos los vendedores.
		return View::make('vendedor.lista', array('vendedores' => $vendedores));//Pasamos los vendedores a la vista.
	}

	public function crearVendedor()
	{
		$respuesta = Vendedor::agregarVendedor(Input::all()); //Llamamos a la función 'agregarVendedor' y le pasamos el formulario.

		if ($respuesta['error']) {
			return Redirect::to('vendedor') -> withErrors($respuesta['mensaje']) -> withInput();
		} else {
			return Redirect::to('vendedor') -> with('mensaje', $respuesta['mensaje']);
		}
	}
}
?>