<?php
get_header();
$parentID = wp_get_post_parent_id(get_the_ID());
if ($parentID) $childOf = $parentID;
else $childOf = get_the_ID();
?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('assets/images/ocean.jpg') ?>"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
            <p>Learn how the school of your dreams got started.</p>
        </div>
    </div>
</div>

<div class="container container--narrow page-section">
    <!-- Breadcrum -->
    <?php if ($parentID) : ?>
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
                <a class="metabox__blog-home-link" href="<?= get_permalink($parentID); ?>">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    Back to <?= get_the_title($parentID); ?>
                </a>
                <span class="metabox__main"><?= the_title(); ?></span>
            </p>
        </div>
    <?php else : ?>
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
                <a class="metabox__blog-home-link" href="<?= site_url() ?>">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    Back To Homepage
                </a>
                <span class="metabox__main"><?= the_title(); ?></span>
            </p>
        </div>
    <?php endif; ?>

    <!-- Menu to child page -->
    <div class="page-links">
        <h2 class="page-links__title"><a href="<?= get_permalink($parentID); ?>"><?= get_the_title($parentID);?></a></h2>
        <ul class="min-list">
            <?=
            wp_list_pages([
                'title_li' => NULL,
                'child_of' => $childOf,
                'sort_column' => 'menu_order'
            ]);
            ?>
        </ul>
    </div>

    <div class="generic-content">
        <?php the_content(); ?>
    </div>
</div>

<!-- <div class="page-section page-section--beige">
        <div class="container container--narrow generic-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid
                possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis,
                consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias
                atque
                vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod
                sed.
            </p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid
                possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis,
                consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias
                atque
                vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod
                sed.
            </p>
        </div>
    </div>

    <div class="page-section page-section--white">
        <div class="container container--narrow">
            <h2 class="headline headline--medium">Biology Professors:</h2>

            <ul class="professor-cards">
                <li class="professor-card__list-item">
                    <a href="#" class="professor-card">
                        <img class="professor-card__image" src="images/barksalot.jpg" />
                        <span class="professor-card__name">Dr. Barksalot</span>
                    </a>
                </li>
                <li class="professor-card__list-item">
                    <a href="#" class="professor-card">
                        <img class="professor-card__image" src="images/meowsalot.jpg" />
                        <span class="professor-card__name">Dr. Meowsalot</span>
                    </a>
                </li>
            </ul>
            <hr class="section-break" />

            <div class="row group generic-content">
                <div class="one-third">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus
                        aliquid
                        possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit
                        nobis,
                        consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora
                        alias
                        atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea
                        veniam, ad
                        quod sed.</p>
                </div>

                <div class="one-third">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus
                        aliquid
                        possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit
                        nobis,
                        consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora
                        alias
                        atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea
                        veniam, ad
                        quod sed.</p>
                </div>

                <div class="one-third">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus
                        aliquid
                        possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit
                        nobis,
                        consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora
                        alias
                        atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea
                        veniam, ad
                        quod sed.</p>
                </div>
            </div>
        </div>
    </div> -->

<?= get_footer(); ?>