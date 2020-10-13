<footer>
    <div class="container d-flex justify-content-between align-items-center flex-column flex-sm-row">
        <p>
            © Mohamed Najiub - <?php echo date('Y'); ?>
        </p>

        <ul>
            <?php
                $social_media = array('github', 'linkedin', 'medium', 'twitter', 'facebook', 'instagram');
                foreach ($social_media as $link):
                    if(get_option($link)):
                ?>
            <li><a href="<?php echo get_option($link)?>"><i class="fab fa-<?php echo $link ?>"></i></a></li>
            <?php
                    endif;
                endforeach;
            ?>
        </ul>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>