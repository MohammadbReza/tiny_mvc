<?php $this->include("panel.layouts.header"); ?>
                <form action="<?php $this->url('category/update/'.$category['id']); ?>" method="post" >
                    <section class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?= $category['name']; ?>">
                    </section>
                    <section class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="descraption" value="<?= $category['descraption']; ?>">
                    </section>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
<?php $this->include("panel.layouts.footer"); ?>