<?php include 'header.php'; ?>
    <div class="row">
        <div class="column">
            <img src="<?php echo $site_index_image_back;?>" width="100%" class="_logo_desc">
            <img src="<?php echo $site_index_image_front;?>" width="250px" class="_logo_desc_overlap">

            <h5><a href=""><? echo $site_about_title; ?></a></h5>

            <small>
              <p>
                <? echo $site_name .', '. $site_about; ?>
                <? echo $site_about_2; ?>
              </p>
            </small>

            Sponsor

            <blockquote class="_feed_description">
                <p>
                    <em>
                        <a href="http://insanen.com" class="_readMore"> Insanen Solutions </a>
                    </em>
                </p>
            </blockquote>

            <hr />

            <?php
              include 'public/views/index-block-left-3-post.php';
            ?>

            <hr />

            <!-- <div id="subscribe">
            <script type="text/javascript" src="https://form.jotform.com/jsform/63585252612153"></script>
            </div> -->
        </div>

    </div>
<?php include 'footer.php'; ?>
