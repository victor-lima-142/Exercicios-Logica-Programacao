'''
Faça um programa para uma loja de tintas. O programa deverá pedir o tamanho em metros quadrados da área a ser pintada.
Considere que a cobertura da tinta é de 1 litro para cada 3 metros quadrados e que a tinta é vendida em latas de 18 litros,
que custam R$ 80,00. Informe ao usuário a quantidades de latas de tinta a serem compradas e o preço total.
'''
import math

area = float(input('Insira o tamanho da área em metros quadrados:'))

litros = float(area/3)

latas = float(litros/18)

print(f"Area: {area} m²")
print(f"Litros: {round(litros, 2)}")
print(f"Latas: {round(latas, 1)}")
if latas <= 1.0:
    print('Será necessária apenas 1 lata de tinta que custará R$ 80.00 .')
else:
    latas = math.ceil(latas)
    valor = latas*80
    print(f'Serão necessárias {latas} latas de tinta que custará R$ {valor} .')
