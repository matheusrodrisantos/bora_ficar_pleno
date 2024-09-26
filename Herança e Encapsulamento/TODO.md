## Heran�a em Programa��o Orientada a Objetos

### Conceito e Mecanismos
* **Defini��o:** A heran�a � um mecanismo que permite que uma classe (classe filha) herde atributos e m�todos de outra classe (classe pai). 
* **Heran�a Simples:** Uma classe herda de apenas uma classe pai.
* **Heran�a M�ltipla:** Uma classe herda de m�ltiplas classes pais (geralmente implementada atrav�s de interfaces em linguagens como Java).
* **Operador `extends`:** Utilizado para indicar a rela��o de heran�a entre classes.
* **Acesso a Membros:** Explicar como acessar m�todos e propriedades da classe pai na classe filha.
* **M�todo `parent::`:** Demonstrar o uso para acessar m�todos sobrepostos na classe pai.

### Pr�tica
* **Exemplo:** Criar uma classe base `Animal` com atributos como `nome` e `idade`, e m�todos como `comer` e `dormir`.
* **Exemplo:** Criar uma classe filha `Cachorro` que herda de `Animal` e adiciona m�todos espec�ficos como `latir`.

## Encapsulamento
### Conceito e Benef�cios
* **Defini��o:** O encapsulamento � o mecanismo de ocultar os detalhes internos de um objeto, expondo apenas as interfaces necess�rias para interagir com ele.
* **Benef�cios:** Prote��o de dados, reutiliza��o de c�digo, facilidade de manuten��o.

### Modificadores de Acesso
* **`public`:** Acess�vel de qualquer lugar.
* **`private`:** Acess�vel apenas dentro da classe.
* **`protected`:** Acess�vel dentro da classe e em classes filhas.

### Pr�tica
* **Exemplo:** Criar uma classe `ContaBancaria` com atributos `saldo` (private) e m�todos `depositar` e `sacar` (public).
* **Exemplo:** Demonstrar como acessar os atributos e m�todos de dentro e fora da classe.

## Exerc�cios Propostos
* Implementar uma hierarquia de classes para representar figuras geom�tricas (classe base `FiguraGeometrica` e classes filhas `Circulo`, `Quadrado`, etc.).
* Criar uma classe `Pessoa` e classes filhas `Aluno` e `Professor`, demonstrando a polimorfismo.
* Implementar uma classe `Carro` com atributos encapsulados e m�todos para simular o funcionamento de um carro.

## Materiais Complementares
* **Links:** Adicionar links para tutoriais, artigos e documenta��es sobre heran�a e encapsulamento.

**Observa��es:**

* **Imagens e Diagramas:** Utilize ferramentas como Mermaid ou PlantUML para criar diagramas de classes e ilustrar os conceitos.
* **C�digo:** Insira blocos de c�digo em Markdown utilizando a sintaxe espec�fica da linguagem (por exemplo, para Python ou Java).
* **Exerc�cios:** Proponha exerc�cios pr�ticos para fixar o aprendizado.
* **N�vel de Detalhe:** Ajuste o n�vel de detalhe de acordo com o p�blico-alvo.

