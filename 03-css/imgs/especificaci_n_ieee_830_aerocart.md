# DOCUMENTO DE ESPECIFICACIÓN DE REQUISITOS DE SOFTWARE (IEEE 830)

## PROYECTO: AEROCART - GESTIÓN DE FLOTA DE DRONES

### INFORMACIÓN GENERAL DE LA EVIDENCIA
* **Nombre de la Evidencia:** Especificación de Requisitos Software - IEEE 830
* **Presentado por:** Alejandro Rua - Sebastian Zambrano - Leider Serna - Camilo Morales - Stiven González - Mateo Henao
* **Ficha del Programa:** 3410390
* **Dirigido a:** Instructora Luisa Callejas
* **Institución:** Servicio Nacional de Aprendizaje (SENA) - Regional Caldas
* **Centro de Formación:** Centro de Procesos Industriales y Construcción
* **Programa Técnico/Tecnólogo:** Análisis y Desarrollo de Software (ADSO)
* **Fase del Proyecto:** Análisis y Diseño
* **Tipo de Formación:** Titulada Presencial
* **Fecha de Entrega:** Octubre de 2026

### FICHA DEL DOCUMENTO (HISTORIAL DE REVISIONES)
| FECHA | REVISIÓN(ES) | AUTOR(ES) |
| :--- | :--- | :--- |
| 20/10/2026 | Versión Inicial - Consolidación de Requisitos Elicitados y Respuestas de Clientes | Jeronimo M., Angie V., Miguel G. |
| 27/10/2026 | Refinamiento de Requisitos (Métricas, Reclasificación RF/RNF y Formato) | Equipo de Desarrollo / Analista |

### DOCUMENTO VALIDADO POR LAS PARTES
| POR CLIENTE | DESARROLLADOR |
| :--- | :--- |
| **Fecha:** 27/10/2026 | **Fecha:** 27/10/2026 |
| **Nombre del Encargado:** Comité Directivo AeroCart / Clientes Piloto | **Nombre del Encargado:** Equipo de Desarrollo (Jeronimo M., Angie V., Miguel G.) |

---

## CONTENIDO
1. Introducción
2. Objetivo General
3. Objetivos Específicos
4. Propósito
5. Alcance
6. Personal Involucrado
7. Definiciones, Acrónimos y Abreviaturas
8. Referencias
9. Resumen
10. Descripción General
    * 10.1 Perspectiva del Producto
    * 10.2 Funcionalidades del Producto
    * 10.3 Características de los Usuarios
    * 10.4 Restricciones
11. Requisitos Específicos
    * 11.1 Requisitos del Sistema
    * 11.2 Requisitos Funcionales
    * 11.3 Requisitos No Funcionales
12. Construcción de Prototipos
13. Formato de Caso de Prueba

---

## 1. INTRODUCCIÓN
En el mercado actual de comercio electrónico ($e\text{-}commerce$), la logística de última milla representa uno de los mayores cuellos de botella operativos debido a la congestión vehicular, los altos costos de combustible y los retrasos en las entregas urbanas prioritarias. La necesidad de contar con un sistema rápido, automatizado y rentable es fundamental para mantener la competitividad. AeroCart surge como una solución tecnológica basada en una flota de drones de alto rendimiento (DJI Flycart Series 100), capaz de gestionar pedidos de forma inteligente, monitorear el estado de las aeronaves y garantizar entregas seguras mediante autenticación digital.

## 2. OBJETIVO GENERAL
Diseñar y especificar un sistema integral de gestión de flotas de drones para optimizar la logística de última milla, garantizando la trazabilidad en tiempo real, la seguridad avanzada en las entregas y la gestión preventiva del mantenimiento de los equipos.

## 3. OBJETIVOS ESPECÍFICOS
* Automatizar el proceso de despacho y asignación de pedidos utilizando los drones DJI Flycart Series 100 con capacidad de carga operativa entre $85\text{ kg}$ y $100\text{ kg}$.
* Integrar un módulo de monitoreo en tiempo real que permita a los usuarios y operadores rastrear la telemetría y trayectoria del dron.
* Implementar reglas de negocio estrictas para la validación de la autonomía de la batería (garantizando un mínimo del $25\%$ de reserva post-vuelo), control meteorológico y cálculo automático de tarifas.
* Garantizar la seguridad mediante el uso de códigos de confirmación (PIN/QR) para el descenso controlado a una altura segura únicamente cuando el cliente confirma la recepción in situ.

