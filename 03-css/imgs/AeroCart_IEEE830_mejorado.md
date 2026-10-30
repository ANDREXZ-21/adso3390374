# DOCUMENTO DE ESPECIFICACIÓN DE REQUISITOS SOFTWARE (IEEE 830)
## PROYECTO: AEROCART – PLATAFORMA DE GESTIÓN DE FLOTA DE DRONES PARA LOGÍSTICA DE ÚLTIMA MILLA

### INFORMACIÓN GENERAL DE LA EVIDENCIA
* **Nombre de la Evidencia:** Especificación de Requisitos Software – IEEE 830
* **Presentado por:** Alejandro Rua, Sebastian Zambrano, Leider Serna, Camilo Morales, Stiven González y Mateo Henao
* **Ficha del Programa:** 3410390
* **Dirigido a:** Instructora Luisa Callejas
* **Institución:** Servicio Nacional de Aprendizaje (SENA) – Regional Caldas
* **Centro de Formación:** Centro de Procesos Industriales y de la Construcción
* **Programa:** Tecnólogo en Análisis y Desarrollo de Software (ADSO)
* **Fase del Proyecto:** Análisis y Diseño
* **Tipo de Formación:** Titulada Presencial
* **Fecha de Entrega:** Octubre de 2026

### FICHA DEL DOCUMENTO (HISTORIAL DE REVISIONES)
| VERSIÓN | FECHA | REVISIÓN(ES) | AUTOR(ES) |
| :--- | :--- | :--- | :--- |
| 1.0 | 20/10/2026 | Versión inicial – Consolidación de requisitos elicitados y respuestas de clientes | Equipo de Desarrollo |
| 1.1 | 27/10/2026 | Revisión de calidad: requisitos atómicos y verificables, RNF completados, trazabilidad, restricciones y casos de prueba ampliados | Equipo de Desarrollo |

### DOCUMENTO VALIDADO POR LAS PARTES
| POR CLIENTE | DESARROLLADOR |
| :--- | :--- |
| **Fecha:** ____ / ____ / 2026 | **Fecha:** ____ / ____ / 2026 |
| **Nombre del Encargado:** Comité Directivo AeroCart / Clientes Piloto | **Nombre del Encargado:** Equipo de Desarrollo AeroCart |
| **Firma:** | **Firma:** |

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
    * 10.2 Funcionalidades del Producto (Elicitación)
    * 10.3 Características de los Usuarios
    * 10.4 Restricciones
    * 10.5 Suposiciones y Dependencias
11. Requisitos Específicos
    * 11.1 Requisitos del Sistema
    * 11.2 Requisitos Funcionales
    * 11.3 Requisitos No Funcionales
    * 11.4 Matriz de Trazabilidad
12. Construcción de Prototipos
13. Formato de Caso de Prueba

---

## 1. INTRODUCCIÓN
En el comercio electrónico (*e-commerce*), la logística de última milla es uno de los mayores cuellos de botella operativos: la congestión vehicular, los altos costos de combustible y los retrasos en las entregas urbanas prioritarias afectan la competitividad de las empresas y la experiencia del consumidor final.

AeroCart es una plataforma web y móvil que gestiona de forma automatizada una flota de drones de carga pesada DJI FlyCart Serie 100. El sistema recibe y valida pedidos, asigna el dron más apto, verifica las condiciones de vuelo (batería y clima), permite el rastreo en tiempo real y garantiza entregas seguras mediante autenticación digital (PIN/QR). Además, apoya a la operación con monitoreo de baterías y gestión de mantenimiento de la flota.

Este documento especifica los requisitos del sistema siguiendo la práctica recomendada IEEE Std 830-1998 y está organizado así: las secciones 1 a 9 presentan el contexto y el alcance del proyecto; la sección 10 describe el producto de manera general; la sección 11 detalla los requisitos específicos con su trazabilidad; y las secciones 12 y 13 presentan los prototipos y el formato de casos de prueba con los que se verificarán los requisitos.

## 2. OBJETIVO GENERAL
Diseñar y especificar un sistema integral de gestión de flotas de drones que optimice la logística de última milla, garantizando la trazabilidad en tiempo real, la seguridad en las entregas y la gestión preventiva y correctiva del mantenimiento de los equipos.

## 3. OBJETIVOS ESPECÍFICOS
* **OE-01:** Automatizar el despacho y la asignación de pedidos utilizando drones DJI FlyCart Serie 100 con capacidad de carga entre 85 kg y 100 kg.
* **OE-02:** Integrar un módulo de monitoreo en tiempo real que permita a los usuarios y operadores rastrear la trayectoria del dron.
* **OE-03:** Implementar reglas de negocio para la validación de autonomía de batería (mínimo 25 % de reserva), el control meteorológico y el cálculo automático de tarifas y penalizaciones por cancelación.
* **OE-04:** Garantizar la seguridad de la entrega mediante códigos de confirmación (PIN/QR) y descenso a una altura segura únicamente cuando el cliente confirma la recepción.
* **OE-05:** Gestionar los pagos exclusivamente por transferencia bancaria previa, con generación y envío automático de la factura electrónica.
* **OE-06:** Controlar el estado de la flota mediante el monitoreo del desgaste de baterías, las alertas operativas y la gestión de mantenimiento preventivo y correctivo.

## 4. PROPÓSITO
El software AeroCart tiene como finalidad centralizar la recepción de pedidos, automatizar la asignación de drones y rutas de vuelo, gestionar pagos seguros por transferencia previa con facturación electrónica automática, y proveer herramientas de control de flota y mantenimiento preventivo y correctivo, resolviendo los retrasos y sobrecostos de la distribución urbana.

**Audiencia de este documento:** el cliente (Comité Directivo AeroCart y clientes piloto), el equipo de desarrollo, el personal de pruebas (QA) y la instrucción del programa.

## 5. ALCANCE
**Dentro del alcance:**
* Plataforma web y móvil para clientes naturales (Plan Básico) y empresariales (Plan Pro).
* Módulo de creación y validación de pedidos, con cálculo automático de tarifas.
* Módulo de control y asignación automática de la flota DJI FlyCart Serie 100.
* Pagos por transferencia bancaria previa y emisión automática de facturas electrónicas.
* Monitoreo y rastreo en tiempo real mediante telemetría y posicionamiento satelital.
* Gestión de clima, alertas operativas, bloqueos y aterrizajes de emergencia.
* Módulo técnico de monitoreo de baterías y mantenimiento preventivo y correctivo.
* Notificaciones por App, correo electrónico y SMS.

