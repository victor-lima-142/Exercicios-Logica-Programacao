'''
Faça um programa que peça o tamanho de um arquivo para download (em MB)
e a velocidade de um link de Internet (em Mbps), calcule e informe o tempo
aproximado de download do arquivo usando este link (em minutos).
'''
import math
tamanho = float(input("Informe o tamanho do arquivo (MB):"))
velocidade = float(input("Informe a velocidade da internet (Mbps):"))
tempo = float(tamanho / velocidade)
tempo = tempo / 60
tempo = round(tempo)
if tempo < 1:
    print('Em menos de um minuto')
else:
    print(f'{tempo} minutos')
