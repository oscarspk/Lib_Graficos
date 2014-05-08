Lib_Graficos es una clase que te permite crear gráficos con la api de google de manera rápida en PHP.

#Instalacion

Lo primero que debemos hacer es incluir la clase en nuestro archivo php, que para este ejemplo se encuentra en nuestra carpeta "class" y luego instanciamos la clase.

```shell
require("class/ChartsDesign.php");
$charts=new ChartsDesign();
```

Despues de instanciar la clase lo que debemos hacer es iniciar el procedimiento que agregara el codigo javascript al html el cual permite utilizar los graficos de google, en este procedimiento asignamos un nombre de funcion el que sera invocado una vez que la api de google este lista para su uso.

```shell
$script=$charts->ini("Nombre de la funcion");
```

Ahora podemos llamar al procedimiento que nos permite agregar el codigo javascript a nuestro html.

```shell
$script.=$charts->addPieChar("Nombre del div","Data","Maximo de registros a mostrar","Array de colores", "Titulo del grafico");
```


Despues imprimimos el contenido de la variable $script en el head del html.

```shell
echo $script;
```

un ejemplo funcional en el siguiente link: http://test2.spock.cl/Oscar/Lib_Graficos/