**Fuera del alcance de esta versión:**
* Pagos contra entrega o por medios distintos a la transferencia bancaria previa.
* Desarrollo o modificación del hardware y del firmware de los drones.
* Trámites de permisos de operación ante la autoridad aeronáutica, que son responsabilidad del operador de la flota.

## 6. PERSONAL INVOLUCRADO
**Equipo de desarrollo (aprendices ADSO, ficha 3410390):** Alejandro Rua, Sebastian Zambrano, Leider Serna, Camilo Morales, Stiven González y Mateo Henao.

| ROL EN EL PROYECTO | RESPONSABILIDADES | RESPONSABLE(S) | APRUEBA |
| :--- | :--- | :--- | :--- |
| Desarrollador Líder / Arquitecto | Diseño de arquitectura, backend y despliegue de la plataforma. | [Asignar] | SI |
| Analista de Requisitos / UX | Elicitación, modelado de procesos y diseño de interfaces móviles y web. | [Asignar] | SI |
| Especialista en Logística / QA | Definición de reglas de negocio, pruebas de vuelo y validación de casos de uso. | [Asignar] | SI |

| PARTE INTERESADA | ROL | INTERÉS EN EL SISTEMA |
| :--- | :--- | :--- |
| Comité Directivo AeroCart / Clientes Piloto | Cliente | Valida requisitos y recibe el producto. |
| Instructora Luisa Callejas | Instructora del programa | Evalúa la evidencia de la fase de Análisis y Diseño. |

## 7. DEFINICIONES, ACRÓNIMOS Y ABREVIATURAS
| TÉRMINO | DEFINICIÓN |
| :--- | :--- |
| **SRS / ERS** | Especificación de Requisitos Software. |
| **RF / RNF / RS** | Requerimiento Funcional / No Funcional / del Sistema. |
| **OE** | Objetivo Específico. |
| **CP** | Caso de Prueba. |
| **DJI FlyCart Serie 100** | Familia de drones de carga pesada soportada por el sistema, con capacidad de carga entre 85 kg y 100 kg. |
| **UAS** | *Unmanned Aircraft System*: sistema de aeronave no tripulada. |
| **Telemetría** | Datos que el dron transmite en tiempo real (posición, batería, estado y alertas). |
| **GNSS** | Sistema global de navegación por satélite usado para el posicionamiento del dron. |
| **Nodo operativo** | Punto físico de despacho y operación desde donde opera un grupo de drones. |
| **Última milla** | Tramo final del transporte de mercancías hasta el consumidor final. |
| **PIN/QR** | Código de seguridad numérico o bidimensional, único por pedido, requerido para liberar la carga. |
| **Altura segura** | Altura de descenso para la entrega que mantiene una distancia segura a personas y obstáculos; su valor es parametrizable según el fabricante y la normativa. |
| **Autonomía** | Capacidad de la batería para completar la ida, la entrega y el retorno conservando la reserva operativa. |
| **Aplazamiento** | Retraso automático del despacho por clima adverso o falta de drones disponibles. |
| **Plan Básico / Plan Pro** | Suscripciones para clientes naturales y para clientes empresariales (herramientas extendidas de gestión de flotas y analítica), respectivamente. |
| **Factura electrónica** | Documento tributario digital emitido conforme a la normativa de la DIAN. |
| **DIAN** | Dirección de Impuestos y Aduanas Nacionales de Colombia. |
| **Parametrizable** | Valor que puede configurarse sin modificar el código fuente. |

## 8. REFERENCIAS
* IEEE Std 830-1998: *Recommended Practice for Software Requirements Specifications*.
* ISO/IEC/IEEE 29148:2018: *Systems and software engineering – Life cycle processes – Requirements engineering*.
* Documentación técnica de DJI FlyCart (manuales y datasheet del fabricante).
* Reglamentos Aeronáuticos de Colombia (RAC) de la Aeronáutica Civil aplicables a sistemas de aeronaves no tripuladas (UAS).
* Ley 1581 de 2012: Régimen general de protección de datos personales (Colombia).
* Normativa vigente de la DIAN sobre facturación electrónica.

## 9. RESUMEN
AeroCart es una plataforma de gestión logística con drones que optimiza las entregas urbanas. Permite a clientes naturales y empresariales solicitar envíos, pagar por transferencia previa con factura electrónica automática, rastrear el pedido en tiempo real y recibirlo de forma segura mediante validación por PIN/QR y descenso a altura segura. Internamente, el sistema asigna el dron más apto, valida batería y clima antes de cada vuelo, y ofrece al personal técnico herramientas de monitoreo de baterías, alertas y mantenimiento de la flota.

---

## 10. DESCRIPCIÓN GENERAL

### 10.1 Perspectiva del Producto
AeroCart es un sistema nuevo e independiente que se usa mediante aplicaciones móviles y web, y se comunica con elementos externos:

**Usuarios:**
1. **Clientes Naturales (Plan Básico):** cuenta estándar con permisos de compra y seguimiento.
2. **Clientes Empresariales (Plan Pro):** empresas con herramientas avanzadas de gestión de flotas y analítica de entregas.
3. **Operadores / Encargados de Mantenimiento:** personal técnico autorizado para monitorear baterías, bloqueos, fallas operativas y mantenimiento de los drones.

**Sistemas externos:**
* Flota de drones DJI FlyCart Serie 100 (telemetría y órdenes de vuelo).
* Servicio meteorológico (condiciones por zona de entrega).
* Entidad bancaria / servicio de transferencias (confirmación de pagos).
* Proveedor de facturación electrónica habilitado por la DIAN.
* Proveedores de correo electrónico y SMS.

