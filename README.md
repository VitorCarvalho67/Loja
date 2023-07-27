# N&C FutStore: Seu Portal de Moda Online

**N&C FutStore** é uma plataforma de **e-commerce** dedicada ao mundo da moda. Este documento descreve os recursos e funcionalidades de nosso sistema. 

## Recursos

### Cadastro de Clientes
- Cadastro em **múltiplas etapas** para segurança extra.
- Integração com **API para validação de endereço**.
- Utilização de **API e validador para CPF**.
- **Endereço opcional** no cadastro.

### Login e Recuperação de Senha
- Login com **email/telefone e senha**.
- Recuperação de senha via **email** (com link de recuperação) ou **SMS** (com código de recuperação).

### Cadastro de Administradores
- Cadastro em **múltiplas etapas**.
- Integração com **API para validação de endereço**.
- Utilização de **API e validador para CPF**.
- **Endereço opcional** no cadastro.

### Cadastro de Produtos
- Entrada de detalhes do produto incluindo **nome, descrição, preço, tamanhos, cores, imagens, marca e categoria**.

### Gestão de Pedidos
- Registra detalhes de envio como **endereço de entrega, forma de pagamento, dados do cartão, cliente, pedido, produto e vendedor**.
- Avaliação do pedido pelo admin, com possibilidade de **aceitar ou recusar o pedido**.
- **Confirmação de pedido** através de email ou SMS.

### Sistema de Pagamento
- Suporte a diversos métodos de pagamento como **PagSeguro, PayPal, MercadoPago, boleto, cartão de crédito, cartão de débito e PIX**.

### Segurança
- Utiliza **criptografia de dados e de senhas** para proteção extra.

### Sistema de Avaliação de Produtos
- Permite avaliação com **estrelas** e **comentários** sobre os produtos.
- Possibilidade de **curtir e comentar avaliações** de outros usuários.

### Exibição de Produtos
- Opções de tamanho variadas desde **PP a XGG**.
- Organização dos produtos em **diversas categorias**.

### Carrinho de Compras
- Dados armazenados em **banco de dados** para maior segurança e facilidade de acesso.
- Possibilidade de **adicionar, remover e alterar a quantidade** de produtos no carrinho.
- **Cálculo automático do valor total** do pedido.
- Possibilidade de **adicionar cupom de desconto**.
- **CEP para cálculo do frete**.

### Responsividade
- **Design responsivo** para dispositivos mobile, tablet e desktop.

### Ranking de Produtos
- Exibe os **produtos mais vendidos** e **melhor avaliados** por categoria.

### Produtos Populares
- Exibe os **produtos mais vendidos, procurados, avaliados, comentados e curtidos**.

### Sistema de Busca e Filtragem
- Permite a **busca** de produtos por categoria, nome, tamanho e cor.
- **Filtros** disponíveis por preço, tamanho, cor, categoria, marca e avaliação.

### Rastreamento de Pedido
- Funcionalidade de **rastreamento do pedido** para monitorar o status da entrega.

## Organização dos Dados
Nosso sistema organiza os dados em três categorias principais: 
- **Clientes**
- **Produtos**
- **Administradores**
