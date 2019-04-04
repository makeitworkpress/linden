<?php
/**
 * The template for displaying the footer.
 * 
 * The class located in classes/templates/header.php defines all variables below
 */
$footer = new Views\Footer(); 
?>
        </main>
        <!-- #main -->
        <?php if( ! $footer->properties['disable'] ) { ?> 
            <footer class="footer" id="footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
                <?php if($footer->properties['copyright']) { ?>
                    <div class="copyright">
                        &copy; 
                        <span itemprop="copyrightYear">
                            <?php echo date('Y') ?>
                        </span>
                        <span itemprop="copyrightHolder" itemscope="itemscope" itemtype="http://schema.org/<?php echo $footer->properties['scheme']; ?>">
                            <?php echo $footer->properties['copyright']; ?>
                        </span>
                    </div>       
                <?php } ?> 
            </footer><!-- #footer -->
        <?php } ?>
        <?php wp_footer(); ?>
    </body>
</html>