### 10.2 Funcionalidades del Producto (Elicitación)
| FUNCIONALIDAD | REQUISITOS RELACIONADOS |
| :--- | :--- |
| Gestión de cuentas por suscripción: Plan Básico (entre COP 150.000 y COP 350.000) y Plan Pro Empresas (entre COP 800.000 y COP 2.000.000), según el nivel de servicio. | RF-01, RF-13 |
| Creación de pedidos con validación de peso, zona de entrega y cálculo de tarifa. | RF-02 |
| Pagos exclusivos por transferencia previa con factura electrónica automática. | RF-03 |
| Asignación automática de drones según disponibilidad, ruta y autonomía. | RF-04 |
| Verificación meteorológica y aplazamiento automático en caso de mal clima. | RF-05 |
| Cancelaciones con penalización variable (5 % base más incremento por distancia). | RF-06 |
| Rastreo del dron en tiempo real. | RF-07 |
| Descenso a altura segura tras la confirmación de recepción por parte del cliente. | RF-08 |
| Conexión directa con el dron para alertas de batería baja y desgaste comparativo mensual. | RF-09 |
| Mantenimiento preventivo y correctivo de la flota. | RF-10 |
| Alertas de bloqueo, fallas y aterrizaje de emergencia. | RF-11 |
| Notificaciones multicanal (App, correo electrónico y SMS) según la preferencia del usuario. | RF-12 |

### 10.3 Características de los Usuarios
| USUARIO | DESCRIPCIÓN | FUNCIONES PRINCIPALES |
| :--- | :--- | :--- |
| **Cliente Natural** | Persona que usa principalmente dispositivos móviles; no requiere conocimientos técnicos. | Crear pedidos, pagar por transferencia, seguir el pedido en vivo y confirmar la recepción. |
| **Cliente Empresarial (Pro)** | Empresa que gestiona varios envíos a la vez; usuario con conocimiento básico de herramientas de gestión. | Gestionar múltiples envíos simultáneos y consultar analíticas de rendimiento. |
| **Operador de Mantenimiento** | Personal técnico con formación en operación de drones. | Supervisar la salud de la flota y el desgaste de baterías, atender alertas y ordenar aterrizajes de emergencia. |

### 10.4 Restricciones
* **RES-01:** No se despachan pedidos cuyo peso exceda la capacidad máxima de carga del dron (rango operativo de 85 kg a 100 kg).
* **RES-02:** Un dron no despega si su nivel de batería no garantiza la ruta completa (ida, entrega y retorno) con al menos un 25 % de reserva.
* **RES-03:** Los pagos solo se admiten por transferencia bancaria previa al despacho; no se aceptan pagos contra entrega.
* **RES-04:** Las cancelaciones sin penalización solo aplican antes de que el dron inicie la fase de despegue.
* **RES-05:** El dron solo desciende a la altura de entrega cuando el cliente confirma la recepción con un código PIN/QR válido.
* **RES-06:** La operación debe cumplir la reglamentación aeronáutica colombiana vigente para UAS y la Ley 1581 de 2012.

### 10.5 Suposiciones y Dependencias
* Los drones exponen su telemetría (posición, batería, estado y alertas) mediante el SDK/API del fabricante.
* Se dispone de un servicio meteorológico externo con datos por zona de entrega.
* Se cuenta con un proveedor de facturación electrónica habilitado por la DIAN y con proveedores de correo y SMS.
* Cada dron atiende entre 25 y 50 usuarios diarios; este rango se usa como base de dimensionamiento del sistema y de análisis del desgaste de batería.
* La operación de los drones cuenta con los permisos vigentes ante la autoridad aeronáutica.
* Los valores marcados como *parametrizables* (altura segura, tiempo de espera en destino, tabla de tarifas y penalizaciones, límites meteorológicos, umbrales de batería) se definen con el cliente antes de la puesta en marcha.

---

## 11. REQUISITOS ESPECÍFICOS

### 11.1 Requisitos del Sistema
| ID | TIPO | REQUISITO |
| :--- | :--- | :--- |
| **RS-01** | Plataforma | El sistema deberá ser compatible con múltiples dispositivos: aplicación móvil (Android e iOS) como plataforma prioritaria y aplicación web responsiva. |
| **RS-02** | Interfaz de hardware | El sistema deberá conectarse en tiempo real con la flota DJI FlyCart Serie 100 para recibir telemetría (posición GNSS, batería, estado y alertas) y enviar órdenes de vuelo. |
| **RS-03** | Capacidad | El sistema deberá soportar hasta 50 usuarios activos diarios por nodo operativo (rango esperado de 25 a 50) desde el primer día de operación. |
| **RS-04** | Interfaz de software | El sistema deberá consultar un servicio meteorológico externo para evaluar las condiciones de la zona de entrega. |
| **RS-05** | Interfaz de software | El sistema deberá integrarse con el servicio de transferencias bancarias para confirmar pagos y con un proveedor de facturación electrónica habilitado por la DIAN. |
| **RS-06** | Interfaz de software | El sistema deberá integrarse con proveedores de correo electrónico y SMS para el envío de notificaciones. |

### 11.2 Requisitos Funcionales

