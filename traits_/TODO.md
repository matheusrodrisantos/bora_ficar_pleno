# Traits em PHP

## Teoria

### O que são traits e por que usá-las?

Traits são um mecanismo no PHP que permite reutilizar métodos em várias classes. Eles funcionam como blocos de código que podem ser "importados" para diferentes classes, sem a necessidade de herança. Isso permite o compartilhamento de comportamentos comuns entre classes diferentes sem precisar duplicar código.

**Por que usar traits?**
- Permitem reutilizar código em diferentes classes.
- Facilitam o compartilhamento de funcionalidades comuns sem depender de herança.
- Ajudam a evitar a repetição de código, promovendo a reutilização.

### Como os traits ajudam a resolver problemas de herança múltipla

PHP não suporta herança múltipla (onde uma classe pode herdar de várias classes). Isso pode ser um problema quando uma classe precisa de funcionalidades de várias fontes diferentes. Traits resolvem esse problema permitindo que classes "importem" métodos de várias fontes sem herdar de múltiplas classes. Assim, uma classe pode usar métodos de diversos traits ao mesmo tempo.

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

## Diferença entre traits e interfaces


Traits fornecem implementação concreta de métodos que podem ser reutilizados em várias classes. Ou seja, eles permitem compartilhar código funcional entre classes.

Interfaces apenas definem a assinatura de métodos, ou seja, quais métodos uma classe deve implementar, mas não fornecem implementação concreta. As interfaces garantem que uma classe siga um determinado contrato.

| Aspecto            | **Traits**                      | **Interfaces**                         |
|--------------------|----------------------------------|----------------------------------------|
| **Implementação**   | Oferece métodos concretos        | Apenas assinaturas de métodos          |
| **Reutilização**    | Compartilha código entre classes | Força a implementação em cada classe   |
| **Herança Múltipla**| Simula herança múltipla          | Implementação de múltiplas interfaces  |

## Diferença entre traits, classes bases, classes abastratas 

Quando usar cada um?

    Use Traits: Quando você precisa reutilizar métodos em várias classes sem criar uma hierarquia de herança, e quando diferentes classes precisam de funcionalidades semelhantes, mas não estão relacionadas diretamente.

    Use Classes-mãe: Quando você quer definir um comportamento comum que será compartilhado por classes relacionadas e deseja criar uma hierarquia lógica no seu projeto.

    Use Classes Abstratas: Quando você deseja fornecer uma estrutura para outras classes seguirem, garantindo que certas funcionalidades sejam implementadas nas subclasses.


| Característica        | **Trait**                               | **Classe-mãe/Base**                        | **Classe Abstrata**                       |
|-----------------------|-----------------------------------------|--------------------------------------------|-------------------------------------------|
| **Instanciação**       | Não pode ser instanciada                |  <span>&#10003;</span> Pode ser instanciada                       | Não pode ser instanciada                  |
| **Herança**            | Não cria uma relação de herança         | Cria uma relação de herança (uma classe filha) | Cria uma relação de herança              |
| **Métodos concretos**  | Contém métodos concretos                | Contém métodos concretos e propriedades    | Contém métodos concretos e abstratos     |
| **Métodos abstratos**  | Não pode ter métodos abstratos          | Pode ter métodos concretos                 | Pode ter métodos abstratos               |
| **Herança múltipla**   | Suporta "herança múltipla" (pode usar vários traits) | Não suporta herança múltipla              | Não suporta herança múltipla             |
| **Propósito**          | Reutilização de código em várias classes | Fornece comportamento comum para subclasses | Fornece uma estrutura a ser seguida por subclasses |
