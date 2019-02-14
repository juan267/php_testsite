<html>
<head>
  <title>Pagina de Prueba</title>
  <script src="//j.dev-wovn.io:3000/1" data-wovnio="key=Ym8LSs" async></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <style>
    td, th {
      padding: 3px;
      border: 1px solid black
    }

    .tag--news::before {
      border-color: #e91802;
    }

    .tag::before {
      content: " ";
      display: inline-block;
      margin-right: 0.5rem;
      border-left: 2px solid #47a1d8;
      height: 0.75rem;
      padding: 0;
      width: 0;
    }
  </style>
</head>
<body id="app">
  <div>
    <a href="/largo">este es un link muy laaaaaaa aaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa aaaaa  aaaaaaaaaaaaaaa aaaaaaaaaaaaa aaaaaaaaaaaaaargo 2</a>
  </div>
  <div>
    <h3 wovn-ignore>Cataaaaaan</h3>
    <pre>
      <span>hola
    </pre>
    <h3>Doooooooooooog</h3>
    <h3>Cat and dog</h3>
    <p>Hola como estas 1</p>
    <p>Hola como estas 2</p>
    <p>Hola como estas 3</p>
    <p>hola 1</p>
    <a href="/hola">este es un link muy laaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaalaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaargo</a>
    <div>
      <span> <span>cats <span>dogs</span></span>Los aviones</span><span> negros</span> <a href="/aviones.html">son lindos</a>
    </div>
    <h1>Esta es la pagina de prueba</h1>
    <h5>Soy un nuevo valor yeahh</h5>
    <h6>chichi</h6>
    <h1>Avion</h1>
    <h6 wovn-ignore>Valor ignorado</h6>
    <p>News</p>
    <li><strong>Titulo: </strong> <?= $todo['title']; ?></li>
    <p class="nope como estas">Hola como estas</p>
    <p>Yo muy bien <span>Esto esta dentro de un span</span></p>
    <div>
      <h3>Las frutas de tu naranja son:</h3>
      <ul>
        <?php foreach ($fruits as $fruit): ?>
          <li><?= $fruit ?></li>
        <?php endforeach ?>
      </ul>
    </div>
    <a href="/pages/dat_page.html" wovn-ignore>Dat Page</a>
    <div>
      <p>hola 2</p>
      <img src="https://i.pinimg.com/originals/e6/0f/fb/e60ffbaa10d78a06d02c8a751611c4a9.jpg" alt="">
      <p>hola 3</p>
      <p>hola 4</p>
      <p>hola 5</p>
      <h3 wovn-ignore>Los Perritos y sus edades son</h3>
      <ul>
        <?php foreach ($dogs as $name => $age): ?>
          <li><?= ucwords($name) ?>: <?= $age ?></li>
        <?php endforeach ?>
      </ul>
    </div>
    <section class="todo">
      <h3>Todo Sencillo</h3>
      <ul>
        <a class="module__title__link tag tag--news wovn-decorated" href="https://p.wovn.io/news?wovn-url=http%3A%2F%2Fwww.bbc.com%2Fnews" rev="news|header">
          <span style="cursor: text;">News</span>
        </a>
        <br>
        <a class="module__title__link tag tag--news wovn-decorated" href="http%3A%2F%2Fwww.bbc.com%2Fnews" rev="news|header">
          <span style="cursor: text;">News</span>
        </a>
        <br>
        <!-- <a href="/hola">HOla esto es un link</a> -->
        <li><strong>Titulo: </strong> <?= $todo['title']; ?></li>
        <li><strong>Titulo: </strong> <?= $todo['title']; ?></li>
        <li><strong>Titulo: </strong> <?= $todo['title']; ?></li>
        <li><strong>Titulo: </strong> <?= $todo['title']; ?></li>
        <li><strong>Titulo: </strong> <?= $todo['title']; ?></li>
        <li><strong>Fecha: </strong> <?= $todo['due']; ?></li>
        <li><strong>Asignado a: </strong> <?= $todo['assign_to']; ?></li>

        <!-- With ternary Operator -->
        <!-- <li><strong>Terminado: </strong> <?#= $todo['completed'] ? "Terminado" : "Incompleto"; ?></li> -->
        <li>
          <strong>Terminado: </strong>
          <?php if ($todo['completed']): ?>
            <span>&#9989;</span>
          <?php else: ?>
            Incompleto
          <?php endif ?>
        </li>
      </ul>
    </section>
    <section>
      <table>
        <thead>
          <tr>
            <th colspan="2">Todos en PHP</th>
          </tr>
          <tr>
            <th>Descripcion</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </section>
    <?php if ($ozuOldEnogh): ?>
      <h2>Ozu ya esta viejo</h2>
    <?php endif ?>
    <p>Ozu<span class="toggle"> Perrito</span></p>
    <a href="/pages/categories.html">Categorias</a>
  </div>
  <script>
    window.URL = function() {
      console.log('hola popo')
    }
    var tag = document.createElement("p");
    tag.innerHTML = 'Ozu<span class="toggle"> Perrito</span>';
    document.getElementById("app").appendChild(tag)
  </script>
</body>
</html>


