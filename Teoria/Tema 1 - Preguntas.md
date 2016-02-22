## Ejercicios del tema 1
######Ejercicio 1: 'En que momento la sociedad civil empezò a hacer suyo el proyecto inicialmente militar?'
Se puede hablar de una version por la sociedad civil de internet desde el 1990, por dos razones: el proyecto ARPANET disaparece, aparece el "lenguaje" HTML y los primeros ISPs empiezan a distribuir conexion a la red.
######Ejercicio 2: '¿Por qué he afirmado tan taxativamente que Internet y la Web no es lo mismo? Explique lo que es cada cosa para que lo entienda un profano en la materia.'
Internet es una infraestructura de redes, que conecta todos los dispositivos del mundo y hacendo posible la comunicacion por protocolos. Necesita una parte hardware y de protocolos de comunicaciones, y una parte de software que permiten que se pueda acceder a las informacciones y a los datos. El Web (_WWW World Wide Web_) representa como se puede acceder a las informaciones que hay en Internet a traves servicios de alto nivel que sean suportados por una infraestructura, es decir Internet.
######Ejercicio 3: 'Documente en sus apuntes las responsabilidades y protocolos usados en cada una de las cuatro capas indicadas.'
1. Capa de aplicaciòn: proporciona los servicios de alto nivel para que se haya comunicacion
2. Capa de Transporte: permite la conexion, que sea fiable (TCP) o no (UDP)
3. Capa de Internet: permite el envio y la recepcion de los paquetes (datagramas) y proporciona deteccion de errores
4. Capa de Acceso a Red: proporciona los protocolos para que se haya el flujo de datos en la red a la que el ordenador es conectado


######Ejercicio 4: '¿A qué capa pertenece el protocolo TCP? ¿Qué utilidad tienen los puertos?'
El protocolo TCP pertenece a la capa de Transporte. Los puertos se utlizan para que el proceso correcto recibe los datagramas enviados.
######Ejercicio 5: 'Investigue  y  documente  cómo  hacer  que  un  ordenador  de  casa,  conectado con IP dinámica, pueda hacer de servidor con un nombre de dominio fijo, de forma que siempre que tecleemos _www.elordenadordemicasa.com_ estemos accediendo al servicio web que tengamos funcionando. Si dispone de dominio propio, utilice su ordenador de casa para ello.'
Hay un servicio particular, llamado DDNS (_Dynamic Domain Name Service_) que permite obtener la IP dinamica de un ordenador y la comunica a un servidor que contiene la conexion entre la IP dinamica actual del ordenador y un nombre de dominio fijo. Ademas, hay un servicio que permite de actualizar en el servidor la direccion IP actual del ordenador. Un ejemplo de este servicio es proporcionado por [No-IP](www.no-ip.com).
######Ejercicio 6: 'Investigue y documente cómo obtener via telnet una página web.'
Es suficiente conectarse al servidor _NombreServidor_ al puerto 80 (puerto por defecto de HTTP) o cualquier puerto definido por HTTP y pedir la pagina por una orden _GET_. Es decir, se necesitaran las siguientes ordenes:
> telnet _NombreServidor_ 80

> GET /ruta/mipaginaweb.html

######Ejercicio 7: 'Lea la [autoentrevista](http://www.w3.org/People/Berners-Lee/FAQ.html) que Tim Berners‐Lee ofrece en la web del W3C y destaque lo que más le ha llamado la atención.'
En la autoentrevista, Tim Berners-Lee me parece un hombre soñador que pero al mismo tiempo sabe lo que puede hacer con una revolucion como la del Web. El dice que el Web es universal, y se puede acceder a cualquiera informacion del mundo y connectarse con todo el mundo; sin embargo, hay unos posibles problemas, como por ejemplo la necesidad de distinguir informacion de calidad de otras, y el problema de la privacy. Al final pero, de su entrevista se puede entender que el es un hombre optimista hacia el futuro y que ha desarrollado una tecnologia por toda la humanidad y no por su gaña personal ("The decision to make the Web an open system was necessary for it to be universal. You can't propose that something be a universal space and at the same time keep control of it.").
######Ejercicio 8: 'Lea el [articulo](http://www.w3.org/History/1989/proposal.html) original en el que se "crea" la WWW y haga un resumen.'
\< yet to be done\>
######Ejercicio 9: 'Indique al menos tres ejemplos de sitios web de las categorias descritas anteriormente.'
Un sitio web como http://www.thepiratebay.se es una _web de descargas_; una pagina web como http://www.forumcommunity.net es una _web orientada a servicio_, y el servicio que proporciona es generar una _web interactiva_, es decir generando un foro. Ejemplos de _Portales_ son http://es.wikipedia.org y http://www.google.com o cualquier buscador de contenidos.
