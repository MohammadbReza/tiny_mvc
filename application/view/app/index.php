
<?php $this->include("app.layouts.header",['categories'=>$categories]); ?>
    <section class="container my-5">
        <!-- Example row of columns -->
        <section class="row">
            <section class="col-md-4">
                <?php foreach ($articles as $article) { ?>
                <h2><?= $article['title'] ?></h2>
                <p><?= substr($article['body'],0,25); ?></p>
                <p><a class="btn btn-primary" href="<?php $this->url('home/show/'.$article['id']); ?>" role="button">View details »</a></p>
            </section>
            <?php } ?>
        </section>
    </section>
    <?php $this->include("app.layouts.footer"); ?>