| IDENTIFICACIÓN DEL REQUERIMIENTO | RF-01 |
| :--- | :--- |
| **Nombre del Requerimiento** | Gestión de Cuentas, Suscripciones y Roles |
| **Características** | Registro, autenticación y control de permisos según el tipo de cuenta (Natural – Plan Básico, Empresarial – Plan Pro, Operador). |
| **Descripción del Requerimiento** | El sistema deberá permitir el registro y el inicio de sesión de usuarios y, al iniciar sesión, validar el tipo de cuenta y la suscripción vigente para habilitar solo las funciones de su rol. Las cuentas naturales accederán a las funciones estándar de pedido y seguimiento; las empresariales (Plan Pro) desbloquearán las herramientas de gestión y analítica de flota (RF-13); las de operador accederán a los módulos técnicos (RF-09, RF-10 y RF-11). |
| **Criterios de Aceptación** | 1. Un usuario Natural que intenta acceder a una función Pro recibe un mensaje de acceso denegado y el intento queda registrado.<br>2. Al vencer o suspenderse una suscripción Pro, las funciones avanzadas se deshabilitan sin afectar los pedidos en curso.<br>3. Cada rol solo visualiza el menú de funciones que le corresponde. |
| **Origen** | Alcance (5), Perspectiva del Producto (10.1) |
| **Requerimiento No Funcional Asociado** | RNF-01, RNF-10 |
| **Prioridad del Requerimiento** | ALTA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RF-02 |
| :--- | :--- |
| **Nombre del Requerimiento** | Creación y Validación de Pedidos |
| **Características** | Registro del pedido, validación de reglas de negocio y cálculo automático de tarifa. |
| **Descripción del Requerimiento** | El sistema deberá permitir al cliente crear un pedido indicando dirección de destino, peso y descripción de la carga. Antes de aceptarlo, deberá validar que (a) el peso no supere la capacidad máxima del dron, (b) el destino esté dentro de una zona de entrega habilitada, y deberá calcular y mostrar el valor del domicilio, el costo de transacción y el total a pagar antes de la confirmación. |
| **Criterios de Aceptación** | 1. Un pedido con peso superior a la capacidad máxima es rechazado y el mensaje indica el peso máximo permitido.<br>2. Un destino fuera de la zona habilitada es rechazado con mensaje explicativo.<br>3. El total a pagar se muestra antes de confirmar el pedido.<br>4. El cliente completa el pedido en un máximo de 3 pasos. |
| **Origen** | OE-01, OE-03; Restricción RES-01 |
| **Requerimiento No Funcional Asociado** | RNF-02, RNF-07 |
| **Prioridad del Requerimiento** | ALTA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RF-03 |
| :--- | :--- |
| **Nombre del Requerimiento** | Pagos por Transferencia y Facturación Electrónica |
| **Características** | Pago exclusivo por transferencia bancaria previa y emisión automática de factura electrónica. |
| **Descripción del Requerimiento** | El sistema deberá aceptar como único medio de pago la transferencia bancaria previa al despacho, sin pagos contra entrega. Deberá informar al cliente el costo de transacción aplicable (entre COP 4.000 y COP 8.000 según la ubicación) y no habilitar el pedido para asignación hasta que el pago esté aprobado. Al aprobarse el pago, deberá generar la factura electrónica y enviarla al correo registrado del cliente. |
| **Criterios de Aceptación** | 1. Un pedido sin pago aprobado permanece en estado "Pendiente de pago" y no entra a asignación.<br>2. El costo de transacción se muestra al cliente antes de pagar.<br>3. Tras la aprobación del pago, la factura electrónica se genera y se envía al correo del cliente en un máximo de 5 minutos.<br>4. Si el pago no se recibe, el sistema notifica al cliente y mantiene el pedido pendiente. |
| **Origen** | OE-05; Restricción RES-03 |
| **Requerimiento No Funcional Asociado** | RNF-06, RNF-01 |
| **Prioridad del Requerimiento** | ALTA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RF-04 |
| :--- | :--- |
| **Nombre del Requerimiento** | Asignación Automática de Drones y Validación de Autonomía |
| **Características** | Selección inteligente de unidades de la flota DJI FlyCart Serie 100. |
| **Descripción del Requerimiento** | Cuando un pedido esté validado y pagado, el sistema deberá asignar automáticamente el dron disponible más apto según la ruta, el peso de la carga y su estado. Un dron será elegible solo si (a) no tiene bloqueos ni fallas activas, (b) su capacidad cubre el peso del pedido y (c) su batería garantiza la ruta completa (ida, entrega y retorno) conservando al menos un 25 % de reserva. Si ningún dron es elegible, el sistema deberá dejar el pedido en cola, notificar al cliente la falta de disponibilidad y reintentar la asignación de forma automática. |
| **Criterios de Aceptación** | 1. Con varios drones elegibles, el sistema asigna el más apto para la ruta.<br>2. Un dron cuya batería no cubra la ruta más el 25 % de reserva nunca es asignado.<br>3. Un dron bloqueado o en mantenimiento no es asignado.<br>4. Sin drones disponibles, el pedido pasa a "En espera", el cliente es notificado y el sistema reintenta la asignación en intervalos parametrizables. |
| **Origen** | OE-01, OE-03; Restricciones RES-01 y RES-02 |
| **Requerimiento No Funcional Asociado** | RNF-02, RNF-03, RNF-05 |
| **Prioridad del Requerimiento** | ALTA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RF-05 |
| :--- | :--- |
| **Nombre del Requerimiento** | Verificación Meteorológica y Aplazamiento Automático |
| **Características** | Validación del clima de la zona de entrega antes y durante la operación. |
| **Descripción del Requerimiento** | El sistema deberá evaluar las condiciones meteorológicas de la zona de entrega antes de autorizar el despegue y de forma periódica mientras el pedido esté en espera. Si las condiciones superan los límites parametrizados (viento, precipitación y visibilidad), deberá aplazar el vuelo automáticamente, informar la causa al cliente y reanudar el despacho cuando las condiciones vuelvan a ser aptas. Si se detecta clima adverso con el dron en vuelo, deberá alertar al operador (RF-11). |
| **Criterios de Aceptación** | 1. Con condiciones fuera de los límites, el despegue no es autorizado y el pedido pasa a "Aplazado".<br>2. El cliente recibe una notificación con la causa del aplazamiento.<br>3. Al normalizarse el clima, el sistema reanuda la asignación sin intervención manual.<br>4. Con el dron en vuelo y clima adverso, el operador recibe una alerta. |
| **Origen** | OE-03 |
| **Requerimiento No Funcional Asociado** | RNF-05, RNF-03 |
| **Prioridad del Requerimiento** | ALTA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RF-06 |
| :--- | :--- |
| **Nombre del Requerimiento** | Gestión de Cancelaciones con Penalización |
| **Características** | Cancelación de pedidos y cálculo dinámico de penalización. |
| **Descripción del Requerimiento** | El sistema deberá permitir al cliente cancelar un pedido. Si la cancelación ocurre antes de que el dron inicie la fase de despegue (incluidos los pedidos aplazados o en espera), no se cobrará penalización. Si ocurre después, el sistema deberá cobrar una penalización base del 5 % del valor del domicilio, con un incremento porcentual que crece con la distancia según una tabla parametrizable, y deberá ordenar el retorno del dron a su nodo operativo. Antes de aplicar la cancelación, el sistema deberá mostrar al cliente el valor de la penalización y solicitar su confirmación. |
| **Criterios de Aceptación** | 1. La cancelación antes del despegue genera una penalización de COP 0.<br>2. La cancelación después del despegue genera una penalización mínima del 5 % del valor del domicilio.<br>3. A mayor distancia del domicilio, la penalización calculada es mayor o igual.<br>4. El valor de la penalización se muestra y se confirma antes de cancelar.<br>5. Tras una cancelación en vuelo, el dron recibe la orden de retornar a base. |
| **Origen** | OE-03; Restricción RES-04 |
| **Requerimiento No Funcional Asociado** | RNF-06, RNF-09 |
| **Prioridad del Requerimiento** | MEDIA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RF-07 |
| :--- | :--- |
| **Nombre del Requerimiento** | Rastreo en Tiempo Real |
| **Características** | Visualización en mapa de la ubicación y trayectoria del dron. |
| **Descripción del Requerimiento** | Desde el despegue hasta la entrega, el sistema deberá mostrar al cliente y a los operadores, sobre un mapa, la ubicación y la trayectoria del dron, el estado del pedido y el tiempo estimado de llegada. |
| **Criterios de Aceptación** | 1. La posición del dron se actualiza en pantalla en un máximo de 5 segundos.<br>2. Si se pierde la telemetría, la pantalla muestra la última posición conocida con su hora y el operador recibe una alerta.<br>3. El cliente solo puede ver el rastreo de sus propios pedidos. |
| **Origen** | OE-02 |
| **Requerimiento No Funcional Asociado** | RNF-02, RNF-04 |
| **Prioridad del Requerimiento** | ALTA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RF-08 |
| :--- | :--- |
| **Nombre del Requerimiento** | Protocolo de Entrega Segura y Altura Controlada |
| **Características** | Descenso seguro condicionado a la confirmación del cliente mediante PIN o QR. |
| **Descripción del Requerimiento** | Al llegar al destino, el sistema deberá notificar la llegada al cliente y solicitar la confirmación de recepción mediante un PIN o QR único por pedido. Solo si el cliente ingresa un código válido, el dron deberá descender a la altura segura y liberar la carga; en caso contrario, el dron no descenderá. Si el cliente no confirma dentro del tiempo máximo de espera (parametrizable), el dron deberá retornar a su nodo operativo y el sistema notificará al cliente y al operador. El código será válido únicamente para su pedido y perderá vigencia al completarse o cancelarse. |
| **Criterios de Aceptación** | 1. Con un código válido, el dron desciende a la altura segura, libera la carga y el pedido pasa a "Completado".<br>2. Con un código inválido, el dron no desciende y el sistema informa el error.<br>3. Tras 3 intentos fallidos, se bloquea el descenso y se alerta al operador.<br>4. Al agotarse el tiempo de espera sin confirmación, el dron retorna a base y se notifica al cliente y al operador.<br>5. Un código usado o vencido no es aceptado. |
| **Origen** | OE-04; Restricción RES-05 |
| **Requerimiento No Funcional Asociado** | RNF-01, RNF-05 |
| **Prioridad del Requerimiento** | ALTA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RF-09 |
| :--- | :--- |
| **Nombre del Requerimiento** | Monitoreo de Batería y Desgaste |
| **Características** | Diagnóstico en tiempo real y comparativa histórica mensual del rendimiento de las baterías. |
| **Descripción del Requerimiento** | El sistema deberá recibir la telemetría de batería de cada dron y (a) emitir una alerta de batería baja al cruzar un umbral parametrizable, (b) detectar la pérdida de alcance de la batería frente a su estado inicial, y (c) generar una comparativa mensual del rendimiento diario de cada batería para calcular su desgaste operativo, disponible para el operador. |
| **Criterios de Aceptación** | 1. La alerta de batería baja se genera en un máximo de 10 segundos tras cruzar el umbral.<br>2. El reporte mensual muestra, por dron, el rendimiento diario y el porcentaje de degradación frente al estado inicial.<br>3. Las baterías con desgaste superior al límite configurado se marcan para revisión (RF-10). |
| **Origen** | OE-06 |
| **Requerimiento No Funcional Asociado** | RNF-04, RNF-02 |
| **Prioridad del Requerimiento** | ALTA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RF-10 |
| :--- | :--- |
| **Nombre del Requerimiento** | Gestión de Mantenimiento Preventivo y Correctivo |
| **Características** | Programación y registro de mantenimientos de la flota con hoja de vida por dron. |
| **Descripción del Requerimiento** | El sistema deberá permitir al operador programar y registrar mantenimientos preventivos (por desgaste de batería o uso) y correctivos (por fallas), mantener una hoja de vida por dron y marcar un dron como "En mantenimiento" para excluirlo de la asignación de pedidos. |
| **Criterios de Aceptación** | 1. Un dron "En mantenimiento" no es asignado a pedidos (RF-04).<br>2. Cada registro almacena fecha, tipo, responsable y descripción de la intervención.<br>3. El sistema alerta cuando un mantenimiento preventivo está próximo o vencido. |
| **Origen** | OE-06; Alcance (5) |
| **Requerimiento No Funcional Asociado** | RNF-04, RNF-09 |
| **Prioridad del Requerimiento** | MEDIA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RF-11 |
| :--- | :--- |
| **Nombre del Requerimiento** | Alertas, Bloqueos y Aterrizaje de Emergencia |
| **Características** | Notificación inmediata de eventos críticos y control de emergencia por parte del operador. |
| **Descripción del Requerimiento** | El sistema deberá notificar de inmediato al operador los bloqueos de dron, las fallas operativas, la pérdida de telemetría y los accesos no autorizados, y deberá permitirle ordenar un aterrizaje de emergencia o el retorno a base de un dron en vuelo. Cuando un evento afecte un pedido, el sistema deberá actualizar su estado y notificar al cliente. |
| **Criterios de Aceptación** | 1. La alerta llega al operador en un máximo de 10 segundos desde la detección del evento.<br>2. Cada orden de emergencia queda registrada con usuario, fecha y hora.<br>3. El cliente es notificado cuando su pedido cambia de estado por un evento crítico. |
| **Origen** | OE-04, OE-06; Perspectiva del Producto (10.1) |
| **Requerimiento No Funcional Asociado** | RNF-01, RNF-04, RNF-05 |
| **Prioridad del Requerimiento** | ALTA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RF-12 |
| :--- | :--- |
| **Nombre del Requerimiento** | Notificaciones Multicanal |
| **Características** | Envío de avisos por App, correo electrónico y SMS según la preferencia del usuario. |
| **Descripción del Requerimiento** | El sistema deberá enviar notificaciones sobre el estado de los pedidos (confirmación, asignación, aplazamiento, despegue, llegada, entrega y cancelación), fallas y disponibilidad de drones, por el canal que cada usuario haya elegido en su perfil (App, correo electrónico o SMS). |
| **Criterios de Aceptación** | 1. El usuario puede cambiar su canal preferido desde su perfil.<br>2. Las notificaciones críticas (llegada, aplazamiento y cancelación) se envían en un máximo de 10 segundos.<br>3. Si el envío falla, el sistema registra el error y reintenta. |
| **Origen** | Funcionalidades del Producto (10.2) |
| **Requerimiento No Funcional Asociado** | RNF-02, RNF-03 |
| **Prioridad del Requerimiento** | MEDIA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RF-13 |
| :--- | :--- |
| **Nombre del Requerimiento** | Panel de Gestión y Analítica para Plan Pro |
| **Características** | Herramientas extendidas de gestión de envíos y analítica para clientes empresariales. |
| **Descripción del Requerimiento** | Para las cuentas del Plan Pro, el sistema deberá permitir gestionar múltiples envíos simultáneos y consultar analíticas de rendimiento de sus entregas (entregas por periodo, tiempos de entrega, cancelaciones y costos). |
| **Criterios de Aceptación** | 1. Una cuenta Pro visualiza el listado de sus envíos activos y su estado.<br>2. Las analíticas pueden filtrarse por rango de fechas.<br>3. Las cuentas del Plan Básico no tienen acceso a este panel. |
| **Origen** | Perspectiva del Producto (10.1), Características de los Usuarios (10.3) |
| **Requerimiento No Funcional Asociado** | RNF-02, RNF-07 |
| **Prioridad del Requerimiento** | MEDIA |

