from admin import Admin
from cliente import Cliente
from invitado import Invitado

# Lista de usuarios
usuarios = []

# Usuarios iniciales
admin1 = Admin("CarlosValentin", "carlosValentin@gmail.com", "Alto")
cliente1 = Cliente("Yami", "Yami@gmail.com", 150)
invitado1 = Invitado("Saul", "Saul@gmail.com")

# Agregar a lista
usuarios.append(admin1)
usuarios.append(cliente1)
usuarios.append(invitado1)

# Menú
while True:

    print("\n===== MENÚ =====")
    print("1. Mostrar usuarios")
    print("2. Agregar administrador")
    print("3. Agregar cliente")
    print("4. Agregar invitado")
    print("5. Salir")

    opcion = input("Selecciona una opción: ")

    # Mostrar usuarios
    if opcion == "1":

        print("\n===== LISTA DE USUARIOS =====")

        # Polimorfismo
        for usuario in usuarios:

            print("\n----------------")

            usuario.saludar()
            usuario.mostrar_datos()
            usuario.acceso_sistema()

    # Agregar administrador
    elif opcion == "2":

        nombre = input("Nombre: ")
        email = input("Email: ")
        nivel = input("Nivel de acceso: ")

        admin = Admin(nombre, email, nivel)

        usuarios.append(admin)

        print("Administrador agregado correctamente")

    # Agregar cliente
    elif opcion == "3":

        nombre = input("Nombre: ")
        email = input("Email: ")
        puntos = int(input("Puntos: "))

        cliente = Cliente(nombre, email, puntos)

        usuarios.append(cliente)

        print("Cliente agregado correctamente")

    # Agregar invitado
    elif opcion == "4":

        nombre = input("Nombre: ")
        email = input("Email: ")

        invitado = Invitado(nombre, email)

        usuarios.append(invitado)

        print("Invitado agregado correctamente")

    # Salir
    elif opcion == "5":

        print("Programa finalizado")
        break

    else:
        print("Opción no válida")