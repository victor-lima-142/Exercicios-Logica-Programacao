'''
Faça um Programa que leia 2 números e em seguida pergunte ao usuário qual operação ele deseja realizar.
O resultado da operação deve ser acompanhado de uma frase que diga se o número é:
par ou ímpar;
positivo ou negativo;
inteiro ou decimal.
'''


def descreve(numero):
    numeroParaTexto = str(numero)
    frase = "O número " + numeroParaTexto + " é:"
    if (numero % 2 != 0):
        frase = frase + "\nÍmpar;"
    else:
        frase = frase + "\nPar;"

    if numero < 0:
        frase = frase + '\nNegativo;'
    else:
        frase = frase + '\nPositivo;'

    if numero // 1 == numero:
        frase = frase + '\nInteiro;'
    else:
        frase = frase + '\nDecimal;'

    print(frase)


a = float(input("Insira o primeiro número:\n"))
b = float(input("Insira o segundo número:\n"))

decisao = int(input(
    "O que você deseja fazer?\n[1] Soma\n[2] Subtrai\n[3] Divide\n[4] Multiplicação\n\n"))

if decisao == 1:
    resultado = a + b
    descreve(resultado)
elif decisao == 2:
    resultado = a - b
    descreve(resultado)
elif decisao == 3:
    resultado = a / b
    descreve(resultado)
elif decisao == 4:
    resultado = a*b
    descreve(resultado)