## 4. PROPÓSITO
El software AeroCart tiene como finalidad centralizar la recepción de solicitudes logísticas, automatizar la asignación de rutas de vuelo para los drones, gestionar pagos seguros mediante transferencia previa con facturación electrónica automática, y proveer herramientas de control de flota y mantenimiento predictivo, resolviendo las problemáticas críticas de retrasos y costos en la distribución urbana.

## 5. ALCANCE
El sistema abarca el desarrollo de una plataforma web y móvil para clientes naturales y empresariales, el módulo de control y asignación automática de la flota de drones DJI Flycart Series 100, la integración con pasarelas de pago para transferencia bancaria, la emisión automatizada de facturas electrónicas, el monitoreo satelital en tiempo real, la gestión de alertas meteorológicas y un módulo técnico especializado para el mantenimiento preventivo y correctivo de la flota.

## 6. PERSONAL INVOLUCRADO
| NOMBRE | ROL | PROFESIÓN | RESPONSABILIDADES | INFORMACIÓN CONTACTO | APRUEBA |
| :--- | :--- | :--- | :--- | :--- | :--- |
| Jeronimo M. | Desarrollador Líder / Arquitecto | Ing. de Sistemas | Diseño de arquitectura, backend y despliegue de plataforma. | jeronimo@aerocart.com | SI |
| Angie V. | Analista de Requisitos / UX | Diseñadora / Analista | Elicitación, modelado de procesos y diseño de interfaces móviles/web. | angie@aerocart.com | SI |
| Miguel G. | Especialista en Logística / QA | Ing. Industrial | Definición de reglas de negocio, pruebas de vuelo y validación de casos. | miguel@aerocart.com | SI |

## 7. DEFINICIONES, ACRÓNIMOS Y ABREVIATURAS
* **DJI Flycart 100:** Modelo de dron de carga pesada soportado por el sistema, con capacidad nominal de carga entre $85\text{ kg}$ y $100\text{ kg}$.
* **PIN/QR:** Código de seguridad alfanumérico o bidimensional requerido para autenticar al usuario y liberar la carga.
* **Última Milla:** Tramo final del proceso de transporte de mercancías desde un centro de distribución hasta el consumidor final.
* **Plan Pro:** Suscripción empresarial avanzada con herramientas extendidas de gestión masiva de flotas y analítica de datos.
* **Autonomía (SoC - State of Charge):** Nivel de carga de la batería del dron, calculada para garantizar ida, entrega y retorno con margen operativo.

## 8. REFERENCIAS
* IEEE Std 830-1998: *Recommended Practice for Software Requirements Specifications*.
* Documentación técnica y SDK de telemetría de la serie DJI Flycart.
* Normativa aeronáutica local (Aerocivil) para la operación de Sistemas de Aeronaves No Tripuladas ($UAS$).

## 9. RESUMEN
AeroCart es una plataforma automatizada de gestión logística mediante drones que optimiza las entregas urbanas. Permite a usuarios naturales y corporativos solicitar envíos rápidos, realizar pagos por transferencia con facturación electrónica automatizada, rastrear paquetes en tiempo real y asegurar entregas precisas mediante protocolos de altura segura y validación (PIN/QR). Todo esto se respalda con un sistema de control de batería, telemetría y mantenimiento predictivo.

## 10. DESCRIPCIÓN GENERAL

### 10.1 Perspectiva del Producto
El sistema opera a través de aplicaciones móviles y plataformas web, interactuando con tres actores principales:
1. **Clientes Naturales:** Usuarios con cuentas estándar para envíos individuales y seguimiento.
2. **Clientes Empresariales (Plan Pro):** Organizaciones con acceso a despachos concurrentes, gestión avanzada de flotas y analítica de entregas.
3. **Personal de Mantenimiento / Operadores:** Equipo técnico autorizado para el monitoreo de telemetría, evaluación de ciclos de batería y gestión de emergencias o aterrizajes forzosos.

