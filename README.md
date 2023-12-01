# Scapets (4º Squad)

Atualização do código da Scapets feito pelo Squad 4.

## Instalação

> **Intalando PHP (Windows)**
>
>     --> Vá para [página de instalação do PHP](https://www.php.net/downloads) e selecione uma versão *Current Stable*
>    
>     --> Depois escolha um arquivo *Thread Safe* e faça o download
>    
>     --> Extraia a pasta baixada e renomei a pasta para php-(versão intalada) por pratiicidade
>    
>     --> Copie a pasta para o *Local Disk*
>    
>     --> Copie o caminho da pasta no *Local Disk*
>    
>     --> Procure por variáveis de ambiente do sistema na barra de busca do windows
>    
>     --> Clique em variáveis de ambiente
>    
>     --> Busque por path dentro de variáveis do sistema
>    
>     --> Clique em editar e em seguida clique em *new* e então cole o caminho da pasta PHP no *Local Disk*
>    
>     --> Abra o cmd e use o comando: php --version e confira se o php foi instalado corretamente
---
> **Abrindo a página**
>
>     --> Clone o repositório utilizando o comando: git clone https://github.com/KaioVinicios/Squad-4 
>
>     --> Abra a página do repositório utilizando o *VS Code*
>    
>     --> Selecione *Run and Debug*
>    
>     --> Abra o site com a opção *Launch in built-in Server and debug*

## Fazendo Alterações

> **Página Principal**
> A página principal é regida pelos arquivos:
> 
>     --> index.php
>     --> _head.php
>     --> all.min.css
>     --> all.min.js
> 
> Para fazer modificações dentro do seu css recomenda-se fazer a alteração dentro da **site.scss**, passar para a **site.css** e então para o **all.min.css**.
---   
> **Outras Páginas**
> As páginas do FAQ, Reels, Quem-Somos e de Feedback são regidas por diferentes arquivos, cada uma possui seu próprio html, css e js, estando dispostas dessa forma:
> 
> Scaptes
> 
> │
> 
> └───sub
> 
> │   │   faq.html
> 
> │   │   feedback.html
> 
> │   │   quemsomos.html
> 
> │   │   reels.html
> 
> │
> 
> └───assets
> 
> │   │
> 
> │   └───css
> 
> │   │   │   faq.css
> 
> │   │   │   feedbackCss.css
> 
> │   │   │   qs.css
> 
> │   │   │   reels.css
>
> │   │   │
> 
> │   │
> 
> │   └───js
> 
> │   │   │   qs.js
> 
> │   │   │   reels.js
> 
> Para fazer modificações nessas páginas será necessário modificar os seus respectivos arquivos css e js.
