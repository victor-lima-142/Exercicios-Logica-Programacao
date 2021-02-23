'''
Verificar a hora do dia e dar a saudação correta:
Bom dia;
Boa tarde;
Boa noite
'''
import datetime as dt


def verifica(hora: int, hora_especifica: str):
    if 6 < hora < 13:
        print("São {}. Bom dia.".format(hora_especifica))
    elif 13 < hora < 19:
        print("São {}. Boa tarde.".format(hora_especifica))
    elif 19 < hora < 6:
        print("São {}. Boa noite.".format(hora_especifica))


hora_especifica = dt.datetime.now()
hora_especifica = hora_especifica.strftime('%H:%M')
hora = dt.datetime.now().hour

verifica(hora, hora_especifica)