### 11.3 Requisitos No Funcionales

| IDENTIFICACIÓN DEL REQUERIMIENTO | RNF-01 |
| :--- | :--- |
| **Nombre del Requerimiento** | Seguridad de la Información |
| **Categoría** | Seguridad |
| **Descripción del Requerimiento** | El sistema deberá: (a) cifrar las comunicaciones entre las aplicaciones, el servidor y los drones con TLS 1.2 o superior; (b) almacenar las contraseñas con hash y sal, y proteger en reposo los códigos PIN/QR y los datos personales; (c) exigir contraseñas de al menos 8 caracteres con complejidad y bloquear temporalmente la cuenta tras 5 intentos fallidos; (d) exigir autenticación multifactor a los operadores; (e) registrar en una bitácora de auditoría los accesos y las órdenes enviadas a los drones; y (f) notificar de inmediato los bloqueos o accesos no autorizados. |
| **Método de Verificación** | Revisión de configuración y análisis de vulnerabilidades basado en OWASP Top 10. |
| **Requerimientos Funcionales Asociados** | RF-01, RF-03, RF-08, RF-11 |
| **Prioridad del Requerimiento** | ALTA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RNF-02 |
| :--- | :--- |
| **Nombre del Requerimiento** | Rendimiento |
| **Categoría** | Eficiencia |
| **Descripción del Requerimiento** | El sistema deberá: (a) cargar las pantallas principales en un máximo de 3 segundos con conexión móvil 4G; (b) actualizar la posición del dron en pantalla en un máximo de 5 segundos; (c) entregar las notificaciones críticas en un máximo de 10 segundos; y (d) soportar hasta 50 usuarios activos diarios por nodo operativo sin degradación (RS-03). |
| **Método de Verificación** | Pruebas de carga y medición de tiempos de respuesta. |
| **Requerimientos Funcionales Asociados** | RF-02, RF-04, RF-07, RF-09, RF-12, RF-13 |
| **Prioridad del Requerimiento** | ALTA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RNF-03 |
| :--- | :--- |
| **Nombre del Requerimiento** | Disponibilidad |
| **Categoría** | Fiabilidad |
| **Descripción del Requerimiento** | El sistema deberá estar disponible al menos el 99 % del tiempo durante el horario operativo de cada mes, con copias de seguridad diarias de la información. |
| **Método de Verificación** | Monitoreo de disponibilidad y revisión de registros de incidentes. |
| **Requerimientos Funcionales Asociados** | RF-04, RF-05, RF-12 |
| **Prioridad del Requerimiento** | ALTA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RNF-04 |
| :--- | :--- |
| **Nombre del Requerimiento** | Fiabilidad y Tolerancia a Fallos |
| **Categoría** | Fiabilidad |
| **Descripción del Requerimiento** | Ante la pérdida del enlace de telemetría o una falla del sistema, el dron deberá mantener un comportamiento seguro (retorno a base o aterrizaje seguro según las funciones de seguridad del fabricante) y el sistema deberá conservar el estado de pedidos y flota, recuperándolo tras un reinicio sin pérdida de información. |
| **Método de Verificación** | Pruebas de fallo simuladas en entorno controlado. |
| **Requerimientos Funcionales Asociados** | RF-07, RF-09, RF-10, RF-11 |
| **Prioridad del Requerimiento** | ALTA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RNF-05 |
| :--- | :--- |
| **Nombre del Requerimiento** | Seguridad Operacional y Cumplimiento Aeronáutico |
| **Categoría** | Seguridad operacional (*safety*) / Legal |
| **Descripción del Requerimiento** | El sistema no deberá permitir en ningún caso un despegue sin la reserva mínima de batería del 25 %, con clima adverso, o hacia zonas no habilitadas. La altura segura de descenso, los límites meteorológicos y las zonas de operación serán parametrizables según el manual del fabricante y la reglamentación aeronáutica colombiana vigente. |
| **Método de Verificación** | Pruebas de vuelo en entorno controlado y revisión de cumplimiento normativo. |
| **Requerimientos Funcionales Asociados** | RF-04, RF-05, RF-08, RF-11 |
| **Prioridad del Requerimiento** | ALTA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RNF-06 |
| :--- | :--- |
| **Nombre del Requerimiento** | Seguridad Financiera y Cumplimiento Fiscal |
| **Categoría** | Seguridad / Legal |
| **Descripción del Requerimiento** | El sistema no deberá almacenar credenciales bancarias del cliente, solo las referencias de las transacciones; deberá llevar un registro de auditoría de pagos, cancelaciones y penalizaciones, y emitir facturas electrónicas conforme a la normativa vigente de la DIAN. |
| **Método de Verificación** | Revisión del modelo de datos, pruebas de facturación y auditoría de transacciones. |
| **Requerimientos Funcionales Asociados** | RF-03, RF-06 |
| **Prioridad del Requerimiento** | ALTA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RNF-07 |
| :--- | :--- |
| **Nombre del Requerimiento** | Usabilidad |
| **Categoría** | Usabilidad |
| **Descripción del Requerimiento** | La interfaz deberá estar en español, ser prioritariamente móvil, permitir iniciar un pedido en un máximo de 3 pasos, mostrar mensajes de error claros y cumplir criterios de accesibilidad WCAG 2.1 nivel AA. Un usuario nuevo deberá poder completar su primer pedido en máximo 5 minutos sin capacitación. |
| **Método de Verificación** | Pruebas de usabilidad con usuarios y revisión de accesibilidad. |
| **Requerimientos Funcionales Asociados** | RF-02, RF-13 |
| **Prioridad del Requerimiento** | MEDIA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RNF-08 |
| :--- | :--- |
| **Nombre del Requerimiento** | Compatibilidad y Portabilidad |
| **Categoría** | Portabilidad |
| **Descripción del Requerimiento** | El sistema deberá funcionar en las dos últimas versiones mayores de Android e iOS y en las últimas dos versiones de los navegadores Chrome, Edge, Firefox y Safari, con diseño adaptable a distintos tamaños de pantalla. |
| **Método de Verificación** | Pruebas en dispositivos y navegadores representativos. |
| **Requerimientos Funcionales Asociados** | Todos (RS-01) |
| **Prioridad del Requerimiento** | MEDIA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RNF-09 |
| :--- | :--- |
| **Nombre del Requerimiento** | Mantenibilidad y Escalabilidad |
| **Categoría** | Mantenibilidad |
| **Descripción del Requerimiento** | El sistema deberá tener una arquitectura modular y código documentado. Las reglas de negocio (tarifas, penalizaciones, umbrales de batería, altura segura y límites meteorológicos) deberán ser parametrizables sin modificar el código, y deberá ser posible incorporar nuevos drones y nodos operativos sin rediseñar el sistema. |
| **Método de Verificación** | Revisión de arquitectura y prueba de modificación de parámetros. |
| **Requerimientos Funcionales Asociados** | RF-06, RF-10 |
| **Prioridad del Requerimiento** | MEDIA |

