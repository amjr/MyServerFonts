MyServerFont
=========

O MyServerFont é uma pequena aplicação que permite a configuração de um servidor de fontes que podem ser utilizadas via @font-face nos moldes do Google Fonts.

Fácil de configurar, basta instalá-lo em um domínio qualquer e chamar CSS das fontes como no exemplo abaixo:

http://nomedoseudominio.com.br/css/LucidaBrightRegular|ImpactRegular

O símbolo pipe ou barra vertical ("|") serve para separar caso seja necessário carregar mais de uma fonte ao mesmo tempo no projeto!

Automaticamente o sistema identifica qual é o navegador, carregando apenas os arquivos com as extensões necessárias para funcionamento do @font-face.
Configurações:

As fontes obrigatoriamente devem ficar dentro do diretório FONTS, sendo que os nomes dos arquivos internos devem possuir o mesmo nome da pasta da fonte que os contem com excessão do arquivo stylesheet.css, por exemplo:

Para a pasta da fonte ImpactRegular fica:

    Pasta: ImpactRegular

    Arquivos obrigatórios:
        ImpactRegular.eot - arquivo utilizado pelos IEs
        ImpactRegular.woff - arquivo utilizado pelo Firefox, Chrome e Opera
        ImpactRegular.ttf - arquivo utilizado pelo Safari
        ImpactRegular.svg - arquivo utilizado por Iphone e Ipads

    Arquivos opcionais (apenas para visualização da fonte):
        ImpactRegular.html
        stylesheet.css

