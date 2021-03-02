'''
Faça um programa que leia um nome de usuário ea sua senha e não aceite a senha igual ao nome do usuário,
mostrando uma mensagem de erro e voltando a pedir as informações.
'''
import os

nome = str(input("Digite seu nome:\n"))
senha = str(input("Digite sua senha:\n"))

while nome == senha:
    os.system('cls')
    print("Nome e senha iguais. Faça novamente:\n\n")
    nome = str(input("Digite seu nome:\n"))
    senha = str(input("Digite sua senha:\n"))
    if nome != senha:
        print(f"Bom trabalho.\nNome: {nome}\nSenha: {senha}")
        break