| IDENTIFICACIÓN DEL REQUERIMIENTO | RNF-10 |
| :--- | :--- |
| **Nombre del Requerimiento** | Protección de Datos Personales |
| **Categoría** | Legal |
| **Descripción del Requerimiento** | El sistema deberá cumplir la Ley 1581 de 2012: solicitar la autorización del titular para el tratamiento de sus datos, publicar la política de tratamiento y permitir al usuario consultar, actualizar y solicitar la supresión de sus datos. |
| **Método de Verificación** | Revisión de flujos de registro, política de datos y pruebas de ejercicio de derechos. |
| **Requerimientos Funcionales Asociados** | RF-01, RF-03 |
| **Prioridad del Requerimiento** | ALTA |

### 11.4 Matriz de Trazabilidad
| REQUERIMIENTO | OBJETIVO ESPECÍFICO | RNF ASOCIADOS | CASO DE PRUEBA |
| :--- | :--- | :--- | :--- |
| RF-01 | Alcance (5) | RNF-01, RNF-10 | Pendiente (fase de pruebas) |
| RF-02 | OE-01, OE-03 | RNF-02, RNF-07 | CP-LOG-01 |
| RF-03 | OE-05 | RNF-06, RNF-01 | CP-PAG-01 |
| RF-04 | OE-01, OE-03 | RNF-02, RNF-03, RNF-05 | CP-LOG-01, CP-LOG-02 |
| RF-05 | OE-03 | RNF-05, RNF-03 | CP-CLM-01 |
| RF-06 | OE-03 | RNF-06, RNF-09 | CP-CAN-01 |
| RF-07 | OE-02 | RNF-02, RNF-04 | CP-LOG-01 |
| RF-08 | OE-04 | RNF-01, RNF-05 | CP-LOG-01, CP-SEG-01 |
| RF-09 | OE-06 | RNF-04, RNF-02 | CP-MAN-01 |
| RF-10 | OE-06 | RNF-04, RNF-09 | Pendiente (fase de pruebas) |
| RF-11 | OE-04, OE-06 | RNF-01, RNF-04, RNF-05 | Pendiente (fase de pruebas) |
| RF-12 | 10.2 | RNF-02, RNF-03 | Pendiente (fase de pruebas) |
| RF-13 | 10.1, 10.3 | RNF-02, RNF-07 | Pendiente (fase de pruebas) |

