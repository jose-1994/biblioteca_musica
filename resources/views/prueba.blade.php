<?php
class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores = Autor::where('activo','=',1)->get();
        $lista_autores = $this->cargarDT($autores);
        return view('autores.index')->with('lista_autores',$lista_autores);
    }

    public function cargarDT($consulta)
    {
        $autores = [];

        foreach ($consulta as $key => $value){

            $ruta = "eliminar".$value['id'];
            $eliminar = '#';//route('delete-video', $value['id']);
            $actualizar =  '#';//route('videos.edit', $value['id']);
            $detalle = '#';//route('videos.show', $value['id']);
            $acciones = '
            
                <div class="btn-acciones">
                    <div class="btn-circle">
                        <a href="'.$detalle.'" role="button" class="btn btn-primary" title="Reproducir">
                            <i class="far fa-play"></i>
                        </a>
                        <a href="'.$actualizar.'" role="button" class="btn btn-success" title="Actualizar">
                            <i class="far fa-edit"></i>
                        </a>
                         <a href="#'.$ruta.'" role="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#'.$ruta.'">
                            <i class="far fa-trash-alt"></i>
                        </a>

                    </div>
                </div>

                 <!-- Modal -->
            <div class="modal fade" id="'.$ruta.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">¿Seguro que deseas eliminar este video?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="text-primary">
                        <small>
                            '.$value['id'].', '.$value['nombre'].'                 </small>
                      </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                      <a href="'.$eliminar.'" type="button" class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>

            ';

            $autores[$key] = array(
                $acciones,
                $value['id'],
                $value['nombre'],
                $value['genero'],
                $value['biografia']
            );

        }

        return $autores;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}