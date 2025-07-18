
### Principios Fundamentales de Desarrollo - Reglas Generales, principalmente para glory

1.  **Código Simple y Legible**
    Prioriza la claridad y la simplicidad por encima de todo. Un código fácil de entender es más fácil de mantener, depurar y evolucionar. Aplica estrictamente el principio DRY (Don't Repeat Yourself) para evitar la redundancia. _Osea por favor archivos pequeños con responsabilidades unicas_

2.  **Responsabilidad Única (SRP)**
    Cada componente (clase, función, módulo) debe tener una única razón para cambiar. Esto crea un sistema modular, más fácil de probar y menos propenso a que un cambio genere errores en cascada.

3.  **Estructura Lógica y Jerárquica**
    La organización de los archivos debe reflejar la arquitectura de la aplicación. Una estructura clara e intuitiva permite a los desarrolladores navegar el proyecto y entender la relación entre sus componentes rápidamente. _Osea clases o archivo con diferentes niveles de responsabilidad no deben ir al mismo nivel_

4.  **Estándares de Código Estrictos**
    Define una guía de estilo única (nomenclatura, formato, etc.) y aplícala de forma automatizada siempre que sea posible. La consistencia en el código reduce la carga cognitiva y elimina las discusiones estilísticas.

5.  **Pruebas Automatizadas como Requisito** (no aplica aca)
    Considera las pruebas una parte integral de la funcionalidad, no un añadido posterior. Un buen conjunto de pruebas garantiza que el sistema funciona como se espera y permite refactorizar o añadir cambios futuros con confianza.

6.  **Comentarios para el "Porqué", no para el "Qué"**
    El código debe ser tan claro que se explique por sí mismo. Reserva los comentarios exclusivamente para justificar decisiones de diseño complejas o soluciones no evidentes que un futuro desarrollador necesitaría entender.

7.  **Diseño Desacoplado y Basado en Contratos**
    Diseña componentes que interactúen a través de interfaces o APIs bien definidas (contratos). Esto reduce la dependencia entre ellos, permitiendo que sean modificados o reemplazados de forma segura sin afectar el resto del sistema. _Piensalo como piezas de lego_

8.  **Logging Estratégico y Estructurado** (no es importante aca)
    Implementa un sistema de logs desde el inicio como una característica fundamental. Utiliza logs estructurados (ej. en formato JSON) con niveles de severidad claros para hacer el sistema observable y facilitar drásticamente la depuración. _Cada funcionalidad debe tener un archivo de log por separado, siempre un log central que agrupe todo_

# Tarea

Idea para pagina de contacto:

este es el formulario de contacto anterior 

Nombre:
Email:
Teléfono:
Elegir destino (opcion para otro, aparecer todos los post type de destino para elegir) 

(elegir intereses de 1 a 5, creo que esto se puede simplificar)
Playas paradisíacas 🏝️
Naturaleza y aventura 🌿🏔️
Cultura e historia 🏛️
Experiencias gastronómicas 🍽️
Lujo y relax 🏨💆‍♂️
Vida nocturna y entretenimiento 🎶🍸

fecha de salida 
cuantas noches
presupuesto
aeropuesto mas cercano (no se si esto es necesario)
comentario o idea de viaje

formulario de la competencia que parece mas organizado y pensando: 

En nuba hay dos formularios, uno para solicitar un presupuesto y otro para una cita.

el de presupuesto pregunta 

cual es el destino que quieres en tu proximo viaje?
que otro destino te interesa?

pone a elegir entre opciones

Qué tipo de viaje os gustaría hacer? Podéis elegir varias opciones

Safari
Deporte Activo
Wellness
Arte y Cultura
Gastronomía
Naturaleza
Cuándo quieres viajar?
 No lo sé.
 Sí. Tengo fechas cerradas.
En caso de saber fechas, indícanos aquí
Ida
DD barra MM barra AAAA
En caso de saber fechas, índicanos aqui
Vuelta
DD barra MM barra AAAA

¿Con quién viajas? (familia, pareja, amigos, solo, viaje de novios, viaje de empresa)
Selecciona uno por favor

¿Cuántos sois? (adultos, niños)
Adultos
¿Cuántos sois?
Niños (hasta 12 años) 

el cuantas noche es muy comodo porque es un selector de rango que va desde 1 hasta 30+ cosa que debería hacerse aca

pregunta ¿Cuál es el presupuesto estimado por persona para el viaje (en Euros)?*

pregunta la idea del viaje donde el usuario escribe un mensaje

y al final, el nombre, apellido, email, telefono, direccion, ciudad, codigo postal

el de una cita solo pregunta los datos finales del anterior formulario, pero por el momento no agregaremos este formulario

teniendo en cuenta esta informacion, creo que el formulario de la competencia es mejor, y se debe hacer algo simular pero no igual tomando en cuenta el formulario propio anterior, usar glory para este formulario, se puede extender glory si es necesario. 

El detalle sobre este formulario es que al recibir una solicitud, debería enviar un correo con todos los datos al administrador del sitio web, glory no tiene este soporte pero debería soportarlo opcionalmente, hacerlo sencillo, es decir, enviar un correo a todos los admin de wp