### 10.2 Funcionalidades del Producto
* Gestión de usuarios y suscripciones (Plan Básico y Plan Pro).
* Interfaz de telemetría en tiempo real (alertas de batería baja, temperatura, desgaste comparativo).
* Algoritmo de asignación automática de drones según disponibilidad e inventario en el nodo.
* Sistema de validación meteorológica y aplazamiento o cancelación de vuelos.
* Módulo de cancelaciones y cálculo dinámico de penalizaciones.
* Sistema de notificaciones multicanal (App, Correo y SMS) basado en eventos.
* Protocolo de descenso seguro post-confirmación de cliente in situ.
* Procesamiento de pagos (transferencia previa) y emisión de facturación electrónica.

### 10.3 Características de los Usuarios
* **Cliente Natural:** Requiere interfaces intuitivas, de pocos pasos, enfocadas en la usabilidad móvil y el seguimiento visual en vivo.
* **Cliente Empresarial (Pro):** Perfil analítico que requiere dashboards de rendimiento, reportes de tiempos de entrega y gestión de múltiples envíos simultáneos.
* **Operador de Mantenimiento:** Perfil técnico avanzado que requiere visualizar datos crudos de telemetría, ciclos de carga, y estadísticas de vida útil de hardware.

### 10.4 Restricciones
* El sistema bloqueará el despacho si el peso de la carga excede los $100\text{ kg}$.
* Ningún dron será autorizado para despegue si la simulación de ruta proyecta un nivel de batería al retorno inferior al $25\%$.
* Solo se admiten transacciones por transferencia bancaria previa; no existe modalidad de pago contra entrega.
* Las cancelaciones sin costo de penalidad solo pueden ejecutarse si el dron se encuentra en estado "En preparación" y no ha iniciado la fase de despegue.

---

## 11. REQUISITOS ESPECÍFICOS

### 11.1 Requisitos del Sistema
* **RS-01:** La aplicación móvil debe ser compatible con los sistemas operativos Android (versión $10.0$ o superior) e iOS (versión $14.0$ o superior).
* **RS-02:** Conectividad de telemetría bidireccional continua con la flota utilizando protocolos MQTT o WebSockets.
* **RS-03:** La infraestructura en la nube debe escalar automáticamente para soportar un incremento concurrente de tráfico operativo.

### 11.2 Requisitos Funcionales

| IDENTIFICACIÓN | RF-01 |
| :--- | :--- |
| **Nombre** | Gestión de Suscripciones y Roles |
| **Descripción** | El sistema debe validar el rol del usuario autenticado. Proveerá acceso estándar a usuarios naturales y acceso al panel de analítica avanzada y gestión masiva a usuarios con suscripción Plan Pro. |
| **Prioridad** | ALTA |

| IDENTIFICACIÓN | RF-02 |
| :--- | :--- |
| **Nombre** | Asignación Automática de Flota |
| **Descripción** | Al validar un pedido pagado, el sistema cruzará la ubicación del usuario, el peso del paquete y la disponibilidad en el nodo logístico para asignar el dron más óptimo. Si no hay unidades, encolará el pedido informando el tiempo estimado de espera. |
| **Prioridad** | ALTA |

| IDENTIFICACIÓN | RF-03 |
| :--- | :--- |
| **Nombre** | Monitoreo de Batería y Mantenimiento Predictivo |
| **Descripción** | El sistema registrará los ciclos de carga y descarga de cada aeronave. Generará alertas visuales para los operadores técnicos cuando la degradación de la batería mensual requiera reemplazo físico. |
| **Prioridad** | ALTA |

| IDENTIFICACIÓN | RF-04 |
| :--- | :--- |
| **Nombre** | Protocolo de Descenso y Entrega Segura |
| **Descripción** | El dron sobrevolará la ubicación destino. El sistema habilitará la interfaz de "Confirmación de Recepción" en la app del cliente. Solo al ingresar un PIN válido o escanear el QR, el sistema instruirá al dron a realizar el descenso y liberar el mecanismo de carga. |
| **Prioridad** | ALTA |

| IDENTIFICACIÓN | RF-05 |
| :--- | :--- |
| **Nombre** | Pagos y Facturación Electrónica Automática |
| **Descripción** | El sistema calculará la tarifa dinámica. Al procesarse la transferencia bancaria con éxito, el sistema consumirá el servicio de la DIAN para generar la factura electrónica y enviarla automáticamente en formato PDF/XML al correo del usuario. |
| **Prioridad** | ALTA |

