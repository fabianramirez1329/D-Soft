-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2017 a las 00:01:17
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_d-soft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `codigo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `codigo`) VALUES
(24, 'Semillitas', 'se'),
(26, 'Expo-Ingenieria', 'ei'),
(27, 'Expo-Joven', 'ej'),
(28, 'Feria Cientifica', 'fc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desgloce_puntos`
--

CREATE TABLE `desgloce_puntos` (
  `idP` int(255) NOT NULL,
  `idJuez` int(255) NOT NULL,
  `puntos` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identificador`
--

CREATE TABLE `identificador` (
  `Id` int(100) NOT NULL,
  `categoria` int(50) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Puntos` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `identificador`
--

INSERT INTO `identificador` (`Id`, `categoria`, `Descripcion`, `Puntos`) VALUES
(1, 26, 'Planteamiento del problema', 10),
(2, 26, 'Justificación del proyecto', 18),
(3, 26, 'Originalidad y creatividad del proyecto', 10),
(4, 26, 'Fundamento teórico', 12),
(5, 26, 'Metodología', 18),
(6, 26, 'Discusión,interpretación y análisis', 16),
(7, 26, 'Presentación e interacción del proyecto', 12),
(8, 26, 'Presentación documentación adicional del proyecto', 4),
(9, 27, 'Innovación e impacto', 25),
(10, 27, 'Modelo de Negocio (CANVAS)', 30),
(11, 27, 'Plan de mercado', 25),
(12, 27, 'Análisis técnico', 30),
(13, 27, 'Análisis económico y financiero', 25),
(14, 27, 'Atención al cliente', 20),
(15, 27, 'Espíritu emprendedor', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `cedula` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `tipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`cedula`, `password`, `nombre`, `correo`, `tipoUsuario`) VALUES
('1', '44388d729a8625439cbc027789167c1c', 'Gabriela', 'gaby@gmail.com', 2),
('321', 'bcfa46440609c8d27740964e2bd42295', 'Juan Perez Perez', 'juanperez@gmail.com', 1),
('80', 'fea62758abad18f2b5cc3fec130ec2b4', 'armando', 'desarrolloctpc@gmail.com', 1),
('5', '7b852820e86a27a38e643326d131e2e1', 'Mario', 'mario@gmail.com', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(255) NOT NULL,
  `idIdentificador` int(100) NOT NULL,
  `codigo` varchar(15) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `valorPregunta` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `idIdentificador`, `codigo`, `descripcion`, `categoria`, `valorPregunta`) VALUES
(17, 1, '26', 'Evidencia fase previa o de exploración para plantear el problema.', '26', 2),
(18, 1, '26', 'Claridad en la definición del problema.', '26', 2),
(19, 1, '26', 'El estudiante identifica el impacto del proyecto.', '26', 2),
(20, 1, '26', 'Los objetivos están bien definidos.', '26', 2),
(21, 1, '26', 'Definición de los criterios que fundamente la solución propuesta.', '26', 2),
(22, 2, '26', 'El proyecto responde a una necesidad evidente.', '26', 3),
(23, 2, '26', 'Se identifican los grupos beneficiados.', '26', 3),
(24, 2, '26', 'El proyecto es factible de ser realizado.', '26', 3),
(25, 2, '26', 'Es aplicable y tiene un buen nivel de uso potencial.', '26', 3),
(26, 2, '26', 'Realiza un aporte en el campo de estudio.', '26', 3),
(27, 2, '26', 'Identifica el impacto potencial en el campo de la ciencia, sociedad, economía o el ambiente.', '26', 3),
(28, 3, '26', 'Demuestran que el desarrollo es de elaboración propia', '26', 2),
(29, 3, '26', 'El proyecto es una innovación y lo demuestra.', '26', 2),
(30, 3, '26', 'Muestra actualidad tecnológica ó nuevo conocimiento científico o técnico.', '26', 2),
(31, 3, '26', 'Identificación de una solución ', '26', 2),
(32, 3, '26', 'Desarrollo de un prototipo/modelo/producto', '26', 2),
(33, 4, '26', 'Demuestra apropiación (familiaridad y capacidad de manejo)  de los contenidos  que fundamentan el proyecto', '26', 2),
(34, 4, '26', 'Define los conceptos que utiliza de manera clara y precisa.', '26', 2),
(35, 4, '26', 'Presenta una síntesis apropiada de lo que se conoce del tema en estudio.', '26', 2),
(36, 4, '26', 'Presenta diseños y esquemas claros y correctos.', '26', 2),
(37, 4, '26', 'Fundamenta todas las demostraciones y cálculos necesarios.', '26', 2),
(38, 4, '26', 'Muestra documentación de apoyo (referencias información extraída)', '26', 2),
(39, 5, '26', 'Selección de instrumentos (modelos, programas de computación, equipos y otros) y métodos adecuados.', '26', 3),
(40, 5, '26', 'Describe la metodología utilizada para la obtención de posibles soluciones.', '26', 3),
(41, 5, '26', 'Cumplimiento de las etapas planificadas en el diseño del proyecto.', '26', 3),
(42, 5, '26', 'Hace un óptimo uso de los recursos.', '26', 3),
(43, 5, '26', 'Describe las metodologías de evaluación y perfeccionamiento.', '26', 3),
(44, 5, '26', 'Identifica posibles puntos de riesgo.', '26', 3),
(45, 6, '26', ' Coherencia de los objetivos con los resultados obtenidos.', '26', 2),
(46, 6, '26', 'Realiza análisis de los resultados.', '26', 2),
(47, 6, '26', 'Los resultados (o el producto) tienen aplicación o utilidad en la vida real.', '26', 2),
(48, 6, '26', 'Congruencia de los datos, tablas, diagramas y gráficos con el tema investigado.', '26', 2),
(49, 6, '26', 'Sugiere posibles aplicaciones del desarrollo obtenido. (Innovación)', '26', 2),
(50, 6, '26', 'Coherencia de los diseños y esquemas con respecto al prototipo/modelo/producto presentado.', '26', 2),
(51, 6, '26', 'Prototipo/modelo/producto ha sido probado en varias condiciones/ensayos.', '26', 2),
(52, 6, '26', 'Prototipo/modelo/producto demuestra conocimientos de ingeniería y coherencia.', '26', 2),
(53, 7, '26', 'El cartel apoya la comunicación en forma fluida.', '26', 2),
(54, 7, '26', 'El material expuesto tiene relación con el trabajo de investigación.', '26', 2),
(55, 7, '26', 'Claridad de las ideas durante la presentación.', '26', 2),
(56, 7, '26', 'Presenta  una organización lógica de las ideas (contenido claro y específico)', '26', 2),
(57, 7, '26', 'Capacidad de síntesis para llevar a cabo la comunicación.', '26', 2),
(58, 7, '26', 'La presentación refleja el esfuerzo coordinado de todos los miembros.', '26', 2),
(59, 8, '26', 'Exhibe en su stand la bitácora debidamente llena.', '26', 1),
(60, 8, '26', 'Se muestra las fechas en las que realizó experimentos.', '26', 1),
(61, 8, '26', 'Se anotan mediciones, diagramas, figuras, cuadros, dibujos', '26', 1),
(62, 8, '26', 'Se evidencia la aplicación de algún  tipo de estadística, sumas, porcentajes; entre otros', '26', 1),
(63, 9, '27', 'PROPUESTA NUEVA O RENOVADA: El producto o servicio se muestra como una propuesta nueva o renovada del mercado en el que participa.', '27', 5),
(64, 9, '27', 'METODOS DE PRODUCCIÓN: Los métodos de producción presentados se muestran novedosos comparados con lo que hay en el área de acción del proyecto', '27', 5),
(65, 9, '27', 'COMERCIALIZACION: Las formas de comercializar los productos o servicios son creativas e impactan positivamente su estancia en el mercado.', '27', 5),
(66, 9, '27', 'PROPUESTA ADMINISTRATIVA: La gestión y la organización del trabajo propone una reforma a lo que se conoce en la actualidad.', '27', 5),
(67, 9, '27', 'DIFERENCIACION: La idea en su totalidad se acompaña de un componente de creatividad e innovación que la hace ver diferente a otros proyectos ', '27', 5),
(68, 10, '27', 'PROPUESTA DE VALOR: Establece la diferenciación de su producto (bien o servicio) señalando el valor implícito y beneficios específicos del mismo, para atender a un conjunto de necesidades y deseos de la demanda.', '27', 5),
(69, 10, '27', 'SEGMENTO DE CLIENTES: Establece el(los) segmento(s) de clientes a quienes estará enfocado su negocio, describiendo en detalle  el perfil de los clientes del grupo meta.', '27', 5),
(70, 10, '27', 'RELACIÓN CON CLIENTES Y CANALES: Especifica las características del tipo de relación que quiere mantener con sus clientes, puntualizando los canales mediante los cuales dará a conocer y hará llegar su propuesta de valor a los clientes.', '27', 5),
(71, 10, '27', 'ACTIVIDADES Y RECURSOS CLAVE: Puntualiza y describe las actividades y recursos necesarios para la producción y distribución del bien o prestación del servicio.', '27', 5),
(72, 10, '27', 'ALIANZAS CLAVE: Identifica los proveedores, socios estratégicos e instituciones de apoyo necesarios para desarrollar, potenciar y mejorar el modelo de negocio propuesto.', '27', 5),
(73, 10, '27', 'ESTRUCTURA DE COSTOS E INGRESOS: Resume los costos más importantes involucrados en su modelo de negocio y necesarios para crear su propuesta de valor, así como el flujo de dinero que se recibirá por la venta de bienes o prestación del servicio.', '27', 5),
(74, 11, '27', 'DESCRIPCION DE PRODUCTO: Se hace una descripción pormenorizada del producto o servicio indicando aspectos de: color, precio, empaque, tamaño, ciclo de vida.', '27', 5),
(75, 11, '27', 'JUSTIFICACIÓN DE LA DEMANDA: Justifica con datos reales la demanda del mercado, utilizando para ello encuestas o estudios  publicados sobre la actividad; determina un segmento de mercado y caracteriza a su consumidor.', '27', 5),
(76, 11, '27', 'COMPETENCIA: Hace un análisis de las fortalezas y debilidades de la competencia en comparación con su propuesta y la forma de poder aprovecharlas, determina por medio de datos concretos las cantidades de producto que se ofrecen en el mercado.', '27', 5),
(77, 11, '27', 'PROMOCIÓN, COMERCIALIZACIÓN Y DISTRIBUCIÓN: Presenta un programa de promoción y publicidad, y establece un costo que se refleja en el análisis financiero. Definición de las formas en que se venderá el bien o servicio (¿quién lo venderá, dónde se venderá?)', '27', 5),
(78, 11, '27', 'PRECIO: Establece un precio para el producto y su comportamiento en las diferentes épocas del año, describe claramente la forma en que fue fijado a partir de los factores considerados para tal fin.', '27', 5),
(79, 12, '27', 'PROCESOS: Nivel de descripción de los procedimientos a seguir para producir el bien o facilitar el servicio.', '27', 5),
(80, 12, '27', 'PRODUCCIÓN: Nivel de determinación de las cantidades a producir del producto o a prestar del servicio (por mes, por año, etc.)', '27', 5),
(81, 12, '27', 'PROVEEDURÍA: Nivel de determinación de los proveedores y las cantidades de insumos necesarias para producir y comercializar el producto o servicio', '27', 5),
(82, 12, '27', 'RECURSOS: Nivel de definición de los recursos requeridos para el proyecto (edificios, maquinaria, equipo, mobiliario, humanos, materia prima, etc.)', '27', 5),
(83, 12, '27', 'PERSONAL: Nivel de definición de la cantidad de personal que requiere el proyecto y las características del mismo.', '27', 5),
(84, 12, '27', 'ORGANIZACIÓN: Nivel de definición de puestos, departamentos o unidades que se requieren para la operación administrativa y productiva del proyecto.', '27', 5),
(85, 13, '27', 'INGRESOS: Describe y fundamenta de manera mensual y anual cuales serían los ingresos del proyecto.', '27', 5),
(86, 13, '27', 'COSTOS Y GASTOS: Describe detalladamente con precio y cantidades cuales serían los egresos del proyecto.', '27', 5),
(87, 13, '27', 'FINANCIAMIENTO: Determina la forma en la cual será financiada la propuesta, ya sea con recursos propios o entidades financieras, y lo refleja en su flujo de caja.', '27', 5),
(88, 13, '27', 'INDICADORES FINANCIEROS: Presentación de indicadores financieros (al menos Relación Beneficio Costo [B/C], Tasa Interna de Retorno [TIR] y Valor Actual Neto [VAN]) a partir del flujo de caja proyectado y supuestos debidamente establecidos.', '27', 5),
(89, 13, '27', 'RENTABILIDAD: Muestra aspectos de impacto económico a nivel regional o nacional, generando ingresos para los proponentes que justifique la inversión tanto en valores absolutos como relativos.', '27', 5),
(90, 14, '27', 'Trato amable, respetuoso y cortés a los visitantes, diferenciado y propio de la propuesta de negocios.', '27', 5),
(91, 14, '27', 'Se permite la accesibilidad al producto y a la información, brindando material técnico, promocional y de contacto pertinente y de calidad.', '27', 5),
(92, 14, '27', 'Atentos  a la llegada y atención del público, se presentan de forma natural y oportuna, a la vez que procuran conocer e identificar al visitante.', '27', 5),
(93, 14, '27', 'Muestran el producto con agrado, esmero y entusiasmo (actitud positiva), demostrando un claro dominio de la temática y su evidente participación en la preparación del proyecto. además reciben las recomendaciones de forma proactiva y respetuosa.', '27', 5),
(94, 15, '27', 'Manifiesta necesidad de logro,  independencia y de construcción de la propuesta, así como interés, gusto y pasión por lo que hace.', '27', 5),
(95, 15, '27', 'Manifiesta confianza y optimismo en sus capacidades y posibilidades de éxito, a la vez que considera y calcula factores de riesgo, e imagina, genera y propone ideas y soluciones originales, creativas y fundamentadas.', '27', 5),
(96, 15, '27', 'Manifiesta una visión clara de su proyecto, apoyada por ideas concretas, logrando evidenciar una capacidad de persuasión que se basa en su motivación, impulso, preparación (conocimiento) y habilidad.', '27', 5),
(97, 15, '27', 'Alta capacidad de comunicación, y disposición a recibir y solicitar consejo o ayuda, por lo que reacciona con tolerancia, flexibilidad y respeto hacia las ideas y puntos de vista de otros.', '27', 5),
(98, 15, '27', 'Capacidad de síntesis para llevar a cabo la comunicación.', '27', 5),
(99, 15, '27', 'La presentación refleja el esfuerzo coordinado de todos los miembros.', '27', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `integrantes` varchar(150) NOT NULL,
  `categoria` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `nombre`, `descripcion`, `integrantes`, `categoria`) VALUES
(1, 'Safer Inc', 'Red Social Amigable con el Medio Ambiente', 'Kevin Z, Enrique R', 'Expo-Ingenieria'),
(2, 'Defender', 'Defender', 'Helio y Juan', 'Semillitas'),
(3, 'CalisFit', 'Calistenia', 'Steven y Byron', 'Expo-Joven');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombreUsuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipoUsuario` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombreUsuario`, `password`, `nombre`, `tipoUsuario`) VALUES
('juan', 'd0ad533973bbe3124eee856b3ecbf545', 'Juan Perez Perez', 1),
('superUser', 'd0ad533973bbe3124eee856b3ecbf545', 'Armando', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `identificador`
--
ALTER TABLE `identificador`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nombreUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `identificador`
--
ALTER TABLE `identificador`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
