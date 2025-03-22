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



1.2	Alcance

1.3	Definiciones, Siglas y Abreviaturas

1.4	Referencias

1.5	Visión General

[2.	Posicionamiento](#_Toc52661347)

2.1	Oportunidad de negocio

2.2	Definición del problema

[3.	Descripción de los interesados y usuarios](#_Toc52661348)

3.1	Resumen de los interesados

3.2	Resumen de los usuarios

3.3	Entorno de usuario

3.4	Perfiles de los interesados

3.5	Perfiles de los Usuarios

3.6	Necesidades de los interesados y usuarios

[4.	Vista General del Producto](#_Toc52661349)

4.1	Perspectiva del producto

4.2	Resumen de capacidades

4.3	Suposiciones y dependencias

4.4	Costos y precios

4.5	Licenciamiento e instalación

[5.	Características del producto](#_Toc52661350)

[6.	Restricciones](#_Toc52661351)

[7.	Rangos de calidad](#_Toc52661352)

[8.	Precedencia y Prioridad](#_Toc52661353)

[9.	Otros requerimientos del producto](#_Toc52661354)

b) Estandares legales

c) Estandares de comunicación	](#_toc394513800)37

d) Estandaraes de cumplimiento de la plataforma	](#_toc394513800)42

e) Estandaraes de calidad y seguridad	](#_toc394513800)42

[CONCLUSIONES](#_Toc52661355)

[RECOMENDACIONES](#_Toc52661356)

[BIBLIOGRAFIA](#_Toc52661357)

[WEBGRAFIA](#_Toc52661358)


<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

**<u>Informe de Visión</u>**

1. <span id="_Toc52661346" class="anchor"></span>**Introducción**

    1.1	Propósito
   
    La "Plataforma de Pruebas Automatizadas para APIs y Web con Análisis Personalizado"
    tiene como objetivo permitir a empresas evaluar el rendimiento y la disponibilidad de
    sus sistemas web y APIs sin necesidad de grandes inversiones. Se enfoca en brindar
    herramientas accesibles para medir velocidad, estabilidad y resistencia ante diferentes
    condiciones de tráfico.
   
    1.2	Alcance

    El sistema permite a los usuarios ingresar una URL (API o página web) y configurar pruebas 
    automatizadas. Las funcionalidades clave incluyen:

    - Para APIs: Consultas bajo parámetros personalizables (headers, payloads, autenticación, 
    frecuencia de consultas, selección de regiones).

    - Para páginas web: Aplicación de técnicas de web scraping para extraer información y
      simular interacciones de usuario.

    - Pruebas con diferentes opciones de IP:
    Consultas con IP única o desde múltiples regiones.

    - Monitoreo y registro de métricas clave:
    Tiempos de respuesta, carga y resistencia.

    - Generación de informes en PDF:
    Resultados detallados con gráficos.

- Historial de pruebas:

Comparación de tendencias y análisis de resultados a lo largo del tiempo.

    1.3	Definiciones, Siglas y Abreviaturas
        API: Interfaz de Programación de Aplicaciones.
        Web Scraping: Extracción automatizada de datos de sitios web.
        Payload: Datos enviados en una solicitud API.
        
    1.4	Referencias
        Normas de calidad ISO 25000.
        Documentación de herramientas de prueba de carga como JMeter.
        
    1.5	Visión General
        Este documento detalla las funcionalidades del sistema, sus restricciones y objetivos,
        proporcionando una visión clara para su desarrollo e implementación.
        
<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

2. <span id="_Toc52661347" class="anchor"></span>**Posicionamiento**

    2.1	Oportunidad de negocio
En un entorno digital competitivo, contar con herramientas accesibles para evaluar el rendimiento de servicios web es crucial. Muchas soluciones existentes son costosas o complejas. Nuestra plataforma busca cubrir esta necesidad proporcionando un servicio eficiente y accesible para pymes.
    2.2	Definición del problema
Las pruebas de carga y monitoreo de APIs/webs requieren infraestructura costosa y conocimientos técnicos avanzados. Este sistema ofrece una alternativa automatizada y asequible.
<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

3. <span id="_Toc52661348" class="anchor"></span>**Vista General del Producto**

    3.1	Resumen de los interesados
Empresas que ofrecen servicios digitales.
Desarrolladores y testers que necesitan evaluar APIs/webs.

    3.2	Resumen de los usuarios
Administradores de sistemas.
Analistas de calidad.
Empresas con limitaciones de presupuesto en infraestructura de pruebas.

    3.3	Entorno de usuario

    3.4	Perfiles de los interesados

    3.5	Perfiles de los Usuarios

    3.6	Necesidades de los interesados y usuarios

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

4. <span id="_Toc52661349" class="anchor"></span>**Estudio de
    Factibilidad**

    4.1	Perspectiva del producto
El sistema permite pruebas automatizadas de APIs y páginas web, generando informes detallados para evaluar su rendimiento.

    4.2	Resumen de capacidades
Simulación de tráfico desde diferentes ubicaciones.
Web scraping para evaluación de contenido dinámico.
Historial y comparación de pruebas.

    4.3	Suposiciones y dependencias
Requiere conexión a internet.
No se garantiza compatibilidad con APIs privadas sin documentación.

    4.4	Costos y precios
Plataforma gratuita con límites de uso.
Opcionalmente, suscripción premium para pruebas avanzadas.

    4.5	Licenciamiento e instalación
Código no público.
Accesible vía web sin descarga.

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

5. <span id="_Toc52661350" class="anchor"></span>**Características del producto**

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

6. <span id="_Toc52661351" class="anchor"></span>**Restricciones**
No soporta pruebas en redes internas sin acceso público.
Límite de pruebas simultáneas en la versión gratuita.

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

7. <span id="_Toc52661352" class="anchor"></span>**Rangos de Calidad**
Reportes con precisión en tiempos de respuesta.
Baja latencia en ejecución de pruebas.

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

8. <span id="_Toc52661353" class="anchor"></span>**Precedencia y Prioridad**
Priorización en estabilidad y precisión de resultados.
Optimización para pruebas de alto tráfico.

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

9. <span id="_Toc52661354" class="anchor"></span>**Otros requerimientos del producto**
Cumplimiento con regulaciones de privacidad de datos.
Seguridad en almacenamiento de resultados.

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

<span id="_Toc52661355" class="anchor"></span>**CONCLUSIONES**
El sistema facilita la evaluación del rendimiento de servicios web sin altos costos, ayudando a las empresas a garantizar su estabilidad y eficiencia.

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

<span id="_Toc52661356" class="anchor"></span>**RECOMENDACIONES**
Ampliar compatibilidad con más tipos de API.
Integrar análisis en tiempo real.

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

<span id="_Toc52661357" class="anchor"></span>**BIBLIOGRAFIA**
Documentación de pruebas de carga y monitoreo de APIs.

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

<span id="_Toc52661358" class="anchor"></span>**WEBGRAFIA**

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>
