## Herança em Programação Orientada a Objetos

### Conceito e Mecanismos
* **Definição:** A herança é um mecanismo que permite que uma classe (classe filha) herde atributos e métodos de outra classe (classe pai). 
* **Herança Simples:** Uma classe herda de apenas uma classe pai.
* **Herança Múltipla:** Uma classe herda de múltiplas classes pais (geralmente implementada atravçs de interfaces em linguagens como Java).
* **Operador `extends`:** Utilizado para indicar a relação de herança entre classes.
* **Acesso a Membros:** Explicar como acessar métodos e propriedades da classe pai na classe filha.
* **método `parent::`:** Demonstrar o uso para acessar métodos sobrepostos na classe pai.

### Prática
* **Exemplo:** Criar uma classe base `Animal` com atributos como `nome` e `idade`, e métodos como `comer` e `dormir`.
* **Exemplo:** Criar uma classe filha `Cachorro` que herda de `Animal` e adiciona métodos especçficos como `latir`.

## Encapsulamento
### Conceito e Benefícios
* **Definição:** O encapsulamento é o mecanismo de ocultar os detalhes internos de um objeto, expondo apenas as interfaces necessárias para interagir com ele.
* **Benefícios:** Proteção de dados, reutilização de cçdigo, facilidade de manutenção.

### Modificadores de Acesso
* **`public`:** Acessçvel de qualquer lugar.
* **`private`:** Acessçvel apenas dentro da classe.
* **`protected`:** Acessçvel dentro da classe e em classes filhas.

### Prática
* **Exemplo:** Criar uma classe `ContaBancaria` com atributos `saldo` (private) e métodos `depositar` e `sacar` (public).
* **Exemplo:** Demonstrar como acessar os atributos e métodos de dentro e fora da classe.

## Exercícios Propostos
* Implementar uma hierarquia de classes para representar figuras geométricas (classe base `FiguraGeometrica` e classes filhas `Circulo`, `Quadrado`, etc.).
* Criar uma classe `Pessoa` e classes filhas `Aluno` e `Professor`, demonstrando a polimorfismo.
* Implementar uma classe `Carro` com atributos encapsulados e métodos para simular o funcionamento de um carro.

## Materiais Complementares
* **Links:** Adicionar links para tutoriais, artigos e documentaçães sobre herança e encapsulamento.

**Observaçães:**

* **Imagens e Diagramas:** Utilize ferramentas como Mermaid ou PlantUML para criar diagramas de classes e ilustrar os conceitos.
* **Cçdigo:** Insira blocos de cçdigo em Markdown utilizando a sintaxe especçfica da linguagem (por exemplo, para Python ou Java).
* **Exercícios:** Proponha Exercícios práticos para fixar o aprendizado.
* **Nível de Detalhe:** Ajuste o nível de detalhe de acordo com o pçblico-alvo.

