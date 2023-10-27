<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla Comparativa de Aplicaciones y Herramientas de Desarrollo</title>
    <!-- Incluye jQuery (ajusta la ruta o utiliza una CDN) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Estilo para el botón de tabla comparativa */
        #botonComparativo {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Estilo para el botón de configuración del entorno de desarrollo */
        #botonConfiguracion {
            background-color: #2980b9;
            color: #fff;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 20px;
        }

        /* Estilo para el botón al pasar el ratón por encima */
        #botonComparativo:hover, #botonConfiguracion:hover {
            background-color: #2980b9;
        }

        /* Estilo para la tabla comparativa (inicialmente oculta) */
        #tablaComparativa {
            display: none;
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }

        /* Estilo para las celdas de la tabla */
        #tablaComparativa th, #tablaComparativa td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        /* Estilo para las filas impares de la tabla */
        #tablaComparativa tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        #tablaDesarrollo {
            display: none;
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }

        /* Estilo para las celdas de la tabla */
        #tablaDesarrollo th, #tablaDesarrollo td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        /* Estilo para las filas impares de la tabla */
        #tablaDesarrollo tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        #tablaParametros {
            display: none;
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }

        /* Estilo para las celdas de la tabla */
        #tablaParametros th, #tablaParametros td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        /* Estilo para las filas impares de la tabla */
        #tablaParametros tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <button id="botonComparativo">Tabla Comparativa</button>
    <button id="botonConfiguracion">Configuración del Entorno de Desarrollo</button>

    <table id="tablaComparativa">
        <thead>
            <tr>
                <th>Categoría</th>
                <th>Definición</th>
                <th>Características</th>
                <th>Ventajas</th>
                <th>Desventajas</th>
                <th>Herramientas de Desarrollo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Aplicaciones Web</td>
                <td>Aplicaciones accesibles a través de navegadores web.</td>
                <td>Accesibles desde cualquier dispositivo con un navegador, no requieren instalación.</td>
                <td>Multiplataforma, fácil de actualizar, no ocupa espacio en el dispositivo del usuario.</td>
                <td>Limitaciones de rendimiento y acceso a hardware.</td>
                <td>HTML, CSS, JavaScript, frameworks como Angular o React.</td>
            </tr>
            <tr>
                <td>Aplicaciones Móviles Nativas</td>
                <td>Aplicaciones diseñadas específicamente para una plataforma (iOS, Android, etc.) y escritas en el lenguaje nativo de esa plataforma.</td>
                <td>Acceso completo a características del dispositivo, alto rendimiento.</td>
                <td>Interfaz de usuario fluida, aprovecha al máximo las capacidades del dispositivo.</td>
                <td>Desarrollo y mantenimiento costosos, no son multiplataforma.</td>
                <td>Xcode (iOS), Android Studio (Android).</td>
            </tr>
            <tr>
                <td>Aplicaciones Móviles Multiplataforma</td>
                <td>Aplicaciones desarrolladas con una base de código común que se ejecuta en múltiples plataformas.</td>
                <td>Reutilización de código, costo de desarrollo reducido.</td>
                <td>Compatibilidad con múltiples plataformas, actualizaciones más rápidas.</td>
                <td>Rendimiento inferior a las nativas en algunos casos.</td>
                <td>React Native, Flutter, Xamarin.</td>
            </tr>
            <tr>
                <td>Progressive Web Apps (PWAs)</td>
                <td>Aplicaciones web que pueden funcionar como aplicaciones móviles.</td>
                <td>Funcionan offline, acceso a hardware limitado, instalación opcional en dispositivos móviles.</td>
                <td>Menos espacio de almacenamiento, actualizaciones automáticas.</td>
                <td>Menos acceso al hardware que las nativas, limitaciones en algunas plataformas.</td>
                <td>Frameworks como Angular, React o Vue.js.</td>
            </tr>
        </tbody>
    </table>

    <!-- Aquí puedes agregar la tabla de herramientas de desarrollo -->
    <table id="tablaDesarrollo">
        <thead>
            <tr>
                <th>Herramienta</th>
                <th>Definición</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>HTML</td>
                <td>Lenguaje de marcado utilizado para crear la estructura de las páginas web.</td>
            </tr>
            <tr>
                <td>CSS</td>
                <td>Lenguaje de estilo utilizado para dar formato y diseño a las páginas web.</td>
            </tr>
            <tr>
                <td>JavaScript</td>
                <td>Lenguaje de programación utilizado para agregar interactividad a las páginas web.</td>
            </tr>
            <tr>
                <td>Frameworks</td>
                <td>Conjunto de herramientas y bibliotecas que facilitan el desarrollo de aplicaciones.</td>
            </tr>
            <tr>
                <td>Angular</td>
                <td>Framework de JavaScript para construir aplicaciones web.</td>
            </tr>
            <tr>
                <td>React Native</td>
                <td>Framework para desarrollar aplicaciones móviles multiplataforma utilizando React.</td>
            </tr>
            <tr>
                <td>Xcode (iOS)</td>
                <td>Entorno de desarrollo integrado (IDE) para crear aplicaciones iOS.</td>
            </tr>
            <tr>
                <td>Android Studio (Android)</td>
                <td>Entorno de desarrollo integrado (IDE) para crear aplicaciones Android.</td>
            </tr>
            <tr>
                <td>Flutter</td>
                <td>Framework de Google para crear aplicaciones móviles multiplataforma con una base de código única.</td>
            </tr>
            <tr>
                <td>Xamarin</td>
                <td>Plataforma para desarrollar aplicaciones móviles multiplataforma utilizando C# y .NET.</td>
            </tr>
            <tr>
                <td>Vue.js</td>
                <td>Framework de JavaScript progresivo utilizado para construir interfaces de usuario interactivas.</td>
            </tr>
        </tbody>
    </table>
    <table id="tablaParametros">
        <thead>
            <tr>
                <th>Herramienta</th>
                <th>Parámetros</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>HTML</td>
                <td>
                    <ul>
                        <li>Lenguaje de marcado</li>
                        <li>Elementos HTML</li>
                        <li>Atributos</li>
                        <li>Sintaxis</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>CSS</td>
                <td>
                    <ul>
                        <li>Lenguaje de estilo</li>
                        <li>Propiedades CSS</li>
                        <li>Selección de elementos</li>
                        <li>Estilos de página</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>JavaScript</td>
                <td>
                    <ul>
                        <li>Lenguaje de programación</li>
                        <li>Variables y tipos de datos</li>
                        <li>Funciones</li>
                        <li>Eventos</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Frameworks</td>
                <td>
                    <ul>
                        <li>Bibliotecas y herramientas</li>
                        <li>Patrones de diseño</li>
                        <li>Reutilización de código</li>
                        <li>Facilitan el desarrollo</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Angular</td>
                <td>
                    <ul>
                        <li>Framework de JavaScript</li>
                        <li>Componentes</li>
                        <li>Enrutamiento</li>
                        <li>Gestión de estado</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>React Native</td>
                <td>
                    <ul>
                        <li>Framework para aplicaciones móviles</li>
                        <li>Componentes reutilizables</li>
                        <li>Interfaz de usuario</li>
                        <li>Acceso a API nativas</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Xcode (iOS)</td>
                <td>
                    <ul>
                        <li>Entorno de desarrollo integrado (IDE)</li>
                        <li>Compilación y depuración</li>
                        <li>Simuladores de iOS</li>
                        <li>Interfaz de diseño</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Android Studio (Android)</td>
                <td>
                    <ul>
                        <li>Entorno de desarrollo integrado (IDE)</li>
                        <li>Compilación y depuración</li>
                        <li>Emuladores de Android</li>
                        <li>Interfaz de diseño</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Flutter</td>
                <td>
                    <ul>
                        <li>Framework de desarrollo móvil</li>
                        <li>Widgets personalizables</li>
                        <li>Compilación nativa</li>
                        <li>Soporte multiplataforma</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Xamarin</td>
                <td>
                    <ul>
                        <li>Plataforma de desarrollo móvil</li>
                        <li>Utiliza C# y .NET</li>
                        <li>Reutilización de código</li>
                        <li>Compatibilidad multiplataforma</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Vue.js</td>
                <td>
                    <ul>
                        <li>Framework de JavaScript progresivo</li>
                        <li>Componentes reactivos</li>
                        <li>Interfaz de usuario dinámica</li>
                        <li>Enfoque gradual</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>

    <script>
        $(document).ready(function() {
            // Al hacer clic en el botón de tabla comparativa, mostramos u ocultamos la tabla
            $("#botonComparativo").click(function() {
                $("#tablaComparativa").toggle();
            });

            // Al hacer clic en el botón de configuración del entorno de desarrollo, mostramos u ocultamos la tabla de desarrollo
            $("#botonConfiguracion").click(function() {
                $("#tablaDesarrollo").toggle();
            });

            $("#botonConfiguracion").click(function() {
                $("#tablaParametros").toggle();
            });
        });
    </script>
</body>
</html>
