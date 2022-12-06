<form method="POST" action="{{ url('/save_product') }}" enctype="multipart/form-data">
                         @csrf

                         @error('name')
                         <div class="alert alert-danger">
                           Ingrese nombre de producto correcto 
                         </div>
                        @enderror
                         
                         <div class="form-group">
                                <label class="form-label"><strong>Nombre</strong></label>
                                <input  type="text" class="form-control " name="name" >
                            </div>    
                          
                            @error('description')
                         <div class="alert alert-danger">
                           Ingrese una description correcta 
                         </div>
                        @enderror
                             
                           <div class="form-group">
                                <label class="form-label"><strong>Description del producto</strong></label>
                                <input  type="text" class="form-control " name="description" >
                            </div>
                          @error('price')
                         <div class="alert alert-danger">
                         El monto del producto no puede ser menor de 1
                         </div>
                        @enderror
                            <div class="form-group">
                                <label class="form-label"><strong>Precio</strong></label>
                                <input  type="city" class="form-control " name="price" >
                            </div>

                            

                              <hr>
                            <button type="submit" class="btn btn-block btn-primary mt-1 btn-success">Guardar</button>
                            <a  class="btn btn-block btn-primary mt-1" href="/inventario">
                              Volver
                             </a> 
                        </form>
