<?php

implode("/", array_reverse(explode("-", $variavel_que_recebe_a_data)));
// Inverte a data salva no banco de dados]

date_default_timezone_set('America/Sao_Paulo');
// Define o fuso horario

date('d/m/Y H:i:s');
// Mostra a data e a hora

// d – Representa o dia do mês; dois dígitos com zeros à esquerda (01 ou 31)
// D – Representa o dia da semana no texto como uma abreviatura (seg a dom)
// m – Representa o mês em números com zeros à esquerda (01 ou 12)
// M – Representa o mês no texto, abreviado (janeiro a dezembro)
// y – Representa o ano em dois dígitos (08 ou 14)
// Y – Representa o ano em quatro dígitos (2008 ou 2014)

// h – Representa a hora no formato de 12 horas com zeros à esquerda (01 a 12)
// H – Representa a hora no formato de 24 horas com zeros à esquerda (00 a 23)
// i – Representa os minutos com zeros à esquerda (00 a 59)
// s – Representa os segundos com zeros à esquerda (00 a 59)
// a – Representa minúscula ante meridiem e pós-meridiem (am ou pm)
// A – Representa Ante meridiem maiúsculo e Post meridiem (AM ou PM)

// F – Nome do mês em texto completo.
// j- Dia do mês com um ou dois dígitos, quando apropriado. Sem preenchimento de zeros à esquerda.
// S – Sufixo de dois caracteres para um dia do mês de 2 dígitos.
// Y – Ano de quatro dígitos.

// d- Um dia do mês com dois dígitos (incluindo quaisquer zeros iniciais preenchidos ).
// M – Abreviatura de três letras para um mês.
// Y – Ano de quatro dígitos.

// m- Número do mês com quaisquer zeros iniciais preenchidos .
// d- Um dia do mês com dois dígitos (incluindo quaisquer zeros iniciais preenchidos ).
// y – Ano de dois dígitos.
