class Usuario: #Clase base
# Constructor
    def __init__(self, nombre, email):
        self.nombre = nombre
       #Validacion de e-mail
        if "@" in email and "." in email:
            self.email = email
        else:
            print("Email no válido")
            self.email = "No válido"
#Mostrar
    def mostrar_datos(self):

        print("Nombre:", self.nombre)
        print("Email:", self.email)

    def acceso_sistema(self):

        print("Acceso básico")

    def saludar(self):

        print("Hola,", self.nombre)