---

## 12. CONSTRUCCIÓN DE PROTOTIPOS
El diseño de interfaces se centra en la experiencia móvil y web, con flujos de máximo 3 pasos para iniciar compras y despachos. Las pantallas que componen el prototipo son:

| ID | PANTALLA | REQUISITOS RELACIONADOS |
| :--- | :--- | :--- |
| P-01 | Registro e inicio de sesión | RF-01, RNF-10 |
| P-02 | Crear pedido (máximo 3 pasos) con resumen de tarifa | RF-02 |
| P-03 | Pago por transferencia y consulta de factura | RF-03 |
| P-04 | Seguimiento en mapa de la trayectoria del dron DJI FlyCart | RF-07 |
| P-05 | Confirmación de recepción con PIN/QR | RF-08 |
| P-06 | Cancelación de pedido con valor de penalización | RF-06 |
| P-07 | Panel de control para cuentas Pro | RF-13 |
| P-08 | Diagnóstico de batería y hoja de vida de mantenimiento (operador) | RF-09, RF-10 |
| P-09 | Panel de alertas y órdenes de emergencia (operador) | RF-11 |

---

## 13. FORMATO DE CASO DE PRUEBA

| FORMATO DE CASOS DE PRUEBA | |
| :--- | :--- |
| **Objetivo del Caso de Prueba** | Validar la asignación automática del dron, el rastreo en tiempo real y el protocolo de entrega segura con altura controlada. |
| **Identificador** | CP-LOG-01 |
| **Requerimiento(s)** | RF-02, RF-04, RF-07 y RF-08 |
| **Precondiciones** | - Dron DJI FlyCart con batería suficiente para la ruta más el 25 % de reserva y sin bloqueos activos.<br>- Pedido pagado mediante transferencia previa y validado por el sistema.<br>- Cliente con sesión activa en la aplicación móvil. |
| **PASOS** | **RESULTADOS ESPERADOS** |
| 1. El cliente confirma el pedido y la dirección de destino. | 1. El sistema verifica disponibilidad y asigna automáticamente el dron más apto. |
| 2. El dron despega y el sistema inicia el rastreo satelital. | 2. El cliente visualiza la ubicación del dron en su celular, actualizada en máximo 5 segundos. |
| 3. El dron llega al destino y emite el aviso de llegada. | 3. El cliente recibe la notificación de llegada y selecciona confirmar recepción en la app. |
| 4. El cliente introduce el PIN de confirmación. | 4. El dron desciende a la altura segura, libera la carga y el pedido pasa a "Completado". |

