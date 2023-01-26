# Problema

- Necessário compartilhar informações, independente de qual ponto da aplicação é solicitado. Exemplo: Preferências, configurações;

- Evitar o uso de variáveis globais, visto que elas não possuem encapsulamento o que diminui o controle sob implementações;

- Necessário compartilhar uma "única e verdadeira informação".

## Características

- Classe é visível globalmente;

- Deve haver um método que crie apenas uma instância do objeto, a qual será usada por todo o sistema;

- Deve ser possível instanciar a classe somente dentro dela mesmo;

- Na maior parte dos casos é utilizado o método **"getInstance()"** para retornar a instância da classe associada ao Singleton. Caso não haja um objeto definido, o método instância e da início ao processo. Obs.: o método deve ser estático;

- No PHP é possível definir o método construtor como "private", impedindo que sejam criado novas instâncias da classe.