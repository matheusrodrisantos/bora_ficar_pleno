# Namespaces em PHP

## Teoria

### O que s�o namespaces em PHP e por que us�-los?

Namespaces s�o uma forma de organizar e agrupar classes, interfaces, fun��es e constantes em PHP. Eles ajudam a evitar conflitos de nome, especialmente em projetos grandes, onde bibliotecas diferentes podem ter classes com o mesmo nome. Ao usar namespaces, voc� pode declarar classes com o mesmo nome em diferentes partes de um projeto sem causar colis�es.

**Vantagens de usar namespaces:**
- Evita conflitos de nome.
- Organiza melhor o c�digo em projetos de grande escala.
- Facilita a reutiliza��o de c�digo de bibliotecas externas.
- Melhora a legibilidade e a manuten��o do c�digo.

### Como organizar c�digo usando namespaces em projetos grandes

1. **Estrutura clara de diret�rios**: Em projetos grandes, � comum organizar o c�digo em diferentes diret�rios, onde cada diret�rio corresponde a um namespace.
2. **Nomina��o de namespaces**: Geralmente, o nome do namespace reflete a estrutura do diret�rio do projeto. Por exemplo, se o arquivo `User.php` est� no diret�rio `App/Models`, o namespace seria `App\Models`.
3. **Separa��o l�gica**: Usar namespaces permite separar a l�gica em diferentes m�dulos, como `Controllers`, `Models`, `Services`, etc.

### Importa��o de classes com `use` e autoloading com Composer

- **Importa��o de classes**: Quando voc� deseja usar uma classe que est� em outro namespace, voc� pode import�-la usando a instru��o `use`. Isso evita a necessidade de escrever o caminho completo do namespace toda vez que voc� precisa da classe.
  
  ```php
  use App\Models\User;

  $user = new User();
