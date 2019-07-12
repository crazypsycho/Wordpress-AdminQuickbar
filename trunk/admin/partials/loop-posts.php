<?php foreach ( $posts as $post ): ?>
    <?php
    $style = $this->getMarginStyle( $post, $postType, $lastParent, $margin );
    ?>
    <div class="admin-quickbar-post" <?php echo $style; ?>>
        <?php
        // echo thumb
        $this->renderThumb( $post );

        // echo post-title
        $this->renderPostTitle( $post );

        $postTypeInfo = $this->getPostTypeInfo( $postType, $post );
        ?>
        <div class="admin-quickbar-post-options">
            <a class="dashicons dashicons-edit"
                    href="<?php echo $postTypeInfo['link']; ?>&action=edit"
                    title="Go to WP-Editor"></a>


            <?php if ( defined( 'ELEMENTOR_VERSION' ) && !$postTypeInfo['noElementor'] ): ?>
                <a class="dashicons dashicons-elementor"
                        href="<?php echo $postTypeInfo['link']; ?>&action=elementor"
                        title="Go to Elementor"></a>
            <?php endif; ?>

            <?php if ( empty( $postTypeInfo['noView'] ) ): ?>
                <a class="dashicons dashicons-visibility"
                        href="<?php echo get_permalink( $post->ID ); ?>"
                        title="Go to Page"></a>
            <?php endif; ?>

        </div>
    </div>
<?php endforeach; ?>