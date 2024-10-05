
# Teoria e Prática de Polimorfismo em Programação Orientada a Objetos

## 1. Teoria

### O que é Polimorfismo em OOP?
Polimorfismo é um dos pilares da Programação Orientada a Objetos (OOP). Ele permite que objetos de diferentes classes sejam tratados de maneira uniforme quando compartilham a mesma interface ou classe base. Isso facilita o desenvolvimento de sistemas flexí­veis e reutilizáveis.



### Diferentes Tipos de Polimorfismo
- **Sobrecarga de Métodos (Overloading)**: São a capacidade de definir múltiplos métodos com o mesmo nome, mas com diferentes parâmetros. Isso permite que um método seja adaptado a diferentes tipos 


- **Sobrescrita de Métodos (Overriding)**: Ocorre quando uma classe filha implementa um método já definido em sua classe base. A sobrescrita permite personalizar o comportamento herdado.

```
class a{

    metodo1(){
        
    }
}

class b extends a {
    metodo1(int a){
        
    }

}

b = new b();
b->metodo1(a);
```

### Implementação de Polimorfismo com Interfaces e Classes Abstratas
- **Interfaces**: Definem contratos de métodos que as classes que as implementam devem seguir. Isso permite que diferentes classes implementem esses métodos de maneiras variadas.
- **Classes Abstratas**: São classes que não podem ser instanciadas diretamente e servem como base para outras classes. Elas podem ter métodos abstratos (sem implementação) e concretos (com implementação), promovendo o polimorfismo.

## 2. Prática

### Exemplo de Implementação de Polimorfismo

1. **Criar uma Interface**:
   Defina uma interface com um método comum que será implementado por diferentes classes.

2. **Implementar Diferentes Classes**:
   Crie classes que implementem essa interface e forneçam sua própria implementação para o método.

3. **Método Polimórfico**:
   Implemente um método que aceite objetos de diferentes classes, desde que sigam a interface definida, permitindo a execução polimórfica.

4. **Classe Base e Sobrescrita**:
   Crie uma classe base com um método, e sobrescreva esse método em uma classe filha para personalizar o comportamento.