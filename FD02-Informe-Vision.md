<center>

[comment]: <img src="./media/media/image1.png" style="width:1.088in;height:1.46256in" alt="escudo.png" />

![./media/media/image1.png](./media/logo-upt.png)

**UNIVERSIDAD PRIVADA DE TACNA**

**FACULTAD DE INGENIERIA**

**Escuela Profesional de Ingeniería de Sistemas**

**Proyecto *"Plataforma de Pruebas Automatizadas para APIs y Web con Análisis Personalizado"***

Curso: *Calidad y Pruebas de Software*

Docente: *Mag. Patrick Cuadros Quiroga*

Integrantes:

***Ayala Ramos, Carlos Daniel (2022074266)***<br>
***Salas Jimenez, Walter Emmanuel (2022073896)***<br>
***Akhtar Oviedo, Ahmed Hasan (2022074261)***

**Tacna – Perú**

***2025***

**  
**
</center>
<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

|CONTROL DE VERSIONES||||||
| :-: | :- | :- | :- | :- | :- |
|Versión|Hecha por|Revisada por|Aprobada por|Fecha|Motivo|
|1\.0|MPV|ELV|ARV|10/10/2020|Versión Original|












**Sistema *Plataforma de Pruebas Automatizadas para APIs y Web con Análisis Personalizado***

**Documento de Visión**

**Versión *{1.0}***
**

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

|CONTROL DE VERSIONES||||||
| :-: | :- | :- | :- | :- | :- |
|Versión|Hecha por|Revisada por|Aprobada por|Fecha|Motivo|
|1\.0|MPV|ELV|ARV|10/10/2020|Versión Original|


<div style="page-break-after: always; visibility: hidden">\pagebreak</div>


