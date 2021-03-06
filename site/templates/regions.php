<? if(!isset($_GET['ajax'])) { snippet('_header'); } ?>
        <section>
            <header>
                <h1><?= smartypants($page->title()) ?></h1>
            </header>

<?          $items = $pages->findOpen()->children()->visible(); ?>
<?          if($items && $items->count()): ?>
<?              foreach($items as $item): ?>
<?              if($item->hasChildren()): // remove when all countries have routes ?>
                <h2><a href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a></h2>
<?              $regions = $item->children()->sortBy('title', 'asc'); ?>
                <ul class="regions listing">
<?                  foreach($regions as $region): ?>
                    <li><a href="<?= $region->url() ?>"><?= smartypants($region->title()) ?></a></li>
<?                  endforeach ?>
                </ul>
<?              endif // remove when all countries have routes ?>
<?              endforeach ?>
<?          endif ?>
        </section>
<? if(!isset($_GET['ajax'])) { snippet('_footer'); } ?>