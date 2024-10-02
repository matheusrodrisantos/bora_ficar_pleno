# Namespaces em PHP

## Teoria

### O que são namespaces em PHP e por que usá-los?

Namespaces são uma forma de organizar e agrupar classes, interfaces, funções e constantes em PHP. Eles ajudam a evitar conflitos de nome, especialmente em projetos grandes, onde bibliotecas diferentes podem ter classes com o mesmo nome. Ao usar namespaces, você pode declarar classes com o mesmo nome em diferentes partes de um projeto sem causar colisões.

**Vantagens de usar namespaces:**
- Evita conflitos de nome.
- Organiza melhor o código em projetos de grande escala.
- Facilita a reutilização de código de bibliotecas externas.
- Melhora a legibilidade e a manutenção do código.

### Como organizar código usando namespaces em projetos grandes

1. **Estrutura clara de diretórios**: Em projetos grandes, é comum organizar o código em diferentes diretórios, onde cada diretório corresponde a um namespace.
2. **Nominação de namespaces**: Geralmente, o nome do namespace reflete a estrutura do diretório do projeto. Por exemplo, se o arquivo `User.php` está no diretório `App/Models`, o namespace seria `App\Models`.
3. **Separação lógica**: Usar namespaces permite separar a lógica em diferentes módulos, como `Controllers`, `Models`, `Services`, etc.

### Importação de classes com `use` e autoloading com Composer

- **Importação de classes**: Quando você deseja usar uma classe que está em outro namespace, você pode importá-la usando a instrução `use`. Isso evita a necessidade de escrever o caminho completo do namespace toda vez que você precisa da classe.
  
  ```php
  use App\Models\User;

  $user = new User();
