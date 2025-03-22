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

Sistema *Plataforma de Pruebas Automatizadas para APIs y Web con Análisis Personalizado*

Informe de Factibilidad

Versión *1.0*

|CONTROL DE VERSIONES||||||
| :-: | :- | :- | :- | :- | :- |
|Versión|Hecha por|Revisada por|Aprobada por|Fecha|Motivo|
|1\.0|MPV|ELV|ARV|10/10/2020|Versión Original|

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

# **INDICE GENERAL**

[1. Descripción del Proyecto](#_Toc52661346)

[2. Riesgos](#_Toc52661347)

[3. Análisis de la Situación actual](#_Toc52661348)

[4. Estudio de Factibilidad](#_Toc52661349)

[4.1 Factibilidad Técnica](#_Toc52661350)

[4.2 Factibilidad económica](#_Toc52661351)

[4.3 Factibilidad Operativa](#_Toc52661352)

[4.4 Factibilidad Legal](#_Toc52661353)

[4.5 Factibilidad Social](#_Toc52661354)

[4.6 Factibilidad Ambiental](#_Toc52661355)

[5. Análisis Financiero](#_Toc52661356)

[6. Conclusiones](#_Toc52661357)


<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

**<u>Informe de Factibilidad</u>**

1. <span id="_Toc52661346" class="anchor"></span>**Descripción del Proyecto**

    1.1. Nombre del proyecto

    1.2. Duración del proyecto

    1.3. Descripción

       El "Sistema Automatizado de Pruebas y Análisis de URLs mediante Web Scraping y Consultas API con Configuración de IPs y
       Regiones" es una plataforma diseñada para evaluar el rendimiento y la disponibilidad de APIs y páginas web, permitiendo
       a pequeñas y medianas  empresas comprobar la capacidad de sus sistemas ante distintos escenarios sin necesidad de realizar
       grandes inversiones. En un entorno digital donde la velocidad y estabilidad de los servicios web son clave para la
       experiencia del usuario y la competitividad del negocio, contar con herramientas accesibles y efectivas para medir estos
       factores es fundamental. El sistema permite a los usuarios ingresar una URL, ya sea de una API o una página web, y
       configurarlo para realizar pruebas automatizadas. Si se trata de una API, se ejecutarán consultas bajo parámetros
       personalizables, como headers, payloads, autenticación, frecuencia de consultas y selección de regiones. Si la URL
       corresponde a una página web, el sistema aplicará técnicas de web scraping para extraer información y completar datos con
        valores aleatorios, simulando interacciones de usuario. Estas pruebas pueden realizarse con una IP única o con múltiples
       IPs desde diferentes regiones, lo que permite simular tráfico de distintas ubicaciones geográficas y analizar el
       comportamiento del sistema bajo estas condiciones. A lo largo del proceso, el sistema monitorea y registra métricas clave,
       como tiempos de respuesta y resistencia ante una alta demanda de solicitudes. Una vez finalizada la prueba, el usuario
       recibe un informe detallado en formato PDF que incluye datos esenciales y gráficos sobre el rendimiento del sitio o la API,
       ayudando a identificar posibles puntos débiles o cuellos de botella. Además, los usuarios tendrán acceso a un historial de
       pruebas para evaluar tendencias y comparar resultados a lo largo del tiempo. En un contexto donde las grandes empresas
       pueden invertir en pruebas de carga y herramientas avanzadas de monitoreo, este sistema busca ofrecer una alternativa
       accesible para empresas con presupuestos más limitados. Su enfoque es facilitar pruebas de rendimiento y disponibilidad
       sin costos elevados, contribuyendo a que más negocios puedan garantizar la estabilidad y eficiencia de sus plataformas
       digitales. Si bien el código fuente no será público, la herramienta estará disponible para su uso sin costo, tanto para
       empresas como para usuarios individuales que deseen evaluar sus propios sistemas.

    1.4. Objetivos

       1.4.1 Objetivo general
   
            Desarrollar una plataforma de pruebas automatizadas que permita a pequeñas y medianas empresas evaluar el rendimiento
            y la disponibilidad de sus APIs y páginas web, ofreciendo un análisis personalizado basado en consultas configurables
            y web scraping. La herramienta facilitará la simulación de tráfico desde distintas regiones, proporcionando reportes
            detallados con métricas clave para ayudar a los usuarios a optimizar sus sistemas sin incurrir en altos costos.


        1.4.2 Objetivos Específicos
   
            Desarrollar un sistema de pruebas automatizadas que permita a los usuarios evaluar el rendimiento y la disponibilidad
            de APIs y páginas web mediante consultas configurables y técnicas de web scraping.

            Desarrollar un sistema de monitoreo en tiempo real que registre métricas clave, como tiempos de respuesta, resistencia
            ante carga de solicitudes y posibles fallos en el servicio.

            Diseñar y generar informes en PDF que presenten de manera clara y visualmente comprensible los resultados de las
            pruebas, incluyendo métricas esenciales y gráficos informativos.

            Implementar un sistema de notificaciones por correo electrónico que informe a los usuarios cuando las pruebas hayan
            finalizado y les envíe los reportes correspondientes.

            Garantizar que la plataforma sea accesible y fácil de usar, enfocándose en una interfaz intuitiva y en procesos
            automatizados que faciliten la ejecución de pruebas sin necesidad de conocimientos técnicos avanzados.

            Ofrecer la plataforma de forma gratuita para pequeñas y medianas empresas, asegurando que el código fuente
            permanezca cerrado, pero que la herramienta esté disponible para su uso sin costo.

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

2. <span id="_Toc52661347" class="anchor"></span>**Riesgos**

    Señale los riesgos que pudieran afectar el éxito del proyecto.}*

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

3. <span id="_Toc52661348" class="anchor"></span>**Análisis de la Situación actual**

    3.1. Planteamiento del problema

            Describa antecedentes y situación actual, explicando la problemática y/o necesidad que será resuelta con el proyecto propuesto.

    3.2. Consideraciones de hardware y software

            Hardware y software posibles para la implementación, se analizara lo que existe y es alcanzable, se evaluara que tecnología se puede > utilizar en el proyecto.

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

4. <span id="_Toc52661349" class="anchor"></span>**Estudio de
    Factibilidad**

    Describir los resultados que esperan alcanzar del estudio de factibilidad, las actividades que se realizaron para preparar la evaluación de factibilidad y por quien fue aprobado.

    4.1. <span id="_Toc52661350" class="anchor"></span>Factibilidad Técnica

        El estudio de viabilidad técnica se enfoca en obtener un entendimiento de los recursos tecnológicos disponibles actualmente y su aplicabilidad a las necesidades que se espera tenga el proyecto. En el caso de tecnología informática esto implica una evaluación del hardware y software y como este puede cubrir las necesidades del sistema propuesto.

        Realizar una evaluación de la tecnología actual existente y la posibilidad de utilizarla en el desarrollo e implantación del sistema.*

        Describir acerca del hardware (equipos, servidor), software (aplicaciones, navegadores, sistemas operativos, dominio, internet, infraestructura de red física, etc.

    4.2. <span id="_Toc52661351" class="anchor"></span>Factibilidad Económica

        El propósito del estudio de viabilidad económica, es determinar los beneficios económicos del proyecto o sistema propuesto para la organización, en contraposición con los costos.
        Como se mencionó anteriormente en el estudio de factibilidad técnica wvaluar si la institución (departamento de TI) cuenta con las herramientas necesarias para la implantación del sistema y evaluar si la propuesta requiere o no de una inversión inicial en infraestructura informática.
        Se plantearán los costos del proyecto.
        Costeo del Proyecto: Consiste en estimar los costos de los recursos Humanos, materiales o consumibles y/o máquinas) directos para completar las actividades del proyecto}.*

        Definir los siguientes costos:

        4.2.1. Costos Generales

                Los costos generales son todos los gastos realizados en accesorios y material de oficina y de uso diario, necesarios para los procesos, tales como, papeles, plumas, cartuchos de impresora, marcadores, computadora etc. Colocar tabla de costos.

        4.2.2. Costos operativos durante el desarrollo 
        
                Evaluar costos necesarios para la operatividad de las actividades de la empresa durante el periodo en el que se realizara el proyecto. Los costos de operación pueden ser renta de oficina, agua, luz, teléfono, etc.

        4.2.3. Costos del ambiente

                Evaluar si se cuenta con los requerimientos técnicos para la implantación del software como el dominio, infraestructura de red, acceso a internet, etc.

        4.2.4. Costos de personal

                Aquí se incluyen los gastos generados por el recurso humano que se necesita para el desarrollo del sistema únicamente.

                No se considerará personal para la operación y funcionamiento del sistema.

                Incluir tabla que muestra los gastos correspondientes al personal.

                Indicar organización y roles. Indicar horario de trabajo del personal.

        4.2.5.  Costos totales del desarrollo del sistema

                {Totalizar costos y realizar resumen de costo final del proyecto y la forma de pago.

    4.3. <span id="_Toc52661352" class="anchor"></span>Factibilidad Operativa

        Describir los beneficios del producto y si se tiene la capacidad por parte del cliente para mantener el sistema funcionando y garantizar el buen funcionamiento y su impacto en los usuarios. Lista de interesados.

    4.4. <span id="_Toc52661353" class="anchor"></span>Factibilidad Legal

        Determinar si existe conflicto del proyecto con restricciones legales como leyes y regulaciones del país o locales relacionadas con seguridad, protección de datos, conducta de negocio, empleo y adquisiciones.

    4.5. <span id="_Toc52661354" class="anchor"></span>Factibilidad Social 

        Evaluar influencias y asuntos de índole social y cultural como el clima político, códigos de conducta y ética*

    4.6. <span id="_Toc52661355" class="anchor"></span>Factibilidad Ambiental

        Evaluar influencias y asuntos de índole ambiental como el impacto y repercusión en el medio ambiente.

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

5. <span id="_Toc52661356" class="anchor"></span>**Análisis Financiero**

    El plan financiero se ocupa del análisis de ingresos y gastos asociados a cada proyecto, desde el punto de vista del instante temporal en que se producen. Su misión fundamental es detectar situaciones financieramente inadecuadas.
    Se tiene que estimar financieramente el resultado del proyecto.

    5.1. Justificación de la Inversión

        5.1.1. Beneficios del Proyecto

            El beneficio se calcula como el margen económico menos los costes de oportunidad, que son los márgenes que hubieran podido obtenerse de haber dedicado el capital y el esfuerzo a otras actividades.
            El beneficio, obtenido lícitamente, no es sólo una recompensa a la inversión, al esfuerzo y al riesgo asumidos por el empresario, sino que también es un factor esencial para que las empresas sigan en el  mercado e incorporen nuevas inversiones al tejido industrial y social de las naciones.
            Describir beneficios tangibles e intangibles*
            Beneficios tangibles: son de fácil cuantificación, generalmente están relacionados con la reducción de recursos o talento humano.
            Beneficios intangibles: no son fácilmente cuantificables y están relacionados con elementos o mejora en otros procesos de la organización.
>
            Ejemplo de beneficios:

            - Mejoras en la eficiencia del área bajo estudio.
            - Reducción de personal.
            - Reducción de futuras inversiones y costos.
            - Disponibilidad del recurso humano.
            - Mejoras en planeación, control y uso de recursos.
            - Suministro oportuno de insumos para las operaciones.
            - Cumplimiento de requerimientos gubernamentales.
            - Toma acertada de decisiones.
            - Disponibilidad de información apropiada.
            - Aumento en la confiabilidad de la información.
            - Mejor servicio al cliente externo e interno
            - Logro de ventajas competitivas.
            - Valor agregado a un producto de la compañía.
        
        5.1.2. Criterios de Inversión

            5.1.2.1. Relación Beneficio/Costo (B/C)

                En base a los costos y beneficios identificados se evalúa si es factible el desarrollo del proyecto. 
                Si se presentan varias alternativas de solución se evaluará cada una de ellas para determinar la mejor solución desde el punto de vista del > retorno de la inversión
                El B/C si es mayor a uno, se acepta el proyecto; si el B/C es igual a uno es indiferente aceptar o rechazar el proyecto y si el B/C es menor a uno se rechaza el proyecto

            5.1.2.2. Valor Actual Neto (VAN)
            
                Valor actual de los beneficios netos que genera el proyecto. Si el VAN es mayor que cero, se acepta el proyecto; si el VAN es igual a cero es indiferente aceptar o rechazar el proyecto y si el VAN es menor que cero se rechaza el proyecto

            5.1.2.3 Tasa Interna de Retorno (TIR)*
                Es la tasa porcentual que indica la rentabilidad promedio anual que genera el capital invertido en el proyecto. Si la TIR es mayor que el costo de oportunidad se acepta el proyecto, si la TIR es igual al costo de oportunidad es indiferente aceptar o rechazar el proyecto, si la TIR es menor que el costo de oportunidad se rechaza el proyecto

                Costo de oportunidad de capital (COK) es la tasa de interés que podría haber obtenido con el dinero invertido en el proyecto

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

6. <span id="_Toc52661357" class="anchor"></span>**Conclusiones**

Explicar los resultados del análisis de factibilidad que nos indican si el proyecto es viable y factible.
