<?php get_header(); ?>

            <article id="vcard">
                <header>
                    <img class="avatar" src="http://www.gravatar.com/avatar/<?php echo md5('dries.vints@gmail.com'); ?>?s=85" alt="">
                    <h1><?php bloginfo('name'); ?></h1>
                    <h2><?php bloginfo('description'); ?></h2>
                </header>
                <div class="clear"></div>
                <p>
                    I&rsquo;m a <strong>web developer</strong> at <a href="http://www.volta.be">Volta Web</a> working mostly on <strong>Content Management Systems</strong> and <strong>web applications</strong>.
                </p>
                <p>
                    I also recently started working with <strong>iOS</strong>. Check out <strong>@</strong><a href="http://twitter.com/camoapp">CaMoApp</a>, a <a href="http://www.campaignmonitor.com">Campaign Monitor</a> client that I&rsquo;m building.
                </p>
            </article>

            <ul id="apps">
                <li>
                    <a href="http://twitter.com/driesvints"><img src="<?php bloginfo('template_url') ?>/img/icons/twitter.png" alt="@driesvints" width="66" height="66"></a>
                    <h3>@driesvints</h3>
                </li>
            </ul>

<?php get_footer(); ?>