| IDENTIFICACIÓN | RF-06 |
| :--- | :--- |
| **Nombre** | Gestión Meteorológica y Cancelaciones |
| **Descripción** | El sistema consumirá un API meteorológica. Si las ráfagas de viento o precipitación superan los umbrales seguros, el sistema aplazará el vuelo. Si el cliente cancela un vuelo tras su inicio, el sistema calculará una penalización base del $5\%$ más una tarifa por distancia recorrida. |
| **Prioridad** | MEDIA |

| IDENTIFICACIÓN | RF-07 |
| :--- | :--- |
| **Nombre** | Sistema de Notificaciones Multicanal |
| **Descripción** | El sistema debe despachar alertas de estado (despegue, proximidad, llegada y anomalías) a través de notificaciones Push (App), correo electrónico y SMS, según la configuración predefinida del usuario. |
| **Prioridad** | MEDIA |

### 11.3 Requisitos No Funcionales

| IDENTIFICACIÓN | RNF-01 |
| :--- | :--- |
| **Nombre** | Seguridad y Encriptación de Telemetría |
| **Descripción** | Toda comunicación entre la plataforma y los drones debe estar encriptada bajo el estándar TLS $1.3$. Los intentos de acceso fallidos al sistema de control se bloquearán tras $3$ intentos, alertando al administrador en un tiempo máximo de $2\text{ segundos}$. |
| **Prioridad** | ALTA |

| IDENTIFICACIÓN | RNF-02 |
| :--- | :--- |
| **Nombre** | Rendimiento y Tiempo de Respuesta |
| **Descripción** | El sistema debe garantizar que las actualizaciones de ubicación del dron en el mapa del cliente ocurran con una latencia máxima de $3\text{ segundos}$ en condiciones de red estables (4G/5G). |
| **Prioridad** | ALTA |

| IDENTIFICACIÓN | RNF-03 |
| :--- | :--- |
| **Nombre** | Disponibilidad y Concurrencia |
| **Descripción** | La arquitectura debe estar diseñada para ofrecer un *uptime* (tiempo de actividad) del $99.9\%$ mensual, soportando hasta $500$ usuarios y telemetría de $50$ drones simultáneos sin degradación del servicio en el nodo principal. |
| **Prioridad** | ALTA |

---

## 12. CONSTRUCCIÓN DE PROTOTIPOS
Las interfaces de usuario ($UI$) seguirán un enfoque *Mobile-First*, optimizadas para interacciones rápidas (máximo $3$ toques para completar una solicitud de servicio). Incluirán mapas interactivos con integración a Google Maps / Mapbox para el seguimiento georreferenciado, una vista de panel (Dashboard) para los usuarios del Plan Pro, y una terminal de telemetría de datos tabulares y gráficos para el personal de operaciones.

---

## 13. FORMATO DE CASO DE PRUEBA

| FORMATO DE CASOS DE PRUEBA | |
| :--- | :--- |
| **Objetivo** | Validar la correcta asignación del dron, el rastreo en vivo y el protocolo de entrega segura mediante PIN. |
| **Identificador** | CP-LOG-01 |
| **Requerimientos** | RF-02 (Asignación Automática) y RF-04 (Protocolo de Entrega Segura) |
| **Precondiciones** | - Dron DJI Flycart 100 disponible, sin alertas de falla y con SoC $>25\%$.<br>- Pedido pagado mediante transferencia y estado "Preparado".<br>- Dispositivo del cliente conectado a internet y sesión iniciada. |
| **PASOS** | **RESULTADOS ESPERADOS** |
| 1. El operador marca la carga como asegurada físicamente en el nodo. | 1. El sistema cambia el estado a "En Ruta" e inicia la transmisión de telemetría GPS. |
| 2. El cliente abre la aplicación en la sección de pedidos activos. | 2. El mapa se actualiza en tiempo real ($<3\text{ s}$ de latencia) mostrando el ícono del dron hacia el destino. |
| 3. El dron llega a las coordenadas destino (margen de error $<2\text{ m}$). | 3. La app emite una alerta "Dron en Posición" y despliega el teclado numérico para el PIN. |
| 4. El cliente ingresa el PIN de $4$ dígitos provisto en la factura. | 4. El sistema valida el PIN, el dron desciende a altura segura ($<1\text{ m}$), libera la eslinga y asciende automáticamente. |
| 5. Finalización del proceso logístico. | 5. El estado del pedido se actualiza a "Entregado" y se envía recibo final por correo. |