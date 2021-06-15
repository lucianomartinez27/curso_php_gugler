## Utilizar los conceptos de programación Web y la POO
1.  Escriba los scripts PHP para definir en primer lugar una clase de nombre Alumno
(**Alumno.php**) que implemente métodos para establecer y obtener los valores para todos los
atributos. En segundo lugar deberá definir una clase denominada Comision (**Comision.php**) que
implemente los métodos necesarios para establecer y obtener los valores de todos sus atributos.
Y en tercer lugar se deberá crear una clase de nombre Asignatura (**Asignatura.php**) que también
implemente y desarrolle los métodos necesarios para establecer y obtener los datos de los
distintos atributos. Finalmente, en este ejercicio se le pedirá que utilice una clase Index
(index.php) para crear los alumnos, las comisiones y las asignaturas.

**Index.php**

- Métodos:
  - (público) ejecutar()

**Asignatura.php**

- Atributos
  - (privado) _codigo
  - (privado) _nombre
  - (privado) _observaciones
  - (privado) _comisiones
- Métodos
  - (público) __construct()
  - (público) setCodigo($codigo)
  - (público) getCodigo()
  - (público) setNombre($nombre)
  - (público) getNombre()
  
**Comision.php**
- Atributos
  - (privado) _codigo
  - (privado) _lugar
  - (privado) _dia
  - (privado) _horaInicio
  - (privado) _horaFin
  - (privado) _cupo
  - (privado) _alumnos

- Métodos
  - (público) __construct()
  - (público) setCodigo($codigo)
  - (público) getCodigo()
  - (público) setLugar($lugar)
  - (público) getLugar()

**Alumno.php**
- Atributos
  - (privado) _codigo
  - (privado) _apellidos
  - (privado) _nombres
  - (privado) _numeroDocumento
  - (privado) _tipoDocumento
  - (privado) _tipoAlumno
- Métodos
  - (público) __construct()
  - (público) setCodigo($codigo)
  - (público) getCodigo()
  - (público) setApellidos($apellidos)
  - (público) getApellidos()

2.  Teniendo en cuenta el ejemplo de clases y objetos de PHP (Index, Facultad, Persona,
Mascota) de la clase de teoría se le solicitará que termine de implementar el mismo, creando y
definiendo las clases que corresponde.
3. Realice un script de nombre Persona.php que defina y use una clase (Persona) con
los siguientes atributos y métodos:
**Persona.php**
- Atributos
  - (privado) tipoDocumento
  - (privado) numeroDocumento
  - (privado) apellidos
  - (privado) nombres
  - (privado) telefono
  - (privado) correoElectronico
- Métodos
  - (público) __construct()
  - (público) cambiarNumeroTelefono()
  - (público) cambiarCorreoElectronico()
  - (público) obtenerApellidos()
  - (público) obtenerNombres()

4. Mejore la clase Alumno (Alumno.php) del primer ejercicio de la practica empleando
constantes para determinar el tipo de alumno. La mejora se puede agregar en el constructor y el
método getter de la clase.
5. Para los puntos 2, 3 y 4 agregar el método __toString() mostrando información que
identifique el objeto.