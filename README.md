Si el cliente está autenticado, se visualizan más pestañas en el navegador y en la de panadería,  se visualiza el precio. La idea es que visualice el nombre del producto y el precio de la tabla productos.
Hay un archivo panaderia2 que está en web_publica con un campo para introducir la cantidad pero no funciona

Las pestañas de facturas y clientes están copiadas del git con alguna variación. He quitado el botón Editar y el de añadir, va a un formulario y he deshabilitado el botón de guardar. Volver a la página con el navegador.

La pestaña empleados está generada sin vue. Funciona bien.

La pestaña pedidos visualiza los pedidos si los hay. Hay un botón para hacer pedido que lleva al formulario y he deshabilitado el botón de guardar. Volver a la página con el navegador.

La de productos, presenta la tabla de productos y en cantidad se puede modificar, pero la guarda en la tabla productos. La idea es que generara una línea de pedido.
La tabla generé y la rellené phpMyAdmin. Adjunto productos.sql:

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `articulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `cantidad` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `created_at`, `updated_at`, `articulo`, `slug`, `precio`, `cantidad`) VALUES
(1, '2021-05-19 04:12:15', '2021-05-24 07:19:12', 'Barra', '', 0.85, 10),
(2, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Barra rústica', '', 1.50, 0),
(3, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Barra de integral', '', 1.20, 0),
(4, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Barra de espiga', '', 1.00, 0),
(5, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Pan sobao', '', 1.00, 0),
(6, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Pan de centeno y pasas', '', 2.00, 0),
(7, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Pan de molde', '', 1.20, 0),
(8, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Hogaza', '', 1.80, 0),
(9, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Hogaza integral', '', 2.50, 0),
(10, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Panecillo', '', 0.50, 0),
(11, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Tarta Sacher', '', 15.00, 0),
(12, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Tarta de queso', '', 10.00, 0),
(13, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Tarta tres chocolates', '', 12.00, 0),
(14, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Croisant', '', 1.00, 0),
(15, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Madalena', '', 1.50, 0),
(16, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Napolitana', '', 1.20, 0),
(17, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Palmera', '', 1.00, 0),
(18, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Tarta de manzana', '', 8.00, 0),
(19, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Empanada de carne', '', 3.50, 0),
(20, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Empanada de atún', '', 3.50, 0),
(21, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Empanada mini de verdura', '', 1.20, 0),
(22, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'Empanada mini de carne', '', 1.50, 0),
(23, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'articulo', '', 0.00, 0),
(24, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'articulo', '', 0.00, 0),
(25, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'articulo', '', 0.00, 0),
(26, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'articulo', '', 0.00, 0),
(27, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'articulo', '', 0.00, 0),
(28, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'articulo', '', 0.00, 0),
(29, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'articulo', '', 0.00, 0),
(30, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'articulo', '', 0.00, 0),
(31, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'articulo', '', 0.00, 0),
(32, '2021-05-19 04:12:15', '2021-05-19 04:12:15', 'articulo', '', 0.00, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);