**INDICE GENERAL**
#
[1.	Introducción](#_Toc52661346)

1.1	Propósito

El propósito de este sistema es proporcionar una plataforma automatizada que permita realizar pruebas en APIs y sitios web con análisis personalizado. El sistema se encargará de realizar consultas según diferentes configuraciones, almacenar los resultados y generar reportes detallados para los clientes.


1.2	Alcance

El sistema permitirá a los usuarios ingresar una URL (de una API o una página web) para ejecutar pruebas automatizadas basadas en distintas opciones de consulta. Para APIs, se realizarán consultas en función de configuraciones específicas. Para páginas web, se usará web scraping para identificar y completar formularios con datos aleatorios.


1.3	Definiciones, Siglas y Abreviaturas

- **API**: Interfaz de Programación de Aplicaciones.
- **Web Scraping**: Técnica de extracción de datos de páginas web de manera automatizada.
- **IP**: Dirección de Protocolo de Internet.

1.4	Referencias

Se usarán herramientas y estándares actuales para la automatización de pruebas, asegurando confiabilidad y seguridad.

1.5	Visión General

El documento detalla las funcionalidades clave del sistema, sus usuarios objetivo y los beneficios que ofrecerá.


[2.	Posicionamiento](#_Toc52661347)

2.1	Oportunidad de negocio

Las empresas necesitan validar sus APIs y sitios web para garantizar su correcto funcionamiento en diferentes condiciones. Este sistema automatizado facilita las pruebas y análisis sin intervención manual.

2.2	Definición del problema

Actualmente, las pruebas de APIs y sitios web requieren procesos manuales extensos y sujetos a errores. Nuestro sistema automatiza estas pruebas, reduciendo el tiempo de ejecución y proporcionando reportes detallados.

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

[3.	Descripción de los interesados y usuarios](#_Toc52661348)

3.1	Resumen de los interesados

Los principales interesados incluyen desarrolladores, testers y empresas que necesiten validar sus plataformas digitales.

3.2	Resumen de los usuarios

Los usuarios podrán ejecutar pruebas automatizadas con diferentes configuraciones de IP y obtener reportes detallados.

3.3	Entorno de usuario

El sistema operará en una plataforma web accesible desde cualquier dispositivo con conexión a Internet.

3.4	Perfiles de los interesados

Desarrolladores, testers y gerentes de TI.

3.5	Perfiles de los Usuarios

Personas encargadas de validar APIs y sitios web en distintas condiciones de prueba.

3.6	Necesidades de los interesados y usuarios

- Pruebas automatizadas sin intervención manual.
- Configuración flexible de parámetros de prueba.
- Reportes detallados con análisis personalizado.


[4.	Vista General del Producto](#_Toc52661349)

4.1	Perspectiva del producto

El sistema permitirá evaluar APIs y sitios web de manera automatizada según configuraciones específicas.

4.2	Resumen de capacidades

1. El cliente inserta la URL de la API o sitio web.
2. El sistema ejecuta las pruebas con diferentes configuraciones.
   - Si es una API, realiza consultas con distintas opciones de IP y región.
   - Si es una página web, usa web scraping para llenar formularios y analizar la carga de datos.
3. Se almacenan los resultados en la base de datos.
4. Se envía un correo electrónico con un reporte detallado en PDF.
5. El cliente puede consultar su historial de pruebas en la plataforma.
   
4.3	Suposiciones y dependencias

El sistema dependerá de acceso estable a Internet y de la disponibilidad de las APIs y páginas web a evaluar.

4.4	Costos y precios

Se ofrecerán diferentes planes de suscripción según la cantidad de pruebas y funcionalidades.

4.5	Licenciamiento e instalación

El sistema será de acceso web, sin necesidad de instalación local.

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

[5.	Características del producto](#_Toc52661350)

- Ejecución de pruebas en APIs y sitios web.
- Configuración de consultas con IP única o en múltiples regiones.
- Análisis mediante web scraping para páginas web.
- Generación de reportes detallados.
  
[6.	Restricciones](#_Toc52661351)

- La plataforma solo podrá acceder a sitios y APIs públicas o con credenciales autorizadas.
- El procesamiento de pruebas dependerá de la infraestructura del servidor.
  
[7.	Rangos de calidad](#_Toc52661352)

El sistema garantizará precisión en la ejecución de pruebas y la generación de reportes.

[8.	Precedencia y Prioridad](#_Toc52661353)

Se priorizarán pruebas de estabilidad y rendimiento.

[9.	Otros requerimientos del producto](#_Toc52661354)

b) Estandares legales: Cumplimiento con normativas de privacidad de datos

c) Estandares de comunicación	](#_toc394513800)37

d) Estandaraes de cumplimiento de la plataforma	](#_toc394513800)42

e) Estandaraes de calidad y seguridad	](#_toc394513800)42

[CONCLUSIONES](#_Toc52661355)

El sistema permitirá la automatización de pruebas en APIs y sitios web, proporcionando a los clientes herramientas avanzadas de análisis.

[RECOMENDACIONES](#_Toc52661356)

Se sugiere mantener actualizadas las configuraciones de prueba para asegurar la compatibilidad con los cambios en APIs y sitios web.

[BIBLIOGRAFIA](#_Toc52661357)

Referencias a documentación técnica y estándares de calidad en pruebas de software.

[WEBGRAFIA](#_Toc52661358)

Recursos en línea sobre automatización de pruebas y análisis de APIs.

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

**<u>Informe de Visión</u>**

1. <span id="_Toc52661346" class="anchor"></span>**Introducción**

    1.1	Propósito

    1.2	Alcance

    1.3	Definiciones, Siglas y Abreviaturas

    1.4	Referencias

    1.5	Visión General

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

2. <span id="_Toc52661347" class="anchor"></span>**Posicionamiento**

    2.1	Oportunidad de negocio

    2.2	Definición del problema

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

3. <span id="_Toc52661348" class="anchor"></span>**Vista General del Producto**

    3.1	Resumen de los interesados

    3.2	Resumen de los usuarios

    3.3	Entorno de usuario

    3.4	Perfiles de los interesados

    3.5	Perfiles de los Usuarios

    3.6	Necesidades de los interesados y usuarios

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

4. <span id="_Toc52661349" class="anchor"></span>**Estudio de
    Factibilidad**

    4.1	Perspectiva del producto

    4.2	Resumen de capacidades

    4.3	Suposiciones y dependencias

    4.4	Costos y precios

    4.5	Licenciamiento e instalación

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

5. <span id="_Toc52661350" class="anchor"></span>**Características del producto**

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

6. <span id="_Toc52661351" class="anchor"></span>**Restricciones**

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

7. <span id="_Toc52661352" class="anchor"></span>**Rangos de Calidad**

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

8. <span id="_Toc52661353" class="anchor"></span>**Precedencia y Prioridad**

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

9. <span id="_Toc52661354" class="anchor"></span>**Otros requerimientos del producto**

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

<span id="_Toc52661355" class="anchor"></span>**CONCLUSIONES**

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

<span id="_Toc52661356" class="anchor"></span>**RECOMENDACIONES**

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

<span id="_Toc52661357" class="anchor"></span>**BIBLIOGRAFIA**

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

<span id="_Toc52661358" class="anchor"></span>**WEBGRAFIA**

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>