| FORMATO DE CASOS DE PRUEBA | |
| :--- | :--- |
| **Objetivo del Caso de Prueba** | Verificar que el sistema no asigna drones sin autonomía suficiente y gestiona la falta de disponibilidad. |
| **Identificador** | CP-LOG-02 |
| **Requerimiento(s)** | RF-04 |
| **Precondiciones** | - Pedido pagado y validado.<br>- Todos los drones del nodo tienen batería insuficiente para la ruta más el 25 % de reserva. |
| **PASOS** | **RESULTADOS ESPERADOS** |
| 1. El sistema intenta asignar un dron al pedido. | 1. Ningún dron es asignado. |
| 2. El sistema evalúa el resultado de la asignación. | 2. El pedido pasa a "En espera" y el cliente recibe la notificación de no disponibilidad. |
| 3. Un dron recarga su batería por encima del mínimo requerido. | 3. El sistema reintenta la asignación automáticamente y asigna ese dron. |

| FORMATO DE CASOS DE PRUEBA | |
| :--- | :--- |
| **Objetivo del Caso de Prueba** | Validar que el pedido solo avanza con pago aprobado y que la factura electrónica se emite y se envía. |
| **Identificador** | CP-PAG-01 |
| **Requerimiento(s)** | RF-03 |
| **Precondiciones** | - Cliente con sesión activa y pedido creado.<br>- Servicio de transferencias y facturación electrónica disponibles. |
| **PASOS** | **RESULTADOS ESPERADOS** |
| 1. El cliente revisa el resumen del pedido. | 1. El sistema muestra el valor del domicilio, el costo de transacción y el total. |
| 2. El sistema consulta el pago antes de recibir la transferencia. | 2. El pedido permanece en "Pendiente de pago" y no entra a asignación. |
| 3. El cliente realiza la transferencia y el pago es aprobado. | 3. El pedido pasa a "Listo para asignación". |
| 4. El sistema genera la factura electrónica. | 4. La factura llega al correo del cliente en máximo 5 minutos. |

| FORMATO DE CASOS DE PRUEBA | |
| :--- | :--- |
| **Objetivo del Caso de Prueba** | Verificar el aplazamiento automático del vuelo por clima adverso. |
| **Identificador** | CP-CLM-01 |
| **Requerimiento(s)** | RF-05 |
| **Precondiciones** | - Pedido pagado y dron asignado.<br>- Condiciones meteorológicas simuladas por encima de los límites parametrizados. |
| **PASOS** | **RESULTADOS ESPERADOS** |
| 1. El sistema evalúa el clima antes del despegue. | 1. El despegue no es autorizado y el pedido pasa a "Aplazado". |
| 2. El cliente consulta su pedido. | 2. El cliente recibe una notificación con la causa del aplazamiento. |
| 3. Las condiciones simuladas vuelven a valores aptos. | 3. El sistema reanuda el despacho sin intervención manual. |

| FORMATO DE CASOS DE PRUEBA | |
| :--- | :--- |
| **Objetivo del Caso de Prueba** | Validar el cálculo de la penalización según el momento de la cancelación. |
| **Identificador** | CP-CAN-01 |
| **Requerimiento(s)** | RF-06 |
| **Precondiciones** | - Dos pedidos pagados: uno aún sin despegue y otro con el dron ya en vuelo.<br>- Tabla de penalización por distancia configurada. |
| **PASOS** | **RESULTADOS ESPERADOS** |
| 1. El cliente cancela el pedido que no ha despegado. | 1. La penalización es COP 0 y el pedido pasa a "Cancelado". |
| 2. El cliente solicita cancelar el pedido con el dron en vuelo. | 2. El sistema muestra una penalización de al menos el 5 % del valor del domicilio, ajustada por distancia, y pide confirmación. |
| 3. El cliente confirma la cancelación. | 3. El pedido pasa a "Cancelado", se registra la penalización y el dron recibe la orden de retornar a base. |

| FORMATO DE CASOS DE PRUEBA | |
| :--- | :--- |
| **Objetivo del Caso de Prueba** | Verificar que el dron no desciende con un código incorrecto y que se bloquea tras intentos fallidos. |
| **Identificador** | CP-SEG-01 |
| **Requerimiento(s)** | RF-08 |
| **Precondiciones** | - Dron en el punto de entrega con el aviso de llegada emitido.<br>- Cliente con sesión activa. |
| **PASOS** | **RESULTADOS ESPERADOS** |
| 1. El cliente introduce un PIN incorrecto. | 1. El dron no desciende y el sistema informa que el código es inválido. |
| 2. El cliente repite dos veces más el PIN incorrecto. | 2. Se bloquea el descenso y el operador recibe una alerta. |
| 3. Se agota el tiempo máximo de espera sin una confirmación válida. | 3. El dron retorna a su nodo operativo y se notifica al cliente y al operador. |

| FORMATO DE CASOS DE PRUEBA | |
| :--- | :--- |
| **Objetivo del Caso de Prueba** | Validar las alertas de batería baja y el reporte mensual de desgaste. |
| **Identificador** | CP-MAN-01 |
| **Requerimiento(s)** | RF-09 |
| **Precondiciones** | - Operador con sesión activa.<br>- Historial de uso de al menos un mes para el dron evaluado. |
| **PASOS** | **RESULTADOS ESPERADOS** |
| 1. El nivel de batería de un dron cruza el umbral configurado. | 1. El operador recibe la alerta de batería baja en máximo 10 segundos. |
| 2. El operador abre el diagnóstico de batería del dron. | 2. El sistema muestra el rendimiento diario y la comparativa mensual. |
| 3. El operador revisa el desgaste frente al estado inicial. | 3. El sistema muestra el porcentaje de degradación y marca la batería para revisión si supera el límite. |
