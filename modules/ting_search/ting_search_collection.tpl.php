<?php

/**
 * @file
 * Template to render a Ting collection of books.
 */
?>
  <li>
    <?php if ($picture): ?>
    <div class="picture">
      <?php print $picture; ?>
    </div>
    <?php endif; ?>

    <div class="record">
      <div class="types">
        <?php print $type_list; ?>
      </div>

      <?php if ($lang_code): ?>
        <h3 lang="<?php print $lang_code;?>">
      <?php else: ?>
        <h3>
      <?php endif ?>
        <?php print l($collection->title, $collection->url, array('attributes' => array('class' =>'title'))) ;?>
      </h3>

      <div class="meta">
        <?php if ($ting_creators) : ?>
          <span class="creator">
            <?php echo t('By %creator_name%', array('%creator_name%' => implode(', ', $ting_creators))) ?>
          </span>
        <?php endif; ?>
        <?php if ($ting_publication_date) : ?>
          <span class="publication_date">
            <?php echo t('(%publication_date%)', array('%publication_date%' => $ting_publication_date)) /* TODO: Improve date handling, localizations etc. */ ?>
          </span>
        <?php endif; ?>
      </div>

      <?php if (isset($ting_title_full)) { ?>
        <p class="title-info">
           <span class="label"><?php print t('Additional title information:')?></span>
          <?php print $ting_title_full; ?>
        </p>
      <?php }?>

      <?php if ($ting_abstract) : ?>
        <p class="abstract">
          <?php print $ting_abstract; ?>
        </p>
      <?php endif; ?>

      <div class="ting-details">
        <?php print $ting_details; ?>
      </div>

    </div>
  </li>

