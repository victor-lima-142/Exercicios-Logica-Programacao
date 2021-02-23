'''
Faça um programa que calcule as raízes de uma equação do segundo grau, na forma ax2 + bx + c.
O programa deverá pedir os valores de a, b e c e fazer as consistências, informando ao usuário nas seguintes situações:

Se o usuário informar o valor de A igual a zero, a equação não é do segundo grau e o programa
não deve fazer pedir os demais valores, sendo encerrado;

Se o delta calculado for negativo, a equação não possui raizes reais. Informe ao usuário e encerre o programa;

Se o delta calculado for igual a zero a equação possui apenas uma raiz real; informe-a ao usuário;

Se o delta for positivo, a equação possui duas raiz reais; informe-as ao usuário;
'''

import math

a = float(input('digite o primeiro termo:\n'))
b = float(input('digite o segundo termo:\n'))
c = float(input('digite o terceiro termo:\n'))

delta = (b * b) - (4 * a * c)
raiz = math.sqrt(delta)
divisor = 2 * a

if delta < 0:
    print("Não há raízes")
    exit()
elif delta == 0:
    x = ((b * -1) + raiz) / divisor
    print("Há uma raiz distinta apenas: {}".format(x))
    exit()
else:
    x1 = ((b * -1) + raiz) / divisor
    x2 = ((b * -1) - raiz) / divisor
    print("Há duas raízes distintas: \n\nx1: {} \n\nx2: {}".format(x1, x2))
    exit()
