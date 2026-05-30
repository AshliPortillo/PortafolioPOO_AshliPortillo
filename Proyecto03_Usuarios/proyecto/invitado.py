from usuario import Usuario

class Invitado(Usuario):
    def acceso_sistema(self):
        print("Acceso limitado como invitado")