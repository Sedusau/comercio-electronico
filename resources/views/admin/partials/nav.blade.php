<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand main-title" href="#">PS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav mr-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="#">Categoria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pedidos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Usuarios</a>
              </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                 href="#" role="button" aria-haspopup="true" aria-expanded="false">
                 <i class="fa fa-user"></i>{{Auth::user()->user}}</a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('logout')}}">Finalizar Sesión</a>
                
                </div>
              </li>
            
        
           
          </ul>
       
        <p class="navbar-text">Perfumería Sebas</p>
        </div>
      </nav>