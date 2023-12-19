# SITE GTRONIC

Gtronic - Aluguel de Impressoras e Manutenção de Computadores

## 🚀 Começando

Essas instruções permitirão que você obtenha uma cópia do projeto em operação na sua máquina local para fins de desenvolvimento e teste.

Consulte **[Implantação](#-implanta%C3%A7%C3%A3o)** para saber como implantar o projeto.

### 📋 Pré-requisitos

De que você precisa para usar esse tema?

* [WORDPRESS]() - O framework web usado
* [SERVIDOR APACHE]() - Para  rodar o PHP
* [MYSQL](/) - Usada para Banco de dados

### 🔧 Instalação

Uma série de exemplos passo-a-passo que informam o que você deve executar para ter um ambiente de desenvolvimento em execução.

Diga como essa etapa será:

```
Dar exemplos
```

E repita:

```
Até finalizar
```

Termine com um exemplo de como obter dados do sistema ou como usá-los para uma pequena demonstração.

## ⚙️ Executando os testes

Explicar como executar os testes automatizados para este sistema.

### 🔩 Analise os testes de ponta a ponta

Explique que eles verificam esses testes e porquê.

```
Dar exemplos
```

### ⌨️ E testes de estilo de codificação

Explique que eles verificam esses testes e porquê.

```
Dar exemplos
```

## 📦 Manutenção


## FRONT PAGE
* Para mudar as fotos e o video do youtube da página inicial, deve ser feita pelo código
 pasta do plugin
\wp-content\plugins\desert-companion\inc\themes\softme\front\section-about.php
----------------------------------------------------------------------------------------------
* Os quadrados que ficam flutuando na tela tem a classe
.pattern-layer parallax-scene
----------------------------------------------------------------------------------------------

## ✒️ Autores

Mencione todos aqueles que ajudaram a levantar o projeto desde o seu início

* **Lucas P** - *Trabalho Inicial* - [umdesenvolvedor](https://github.com/linkParaPerfil)
* **Lucas P** - *Documentação* - [fulanodetal](https://github.com/linkParaPerfil)



## 📄 Licença

Permitido o uso apenas para Gtronic informática.

## 🎁 Expressões de gratidão

* Conte a outras pessoas sobre este projeto 📢;
* Convide alguém da equipe para uma cerveja 🍺;
* Um agradecimento publicamente 🫂;
* etc.


---
⌨️ com ❤️ por Lucas 😊




## ✒️ FUNÇÃO EXTRA PARA   ADICIONA IMAGEM PARA CATEGORIAS
FUNCTIONS.PHP +OU- LINHA 100

```
function my_category_module()
{
    // this action is deprecated
    //add_action('edit_category_form_fields', 'add_image_cat');

    // Add these actions for edit and add
    add_action('edited_category', 'save_image');
    add_action('create_category', 'save_image');
    add_action('category_edit_form_fields', 'edit_image_cat');
}
add_action('init', 'my_category_module');


function edit_image_cat($tag)
{
    $category_images = get_option('category_images');
    $category_image = '';
    if (is_array($category_images) && array_key_exists($tag->term_id, $category_images)) {
        $category_image = $category_images[$tag->term_id];
    }
    ?>
    <tr>
        <th scope="row" valign="top"><label for="auteur_revue_image">Image</label></th>
        <td>
            <?php
            if ($category_image != "") {
                ?>
                <img src="<?php echo $category_image; ?>" alt="" title="" />
                <?php
            }
            ?>
            <br />
            <!-- Add this html here -->
            <input type="text" class="regular-text" id="custom_category_image" name="category_image" value="<?php echo $category_image; ?>">
            <button class="set_category_image button">Set Image url</button>

            <!--
                <input type="text" name="category_image" id="category_image" value="<?php echo $category_image; ?>"/><br />
                <span>This field allows you to add a picture to illustrate the category. Upload the image from the media tab WordPress and paste its URL here.</span>
            -->
        </td>
    </tr>

    <?php
}

function save_image($term_id)
{
    if (isset($_POST['category_image'])) {
        //load existing category featured option
        $category_images = get_option('category_images');
        //set featured post ID to proper category ID in options array
        $category_images[$term_id] =  $_POST['category_image'];
        //save the option array
        update_option('category_images', $category_images);
    }
}


// Enquey media elements
add_action('admin_enqueue_scripts', function () {
    if (is_admin())
        wp_enqueue_media();
});

// Add JS using admin_footer or enque thorugh hooks
add_action('admin_footer', 'my_footer_scripts');
function my_footer_scripts()
{
    ?>
    <script>
        jQuery(document).ready(function() {
            if (jQuery('.set_category_image').length > 0) {
                if (typeof wp !== 'undefined' && wp.media && wp.media.editor) {
                    jQuery('.set_category_image').on('click', function(e) {
                        e.preventDefault();
                        var button = jQuery(this);
                        var url_input = jQuery("#custom_category_image");
                        wp.media.editor.send.attachment = function(props, attachment) {
                            url_input.val(attachment.url);
                        };
                        wp.media.editor.open(button);
                        return false;
                    });
                }
            }
        });
    </script>
    <?php
}


// FIM ADICIONA IMAGEM PARA CATEGORIAS
```


## ✒️ FUNÇÃO EXTRA PARA   ADICIONA IMAGEM PARA CATEGORIAS
FUNCTIONS.PHP +OU- LINHA 100
```
  $category_images = get_option('category_images');
                    $category_image = '';
                    if (is_array($category_images)) {
                       if(isset($category_images[$categoria->cat_ID])){
                        echo $category_images[$categoria->cat_ID];
                       };
                    }
					
```				