# 📄 Proyecto Generador de Documentación Impulsado por IA (GDI-IA)

## 🔹 1. Descripción del Proyecto

Este proyecto tiene como objetivo diseñar e implementar una plataforma web capaz de ayudar a completar documentos estructurados de manera automática, utilizando diversas IAs especializadas en redacción, análisis de contenido y generación de referencias. La solución permitirá a los usuarios completar los documentos en poco tiempo siguiendo formatos predefinidos, reduciendo el esfuerzo manual y asegurando la coherencia y calidad del contenido.

## ❓ Preguntas Claves

### 1. Problemática

Actualmente, la elaboración de documentos técnicos y académicos implica un proceso manual que consume tiempo, requiere conocimientos específicos y suele estar sujeto a errores de formato y redacción. Esta situación genera inconsistencias en el contenido, dificulta el cumplimiento de estructuras predefinidas y limita la productividad de estudiantes, desarrolladores y profesionales que necesitan generar documentación clara, coherente y reutilizable en plazos cortos.

### 2. Alcance

El sistema abarca:

- Ayuda automatizada para completar documentos en formatos estandarizados (FD01-FD06).  
- Un módulo de captura de datos donde el usuario ingresará información clave.  
- Integración de IAs para procesar y generar contenido por secciones.  
- Generación de documentos en formatos PDF y DOCX.  
- Almacenamiento y gestión de documentos generados.  

**El sistema no incluye la edición manual posterior al documento generado dentro de la plataforma.**

### 3. Limitaciones y posibles implementaciones

- El sistema dependerá de la disponibilidad de servicios de IA externos, como OpenAI y otros proveedores de APIs.  
- La plataforma no ofrecerá edición manual posterior a los documentos generados.  
- Como posible mejora futura, se podría incluir un editor visual para realizar cambios antes de exportar el documento.

## 🎯 Objetivo del Proyecto

Automatizar la creación de documentos formales siguiendo formatos estandarizados, reduciendo el esfuerzo manual y asegurando la calidad del contenido. La solución debe ser rápida, confiable y fácil de usar para estudiantes, desarrolladores y profesionales que necesiten generar documentación técnica o académica.

## 🔹 2. Tecnologías y herramientas usadas

- **Lenguajes principales:** PHP, MySQL
- **Frontend:** HTML5, CSS3, JavaScript
- **Librerías adicionales:** (pendiente a integrar en fases futuras)
- **APIs externas:** OpenAI (GPT), Hugging Face
- **Servidor Web:** Apache
- **Control de versiones:** Git / GitHub
- **Otras herramientas:** 
  - PhpMyAdmin para la administración de base de datos o Mysql
  - Composer (opcional para manejo de dependencias futuras)

## 🔹 3. Requisitos del sistema

- **Servidor Web:** Apache 2.4
- **PHP:** Versión 8.1 o superior
  - Extensiones requeridas:
    - `pdo_mysql`
    - `mbstring`
    - `curl`
    - `openssl`
    - `json`
- **MySQL:** 5.7 o superior
- **Sistema operativo del servidor:** Linux / Windows / macOS
- **Acceso a Internet:** Para consumir APIs de IA
- **Editor sugerido:** Visual Studio Code 

## 🔹 4. Procedimiento de instalación

1. **Clonar el repositorio en la máquina virtual Ubuntu:**

```bash
git clone https://github.com/UPT-FAING-EPIS/proyecto-si784-2025-i-u1-aas.git
```

2. **Instalar Apache, PHP y MySQL si no están instalados:**

```bash
sudo apt update
sudo apt install apache2 php libapache2-mod-php php-mysql mysql-server
```

3. **Mover el proyecto** al directorio de Apache:

```bash
sudo mv proyecto-si784-2025-i-u1-aas /var/www/html/gdi-ia
```

4. **Configurar permisos:**

```bash
sudo chown -R www-data:www-data /var/www/html/gdi-ia
sudo chmod -R 755 /var/www/html/gdi-ia
```

5. **Crear la base de datos:**

```bash
sudo mysql -u root -p
```
```sql
CREATE DATABASE db_gdiia;
CREATE USER 'gdiia_user'@'localhost' IDENTIFIED BY 'tu_password_segura';
GRANT ALL PRIVILEGES ON db_gdiia.* TO 'gdiia_user'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```

6. **Importar el esquema de la base de datos:**

```bash
mysql -u gdiia_user -p db_gdiia < /var/www/html/gdi-ia/bd/db_gdiia.sql
```

7. **Configurar la conexión a base de datos en el proyecto:**

Editar `config/conexion.php`:

```php
<?php
$host = "localhost";
$user = "gdiia_user"; 
$pass = "tu_password_segura";
$dbname = "db_gdiia";
?>
```

8. **Configurar API keys de servicios de IA** donde corresponda.

9. **Acceder a la aplicación:**

Desde el navegador: `http://<IP-de-la-maquina-virtual>/gdi-ia/`

## 🔹 5. Configuración del proyecto

- **Variables de entorno necesarias:**
  - API Key de OpenAI.
  - Configuración de acceso a la base de datos.

- **Sugerencia:** Para mayor seguridad, almacenar claves en variables de entorno o en un archivo `.env` protegido.

## 🔹 6. Comandos principales

- **Iniciar Apache y MySQL en Ubuntu:**

```bash
sudo systemctl start apache2
sudo systemctl start mysql
```

- **Ver estado de Apache y MySQL:**

```bash
sudo systemctl status apache2
sudo systemctl status mysql
```

## 🔹 7. Parámetros o configuraciones especiales

- **Consumo de APIs de IA:**
  - Se requiere una API Key activa de OpenAI para las funcionalidades de generación automática.

- **Límites configurables:**
  - Se puede establecer un número máximo de documentos generados por usuario en la versión gratuita.

## 🔹 8. Notas adicionales

- Verificar siempre las cuotas de uso de OpenAI para evitar costos inesperados.
- Mantener actualizado el sistema operativo Ubuntu con:

```bash
sudo apt update && sudo apt upgrade
```
- Se recomienda implementar backups regulares de la base de datos.

# 📚 Créditos

Proyecto desarrollado por 👥:
  
- **Akhtar Oviedo, Ahmed Hasan** (2022074261)  
- **Ayala Ramos, Carlos Daniel** (2022074266)  
- **Salas Jiménez, Walter Emmanuel** (2022073896)

Repositorio oficial: [GDI-IA](https://github.com/UPT-FAING-EPIS/proyecto-si784-2025-i-u1-aas)
