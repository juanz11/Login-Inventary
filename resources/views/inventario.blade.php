<meta charset="utf-8">
     <style>
     table.improviso
     { text-align: left;vertical-align: top;border: 1px solid #000;border-collapse: collapse;}
     </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inventario</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       
               <h5> INVENTARIO </h5>

               <form action="{{ url('/add_inventario') }}" method="get">
                <button type="submit" class="btn blue no-margin btn btn-success  dt-button">
                     Agregar Inventario
                   </button>
                   </form>

                <div class="table-responsive">
                  <table class="table w-100 nowrap scroll-horizontal-vertical myTable table-striped w-100 improviso">
                    <thead class="">

                        <tr class="text-center">                           
                         <th>ID</th>
                         <th>NOMBRE</th>
                          <th>Description</th>
                          <th>Price</th> 
                          <th>action</th> 
                          
                        </tr>
                      </thead>
                      <tbody>
                         
                      @if(isset($listprod))
                          @foreach ($listprod as $value) 
                          <tr class="text-center">
                                 
                                 <td>{{$value->id }}</td>
                                 <td>{{$value->name }}</td>
                                 <td>{{$value->description }}</td>
                                 <td>{{$value->price }}</td>
                                 <td> <a href="{{route('destroy.product_delete', $value->id)}}"
                                        class="btn text-white mx-auto btn " style="color: red;"> Borrar
                                    </a>
                                </td>
                              </tr>   

                          @endforeach
                        @endif 
                      
                      </tbody>
                  </table>
                </div>

               @if( auth()->user()->role  == 'Administrador')
                <h5> Lista de usuarios </h5>
                <div class="table-responsive">
                  <table class="table w-100 nowrap scroll-horizontal-vertical myTable table-striped w-100 improviso">
                    <thead class="">

                        <tr class="text-center">                           
                         <th>ID </th>
                         <th>NOMBRE DE USUARIO</th>
                         <th>Role del usuario</th>
                         <th>action</th> 
                        </tr>
                      </thead>
                      <tbody>
                         
                      @if(isset($user))
                          @foreach ($user as $value) 
                          <tr class="text-center">
                                 
                                 <td>{{$value->id }}</td>
                                 <td>{{$value->name }}</td>
                                 <td>{{$value->role}}</td>  
                                
                                 </tr>   

                          @endforeach
                        @endif 
                      
                      </tbody>
                  </table>
                </div>
                @endif
                <div class="card-body">

               <h4>Bienvenido . {{ auth()->user()->name }} </h4>
              </div>

</section>