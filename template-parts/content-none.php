<?php
/**
 * Template for no posts found
 * @package Aquila
 */

 ?>

 <section class="no-result not-found">
     <header class="page-header">
         <h1 class="page-title">
             <?php esc_html_e( 'No posts found', 'aquila' ) ?>
         </h1>
     </header>
     <div class="page-content">
         <?php
        if(is_home() && current_user_can('publish_posts')){
            ?>
            <p>
                <?php
                printf(
                    wp_kses( 
                        __('Ready to publish your first post?<a href="%s">Get Started Here</a>','aquila'),
                        [
                            'a' => [
                                'href' => []
                            ]
                        ]
                            ),
                            esc_url( admin_url('post-new.php') )
                )

                ?>
            </p>

            <?php
        } elseif(is_search()){
            ?>
            <p><?php esc_html_e('Sorry nothing was found. Try again!' ); ?></p>
            <?php
            get_search_form();
        }else{
            ?>
            <p><?php esc_html_e('Can\'t find what you are looking for. Try again!' ); ?></p>
            <?php
        }
        ?>
     </div>
 </section>