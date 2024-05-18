# Proyecto-Mecapp
## Problemática:

La problemática principal es que el taller no tienen ningún software que ayude al taller a ser más eficientes, o delegar más cosas a una aplicación web, ya que no
cuenta con nada de eso, así que la intención es realizar que el taller se vuelva más eficiente y se adapte a las tecnologías modernas.
## Alcance:

El alcance del proyecto será para los clientes del taller, así mismo como los mismos trabajadores, entonces será un alcance reducido pero muy enfocado en las
personas que verán mejorada su experiencia con esta aplicación web.
## Justificación:

Implementar una aplicación web en el taller ayudara a cubrir la necesidad de mejorar en la eficiencia y mejorar la experiencia de los clientes. Ya que al poder
hacer citas, que mande la alerta de que el auto está terminado crea un sistema más eficiente incluso para el taller mecánico. El poder implementar un software mejora
la comunicación entre la empresa y el cliente.

## Modelo Relacional

![](https://github.com/Quetzal345/Proyecto-Mecapp/blob/7d883d97c4da9b9f647538b1fda5b59c2ff4f3e5/Capturas/Modelo_Relacional.png)

## Diccionario de Datos

![](https://github.com/Quetzal345/Proyecto-Mecapp/blob/7d883d97c4da9b9f647538b1fda5b59c2ff4f3e5/Capturas/Diccionario_Datos.png)

## Diagrama de Clases

![](https://github.com/Quetzal345/Proyecto-Mecapp/blob/7d883d97c4da9b9f647538b1fda5b59c2ff4f3e5/Capturas/Diagrama_clases.png)

# Conexión de la interfaz con la base de datos 

## Configuración de SQL

![](https://github.com/Quetzal345/Proyecto-Mecapp/blob/7d883d97c4da9b9f647538b1fda5b59c2ff4f3e5/Capturas/SQL.png)

## Conexión código 

![](https://github.com/Quetzal345/Proyecto-Mecapp/blob/7d883d97c4da9b9f647538b1fda5b59c2ff4f3e5/Capturas/Conecta1.png)

![](https://github.com/Quetzal345/Proyecto-Mecapp/blob/7d883d97c4da9b9f647538b1fda5b59c2ff4f3e5/Capturas/Conecta2.png)

# Recorrido por la aplicación web

![](https://github.com/Quetzal345/Proyecto-Mecapp/blob/6bf6a6961e69683eb4498e76089cae03317f9671/Capturas/Funcion8.png)

## Pagina principal 

Esta es la pagina principal del usuario, antes de tener una cuenta, solo muestra cosas simples.

 ![](https://github.com/Quetzal345/Proyecto-Mecapp/blob/6bf6a6961e69683eb4498e76089cae03317f9671/Capturas/Funcion2.png)

 ## Formulario de creación de cuenta

 Una vez que el usario da click, en el apartado de usarios, lo dirige a un formulario para que crear su cuenta y desbloquear mas funciones de la aplicacion.

 ![](https://github.com/Quetzal345/Proyecto-Mecapp/blob/6bf6a6961e69683eb4498e76089cae03317f9671/Capturas/Funcion3.png)

 ## Citas

 Una vez que el usario tiene su cuenta, accede a otro apartado donde tiene nuevas funciones, la cual es el poder agendar citas para el taller.

 ![](https://github.com/Quetzal345/Proyecto-Mecapp/blob/6bf6a6961e69683eb4498e76089cae03317f9671/Capturas/Funcion5.png)

 ## Ubicación 

 Tambien el usuario puede acceder a la ubicacion del taller con un simple click.

 ![](https://github.com/Quetzal345/Proyecto-Mecapp/blob/6bf6a6961e69683eb4498e76089cae03317f9671/Capturas/Funcion7.png)

## Todas las funciones que tiene la pagina web para un usuario 

- Creación de cuenta
- Agenda de citas
- visualizar la ubicación

# Interfaz grafica del Super Usuario

## Inicio de sesión de super usuario

Como se puede observar en la imagen, este es el inicio de sesion del super usario, que ademas cuenta con 
cloudflare.
Cloudflare utiliza una red global de servidores distribuidos para almacenar en caché el contenido estático de un sitio web, como imágenes, videos, archivos CSS y JavaScript. Esto ayuda a acelerar la carga de las páginas web al servir el contenido desde el servidor más cercano al usuario, lo que reduce la latencia y mejora la experiencia del usuario.

![](https://github.com/Quetzal345/Proyecto-Mecapp/blob/70f8157df1170eed1ee273cba08b34a711e60e7e/Capturas/Super1.png)

## Pagina de inicio del super usuario 

![](https://github.com/Quetzal345/Proyecto-Mecapp/blob/70f8157df1170eed1ee273cba08b34a711e60e7e/Capturas/Super2.png)

## Alertas 

Las alertas funcionan para mandar los correos automaticos a los usuarios que registraron citas en el taller, para que sepan que pueden recoger su auto.

![](https://github.com/Quetzal345/Proyecto-Mecapp/blob/70f8157df1170eed1ee273cba08b34a711e60e7e/Capturas/Super3.png)

## Citas

En este apartado el super usuario puede observar todas las citas que se han realizado por parte de los usuarios.

![](https://github.com/Quetzal345/Proyecto-Mecapp/blob/70f8157df1170eed1ee273cba08b34a711e60e7e/Capturas/Super4.png)

## Inventario 

En este apartado el super usuario puede ver todos los productos que tiene en el taller, tambien se puede eliminar productos y editarlos.

![](https://github.com/Quetzal345/Proyecto-Mecapp/blob/70f8157df1170eed1ee273cba08b34a711e60e7e/Capturas/Super6.png)

## Todas las funciones que tiene la pagina web Super usuario

- Alertas
- Citas 
- Inventario
- Agregar o eliminar super usarios

## Backend

## Diagrama de componentes

![](https://github.com/Quetzal345/Proyecto-Mecapp/blob/310dc18fe11ebfb097ccf18342297169513abde5/Capturas/Diagrama1.png)


## Diagrama de despliegue 

![](https://github.com/Quetzal345/Proyecto-Mecapp/blob/310dc18fe11ebfb097ccf18342297169513abde5/Capturas/Diagrama2.png)

¿Que es un microservicio?

Un microservicio es un estilo arquitectónico en el que una aplicación se estructura como una colección de servicios pequeños, independientes y autónomos. Cada microservicio se centra en una funcionalidad específica del negocio.

Micro servicios en Mecapp

- Servicio de Usuarios: Para gestionar el registro y autenticación de usuarios.
- Servicio de Citas: Para gestionar la creación, modificación y cancelación de citas.
- Servicio de Notificaciones: Para enviar recordatorios y notificaciones de citas a los usuarios.

~~~
# Use the official PHP image
FROM php:8.1-apache

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Copy application files
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Expose port 80
EXPOSE 80

~~~

Usa la imagen base php:8.1-apache, que ya tiene PHP 8.1 y Apache instalados.
Instala las extensiones pdo y pdo_mysql necesarias para que PHP pueda interactuar con bases de datos MySQL.
Copia los archivos de la aplicación PHP al directorio donde Apache los puede servir (/var/www/html/).
Establece /var/www/html/ como el directorio de trabajo dentro del contenedor.
Expone el puerto 80 para que la aplicación web pueda ser accedida desde fuera del contenedor.

## Automatización de las alertas a los clientes 

https://github.com/Quetzal345/Proyecto-Mecapp/assets/157257015/a447256f-5dc5-40e5-8a8a-d841c1f5f7e2




## Mejoras para el futuro 

- Implementación de IA y Machine Learning: Utilizar tecnologías de inteligencia artificial y aprendizaje automático para predecir problemas comunes en los vehículos basados en el historial de servicios y patrones de uso. Esto puede ayudar a los clientes a evitar problemas mayores y mejorar la eficiencia del taller.
- Optimización del Inventario: Integrar herramientas de análisis de inventario y predicción de demanda para ayudar a los administradores del taller a gestionar mejor el stock de piezas y materiales. Esto puede incluir alertas automáticas cuando el inventario esté bajo y recomendaciones para reordenar productos.
- Sistema de Evaluación y Feedback: Añadir un sistema de evaluación y comentarios para que los clientes puedan dejar feedback sobre los servicios recibidos. Esto ayudará al taller a mejorar la calidad de sus servicios y a entender mejor las necesidades y expectativas de sus clientes.

## Como mejoraria Mecapp con Istio
- Seguridad
Autenticación y Autorización:

Istio proporciona autenticación mutua TLS (mTLS) entre servicios para asegurar la comunicación interna.
Implementa políticas de autorización para controlar qué servicios pueden comunicarse entre sí, mejorando la seguridad de la aplicación.
Encriptación del Tráfico:
Todo el tráfico entre servicios puede estar encriptado, asegurando que los datos transmitidos estén protegidos contra ataques de interceptación.
- Observabilidad
Monitoreo y Telemetría:

Istio recopila métricas detalladas, logs y trazas distribuidas de los servicios en la malla, lo que facilita la supervisión del rendimiento y la detección de problemas.
Integraciones con Prometheus, Grafana y Jaeger proporcionan visualizaciones y análisis avanzados del comportamiento de la aplicación.
Kiali para la Visualización de la Malla:

Kiali permite visualizar las relaciones entre servicios y el flujo de tráfico dentro de la malla de servicios, proporcionando una visión clara de la arquitectura y los posibles puntos de fallo.

Permite realizar pruebas de resiliencia mediante la inyección de fallos, como la latencia artificial o la interrupción de servicios, para verificar cómo se comporta la aplicación bajo condiciones adversas.
- Despliegue y Actualización de Servicios
Despliegues Canarios y Blue/Green:
Facilita la implementación de estrategias de despliegue como canary releases y blue/green deployments, minimizando el riesgo de interrupciones durante la actualización de servicios.
Rollouts Graduales:
Permite realizar rollouts graduales de nuevas versiones de servicios, monitoreando el rendimiento y retrocediendo en caso de problemas.
- Simplificación de la Gestión de Servicios
Configuración Centralizada:

Proporciona una capa de abstracción que centraliza la configuración de políticas de red, seguridad y observabilidad, simplificando la gestión y reduciendo la complejidad operativa.
Facilidad para Implementar Microservicios:

Facilita la adopción de una arquitectura de microservicios, permitiendo una mejor modularidad y escalabilidad de la aplicación.

Integrar Istio en MecApp transformará significativamente la forma en que gestionas y operas tu aplicación. Mejorarás la seguridad, la observabilidad, la resiliencia y la eficiencia de la aplicación, lo que se traducirá en una mejor experiencia tanto para los clientes como para los trabajadores del taller. Además, la capacidad de gestionar despliegues y actualizaciones de manera segura y sin interrupciones permitirá a tu equipo de desarrollo entregar nuevas funcionalidades y mejoras con mayor confianza y velocidad.



