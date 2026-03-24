<?php
?>
<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Organismos: Estructuras y Procesos </title>
    <link rel="stylesheet" href="css/Style2.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <!--
        { <ul> } es una lista sin orden para crear la lista que será el menú

        { <li> } es el elemento de la lista en el que cada subtema es un punto de la lista

        { <a href= "#quees"> } es un enlace para dirigirse al { id="ques" }, lo que hay que cambiar para 
        dirigirse a otro lado es el nombre del id dentro del enlace y en el código

        { style= "..."} sirve para modificar el css en la etiqueta que se esta poniendo

        { list-style: none; } es para quitar los puntos de la lista

        { display: flex; } es para poner los elementos de la lista en una sola línea (horizontal)

        { gap: 20px; } es para poner un espacio entre cada elemento de la lista, se puede cambiar con el número

        { justify-content: flex-end; } es para alinear el menú a la derecha, la alineacion se puede cambiar 
         al cambiar la ultima palabra por { center } para el centro o { flex-start } para alinear a la izquierda

        { nav } sirve para que el código sepa que es un área de navegación, es decir, un menú

        { padding-right: 30px; } es para poner un espacio entre el menú y el borde derecho, se puede cambiar 
        con el número
        -->
        <div class="imagen"></div>    
        <br>
        <div class="component">
            <nav>
                <ul style="list-style: none; display: flex; gap: 20px; justify-content: flex-start; padding-left: 30px;">
                    <li><a href="#quees">¿Que es?</a></li>
                    <li><a href="#postulados">Postulados</a></li>
                    <li><a href="#estructura">Estrucutura</a></li>
                    <li><a href="#organelos">Organelos Celulares</a></li>
                </ul>
            </nav>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="titulin">
            <h1 style="text-align: left;">Organismos: Estructuras y Procesos</h1> <br>
            <h5>Esta página está dedicada a los organismos de la celula <br>
                y como este ayuda a entender el proceso que conyeva cada una
                parte de la celula y la funcion
                que esta tiene en los seres vivos
            </h5>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>

    <section>

        <section id="quees">
            <div class="row" style="padding: 20px;">
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/celula.jpg" class="card-img-top" alt="Imagen 1">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">La Celula</h3>
                            <p class="card-text" style="text-align: justify;">La celula es la unidad estructural, funcional y genetica basica de todos los seres vivos, capaz de realizar funciones vitales como nutricion, relacion y reproduccion. Los organismos pueden ser unicelulares o pluricelulares, y las células se clasifican principalmente en procariotas y eucariotas </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/descubridopor.jpg" class="card-img-top" alt="Imagen 2">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">¿Quien lo descubrio?</h3>
                            <p class="card-text" style="text-align: justify;">Fue descubierta en 1665 por Roberto Hooke, al observarlos por primera vez en cortes de corchos. Despues por Anton Van leeuwenhock fue el primero en ver celulas vivas como bacterias y espermatosoides. En 1833 Robert Brow Fue quien descubrio el Nucleo Celular.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/teoria.jpg" class="card-img-top" alt="Imagen 3">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Teoria Celular</h3>
                            <p class="card-text" style="text-align: justify;">En 1839 Matthias Schleidon y el zoologo Theodor Schwann establecieron la "Teoria Celular" con dos postulados, mas tarde R. Virchow en 1855, establecio el tercer postulado de la Teoria Celular.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="postulados">
            <div class="row" style="padding: 20px;">
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/postulado1.jpg" class="card-img-top" alt="Imagen 1">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Primer postulado</h3>
                            <p class="card-text" style="text-align: justify;">Todos los organismos estan formados por uno o mas celulas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/postulado2.jpg" class="card-img-top" alt="Imagen 2">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Segundo postulado</h3>
                            <p class="card-text" style="text-align: justify;">La celula es la unidad basica de estructura y funcion del organismo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/postulado3.jpg" class="card-img-top" alt="Imagen 3">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Tercer postulado</h3>
                            <p class="card-text" style="text-align: justify;">Las celulas nuevas proviene  de aquellas celulas que ya existian.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="estructura">
            <div class="row" style="padding: 20px;">
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/nucleo.jpg" class="card-img-top" alt="Imagen 1">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Nucleo</h3>
                            <p class="card-text" style="text-align: justify;">Es una estructura esferica o ooide que se encuentra solo en las eucariotas. Conformadas por la membrana nuclear, el nucleolo y la cromotica. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/citoplasma.jpg" class="card-img-top" alt="Imagen 2">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Citoplasma</h3>
                            <p class="card-text" style="text-align: justify;">Es un coloide con aspecto parecido a la clara de huevo, es una mezcla de semiliquida de agua, azucares, iones y proteinas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/membrana.webp" class="card-img-top" alt="Imagen 3">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Membrana plasmatica</h3>
                            <p class="card-text" style="text-align: justify;">Es selectivamente permeable, elastica y resistente. Esta formado de una doble capa de lipido con sus extremos hidrosfebas frente a frente y los hibrofilas dirigidos hacia afuera.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="organelos">
            <div class="row" style="padding: 20px;">
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/pared.png" class="card-img-top" alt="Imagen 1">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Pared Celular</h3>
                            <p class="card-text" style="text-align: justify;">Es una envolura compuesta de celulusa y proteinas. Se encuentra solo en celulas vegetales, bacterias , hongos y algas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/reticulo.webp" class="card-img-top" alt="Imagen 2">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Reticulo Ribosomas</h3>
                            <p class="card-text" style="text-align: justify;">
                            <ul style="justify-content: flex-start;">Esta formado de ARN ribosomal y proteinas. Lleva a cabo la sintesis de proteina y estan en el RER, citoplasma y membrana nuclear de las celulas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/mitocondria.png" class="card-img-top" alt="Imagen 3">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Mitocondrias</h3>
                            <p class="card-text" style="text-align: justify;">
                            <ul style="justify-content: flex-start;">Son organelos celulares generadoras de la energia quimica necesaria para activar las relaciones bioquimicas de las celulas, a traves de la respiracion celular.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

</body>

</html>