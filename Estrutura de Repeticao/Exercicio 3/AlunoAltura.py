'''
Faça um programa que leia dez conjuntos de dois valores, o primeiro representando o número do aluno e o segundo representando
sua altura em centímetros. Encontre o aluno mais alto e o mais baixo. Mostre o número do aluno mais alto e o número do aluno mais baixo, junto com suas alturas.
'''
import os

maior_altura = int(0)
maior_aluno = str()
for i in range(1, 11):
    os.system("cls")
    nome = str(input(f"Digite o nome do aluno {i}\n"))
    altura = int(input(f"Digite a altura de {nome}\n"))
    if altura > maior_altura:
        maior_altura = altura
        maior_aluno = nome
    else:
        pass
os.system("cls")
print(
    f"A maior altura registrada foi de {maior_altura} do aluno {maior_aluno}")
