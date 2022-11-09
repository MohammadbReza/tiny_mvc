<?php $this->include("panel.layouts.header"); ?>
                <form action="<?= $this->url('article/store/'); ?>" method="post">
                    <section class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="title ..." name="title">
                    </section>
                    <section class="form-group">
                        <label for="cat_id">Category</label>
                        <select class="form-control" id="cat_id" name="cat_id">
                            <?php foreach ($categories as $category) { ?>
                            <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
                            <?php } ?>
                        </select>
                    </section>
                    <section class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" id="body" name="body" rows="5" placeholder="body ..."></textarea>
                    </section>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>

            </section>
        </section>
    </section>
    <?php $this->include("panel.layouts.footer"); ?>
