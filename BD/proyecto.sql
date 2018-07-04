-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2018 a las 06:51:45
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_Administrador` int(11) NOT NULL,
  `nrc` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_Administrador`, `nrc`, `nombre`, `apellidos`, `password`, `correo`) VALUES
(1, 201812345, 'Mario', 'Rossainz', '1234', 'rossainz.cs.buap.mx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_Alumno` int(11) NOT NULL,
  `matricula` int(11) DEFAULT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_Alumno`, `matricula`, `nombre`, `apellidos`, `password`, `correo`) VALUES
(1, 201427500, 'Saul', 'Zitlalpopoca', '1234', 'saulZp@outlook.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_Alumno` int(11) NOT NULL,
  `id_Tema` int(11) NOT NULL,
  `noRespuestasCorrectas` int(11) NOT NULL,
  `noRespuestasIncorrectas` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `fecha_Examen` date NOT NULL,
  `intentos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_Tema` int(11) NOT NULL,
  `noPregunta` int(11) NOT NULL,
  `pregunta` varchar(800) NOT NULL,
  `respuesta1` varchar(100) NOT NULL,
  `respuesta2` varchar(100) NOT NULL,
  `respuesta3` varchar(100) NOT NULL,
  `respuesta4` varchar(100) NOT NULL,
  `solucion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_Tema`, `noPregunta`, `pregunta`, `respuesta1`, `respuesta2`, `respuesta3`, `respuesta4`, `solucion`) VALUES
(1, 1, '¿Qué entiende por HTML?', 'Hyper Text Mask Language', 'Hard Text Markup Language', 'Hyper Text Markup Language', 'Hiper Type Markup Language', 4),
(1, 2, '¿Cómo se puede utilizar CSS en una página web?', 'Vinculado e insertado', 'Vinculado, insertado y en línea', 'Vinculado, insertado, en línea y filtrado', 'Las anteriores respuestas no son correctas', 2),
(1, 3, '¿Qué etiqueta utilizamos para definir el cuerpo del documento?', '<background>', '<body>', '<b>', '<big>', 2),
(1, 4, 'En CSS3, ¿cómo se indica un color rojo casi transparente?', 'rgba(255,0,0,0.1)', 'rgba(255,0,0,0.9)', 'rgba(255,0,0,10)', 'rgba(255,0,0,245)', 1),
(1, 5, '¿Qué etiqueta utilizamos para insertar una línea horizontal?', '<br>', '<hr>', '<line>', '<wbr>', 2),
(1, 6, 'Desde el interior hacia afuera, ¿cuál es el orden correcto del modelo de caja?', 'content, margin, border, padding', 'border, margin, content, padding', 'content, padding, border, margin', 'padding, content, margin, border', 3),
(1, 7, '¿Cuáles de estas son marcas para la inserción del código JavaScript en las páginas HTML?', '<javascript _code> y </javascript_code>', '<script> y </script>', '<?script> y <script?>', '<!script> y <script>', 2),
(1, 8, '¿Cuál de estas instrucciones está correctamente escrita en Javascript?', 'if (a==0) alert (a);', 'if (a=0) print a;', 'if (a==0) { print [a] }', 'if (a==0): print a;', 1),
(1, 9, 'La llamada al código Javascript debe colocarse en:', 'La sección Body de la página', 'Antes de la etiqueta HTML', 'Puede colocarse en la sección Head o en Body', 'Ninguna de las anteriores', 3),
(2, 1, '¿Qué diagrama UWE sirver para modelar el comportamiento de un Caso de Uso?', 'Diagrama de Secuencia', 'Diagrama de Casos de Uso', 'Diagrama de Transición de Estados', 'Diagrama de Clases', 1),
(2, 2, '¿Qué significa UWE', 'User-Based Web Engineering', 'UML-Basic Web Engineering', 'UML-Based Web Encoder', 'UML-Based Web Engineering', 4),
(2, 3, 'En un diagrama de Casos de Uso, ¿Qué estereotipo indica la aparición de informacion en el navegador?', '<<processing>>', '<<browsing>>', '<<webusescase>>', 'Ninguna de las anteriores', 2),
(2, 4, 'En el diagrama de Actividad, ¿Qué estereotipo describe la interaccion de la pagina con el usuario?', '<<systemAction>>', '<<navigationAction>>', '<<userAction>>', '<<interactionPin>>', 3),
(2, 5, '¿Qué se recomienda inicar en el proceso de modelado UWE?', 'Iniciar con el Modelo de Contenido', 'Iniciar con el Modelo de Presentación', 'Iniciar con el Diagrama de Casos de Uso', 'Iniciar con el Modelo de Navegacion', 3),
(2, 6, '¿Qué estereotipos tiene el Modelo de Navegación?', 'Texto, Ancla, Boton y Formulario', 'Clase de navegación, Menú, Indice y Pregunta', 'userAction, displayAction, systemAction y interactionPin', 'Todas las anteriores', 2),
(2, 7, 'En un diagrama de Casos de Uso, ¿Qué estereotipo indica una modificacion directa sobre un Base de Datos?', '<<processing>>', '<<browsing>>', '<<webusescase>>', 'Ninguna de las anteriores', 1),
(2, 8, '¿Para qué sirve el Modelado UWE?', 'Modelado Orientado a Objetos', 'Metodologia de Trabajo', 'Modelado de Aplicaciones Moviles', 'Modelado de Páginas Web', 4),
(3, 1, '¿Qué es un Servlet?', 'Programa que se ejecuta en un Servidor Web', 'Programa .jar que se ejecuta en una PC', 'programa .exe que ser ejecutta a Consola', 'Todas las anteriores', 1),
(3, 2, '¿Qué distribucion de java se necesita para programar Servlets?', 'Java 2 SE', 'Java 2 EE', 'Java SE', 'Java 2 ME', 2),
(3, 3, '¿Paquetes importantes para manejar Servlets?', 'javax.servlet', 'javax.servlet.http', 'java.awt.event', '1 y 2 son correctas', 4),
(3, 4, 'Metodos importantes en Servlets', 'doPost() y doGet()', 'post() y get()', 'http() y https()', 'html() y html5()', 1),
(3, 5, 'Metodo que se utiliza en Servlets para operaciones de limpieza', 'init()', 'post()', 'clean()', 'destroy()', 4),
(3, 6, 'Metodo que se utiliza para iniciar un Servlet', 'doGet()', 'destroy()', 'init()', 'Ninguna de las anteriores', 3),
(3, 7, 'Apache Tomcat es:', 'Un servidor de aplicaciones J2EE', 'Un contenedor Web X', 'Un contenedor EJB', 'Todas las anteriores', 1),
(3, 8, 'La tecnología Servlet solo se puede utilizar para generar código html en el servidor:', 'Verdadero', 'Falso, se puede utilizar para generar el resto de contenidos de un sitio Web', 'Falso, se puede utilizar también para generar las hojas de estilo (.css) y los ficheros javascript (', 'Falso, se puede utilizar también para generar los ficheros javascript (.js)', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `id_Tema` int(11) NOT NULL,
  `nombre_Tema` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`id_Tema`, `nombre_Tema`) VALUES
(1, 'html5,css3,javascript'),
(2, 'UWE'),
(3, 'Servlets');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_Administrador`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_Alumno`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id_Tema`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_Administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_Alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `id_Tema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
