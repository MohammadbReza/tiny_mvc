<?php $this->include("panel.layouts.header"); ?>
                <form action="<?php $this->url('category/store/') ?>" method="post">
                    <section class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="name ..." name="name">
                    </section>
                    <section class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" placeholder="description ..." name="descraption" >
                    </section>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>

            </section>
        </section>
    </section>
<?php $this->include("panel.layouts.footer"); ?>