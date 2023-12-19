<?php
/**
 * Template Name: Categorias
 */

get_header();

$categories = get_categories(array(
    'orderby' => 'name',
    'order' => 'ASC',
    'hide_empty' => 0,
));;
$categorias = [];
foreach ($categories as $category) {
    $categorias[] = $category;
}


/**
 *
 * echo count($categorias);
 *
 * foreach ($categories as $category) {
 * echo $category->cat_name."<br>";
 * }
 * foreach ($posts_brother as $post) {
 * var_dump($post);
 * }
 * foreach ($posts_brother as $post) {
 * var_dump($post);
 * }
 * foreach ($posts_brother as $post) {
 * var_dump($post);
 * }
 **/

?>


<div id="content" class="site-content">

    <section class="dt_posts dt-py-default">
        <div class="dt-container">
            <div class="dt-row dt-g-5">

                <?php
                foreach ($categorias as $key => $categoria) {


                    //PEGA IMAGEM DA CATEGORIA
                    $category_images = get_option('category_images');
                    $category_image = '';
                    if (is_array($category_images)) {
                       if(isset($category_images[$categoria->cat_ID])){
                           $category_image= $category_images[$categoria->cat_ID];
                       };
                    }
                    //FIM PEGA IMAGEM DA CATEGORIA




                    $categoryId = $categoria->cat_ID;
                    $args = array(
                        "category" => $categoryId,
                    );
                    $args = array(
                        'orderby' => 'name',
                        'order' => 'ASC',
                        "category" => $categoryId,
                    );
                    $posts = get_posts($args);


                    ?>


                    <div id="" class="dt-col-lg-4 wow fadeInUp"
                         style="visibility: visible; animation-name: fadeInUp;">

                        <div class="dt_post_block wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms"
                             style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInUp;">
                            <article id="post-204"
                                     class="dt_post_item dt_posts--one dt-mb-4 post-204 post type-post status-publish format-standard hentry category-brother category-tutoriais">
                                <div class="inner">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                    <img style="width:124px;max-height:30px;" src="<?php echo $category_image?$category_image:'null'; ?>" alt="">

                                            </li>
                                            <li>
                                                <div class="date">
                                                    <a href="<?php echo get_category_link($categoryId) ?>">
                                                    <i class="fa fa-bars dt-mr-2" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="catetag">
                                        <i class="fa fa-folder dt-mr-1" aria-hidden="true"></i>

                                        <a href="http://192.168.1.174/category/tutoriais/"
                                           rel="category tag"><?php echo $categoria->cat_name; ?></a>
                                    </div>
                                    <div class="content">
                                        <?php

                                        foreach ($posts as $post) {
                                        ?>

                                        <a href="<?php echo the_permalink($post->id) ?>"><?php echo substr(strtoupper($post->post_title), 0, 30) . '<br />'; ?></a>

                                          <?php
                                        }
                                            ?>


                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <?php


                }
                ?>

                <!--
                                <div style="width:100%" id="" class="dt-col-lg-4 wow fadeInUp"
                                     style="visibility: visible; animation-name: fadeInUp;">

                                    <div class="dt_post_block wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms"
                                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInUp;">
                                        <article id="post-204"
                                                 class="dt_post_item dt_posts--one dt-mb-4 post-204 post type-post status-publish format-standard hentry category-brother category-tutoriais">
                                            <div class="inner">
                                                <div class="meta">
                                                    <ul>
                                                        <li>
                                                            <div class="author">
                                                                <i class="fa fa-user-circle dt-mr-1" aria-hidden="true"></i>
                                                                <a href="http://192.168.1.174/author/gtronic/"><span>gtronic</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="date">
                                                                <i class="far fa-calendar-alt dt-mr-2" aria-hidden="true"></i>
                                                                dez, seg, 2023
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="catetag">
                                                    <i class="fa fa-folder dt-mr-1" aria-hidden="true"></i>
                                                    <a href="http://192.168.1.174/post-dos-tutoriais-brother/" rel="category tag"></a><a
                                                            href="http://192.168.1.174/category/tutoriais/brother/" rel="category tag">Brother</a>
                                                    , <a href="http://192.168.1.174/category/tutoriais/"
                                                         rel="category tag">Tutoriais</a>
                                                </div>
                                                <h4 class="title"><a href="http://192.168.1.174/post-dos-tutoriais-brother/"
                                                                     rel="bookmark">post dos tutoriais brother</a></h4>
                                                <div class="content">
                                                    <p>bla bla bla</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </section>
                </div>
                !-->

                <?php
                get_footer();
                ?>

