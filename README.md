# The Eco Box 7.0

Aplicativo web para el **intercambio de prendas de segunda mano** y la **donación de uniformes y útiles escolares** para las instituciones educativas de Medellín.

Proyecto de la media técnica en Desarrollo de Software — SENA, 2022.

## Tecnologías

- PHP (con `mysqli`)
- MySQL / MariaDB
- HTML, CSS, JavaScript, Bootstrap y jQuery
- Plantilla [SB Admin 2](https://startbootstrap.com/theme/sb-admin-2) para el panel de administración

## Estructura (patrón MVC)

```
EcoBox7.0/
├── modelo/
│   └── theecobox.sql        # Script de la base de datos
├── controlador/             # Lógica: login/logout, CRUD de usuarios, prendas, facturas, etc.
│   └── conex.php            # Conexión a la base de datos
└── vista/                   # Sitio público
    ├── index.php            # Página de inicio
    ├── registro.php, sesion.php, unete.php, qsomos.php, contactanos.php, acercaproyecto.php
    └── app/Admon/           # Panel de administración
        ├── Menu.php, Configuracion.php
        ├── Prenda.php, Tipoprenda.php, Finalidadprenda.php
        ├── Factura.php, detallefactura.php
        └── TipoDoc.php, Tipotrans.php, Tipousua.php
```

## Base de datos

La base de datos `theecobox` tiene estas tablas:

| Tabla              | Descripción                                   |
|--------------------|-----------------------------------------------|
| `usuarios`         | Usuarios registrados                          |
| `tipo_usua`        | Tipos de usuario (roles)                      |
| `tipo_doc`         | Tipos de documento de identidad               |
| `prenda`           | Prendas publicadas                            |
| `tipo_prenda`      | Categorías de prenda                          |
| `finalidad_prenda` | Finalidad de la prenda (intercambio/donación) |
| `tipo_trans`       | Tipos de transacción                          |
| `factura`          | Encabezado de las transacciones               |
| `detallefactura`   | Detalle de las transacciones                  |

## Instalación local (XAMPP / WAMP / LAMP)

1. Clona el repositorio dentro de la carpeta pública del servidor (por ejemplo `htdocs/` en XAMPP):
   ```bash
   git clone https://github.com/cutiepie25/EcoBox7.0.git
   ```
2. Inicia Apache y MySQL.
3. Crea la base de datos `theecobox` e importa `modelo/theecobox.sql` (con phpMyAdmin o por consola):
   ```bash
   mysql -u root -p -e "CREATE DATABASE theecobox"
   mysql -u root -p theecobox < modelo/theecobox.sql
   ```
4. Si es necesario, ajusta servidor, usuario y contraseña en `controlador/conex.php` (por defecto `localhost` / `root` / sin contraseña).
5. Abre <http://localhost/EcoBox7.0/vista/index.php>.
