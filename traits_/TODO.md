# Traits em PHP

## Teoria

### O que s�o traits e por que us�-las?

Traits s�o um mecanismo no PHP que permite reutilizar m�todos em v�rias classes. Eles funcionam como blocos de c�digo que podem ser "importados" para diferentes classes, sem a necessidade de heran�a. Isso permite o compartilhamento de comportamentos comuns entre classes diferentes sem precisar duplicar c�digo.

**Por que usar traits?**
- Permitem reutilizar c�digo em diferentes classes.
- Facilitam o compartilhamento de funcionalidades comuns sem depender de heran�a.
- Ajudam a evitar a repeti��o de c�digo, promovendo a reutiliza��o.

### Como os traits ajudam a resolver problemas de heran�a m�ltipla

PHP n�o suporta heran�a m�ltipla (onde uma classe pode herdar de v�rias classes). Isso pode ser um problema quando uma classe precisa de funcionalidades de v�rias fontes diferentes. Traits resolvem esse problema permitindo que classes "importem" m�todos de v�rias fontes sem herdar de m�ltiplas classes. Assim, uma classe pode usar m�todos de diversos traits ao mesmo tempo.

```php
trait Logger {
    public function log($message) {
        echo "Log: $message";
    }
}

trait Notifier {
    public function notify($message) {
        echo "Notify: $message";
    }
}

class User {
    use Logger, Notifier;
}

```

## Diferen�a entre traits e interfaces


Traits fornecem implementa��o concreta de m�todos que podem ser reutilizados em v�rias classes. Ou seja, eles permitem compartilhar c�digo funcional entre classes.

Interfaces apenas definem a assinatura de m�todos, ou seja, quais m�todos uma classe deve implementar, mas n�o fornecem implementa��o concreta. As interfaces garantem que uma classe siga um determinado contrato.

| Aspecto            | **Traits**                      | **Interfaces**                         |
|--------------------|----------------------------------|----------------------------------------|
| **Implementa��o**   | Oferece m�todos concretos        | Apenas assinaturas de m�todos          |
| **Reutiliza��o**    | Compartilha c�digo entre classes | For�a a implementa��o em cada classe   |
| **Heran�a M�ltipla**| Simula heran�a m�ltipla          | Implementa��o de m�ltiplas interfaces  |

## Diferen�a entre traits, classes bases, classes abastratas 

Quando usar cada um?

    Use Traits: Quando voc� precisa reutilizar m�todos em v�rias classes sem criar uma hierarquia de heran�a, e quando diferentes classes precisam de funcionalidades semelhantes, mas n�o est�o relacionadas diretamente.

    Use Classes-m�e: Quando voc� quer definir um comportamento comum que ser� compartilhado por classes relacionadas e deseja criar uma hierarquia l�gica no seu projeto.

    Use Classes Abstratas: Quando voc� deseja fornecer uma estrutura para outras classes seguirem, garantindo que certas funcionalidades sejam implementadas nas subclasses.


| Caracter�stica        | **Trait**                               | **Classe-m�e/Base**                        | **Classe Abstrata**                       |
|-----------------------|-----------------------------------------|--------------------------------------------|-------------------------------------------|
| **Instancia��o**       | N�o pode ser instanciada                |  <span>&#10003;</span> Pode ser instanciada                       | N�o pode ser instanciada                  |
| **Heran�a**            | N�o cria uma rela��o de heran�a         | Cria uma rela��o de heran�a (uma classe filha) | Cria uma rela��o de heran�a              |
| **M�todos concretos**  | Cont�m m�todos concretos                | Cont�m m�todos concretos e propriedades    | Cont�m m�todos concretos e abstratos     |
| **M�todos abstratos**  | N�o pode ter m�todos abstratos          | Pode ter m�todos concretos                 | Pode ter m�todos abstratos               |
| **Heran�a m�ltipla**   | Suporta "heran�a m�ltipla" (pode usar v�rios traits) | N�o suporta heran�a m�ltipla              | N�o suporta heran�a m�ltipla             |
| **Prop�sito**          | Reutiliza��o de c�digo em v�rias classes | Fornece comportamento comum para subclasses | Fornece uma estrutura a ser seguida por subclasses |
