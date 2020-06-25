Vue.component(
    'barra',{
        template: /*html*/
        `
        <div>
        <nav class="navbar navbar-dark bg-dark  navbar-expand-sm">
        <a class="navbar-brand" href="#">Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#"> <i class="home icon"></i>Inicio</a>
                <a class="nav-item nav-link" href="#">Nuevo!</a>
                <a class="nav-item nav-link" href="#">Damas</a>
                <a class="nav-item nav-link" href="#">Caballeros</a>
                <a class="nav-item nav-link" href="#">Niños</a>
                <a class="nav-item nav-link" href="#">Accesorios</a>
                </div>
            </div>
         </nav>
        </div>
        `,
    }
);